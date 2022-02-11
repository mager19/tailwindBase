<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       frontporchsolutions.com
 * @since      1.0.0
 *
 * @package    Frontporchlogin
 * @subpackage Frontporchlogin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Frontporchlogin
 * @subpackage Frontporchlogin/admin
 * @author     frontporch <mario@frontporchsolutions.com>
 */
class Frontporchlogin_Admin
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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->added_custom_login_page();
		$this->custom_login_register_fields();
	}

	public function added_custom_login_page()
	{
		acf_add_options_page(array(
			'page_title' => 'FPS Custom Login',
			'menu_title' => 'FPS Custom Login',
			'parent_slug' => 'options-general.php',

		));
	}


	public function custom_login_register_fields()
	{
		//begin call fields
		if (function_exists('acf_add_local_field_group')) :

			if (is_multisite()) {
				acf_add_local_field_group(array(
					'key' => 'group_5e8c991d24064',
					'title' => 'Note.',
					'fields' => array(
						array(
							'key' => 'field_5e8c99204d239',
							'label' => 'Note.',
							'name' => '',
							'type' => 'message',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'message' => 'These changes will be to applied all Locations site, If you want to change any attribute specifically on one location, go to it and make the update.',
							'new_lines' => 'wpautop',
							'esc_html' => 0,
						),
					),
					'location' => array(
						array(
							array(
								'param' => 'options_page',
								'operator' => '==',
								'value' => 'acf-options-fps-custom-login',
							),
						),
					),
					'menu_order' => 0,
					'position' => 'normal',
					'style' => 'seamless',
					'label_placement' => 'top',
					'instruction_placement' => 'label',
					'hide_on_screen' => '',
					'active' => true,
					'description' => '',
				));
			}

			acf_add_local_field_group(array(
				'key' => 'group_5d128c2fe0262',
				'title' => 'Custom Login Fields',
				'fields' => array(
					array(
						'key' => 'field_5e863ccf2b314',
						'label' => 'Customize WordPress Login',
						'name' => '',
						'type' => 'message',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'message' => '<i style="opacity: .8;">Style the Login page by adding your logo and customizing color.</i>',
						'new_lines' => 'wpautop',
						'esc_html' => 0,
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'options_page',
							'operator' => '==',
							'value' => 'acf-options-fps-custom-login',
						),
					),
				),
				'menu_order' => 1,
				'position' => 'normal',
				'style' => 'seamless',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));

			//This group helps to Styling the WordPress Login (colors, backgrounds)
			$blog_id = get_current_blog_id();
			if (1 == $blog_id) {
				acf_add_local_field_group(array(
					'key' => 'group_5d128c2fe0260',
					'title' => 'Set Main Colors',
					'fields' => array(
						array(
							'key' => 'field_5d128c3890e07',
							'label' => 'Body Background',
							'name' => 'background_color',
							'type' => 'color_picker',
							'instructions' => 'Recommended: White (#fff)',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '20',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#ffffff',
						),
						array(
							'key' => 'field_5d12960b8c231',
							'label' => 'Links Color',
							'name' => 'color_links',
							'type' => 'color_picker',
							'instructions' => '(Lost Password, Back to Main Page, Privacy Policy Links)',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '30',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#333333',
						),
						array(
							'key' => 'field_5d1296d476374',
							'label' => 'Button Background',
							'name' => 'background_button',
							'type' => 'color_picker',
							'instructions' => 'Usually your site&#39;s/brand primary color',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '25',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#444444',
						),
						array(
							'key' => 'field_5d12987d9997b',
							'label' => 'Button Color',
							'name' => 'button_text_color',
							'type' => 'color_picker',
							'instructions' => 'Default: White (#fff).',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '25',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#ffffff',
						),
					),
					'location' => array(
						array(
							array(
								'param' => 'options_page',
								'operator' => '==',
								'value' => 'acf-options-fps-custom-login',
							),
						),
					),
					'menu_order' => 4,
					'position' => 'normal',
					'style' => '',
					'label_placement' => 'top',
					'instruction_placement' => 'label',
					'hide_on_screen' => '',
					'active' => true,
					'description' => '',
				));
			}

			acf_add_local_field_group(array(
				'key' => 'group_5e863cc2df3e5',
				'title' => 'Login Page Customization',
				'fields' => array(
					array(
						'key' => 'field_5e863ce32b315',
						'label' => 'Logo',
						'name' => 'image_preview_logo',
						'type' => 'image',
						'instructions' => 'Upload your logo to replace WP logo by your own.',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '30',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'id',
						'preview_size' => 'medium',
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
						'key' => 'field_5e86656f0f84b',
						'label' => 'Background Image',
						'name' => 'image_preview_bg',
						'type' => 'image',
						'instructions' => 'Upload an image to show as login background, this will replace your solid color background if uploaded.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '60',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'url',
						'preview_size' => 'medium',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'options_page',
							'operator' => '==',
							'value' => 'acf-options-fps-custom-login',
						),
					),
				),
				'menu_order' => 2,
				'position' => 'normal',
				'style' => '',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));

			//This group helps to Styling the WordPress Login (colors, backgrounds)
			$blog_id = get_current_blog_id();
			if (1 == $blog_id) {
				acf_add_local_field_group(array(
					'key' => 'group_5e863cc2df3e7',
					'title' => 'Favicon',
					'fields' => array(
						array(
							'key' => 'field_5e86656f0f849',
							'label' => 'Favicon Image',
							'name' => 'favicon_preview',
							'type' => 'image',
							'instructions' => 'Upload an image to show as Favicon, this will add to WordPress admin and login page respectively.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '30',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						)
					),
					'location' => array(
						array(
							array(
								'param' => 'options_page',
								'operator' => '==',
								'value' => 'acf-options-fps-custom-login',
							),
						),
					),
					'menu_order' => 3,
					'position' => 'normal',
					'style' => '',
					'label_placement' => 'top',
					'instruction_placement' => 'label',
					'hide_on_screen' => '',
					'active' => true,
					'description' => '',
				));
			}

			acf_add_local_field_group(array(
				'key' => 'group_5e973f456ff52',
				'title' => 'Form Position',
				'fields' => array(
					array(
						'key' => 'field_5e973f677104e',
						'label' => 'Set your desired form position',
						'name' => 'position_form',
						'type' => 'radio',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array(
							'left' => 'Left',
							'right' => 'Right',
							'center' => 'Center (Default)',
						),
						'allow_null' => 0,
						'other_choice' => 0,
						'default_value' => 'center',
						'layout' => 'horizontal',
						'return_format' => 'value',
						'save_other_choice' => 0,
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'options_page',
							'operator' => '==',
							'value' => 'acf-options-fps-custom-login',
						),
					),
				),
				'menu_order' => 5,
				'position' => 'normal',
				'style' => '',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			));

			$blog_id = get_current_blog_id();
			if (1 == $blog_id) {
				acf_add_local_field_group(array(
					'key' => 'group_5e863cc2df3e6',
					'title' => 'Enable reCAPTCHA (optional)',
					'fields' => array(
						array(
							'key' => 'field_5d136bb876c3d',
							'label' => 'reCAPTCHA Key',
							'name' => 'recaptcha_key',
							'type' => 'text',
							'instructions' => 'This is optional if you are not using Wordference Plugin to custom reCAPTCHA',
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
					),
					'location' => array(
						array(
							array(
								'param' => 'options_page',
								'operator' => '==',
								'value' => 'acf-options-fps-custom-login',
							),
						),
					),
					'menu_order' => 6,
					'position' => 'normal',
					'style' => '',
					'label_placement' => 'top',
					'instruction_placement' => 'label',
					'hide_on_screen' => '',
					'active' => true,
					'description' => '',
				));
			}

		endif;

		//end call fields
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Frontporchlogin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Frontporchlogin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/frontporchlogin-public.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Frontporchlogin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Frontporchlogin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/frontporchlogin-admin.js', array('jquery'), $this->version, false);
	}
}


