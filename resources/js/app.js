import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const sliders = document.querySelectorAll('[data-slider]');

    sliders.forEach((slider) => {
        const slides = Array.from(slider.querySelectorAll('[data-slide]'));
        if (!slides.length) {
            return;
        }

        const dots = Array.from(slider.querySelectorAll('[data-slider-dot]'));
        const prevButton = slider.querySelector('[data-slider-prev]');
        const nextButton = slider.querySelector('[data-slider-next]');
        let activeIndex = slides.findIndex((slide) => slide.classList.contains('is-active'));

        if (activeIndex < 0) {
            activeIndex = 0;
        }

        const setActiveSlide = (index) => {
            activeIndex = (index + slides.length) % slides.length;

            slides.forEach((slide, idx) => {
                slide.classList.toggle('is-active', idx === activeIndex);
            });

            dots.forEach((dot, idx) => {
                dot.classList.toggle('is-active', idx === activeIndex);
            });
        };

        if (prevButton) {
            prevButton.addEventListener('click', () => setActiveSlide(activeIndex - 1));
        }

        if (nextButton) {
            nextButton.addEventListener('click', () => setActiveSlide(activeIndex + 1));
        }

        dots.forEach((dot, dotIndex) => {
            dot.addEventListener('click', () => setActiveSlide(dotIndex));
        });

        setActiveSlide(activeIndex);
    });
});
