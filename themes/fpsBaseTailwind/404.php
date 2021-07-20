<?php

/**
 * The template for displaying 404 pages (not found).
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @package fpsBaseTailwind
 */
get_header(); ?>

<section class="container mx-auto py-14">
    <div class="info">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/404-preview.jpg" alt="404 icon"> -->
        <h1 class="text-center title--1"><?php esc_html_e(the_field('title_error_page', 'options')); ?></h1>
        <?php the_field('description_error_page', 'options'); ?>
    </div>
</section>

<?php get_footer();
