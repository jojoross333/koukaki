// Parallax Nuages 
window.addEventListener('scroll', function () {

    const bigCloud = document.querySelector('.big_cloud');
    const littleCloud = document.querySelector('.little_cloud');
    const placeSection = document.querySelector('#place');

    //distance entre haut de l'élément et haut de  page.
    const sectionOffsetTop = placeSection.offsetTop;
    //position actuelle defilement - Nav récent || nav ancien
    const scrollPosition = window.scrollY || document.documentElement.scrollTop;

    if (scrollPosition >= sectionOffsetTop) {
        // le diviseur ajuste la vitesse : inversément proportionnel
        const parallaxValue = (scrollPosition - sectionOffsetTop) / 5
        //renvoie le plus petit nombre des 2  *** 300px limite énoncé
        const translationX = Math.min(parallaxValue, 300);

        bigCloud.style.transform = 'translateX(' + (-translationX) + 'px) translateY(' +(parallaxValue/8) +'px) '; 
        littleCloud.style.transform =  'translateX(' + (-translationX) + 'px)'; 
    } 
});




