<?php /* Template Name: Menu Page */ ?>
<?php
wp_head();
require('header.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <img class="rounded mx-auto d-block" src="/wp-content/themes/twentyseventeen/assets/images/kofte.jpeg">
        </div>
        <div class="col-md-4">
            <img class="rounded mx-auto d-block" src="/wp-content/themes/twentyseventeen/assets/images/mucver.jpeg">
        </div>
        <div class="col-md-4">
            <img class="rounded mx-auto d-block" src="/wp-content/themes/twentyseventeen/assets/images/somon.jpeg">
        </div>
    </div>
</div>
<?php
$args = array(
    'post_type' => 'menu',
    'category_name' => 'soups'
);
$soup = new WP_Query( $args ); ?>

<?php
$args = array(
    'post_type' => 'menu',
    'category_name' => 'cold-appetizer'
);
$cold = new WP_Query( $args ); ?>

<?php
$args = array(
    'post_type' => 'menu',
    'category_name' => 'salads'
);
$salad = new WP_Query( $args ); ?>

<?php
    $args = array(
    'post_type' => 'menu',
    'category_name' => 'sides-for-salads'
    );
    $sides_for_salad = new WP_Query( $args ); ?>

<?php
$args = array(
    'post_type' => 'menu',
    'category_name' => 'main-courses'
);
$main_courses = new WP_Query( $args ); ?>

<?php
$args = array(
    'post_type' => 'menu',
    'category_name' => 'sides'
);
$sides_for_main = new WP_Query( $args ); ?>

<?php
$args = array(
    'post_type' => 'menu',
    'category_name' => 'yogurtlu-kebabs'
);
$yogurt_kebabs = new WP_Query( $args ); ?>


<div class="container">
    <div class="row align-items-center">
        <div class="col-6 mx-auto">
            <div class="text-center">
                <h1 class="display-4">Soups</h1>
                <?php if ($soup->have_posts()) :
                    while ($soup->have_posts()) : $soup->the_post(); ?>
                        <p class="lead"><?php echo  the_title(); ?></p>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-6 mx-auto">
            <div class="text-center">
                <h1 class="display-4">Cold Appetizers</h1>
                <?php if ($cold->have_posts()) :
                    while ($cold->have_posts()) : $cold->the_post(); ?>
                        <p class="lead"><?php echo  the_title(); ?></p>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-6 mx-auto">
            <div class="text-center">
                <h1 class="display-4">Salads</h1>
                <?php if ($salad->have_posts()) :
                    while ($salad->have_posts()) : $salad->the_post(); ?>
                        <p class="lead"><?php echo  the_title(); ?></p>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-6 mx-auto">
            <div class="text-center">
                <h1 class="display-4">Sides for Salads</h1>
                <?php if ($sides_for_salad->have_posts()) :
                    while ($sides_for_salad->have_posts()) : $sides_for_salad->the_post(); ?>
                        <p class="lead"><?php echo  the_title(); ?></p>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-6 mx-auto">
            <div class="text-center">
                <h1 class="display-4">Main Courses</h1>
                <?php if ($main_courses->have_posts()) :
                    while ($main_courses->have_posts()) : $main_courses->the_post(); ?>
                        <p class="lead"><?php echo  the_title(); ?></p>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-6 mx-auto">
            <div class="text-center">
                <h1 class="display-4">Sides For Main Courses</h1>
                <?php if ($sides_for_main->have_posts()) :
                    while ($sides_for_main->have_posts()) : $sides_for_main->the_post(); ?>
                        <p class="lead"><?php echo  the_title(); ?></p>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-6 mx-auto">
            <div class="text-center">
                <h1 class="display-4">Yogurtlu Kebabs</h1>
                <?php if ($yogurt_kebabs->have_posts()) :
                    while ($yogurt_kebabs->have_posts()) : $yogurt_kebabs->the_post(); ?>
                        <p class="lead"><?php echo  the_title(); ?></p>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
