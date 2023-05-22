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
                <div class="col-lg-8 mb-5 mb-lg-0">

                    <div class="blog_left_sidebar">
                        <h2 style="color:green;">
                            You Searched For : <?php echo get_search_query(  ); ?>
                        </h2>
                        <?php
                         
                         while(have_posts()):the_post() ?>
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
                                <p><?php echo wp_trim_words(get_the_content(),70,'......') ?> <a class="blog_button" href="<?php the_permalink(); ?>">Read More</a></p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i><?php the_tags( null,', ',' ' ) ?></a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> <?php comments_number(0,1,'%') ?></a></li>
                                </ul>
                            </div>
                        </article>
                    <?php endwhile; ?>

                    <?php if(!have_posts()){
                        echo "<h2 style='color:red;text-align:center'; >Nothing Found</h2>";
                    } ?>

                       

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                       <?php get_sidebar(  ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

   <!-- footer part start-->
<?php  get_footer(  ); ?>