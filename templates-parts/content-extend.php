   <style>
       .extends_part {
  
  background-image: url("<?php if(function_exists('get_field')){
                            $extend_bg = get_field('extend_background');
                            echo $extend_bg['url'];
                        } ?>");
}
.extends_part .extends_video {
    background-image: none;
    top: 350px;
    height: 0px;
    }
   </style>
    <section class="extends_part section_padding">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-5">
                    <div class="extends_img">
                        <img src="<?php if(function_exists('get_field')){
                            $extend_image = get_field('extend_image');
                            echo $extend_image['url'];
                        } ?>" alt="">
                        <div class="extends_video">
                            <div class="intro_video_iner text-center d-flex align-items-center">
                                <div class="intro_video_icon">
                                    <?php if(function_exists('the_field')){
                            echo the_field('extend_video');
                        } ?>
                                        
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="extends_member_text">
                        <h2><?php if(function_exists('the_field')){
                            echo the_field('extend_title');
                        } ?></h2>
                        <p><?php if(function_exists('the_field')){
                            echo the_field('extend_description');
                        } ?></p>
                      
                        <a href="<?php if(function_exists('the_field')){
                            echo the_field('extend_button_link');
                        } ?>" class="btn_2"><?php if(function_exists('the_field')){
                            echo the_field('extend_button_text');
                        } ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>