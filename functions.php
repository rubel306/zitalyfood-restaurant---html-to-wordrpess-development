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


// function zitalyfood_theme_assets(){
// 	wp_enqueue_style('zerogrid', get_theme_file_uri().'/assets/css/zerogrid.css', null, true, 'alll');
// 	wp_enqueue_style('style', get_theme_file_uri().'/assets/css/style.css', null, true, 'alll');
// 	wp_enqueue_style('slide', get_theme_file_uri().'/assets/css/slide.css', null, true, 'alll');
// 	wp_enqueue_style('menu', get_theme_file_uri().'/assets/css/menu.css', null, true, 'alll');
// 	wp_enqueue_style('font-awesome', get_theme_file_uri().'/assets/font-awesome/css/font-awesome.min.css', null, true, 'alll');

	wp_enqueue_style('main', get_stylesheet_uri());


// }
// add_action('wp_enqueue_scripts', 'zitalyfood_theme_assets');

