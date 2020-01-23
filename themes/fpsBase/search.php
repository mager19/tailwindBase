<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package FPSBase
 */

get_header(); ?>

<div class="content-area full-page">
    <div class="container">
        <section>
            <div class="info">

                <?php
                if ( have_posts() ) : ?>

                    <header class="page-header">
                        <h1 class="page-title"><?php
                            /* translators: %s: search query. */
                            printf( esc_html__( 'Search Results for: %s', 'FPSBase' ), '<span>' . get_search_query() . '</span>' );
                        ?></h1>
                    </header><!-- .page-header -->

                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post(); ?>
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

                <!-- Pagination -->
                <?php if(function_exists(custom_pagination)): ?>
                <div class="pagination">
                    <?php custom_pagination($posts->max_num_pages,"",$paged); ?>
                </div>
                <?php endif; ?>
                <!-- End Pagination -->

                <?php
                else :
                    echo '<p>Sorry, but nothing matched your search terms. Please try again with some different keywords</p>';
				    get_search_form();
                endif; ?>

            </div>
        </section>
    </div><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
