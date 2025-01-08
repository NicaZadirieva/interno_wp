<?php
/**
 * Interno_wp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Interno_wp
 */

function interno_wp_enqueue_scripts() {
	wp_enqueue_style('interno-wp-style', get_template_directory_uri().'/css/index.css', array(), '2025-01-08', 'all');
	wp_enqueue_script('swiper', get_template_directory_uri().'/swiper/swiper-bundle.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('interno-wp-script', get_template_directory_uri().'/script/index.js', array('swiper'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'interno_wp_enqueue_scripts');

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


function interno_wp_theme_init() {
	register_nav_menus( array(
        'header__nav' => ( 'Header navigation'),
		'footer__nav' => ( 'Footer navigation'),
    ) );

	add_theme_support('html5', array(
	'search-form'));
}


add_action( 'after_setup_theme', 'interno_wp_theme_init', 0);



if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}