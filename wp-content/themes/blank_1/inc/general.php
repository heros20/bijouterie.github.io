<?php
/**
 * blank_1 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blank_1
 */

if ( ! defined( '_S_VERSION' ) ) {

	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'blank_1_setup' ) ) :
	
	function blank_1_setup() {
		load_theme_textdomain( 'blank_1', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
    }
endif;
add_action( 'after_setup_theme', 'blank_1_setup' );


function blank_1_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blank_1_content_width', 640 );
}
add_action( 'after_setup_theme', 'blank_1_content_width', 0 );


function blank_1_scripts() {
	wp_enqueue_style( 'blank_1-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('components_style', get_template_directory_uri() . '/assets/css/components.css', array(), _S_VERSION);
	wp_enqueue_style('icons_style', get_template_directory_uri() . '/assets/css/icons.css', array(), _S_VERSION);
	wp_enqueue_style('responsee_style', get_template_directory_uri() . '/assets/css/responsee.css', array(), _S_VERSION);
	wp_enqueue_style('template-style_style', get_template_directory_uri() . '/assets/css/template-style.css', array(), _S_VERSION);
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );



	
	if (is_page(1)) {
	
	}

}
add_action( 'wp_enqueue_scripts', 'blank_1_scripts' );