<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <!-- <main id="main" class="site-main">
            <?php $hero_title = get_theme_mod('set_hero_title', 'Please enter a title');
            $hero_subtitle = get_theme_mod('set_hero_subtitle', 'Please enter a subtitle');
            $hero_button_link = get_theme_mod('set_hero_button_link', '#');
            $hero_button_text = get_theme_mod('set_hero_button_text', 'Learn More');
            $hero_height = get_theme_mod('set_hero_height', 800);
            $hero_background = wp_get_attachment_url(get_theme_mod('set_hero_background')); ?>
            <section class="hero" style="background-image: url(<?php echo esc_url($hero_background); ?>)">
                <div class="overlay" style="min-height: <?php echo esc_attr($hero_height); ?>px">
                    <div class="container">
                        <div class="hero-items">
                            <h1><?php echo esc_html($hero_title); ?></h1>
                            <p><?php echo nl2br(esc_html($hero_subtitle)); ?></p>
                            <a href="<?php echo esc_url($hero_button_link); ?>"><?php echo esc_html($hero_button_text); ?></a>
                        </div>
                    </div>
                </div>
            </section> -->
        <section class="services">
            <div class="info-box">
                <span><?php esc_html_e('We care about', 'mn-signs') ?></span>
                <p><span id="emphasis"><?php esc_html_e('your job.', 'mn-signs') ?></span></p>
                <p><?php esc_html_e('Friendly and attentive service with over 30 years of experience.', 'mn-signs') ?></p>
                <a href="/services"><button><?php esc_html_e('Learn About Our Services', 'mn-signs') ?></button></a>
            </div>
            <div id="carousel-container">
                <div id="slider-wrapper" class="slider-wrapper">
                    <button class="slide-arrow" id="slide-arrow-prev">
                        &#8249;
                    </button>

                    <button class="slide-arrow" id="slide-arrow-next">
                        &#8250;
                    </button>
                    <ul class="slides-container" id="slides-container">
                        <li class="slide">
                            <div id="services-item-1" class="carousel-image">
                                <?php
                                if (is_active_sidebar('services-1')) {
                                    dynamic_sidebar('services-1');
                                }
                                ?>
                            </div>
                        </li>
                        <li class="slide">
                            <div id="services-item-2" class="carousel-image">
                                <?php
                                if (is_active_sidebar('services-2')) {
                                    dynamic_sidebar('services-2');
                                }
                                ?>
                            </div>
                        </li>
                        <li class="slide">
                            <div id="services-item-3" class="carousel-image">
                                <?php
                                if (is_active_sidebar('services-3')) {
                                    dynamic_sidebar('services-3');
                                }
                                ?>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="bubbles-container">
                    <span class="location-bubble current"></span>
                    <span class="location-bubble"></span>
                    <span class="location-bubble"></span>
                    <div>
                    </div>
        </section>
        <div class="gradient-top"></div>
        <section class="about-us">
            <?php $about_title = get_theme_mod('set_about_title', 'Please enter a title');
            $about_subtitle = get_theme_mod('set_about_subtitle', 'Please enter a subtitle');
            $about_paragraph = get_theme_mod('set_about_paragraph', 'Please enter a paragraph'); ?>
            <div class="about-info">
                <h2><?php echo esc_html($about_title); ?></h2>
                <p id="about-info-subtitle"><?php echo nl2br(esc_html($about_subtitle)); ?></p>
                <p id="about-info-paragraph"><?php echo nl2br(esc_html($about_paragraph)); ?></p>
            </div>
        </section>
        <div class="gradient-bottom"></div>
        <section class="sliding-images">
            <div class="wrapper">
                <div class="item item1"> <?php
                                            if (is_active_sidebar('images-1')) {
                                                dynamic_sidebar('images-1');
                                            }
                                            ?></div>
                <div class="item item2"><img src="" />
                <?php
                                            if (is_active_sidebar('images-2')) {
                                                dynamic_sidebar('images-2');
                                            }
                                            ?></div>
                <div class="item item3"><img src="" />
                <?php
                                            if (is_active_sidebar('images-3')) {
                                                dynamic_sidebar('images-3');
                                            }
                                            ?></div>
                <div class="item item4"><img src="" />
                <?php
                                            if (is_active_sidebar('images-4')) {
                                                dynamic_sidebar('images-4');
                                            }
                                            ?></div>
                <div class="item item5"><img src="" />
                <?php
                                            if (is_active_sidebar('images-5')) {
                                                dynamic_sidebar('images-5');
                                            }
                                            ?></div>
                <div class="item item6"><img src="" />
                <?php
                                            if (is_active_sidebar('images-6')) {
                                                dynamic_sidebar('images-6');
                                            }
                                            ?></div>
                <div class="item item7"><img src="" />
                <?php
                                            if (is_active_sidebar('images-7')) {
                                                dynamic_sidebar('images-7');
                                            }
                                            ?></div>
                <div class="item item8"><img src="" />
                <?php
                                            if (is_active_sidebar('images-8')) {
                                                dynamic_sidebar('images-8');
                                            }
                                            ?></div>
            </div>
        </section>
        <section class="home-blog">
            <h2><?php _e('Latest News', 'mn-signs') ?></h2>
            <div class="container">
                <?php
                $per_page = get_theme_mod('set_per_page', 3);
                $category_include = get_theme_mod('set_category_include');
                $category_exclude = get_theme_mod('set_category_exclude');


                $args = array(
                    'post-type' => 'post',
                    'posts_per_page' => esc_html($per_page),
                    'category__in' => explode(",", esc_html($category_include)),
                    'category__not-in' => explode(",", esc_html($category_exclude)),
                );
                $postlist = new WP_Query($args);
                if ($postlist->have_posts()) :
                    while ($postlist->have_posts()) : $postlist->the_post();
                        get_template_part('parts/content', 'latest-news');
                    endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p><?php esc_html_e('Nothing yet to be displayed!', 'mn-signs'); ?></p>
                <?php endif; ?>
            </div>
        </section>
        </main>
    </div>
</div>
<?php get_footer(); ?>