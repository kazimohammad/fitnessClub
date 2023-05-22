<?php 
global $fitnessworld;
 get_header(  );
 /*
 Template name: Course Page
 */
 ?>
    <!-- Header part end-->
   <style>
     .course_feture {
    background-image: url(<?php echo $fitnessworld['c_breadcrumb']['url']?>) !important;
}
 </style>
    <!-- breadcrumb start-->
   <section class="breadcrumb course_feture breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <p>HOME <span>//</span>courses</p>
                            <h2>popular courses</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::exclusive_item_part start::-->
   <?php get_template_part( 'templates-parts/content', 'offer' ) ?>
    <!--::exclusive_item_part end::-->

    <!--::review_part start::-->
     <?php get_template_part( 'templates-parts/content', 'testimonial' ) ?>
    <!--::review_part end::-->

    <!--:::::::::::sibscribe part start:::::::::::::-->
 <?php get_template_part( 'templates-parts/content', 'subscriber' ) ?>
    <!--:::::::::::sibscribe part end:::::::::::::-->
  <?php get_footer(); ?>
  