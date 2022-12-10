<?php
 /* Template Name: Gallery Page */
 get_header(); ?>

      <!-- Header Area Start -->
<?php get_template_part('/inc/breadcum'); ?>







<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">


        

        <?php  if( ! class_exists('ACF') ) {
$args = array( 'post_type' => 'gallery', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); 


while ( $the_query->have_posts() ) { $the_query->the_post(); ?>




            <div class="col-xl-4">
                <div class="single-gallery">
                     <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                     <div class="gallery-hover">
                        <div class="gallery-content">
                           <h3><a href="<?php the_field('gallery_image'); ?>" class="gallery"><i class="fa fa-plus"></i> <?php the_title(); ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>


<?php } } ?>


        </div>
    </div>
</section>




 <?php get_footer(); ?>