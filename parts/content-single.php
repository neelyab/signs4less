<article id="post-<?php the_ID();?>" <?php post_class(); ?>>

    <header>
        <?php if( has_category()): ?>
                <span class="category-breadcrumb"> <?php the_category( ' ' ); ?></span>
            <?php endif; ?>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p><?php esc_html_e('Posted ', 'mn-signs') ?>  <?php echo esc_html(get_the_date()); ?></p>
            <p><?php esc_html_e('By ', 'mn-signs'); the_author_posts_link(); ?></p>
            <!-- <?php if( has_tag()): ?>
                <p><?php esc_html_e('Tags', 'mn-signs') ?> : <?php the_tags( '', ', '); ?></p>
            <?php endif; ?>     -->
        </div>
    </header>
    <div class="content">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div>
</article>