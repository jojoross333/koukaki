<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>
    <header id="masthead" class="site-header">
        <nav id="site-navigation" class="main-navigation">
            <ul>
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
            </ul>

            <div id="burger" class="burger" aria-controls="primary-menu" aria-expanded="false">
                <button class="burger-icon burger-open">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>

                <div class="burger-content">
                    <img class="burger-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?>" alt="image logo">
                    <ul>
                        <li><a href="#story">Histoire</a></li>
                        <li class="burger-characters"><a href="#characters">Personnages</a></li>
                        <li class="burger-place"><a href="#place">Lieu</a></li>
                        <li class="burger-studio"><a href="#studio">Studio Koukaki</a></li>
                    </ul>

                    <div>
                        <img class="hibiscus" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus.png'; ?>" alt="image hibiscus">
                        <img class="orchid" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?>" alt="image orchid">
                        <img class="random-flower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random-flower.png'; ?>" alt="image random fleur">
                        <img class="flower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'; ?>" alt="image fleur">
                        <img class="sunflower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/sunflower.png'; ?>" alt="image soleil fleur">
                        <img class="black-cat" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/black-cat.png'; ?>" alt="chat noir">
                        <img class="purple-cat" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/purple-cat.png'; ?>" alt="chat violet">
                        <img class="yellow-cat" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/yellow-cat.png'; ?>" alt="chat jaune">
                    </div>

                    <div class="burger-footer">
                        <a href="#">STUDIO KOUKAKI</a></li>
                    </div>
                </div>
            </div>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->