<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package fpsBaseTailwind
 */

get_header(); ?>

<section class="container mx-auto py-14">
    <div class="info">

        <?php
        if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="title--3 title-md--1">
                    <?php
                    /* translators: %s: search query. */
                    printf(esc_html__('Search Results for: %s', 'frontporchsolutions'), '<span>' . get_search_query() . '</span>');
                    ?>
                </h1>
            </header><!-- .page-header -->
            <div class="grid grid-cols-3">
                <?php
                /* Start the Loop */
                while (have_posts()) : the_post(); ?>
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
            </div>
            <!-- Pagination -->
            <?php if (function_exists('frontporchsolutions__pagination')) : ?>
                <div class="pagination">
                    <?php fpsBaseTailwind__pagination($posts->max_num_pages, "", $paged); ?>
                </div>
            <?php endif; ?>
            <!-- End Pagination -->

        <?php
        else :
            echo '<p>Sorry, but nothing matched your search terms. Please try again with some different keywords</p>';
            get_search_form();
        endif; ?>

    </div>
</section><!-- #main -->


<?php
get_footer();
