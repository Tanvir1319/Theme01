<?php
 /* Template Name: Blog Page */

 get_header(); ?>





<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php  the_author_posts_link(); ?></h4>
                    <ul>
                        <li><a href="<?php get_the_permalink();?>"></a>Home</li> / 
                        <li><?php the_author_posts_link(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row">

            


            <?php while (have_posts() ) {the_post(); ?>

               <div class="col-md-4">
                  <div class="single-blog">
                  <div class="post-img"  style="background-image:url('<?php the_post_thumbnail_url(); ?>')"></div>
                     <div class="post-content">
                        <div class="post-title">
                           <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>
                        <div class="pots-meta">
                           <ul>
                              <li><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></li>
                              <li><?php the_category(' ,'); ?></li>
                              <li><a href="<?php get_the_permalink(); ?>"><?php echo get_the_author_link(); ?></a></li>
                           </ul>
                        </div>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </section>
      <!-- Latest News Area End -->



<?php get_footer(); ?>