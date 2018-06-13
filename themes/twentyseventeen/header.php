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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="navbar-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                        <span class="social-icon"><i class="fab fa-instagram"></i></span>
                        <span class="social-icon"><i class="fab fa-twitter"></i></span>
                        <div class="navigation-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">menu <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/reservation">reservations</a>
                            </li>
                            <div class="navbar-header">
                                <a class="navbar-brand brand-style" href="/">Tava</a>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link" href="/gallery">gallery</a>
                            </li>
                            <li class="dropdown">
                                <a class="nav-link delivery-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="/delivery">delivery</a>
                                <div class="dropdown-menu dropdown-menu-style" aria-labelledby="dropdownMenuButton">
                                    <a class="nav-link" href="#">Uber Eats</a>
                                    <a class="nav-link" href="#">Seamless</a>
                                    <a class="nav-link" href="#">Caviar</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">contact + visit</a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

