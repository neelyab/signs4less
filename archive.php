<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
                    <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
                    <div class="container">
                        <div class="archive-items">
                            <?php 
                                if( have_posts() ):
                                    while( have_posts() ) : the_post();
                                    get_template_part( 'parts/content' );
                                    endwhile;
                                    wp_reset_postdata() 
                                    ?>
                                        <div class="mn-signs-pagination">
                                            <div class="pages new">
                                                <?php previous_posts_link( esc_html__("<< Newer posts", 'mn-signs' )); ?>
                                            </div>
                                            <div class="pages old">
                                                <?php next_posts_link(esc_html__( "Older posts >>", 'mn-signs') ); ?>
                                            </div>
                                        </div>
                                    <?php
                                else: ?>
                                    <p><?php esc_html_e('Nothing yet to be displayed!', 'mn-signs') ?></p>
                            <?php endif; ?>                                
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>