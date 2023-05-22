<?php get_header();

/* 
Template Name: Trainer Page
*/
 ?>
    <!-- Header part end-->
 <style>
     .trainer_bg {
    background-image: url(<?php echo $fitnessworld['train_crumb']['url']?>) !important;
}
 </style>
    
    <!-- breadcrumb start-->
   <section class="breadcrumb trainer_bg breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <p>HOME <span>//</span> trainers</p>
                            <h2>our trainers</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::exclusive_item_part start::-->
    <section class="team_member_section section_padding ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-6">
                    <div class="section_tittle">
                        <h4>our team</h4>
                        <h2><?php if(function_exists('the_field')){
                            echo the_field('team_title');
                        } ?></h2>
                        <span><?php if(function_exists('the_field')){
                            echo the_field('team_description');
                        } ?></span>
                    </div>
                </div>
            </div>
           
            <div class="row d-flex align-items-center">
                  <?php  $our_team= new wp_query(array
                        ('post_type'   => 'our_team',
                        'posts_per_page'=> 6,
                        ));
                        While($our_team->have_posts()):
                        $our_team->the_post(); ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div id="team_member" class="single_blog_img">
                            <?php the_post_thumbnail( );  ?>
                            <div class="social_icon">
                                <ul>
                                    <?php if($fitnessworld['f-id']): ?> 
                                    <li> <a href="<?php echo esc_url( $fitnessworld['f-id']) ?>"><i class="fab fa-facebook-f"></i></a></li>
                                     <?php endif; ?>
                                     <?php if($fitnessworld['t-id']): ?> 
                                    <li><a href="<?php echo esc_url( $fitnessworld['t-id']) ?>"><i class="fab fa-twitter"></i></a></li>
                                     <?php endif; ?>
                                    <?php if($fitnessworld['ins-id']): ?> 
                                    <li><a href="<?php echo esc_url( $fitnessworld['ins-id']) ?>"><i class="fab fa-instagram"></i></a></li>
                                     <?php endif; ?>
                                    <?php if($fitnessworld['skype-id']): ?> 
                                    <li><a href="<?php echo esc_url( $fitnessworld['skype-id']) ?>"><i class="fab fa-skype"></i></a></li>
                                     <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="single_blog_text">
                            <h3><a href="<?php the_permalink() ?> "><?php the_title(); ?></a></h3>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile;
                wp_reset_query(); ?>
            </div>
            
        </div>
    </section>
    <!--::exclusive_item_part end::-->

    <!--:::::::::::sibscribe part start:::::::::::::-->
  <?php get_template_part( 'templates-parts/content', 'subscriber' ) ?>
    <!--:::::::::::sibscribe part end:::::::::::::-->

    <!-- footer part start-->
 <?php get_footer(); ?>
