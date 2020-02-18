<?php

/**
 * The template for displaying Home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fpsBaseTailwind
 */

get_header(); ?>

<!-- Hero Header -->
<?php while (have_posts()) : the_post(); ?>
	<div class="content-area top-bar">
		<div class="container m-auto ">
			<!-- Three columns -->
			<div class="flex mb-2 h-12 content-center justify-center mb-0">
				<h4 class="flex items-center rotate-90">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem, unde.</h4>

				<button class="blue_button px-2">Test</button>
			</div>
		</div>
	</div>

<?php endwhile; ?>
<!-- End Hero Header -->

<?php
get_footer();
