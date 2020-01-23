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
class Frontporchlogin_Admin {

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

		$this->added_custom_login_page();
		$this->custom_login_register_fields();

	}

	public function added_custom_login_page(){
		acf_add_options_page( array(
			'page_title' => 'Custom Login Settings',
			'menu_title' => 'Custom Login menu',
			'parent_slug' => 'options-general.php',

		));
	}


	public function custom_login_register_fields(){
		//begin call fields
			if( function_exists('acf_add_local_field_group') ):

				acf_add_local_field_group(array(
					'key' => 'group_5d128c2fe0260',
					'title' => 'Custom Login Fields',
					'fields' => array(
						array(
							'key' => 'field_5d1299ebe1d1a',
							'label' => 'Background',
							'name' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'left',
							'endpoint' => 1,
						),
						array(
							'key' => 'field_5d128c3890e07',
							'label' => 'Background Color',
							'name' => 'background_color',
							'type' => 'color_picker',
							'instructions' => 'Select the Background, almost always the main color of the site',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#333333',
						),
						array(
							'key' => 'field_5d12960b8c231',
							'label' => 'Color Links',
							'name' => 'color_links',
							'type' => 'color_picker',
							'instructions' => 'Select the color for the links',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '50',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#fff',
						),
						array(
							'key' => 'field_5d1296ca76373',
							'label' => 'Button',
							'name' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'left',
							'endpoint' => 0,
						),
						array(
							'key' => 'field_5d1296d476374',
							'label' => 'Background Button',
							'name' => 'background_button',
							'type' => 'color_picker',
							'instructions' => 'Select the Button Color, almost always the main color of the site',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '33',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#333333',
						),
						array(
							'key' => 'field_5d12981f31d1f',
							'label' => 'Background Button Hover',
							'name' => 'background_button_hover',
							'type' => 'color_picker',
							'instructions' => 'Select the Hover color, almost always the secondary color of the site',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '33',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
						),
						array(
							'key' => 'field_5d12987d9997b',
							'label' => 'Button Text Color',
							'name' => 'button_text_color',
							'type' => 'color_picker',
							'instructions' => 'Select the Text color, the default value is white',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '33',
								'class' => '',
								'id' => '',
							),
							'default_value' => '#ffffff',
						),
						array(
							'key' => 'field_5d136ba776c3c',
							'label' => 'Recaptcha',
							'name' => '',
							'type' => 'tab',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'placement' => 'left',
							'endpoint' => 0,
						),
						array(
							'key' => 'field_5d136bb876c3d',
							'label' => 'Recaptcha Key',
							'name' => 'recaptcha_key',
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
					),
					'location' => array(
						array(
							array(
								'param' => 'options_page',
								'operator' => '==',
								'value' => 'acf-options-custom-login-menu',
							),
						),
					),
					'menu_order' => 0,
					'position' => 'normal',
					'style' => 'default',
					'label_placement' => 'top',
					'instruction_placement' => 'label',
					'hide_on_screen' => '',
					'active' => true,
					'description' => '',
				));

				endif;

		//end call fields
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
		 * defined in Frontporchlogin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Frontporchlogin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/frontporchlogin-admin.css', array(), $this->version, 'all' );

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
		 * defined in Frontporchlogin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Frontporchlogin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/frontporchlogin-admin.js', array( 'jquery' ), $this->version, false );

	}

}


/**/
//Login Form Function
function custom_login_theme(){
	$GETlogo = get_field('logo_site','option');
	$logo_url = wp_get_attachment_url($GETlogo['id'], 'full');?>

     <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo $GETlogo['url']; ?>);
        }
		
		.login{
			background-color: <?php the_field( 'background_color', 'option' ); ?>;
		}

		#nav a, #backtoblog a {
	        color: <?php the_field( 'color_links', 'option' ); ?>!important;	 
	        opacity: 1;      
      	}

      	.wp-core-ui .button-primary, .wp-core-ui .button-primary:disabled, .wp-core-ui .button-primary[disabled] {
	    	background: <?php the_field( 'background_button', 'option' ); ?>;
	    	color:<?php the_field( 'button_text_color', 'option' ); ?>!important;
	    }

	    .wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover{
  			background: <?php the_field( 'background_button_hover', 'option' ); ?>
  		}

    </style>


<?php }
add_action('login_head', 'custom_login_theme');


function login_footer_login(){?>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<?php $key_captcha = get_field('recaptcha_key', 'option'); ?>
	<div class="g-recaptcha" data-sitekey="<?php echo $key_captcha; ?>"></div>
<?php 
}
add_action('login_form', 'login_footer_login');

//Added Styles Custom
function custom_login_styles(){
	$dir = plugin_dir_url( __FILE__ );
	wp_enqueue_style( 'custom-login', $dir . 'css/custom-login.css' );
	
}
add_action('login_enqueue_scripts', 'custom_login_styles');

//Change the url on logo
function custom_loginlogo_url($url) {
    return esc_url( get_bloginfo('url') );
}
add_filter( 'login_headerurl', 'custom_loginlogo_url' );











