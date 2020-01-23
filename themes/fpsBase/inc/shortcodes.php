<?php
function FPSBase_buttons($atts, $content = null){
	return '<a class="btn '.$atts["color"].' '.$atts["style"].' '.$atts["size"].'" href="'.$atts["link"].'" target="'.$atts["target"].'">'.$content.'</a>';
}
add_shortcode('button', 'FPSBase_buttons');

//Actual Year
function FPSBase_displaydate(){
    return date('Y');
}
add_shortcode('date', 'FPSBase_displaydate');
?>
