<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ) ?>">
    <div>
        <label class="screen-reader-text" for="s"><?php esc_html_e('Search for', 'wp-boiler'); ?>:</label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s">
        <input type="submit" id="searchsubmit" value=<?php esc_html_e('Search', 'wp-boiler'); ?>>
    </div>
</form>