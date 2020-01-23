<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://frontporchsolutions.com
 * @since      1.0.0
 *
 * @package    Fps_Sticky_Menu
 * @subpackage Fps_Sticky_Menu/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Fps_Sticky_Menu
 * @subpackage Fps_Sticky_Menu/includes
 * @author     Joel Bohorquez <joel@frontporchsolutions.com>
 */
class Fps_Sticky_Menu_Api
{

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct()
	{
		if (defined('FPS_STICKY_MENU_VERSION')) {
			$this->version = FPS_STICKY_MENU_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'fps-sticky-menu';
		$this->define_class_hooks();
	}

	public function register_api_routes()
	{
		// Let's create our custom REST API endpoints
		register_rest_route($this->plugin_name, '/options', array(
			'methods' => 'GET',
			'callback' => array($this, 'options'),
		));
	}

	public function options()
	{
		$output = [];
		$options = get_field('fps_sticky_menu_options', 'option');

		$output['options'] = $options;
		$output['menu_markup'] = $this->get_menu($options['menu']);

		return $output;
	}

	public function get_menu($menu_slug)
	{
		return	wp_nav_menu(array(
			'menu' => $menu_slug,
			'echo' => false,
		));
	}

	public static function localize_script($handler)
	{
		$data = array(
			'url' => get_rest_url(null, '/fps-sticky-menu/options'),
			'site_url' => get_site_url()
		);
		wp_localize_script($handler, 'fpsStickyMenuApi', $data);
	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_class_hooks()
	{
		add_action('rest_api_init', array($this, 'register_api_routes'));
	}


	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name()
	{
		return $this->plugin_name;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version()
	{
		return $this->version;
	}
}

new Fps_Sticky_Menu_Api();
