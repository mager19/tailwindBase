<!-- Hero Header-->
<div class="header__inside interpage" style="background-image: url('<?php if(is_home()){ the_field('background_blog_page', 'option');} else{ if(has_post_thumbnail()){ the_post_thumbnail_url(); } else{ if(get_field('background_default', 'option')){ the_field('background_default', 'option'); } } } ?>');">

  <div class="container">
    <section class="hero justify-content-center">
      <div class="hero-info">
        <?php
          if(is_home()){
            echo '<h1 class="entry-title">Blog</h1>';
            the_field('description_blog', 'option');
          }else{
            if(!is_front_page()){
              the_title('<h1 class="entry-title">' , '</h1>');
              while(have_posts()) : the_post();
                 if(has_excerpt()){ the_excerpt(); }
              endwhile;
            }
          }
         ?>
      </div>
    </section>
  </div>

</div>
<!-- End Hero Header -->

<!--Breadcrumbs-->
<?php get_template_part( 'inc/content', 'breadcrumbs' ); ?>
<!--/Breadcrumbs-->
