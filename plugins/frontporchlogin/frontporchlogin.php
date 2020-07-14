<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.frontporchsolutions.com/
 * @since             1.0.0
 * @package           Frontporchlogin
 *
 * @wordpress-plugin
 * Plugin Name:       FPS Custom Login
 * Plugin URI:        frontporchsolutions.com
 * Description:       Allows site admins to tweak the login’s settings, color schemes and logo preview (only works in FPS company).
 * Version:           2.0.9
 * Author:            frontporchsolutions
 * Author URI:        frontporchsolutions.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       frontporchlogin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FRONTPORCHLOGIN_VERSION', '2.0.9' );

//plugin-update-checker

require_once plugin_dir_path(__FILE__) . 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://bitbucket.org/fps-dev/frontporchlogin/',
	__FILE__,
	'FrontPorchLogin'
);

//Optional: If you're using a private repository, create an OAuth consumer
//and set the authentication credentials like this:
//Note: For now you need to check "This is a private consumer" when
//creating the consumer to work around #134:
// https://github.com/YahnisElsts/plugin-update-checker/issues/134
$myUpdateChecker->setAuthentication(array(
	'consumer_key' => 'Eh7XQ4v4RCtpwUUj59',
	'consumer_secret' => 'mkMCtmjWB7eWA9DEbagRT2suY6vzfcTx',
));

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-frontporchlogin-activator.php
 */
function activate_frontporchlogin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-frontporchlogin-activator.php';
	Frontporchlogin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-frontporchlogin-deactivator.php
 */
function deactivate_frontporchlogin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-frontporchlogin-deactivator.php';
	Frontporchlogin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_frontporchlogin' );
register_deactivation_hook( __FILE__, 'deactivate_frontporchlogin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-frontporchlogin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_frontporchlogin() {

	$plugin = new Frontporchlogin();
	$plugin->run();

}
run_frontporchlogin();
