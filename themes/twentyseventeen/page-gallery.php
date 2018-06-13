<?php /* Template Name: Gallery Page */ ?>
<?php
wp_head();
require('header.php');
?>
<body <?php body_class(); ?>>
    <div class="container-fluid">
        <div class="row">
            <div class="gallery-page-wrapper">
                <div class="transbox about-content">
                    <p class="title-gallery">Image Gallery</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="gallery-section">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'attachment',
                    'post_mime_type' => 'image',
                    'orderby' => 'post_date',
                    'order' => 'desc',
                    'posts_per_page' => '30',
                    'post_status'    => 'inherit'
                );

                $loop = new WP_Query( $args );

                while ( $loop->have_posts() ) : $loop->the_post();

                    ?>
                    <div class="col-md-4 margin-style">
                        <?php
                        $image_caption = get_post( get_post_thumbnail_id() );
                        $image = wp_get_attachment_image_src( get_the_ID(),'medium');

                        ?>
                        <img class="img-responsive img-style" src="<?php echo  $image[0];?>">
                        <p class="image-caption"><?php echo  $image_caption->post_excerpt;?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php get_footer();
