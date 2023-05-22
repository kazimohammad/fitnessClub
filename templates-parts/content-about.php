    <section class="about_us section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-6">
                    <div class="section_tittle">
                        <p><?php if(function_exists('the_field')){
                            echo the_field('about_title');
                        } ?></p>
                        <h2><?php if(function_exists('the_field')){
                            echo the_field('about_heading');
                        } ?></h2>
                        <span><?php if (function_exists('the_field')){
                            echo the_field('about_description');
                        } ?></span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="our_feature">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single_feature_item">
                                    <div class="feature_item_icon">
                                        <span class="flaticon-footwear"></span>
                                    </div>
                                    <h3><a href="#"><?php if(function_exists('the_field')){
                                        echo the_field('instructor_title');
                                    } ?></a></h3>
                                    <p><?php if(function_exists('the_field')){
                                        echo the_field('instructor_description');
                                    } ?></p>
                                </div>
                                <div class="single_feature_item">
                                    <div class="feature_item_icon">
                                        <span> <img src="<?php echo get_theme_file_uri()?>/assets/img/icon/icon.svg" alt="icon"> </span>
                                    </div>
                                    <h3><a href="#"><?php if(function_exists('the_field')){
                                        echo the_field('equipment_title');
                                    } ?></a></h3>
                                    <p><?php if(function_exists('the_field')){
                                        echo the_field('equipment_description');
                                    } ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about_img">
                        <img src="<?php if(function_exists('get_field')){
                            $about_bg = get_field('about_background');
                            echo $about_bg['url'];
                        } ?> " alt="#">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="our_feature">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single_feature_item">
                                    <div class="feature_item_icon">
                                        <span class="flaticon-gym-1"></span>
                                    </div>
                                    <h3> <a href="#"> <?php if(function_exists('the_field')){
                                        echo the_field('meditation_title');
                                    } ?></a></h3>
                                    <p><?php if(function_exists('the_field')){
                                        echo the_field('meditation_des');
                                    } ?></p>
                                </div>
                                <div class="single_feature_item">
                                    <div class="feature_item_icon">
                                        <span class="flaticon-strong"></span>
                                    </div>
                                    <h3><a href=""><?php if(function_exists('the_field')){
                                        echo the_field('member_title');
                                    } ?></a></h3>
                                    <p><?php if(function_exists('the_field')){
                                        echo the_field('member_description');
                                    } ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay_icon">
            <img src="<?php echo get_theme_file_uri()?>/assets/img/animate_icon/icon_1.png" class="amitated_icon_1" alt="animate_icon">
            <img src="<?php echo get_theme_file_uri()?>/assets/img/animate_icon/icon_2.png" class="amitated_icon_2" alt="animate_icon">
            <img src="<?php echo get_theme_file_uri()?>/assets/img/animate_icon/icon_3.png" class="amitated_icon_3" alt="animate_icon">
            <img src="<?php echo get_theme_file_uri()?>/assets/img/animate_icon/icon_4.png" class="amitated_icon_4" alt="animate_icon">
            <img src="<?php echo get_theme_file_uri()?>/assets/img/animate_icon/icon_5.png" class="amitated_icon_5" alt="animate_icon">
        </div>
    </section>