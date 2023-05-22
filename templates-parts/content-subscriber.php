   <section class="sibscribe-area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="sibscribe-text text-center">
                        <h1><?php if(function_exists('the_field')){
                            echo the_field('subscriber_trial');
                        } ?></h1>
                        <p><?php if(function_exists('the_field')){
                            echo the_field('subscribe_trial_description');
                        } ?></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <?php if(function_exists('the_field')){
                            echo the_field('subscribe_registration_form');
                        } ?>
                  <!--   <form class="sibscribe-form">
                        <input type="email" class="form-control" id="exampleInputEmail11"  placeholder='Enter Email Address'
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address'">
                        <a class="btn_2 sibscribe-btm">Subscribe</a>
                    </form> -->
                </div>
            </div>
        </div>
    </section>