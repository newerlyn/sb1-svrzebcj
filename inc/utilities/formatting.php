<?php
/**
 * Text formatting and sanitization functions
 */
if (!defined('ABSPATH')) exit;

function studiokiss_sanitize_phone($phone) {
    return preg_replace('/[^0-9+]/', '', $phone);
}

function studiokiss_format_phone($phone) {
    $phone = studiokiss_sanitize_phone($phone);
    // Add your phone formatting logic here
    return $phone;
}

function studiokiss_excerpt($length = 20, $more = '...') {
    return wp_trim_words(get_the_excerpt(), $length, $more);
}