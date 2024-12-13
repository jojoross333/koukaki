<?php
// Charger le style du thème parent
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Pour éviter d'écraser les options de personnalisation du thème parent, utiliser le filtre.
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

// Enqueue les styles et scripts du thème enfant
function theme_enfant_enqueue_scripts() {
    // Charger le style du thème enfant
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css-scss/style.css', array('parent-style'));

    // Charger jQuery (important pour les scripts qui en dépendent)
    wp_enqueue_script('jquery');
    
    // Charger Swiper à partir du CDN (assurez-vous de charger Swiper après jQuery)
    wp_enqueue_script('swiper-script', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js', array('jquery'), null, true);
    wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . '/css-scss/swiper-bundle.min.css');

    // Charger Skrollr à partir du CDN
    wp_enqueue_script('skrollr', get_stylesheet_directory_uri() . '/js/skrollr.min.js', array(), null, true);
    // Charger le fichier JavaScript personnalisé pour initialiser Skrollr
    wp_enqueue_script('parallax-init', get_stylesheet_directory_uri() . '/js/parallax-init.js', array('skrollr', 'jquery'), null, true);

    // Charger les scripts personnalisés après Swiper et jQuery
    wp_enqueue_script('theme-enfant-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('swiper-script', 'jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enfant_enqueue_scripts');








