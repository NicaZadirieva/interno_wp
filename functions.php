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
	wp_enqueue_script('swiper', get_template_directory_uri().'/script/swiper/swiper-bundle.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('interno-wp-script', get_template_directory_uri().'/script/index.js', array('swiper'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'interno_wp_enqueue_scripts');
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}