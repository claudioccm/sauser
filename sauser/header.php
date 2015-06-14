<!DOCTYPE html>

<!--[if IE 9 ]><html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->

<head>

    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/foundation/css/foundation.min.css">  
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/foundation/css/normalize.css"> 
    <script src="//use.typekit.net/vfi3ybe.js"></script>
    <script>try{Typekit.load();}catch(e){}</script> 

</head>

<body id="<?php print get_stylesheet(); ?>" <?php body_class('ct-body'); ?>>
    <header id="site-header" class="site-header wrapper" role="banner">
        <!-- <div class="b-social-media">
            <a href="https://twitter.com/sauserwind" class="e-twitter" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://instagram.com/sauserwind" class="e-instagram" target="_blank"><i class="fa fa-instagram"></i></a>
        </div> -->
        <?php wp_nav_menu( array( 'theme_location' => 'primary',  'menu_id' => 'menu-primary-items', 'items_wrap' => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>') ); ?>
        <?php //get_template_part( 'menu', 'primary' ); // adds the primary menu ?>
        <div class="main-banner">
            <a class="homepage" href="<?php get_site_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/sauser-layout-header.jpg" alt=""></a>
            <a class="all" href="<?php get_site_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/sauser-layout-header-min.jpg" alt=""></a>
        </div>
        <div class="section-menu">
            <a class="section-menu-item race-reports" href="<?php get_site_url(); ?>/category/race-report/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/sauser-layout-races.jpg" alt="">
            </a>
            <a class="section-menu-item gear-review" href="<?php get_site_url(); ?>/category/gear-review/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/sauser-layout-gear.jpg" alt="">
            </a>
            <a class="section-menu-item rides" href="<?php get_site_url(); ?>/category/free-rides/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/sauser-layout-rides.jpg" alt="">
            </a>
        </div>
    </header>

<div id="main" class="main" role="main">


























