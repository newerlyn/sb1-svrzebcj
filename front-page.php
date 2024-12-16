<?php
get_header();
?>

<main class="site-main">
    <!-- Hero Section -->
    <?php get_template_part('template-parts/hero'); ?>

    <!-- Booking Form -->
    <?php get_template_part('template-parts/booking-form'); ?>

    <!-- Gallery Slider -->
    <?php get_template_part('template-parts/gallery-slider'); ?>

    <!-- Services Preview -->
    <?php get_template_part('template-parts/services-preview'); ?>

    <!-- Studio Spaces -->
    <?php get_template_part('template-parts/studio-spaces'); ?>
</main>

<?php
get_footer();
?>