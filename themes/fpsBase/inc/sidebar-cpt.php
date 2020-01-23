<?php $cpt = get_post_type(); ?>
<nav class="page-sub-nav-wrap">
   <div class="page-sub-nav">
        <span class="sub-menu-title">
            More in This Section
        </span>

        <div class="sub-items">
            <?php
                $loop = new WP_Query( array( 'post_type' => $cpt , 'posts_per_page' => 6 , 'post__not_in' => array( $post->ID ) ) );
                while ( $loop->have_posts() ) :
                $loop->the_post();
            ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php endwhile; ?>
        </div>
    </div>
</nav>

<div class="trigger-wrap"><a href="#" class="btn radius xsmall red outline" id="page-nav-trigger">Show More  <i class="fa fa-angle-down"></i></a></div>
<?php wp_reset_query(); ?>
