<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

function theme_enfant_enqueue_scripts() {
    wp_enqueue_script('theme-enfant-scripts', get_stylesheet_directory_uri() . '/scripts.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enfant_enqueue_scripts');
// chargement thème enfant 
wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
// chargement skroll
wp_enqueue_script('skrollr-script', 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js', array(), time());

//Chargement Swiper
wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '1.0', time(), true);
wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
// chargement parralax.js 
wp_enqueue_script('parallax-script', get_stylesheet_directory_uri() . '/js/parallax.js', [], false, true );

// Charger jQuery
wp_enqueue_script('jquery');

// Charger le script personnalisé 
wp_enqueue_script('burger-menu-script', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);


