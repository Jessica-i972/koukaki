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
     <!-- Ajout Swiper via CDN -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
     <link rel="stylesheet" href="https://unpkg.com/swiper/css/autoplay.min.css"> 

	<?php wp_head(); ?> 

</head>

<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

    <header id="masthead" class="site-header">
        <nav id="site-navigation" class="main-navigation mobile-navigation">
            <ul>
                <li class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
                    </a>
                </li>
            </ul>

            <div id="modal" class="modal" aria-controls="primary-menu" aria-expanded="false">
                <button class="modal__burger modal-open">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
                <div class="modal__content">
                    <img class="modal__content--logo" src="<?php echo get_theme_file_uri() . '/assets/images/logo-modal.png'; ?>" alt="">    
                    <ul class="nav__overlay">
                        <li class="modal__content--story flower cat">
                            <a href="#story">Histoire</a>
                        </li>
                        <li class="modal__content--characters flower cat">
                            <a href="#characters">Personnages</a>
                        </li>                       
                        <li class="modal__content--place flower cat">
                            <a href="#place">Lieu</a>
                        </li>
                        <li class="modal__content--studio flower cat"><a href="#studio">Studio Koukaki</a></li>
                    </ul>   
                    <div class="modal__footer flower cat">Studio Koukaki</div>                
                </div>
           </div>

        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->



