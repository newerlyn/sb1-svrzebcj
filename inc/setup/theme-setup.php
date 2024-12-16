<?php
/**
 * Theme Setup Functions
 */
if (!defined('ABSPATH')) exit;

function studiokiss_setup() {
    // Theme supports
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'studiokiss'),
        'footer' => __('Footer Menu', 'studiokiss')
    ));
}
add_action('after_setup_theme', 'studiokiss_setup');