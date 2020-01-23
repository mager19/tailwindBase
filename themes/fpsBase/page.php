<?php
/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package FPSBase
 */

get_header(); ?>

	<!-- Hero Header -->
	<?php get_template_part( 'inc/hero', 'content' ); ?>
	<!-- /Hero Header -->

	<div class="content-area">
		<div class="container">
        <section class="flex-inverter">
            <?php while ( have_posts() ) : the_post(); ?>

                <aside class="sidebar">
                    <?php if(function_exists('subpages_menu')) { subpages_menu(); } ?>
                </aside>

                <div class="info">
                    <?php the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
        </section>
		</div><!-- #main -->
	</div>
<?php
get_footer();
