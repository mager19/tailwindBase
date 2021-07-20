<?php
  $args = array(
    'post_type' => 'cta',
    'posts_per_page' => -1,
    'meta_query' => array(
        array(
            'key'		=> 'cta_relationship',
            'compare'	=> 'LIKE',
            'value'		=> get_the_ID(),
        ),
    ),
  );
  $loop = new WP_Query($args);

  if( $loop->have_posts()):
     while($loop->have_posts()) : $loop->the_post(); ?>
      <div class="cta">
        <div class="container">
          <section class="justify-content-center">
            <div class="about-cta">
              <div>
                <h4 class="title-entry"><?php the_title(); ?></h4>
                <?php the_content(); ?>
              </div>
            </div>
          </section>
        </div>
      </div>
  <?php endwhile; wp_reset_postdata(); endif; ?>
