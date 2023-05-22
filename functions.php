<?php  
add_action( 'after_setup_theme','fitnessworld_theme_supports');
function  fitnessworld_theme_supports(){
	add_theme_support( 'menus');
	add_theme_support( 'widgets');
	add_theme_support( 'post-thumbnails');
	add_theme_support( 'title-tag');
	load_theme_textdomain( 'fitnessworld' );
	add_theme_support( 'post-formats',array('audio','video', 'link', 'quote','image','gallery'));
	/*Menu registration*/
	register_nav_menus([
		'header_menu'		=> 'Header Menu']);
}

// TGM PLUGIN ACTIVATION
include_once 'inc/tgm/config.php';

add_action( 'wp_enqueue_scripts','fitness_assets_enqueue' );

function fitness_assets_enqueue(){
	wp_enqueue_style( 'bootstrap', get_theme_file_uri().'/assets/css/bootstrap.min.css', 'null', '3.3.3',  'all' );
	wp_enqueue_style( 'animate', get_theme_file_uri().'/assets/css/animate.css', 'null', '3.5,0',  'all' );
	wp_enqueue_style( 'owl_carousel', get_theme_file_uri().'/assets/css/owl.carousel.min.css', 'null', '3.5.0',  'all' );
	wp_enqueue_style( 'themify-icons', get_theme_file_uri().'/assets/css/themify-icons.min.css', 'null', '3.3.3',  'all' );
	wp_enqueue_style( 'flaticon', get_theme_file_uri().'/assets/css/flaticon.css', 'null', '3.5.5',  'all' );
	wp_enqueue_style( 'magnific-popup', get_theme_file_uri().'/assets/css/magnific-popup.css', 'null', '3.5.0',  'all' );
	wp_enqueue_style( 'slick', get_theme_file_uri().'/assets/css/slick.css', 'null', '3.5.0',  'all' );
	wp_enqueue_style( 'gijgo', get_theme_file_uri().'/assets/css/gijgo.min.css', 'null', '3.5.0',  'all' );
	wp_enqueue_style( 'nice-select', get_theme_file_uri().'/assets/css/nice-select.css', 'null', '3.5.0',  'all' );
	wp_enqueue_style( 'all', get_theme_file_uri().'/assets/css/all.css', 'null', '3.5.0',  'all' );
	wp_enqueue_style( 'style', get_theme_file_uri().'/assets/css/style.css', 'null', '3.3.3',  'all' );
	wp_enqueue_style( 'main',get_stylesheet_uri());
  

	wp_enqueue_script( 'proper', get_theme_file_uri(  ). '/assets/js/popper.min.js',array('jquery' ) , true, true );
	wp_enqueue_script( 'bootstrap', get_theme_file_uri(  ). '/assets/js/bootstrap.min.js',array('jquery' ) , true, true );
	wp_enqueue_script( 'magnific-popup', get_theme_file_uri(  ). '/assets/js/jquery.magnific-popup.js',array('jquery' ) , true, true );
	wp_enqueue_script( 'swiper', get_theme_file_uri(  ). '/assets/js/swiper.min.js',array('jquery' ) , true, true );
	wp_enqueue_script( 'masonry', get_theme_file_uri(  ). '/assets/js/masonry.pkgd.js',array('jquery' ) , true, true );
	wp_enqueue_script( 'ajaxchimp', get_theme_file_uri(  ). '/assets/js/jquery.ajaxchimp.min.js',array('jquery' ) , true, true );
	wp_enqueue_script( 'form', get_theme_file_uri(  ). '/assets/js/jquery.form.js',array('jquery' ) , true, true );
	wp_enqueue_script( 'validate', get_theme_file_uri(  ). '/assets/js/jquery.validate.min.js',array('jquery' ) , true, true );
	wp_enqueue_script( 'mail-script', get_theme_file_uri(  ). '/assets/js/mail-script.js',array('jquery' ) , true, true );
	wp_enqueue_script( 'contact', get_theme_file_uri(  ). '/assets/js/contact.js',array('jquery' ) , true, true );
	wp_enqueue_script( 'owl.carousel', get_theme_file_uri(  ). '/assets/js/owl.carousel.min.js',array('jquery' ) , true, true );
	wp_enqueue_script( 'slick', get_theme_file_uri(  ). '/assets/js/slick.min.js',array('jquery' ) , true, true );
	wp_enqueue_script( 'gijgo', get_theme_file_uri(  ). '/assets/js/gijgo.min.js',array('jquery' ) , true, true );
	wp_enqueue_script( 'nice-select', get_theme_file_uri(  ). '/assets/js/jquery.nice-select.min.js',array('jquery' ) , true, true);
	wp_enqueue_script( 'main', get_theme_file_uri(  ). '/assets/js/custom.js',array('jquery' ) , true, true );

}
/*Redux Framework*/
include_once 'inc/Redux/ReduxCore/framework.php';
include_once 'inc/Redux/sample/config.php';


