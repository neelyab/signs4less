<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">

        <h1><?php esc_html_e('Search results for', 'mn-signs')?>: <?php echo get_search_query(); ?></h1>

            <?php 

            get_search_form();

            while( have_posts() ):
                the_post();
                get_template_part( 'parts/content', 'search' );
            endwhile;
            wp_reset_postdata();
            the_posts_pagination();
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>