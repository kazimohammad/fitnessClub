<?php
global $fitnessworld;
 get_header(  ); ?>

 <style>
     .breadcrumb_bg {
    background-image: url(<?php echo $fitnessworld['b_breadcrumb']['url']?>) !important;
}
 </style>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                           <p>HOME <span>//</span>Blog single </p>
                     <h2>Blog single</h2>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">

                    <div class="blog_left_sidebar">
                        <?php while(have_posts()):the_post() ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <a href="<?php the_permalink(); ?> "> <?php the_post_thumbnail(  ); ?></a>
                               
                                <a href="#" class="blog_item_date">
                                    <h3><?php the_time( 'd') ?></h3>
                                    <p><?php the_time( 'M') ?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php the_permalink(); ?> ">
                                   <h1><?php the_title(); ?></h1> 
                                </a>
                                <p><?php the_content() ?></p>

                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i><?php the_tags( null,', ',' ' ) ?></a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> <?php comments_number(0,1,'%') ?></a></li>
                                </ul>
                            </div>
                        </article>
                        <?php comments_template(); ?>
                    <?php endwhile; ?>

                       

                   
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

   <!-- footer part start-->
<?php  get_footer(  ); ?>