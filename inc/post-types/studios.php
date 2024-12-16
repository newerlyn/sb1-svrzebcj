<?php
/**
 * Register Studios Custom Post Type
 */
function studiokiss_register_studios_post_type() {
    $labels = array(
        'name' => _x('Studios', 'Post Type General Name', 'studiokiss'),
        'singular_name' => _x('Studio', 'Post Type Singular Name', 'studiokiss'),
        'menu_name' => __('Studios', 'studiokiss'),
        'add_new' => __('Add New', 'studiokiss'),
        'add_new_item' => __('Add New Studio', 'studiokiss'),
        'edit_item' => __('Edit Studio', 'studiokiss'),
    );

    $args = array(
        'label' => __('Studios', 'studiokiss'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 21,
        'menu_icon' => 'dashicons-building',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'studios')
    );

    register_post_type('studio', $args);
}
add_action('init', 'studiokiss_register_studios_post_type');