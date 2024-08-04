<?php

require get_template_directory() . '/inc/customizer.php';

function mn_signs_load_scripts()
{
    wp_enqueue_style('mn-signs-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
    wp_enqueue_script('image-carousel', get_template_directory_uri() . '/js/image-carousel.js', array(), '1.0', true);
    wp_enqueue_script('animations', get_template_directory_uri() . '/js/animations.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mn_signs_load_scripts');

function mn_signs_config()
{
    $textdomain = 'mn-signs';
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    register_nav_menus(
        array(
            'mn_signs_main_menu' => esc_html__('Main Menu', 'mn-signs'),
            'mn_signs_footer_menu' => esc_html__('Footer Menu', 'mn-signs')
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
add_action('after_setup_theme', 'mn_signs_config', 0);

//SIDEBAR AND SERVICE WIDGET AREAS
add_action('widgets_init', 'mn_signs_sidebars');
function mn_signs_sidebars()
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
            'name'  => esc_html__('Service 1', 'mn-signs'),
            'id'    => 'services-1',
            'description'   => esc_html__('First Service Area', 'mn-signs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => esc_html__('Service 2', 'mn-signs'),
            'id'    => 'services-2',
            'description'   => esc_html__('Second Service Area', 'mn-signs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => esc_html__('Service 3', 'mn-signs'),
            'id'    => 'services-3',
            'description'   => esc_html__('Third Service Area', 'mn-signs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );

    // sliding images
    for ($x = 1; $x < 9; $x++) {
        $name = 'Image ' . (string)$x;
        $image_id = 'images-' . (string)$x;

        register_sidebar(
            array(
                'name'  => esc_html__($name, 'mn-signs'),
                'id'    => $image_id,
                'description'   => esc_html__('Image', 'mn-signs'),
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            )
        );
    }
}

if (!function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}
