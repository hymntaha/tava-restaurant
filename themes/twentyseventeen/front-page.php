<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
</header>
<div class="container-fluid">
    <div class="row">
        <div class="header-content">
            <img class="rounded mx-auto d-block" src="/wp-content/themes/twentyseventeen/assets/images/food-bg.jpeg">
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
<div class="container-fluid">
    <div class="row">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-responsive" src="<?php echo content_url(); ?>/uploads/chicken.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>When Rolls Royce of the ingredients meet the best turkish chef in NY</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-responsive" src="<?php echo content_url(); ?>/uploads/yumurta.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Absolutely delicious food for your palate</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-responsive" src="<?php echo content_url(); ?>/uploads/mix.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Top mediterranean restaurant in Brooklyn</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
