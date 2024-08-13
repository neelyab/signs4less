<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open() ?>
    <div id="page" class="site">
        <header>
            <section class="menu-area">
                <div class="logo">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                    ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>"><span><?php bloginfo('name'); ?></span></a>
                    <?php
                    }
                    ?>
                </div>
                <div class="container">
                    <nav class="main-menu" role="navigation">
                        <button class="hamburger-menu" role="navigation" aria-label="main menu" aria-expanded="false">
                            <div class="menu-icon">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                        </button>
                        <?php wp_nav_menu(array('theme_location' => 'mn_signs_main_menu', 'depth' => 2)); ?>
                        <a href="/request-quote"><button id="quote-button"><?php esc_html_e("Request A Quote", "mn-signs") ?></button></a>
                    </nav>
                </div>
            </section>
        </header>