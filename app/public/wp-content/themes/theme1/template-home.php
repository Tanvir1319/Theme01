<?php 

/*

Template Name: Home Page

*/

get_header(); ?>
 





      <!-- Slider Area Start -->
      <section class="slider-area" id="home">

         <div class="slider owl-carousel">


            

         <?php 
$args = array( 
   'post_type' => 'sliders',
    'posts_per_page' => 3 );
$the_query = new WP_Query( $args ); 


 while ( $the_query->have_posts() ) { $the_query->the_post(); ?>


            <div class="single-slide" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="slide-table">
                           <div class="slide-tablecell">
                              <h4>
                              <?php the_field('slider_heading'); ?></h4>
                              <h2><?php the_title(); ?></h2>
                              <p><?php the_content(); ?></p>

                              <?php if(get_field( "slider_btn_text" ) ){ ?>


                              <a href="<?php the_field('slider_btn_link'); ?>" class="box-btn"><?php the_field('slider_btn_text'); ?><i class="fa fa-angle-double-right"></i></a>
                              <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

<?php }
wp_reset_postdata();
 
?>

         </div>
      </section>
      <!-- Slider Area Start -->
       <!-- About Area Start -->
       <section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span><?php the_field('sub_heading', 'option'); ?></span> <?php the_field('heading', 'option'); ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php the_field('description', 'option'); ?> </p>
               </div>
            </div>


            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     <div class="page-title">
                        <h4><?php the_field('about_welcome_text', 'option');  ?></h4>
                     </div>
                     <?php the_field('about_welcome_description', 'option');  ?>
                     <a href="<?php the_field('about_button_link', 'option');  ?>" class="box-btn"><?php the_field('about_button_text', 'option');  ?> <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
               <div class="col-md-5">

               <?php $about=get_field('about_part_feature', 'option'); 
               foreach($about as $about){
               ?>      


                  <div class="single_about">
                     <i class="fa <?php echo $about['icon']; ?>"></i>
                     <h4><?php echo $about['heading']; ?></h4>
                     <p><?php echo $about['description']; ?></p>
                  </div>


               <?php } ?>


               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->



    
      <!-- Choose Area End -->
      <section class="choose">
         <div class="container">
            <div class="row pt-100 pb-100">
               <div class="col-md-6">
                  <div class="faq">
                     <div class="page-title">
                        <h4>faq</h4>
                     </div>
                     <div class="accordion" id="accordionExample">


                     <?php $faq= get_field('faq','option');
                     foreach($faq as $faq){ ?>




                        <div class="card">
                           <div class="card-header" id="headingThree">
                              <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 <?php echo $faq['question'];  ?>
                                 </button>
                              </h5>
                           </div>
                           <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body ">
                              <?php echo $faq['answer'];  ?>
                              </div>
                           </div>
                        </div>





<?php 
                     }
   ?>




                     </div>
                  </div>
               </div>





               <div class="col-md-6">
                  <div class="skills">
                     <div class="page-title">
                        <h4>our skills</h4>
                     </div>


                    <?php 
                    $skill=get_field('skill','option');
                    foreach($skill as $skill){
                    ?>

                     <div class="single-skill">
                        <h4><?php echo $skill['skill_name']; ?></h4>
                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><?php echo $skill['skill_percentage']; ?></div>
                     </div>
                  </div>
                  <?php }  ?>



               </div>
            </div>
         </div>
      </section>
      <!-- Choose Area End -->





      <!-- Services Area Start -->
      <section class="services-area pt-100 pb-50" id="services">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span><?php the_field('sub-heading', 'option'); ?></span> <?php the_field('heading', 'option'); ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php the_field('description', 'option'); ?></p>
               </div>
            </div>
            <div class="row">





            <?php 
$args = array( 'post_type' => 'services', 'posts_per_page' => 6 );
$the_query = new WP_Query( $args ); 
?>

<?php while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
           

               <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="<?php the_field('icon'); ?>"></i>
                     <h4><?php the_title(); ?></h4>
                     <p><?php the_content(); ?> </p>
                  </div>
               </div>

<?php 
}
wp_reset_postdata();
?>

            </div>
         </div>
      </section>
      <!-- Services Area End -->
      
      <!-- Counter Area End -->
      <section class="counter-area">
         <div class="container-fluid">
            <div class="row">


            <?php 
$args = array( 
   'post_type' => 'counter',
 'posts_per_page' => 4 
);
$the_query = new WP_Query( $args ); 