/**/
//Login Form Function
function custom_login_theme()
{

	echo '<link rel="shortcut icon" href="' . get_field('favicon_preview', 'options') . '" />';

	//selecting the URL Logo for loading on WordPredd Login.
	if (get_field('image_preview_logo', 'option')) {
		$logo_url = wp_get_attachment_image_url(get_field('image_preview_logo', 'option'), 'medium');
	} else {
		if (get_field('logo_site', 'option')) {
			$logo_ID = get_field('logo_site', 'option');
			$logo_ID = $logo_ID['ID'];
		}
		if (get_field('site_logo', 'option')) {
			$logo_ID = get_field('site_logo', 'option');
			$logo_ID = $logo_ID['ID'];
		}
		$logo_url = wp_get_attachment_image_url($logo_ID, 'medium');
	}


	//these lines are helping to customize the styles selected previous on Backend.
	echo '<style type="text/css">
			body.login div#login h1 a {
				background-image: url(' . esc_url($logo_url) . ') !important;
			}
			body.login div#login form#loginform p.submit .button,
			body.login div#login form#loginform p.submit .button-primary:hover,
			body.login div#login form#loginform p.submit .button-primary:active,
			body.login div#login form#loginform p.submit .button-primary:focus,
			body.login div#login form#lostpasswordform p.submit .button{
				background-color: ' . get_field('background_button', 'options') . ';
				border-color: ' . get_field('background_button', 'options') . ';
				color: ' . get_field('button_text_color', 'options') . ';
			}
			body.login div#login form .wp-core-ui .button-primary:disabled,
			body.login div#login form .wp-core-ui .button-primary[disabled]{
				background-color: ' . get_field('background_button', 'options') . ' !important;
				border-color: ' . get_field('background_button', 'options') . ' !important;
				color: ' . get_field('button_text_color', 'options') . ' !important;
			}
			body.login div#login form#loginform input#user_pass:focus,
			body.login div#login form#loginform input#user_login:focus,
			body.login div#login form#lostpasswordform input#user_login:focus{
				outline: 1px solid ' . get_field('background_button', 'options') . ';
			}';
	if (get_field('color_links', 'options')) {
		echo '
					body.login div#login p#nav a,
					body.login div#login p#backtoblog a,
					body.login div#login .privacy-policy-page-link a{
						color: ' . get_field('color_links', 'options') . ';
					}
					body.login div#login p#nav a:hover,
					body.login div#login p#backtoblog a:hover,
					body.login div#login .privacy-policy-page-link a:hover{
						color: ' . get_field('color_links', 'options') . ';
					}
				';
	}

	if (get_field('position_form', 'options') == 'left') {
		echo '
					body.login div#login{
						margin-left: 10%;
					}
				';
	} elseif (get_field('position_form', 'options') == 'right') {
		echo '
					body.login div#login{
						margin-right: 10%;
					}
				';
	}

	if (get_field('image_preview_bg', 'options')) {
		echo '
					body.login{
						background-image: url("' . get_field('image_preview_bg', 'options') . '");
						background-size: cover;
						background-repeat: no-repeat;
						background-position: center;
					}
				';
	} elseif (get_field('background_color', 'options')) {
		echo '
					body.login{
						background: ' . get_field('background_color', 'options') . ' !important;
					}
				';
	}
	echo '
		</style>';
}
add_action('login_head', 'custom_login_theme');

