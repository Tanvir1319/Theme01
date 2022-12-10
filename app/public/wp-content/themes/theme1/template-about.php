<?php
 /* Template Name: About Page */

 get_header(); ?>









<?php get_template_part('/inc/breadcum.php'); ?>

<!-- About Area Start -->
<section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     <div class="page-title">
                        <h4><?php the_title(); ?></h4>
                     </div>
                   <?php the_content(); ?>
                  </div>
               </div>
               <div class="col-md-5">


              <?php if(  class_exists('ACF') ) { $about=array(get_field('about_part_feature','option'));
              foreach($about as $about){
              ?>


                  <div class="single_about">
                     <i class="fa <?php $about['icon']; ?>"></i>
                     <h4><?php $about['heading']; ?></h4>
                     <p><?php $about['description']; ?> </p>
                  </div>

<?php } } ?>

               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->


 
<?php get_footer(); ?>