<<<<<<< HEAD
<?php
if (!function_exists('fpsBaseTailwind')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function fpsBaseTailwind()
    {
        /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on Inspect It First, use a find and replace
    * to change 'frontporchsolutions' to the name of your theme in all the template files.
    */
        load_theme_textdomain('fpsBaseTailwind', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
        add_theme_support('title-tag');

        /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
        add_theme_support('post-thumbnails');

        register_nav_menus(array(
            'menu-1' => esc_html__('Header', 'frontporchsolutions'),
            'menu-2' => esc_html__('Footer', 'frontporchsolutions'),
        ));

        /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
    }
endif;
add_action('after_setup_theme', 'fpsBaseTailwind');
=======
<?php
if (!function_exists('fpsBaseTailwind')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function fpsBaseTailwind()
    {
        /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on Inspect It First, use a find and replace
    * to change 'frontporchsolutions' to the name of your theme in all the template files.
    */
        load_theme_textdomain('fpsBaseTailwind', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
        add_theme_support('title-tag');

        /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
        add_theme_support('post-thumbnails');

        register_nav_menus(array(
            'menu-1' => esc_html__('Header', 'frontporchsolutions'),
            'menu-2' => esc_html__('Footer', 'frontporchsolutions'),
        ));

        /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
    }
endif;
add_action('after_setup_theme', 'fpsBaseTailwind');


// Disable Guteneberg

add_filter('use_block_editor_for_post', '__return_false');
>>>>>>> 2e681335b8ead145aa245f3a4d8e8666addd6625
