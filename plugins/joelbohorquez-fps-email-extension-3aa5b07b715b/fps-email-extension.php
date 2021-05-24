<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://frontporchsolutions.com
 * @since             1.0.0
 * @package           Fps_Email_Extension
 *
 * @wordpress-plugin
 * Plugin Name:       FPS Email Template Extension
 * Plugin URI:        http://frontporchsolutions.com
 * Description:       Wraps all outgoing emails with an HTML template
 * Version:           1.5.2
 * Author:            Joel Bohorquez
 * Author URI:        http://frontporchsolutions.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fps-email-extension
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('FPS_EMAIL_EXTENSION', '1.5.2');

require_once plugin_dir_path(__FILE__) . 'includes/plugin-update-checker/plugin-update-checker.php';

$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://bitbucket.org/joelbohorquez/fps-email-extension',
    __FILE__,
    'fps-email-extension'
);

//Optional: If you're using a private repository, create an OAuth consumer
//and set the authentication credentials like this:
//Note: For now you need to check "This is a private consumer" when
//creating the consumer to work around #134:
// https://github.com/YahnisElsts/plugin-update-checker/issues/134
$myUpdateChecker->setAuthentication(array(
    'consumer_key' => 'kYdrsttZMGewWG9hEd',
    'consumer_secret' => 'gQYrY4qyDM3cmtJ6fmVhBqEXfQJBebET',
));

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');

function fps_email_template_extension_load()
{
    if (is_multisite()) {
    } else {
        if (in_array('htmlemail/htmlemail.php', apply_filters('active_plugins', get_option('active_plugins')))) {

            function sample_admin_notice__error()
            {
                $class = 'notice notice-error';
                $message = __('WARNING: Please, make sure you have <strong>Uninstalled</strong> <a href="http://drop.frontporchsolutions.com/b5LmXd" target="_blank">HTML Email Templates Plugin</a> before activating plugin.');

                printf('<div class="' . $class . '"><p>' . $message . '</p></div>');
            }
            add_action('admin_notices', 'sample_admin_notice__error');
            add_action('admin_init', 'fps_email_template_deactivate');
        } else {
            require_once plugin_dir_path(__FILE__) . 'includes/htmlemail/htmlemail.php';
        }
    }
}

function fps_email_template_deactivate()
{
    deactivate_plugins('htmlemail/htmlemail.php');
    deactivate_plugins(__FILE__);
}

function fps_remove_email_template_options()
{
    remove_submenu_page('options-general.php', 'html-template');
}

function fps_email_extension_page()
{
    add_submenu_page(
        'options-general.php',
        'HTML Email Template',
        'HTML Email Template',
        'manage_options',
        'html-template-extension',
        'fps_email_extension_page_callback'
    );
}

function fps_email_extension_page_callback()
{
    wp_localize_script('wp-api', 'wpApiSettings', array(
        'root' => esc_url_raw(rest_url()),
        'nonce' => wp_create_nonce('wp_rest')
    ));

    wp_enqueue_media();

    echo '<div id="app"></div>';
}

function fps_email_extension_scripts($hook)
{
    // Load only on ?page=html-template-extension
    if ($hook != 'settings_page_html-template-extension') {
        return;
    }
    wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');

    // Development Enviroment
    // wp_enqueue_script('fps-email-extension-app--development', 'http://localhost:8080/app.js', array( 'jquery', 'wp-api' ), false, true);

    // Production Build
    wp_enqueue_style('fps-email-extension-app-vendors--production', plugins_url('html-email-extension-app/dist/css/chunk-vendors.f9432243.css', __FILE__));
    wp_enqueue_style('fps-email-extension-app--production', plugins_url('html-email-extension-app/dist/css/app.61f41914.css', __FILE__));

    wp_enqueue_script('fps-email-extension-app-vendors--production', plugins_url('html-email-extension-app/dist/js/chunk-vendors.cac87f8a.js', __FILE__), array('jquery', 'wp-api'), false, true);
    wp_enqueue_script('fps-email-extension-app--production', plugins_url('html-email-extension-app/dist/js/app.ad5e8f92.js', __FILE__), array('jquery', 'wp-api'), false, true);
}
add_action('admin_enqueue_scripts', 'fps_email_extension_scripts');


function fps_email_extension_register_api_routes()
{
    // Let's create our custom REST API endpoints

    register_rest_route('fps-email-extension/v1', '/options', array(
        'methods' => 'GET',
        'callback' => 'fps_email_extension_api_get_options',
        'permission_callback' => 'fps_email_extension_is_admin',
    ));

    register_rest_route('fps-email-extension/v1', '/options', array(
        'methods' => 'POST',
        'callback' => 'fps_email_extension_api_set_options',
        'permission_callback' => 'fps_email_extension_is_admin'
    ));
}


function fps_email_extension_is_admin()
{
    // Restrict endpoint to only users who have the edit_posts capability.
    if (!current_user_can('edit_posts')) {
        return new WP_Error('rest_forbidden', esc_html__('OMG you can not view private data.', 'my-text-domain'), array('status' => 401));
    }

    // This is a black-listing approach. You could alternatively do this via white-listing, by returning false here and changing the permissions check.
    return true;
}

