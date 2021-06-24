<!-- Hero Header-->
<?php
$getImageURL = '';
if (is_home())
{
    $getImageURL = get_field('background_blog_page', 'option');
}
else
{
    if (has_post_thumbnail())
    {
        $getImageURL =  the_post_thumbnail_url();
    }
    else
    {
        if (get_field('background_default', 'option'))
        {
            $getImageURL = get_field('background_default', 'option');
        }
    }
} ?>

<div class="header__inside interpage" style="background-image: url('<?php echo $getImageURL; ?>');">

    <div class="container">
        <section class="hero justify-content-center">
            <div class="hero-info">
                <?php
                if (is_home())
                {
                    echo '<h1 class="title--3 title-md--1">Blog</h1>';
                    the_field('description_blog', 'option');
                }
                else
                {
                    if (!is_front_page())
                    {
                        the_title('<h1 class="title--3 title-md--1">', '</h1>');
                        while (have_posts()) : the_post();
                            if (has_excerpt())
                            {
                                the_excerpt();
                            }
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
<?php get_template_part('template-parts/content', 'breadcrumbs'); ?>
<!--/Breadcrumbs-->