<?php
/**
 * The template for displaying archive pages.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package FPSBase
 */

get_header(); ?>

<?php
	$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $_GET['author_name']) : get_userdata($_GET['author']);
    global $wp_query;
    $curauth = $wp_query->get_queried_object();
?>

<div class="content-area full-page">
    <div class="container">
        <section>
            <div class="info">

							<div class="entry-author text-center">
									<div class="img-author">
											<?php
													$author_id = get_the_author_meta('ID');
													if(get_field('author_image' , 'user_'. $author_id)){
															$url = get_field('author_image' , 'user_'. $author_id);
															$avatarautor =  $url['ID'];
															$size = 'thumbnail';
													}else{
															$url = get_template_directory_uri().'/img/avatar.png';
													}
													echo wp_get_attachment_image( $avatarautor, $size ); ?>
									</div>

									<div class="info-author">
										<!-- Title Blog Page -->
										<div class="title-page">
												<h2 class="entry-title">
														<span>ABOUT AUTHOR</span>
														<?php the_author_meta('first_name'); ?>
														<?php the_author_meta('last_name'); ?>
												</h2>
												<p><?php  the_author_meta('description'); ?></p>

												<!--Social Icons-->
												<div class="social-icons">
														<?php
														 if( have_rows('social_icons_author', 'user_'. $author_id) ):
																while ( have_rows('social_icons_author', 'user_'. $author_id) ): the_row();
																$social = get_sub_field('social_icon');
														?>
																<a href="<?php the_sub_field('social_profile'); ?>" target="_blank" data-link-type="social" data-social-network="<?php echo $social['value']; ?>">
																		<i class="fab fa-<?php echo $social['value']; ?>"></i>
																</a>
														<?php endwhile; endif; ?>
												</div>
												<!--/Social Icons-->

											</div>
									</div>
							</div><!-- .entry-content -->

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
