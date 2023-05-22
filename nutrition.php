<?php get_header();
/* 
Template Name: Nutrition Page
*/
 ?>
    <!-- Header part end-->
 <style>
     .nutrition_bg {
    background-image: url(<?php echo $fitnessworld['nut_crumb']['url']?>) !important;
}
 </style>

     <!-- breadcrumb start-->

   <section class="breadcrumb nutrition_bg breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <p>HOME <span>//</span> Nutrition</p>
                            <h2>Nutrition & Health</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb End-->

    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <h3 class="mb-30">      <?php if(function_exists('the_field')){
                            echo the_field('nutrition_left_title');
                        } ?></h3>
                <div class="row">
                    <div class="col-md-3 left_image">
                        <img src="<?php if(function_exists('get_field')){
                            $nutrition_left_image  = get_field('nutrition_left_image');
                            echo $nutrition_left_image ['url'];
                        } ?>" alt="">
                    </div>
                    <div class="col-md-9 mt-sm-20">
                        <p>      <?php if(function_exists('the_field')){
                            echo the_field('nutrition_left_description');
                        } ?></p>
                    </div>
                </div>
            </div>
            <div class="section-top-border text-right">
                <h3 class="mb-30"> <?php if(function_exists('the_field')){
                            echo the_field('nutrition_right_title');
                        } ?></h3>
                <div class="row">
                    <div class="col-md-9">
                        <p class="text-right"> <?php if(function_exists('the_field')){
                            echo the_field('nutrition_Right_description');
                        } ?></p>
                        
                    </div>
                    <div class="col-md-3 right_img">
                        <img src="<?php if(function_exists('get_field')){
                            $nutrition_right_image = get_field('nutrition_right_image');
                            echo $nutrition_right_image['url'];
                        } ?>" alt="">
                    </div>
                </div>
            </div>
          
            <div class="section-top-border">
                <h3 class="mb-30">      <?php if(function_exists('the_field')){
                            echo the_field('doctor_title');
                        } ?></h3>
                <div class="row">
                    <div class="col-lg-12">
                        <blockquote class="generic-blockquote">
                            “      <?php if(function_exists('the_field')){
                            echo the_field('doctor_quotes');
                        } ?>”
                        </blockquote>
                    </div>
                </div>
            </div>
      </div>
</div>     

    <?php get_template_part( 'templates-parts/content', 'subscriber' ) ?>
       <!-- footer part start-->
 <?php get_footer(); ?>  