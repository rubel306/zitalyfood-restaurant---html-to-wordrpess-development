<?php 

function zitalyfood_theme_support(){
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );


	//register nav menus
	register_nav_menus( array(
		'priamry_menu'		=> __('Primary Menu', 'zitalyfood'),
		'footer_menu'		=>__( 'Footer Menu', 'zitalyfood' )
	) );
}

add_action('after_setup_theme', 'zitalyfood_theme_support');


function zitalyfood_theme_assets(){

	wp_enqueue_style( 'zerogrid',  get_theme_file_uri().'/assets/css/zerogrid.css', null, true,'all' );
	wp_enqueue_style( 'style',  get_theme_file_uri().'/assets/css/style.css', null, true,'all' );
	wp_enqueue_style( 'slide',  get_theme_file_uri().'/assets/css/slide.css', null, true,'all' );
	wp_enqueue_style( 'menu',  get_theme_file_uri().'/assets/css/menu.css', null, true,'all' );
	wp_enqueue_style( 'font-awesome',  get_theme_file_uri().'/assets/font-awesome/css/font-awesome.min.css', null, true,'all' );
	wp_enqueue_style( 'main', get_stylesheet_uri()  );

	wp_enqueue_script( 'classie', get_theme_file_uri().'/assets/js/classie.js',null, true,  true );
	wp_enqueue_script( 'demo', get_theme_file_uri().'/assets/js/demo.js',null, true,  true );
	wp_enqueue_script( 'theme-jquery', get_theme_file_uri().'/assets/js/jquery-1.11.3.min.js',null, true,  true );
	wp_enqueue_script( 'responsiveslides', get_theme_file_uri().'/assets/js/responsiveslides.min.js',array('theme-jquery'), true,  true );
	wp_enqueue_script( 'custom', get_theme_file_uri().'/assets/js/custom.js',array('theme-jquery'), true,  true );

 }
 add_action('wp_enqueue_scripts', 'zitalyfood_theme_assets');


 function zitalyfood_custom_posts(){

 	//register slider post type
 	register_post_type('slider', array(
 		'labels'		=> array(
 			'singular_name'		=>'Slide', 
 			'name'				=>'Slider', 
 			'add_new'			=> 'Add new slide'
 		),
 		'public'		=> true,
 		'supports'		=> array(
 			'editor', 
 			'title',
 			'thumbnail'
 		),
 		'menu_icon'		=> 'dashicons-images-alt', 
 		'menu_position'	=> 6
 	));

 	//register Featured food post type
 	register_post_type('featured_food', array(
 		'labels'		=> array(
 			'singular_name'		=>'Featured Food', 
 			'name'				=>'Featured Foods', 
 			'add_new'			=> 'Add new Featured Food'
 		),
 		'public'		=> true,
 		'supports'		=> array(
 			'editor', 
 			'title',
 			'thumbnail'
 		),
 		'menu_icon'		=> 'dashicons-carrot', 
 		'menu_position'	=> 6, 
 		'has_archive'	=> true,
 	));

 }
 add_action('init', 'zitalyfood_custom_posts');


/* Shortcode Practice   */
function zitalyfood_short($atts){
	echo "Hello Shortocde";
}
add_shortcode( 'short', 'zitalyfood_short' );


//shotcode page connection 

include_once('shortcode/stuffshortcode.php');