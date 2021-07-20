<?php
function fpsBaseTailwind__registerCTA() {

	/**
	 * Post Type: CTA'S.
	 */

	$labels = array(
		"name" => __( "CTA'S", "frontporchsolutions" ),
		"singular_name" => __( "CTA", "frontporchsolutions" ),
	);

	$args = array(
		"label" => __( "CTA'S", "frontporchsolutions" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "cta", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-sticky",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "cta", $args );
}

add_action( 'init', 'fpsBaseTailwind__registerCTA' );
