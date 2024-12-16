<?php
/**
 * Booking Form Template Part
 */
?>
<section class="booking-form">
    <div class="container">
        <h2><?php esc_html_e('Book Your Session', 'studiokiss'); ?></h2>
        <form id="booking-form" class="contact-form" method="post">
            <div class="form-group">
                <label for="event_type"><?php esc_html_e('Event Type', 'studiokiss'); ?></label>
                <select name="event_type" id="event_type" required>
                    <option value=""><?php esc_html_e('Select Event Type', 'studiokiss'); ?></option>
                    <option value="wedding"><?php esc_html_e('Wedding', 'studiokiss'); ?></option>
                    <option value="portrait"><?php esc_html_e('Portrait', 'studiokiss'); ?></option>
                    <option value="family"><?php esc_html_e('Family', 'studiokiss'); ?></option>
                </select>
            </div>

            <div class="form-group">
                <label for="full_name"><?php esc_html_e('Full Name', 'studiokiss'); ?></label>
                <input type="text" name="full_name" id="full_name" required>
            </div>

            <div class="form-group">
                <label for="phone"><?php esc_html_e('Phone', 'studiokiss'); ?></label>
                <input type="tel" name="phone" id="phone" required>
            </div>

            <div class="form-group">
                <label for="email"><?php esc_html_e('Email', 'studiokiss'); ?></label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="date"><?php esc_html_e('Preferred Date', 'studiokiss'); ?></label>
                <input type="date" name="date" id="date" required>
            </div>

            <button type="submit" class="submit-button">
                <?php esc_html_e('Send Request', 'studiokiss'); ?>
            </button>
        </form>
    </div>
</section>