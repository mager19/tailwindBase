<?php
function fpsBase_scripts()
{
	wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,500,700');
	wp_enqueue_style('google-font-icon', 'https://fonts.googleapis.com/icon?family=Material+Icons');
	wp_enqueue_style('main', get_template_directory_uri() . '/css/tailwind.css', null, '1.0', false);
	wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/js/fpsBase.js', array('jquery'), '0.1', true);
}
add_action('wp_enqueue_scripts', 'fpsBase_scripts');
