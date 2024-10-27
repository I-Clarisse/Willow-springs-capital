document.addEventListener('DOMContentLoaded', () => {
    const testimonialsContainer = document.querySelector('.testimonials-container');
    const prevBtn = document.querySelector('.testimonials-prev');
    const nextBtn = document.querySelector('.testimonials-next');
    const testimonialItems = document.querySelectorAll('.testimonial-item');
    const visibleItems = 2; // Show two testimonials at a time
    const itemWidth = testimonialItems[0].offsetWidth; // Each item's width
    let currentIndex = 0;

    // Set container width dynamically based on the number of items
    testimonialsContainer.style.width = `${testimonialItems.length * itemWidth}px`;

    // Function to update the position of the slider
    function updateSliderPosition() {
        const offset = -(currentIndex * itemWidth);
        testimonialsContainer.style.transform = `translateX(${offset}px)`;
    }

    // Previous Button - Decrement index to show previous testimonials
    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex -= visibleItems;
            updateSliderPosition();
        }
    });

    // Next Button - Increment index to show next testimonials
    nextBtn.addEventListener('click', () => {
        if (currentIndex < testimonialItems.length - visibleItems) {
            currentIndex += visibleItems;
            updateSliderPosition();
        }
    });

    // Initial positioning
    updateSliderPosition();
});
