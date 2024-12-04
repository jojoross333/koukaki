// Apparition des sections au chargement effet pour fade in et fade in top 
const SectionOptions = {
    root: null, // Utilise le viewport comme zone de défilement
    rootMargin: '0px', // Marge autour du root. Ici, vous pouvez ajouter votre offset
    threshold: 0.1 // L'élément doit être visible à 10% avant de déclencher l'observer
};

const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        // Si l'élément est visible
        if (entry.isIntersecting) {
            entry.target.classList.add('visible'); // Ajoute la classe 'visible' à l'élément
        } else {
            // Lorsque l'élément sort du viewport, on retire la classe 'visible' pour redémarrer l'animation
            entry.target.classList.remove('visible');
        }
    });
}, SectionOptions);

document.querySelectorAll('.fade-in, .fade-in-top').forEach(element => {
    sectionObserver.observe(element); // Observe chaque section avec la classe fade-in
});

// Apparition des titres au scroll
const options = {
    root: null, // Utilise le viewport comme zone de défilement
    rootMargin: '0px', // Marge autour du root. Ici, vous pouvez ajouter votre offset
    threshold: 1 // L'élément doit être visible à 100% avant de déclencher l'observer
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        // Si l'élément est visible
        if (entry.isIntersecting) {
            entry.target.classList.add('visible'); // Ajoute la classe 'visible' au titre
        } else {
            // Si l'élément sort du viewport, on retire la classe 'visible'
            entry.target.classList.remove('visible');
        }
    });
}, options);

document.querySelectorAll('.appear').forEach(element => {
    observer.observe(element); // Observe chaque élément avec la classe 'appear'
});

// Carrousel Swiper
var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    spaceBetween: 40,
    grabCursor: true,
    slidesPerView: 3,
    loop: true,  // Permet de boucler le carrousel à l'infini
    autoplay: {
        delay: 2000,  // Délai en millisecondes (ici 2000 ms = 2 secondes)
        disableOnInteraction: false, // Permet à l'auto-play de continuer même après interaction de l'utilisateur
    },
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },
});

// Ouverture et fermeture du menu
(function($) {
    $(".burger-open").click(function () {
    console.log("burger-trigger cliqué");
    $(".burger-content").toggleClass("open");
    $(".burger-icon").toggleClass("close");
  });
  $("a").click(function () {
    if ($(".burger-content").hasClass("open")) {
      $(".burger-content").removeClass("open");
      $(".burger-icon").removeClass("close");
    }
  });    
})(jQuery);
