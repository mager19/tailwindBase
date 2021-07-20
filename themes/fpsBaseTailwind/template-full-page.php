<?php

/**
 * TEMPLATE NAME:  Full Page template
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

<section class="container mx-auto py-14">
    <?php while (have_posts()) : the_post(); ?>
        <div class="info">
            <?php the_title('<h1 class="title--3 title-md--1">', '</h1>'); ?>
            <?php the_post_thumbnail(); ?>
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
</section><!-- #main -->

<?php
get_footer();
