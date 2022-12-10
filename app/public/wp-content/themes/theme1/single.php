<?php get_header(); ?>

<?php get_template_part('/inc/blog-breadcum'); ?>

<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php the_title(); ?></h2>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                <p><?php the_content(); ?></p>
                <div class="comments">
                    
                   <?php if (comments_open()){
    comments_template();
} ?>
                </div>
            </div>
            <div class="col-xl-4">
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) { 
   
     dynamic_sidebar( 'sidebar-1' ); } ?>


            </div>
        </div>
    </div>
</section>




 <?php get_footer(); ?>