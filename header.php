<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?php wp_title(); ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_theme_file_uri(); ?>/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
   <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!-- Preloader -->
    <div id="preloader">
        <i class="circle-preloader"></i>
        <img src="<?php echo get_theme_file_uri(); ?>/img/core-img/salad.png" alt="">
    </div>

    <!-- Search Wrapper -->
    <div class="search-wrapper">
        <!-- Close Btn -->
        <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#" method="post">
                        <input type="search" name="search" placeholder="Type any keywords...">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-between">
                    <!-- Breaking News -->
                    <div class="col-12 col-sm-6">
                        <div class="breaking-news">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="#">Hello World!</a></li>
                                    <li><a href="#">Welcome to Colorlib Family.</a></li>
                                    <li><a href="#">Hello Delicious!</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Top Social Info -->
                    <div class="col-12 col-sm-6">
                        <div class="top-social-info text-right">
                            <?php $social = get_field('social','option'); ?>
                            <a href="<?php echo $social['pinterest']; ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="<?php echo $social['facebook']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="<?php echo $social['twitter']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="<?php echo $social['behance']; ?>"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="<?php echo $social['linkedin']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="delicious-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="deliciousNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="<?php echo site_url('/'); ?>"><img src="<?php echo get_theme_file_uri(); ?>/img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classynav">
                            <ul>
                                <?php
                                wp_nav_menu(array(
                                    'theme_location'=>'headerMenuLocation',
                                ));
                                ?>
                            </ul>     
                                    <!-- <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="#">About</a>
                                    <li><a href="receipe-post.html">Blog</a></li>
                                    <li><a href="receipe-post.html">Recipes</a></li>
                                    <li><a href="contact.html">Contact</a></li>      -->
                                
                                <div class="search-btn">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->