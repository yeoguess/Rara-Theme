<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
   
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Kameron:400,700|Lato:300,400,700,900|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body class="home">
    <!-- Main -->
    <div id="page" class="hfeed site">
        <!-- header start-->
        <header id="masthead" class="site-header" role="banner">
            <div class="container">
                <div class="site-branding">
                    <h1 class="site-title"> <a href="<?php echo get_site_url(); ?>" rel="home">Get More Readers</a> </h1>
                </div>
                <ul class="social-networks">
                    <li><a href="<?php echo ot_get_option('twitter');?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?php echo ot_get_option('facebook');?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo ot_get_option('google_plus');?>"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <div id="mobile-header">
                    <a href="#site-navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php
                        wp_nav_menu( array(
                          'menu'              => 'primary',
                          'theme_location'    => 'primary',
                          'depth'             => 2,
                          'container'         => 'div',
                          'container_class'   => 'collapse navbar-collapse',
                          'container_id'      => 'bs-example-navbar-collapse-1',
                          'menu_class'        => 'nav navbar-nav',
                          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                          'walker'            => new WP_Bootstrap_Navwalker())
                        );
                    ?>
                </nav>
            </div>
        </header>
        <!-- header end -->