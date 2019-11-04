<?php

if( ! defined('ABSPATH') ) exit;

/**
 * Enqueue scripts and styles.
 */
function bs_diona_scripts() {
	wp_enqueue_style( 'bs-diona-style', get_stylesheet_uri() );

	wp_enqueue_style('diona-bootstrap-css', get_template_directory_uri().'/assets/libs/bootstrap/bootstrap.min.css');
	wp_enqueue_style('diona-font-awesome-css', get_template_directory_uri().'/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('diona-magnific-popup-css', get_template_directory_uri().'/assets/libs/magnific-popup/magnific-popup.css');
	wp_enqueue_style('diona-slick-css', get_template_directory_uri().'/assets/libs/slick/slick.css');
	wp_enqueue_style('diona-styless-css', get_template_directory_uri().'/assets/css/styless.css');

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('diona-bootstrap-js', get_template_directory_uri().'/assets/libs/bootstrap/bootstrap.min.js', ['jquery'], null, true);
	wp_enqueue_script('diona-magnific-js', get_template_directory_uri().'/assets/libs/magnific-popup/jquery.magnific-popup.min.js', ['jquery'], null, true);
	wp_enqueue_script('diona-slick-js', get_template_directory_uri().'/assets/libs/slick/slick.min.js', ['jquery'], null, true);
	wp_enqueue_script('diona-site-js', get_template_directory_uri().'/assets/js/site.js', ['jquery'], null, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bs_diona_scripts' );

