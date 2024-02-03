// Ajoutez ces fonctions pour la logique interactive
function changeMainImage(imageSource) {
    var mainImage = document.getElementById('mainImage');
    mainImage.src = imageSource;
}

document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(function (item) {
        item.addEventListener('click', function () {
            this.classList.toggle('active');
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    // Votre code ou scripts supplémentaires vont ici

    // Masquer l'écran de chargement
    setTimeout(function () {
        document.getElementById("loader-wrapper").style.display = "none";
    }, 2000); 
});

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
