<?php

/**
 * fpsBaseTailwind First functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package fpsBaseTailwind
 */


/** Setup **/
require('inc/setup.php');

/** Enqueue scripts and styles.**/
require('inc/scripts.php');

/** Shortcodes Theme **/
require('inc/shortcodes.php');

/**  Custom Pagination Function **/
require('inc/pagination.php');

/**  Social Shared Icons Function **/
require('inc/shared-social.php');

/** Author Fields **/
require('inc/author-fields.php');

/** Yoast Meta Description and page titles **/
require('inc/yoast-meta-description.php');

/** CTA'S post type **/
require('inc/cta-post-type.php');


if (function_exists('acf_add_options_page')) {

    acf_add_options_page();
}
