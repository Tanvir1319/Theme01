<?php get_header();
get_template_part('/inc/breadcum.php');
?>


<section class="portfolio-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php the_title(); ?></h2>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                <p><?php the_content(); ?></p>
                <div class="row">
                   <div class="col-xl-12">
                     <h4>project gallery</h4>
                   </div>


                   
                   <?php 
$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 3 );
$the_query = new WP_Query( $args ); 
if ( $the_query->have_posts() ) {
while ( $the_query->have_posts() ) {$the_query->the_post(); ?>



                  
                  <div class="col-xl-4">
                     <div class="project-gallery">
                        <img src="<?php the_field('gallery'); ?>" alt="">
                     </div>
                  </div>
                </div>
                <br><br>
                <div class="row">


<?php } } ?>


                   <div class="col-xl-12">
                        <h4>project overview</h4>
                        <?php the_field('video'); ?>
                   </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="portfolio-sidebar">
                    <h4>Technology Used</h4>
                    <ul>

                  <?php
                  $tec=array(the_field('used_technology', 'option'));
                  foreach($tec as $tec){
                  ?>


                        <li><i class="fa fa-arrow-right"></i> <?php echo $tec; ?></li>
                       <?php } ?>
                    </ul>
                </div>
                <div class="portfolio-sidebar">
                    <h4>project features</h4>
                    <ul>
                        <?php
                        $projectFeature=array(the_field('project_feature', 'option'));
                        foreach($projectFeature as $pf){
                        
                        ?>

                        <li><i class="fa fa-arrow-right"></i> <?php echo $pf; ?></li>
                       
<?php
                        }
?>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



 <?php get_footer(); ?>