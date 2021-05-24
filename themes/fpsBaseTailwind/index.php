<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fpsBaseTailwind
 */

get_header(); ?>

<!-- Hero Header -->
<?php get_template_part('inc/hero', 'content'); ?>

<div class="container mx-auto">
    <div class="flex">
        <div class="w-full">
            <h1 class="cosarara">Probando</h1>
            Yan Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
    </div>
</div>

<!-- /Hero Header -->
<div class="content-area full-page">
    <div class="container mx-auto">
        <section>
            <div class="info">

                <!-- Title Blog Page -->
                <h1 class="entrey-title cosarara">aBLOG</h1>
                <!-- End Title Blog Page -->

                <!-- List Post -->
                <section>
                    <?php while (have_posts()) : the_post(); ?>

                        <!-- Item Post -->
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="header-post">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </div>

                            <div class="info-post">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                <?php the_excerpt(); ?>

                                <a href="<?php the_permalink(); ?>" class="link">
                                    Continue Reading
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </article>
                        <!-- Item Post -->

                    <?php endwhile; ?>
                </section>
                <!-- List Post -->

                <!-- Pagination -->
                <div class="pagination">
                    <?php custom_pagination($posts->max_num_pages, "", $paged); ?>
                </div>
                <!-- End Pagination -->

            </div>
        </section>
    </div><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
