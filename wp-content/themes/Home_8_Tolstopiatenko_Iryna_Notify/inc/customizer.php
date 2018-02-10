<?php
/**
 * notify Theme Customizer
 *
 * @package notify
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function notify_customize_register($wp_customize)
{
//Создаем секцию
    $wp_customize->add_section('section_name', array(
        'title' => ('Notify section 1'),
        'description' => ('gfcdxrctfgv'),
        'priority' => 100,
        'capability' => 'edit_theme_options'));
//Создаем переменную
    $wp_customize->add_setting('setting_name', array(
        'default' => '', 'type' => 'theme_mod',
        'capability' => 'edit_theme_options'));

    $wp_customize->add_control('setting_name', array(
        'label' => 'Выпадающий список страниц',
        'section' => 'section_name',
        'type' => 'dropdown-pages',
        'priority' => 1));
    //Добавим еще один контрол для примера, пусть это будет элемент для выбора цвета //Создаем вторую переменную
    $wp_customize->add_setting('setting_name2', array(
        'default' => '#fff',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'));
    //Добавляем контрол в секцию section_name для переменной 'setting_name2'
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'setting_name2', array(
        'label' => 'Выбор цвета',
        'section' => 'section_name',
        'settings' => 'setting_name2',
        'priority' => 2)));
    $wp_customize->add_control(
        'copyright_textbox',
        array(
            'label' => 'Текст копирайта',
            'section' => 'example_section_one',
            'type' => 'text',
        )
    );


    /*
     * Failsafe is safe
     */
    if (!isset($wp_customize)) {
        return;
    }

    /**
     * Add 'Home Top' Section.
     */
    $wp_customize->add_section(
    // $id
        'sk_section_home_top',
        // $args
        array(
            'title' => __('background-header', 'theme-slug'),
            // 'description'	=> __( 'Some description for the options in the Home Top section', 'theme-slug' ),
            'active_callback' => 'is_front_page',
        )
    );

    /**
     * Add 'Home Top Background Image' Setting.
     */
    $wp_customize->add_setting(
    // $id
        'sk_home_top_background_image',
        // $args
        array(
            'default' => get_stylesheet_directory_uri() . '/images/main-background.png',
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'postMessage'
        )
    );

    /**
     * Add 'Home Top Background Image' image upload Control.
     */
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        // $wp_customize object
            $wp_customize,
            // $id
            'sk_home_top_background_image',
            // $args
            array(
                'settings' => 'sk_home_top_background_image',
                'section' => 'sk_section_home_top',
                'label' => __('Home Top Background Image', 'theme-slug'),
                'description' => __('Select the image to be used for Home Top Background.', 'theme-slug')
            )
        )
    );


    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'notify_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'notify_customize_partial_blogdescription',
        ));
    }


}

add_action('customize_register', 'notify_customize_register');


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function notify_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function notify_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function notify_customize_preview_js()
{
    wp_enqueue_script('notify-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'notify_customize_preview_js');


