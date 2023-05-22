   <style>
       .calculate_part {
  background-image: url("<?php if(function_exists('get_field')){
                            $physical_information_bg = get_field('physical_information_background');
                            echo $physical_information_bg['url'];
                        } ?>");

}
   </style>
    <section class="calculate_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-5">
                    <div class="section_tittle">
                        <h2><?php if(function_exists('the_field')){
                            echo the_field('physical_information_title');
                        } ?></h2>
                        <p><?php if(function_exists('the_field')){
                            echo the_field('physical_information_description');
                        } ?> </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                     <?php if(function_exists("the_field")){
                        echo the_field('physical_information_form');
                     } ?>
<!-- <div class="form-row">
<div class="form-group col-md-6">
<input type="email" class="form-control" id="inputEmail4"
placeholder='Height/cm' onfocus="this.placeholder = ''"
onblur="this.placeholder = 'Height/cm'">
</div>
<div class="form-group col-md-6">
<input type="email" class="form-control" id="emailtype"
placeholder='Weight/cm' onfocus="this.placeholder = ''"
onblur="this.placeholder = 'Weight/cm'">
</div>
<div class="form-group col-md-6">
<input type="text" class="form-control" id="pnone" placeholder='Age'
onfocus="this.placeholder = ''" onblur="this.placeholder = 'Age'">
</div>
<div class="form-group col-md-6">
<div class="single_check_box">
<div class="input-group-prepend">
<p>
<input type="radio" id="test1" name="radio-group" checked>
<label for="test1">Male</label>
</p>
<p>
<input type="radio" id="test2" name="radio-group">
<label for="test2">Female</label>
</p>
<p>
<input type="radio" id="test3" name="radio-group">
<label for="test3">Other</label>
</p>
</div>
</div>
</div>
</div>


<div class="regerv_btn">
<a href="#" class="btn_2">Book A Table</a>
</div> -->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>