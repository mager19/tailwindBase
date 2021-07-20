<?php

/**
 * The template for displaying archive pages.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fpsBaseTailwind
 */

get_header(); ?>

<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $_GET['author_name']) : get_userdata($_GET['author']);
global $wp_query;
$curauth = $wp_query->get_queried_object();
?>

<section class="container mx-auto py-14">
    <div class="info">
        <div class="text-center entry-author">
            <div class="img-author">
                <?php
                $author_id = get_the_author_meta('ID');
                if (get_field('author_image', 'user_' . $author_id))
                {
                    $url = get_field('author_image', 'user_' . $author_id);
                    $avatarautor =  $url['ID'];
                    $size = 'thumbnail';
                }
                else
                {
                    $url = get_template_directory_uri() . '/img/avatar.png';
                }
                echo wp_get_attachment_image($avatarautor, $size); ?>
            </div>
            <div class="info-author">
                <!-- Title Blog Page -->
                <div class="title-page">
                    <span class="uppercase"><?php _e('About author', 'frontporchsolutions'); ?></span>
                    <h2 class="title--3 title-md--1">
                        <?php the_author_meta('first_name'); ?>
                        <?php the_author_meta('last_name'); ?>
                    </h2>
                    <p><?php the_author_meta('description'); ?></p>
                    <div class="social-icons">
                        <?php
                        if (have_rows('social_icons_author', 'user_' . $author_id)) :
                            while (have_rows('social_icons_author', 'user_' . $author_id)) : the_row();
                                $social = get_sub_field('social_icon');
                        ?>
                                <a href="<?php the_sub_field('social_profile'); ?>" target="_blank" data-link-type="social" data-social-network="<?php echo $social['value']; ?>">
                                    <span class="fpsIcon-<?php echo $social['value']; ?>"></span>
                                </a>
                        <?php endwhile;
                        endif; ?>
                    </div>
                    <!--/Social Icons-->
                </div>
            </div>
        </div><!-- .entry-content -->

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
