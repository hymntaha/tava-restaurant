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
<div class="container-fluid nav-tab-style">
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
                        <a class="nav-link" id="main-tab" data-toggle="tab" href="#main" role="tab" aria-controls="main" aria-selected="false">Main Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="yogurt-tab" data-toggle="tab" href="#yogurt" role="tab" aria-controls="yogurt" aria-selected="false">Yogurtlu Kebabs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="seafood-tab" data-toggle="tab" href="#seafood" role="tab" aria-controls="seafood" aria-selected="false">Seafood Entrees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="vegetarian-tab" data-toggle="tab" href="#vegetarian" role="tab" aria-controls="vegetarian" aria-selected="false">Vegetarian Entrees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="oven-tab" data-toggle="tab" href="#oven" role="tab" aria-controls="oven" aria-selected="false">From The Oven</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pasta-tab" data-toggle="tab" href="#pasta" role="tab" aria-controls="pasta" aria-selected="false">Pasta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="wraps-tab" data-toggle="tab" href="#wraps" role="tab" aria-controls="wraps" aria-selected="false">Wraps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="lunch-tab" data-toggle="tab" href="#lunch" role="tab" aria-controls="lunch" aria-selected="false">Lunch Specials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="brunch-tab" data-toggle="tab" href="#brunch" role="tab" aria-controls="brunch" aria-selected="false">Turkish Brunch and Breakfast</a>
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
                <div class="col-12 mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 menu-title">Soups</h1>
                        <?php if ($soup->have_posts()) :
                            while ($soup->have_posts()) : $soup->the_post(); ?>
                                <p class="lead menu-item-style font-weight-bold"><?php echo  the_title(); ?></p>
                                <p class="lead"><?php echo the_content(); ?></p>
                                <p class="price-line font-weight-bold"><span class="price-style">$<?php echo get_post_meta($post->ID, "food_price", true); ?></span></p>
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
                <div class="col-12 mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 menu-title">Cold Appetizers</h1>
                        <?php if ($cold->have_posts()) :
                            while ($cold->have_posts()) : $cold->the_post(); ?>
                                <p class="lead menu-item-style font-weight-bold"><?php echo  the_title(); ?></p>
                                <p class="lead"><?php echo the_content(); ?></p>
                                <p class="price-line font-weight-bold"><span class="price-style">$<?php echo get_post_meta($post->ID, "food_price", true); ?></span></p>
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
                <div class="col-12 mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 menu-title">Salads</h1>
                        <?php if ($salad->have_posts()) :
                            while ($salad->have_posts()) : $salad->the_post(); ?>
                                <p class="lead menu-item-style font-weight-bold"><?php echo  the_title(); ?></p>
                                <p class="lead"><?php echo the_content(); ?></p>
                                <p class="price-line font-weight-bold"><span class="price-style">$<?php echo get_post_meta($post->ID, "food_price", true); ?></span></p>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 menu-title">Sides for Salads</h1>
                        <?php if ($sides_for_salad->have_posts()) :
                            while ($sides_for_salad->have_posts()) : $sides_for_salad->the_post(); ?>
                                <p class="lead menu-item-style font-weight-bold price-line"><?php echo  the_title(); ?> <span class="price-style">$<?php echo get_post_meta($post->ID, "food_price", true); ?></span></p>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="main" role="tabpanel" aria-labelledby="main-tab">
            <div class="row align-items-center">
                <div class="col-12 mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 menu-title">Main Courses</h1>
                        <?php if ($main_courses->have_posts()) :
                            while ($main_courses->have_posts()) : $main_courses->the_post(); ?>
                                <p class="lead menu-item-style font-weight-bold"><?php echo  the_title(); ?></p>
                                <p class="lead"><?php echo the_content(); ?></p>
                                <p class="price-line font-weight-bold"><span class="price-style">$<?php echo get_post_meta($post->ID, "food_price", true); ?></span></p>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 menu-title">Sides For Main Courses</h1>
                        <?php if ($sides_for_main->have_posts()) :
                            while ($sides_for_main->have_posts()) : $sides_for_main->the_post(); ?>
                                <p class="lead menu-item-style font-weight-bold"><?php echo  the_title(); ?></p>
                                <p class="lead"><?php echo the_content(); ?></p>
                                <p class="price-line font-weight-bold"><span class="price-style">$<?php echo get_post_meta($post->ID, "food_price", true); ?></span></p>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="yogurt" role="tabpanel" aria-labelledby="yogurt-tab">
            <div class="row align-items-center">
                <div class="col-12 mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 menu-title">Yogurtlu Kebabs</h1>
                        <?php if ($yogurt_kebabs->have_posts()) :
                            while ($yogurt_kebabs->have_posts()) : $yogurt_kebabs->the_post(); ?>
                                <p class="lead menu-item-style font-weight-bold"><?php echo  the_title(); ?></p>
                                <p class="lead"><?php echo the_content(); ?></p>
                                <p class="price-line font-weight-bold"><span class="price-style">$<?php echo get_post_meta($post->ID, "food_price", true); ?></span></p>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="seafood" role="tabpanel" aria-labelledby="seafood-tab">
            <div class="row align-items-center">
                <div class="col-12 mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 menu-title">Seafood Entrees</h1>
                        <?php if ($seafood_entrees->have_posts()) :
                            while ($seafood_entrees->have_posts()) : $seafood_entrees->the_post(); ?>
                                <p class="lead menu-item-style font-weight-bold"><?php echo  the_title(); ?></p>
                                <p class="lead"><?php echo the_content(); ?></p>
                                <p class="price-line font-weight-bold"><span class="price-style">$<?php echo get_post_meta($post->ID, "food_price", true); ?></span></p>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="vegetarian" role="tabpanel" aria-labelledby="vegetarian-tab">
            <div class="row align-items-center">
                <div class="col-12 mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 menu-title">Vegetarian Entrees</h1>
                        <?php if ($vegetarian_entrees->have_posts()) :
                            while ($vegetarian_entrees->have_posts()) : $vegetarian_entrees->the_post(); ?>
                                <p class="lead menu-item-style font-weight-bold"><?php echo  the_title(); ?></p>
                                <p class="lead"><?php echo the_content(); ?></p>
                                <p class="price-line font-weight-bold"><span class="price-style">$<?php echo get_post_meta($post->ID, "food_price", true); ?></span></p>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="oven" role="tabpanel" aria-labelledby="oven-tab">
            <div class="row align-items-center">
                <div class="col-12 mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 menu-title">From The Oven</h1>
                        <?php if ($oven->have_posts()) :
                            while ($oven->have_posts()) : $oven->the_post(); ?>
                                <p class="lead menu-item-style font-weight-bold"><?php echo  the_title(); ?></p>
                                <p class="lead"><?php echo the_content(); ?></p>
                                <p class="price-line font-weight-bold"><span class="price-style">$<?php echo get_post_meta($post->ID, "food_price", true); ?></span></p>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pasta" role="tabpanel" aria-labelledby="pasta-tab">
            <div class="row align-items-center">
                <div class="col-12 mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 menu-title">Pasta</h1>
                        <?php if ($pasta->have_posts()) :
                            while ($pasta->have_posts()) : $pasta->the_post(); ?>
                                <p class="lead menu-item-style font-weight-bold"><?php echo  the_title(); ?></p>
                                <p class="lead"><?php echo the_content(); ?></p>
                                <p class="price-line font-weight-bold"><span class="price-style">$<?php echo get_post_meta($post->ID, "food_price", true); ?></span></p>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="wraps" role="tabpanel" aria-labelledby="wraps-tab">
            <div class="row align-items-center">
                <div class="col-12 mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 menu-title">Wraps</h1>
                        <?php if ($wraps->have_posts()) :
                            while ($wraps->have_posts()) : $wraps->the_post(); ?>
                                <p class="lead menu-item-style font-weight-bold"><?php echo  the_title(); ?></p>
                                <p class="lead"><?php echo the_content(); ?></p>
                                <p class="price-line font-weight-bold"><span class="price-style">$<?php echo get_post_meta($post->ID, "food_price", true); ?></span></p>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
            <div class="row align-items-center">
                <div class="col-12 mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 menu-title">Lunch Specials $12.95</h1>
                        <h3>MONDAY TO FRIDAY- 11:00 AM TO 3:30PM</h3>
                        <h3>2 COURSES</h3>
                        <h5>Coice of Soup or Salad or an Appetizer and an Entree</h5>
                        <div class="row">
                            <div class="col-6">
                                <h3>Soups-Salad-Appetizer</h3>
                                <p>LENTIL SOUPS</p>
                                <P>CHICKEN SOUP</P>
                                <p>SHEPHERD'S SALAD</p>
                                <P>HUMMUS</P>
                                <p>TABOULEH</p>
                                <p>EZME</p>
                                <p>SPINACH TARATOR</p>
                                <p>BABAGANUSH</p>
                            </div>
                            <div class="col-6">
                                <h3>Entrees</h3>
                                <p>CHICKEN GYRO - Monday-Thursday</p>
                                <p>LAMB GYRO - Only Friday</p>
                                <p>LAMB ADANA</p>
                                <p>KOFTE</p>
                                <p>CHICKEN ADANA</p>
                                <p>CHICKEN SHISH</p>
                                <p>FALAFEL</p>
                                <p>MIXED VEGETABLES CASSEROLE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="brunch" role="tabpanel" aria-labelledby="brunch-tab">
            <div class="row align-items-center">
                <div class="col-12 mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 menu-title">Turkish Breakfast <br>(WEEKEENDS) 9AM TO 3PM</h1>

                        <h3>TAVA TURKISH BREAKFAST PLATTER $18.95</h3>
                        <h4>A variety of premium cheeses, sliced cucumbers and tomatoes, jam, olives, beef salami, dried fruit, choice of omelet or boiled egg, served with tea or coffee pot</h4>
                        <h1 class="display-4 menu-title">Omeletes</h1>
                        <?php if ($omeletes->have_posts()) :
                            while ($omeletes->have_posts()) : $omeletes->the_post(); ?>
                                <p class="lead menu-item-style font-weight-bold"><?php echo  the_title(); ?></p>
                                <p class="lead"><?php echo the_content(); ?></p>
                                <p class="price-line font-weight-bold"><span class="price-style">$<?php echo get_post_meta($post->ID, "food_price", true); ?></span></p>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                        <h1 class="display-4 menu-title">Poached Eggs</h1>
                        <h4>(All egg benedict made with english muffin topped with poached eggs & Hollandaise sauce, served with house salad)</h4>
                        <?php if ($poached->have_posts()) :
                            while ($poached->have_posts()) : $poached->the_post(); ?>
                                <p class="lead menu-item-style font-weight-bold"><?php echo  the_title(); ?> <?php echo get_post_meta($post->ID, "food_price", true); ?></p>
                                <?php if(!empty(the_content())): ?>
                                    <p class="lead"><?php echo the_content(); ?> </p>
                                <?php endif; ?>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
