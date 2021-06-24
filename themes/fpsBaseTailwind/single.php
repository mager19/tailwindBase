<?php

/**
 * The template for displaying all single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package fpsBaseTailwind
 */

get_header(); ?>


<section class="container pb-0 mx-auto py-14">
    <?php while (have_posts()) : the_post(); ?>
        <div class="info">
            <?php the_title('<h1 class="text-center title--3 title-md--1">', '</h1>'); ?>
            <?php the_post_thumbnail(); ?>
            <?php
            the_content();
            echo social_sharing_buttons();
            ?>

            <div class="entry-author">
                <div class="img-author">
                    <?php
                    $author_id = get_the_author_meta('ID');
                    if (get_field('author_image', 'user_' . $author_id))
                    {
                        $url = get_field('author_image', 'user_' . $author_id);
                    }
                    ?>
                    <a href="<?php echo get_author_posts_url($author_id); ?>">
                        <img src="<?php echo $url; ?>" alt="author">
                    </a>
                </div>

                <div class="info-author">
                    <h2>
                        <span>ABOUT AUTHOR</span>
                        <?php the_author_meta('first_name'); ?>
                        <?php the_author_meta('last_name'); ?>
                    </h2>
                    <p><?php the_author_meta('description'); ?></p>
                    <a href="<?php echo get_author_posts_url($author_id); ?>">
                        Read more
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div><!-- .entry-content -->

        </div>
    <?php endwhile; ?>
</section><!-- #main -->


<section class="last-post py-14">
    <div class="container mx-auto">
        <h2>You might also like</h2>
        <div class="grid grid-cols-3">
            <?php
            $loop = new WP_Query(
                array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post__not_in' => array($post->ID)
                )
            );
            while ($loop->have_posts()) : $loop->the_post();
            ?>
                <div class="item-recent">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('featured-post'); ?>>
                        <div class="info-post">
                            <h2>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="link">
                                <?php _e('Continue Reading', 'frontporchsolutions'); ?>
                            </a>
                        </div>
                    </article>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php
get_footer();
