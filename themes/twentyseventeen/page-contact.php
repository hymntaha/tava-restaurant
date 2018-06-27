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
                    <p class="desc-contact">Tava is located on 5th avenue, just 5 blocks away from D,N,R,W train stop.</p>
                    <p class="call-us">Call Us</p>
                    <p><a href="tel:718-499-5600">718-499-5600</a></p>
                    <p class="address">318 5th Avenue</p>
                    <p class="address">Brookyln, New York, 11215</p>
                    <a href="https://www.google.com/maps/place/318+5th+Ave,+Brooklyn,+NY+11215/@40.6731566,-73.9854787,17z/data=!3m1!4b1!4m5!3m4!1s0x89c25afe291a5d4d:0x38938850fe3850f8!8m2!3d40.6731566!4d-73.98329" target="_blank" class="btn btn-rd btn-lg button-style">View Google Map</a>
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
                <p class="visit-direction">Take theD,N,R,W train to the Union St stop and walk 4 blocks south on 4th ave and make left on 3rd street toward 5th ave.</p>
            </div>
            <div class="col-md-6">
                <i class="fa fa-car fa-7x" aria-hidden="true"></i>
                <p class="commute-title">BY CAR</p>
                <p class="visit-direction">Take FDR and Brooklyn Bridge toward Fort Greene Park and Lafayette Ave. Head south to 3rd street on 5th ave.</p>
            </div>
        </div>
    </div>
</div>

<body <?php body_class(); ?>>


<?php get_footer();