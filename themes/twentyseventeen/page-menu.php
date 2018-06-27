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
$loop = new WP_Query( $args ); ?>


<div class="container">
    <div class="row align-items-center">
        <div class="col-6 mx-auto">
            <div class="text-center">
                <h1 class="display-4">Soups</h1>
                <?php if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post(); ?>
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
