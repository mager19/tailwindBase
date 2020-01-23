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
 * @package FPSBase
 */

get_header(); ?>

    <!-- Hero Header -->
    <?php while(have_posts()) : the_post(); ?>
    <div class="hero-content" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
        <div class="container">
          <section class="hero">
            <div class="hero-info">
              <?php the_content(); ?>
            </div>
          </section>
        </div>
    </div>
    <?php endwhile; ?>
    <!-- End Hero Header -->

<?php
get_footer();
