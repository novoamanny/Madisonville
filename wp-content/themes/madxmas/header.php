<?php
/**
 * The header for the theme.
 *
 * This is the template that displays all of the <head> section and before the main content area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css"> <!-- WordPress Stylesheet for Theme Reference -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/js/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/js/assets/owl.theme.default.min.css">   

        <link rel="stylesheet" href="https://use.typekit.net/yeh6lyc.css">

        <?php wp_head(); ?>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T8NPNLP7');</script>
        <!-- End Google Tag Manager -->

    </head>
    <body <?php body_class('sub'); ?>>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8NPNLP7"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <header>
            <div class="top">
                <div class="container flex">
                    <div class="navwrap">
                        <!--DESKTOP MENU-->
                        <?php 
                            $uri = $_SERVER['REQUEST_URI'];
                            $path = parse_url($uri, PHP_URL_PATH); // gives "/pwsdedtech"
                            $pathWithoutSlash = substr($path, 1);
                            // echo $pathWithoutSlash;
                            // if(!$pathWithoutSlash) :
                        ?>
                        <nav class="desktopmenu">
                            <div class="left">
                                <?php wp_nav_menu(array('theme_location' => 'top', 'menu_class' => 'navigation')); ?>
                            </div>
                        
                            <?php if (!$pathWithoutSlash) : ?>
                            <div class="brand">
                                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo the_field('nav_logo', 'option'); ?>" class="logo" alt="Madisonville Christmas logo" /></a>
                                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo the_field('nav_logo2', 'option'); ?>" class="logo mobile" alt="Madisonville Christmas logo" /></a>
                            <?php else : ?>
                            <div class="brand brand-alt">
                                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo the_field('nav_logo2', 'option'); ?>" class="logo" alt="Madisonville Christmas logo" /></a>
                            <?php endif; ?>
                        </div>
                            <div class="right">
                                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'navigation')); ?>
                            </div>
                            <!--MOBILE MENU-->
                            <a id="menu-toggle" class="mobile-menu-toggle" href="#menu">Menu</a>
                        </nav>
                        <div class="white-bar"></div>
                        <nav id="menu" class="mobilemenu">
                            <div class="inner">
                                <?php wp_nav_menu(array('theme_location' => 'mobile', 'menu_class' => 'mobile', 'depth' => 1)); ?>
                                <a href="#" class="close">Close</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>