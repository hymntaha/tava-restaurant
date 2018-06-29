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

<?php
$args = array(
    'post_type' => 'menu',
    'category_name' => 'seafood-entrees'
);
$seafood_entrees = new WP_Query( $args ); ?>

<?php
$args = array(
    'post_type' => 'menu',
    'category_name' => 'vegetarian-entrees'
);
$vegetarian_entrees = new WP_Query( $args ); ?>

<?php
$args = array(
    'post_type' => 'menu',
    'category_name' => 'from-the-oven'
);
$oven = new WP_Query( $args ); ?>

<?php
$args = array(
    'post_type' => 'menu',
    'category_name' => 'pasta'
);
$pasta = new WP_Query( $args ); ?>

<?php
$args = array(
    'post_type' => 'menu',
    'category_name' => 'wraps'
);
$wraps = new WP_Query( $args ); ?>

<?php
$args = array(
    'post_type' => 'menu',
    'category_name' => 'omelets'
);
$omeletes = new WP_Query( $args ); ?>

<?php
$args = array(
    'post_type' => 'menu',
    'category_name' => 'poached-eggs'
);
$poached = new WP_Query( $args ); ?>
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-12 d-flex justify-content-center">
            <div class="text-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="soup-tab" data-toggle="tab" href="#soup" role="tab" aria-controls="soup" aria-selected="true">Soups</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="cold-tab" data-toggle="tab" href="#cold" role="tab" aria-controls="cold" aria-selected="false">Cold Appetizers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="salad-tab" data-toggle="tab" href="#salad" role="tab" aria-controls="salad" aria-selected="false">Salads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Main Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Yogurtlu Kebabs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Seafood Entrees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Vegetarian Entrees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">From The Oven</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Pasta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Wraps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Lunch Specials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Turkish Brunch and Breakfast</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="soup" role="tabpanel" aria-labelledby="soup-tab">
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
        </div>

        <div class="tab-pane fade" id="cold" role="tabpanel" aria-labelledby="cold-tab">
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
        </div>


        <div class="tab-pane fade" id="salad" role="tabpanel" aria-labelledby="salad-tab">
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
        </div>

        <div class="tab-pane fade" id="salad" role="tabpanel" aria-labelledby="salad-tab">
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
        <div class="row align-items-center">
            <div class="col-6 mx-auto">
                <div class="text-center">
                    <h1 class="display-4">Seafood Entrees</h1>
                    <?php if ($seafood_entrees->have_posts()) :
                        while ($seafood_entrees->have_posts()) : $seafood_entrees->the_post(); ?>
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
                    <h1 class="display-4">Vegetarian Entrees</h1>
                    <?php if ($vegetarian_entrees->have_posts()) :
                        while ($vegetarian_entrees->have_posts()) : $vegetarian_entrees->the_post(); ?>
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
                    <h1 class="display-4">From The Oven</h1>
                    <?php if ($oven->have_posts()) :
                        while ($oven->have_posts()) : $oven->the_post(); ?>
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
                    <h1 class="display-4">Pasta</h1>
                    <?php if ($pasta->have_posts()) :
                        while ($pasta->have_posts()) : $pasta->the_post(); ?>
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
                    <h1 class="display-4">Wraps</h1>
                    <?php if ($wraps->have_posts()) :
                        while ($wraps->have_posts()) : $wraps->the_post(); ?>
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
                    <h1 class="display-4">Lunch Specials</h1>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-6 mx-auto">
                <div class="text-center">
                    <h1 class="display-4">Turkish Breaksfast</h1>
                    <h1 class="display-4">Omeletes</h1>
                    <?php if ($omeletes->have_posts()) :
                        while ($omeletes->have_posts()) : $omeletes->the_post(); ?>
                            <p class="lead"><?php echo  the_title(); ?></p>
                        <?php
                        endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                    <h1 class="display-4">Poached Eggs</h1>
                    <?php if ($poached->have_posts()) :
                        while ($poached->have_posts()) : $poached->the_post(); ?>
                            <p class="lead"><?php echo  the_title(); ?></p>
                        <?php
                        endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
