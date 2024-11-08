document.addEventListener('DOMContentLoaded', function () {
    const banner = document.querySelector('.banner');
    const logo = document.querySelector('.logo');
    const storySection = document.querySelector('.site-main'); // Cibler la section principale

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                banner.classList.add('visible'); // Ajoute la classe 'visible' à la bannière
            }
        });
    });

    const logoObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                logo.classList.add('visible'); // Ajoute la classe 'visible' au logo
            }
        });
    });

    // Nouvel observer pour la section story
    const storyObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                storySection.classList.add('visible'); // Ajoute la classe 'visible' à la section story
            }
        });
    });

    observer.observe(banner); // Observe la bannière
    logoObserver.observe(logo); // Observe le logo
    storyObserver.observe(storySection); // Observe la section principale
});

