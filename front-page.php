<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
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
                <div class="item item1">
                    <?php
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
            <a href="/services"><button><?php esc_html_e('Browse Products and Services', 'mn-signs') ?></button></a>
        </section>
        <section class="reviews-container">
            <h2>What customers are saying...</h2>
            <div class="reviews">
                <div class="review-card">
                    <p>Laura</p>
                    <p>★ ★ ★ ★ ★</p>

                    <p>Mike and Tony are very friendly and easy to work with. They are quick to respond and answer any questions and concerns you have especially when it comes to big, large-scale projects. If there's a mistake they are quick to fix. They really prioritize customer satisfaction. All in all they're super reliable and I'd recommend them to anyone who has any signage needs in the area. Thanks guys!</p>
                </div>
                <div class="review-card">
                    <p>Dale</p>
                    <p>★ ★ ★ ★ ★</p>

                    <p>I ordered 18 yard signs for businesses sponsoring holes for our Young Life Golf Tournament. Mike and Tony did an outstanding job of taking my order, assisting with the design of the signs, and delivered them ahead of the schedule we had agreed upon. They were professional and very friendly in all aspects of my interaction with them.</p>
                </div>
                <div class="review-card">
                    <p>Peter</p>
                    <p>★ ★ ★ ★ ★</p>

                    <p>I put a car wrap on for my business Fredericksburg Window Decor last week. I drove away after picking up the vehicle and 10 minutes later a person rolled down the window to ask me for an appointment. All week long people and customers have been commenting on how nice the design and wrap looked. Money well spent and very professional looking! Highly recommend Mike and his team!</p>
                </div>
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