while ( $the_query->have_posts() ) { $the_query->the_post(); ?>



               <div class="col-md-3">
                  <div class="single-counter">
                     <h4><i class="<?php the_field('icon'); ?>"></i><span class="counter"><?php the_field('counter_number'); ?></span><?php the_field('counter_text'); ?></span></h4>
                  </div>
               </div>
<?php } 
wp_reset_postdata();
?>

               



            </div>
         </div>
      </section>
      <!-- Counter Area End -->
      <!-- Team Area Start -->
      <section class="team-area pb-100 pt-100" id="team">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span><?php the_field('sub-heading', 'option'); ?></span> <?php the_field('heading', 'option'); ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php the_field('description', 'option'); ?> </p>
               </div>
            </div>
            <div class="row">


              
           

<?php 
$args = array( 'post_type' => 'team', 'posts_per_page' => 3 );
$the_query = new WP_Query( $args ); 


 while ( $the_query->have_posts() ) { $the_query->the_post(); ?>



               <div class="col-md-4">
                  <div class="single-team">
                     <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                     <div class="team-hover">
                        <div class="team-content">
                           <h4><?php the_field('name'); ?> <span><?php the_field('designation');?></span></h4>
                           <ul>

                           <?php if(get_field('fb_link')){ ?>
                              <li><a href="<?php the_field('fb_link'); ?>"><i class="fa fa-facebook"></i></a></li>

                                 <?php } ?>
                                 <?php if(get_field('twitter_link')){ ?>
                              <li><a href="<?php the_field('twitter_link'); ?>"><i class="fa fa-twitter"></i></a></li>
                                    <?php } ?>

                              <?php if(get_field('linkdin_')){ ?>
                              <li><a href="<?php the_field('linkdin_'); ?>"><i class="fa fa-linkedin"></i></a></li>
                              <?php } ?>
                              <?php if(get_field('google_plus_link')){ ?>
                              <li><a href="<?php the_field('google_plus_link'); ?>"><i class="fa fa-google-plus"></i></a></li>
                              <?php } ?>
                           </ul>
                        </div>
                     </div>
                  </div>

<?php }
wp_reset_postdata();
?>
                  
               </div>
            </div>
         </div>
      </section>
      <!-- Team Area End -->
     
      <!-- Testimonials Area Start -->
      <section class="testimonial-area pb-100 pt-100" id="testimonials">
         <div class="container">
            <div class="row section-title white-section">
               <div class="col-md-6 text-right">
                  <h3><span><?php the_field('sub-heading', 'option'); ?></span> <?php the_field('heading', 'option'); ?></h3>
               </div>
               <div class="col-md-6">
                  <p><?php the_field('description', 'option'); ?></p>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonials owl-carousel">


                  <?php 
$args = array( 'post_type' => 'testimonial', 'posts_per_page' => 4 );
$the_query = new WP_Query( $args ); 


while ( $the_query->have_posts() ) { $the_query->the_post(); ?>



                     <div class="single-testimonial">
                        <div class="testi-img">
                           <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                        </div>
                        <p><?php the_field('name'); ?></p>
                        <h4><?php the_field('comment'); ?> <span><?php the_field('designation'); ?></span></h4>
                     </div>
<?php }
wp_reset_postdata();
?>



                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonilas Area End -->


      <!-- Latest News Area Start -->
      <section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span><?php the_field('sub-heading', 'option'); ?></span> <?php the_field('heading', 'option'); ?></h3>
               </div>
               <div class="col-md-6">
                  <p> <?php the_field('description', 'option'); ?></p>
               </div>
            </div>
            <div class="row">


              
            <?php 
$args = array( 
   'post_type' => 'post',
    'posts_per_page' => 3 );
$the_query = new WP_Query( $args ); 

 while ( $the_query->have_posts() ) {$the_query->the_post(); ?>



               <div class="col-md-4">
                  <div class="single-blog">
                     <div class="post-img" style="background-image:url('<?php the_post_thumbnail_url(); ?>')"></div>
                     <div class="post-content">
                        <div class="post-title">
                           <h4><a href="<?php the_permalink(''); ?>"><?php the_title(); ?></a></h4>
                        </div>
                        <div class="pots-meta">
                           <ul>
                              <li><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></li>
                              <li><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></li>
                           </ul>
                        </div>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>
<?php }
wp_reset_postdata();
?>



            </div>
         </div>
      </section>
      <!-- Latest News Area End -->
      
 





<?php get_footer(); ?>