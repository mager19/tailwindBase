<?php

/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fpsBaseTailwind
 */

get_header(); ?>


<section class="container mx-auto py-14">
    <div class="info">

        <h1 class="uppercase title--3 title-md--1">Blog</h1>

        <!-- List Post -->
        <div class="grid grid-cols-3">
            <?php while (have_posts()) : the_post(); ?>

                <!-- Item Post -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="header-post">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </header>

                    <div class="info-post">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                        <?php the_excerpt(); ?>

                        <a href="<?php the_permalink(); ?>" class="link">
                            <?php _e('Continue Reading', 'frontporchsolutions'); ?>
                        </a>
                    </div>
                </article>
                <!-- Item Post -->

            <?php endwhile; ?>
        </div>
        <!-- List Post -->

        <!-- Pagination -->
        <?php if (function_exists('fpsBaseTailwind__pagination')) : ?>
            <div class="pagination">
                <?php fpsBaseTailwind__pagination($posts->max_num_pages, "", $paged); ?>
            </div>
        <?php endif; ?>
        <!-- End Pagination -->
    </div>
</section><!-- #main -->
<?php
get_footer();
