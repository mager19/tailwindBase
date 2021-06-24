<?php
function fpsBaseTailwind_buttons($atts, $content = null)
{
    return '<a class="btn ' . $atts["color"] . ' ' . $atts["style"] . ' ' . $atts["size"] . '" href="' . $atts["link"] . '" target="' . $atts["target"] . '">' . $content . '</a>';
}
add_shortcode('button', 'fpsBaseTailwind_buttons');

//Actual Year
function fpsBaseTailwind_displaydate()
{
    return date('Y');
}
add_shortcode('date', 'fpsBaseTailwind_displaydate');
