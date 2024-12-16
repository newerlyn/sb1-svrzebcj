/**
 * Mobile Menu Module
 */
export function initMobileMenu() {
    const menuToggle = document.querySelector('.menu-toggle');
    const primaryMenu = document.querySelector('.primary-menu');
    
    if (!menuToggle || !primaryMenu) return;

    menuToggle.addEventListener('click', () => {
        primaryMenu.classList.toggle('active');
        menuToggle.classList.toggle('active');
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!menuToggle.contains(e.target) && !primaryMenu.contains(e.target)) {
            primaryMenu.classList.remove('active');
            menuToggle.classList.remove('active');
        }
    });
}