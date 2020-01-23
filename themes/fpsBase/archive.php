<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package FPSBase
 */

get_header(); ?>

<div class="content-area full-page">
    <div class="container">
        <section>
            <div class="info">

                <!-- Title Blog Page -->
                <h1 class="entrey-title">BLOG</h1>
                <!-- End Title Blog Page -->

                <!-- List Post -->
                <section>
                  <?php while ( have_posts() ) : the_post(); ?>

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
                <?php if(function_exists(custom_pagination)): ?>
                <div class="pagination">
                    <?php custom_pagination($posts->max_num_pages,"",$paged); ?>
                </div>
                <?php endif; ?>
                <!-- End Pagination -->

            </div>
        </section>
    </div><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
