<?php
/**
 * Theme functions and definitions
 */
if (!defined('ABSPATH')) exit;

// Setup
require_once get_template_directory() . '/inc/setup/theme-setup.php';
require_once get_template_directory() . '/inc/setup/enqueue.php';

// Post Types
require_once get_template_directory() . '/inc/post-types/services.php';
require_once get_template_directory() . '/inc/post-types/studios.php';

// Utilities
require_once get_template_directory() . '/inc/utilities/template-functions.php';
require_once get_template_directory() . '/inc/utilities/formatting.php';

// AJAX Handlers
require_once get_template_directory() . '/inc/ajax/booking-handler.php';

// Customizer
require_once get_template_directory() . '/inc/customizer/customizer.php';