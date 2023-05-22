<?php
/* 
Template Name: Contact Page
*/

 get_header(); ?>

 <style>
     .contact_infor {
    background-image: url(<?php echo $fitnessworld['con_crumb']['url']?>) !important;
}
 </style>

  <!-- breadcrumb start-->
  <section class="breadcrumb contact_infor breadcrumb_bg">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb_iner text-center">
                      <div class="breadcrumb_iner_item">
                          <p>HOME <span>//</span> contact us</p>
                          <h2>contact us</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;">
          <h1> <?php if(function_exists('the_field')){
                            echo the_field('location_title');
                        } ?></h1>
                      
            <?php if(function_exists('the_field')){
                            echo the_field('map_area');
                        } ?>
        </div>
    
     

      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8 col-md-6 col-sm-12">
           <?php while (have_posts()){
                                the_post();
                                the_content(); }?>
         <!--  <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
            novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">

                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                    placeholder='Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_4">Send Message</button>
            </div>
          </form> -->

        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
           <?php if(is_active_sidebar( 'rs2' )){
                    dynamic_sidebar( 'rs2' );
                } ?>
         
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

  <!-- footer part start-->
  <?php get_footer(); ?>