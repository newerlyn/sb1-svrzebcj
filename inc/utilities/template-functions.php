<?php
/**
 * Template utility functions
 */
if (!defined('ABSPATH')) exit;

function studiokiss_get_featured_services($count = 3) {
    $args = array(
        'post_type' => 'service',
        'posts_per_page' => $count,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => '_is_featured',
                'value' => '1',
                'compare' => '='
            )
        )
    );
    
    return new WP_Query($args);
}

function studiokiss_get_studio_spaces($count = -1) {
    $args = array(
        'post_type' => 'studio',
        'posts_per_page' => $count,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    
    return new WP_Query($args);
}

function studiokiss_format_price($price) {
    return number_format($price, 2, '.', ',');
}