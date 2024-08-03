<article id="post-<?php the_ID();?>" <?php post_class(); ?>>

    <header>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if( 'post' == get_post_type() ): ?>
        <div class="meta-info">
            <p><?php esc_html_e('Posted in', 'mn-signs') ?>: <?php echo esc_html(get_the_date()); ?> by <?php the_author_posts_link(); ?></p>
            <?php if( has_category()): ?>
                <p><?php esc_html_e('Categories', 'mn-signs') ?>: <?php the_category( ' ' ); ?></p>
            <?php endif; ?>
            <?php if( has_tag()): ?>
                <p><?php esc_html_e('Tags', 'mn-signs') ?>: <?php the_tags( '', ', '); ?></p>
            <?php endif; ?>    
        </div>
        <?php endif; ?>
    </header>
    <div class="content">
        <?php the_excerpt(); ?>
    </div>
</article>