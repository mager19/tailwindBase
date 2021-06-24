<?php
function fpsBaseTailwind_scripts()
{
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap');
    wp_enqueue_style('google-font-icon', 'https://fonts.googleapis.com/icon?family=Material+Icons');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/dist/css/app.css', null, '1.0', false);
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/dist/js/app.js', array('jquery'), '0.1', true);
}
add_action('wp_enqueue_scripts', 'fpsBaseTailwind_scripts');
