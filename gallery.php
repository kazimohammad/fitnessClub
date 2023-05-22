<?php get_header();
/* 
Template Name: Gallery Page
*/
 ?>
    <!-- Header part end-->
 <style>
     .gallery_bg {
    background-image: url(<?php echo $fitnessworld['gal_crumb']['url']?>) !important;
}
 </style>

     <!-- breadcrumb start-->

   <section class="breadcrumb gallery_bg breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <p>HOME <span>//</span> Gallery</p>
                            <h2>our Gallery</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb End-->
<div class="whole-wrap">
<div class="container box_1170">
    <div class="section-top-border">
				<h3>Image Gallery</h3>
				<div class="row gallery-item">
					 <?php  $our_gallery= new wp_query(array
                        ('post_type'   => 'our_gallery',
                        'posts_per_page'=> 9,
                        ));
                        While($our_gallery->have_posts()):
                        $our_gallery->the_post(); ?>

					<div class="col-md-4 overlay">
						<a href="#" class="img-pop-up">

							<div class="single-gallery-image">
								<div class="product-bg-overly"><h2>Hard Worker</h2></div>
								<?php the_post_thumbnail( ); ?>
							
							</div>
						</a>
					</div>
				   <?php endwhile;
                wp_reset_query(); ?>
			
				</div>
			</div>
</div>
</div>

 <?php get_template_part( 'templates-parts/content', 'testimonial' ); ?>

  <?php get_template_part( 'templates-parts/content', 'subscriber' ) ?>



    <!-- footer part start-->
 <?php get_footer(); ?> 