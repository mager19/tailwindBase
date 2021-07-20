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
 * @package fpsBaseTailwind
 */

get_header(); ?>

<!-- Hero Header -->
<?php while (have_posts()) : the_post(); ?>

    <div class="container mx-auto prose-lg py-14 max-w-[600px]">
        <h3 class="title--1 title-sm--2 title-md--3 title-lg--4 title-xl--5">This is my title</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sit, officiis doloribus nostrum labore eligendi doloremque ducimus enim cupiditate quasi soluta, natus non esse sequi, sapiente adipisci obcaecati. Temporibus, aperiam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sit, officiis doloribus nostrum labore eligendi doloremque ducimus enim cupiditate quasi soluta, natus non esse sequi, sapiente adipisci obcaecati. Temporibus, aperiam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sit, officiis doloribus nostrum labore eligendi doloremque ducimus enim cupiditate quasi soluta, natus non esse sequi, sapiente adipisci obcaecati. Temporibus, aperiam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sit, officiis doloribus nostrum labore eligendi doloremque ducimus enim cupiditate quasi soluta, natus non esse sequi, sapiente adipisci obcaecati. Temporibus, aperiam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sit, officiis doloribus nostrum labore eligendi doloremque ducimus enim cupiditate quasi soluta, natus non esse sequi, sapiente adipisci obcaecati. Temporibus, aperiam.</p>
    </div>

<?php endwhile; ?>
<!-- End Hero Header -->

<?php
get_footer();
