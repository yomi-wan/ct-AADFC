<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AADFC
 * @since 1.0.0
 */

 ?>

<!DOCTYPE html>
    <html <?php language_attributes(); ?> class="no-js"> 
    <head>
    <title><?php wp_title() ;?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />    
        <script src="https://kit.fontawesome.com/50526a3378.js" crossorigin="anonymous"></script>
         <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
    <header>
        <nav class="navbar navbar-expand-lg col" role="navigation">
            <div class="container justify-content-between">
                <div class="d-flex align-items-center">
                    <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                    <?php endif; ?>
                    <h1>Africans &amp; African Descendant<br>Friendship Club of St. Albert</h1>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false" aria-label="Toggle Navigation">
                    <span><i class="fas fa-bars"></i></span>
                </button>
                <?php
                     wp_nav_menu(
                         array(
                            'theme_location'    => 'main-menu',
                            'depth'             => 1, //1=dropdowns and 0= nodropdowns
                            'container'         => 'div',
                            'container_class'   => 'collapse nav-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'navbar-nav mr-auto',
                            'menu_id'           => 'main-menu',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker()
                    ) 
                 );
                ?>
            </div>

        </nav>
    </header>
        <div id="content" class="site-content">