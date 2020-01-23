<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://frontporchsolutions.com
 * @since      1.0.0
 *
 * @package    Fps_Sticky_Menu
 * @subpackage Fps_Sticky_Menu/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Fps_Sticky_Menu
 * @subpackage Fps_Sticky_Menu/admin
 * @author     Joel Bohorquez <joel@frontporchsolutions.com>
 */
class Fps_Sticky_Menu_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->register_options_page();
		$this->register_acf_fields();

	}

	/**
	 * Register Options page for plugin
	 */

	public function register_options_page()
	{
		acf_add_options_sub_page(array(
			'page_title' 	=> 'FPS Sticky Menu Settings',
			'menu_title'	=> 'FPS Sticky Menu',
			'parent_slug'	=> 'options-general.php',
		));
	}

	public function register_acf_fields(){
		if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_5c8aad5b47d49',
			'title' => 'FPS Sticky Menu',
			'fields' => array(
				array(
					'key' => 'field_5c8ac6ad79098',
					'label' => 'Options',
					'name' => 'fps_sticky_menu_options',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5c8ac6ba79099',
							'label' => 'Enable?',
							'name' => 'is_enabled',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'message' => '',
							'default_value' => 0,
							'ui' => 1,
							'ui_on_text' => '',
							'ui_off_text' => '',
						),
						array(
							'key' => 'field_5c8ac6c57909a',
							'label' => 'Logo',
							'name' => 'logo',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_5c8ac6cb7909b',
							'label' => 'Set Menu Name',
							'name' => 'menu',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c8ac6d77909c',
							'label' => 'Button',
							'name' => 'button',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
						),
						array(
							'key' => 'field_5c8ac6da7909d',
							'label' => 'Button CTA',
							'name' => 'button_cta',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
						),
						array(
							'key' => 'field_5c8c11c10f0e7',
							'label' => 'Accent Color',
							'name' => 'accent_color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#e0711d',
						),
						array(
							'key' => 'field_5c8c11df0f0e8',
							'label' => 'Color',
							'name' => 'color',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#FFFFFF',
						),
						array(
							'key' => 'field_5c8c11f30f0e9',
							'label' => 'Background',
							'name' => 'background',
							'type' => 'color_picker',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#111111',
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-fps-sticky-menu',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
		));

		endif;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/fps-sticky-menu-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/fps-sticky-menu-admin.js', array( 'jquery' ), $this->version, false );

	}

}
