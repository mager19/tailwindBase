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
<div class="content-area full-page">
    <div class="container">
        <section>
            <?php while (have_posts()) : the_post(); ?>
                <div class="info">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    <?php the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </section>
    </div><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
