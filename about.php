<?php 
global $fitnessworld;
 get_header(  );
 /*
 Template name: About Page
 */
 ?>
    <!-- Header part end-->
     <style>
     .about_p {
    background-image: url(<?php echo $fitnessworld['u_breadcrumb']['url']?>) !important;
}
 </style>

    <!-- breadcrumb start-->
   <section class="breadcrumb about_p breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <p>HOME <span>//</span> ABOUT US</p>
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::exclusive_item_part start::-->
  
   <?php get_template_part( 'templates-parts/content', 'about' ) ?>
    <!--::exclusive_item_part end::-->

    <!-- extends part start-->
   <?php get_template_part( 'templates-parts/content', 'extend' ) ?>
    <!-- team part end-->

    <!--::review_part start::-->
  <?php get_template_part( 'templates-parts/content', 'testimonial' ) ?>
    <!--::review_part end::-->

    <!--:::::::::::sibscribe part start:::::::::::::-->
    <?php get_template_part( 'templates-parts/content', 'subscriber' ) ?>
    <!--:::::::::::sibscribe part end:::::::::::::-->

   <?php get_footer(); ?>