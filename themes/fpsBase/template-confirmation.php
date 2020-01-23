<?php
/**
 * TEMPLATE NAME:  Confirmation template
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
<div class="container">
		<section class="confirmation-page">
			<div class="template-confirmation-page">
				<div class="info">
						<?php while ( have_posts() ) : the_post(); ?>
							 <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/confirmation.jpg" alt="confirmation template preview"> -->
								<?php the_content(); ?>
						<?php endwhile; ?>
					</div>
				</div>
		</section>
</div><!-- #main -->
<?php
get_footer();
