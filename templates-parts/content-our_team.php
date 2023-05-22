    <?php 
        global $fitnessworld;
     ?>
    <section class="team_member_section section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-6">
                    <div class="section_tittle">
                        <p>our team</p>
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
                        'posts_per_page'=> 3,
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