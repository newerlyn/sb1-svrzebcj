/**
 * Gallery Slider Module
 */
export function initGallerySlider() {
    const gallerySlider = document.querySelector('.gallery-slider');
    
    if (!gallerySlider) return;

    return new Swiper(gallerySlider, {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1366: {
                slidesPerView: 3,
            }
        }
    });
}