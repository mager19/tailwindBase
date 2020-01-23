<?php
/*
Plugin Name: MCs Sub Navigation
Plugin URI: http:/mousecrafters.com/
Description: Display your Sub Menus based on your page hierarchy
Author: Mousecrafters
Version: 1.1
Author URI: http://mousecrafters.com
*/


/*Enqueue needed scripts*/
function mcs_sub_menu_scripts(){
	wp_enqueue_style('mcs-sub-menu-css', plugin_dir_url( __FILE__ ).'src/mcs-sub-menus.css', null, '1.6', false);

	wp_enqueue_script('mcs-sub-menu-js', plugin_dir_url( __FILE__ ).'src/mcs-sm-scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'mcs_sub_menu_scripts');

/*Add custom title field*/
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_sub-menu-custom',
		'title' => 'Sub menu custom',
		'fields' => array (
			array (
				'key' => 'field_568401c325154',
				'label' => 'Custom Menu Title',
				'name' => 'custom_menu_title',
				'type' => 'text',
				'instructions' => 'By default, the item will show page\'s title. If you want to display something different, please use this field.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
/*Function*/
function subpages_menu(){
		global $post;
		$childrenn = get_pages('child_of='.$post->ID);
		$parentid = $post -> post_parent;
		//First Level
		if( count( $childrenn ) != 0 ) {
			$my_wp_query = new WP_Query();
			$pid = $post -> ID;
			$post_tt = get_post($pid);
			$parentpagetitle = $post_tt -> post_title;
			$all_wp_pages = $my_wp_query->query(array('post_type' => 'page','posts_per_page' => '-1', 'orderby' => 'meta_value', 'order' => 'ASC', 'post_parent' => $pid));
				echo '<nav class="page-sub-nav-wrap"><div class="page-sub-nav"><span class="sub-menu-title">More in This Section  </span><div class="sub-items">';
				if (get_field('custom_menu_title')) {
				echo '<a href="'.get_permalink().'">'.get_field('custom_menu_title').'</a>';
				} else {
				echo '<a href="'.get_permalink().'">'.get_the_title().'</a>';
				}
		$children = get_page_children($pid, $all_wp_pages);
		$lnk = get_permalink($pid);
				//Second Level Pages

				foreach ($children as $child) {
					$custom = get_field('custom_menu_title', $child->ID);
					$notin = get_field('dont_include', $child->ID);
					if ( $notin != '1') {
						if ($custom){
						echo '<a href="'.$lnk.$child->post_name.'">'.$custom.'</a>';
						} else {
						echo '<a href="'.$lnk.$child->post_name.'">'.$child -> post_title.'</a>';
						}
					}
				}
				echo '</div><div class="trigger-wrap"><a href="#" class="btn radius xsmall red outline" id="page-nav-trigger">Show More  <i class="fa fa-angle-down"></i></a></div></div><div class="clearfix"></div></nav>';


		} else {


		//Second Level
			if (is_page() && $post->post_parent ){
				$parentid = $post -> post_parent;
				$my_wp_query = new WP_Query(array('post_type' => 'page','posts_per_page' => '-1', 'post_parent' => $parentid, 'orderby' => 'name', 'order' => 'ASC'));
				$post_tt = get_post($parentid);
				$parentpagetitle = $post_tt -> post_title;
				$parentslug = get_permalink($parentid);
				$custom = get_field('custom_menu_title', $parentid);

				echo '<nav class="page-sub-nav-wrap"><div class="page-sub-nav"><span class="sub-menu-title">More in this section:</span><div class="sub-items">
				<a href="'.$parentslug.'"> <i class="fa fa-angle-left"></i> Back to ';
				if ($custom) {
					echo $custom.'</a>';
				} else {
					echo $parentpagetitle.'</a>';
				}

				while($my_wp_query -> have_posts()) : $my_wp_query -> the_post();
				$customt = get_field('custom_menu_title');
				$notin = get_field('dont_include');
				if ( $notin != '1') {
					if ($customt) {
					echo '<a href="'.get_permalink().'">'.$customt.'</a>';

					} else {
					echo '<a href="'.get_permalink().'">'.get_the_title().'</a>';
					}
				}
				endwhile;
				echo '</div><div class="trigger-wrap"><a href="#" class="btn radius xsmall red outline" id="page-nav-trigger">Show More  <i class="fa fa-angle-down"></i></a></div></div><div class="clearfix"></div></nav>';

			} else {
				echo '';
			}


		 }

		wp_reset_query();
}


?>
