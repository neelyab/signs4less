<footer class="site-footer">
    <div class="container">
        <div class="copyright">
            <p><?php echo esc_html(get_theme_mod('set_copyright', esc_html__('Copyright X - All Rights Reserved', 'mn-signs'))) ?></p>
        </div>
        <nav class="footer-menu">
            <?php wp_nav_menu(array('theme_location' => 'mn_signs_footer_menu', 'depth' => 1)); ?>
        </nav>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>