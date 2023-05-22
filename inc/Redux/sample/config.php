<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "fitnessworld";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'submenu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => 'redux_demo',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

  

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

Redux::setsection($opt_name,array(
        'title'       => 'Genaral option',
        'icon'        =>'el el-screen',
        'id'          => 'go',
  ));

Redux::setsection($opt_name,array(
        'title'         => 'Home Banner',
        'id'            => 'h_banner',
        'subsection'    =>'true',
         'fields'        => array(

                    array(
                        'title'   => 'Upload banner',
                        'type'    => 'media',
                        'id'      => 'u_banner',
                    ),
                    array(
                        'title'     =>'Banner header',
                        'type'        => 'text',
                        'id'          => 'banner_header',
                    
                        ),
                    array(
                        'title'     =>'banner Caption',
                        'type'        => 'text',
                        'id'          => 'b_caption',
                    
                        ),
             
          ),
));
Redux::setsection($opt_name,array(
        'title'         => 'About Breadcrumb',
        'id'            => 'a_breadcrumb',
        'subsection'    =>'true',
         'fields'        => array(

                    array(
                        'title'   => 'Upload breadcrumb',
                        'type'    => 'media',
                        'id'      => 'u_breadcrumb',
                    ),
                    array(
                        'title'     =>'Breadcrumb header',
                        'type'        => 'text',
                        'id'          => 'breadcrumb_header',
                    
                        ),
                    array(
                        'title'     =>'Breadcrumb Caption',
                        'type'        => 'text',
                        'id'          => 'about_caption',
                    
                        ),
             
          ),
));
Redux::setsection($opt_name,array(
        'title'         => 'Blog Breadcrumb',
        'id'            => 'b_breadcrumb',
        'subsection'    =>'true',
         'fields'        => array(

                    array(
                        'title'   => 'Upload Blog breadcrumb',
                        'type'    => 'media',
                        'id'      => 'b_breadcrumb',
                    ),
                    array(
                        'title'     =>'Breadcrumb blog header',
                        'type'        => 'text',
                        'id'          => 'blog_header',
                    
                        ),
                    array(
                        'title'     =>'Blog Caption',
                        'type'        => 'text',
                        'id'          => 'blog_caption',
                    
                        ),
             
          ),
));
Redux::setsection($opt_name,array(
        'title'         => 'Course Breadcrumb',
        'id'            => 'c_breadcrumb',
        'subsection'    =>'true',
         'fields'        => array(

                    array(
                        'title'   => 'Upload Course breadcrumb',
                        'type'    => 'media',
                        'id'      => 'c_breadcrumb',
                    ),
                    array(
                        'title'     =>'Course header',
                        'type'        => 'text',
                        'id'          => 'c_header',
                    
                        ),
                    array(
                        'title'     =>'Course Caption',
                        'type'        => 'text',
                        'id'          => 'course_caption',
                    
                        ),
             
          ),
));
Redux::setsection($opt_name,array(
        'title'         => 'Contact Breadcrumb',
        'id'            => 'contact_bcrumb',
        'subsection'    =>'true',
         'fields'        => array(

                    array(
                        'title'   => 'Upload Contact breadcrumb',
                        'type'    => 'media',
                        'id'      => 'con_crumb',
                    ),
                    array(
                        'title'     =>'Contact header',
                        'type'        => 'text',
                        'id'          => 'con_header',
                    
                        ),
                    array(
                        'title'     =>'Contact Caption',
                        'type'        => 'text',
                        'id'          => 'con_caption',
                    
                        ),
             
          ),
));
Redux::setsection($opt_name,array(
        'title'         => 'Trainer Breadcrumb',
        'id'            => 'trainer_bcrumb',
        'subsection'    =>'true',
         'fields'        => array(

                    array(
                        'title'   => 'Upload Trainer breadcrumb',
                        'type'    => 'media',
                        'id'      => 'train_crumb',
                    ),
                    array(
                        'title'     =>'Trainer header',
                        'type'        => 'text',
                        'id'          => 'train_header',
                    
                        ),
                    array(
                        'title'     =>'Trainer Caption',
                        'type'        => 'text',
                        'id'          => 'train_caption',
                    
                        ),
             
          ),
));Redux::setsection($opt_name,array(
        'title'         => 'Gallery Breadcrumb',
        'id'            => 'gallery_bcrumb',
        'subsection'    =>'true',
         'fields'        => array(

                    array(
                        'title'   => 'Upload Gallery breadcrumb',
                        'type'    => 'media',
                        'id'      => 'gal_crumb',
                    ),
                    array(
                        'title'     =>'Gallery header',
                        'type'        => 'text',
                        'id'          => 'gallery_header',
                    
                        ),
                    array(
                        'title'     =>'Gallery Caption',
                        'type'        => 'text',
                        'id'          => 'gallery_caption',
                    
                        ),
             
          ),
));Redux::setsection($opt_name,array(
        'title'         => 'Nutrition Breadcrumb',
        'id'            => 'nutrition_bcrumb',
        'subsection'    =>'true',
         'fields'        => array(

                    array(
                        'title'   => 'Upload Nutrition breadcrumb',
                        'type'    => 'media',
                        'id'      => 'nut_crumb',
                    ),
                    array(
                        'title'     =>'Nutrition header',
                        'type'        => 'text',
                        'id'          => 'nut_header',
                    
                        ),
                    array(
                        'title'     =>'Nutrition Caption',
                        'type'        => 'text',
                        'id'          => 'nut_caption',
                    
                        ),
             
          ),
));
Redux::setsection($opt_name,array(
        'title'       => 'Header option',
        'icon'        => 'el el-cogs',
        'id'          => 'ho',

));

