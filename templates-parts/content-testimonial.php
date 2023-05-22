<?php 
global $fitnessworld;
 ?>
 <section class="review_part course_p gray_bg section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-6">
                    <div class="section_tittle">
                        <p>Testimonials</p>
                        <h2><?php if(function_exists('the_field')){
                            echo the_field('testimonial_title');
                        } ?></h2>
                        <span><?php if(function_exists('the_field')){
                            echo the_field('testimonial_description');
                        } ?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                       
                    
                    <div class="client_review_part owl-carousel">
                         <?php  $testimonials= new wp_query(array
                        ('post_type'   => 'testimonials',
                        'posts_per_page'=> 3,
                        
                        ));
                        While($testimonials->have_posts()):
                        $testimonials->the_post(); ?>

                        <div class="client_review_single media">
                            <div class="row align-items-center">
                                                             <div class="col-lg-5">
                                    <div class="client_img align-self-center">
                                        <?php the_post_thumbnail( ); ?>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="client_review_text media-body">
                                        <h4><?php the_title( ); ?><span><?php if(function_exists('the_field')){
                            echo the_field('author_position');
                        } ?></span></h4>
                                        <div class="star_icon">
                                            <a href="#"> <img src="<?php echo get_theme_file_uri()?>/assets/img/icon/star_1.svg" alt=""> </a>
                                            <a href="#"> <img src="<?php echo get_theme_file_uri()?>/assets/img/icon/star_1.svg" alt=""> </a>
                                            <a href="#"> <img src="<?php echo get_theme_file_uri()?>/assets/img/icon/star_1.svg" alt=""> </a>
                                            <a href="#"> <img src="<?php echo get_theme_file_uri()?>/assets/img/icon/star_1.svg" alt=""> </a>
                                            <a href="#"> <img src="<?php echo get_theme_file_uri()?>/assets/img/icon/star_2.svg" alt=""> </a>
                                        </div>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>

                            </div>
                        </div>
               

                                <?php endwhile;
                wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay_icon">
            <img src="<?php echo get_theme_file_uri()?>/assets/img/animate_icon/icon_6.png" class="amitated_icon_6" alt="animate_icon">
        </div>
    </section>