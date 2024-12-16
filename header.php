<?php
/**
 * Header template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <?php the_custom_logo(); ?>
                
                <nav class="main-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'primary-menu',
                        'container' => false
                    ));
                    ?>
                </nav>

                <div class="contact-info">
                    <a href="tel:<?php echo esc_attr(get_theme_mod('phone_number')); ?>" class="phone">
                        <?php echo esc_html(get_theme_mod('phone_number')); ?>
                    </a>
                    <a href="mailto:<?php echo esc_attr(get_theme_mod('email_address')); ?>" class="email">
                        <?php echo esc_html(get_theme_mod('email_address')); ?>
                    </a>
                </div>

                <?php get_template_part('template-parts/social-links'); ?>
            </div>
        </div>
    </header>