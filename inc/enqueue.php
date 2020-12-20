<?php

function appos_scripts() {
	wp_enqueue_style( 'appos-style', get_stylesheet_uri() );

	//Bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
	
	//font-awesome
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
	
	//animation
	wp_enqueue_style( 'animation', get_template_directory_uri().'/assets/css/animate.css');
	
	//swiper
	wp_enqueue_style( 'swiper', get_template_directory_uri().'/assets/css/swiper.min.css');
	
	//style.css
	wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css');
	
	//responsive
	wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css');
	
	
	// all scripts enque here

	wp_enqueue_script('jquery');

	//bootstrap
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true );
	
	//swiper
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '20151215', true );
	
	//easing
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/easing.min.js', array(), '20151215', true );
	
	//lightcase
	wp_enqueue_script( 'lightcase', get_template_directory_uri() . '/assets/js/lightcase.js', array(), '20151215', true );
	
	//custom
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '20151215', true );
	
	wp_enqueue_script( 'appos-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'appos-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'appos_scripts' );
