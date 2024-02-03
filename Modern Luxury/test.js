document.addEventListener('DOMContentLoaded', function () {
    const parallaxSections = document.querySelectorAll('.parallax-section');

    function updateParallax() {
        const scrollPosition = window.scrollY;

        parallaxSections.forEach(function (section, index) {
            const translateY = scrollPosition * 0.6; // Ajustez la vitesse selon vos préférences
            section.style.transform = `translateY(${translateY}px)`;
        });
    }

    window.addEventListener('scroll', updateParallax);
});
