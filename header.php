<?php
/**
 * Created by PhpStorm.
 * User: isk
 * Date: 04.02.18
 * Time: 12:38
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <title><?php _e('Compact - Multipurpose Corporate Business Website Template', 'wp-theme-base-translate'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="<?php bloginfo("pingback_url"); ?>">

    <?php
    // Header Wordpress
    wp_head();
    ?>

    <!-- Favicons
    ================================================== -->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" type="image/x-icon">

    <!-- LOAD CSS FILES -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/main.css" rel="stylesheet" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/switcher/demo.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/switcher/colors/blue.css" type="text/css" id="colors">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css" type="text/css">

</head>

<body>
<!-- Preload images start //-->
<div class="images-preloader" id="images-preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- Preload images end //-->

<div id="wrapper">

    <!-- header begin -->
    <header class="site-header-1 site-header">
        <!-- Main bar start -->
        <div id="sticked-menu" class="main-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- logo begin -->
                        <div id="logo" class="pull-left">
                            <a href="<?php echo get_permalink(7); ?>">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="" class="logo">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- btn-mobile menu begin -->
                        <a id="show-mobile-menu" class="btn-mobile-menu hidden-lg hidden-md"><i class="fa fa-bars"></i></a>
                        <!-- btn-mobile menu close -->

                        <!-- mobile menu begin -->
                        <nav id="mobile-menu" class="site-mobile-menu hidden-lg hidden-md">
                            <ul></ul>
                        </nav>
                        <!-- mobile menu close -->

                        <!-- desktop menu begin -->
                        <!--
                        <nav id="desktop-menu" class="site-desktop-menu hidden-xs hidden-sm">
                            <ul class="clearfix">
                                <li class="active">
                                    <a href="accueil.html">Accueil</a>
                                </li>
                                <li>
                                    <a href="page.html">A propos</a>
                                </li>
                                <li>
                                    <a href="categories.html">Blog</a>
                                    <ul>
                                        <li><a href="categories.html">Finance</a></li>
                                        <li><a href="categories.html">Bilan</a></li>
                                        <li><a href="categories.html">Conseils</a></li>
                                        <li><a href="categories.html">Juridique</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        -->
                        <?php
                        // Menu principal
                        $args = array(
                            "menu" => "main-menu",
                            "menu_class" => "clearfix",
                            "container" => "nav",
                            "container_class" => "site-desktop-menu hidden-xs hidden-sm",
                            "container_id" => "desktop-menu",
                            "theme_location" => "main-menu"
                        );

                        wp_nav_menu($args);
                        ?>

                        <!-- desktop menu close -->

                        <!-- Header Group Button Right begin -->
                        <div class="header-buttons pull-right hidden-xs hidden-sm">

                            <div class="header-contact">
                                <ul class="clearfix">
                                    <li class="phone"><i class="fa fa-phone"></i> <span><?php _e("0112-826-2789", "wp-theme-base-translate"); ?></span></li>
                                    <li class="border-line">|</li>
                                </ul>
                            </div>

                            <!-- Button Modal popup searchbox -->
                            <div class="search-button">
                                <!-- Trigger the modal with a button -->
                                <a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <!-- Header Group Button Right close -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header close -->
    <div class="gray-line"></div>

    <!-- Modal Search begin -->
    <div id="myModal" class="modal fade" role="dialog">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-dialog myModal-search">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <form role="search" method="get" class="search-form" action="">
                        <input type="search" class="search-field" placeholder="<?php _e("Search here...","wp-theme-base-translate"); ?>" value="" title="" />
                        <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search close -->
