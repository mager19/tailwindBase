<?php

/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fpsBaseTailwind
 */

get_header(); ?>

<!-- Hero Header -->
<?php get_template_part('inc/hero', 'content'); ?>
<!-- /Hero Header -->

<section class="container grid grid-cols-12 mx-auto py-14">

    <?php while (have_posts()) : the_post(); ?>

        <aside class="col-start-1 col-start-5 sidebar">
            <?php if (function_exists('subpages_menu'))
            {
                subpages_menu();
            } ?>
        </aside>

        <div class="col-start-6 col-end-13 info">
            <?php the_post_thumbnail(); ?>
            <?php the_content(); ?>
        </div>

    <?php endwhile; ?>

</section><!-- #main -->

<?php
get_footer();
