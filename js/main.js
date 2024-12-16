/**
 * Main JavaScript file
 */
import { initGallerySlider } from './modules/gallery-slider';
import { initBookingForm } from './modules/booking-form';
import { initMobileMenu } from './modules/mobile-menu';

document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    initGallerySlider();
    initBookingForm();
});