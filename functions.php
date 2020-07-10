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