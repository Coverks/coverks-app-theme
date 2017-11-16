<?php

add_action( 'wp_enqueue_scripts', function() {
	
	$version = AppPresser_Ion_Theme_Setup::VERSION . '.' . filemtime( get_template_directory() . '/style.css' );
	wp_enqueue_style( 'ion-style', get_template_directory_uri().'/style.css', null, $version );
	wp_enqueue_style( 'ion-child-style', get_stylesheet_uri(), null, filemtime( get_stylesheet_directory() . '/style.css' ) );
	
} );