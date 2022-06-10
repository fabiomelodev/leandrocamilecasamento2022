<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- font playfair display -->
    <link rel="preconnect" href="https://fonts.googleapis.com">    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- fontawesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 
    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }
?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

    <header id="masthead" class="l-header d-none site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">

        <div class="container">

            <nav class="navbar navbar-expand-xl p-0">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </div>
    </header><!-- #masthead -->

    <div class="l-menu js-menu">
        
        <div class="l-menu__box u-cursor-pointer mr-3 mr-lg-5 js-icon-open">
            <span class="l-menu__icon u-font-size-20"></span>
        </div>
        
        <ul class="pl-0 pr-3 pr-lg-5 js-menu-list">

            <li class="l-menu__item my-4">
                <i class="fa-solid fa-gift u-font-size-18"></i>

                <a  
                class="l-menu__link"
                href="<?php echo get_home_url( null, 'lista-de-presentes' ); ?>">
                    Lista de presentes
                </a>
            </li>

            <li class="l-menu__item my-4">
                <i class="fa-solid fa-location-dot u-font-size-18"></i>

                <a  
                class="l-menu__link"
                href="#">
                    Data e endereço 
                </a>
            </li>

            <li class="l-menu__item my-4">
            <i class="fa-solid fa-photo-film u-font-size-18"></i>
                <a  
                class="l-menu__link"
                href="#">
                    Galeria de fotos e vídeos
                </a>
            </li>

            <li class="l-menu__item my-4">
            <i class="fa-solid fa-circle-exclamation u-font-size-18"></i>
                <a  
                class="l-menu__link"
                href="#">
                    Reportar erros
                </a>
            </li>
        </ul>
    </div>
    
    <?php endif; ?>