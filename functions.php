<?php
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/options-framwork/' );
require_once dirname( __FILE__ ) . '/options-framwork/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );


register_nav_menus( array(
'primary' => 'Primary Menu',
	'sidemenu' => 'Side Menu',
	'footermenu' => 'Footer menu'
) );


add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'featured-image', 2000, 1200, true );

	add_image_size( 'thumbnail-avatar', 100, 100, true );


function gtm_scripts() {
    
    
    wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Playfair+Display');
    wp_enqueue_style( 'googleFonts');
    wp_register_style('FontAwesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'FontAwesome');    	
    wp_register_style('owlcarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style( 'owlcarousel');
    wp_register_style('owlcarousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css');
    wp_enqueue_style( 'owlcarousel-theme');

    wp_enqueue_style('imagelightbox-css', get_template_directory_uri().'/css/imagelightbox.css');
    
    wp_register_style('Bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style( 'Bootstrap-css');

    //wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );

	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	
	wp_register_script( 'jquery-js', 'https://code.jquery.com/jquery-2.2.4.min.js' , '', '', true );
    //wp_register_script( 'jquery-js', 'https://code.jquery.com/jquery-3.2.1.slim.min.js' , '', '', true );
	wp_enqueue_script( 'jquery-js' );
    wp_register_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' , '', '', true );
    wp_enqueue_script( 'popper-js' );
    wp_register_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' , '', '', true );
    wp_enqueue_script( 'bootstrap-js' );
    wp_register_script( 'owlcarousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js' , '', '', true );
    wp_enqueue_script( 'owlcarousel-js' );
    wp_enqueue_script( 'imagelightbox-js', get_theme_file_uri( '/js/imagelightbox.js' ), '', '', true );
    wp_enqueue_script( 'googleMap-js', get_theme_file_uri( '/js/map.js' ), '', '', true );
    wp_enqueue_script( 'custom-js', get_theme_file_uri( '/js/custom.js' ), array( 'jquery' ), '1.0', true );
    
	
	
	
}
add_action( 'wp_enqueue_scripts', 'gtm_scripts' );


function gtm_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'coxandkings' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Appears in the right side on the Blog page.', 'coxandkings' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s blog-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Footer Col 1', 'coxandkings' ),
        'id'            => 'foo-col-1',
        'description'   => __( 'Appears on the footer columns.', 'coxandkings' ),
        'before_widget' => '<ul id="%1$s" class="widget %2$s foo-col-1 footer-menu">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h6 class="widget-title uppercase font-bold">',
        'after_title'   => '</h6>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Col 2', 'coxandkings' ),
        'id'            => 'foo-col-2',
        'description'   => __( 'Appears on the footer columns.', 'coxandkings' ),
        'before_widget' => '<ul id="%1$s" class="widget %2$s foo-col-2 footer-menu">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h6 class="widget-title uppercase font-bold">',
        'after_title'   => '</h6>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Col 3', 'coxandkings' ),
        'id'            => 'foo-col-3',
        'description'   => __( 'Appears on the footer columns.', 'coxandkings' ),
        'before_widget' => '<ul id="%1$s" class="widget %2$s foo-col-3 footer-menu">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h6 class="widget-title uppercase font-bold">',
        'after_title'   => '</h6>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Col 4', 'coxandkings' ),
        'id'            => 'foo-col-4',
        'description'   => __( 'Appears on the footer columns.', 'coxandkings' ),
        'before_widget' => '<ul id="%1$s" class="widget %2$s foo-col-4 footer-menu">',
        'after_widget'  => '</ul>',
        'before_title'  => '<h6 class="widget-title uppercase font-bold">',
        'after_title'   => '</h6>',
    ) );
}
add_action( 'widgets_init', 'gtm_widgets_init' );



if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    
    
}

include_once('function_swetabja.php');

/*Custom Post type start*/

?>