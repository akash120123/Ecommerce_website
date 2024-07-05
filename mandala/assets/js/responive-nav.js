document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');

    console.log('Initial mobile menu display:', getComputedStyle(mobileMenu).display);

    menuToggle.addEventListener('click', function(event) {
        console.log('Menu toggle clicked');
        event.preventDefault();
        mobileMenu.classList.toggle('active');
        console.log('Mobile menu classes after toggle:', mobileMenu.className);
        console.log('Mobile menu display after toggle:', getComputedStyle(mobileMenu).display);
    });
});