Redux::setsection($opt_name,array(
           'title'      =>'Logo',
           'id'          =>'header_logo',
           'subsection'   =>'true',
          'fields'        => array(
                    array(
                        'title'   => 'Upload logo',
                        'type'    => 'media',
                        'id'      => 'u_logo',
                    ),
                    array(
                        'title'     =>'Logo Width',
                        'type'        => 'text',
                        'id'          => 'logo_width',
                        'description'   => 'Type logo width without px',
                        ),
          ),


));
Redux::setsection($opt_name,array(
           'title'      =>'Fevicon',
           'id'          =>'febicon',
           'subsection'   =>'true', 
           'fields'       => array(
                array (
                    'title'       => 'Upload Favicon',
                    'type'        => 'media',
                    'id'          => 'u_favicon',
                ),
           ),  
));
Redux::setsection($opt_name,array(
           'title'      =>'Body background',
           'id'          =>'body_bg',
           'subsection'   =>'true', 
           'fields'       => array(
                array (
                    'title'       => 'Body background color',
                    'type'        => 'color',
                    'id'          => 'body_bg_color',
                    'default'      => '#fff',
                ),
           ),  
));
Redux::setsection($opt_name,array(
        'title'       => 'Social Icon',
        'icon'        => 'el el-friendfeed',
        'id'          => 'si',
        'fields'        =>array(
            array(
                'title'       => 'Facebook',
                'type'         => 'text',
                'id'        => 'f-id',
            ), 
             array(
                'title'       => 'Twitter',
                'type'         => 'text',
                'id'        => 't-id',
            ),
              array(
                'title'       => 'Instagram',
                'type'         => 'text',
                'id'        => 'ins-id',
            ), 
              array(
                'title'       => 'Dribbble',
                'type'         => 'text',
                'id'        => 'drib-id',
            ), 
             array(
                'title'       => 'Behance',
                'type'         => 'text',
                'id'        => 'be-id',
            ), 
             array(
                'title'       => 'Pinterest',
                'type'         => 'text',
                'id'        => 'pin-id',
            ),
             array(
                'title'       => 'Skype',
                'type'         => 'text',
                'id'        => 'skype-id',
            ),  
             array(
                'title'       => 'Gmail',
                'type'         => 'text',
                'id'        => 'Gmail-id',
            ), 
             array(
                'title'       => 'You Tube',
                'type'         => 'text',
                'id'        => 'u_tube_id',
            ),
        ),
));
Redux::setsection($opt_name,array(
        'title'       => 'Footer Option',
        'icon'        => 'el el-idea',
        'id'          => 'fo',
        'fields'      => array(
            array(
         'title'      => 'Footer Text',
         'type'       => 'text',
         'id'         => 'copyright_text',
         'default'      => 'All Right Reserved 2019',
            ),
               array(
         'title'      => 'Footer Background',
         'type'       => 'color',
         'id'         => 'footer_bgc',
         'default'      => '#fff',
            ),
                 array(
         'title'      => 'Footer Background Image',
         'type'       => 'media',
         'id'         => 'footer_bg_img',
            ),
        ),
));



