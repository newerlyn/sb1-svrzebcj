<?php
/**
 * Footer template
 */
?>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class' => 'footer-menu',
                        'container' => false
                    ));
                    ?>
                </div>

                <div class="company-info">
                    <?php echo wp_kses_post(get_theme_mod('company_details')); ?>
                </div>

                <?php get_template_part('template-parts/social-links'); ?>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>