    <section class="our_offer course_p">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-5">
                    <div class="section_tittle">
                        <p>best Courses</p>
                        <h2>Why you Join with us</h2>
                        <span>Stars fowl deep she greater bearing to seed dont is let you're appear first thing saying
                            it years abundantly fowl tree you shall also</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <?php  $our_offer= new wp_query(array
                        ('post_type'   => 'our_offer',
                        'posts_per_page'=> 4,
                        ));
                        While($our_offer->have_posts()):
                        $our_offer->the_post(); ?>
                    <div class="single_offer_part">
                        <div class="single_offer">
                           <?php the_post_thumbnail( ); ?>
                            <div class="hover_text">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?> </p>
                                <a href="#" class="offer_btn"><span class="flaticon-slim-right"></span></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>
    