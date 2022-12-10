<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php  echo single_post_title(); ?></h4>
                    <ul>
                        <li><a href="<?php get_the_permalink();?>"></a>Home</li> / 
                        <li><?php echo single_post_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>