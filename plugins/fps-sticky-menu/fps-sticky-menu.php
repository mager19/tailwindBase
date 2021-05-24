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
 * @package           Fps_Sticky_Menu
 *
 * @wordpress-plugin
 * Plugin Name:       FPS Sticky Menu
 * Plugin URI:        http://frontporchsolutions.com
 * Description:       Quickly add a Sticky Menu to any site that works with ACF
 * Version:           1.6.25
 * Author:            Joel Bohorquez
 * Author URI:        http://frontporchsolutions.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fps-sticky-menu
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
define('FPS_STICKY_MENU_VERSION', '1.6.25');

define('FPS_STICKY_MENU__FILE__', __FILE__);
define('FPS_STICKY_MENU__DIR__', __DIR__);

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fps-sticky-menu-activator.php
 */
function activate_fps_sticky_menu()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-fps-sticky-menu-activator.php';
	Fps_Sticky_Menu_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fps-sticky-menu-deactivator.php
 */
function deactivate_fps_sticky_menu()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-fps-sticky-menu-deactivator.php';
	Fps_Sticky_Menu_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_fps_sticky_menu');
register_deactivation_hook(__FILE__, 'deactivate_fps_sticky_menu');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-fps-sticky-menu.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fps_sticky_menu()
{

	$plugin = new Fps_Sticky_Menu();
	$plugin->run();
}
run_fps_sticky_menu();
