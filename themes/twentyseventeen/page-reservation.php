<?php /* Template Name: Reservation Page */ ?>
<?php
wp_head();
require('header.php');
?>
<body <?php body_class(); ?>>
<div class="container-fluid">
    <div class="row">
        <div class="reservation-page-wrapper">
            <div class="transbox about-content">
                <p class="title-reservation">Make A Reservation</p>
                <p class="desc-reservation">We are here to help</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <?php echo do_shortcode("[booking-form]"); ?>
        </div>
    </div>
</div>
<?php get_footer();