function fps_email_extension_api_get_options(WP_REST_Request $request)
{
    // Define our empty array that will contain our options.
    $output = [];
    $output['logo'] = get_option('fps_email_extension_logo');
    $output['footer']      = get_option('fps_email_extension_footer');
    $output['color']      = get_option('fps_email_extension_color');

    // Assign 0 when It's false, 1 when it's true for $modifyHTML var.
    if (get_option('modify_html_email') == 0) {
        $output['modifyHTML']  = false;
    } elseif (get_option('modify_html_email') == 1) {
        $output['modifyHTML']  = true;
    }

    $output['html'] = get_option('html_template');

    // Print our options to REST API.
    return $output;
}

function fps_email_extension_api_set_options(WP_REST_Request $request)
{
    // Receive body params from HTTP request
    $parameters = $request->get_body_params();

    // Assign parameters to vars.

    $logo = $parameters['logo'];
    // sanitize input
    if (!is_array($logo)) {
        $logo = [];
    }

    $footer = $parameters['footer'];
    // sanitize input
    $footer = htmlspecialchars($footer, ENT_QUOTES);

    $color = $parameters['color'];
    // sanitize input
    $color = sanitize_hex_color($color);

    $modifyHTML = $parameters['modifyHTML'];
    // Assign 0 when It's false, 1 when it's true for $modifyHTML var.
    if ($modifyHTML == "false") {
        $modifyHTML = 0;
    } elseif ($modifyHTML == "true") {
        $modifyHTML = 1;
    }

    // Now let's update options
    update_option('fps_email_extension_logo', $logo);
    update_option('fps_email_extension_footer', $footer);
    update_option('fps_email_extension_color', $color);
    update_option('modify_html_email', $modifyHTML);

    // Let's set logo, footer, color on HTML Template
    fps_email_extension_set_html();

    // Delete cache just to make sure API will retreive updated options.
    wp_cache_delete('alloptions', 'options');
}

function fps_email_extension_set_html()
{
    // The following function will open HTML template, set logo, footer and color, then It will update_option('html_template')

    // Let's open our template.html
    $filename = plugin_dir_path(__FILE__) . 'template.html';

    // Let's read it
    $handle = fopen($filename, "r");
    $htmlTemplate = fread($handle, filesize($filename));

    // Let's escape it.
    $template = stripslashes($htmlTemplate);

    // Collect our options into variables.
    $logo = get_option('fps_email_extension_logo');
    $footer = get_option('fps_email_extension_footer');
    $color = get_option('fps_email_extension_color');

    // Check if our template has {LOGO} string
    if (is_array($logo)) {
        $logoURL = $logo['url'];
        $logoWidth = $logo['width'] / 2;
        $logoHeight = $logo['height'] / 2;

        $logo = '<img align="center" alt="" src="' . $logoURL . '" width="' . $logoWidth . '" style="padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnRetinaImage">';

        if (strpos($template, '{LOGO}') !== false) {
            $template = str_replace('{LOGO}', $logo, $template);
        }
    }

    // Check if our template has {FOOTER} string
    if (strpos($template, '{FOOTER}') !== false) {
        // We replace {FOOTER} w/ our option field.
        $template = str_replace('{FOOTER}', $footer, $template);

        // Then we check if our {FOOTER} string has the string {YEAR}
        if (strpos($template, '{YEAR}') !== false) {
            // We replace {YEAR} for server date
            $template = str_replace('{YEAR}', date('Y'), $template);
        }

        // Then we check if our {FOOTER} string has the string {WP_TITLE}
        if (strpos($template, '{WP_TITLE}') !== false) {
            // We replace {WP_TITLE} for site name.
            $template = str_replace('{WP_TITLE}', get_bloginfo('name'), $template);
        }
    }

    // Check if our template has {COLOR} string
    if (strpos($template, '{COLOR}') !== false) {
        // We Replace {COLOR} in our template.
        $template = str_replace('{COLOR}', $color, $template);
    }

    // Let's clean a little our HTML Template
    if (strpos($template, '<title>*|MC:SUBJECT|*</title>') !== false) {
        // Replace string in our template
        $template = str_replace('<title>*|MC:SUBJECT|*</title>', '', $template);
    }

    // Let's clean a little our HTML Template
    if (strpos($template, '*|MC_PREVIEW_TEXT|*') !== false) {
        // Replace string in our template
        $template = str_replace('*|MC_PREVIEW_TEXT|*', '', $template);
    }

    // Now that we did the replacements, finally we have our $template ready to be updated.
    update_option('html_template', $template);
}

function run_fps_email_extension()
{
    add_action('plugins_loaded', 'fps_email_template_extension_load');

    add_option('fps_email_extension_logo');
    add_option('fps_email_extension_footer', '© {WP_TITLE}');
    add_option('fps_email_extension_color', '#000000');

    add_action('rest_api_init', 'fps_email_extension_register_api_routes');
    add_action('admin_menu', 'fps_email_extension_page');
    add_action('admin_menu', 'fps_remove_email_template_options', 999);
}
run_fps_email_extension();
