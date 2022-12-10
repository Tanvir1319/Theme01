<?php
 /* Template Name: Contact Page */
?>
 <?php get_header(); ?>







<?php get_template_part('/inc/breadcum'); ?>

<!-- Contact Us Area End -->
<section class="contact-area pb-100 pt-100" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-10 mx-auto">
                  <div class="row text-center">
                     


                        <?php if( class_exists('ACF') ){ $contact=array(get_field('contact_details'));   
                        foreach($contact as $contact){

                        
                        ?>




                     <div class="col-md-4">
                        <div class="contact-address">
                           <i class="fa <?php echo $contact['icon']; ?>"></i>
                           <h4><?php echo $contact['title']; ?><span><?php echo $contact['address']; ?></span></h4>
                        </div>
                     </div>
                  </div>


<?php } } ?>
                  <div class="row">
                     <div class="col-md-7">
                        <div class="contact-form">
                          
                           </form>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="google-map">
                           <iframe src="<?php echo $contact['map']; ?>"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Us Area End -->




 <?php get_footer(); ?>