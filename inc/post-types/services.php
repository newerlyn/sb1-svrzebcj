<?php
/**
 * Register Services Custom Post Type
 */
function studiokiss_register_services_post_type() {
    $labels = array(
        'name' => _x('Services', 'Post Type General Name', 'studiokiss'),
        'singular_name' => _x('Service', 'Post Type Singular Name', 'studiokiss'),
        'menu_name' => __('Services', 'studiokiss'),
        'add_new' => __('Add New', 'studiokiss'),
        'add_new_item' => __('Add New Service', 'studiokiss'),
        'edit_item' => __('Edit Service', 'studiokiss'),
    );

    $args = array(
        'label' => __('Services', 'studiokiss'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-camera',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'services')
    );

    register_post_type('service', $args);

    // Register Categories for Services
    register_taxonomy('service_category', 'service', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => __('Service Categories', 'studiokiss'),
            'singular_name' => __('Service Category', 'studiokiss'),
        ),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'service-category'),
    ));
}
add_action('init', 'studiokiss_register_services_post_type');