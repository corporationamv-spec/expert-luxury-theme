document.addEventListener('DOMContentLoaded', function () {

    const slides = document.querySelectorAll('.expert-slide');
    const prevBtn = document.querySelector('.expert-nav.prev');
    const nextBtn = document.querySelector('.expert-nav.next');

    if (!slides.length) return;

    let current = 0;

    function updateSlides() {
        slides.forEach((slide, index) => {
            slide.classList.remove('is-active');
            if (index === current) {
                slide.classList.add('is-active');
            }
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function () {
            current--;
            if (current < 0) current = slides.length - 1;
            updateSlides();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            current++;
            if (current >= slides.length) current = 0;
            updateSlides();
        });
    }

});
