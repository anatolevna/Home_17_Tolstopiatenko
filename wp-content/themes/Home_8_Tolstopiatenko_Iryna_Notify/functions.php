<?php

function load_style_script()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style('style', get_template_directory_uri() . '/css/styles.css' );
}

add_action('wp_enqueue_scripts', 'load_style_script');
/**
 * notify functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package notify
 */

if (!function_exists('notify_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function notify_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on notify, use a find and replace
         * to change 'notify' to the name of your theme in all the template files.
         */
        load_theme_textdomain('notify', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'header_menu' => 'header',
            'footer_menu' => 'footer',
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('notify_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'notify_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function notify_content_width()
{
    $GLOBALS['content_width'] = apply_filters('notify_content_width', 640);
}

add_action('after_setup_theme', 'notify_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function notify_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'notify'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'notify'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'notify_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function notify_scripts()
{
    wp_enqueue_style( 'notify-style', get_stylesheet_uri() );
    //    my styles
    wp_enqueue_style('style', get_template_directory_uri() . '/css/main.css' );


    wp_enqueue_script('notify-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('notify-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'notify_scripts');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/**menu

 */




function custom_customize_register( $wp_customize ) {
    //Создаем свои поля, секции и контролы здесь }
    // //код выполнится во время загрузки персонализатора
    add_action( 'customize_register', 'custom_customize_register' );
}

/*function create_post_your_post() {
    register_post_type( 'your_post',
        array(
            'labels'       => array(
                'name'       => __( 'Your Post' ),
            ),
            'public'       => true,
            'hierarchical' => true,
            'has_archive'  => true,
            'supports'     => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
            ),
            'taxonomies'   => array(
                'post_tag',
                'category',
            )
        )
    );
    register_taxonomy_for_object_type( 'category', 'your_post' );
    register_taxonomy_for_object_type( 'post_tag', 'your_post' );
}
add_action( 'init', 'create_post_your_post' );
*/

add_theme_support( 'custom-header', array(
    'default-image'          => '',
    'random-default'         => false,
    'width'                  => 0,
    'height'                 => 0,
    'flex-height'            => false,
    'flex-width'             => false,
    'default-text-color'     => '', // вызывается функций get_header_textcolor()
    'header-text'            => true,
    'uploads'                => true,
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
    'video'                  => false, // с 4.7
    'video-active-callback'  => 'is_front_page', // с 4.7
) );

add_theme_support( 'custom-header', array(
    'video' => true,
) );


add_theme_support( 'customize-selective-refresh-widgets' );



$args = array(
    'default-color' => '000000',
    'default-image' => '%1$s/images/main-background.png',
);
add_theme_support( 'custom-background', $args );




/**
 * Writes the Home Top background image out to the 'head' element of the document
 * by reading the value from the theme mod value in the options table.
 */
function sk_customizer_css() {
    ?>
    <style type="text/css">
        <?php
            if ( get_theme_mod( 'sk_home_top_background_image' ) ) {
                $home_top_background_image_url = get_theme_mod( 'sk_home_top_background_image' );
            } else {
                $home_top_background_image_url = get_stylesheet_directory_uri() . '/images/main-background.png';
            }

            // if ( 0 < count( strlen( ( $home_top_background_image_url = get_theme_mod( 'sk_home_top_background_image', sprintf( '%s/images/main-background.png', get_stylesheet_directory_uri() ) ) ) ) ) ) { ?>
        .main-background {
            background-image: url( <?php echo $home_top_background_image_url; ?> );
        }
        <?php // } // end if ?>
    </style>
    <?php
} // end sk_customizer_css

add_action( 'wp_head', 'sk_customizer_css');

/**
 * Registers the Theme Customizer Preview with WordPress.
 *
 * @package    sk
 * @since      0.3.0
 * @version    0.3.0
 */
function sk_customizer_live_preview() {
    wp_enqueue_script(
        'sk-theme-customizer',
        get_stylesheet_directory_uri() . '/js/theme-customizer.js',
        array( 'customize-preview' ),
        '0.1.0',
        true
    );
} // end sk_customizer_live_preview
add_action( 'customize_preview_init', 'sk_customizer_live_preview' );



?>