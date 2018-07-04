<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="navbar-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light navbar-style d-none d-lg-block d-xl-block d-md-none">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!--                    <a class="nav-link social-icon" href="https://www.facebook.com/TAVA-Turkish-Mediterranean-188981448422637/" target="_blank"><i class="fab fa-facebook-f"></i></a>-->
<!--                    <a class="nav-link social-icon" href="https://www.instagram.com/tavagrill/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>-->

                    <ul class="navbar-nav mr-auto">
                        <div class="navigation-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="/menu">menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/reservation">reservations</a>
                            </li>
                            <div class="navbar-header">
                                <a class="navbar-brand brand-style nav-link active" href="/"><img class="rounded mx-auto d-block" src="/wp-content/themes/twentyseventeen/assets/images/logo.jpeg"></a>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link" href="/gallery">gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.yelp.com/biz/tava-turkish-and-mediterranean-brooklyn?osq=tava" target="_blank">find us on yelp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">contact + visit</a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light navbar-style d-sm-block d-md-block d-lg-none d-xl-none">
            <a class="navbar-brand brand-style nav-link active" href="/"><img class="rounded mx-auto d-block" src="/wp-content/themes/twentyseventeen/assets/images/logo.jpeg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/menu">menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/reservation">reservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery">gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.yelp.com/biz/tava-turkish-and-mediterranean-brooklyn?osq=tava" target="_blank">find us on yelp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">contact + visit</a>
                    </li>
                    <li class="nav-item">
                        <a href="tel:718-499-5600" class="nav-link">718-499-5600</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

