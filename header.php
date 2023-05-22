<?php 
global $fitnessworld;
 ?> 
<!doctype html>
<html <?php language_attributes(  ); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="icon" href="<?php echo $fitnessworld['u_favicon']['url']?>">
   
   <?php wp_head(); ?> 
</head>
<style>
    a.navbar-brand img {
        width: <?php echo $fitnessworld['logo_width']  ?>px;
    }

    body {
        background-color: <?php echo $fitnessworld['body_bg_color'] ?>;
    }
</style>

<body <?php body_class(  ); ?>>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo site_url(); ?>"> <img src="<?php echo $fitnessworld['u_logo']['url']?>" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">

                            <?php wp_nav_menu(array(
                            	'theme_location' 		=>'header_menu',
                            	'container'				=>'',
                            	'menu_class'			=>'navbar-nav',
                                 'menu_id'				=>'',
                             )); ?>

                    <!--         <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">about</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="cources.html">courses</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="blog.html">blog</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="trainers.html">trainers</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul> -->
                            
                        </div>
                        <div class="menu_btn">
                            <a href="" class="btn_2 d-none d-sm-block">Get started</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
