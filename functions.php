<?php

require get_template_directory() . '/inc/customizer.php';

function wp_boiler_load_scripts()
{
    wp_enqueue_style('wp-boiler-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
    wp_enqueue_script('image-carousel', get_template_directory_uri() . '/js/image-carousel.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'wp_boiler_load_scripts');

function wp_boiler_config()
{
    $textdomain = 'wp-boiler';
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    register_nav_menus(
        array(
            'wp_boiler_main_menu' => esc_html__('Main Menu', 'wp-boiler'),
            'wp_boiler_footer_menu' => esc_html__('Footer Menu', 'wp-boiler')
        )
    );

    $args = array(
        'height'    => 225,
        'width'     => 1920
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width' => 200,
        'height'    => 110,
        'flex-height'   => true,
        'flex-width'    => true
    ));
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action('after_setup_theme', 'wp_boiler_config', 0);

//SIDEBAR AND SERVICE WIDGET AREAS
add_action('widgets_init', 'wp_boiler_sidebars');
function wp_boiler_sidebars()
{
    register_sidebar(
        array(
            'name'  => 'Blog Sidebar',
            'id'    => 'sidebar-blog',
            'description'   => 'This is the Blog Sidebar. You can add your widgets here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => esc_html__('Service 1', 'wp-boiler'),
            'id'    => 'services-1',
            'description'   => esc_html__('First Service Area', 'wp-boiler'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => esc_html__('Service 2', 'wp-boiler'),
            'id'    => 'services-2',
            'description'   => esc_html__('Second Service Area', 'wp-boiler'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => esc_html__('Service 3', 'wp-boiler'),
            'id'    => 'services-3',
            'description'   => esc_html__('Third Service Area', 'wp-boiler'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
}

if (!function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}
