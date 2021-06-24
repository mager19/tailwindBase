<?php

/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package fpsBaseTailwind
 */
?>

</div><!-- #content -->

<?php
if (!is_404())
{
    if (!is_home())
    {
        get_template_part('inc/cta', 'footer');
    }
}
?>

<footer class="site-footer">
    <section class="container mx-auto py-14">
        <div class="site-footer__top">
            <!--Footer Menu-->
            <div class="footer-menu">
                <?php if (has_nav_menu('menu-2'))
                {
                    wp_nav_menu(array('theme_location' => 'menu-2'));
                } ?>
            </div>
            <!--/Footer Menu-->

            <div class="footer-info">
                <!--Footer Content-->
                <?php the_field('footer_info', 'option'); ?>
                <!--/Footer Content-->

                <!--Social Icons-->
                <div class="social-icons">
                    <?php
                    if (have_rows('social_icons', 'option')) :
                        while (have_rows('social_icons', 'option')) : the_row();
                            $social = get_sub_field('social_icon');
                    ?>
                            <a href="<?php the_sub_field('social_profile'); ?>" target="_blank" data-linktype="social" data-socialnetwork="<?php echo $social['value']; ?>">
                                <span class="fpsIcon-<?php echo $social['value']; ?>"></span>
                            </a>
                    <?php endwhile;
                    endif;
                    ?>
                </div>
                <!--/Social Icons-->
            </div>
        </div>
        <div class="site-footer__bottom">
            <!--/copyright-->
            <div class="copyright">
                <?php the_field('copyright', 'option'); ?>
            </div>
            <!--/copyright-->
        </div>
    </section>
</footer><!-- #colophon -->

</div><!-- #page -->


<?php wp_footer(); ?>

</body>

</html>