//widgets 

add_action( 'widgets_init', 'fitnessworld_widgets' );

function fitnessworld_widgets(){
	
	register_sidebar(array(
		'name'		=> 'Footer 1',
		'id' 		=>'f1',
		'before_widget'=>'<div class="single-footer-widget footer_1">',
		'after_widget'=>'</div>',
		'before_title'=>'<h4>',
		'after_title'=>'</h4>',
	));
		register_sidebar(array(
		'name'		=> 'Footer 2',
		'id' 		=>'f2',
		'before_widget'=>'<div class="single-footer-widget footer_2">',
		'after_widget'=>'</div>',
		'before_title'=>'<h4>',
		'after_title'=>'</h4>',
	));
		register_sidebar(array(
		'name'		=> 'Footer 3',
		'id' 		=>'f3',
		'before_widget'=>'<div class="single-footer-widget footer_2">',
		'after_widget'=>'</div>',
		'before_title'=>'<h4>',
		'after_title'=>'</h4>',
	));
		register_sidebar(array(
		'name'		=> 'Footer 4',
		'id' 		=>'f4',
		'before_widget'=>' <div class="single-footer-widget footer_3">',
		'after_widget'=>'</div>',
		'before_title'=>'
                        <h4>',
		'after_title'=>'</h4>',
	));
		register_sidebar(array(
		'name'		=> 'Right Sidebar 1',
		'id' 		=>'rs1',
		'before_widget'=>' <aside class="single_sidebar_widget search_widget">',
		'after_widget'=>'</aside>',
		'before_title'=>'<button class="button rounded-0 primary-bg text-white w-100 btn_2"
                                    type="submit">',
		'after_title'=>'</button>',
	));
		register_sidebar(array(
		'name'		=> 'Right Sidebar 2',
		'id' 		=>'rs2',
		'before_widget'=>'<div class="media-body">',
		'after_widget'=>'</div>',
		'before_title'=>'<h3>',
		'after_title'=>'</h3>',
	));
		register_sidebar(array(
		'name'		=> 'Right Sidebar 3',
		'id' 		=>'rs3',
		'before_widget'=>'<aside class="single_sidebar_widget popular_post_widget">',
		'after_widget'=>'</aside>',
		'before_title'=>'<h3 class="widget_title"> ',
		'after_title'=>'</h3>',
	));
		register_sidebar(array(
		'name'		=> 'Right Sidebar 4',
		'id' 		=>'rs4',
		'before_widget'=>'<aside class="single_sidebar_widget tag_cloud_widget">',
		'after_widget'=>' </aside>',
		'before_title'=>' <h4 class="widget_title">',
		'after_title'=>'</h4>',
	));
		register_sidebar(array(
		'name'		=> 'Right Sidebar 5',
		'id' 		=>'rs5',
		'before_widget'=>'<aside class="single_sidebar_widget instagram_feeds">',
		'after_widget'=>'</aside>',
		'before_title'=>'<h4 class="widget_title">',
		'after_title'=>'</h4>',
	));
		register_sidebar(array(
		'name'		=> 'Right Sidebar 6',
		'id' 		=>'rs6',
		'before_widget'=>'<aside class="single_sidebar_widget newsletter_widget">',
		'after_widget'=>' </aside>',
		'before_title'=>'<h4 class="widget_title">',
		'after_title'=>'</h4>',
	));

			register_widget('latest_post');
			register_widget('subscriber');
			register_widget('address');
}

class latest_post extends WP_Widget{
		public function __construct(){
			parent::__construct('latest_post','Latest Post',[
				'description' 	=> 'This custom Widget for Latest Post ']);
		}
		public function widget( $one,$two){  ?>

			<aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <?php while(have_posts()):the_post() ?>
                            <div class="media post_item">
                                <?php the_post_thumbnail(  ); ?>
                                <div class="media-body">
                                    <a href="<?php the_permalink(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                    <p><?php the_time('M d,Y') ?></p>
                                </div>
                            </div>
                             <?php endwhile; ?>
                          
                        
                        </aside>

		<?php
		}
		public function form($two){

		}
} 
class subscriber extends WP_Widget{
		public function __construct(){
			parent::__construct('subscriber','Subscriber',[
				'description' 	=> 'This custom Widget for Subscriber ']);
		}
		public function widget( $one,$two){  ?>

				<aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_2"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>

		<?php
		}
		public function form($two){

		}
} 
class address extends WP_Widget{
		public function __construct(){
			parent::__construct('address','Address',[
				'description' 	=> 'This custom Widget for Address ']);
		}
		public function widget( $one,$two){  ?>

			 <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              
              <?php if(function_exists('the_field')){
                            echo the_field('gym_address');
                        } ?>
            </div>
           
          </div>


		<?php
		}
		public function form($two){

		}
} 

