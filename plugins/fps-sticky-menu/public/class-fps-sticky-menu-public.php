<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://frontporchsolutions.com
 * @since      1.0.0
 *
 * @package    Fps_Sticky_Menu
 * @subpackage Fps_Sticky_Menu/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Fps_Sticky_Menu
 * @subpackage Fps_Sticky_Menu/public
 * @author     Joel Bohorquez <joel@frontporchsolutions.com>
 */
class Fps_Sticky_Menu_Public
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Fps_Sticky_Menu_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Fps_Sticky_Menu_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/fps-sticky-menu-public.css', array(), $this->version, 'all');
		wp_enqueue_style($this->plugin_name . '-mmenu', plugin_dir_url(__FILE__) . 'css/vendor/mmenu-light.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Fps_Sticky_Menu_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Fps_Sticky_Menu_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script($this->plugin_name . '-headroom', plugin_dir_url(__FILE__) . 'js/vendor/headroom.min.js', array('jquery'), $this->version, false);
		wp_enqueue_script($this->plugin_name . '-mmenu', plugin_dir_url(__FILE__) . 'js/vendor/mmenu-light.js');
		wp_enqueue_script('vuejs', 'https://cdn.jsdelivr.net/npm/vue@2.6.0', array('jquery'), $this->version, false);
		// Use the version below for debugging
		// wp_enqueue_script('vuejs', 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.9/vue.common.dev.js', array('jquery'), $this->version, false);
		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/fps-sticky-menu-public.js', array('jquery', 'vuejs'), $this->version, true);
		Fps_Sticky_Menu_Api::localize_script($this->plugin_name);
	}
}
