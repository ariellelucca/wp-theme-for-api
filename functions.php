<?php
/**
 * Abril Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Abril_Theme
 */

if ( ! function_exists( 'sample_theme_setup' ) ) :
	function sample_theme_setup() {
		load_theme_textdomain( 'sample-theme', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'custom-logo', array(
			'height'               => 60,
			'width'                => 200,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => array( 'site-title', 'site-description' ),
			'unlink-homepage-logo' => true, 
		) );
		
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'sample-theme' ),
			)
		);
	}
endif;

add_action( 'after_setup_theme', 'sample_theme_setup' );

function sample_theme_scripts() {
	wp_enqueue_style( 'sample-theme-style', get_stylesheet_uri(), array(), @filemtime( get_stylesheet_uri() ) );
	wp_style_add_data( 'sample-theme-style', 'rtl', 'replace' );

	wp_enqueue_style( 'grid-theme-style', get_template_directory_uri() . '/assets/css/grid-system.css', array(), @filemtime( get_template_directory_uri() . '/assets/css/grid-system.css' ) );
	
	wp_enqueue_script( 'sample-theme-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), @filemtime( get_stylesheet_uri() . '/assets/js/scripts.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'sample_theme_scripts' );

function sampletheme_get_svg( $svg_path ) {
	if ( file_exists( trailingslashit( get_template_directory() ) . $svg_path ) ) {
		return file_get_contents( trailingslashit( get_template_directory() ) . $svg_path );
	}
}