<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="post-container">
            <div class="post-content">
            <?php 
            while( have_posts() ):
                the_post();
                get_template_part( 'parts/content', 'single' );
                ?>
                <div class="wp-boiler-pagination">
                    <div class="pages next">
                        <?php next_post_link( '&laquo; %link' ); ?>
                    </div>
                    <div class="pages previous">
                        <?php previous_post_link( '%link &raquo;' ); ?>  
                    </div>
                </div>
                
                <?php

                if( comments_open() || get_comments_number() ){
                    comments_template();
                }

            endwhile;
            wp_reset_postdata();
            ?>
            </div>
            <div class="post-sidebar">
            <?php get_sidebar(); ?>
        </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>