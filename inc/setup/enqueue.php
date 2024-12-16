<?php
/**
 * Enqueue scripts and styles
 */
if (!defined('ABSPATH')) exit;

function studiokiss_scripts() {
    // Styles
    wp_enqueue_style('studiokiss-style', get_stylesheet_uri());
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    
    // Scripts
    wp_enqueue_script('studiokiss-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
    
    // Localize script for AJAX
    wp_localize_script('studiokiss-main', 'studiokiss', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'studiokiss_scripts');