/**
 * This function helps to Styling a Multisite WordPress Login.
 */
function fps_multisite()
{
	if (is_multisite()) {
		switch_to_blog(1);
		custom_login_theme();
		echo '<link rel="shortcut icon" href="' .  get_field('favicon_preview', 'options') . '" />';
		restore_current_blog();

		if (get_field('image_preview_logo', 'option')) {
			echo '
			<style type="text/css">
				body.login div#login h1 a {
					background-image: url(' . esc_url(wp_get_attachment_image_url(get_field('image_preview_logo', 'option'), 'medium')) . ') !important;
				}
				';
			if (get_field('image_preview_bg', 'options')) {
				echo ' 
					body.login{
						background-image: url("' . get_field('image_preview_bg', 'options') . '") !important;
						background-size: cover !important;
						background-repeat: no-repeat !important;
						background-position: center !important;
					}';
			}
			echo '</style>';
		}
	}
}
add_action('login_head', 'fps_multisite');


/**
 * This function helps to add favicon to WordPress admin and login page respectively.
 */
function add_site_favicon()
{
	$get_favicon = '<link rel="shortcut icon" href="' .  get_field('favicon_preview', 'options') . '" />';
	if (is_multisite()) {
		switch_to_blog(1);
		$favicon =  get_field('favicon_preview', 'options');
		if (is_numeric($favicon)) {
			echo '<link rel="shortcut icon" href="' .  esc_url(wp_get_attachment_image_url(get_field('favicon_preview', 'options'))) . '" />';
		} else {
			echo $get_favicon;
		}
		restore_current_blog();
	} else {
		echo $get_favicon;
	}
}
add_action('admin_head', 'add_site_favicon');


/**
 * Embedded style sheet
 */
function custom_login_styles(){
	$dir = plugin_dir_url(__FILE__);
	wp_enqueue_style('custom-login', $dir . 'css/frontporchlogin-custom-login.css', array(), '1.2', 'all' );
}
add_action('login_enqueue_scripts', 'custom_login_styles');


/**
 * Change the Login URL
 */
function custom_loginlogo_url($url)
{
	return esc_url(get_bloginfo('url'));
}
add_filter('login_headerurl', 'custom_loginlogo_url');


/**
 * In case recaptcha key has been added
 */
function login_footer_login()
{ ?>
	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit&hl={{app.request.locale|default(defaultLang) }}" async defer></script>
	<?php $key_captcha = get_field('recaptcha_key', 'option'); ?>
	<div class="g-recaptcha" data-sitekey="<?php echo $key_captcha; ?>"></div>
<?php
}
add_action('login_form', 'login_footer_login');


/**
 * Embedded style sheet
 */
function fps_footer()
{
	echo '<div class="fps-login-footer">
	Made with <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#E86969" width="15px" height="15px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg> by the team at <a href="https://www.frontporchsolutions.com/?utm_source=website&utm_medium=login&utm_campaign=client-login" target="_blank" rel="nofollow"> Front Porch Solutions</a></div>';
}
add_action('login_footer', 'fps_footer');
