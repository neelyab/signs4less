<?php

function mn_signs_customizer($wp_customize)
{
    // 1 Copyright Information
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __('Copyright Settings', 'mn-signs'),
            'description' => __('Copyright Settings', 'mn-signs')
        )
    );

    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => __('Copyright X - All Rights Reserved', 'mn-signs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => __('Copyright Information', 'mn-signs'),
            'description' => __('Please type your copyright here', 'mn-signs'),
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );
    
    // About Section
    $wp_customize->add_section(
        'sec_about',
        array(
            'title' => __('About Settings', 'mn-signs'),
        )
    );

    $wp_customize->add_setting(
        'set_about_title',
        array(
            'type' => 'theme_mod',
            'default' => __('Please add a title.', 'mn-signs'),
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_about_title',
        array(
            'label' => __('About Title', 'mn-signs'),
            'description' => __('Please type your title here', 'mn-signs'),
            'section' => 'sec_about',
            'type' => 'text'
        )
    );

    // Subtitle
    $wp_customize->add_setting(
        'set_about_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => __('Please add a subtitle.', 'mn-signs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_about_subtitle',
        array(
            'label' => __('About Subtitle', 'mn-signs'),
            'description' => __('Please type your subtitle here', 'mn-signs'),
            'section' => 'sec_about',
            'type' => 'textarea'
        )
    );
    $wp_customize->add_setting(
        'set_about_paragraph',
        array(
            'type' => 'theme_mod',
            'default' => __('Please add a paragraph.', 'mn-signs'),
            'sanitize_callback' => 'sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'set_about_paragraph',
        array(
            'label' => __('About Paragraph', 'mn-signs'),
            'description' => __('Please type your paragraph here', 'mn-signs'),
            'section' => 'sec_about',
            'type' => 'textarea'
        )
    );
    // 3. Blog
    $wp_customize->add_section(
        'sec_blog',
        array(
            'title' => __('Blog Section', 'mn-signs')
        )
    );

    // Posts per page
    $wp_customize->add_setting(
        'set_per_page',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_per_page',
        array(
            'label' => __('Posts per page', 'mn-signs'),
            'description' => __('How many items to display in the post list?', 'mn-signs'),
            'section' => 'sec_blog',
            'type' => 'number'
        )
    );

    // Post categories to include
    $wp_customize->add_setting(
        'set_category_include',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_category_include',
        array(
            'label' => __('Post categories to include', 'mn-signs'),
            'description' => __('Comma separated values or single category ID', 'mn-signs'),
            'section' => 'sec_blog',
            'type' => 'text'
        )
    );

    // Post categories to exclude
    $wp_customize->add_setting(
        'set_category_exclude',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_category_exclude',
        array(
            'label' => __('Post categories to exclude', 'mn-signs'),
            'description' => __('Comma separated values or single category ID', 'mn-signs'),
            'section' => 'sec_blog',
            'type' => 'text'
        )
    );
}
add_action('customize_register', 'mn_signs_customizer');
