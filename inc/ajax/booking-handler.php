<?php
/**
 * Booking Form AJAX Handler
 */
if (!defined('ABSPATH')) exit;

function studiokiss_handle_booking() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'booking_nonce')) {
        wp_send_json_error('Invalid nonce');
    }

    // Sanitize form data
    $event_type = sanitize_text_field($_POST['event_type']);
    $full_name = sanitize_text_field($_POST['full_name']);
    $phone = sanitize_text_field($_POST['phone']);
    $email = sanitize_email($_POST['email']);
    $date = sanitize_text_field($_POST['date']);

    // Validate required fields
    if (empty($event_type) || empty($full_name) || empty($phone) || empty($email) || empty($date)) {
        wp_send_json_error('All fields are required');
    }

    // Send email notification
    $to = get_option('admin_email');
    $subject = sprintf(__('New Booking Request: %s', 'studiokiss'), $event_type);
    $message = sprintf(
        __("New booking request details:\n\nEvent Type: %s\nName: %s\nPhone: %s\nEmail: %s\nDate: %s", 'studiokiss'),
        $event_type,
        $full_name,
        $phone,
        $email,
        $date
    );

    $sent = wp_mail($to, $subject, $message);

    if ($sent) {
        wp_send_json_success('Booking request sent successfully');
    } else {
        wp_send_json_error('Failed to send booking request');
    }
}
add_action('wp_ajax_studiokiss_booking', 'studiokiss_handle_booking');
add_action('wp_ajax_nopriv_studiokiss_booking', 'studiokiss_handle_booking');