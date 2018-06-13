<?php /* Template Name: Contact Page */ ?>
<?php
wp_head();
require('header.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="contact-page-wrapper">
            <div class="transbox about-content">
                    <p class="title-contact">Tava</p>
                    <p class="desc-contact">Tava is located on X avenue, just 3 blocks away from X train stop.</p>
                    <p class="call-us">Call Us</p>
                    <p class="call-us">(123) 456-7890</p>
                    <p class="address">216 East 29th Street</p>
                    <p class="address">New York, New York 10016</p>
                    <a href="" class="btn btn-rd btn-lg button-style">View Google Map</a>
            </div>
        </div>
    </div>
</div>
<div class="direction-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <i class="fa fa-subway fa-7x" aria-hidden="true"></i>
                <p class="commute-title">BY SUBWAY</p>
                <p class="visit-direction">Take the N/Q train to the 30th Avenue stop and walk 4 blocks east. Or the M train at Steinway and walk north to 30th Avenue and walk west to 36th Street.</p>
            </div>
            <div class="col-md-6">
                <i class="fa fa-car fa-7x" aria-hidden="true"></i>
                <p class="commute-title">BY CAR</p>
                <p class="visit-direction">Take the N/Q train to the 30th Avenue stop and walk 4 blocks east. Or the M train at Steinway and walk north to 30th Avenue and walk west to 36th Street.</p>
            </div>
        </div>
    </div>
</div>

<body <?php body_class(); ?>>


<?php get_footer();