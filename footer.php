   <?php 
global $fitnessworld;
 ?>
     <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-md-6">
                
                      <?php if(is_active_sidebar( 'f1' )){
                    dynamic_sidebar( 'f1' );
                } ?>
                </div>
              
                <div class="col-xl-3 col-sm-6 col-md-6">
               
                       <?php if(is_active_sidebar( 'f2' )){
                    dynamic_sidebar( 'f2' );
                } ?>
                </div>
               
                <div class="col-xl-3 col-sm-6 col-md-6">
                
                     <?php if(is_active_sidebar( 'f3' )){
                    dynamic_sidebar( 'f3' );
                } ?>
                </div>
                


                
                <div class="col-xl-3 col-sm-6 col-md-6">
              
                    <?php if(is_active_sidebar( 'f4' )){
                    dynamic_sidebar( 'f4' );
                } ?>
                </div>
            </div>
            <div class="copyright_part_text">
                <div class="row">
                    <div class="col-lg-8">
    
<p><?php echo $fitnessworld['copyright_text'] ?> by <a href="https://Kazi IT Home.com" target="_blank"> Kazi IT Home</a></p>
                    </div>
                    <div class="col-lg-4">
                        <div class="copyright_social_icon text-right">
                                <?php if($fitnessworld['f-id']): ?>                           
                            <a href="<?php echo esc_url( $fitnessworld['f-id']) ?>"><i class="fab fa-facebook-f"></i></a>
                               <?php endif; ?>
                                <?php if($fitnessworld['t-id']): ?>
                            <a href="<?php echo esc_url($fitnessworld['t-id'])  ?>"><i class="fab fa-twitter"></i></a>
                                <?php endif; ?>
                                <?php if($fitnessworld['drib-id']): ?>
                            <a href="<?php echo esc_url($fitnessworld['drib-id'])  ?>"><i class="ti-dribbble"></i></a>
                               <?php endif; ?>
                                <?php if($fitnessworld['be-id']): ?>
                            <a href="<?php echo esc_url($fitnessworld['be-id'])  ?>"><i class="fab fa-behance"></i></a>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

 

  <?php wp_footer() ?>  
</body>

</html>