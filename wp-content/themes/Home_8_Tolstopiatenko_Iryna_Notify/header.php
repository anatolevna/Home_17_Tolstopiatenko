<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package notify
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');
        wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="masthead" class="site-header">
    <div id="custom-background-css" class="main-background">
        <div class="container clearfix">
            <div class="notify">
                <?php if (get_custom_logo()) : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-header" rel="home">
                        <?php the_custom_logo(); ?>
                    </a>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-header" rel="home">
                        <img src="<?php echo get_template_directory_uri() ?>/images/notify-.png" alt="notify"
                             class="logo-img">
                    </a>
                <?php endif; ?>
                <p class="descr"><?php
                    echo get_bloginfo('description') // краткое описание
                    ?><!--A great new free psd theme to showcase your new application. --></p>
                <!-- #site-navigation -->
                <?php wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'container' => '',
                    'menu_class' => 'nav-header',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'menu_id' => '',
                )); ?>
            </div>
            <img class="hand" src="<?php echo get_header_image(); ?>"
                 alt="<?php echo get_bloginfo('title'); ?>/images/hand.png" alt="hand">
        </div>
    </div>

</header><!-- #masthead -->
