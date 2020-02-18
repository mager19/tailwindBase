<?php
	//Add page number to Yoast meta description and page titles to avoid duplication (when using customised titles/descriptions)
	if ( ! function_exists( 'cvw_add_page_number' ) )
	{
	    function cvw_add_page_number( $s )
	    {
	        global $page;
	        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
	        ! empty ( $page ) && 1 < $page && $paged = $page;
	        $paged > 1 && $s .= ' - ' . sprintf( __( 'Page %s' ), $paged );
	        return $s;
	    }

	    add_filter( 'wpseo_metadesc', 'cvw_add_page_number', 100, 1 );
	    add_filter( 'wpseo_title', 'cvw_add_page_number', 100, 1 );
	}
?>
