<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package notify
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">&copy;

    <div class="container clearfix">
        <div class="social-menu">
            <?php wp_nav_menu(array(
                'theme_location' => 'footer_menu',
                'container' => '',
                'menu_class' => 'nav-main',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'menu_id' => '',
            ));
            ?>
        </div>
    </div><!-- .site-info -->
    <?php echo date( 'Y' ) /* выводим текущий год */ ?>
    <?php echo get_bloginfo( 'title' ); /* выводим название сайта */ ?>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
