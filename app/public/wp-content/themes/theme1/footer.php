<?php wp_footer(); ?>

<!-- CTA Area Start -->
<section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h4><?php the_field('cta_title'); ?> <span><?php the_field('cta_details'); ?></span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href="<?php the_field('button_link'); ?>" class="box-btn"><?php the_field('button_text'); ?> <i class="fa fa-angle-double-right"></i></a>
         </div>
      </div>
   </div>
</section>
<!-- CTA Area End -->
<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
   <div class="container">
      <div class="row">


      <?php if ( is_active_sidebar( 'Footer-1' ) ) {
    
     dynamic_sidebar( 'Footer-1' ); } ?>


    <?php if ( is_active_sidebar( 'Footer-2' ) ) {
   
     dynamic_sidebar( 'Footer-2' ); } ?>


    <?php if ( is_active_sidebar( 'Footer-3' ) ) {
     dynamic_sidebar( 'Footer-3' );}  ?>


         <div class="col-lg-3 col-md-6">
            <div class="single-footer contact-box">
               <h4><?php the_field('contact_info_text'); ?></h4>
               <ul>

            <?php
            $cit= array(the_field('contact_part','option'));
            foreach($cit as $ct){
            ?>

                  <li><i class="fa <?php $ct['icon']; ?>"></i> <?php $ct['contact_info_text']; ?></li>
                  

<?php } ?>


               </ul>
            </div>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-6">
            <p>&copy; <?php the_field('copyright_'); ?></p>
         </div>
         <div class="col-md-6 text-right">
            <ul>
<?php 
$soc=array(get_field('socials','option'));
foreach($soc as $soc){
?>

               <li><a href="<?php $soc['social_url']; ?>"><i class="fa <?php $soc['icon_footer']; ?>"></i></a></li>
              <?php } ?>
           
           
           
            </ul>
         </div>
      </div>
   </div>
</footer>

</body>
</html>