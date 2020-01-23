<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://frontporchsolutions.com
 * @since      1.0.0
 *
 * @package    Fps_Sticky_Menu
 * @subpackage Fps_Sticky_Menu/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Fps_Sticky_Menu
 * @subpackage Fps_Sticky_Menu/includes
 * @author     Joel Bohorquez <joel@frontporchsolutions.com>
 */
class Fps_Sticky_Menu_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'fps-sticky-menu',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
