<?php
/**
 * Abril Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Abril_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'sample_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sample_theme_setup() {
		load_theme_textdomain( 'sample-theme', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

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
	
}
add_action( 'wp_enqueue_scripts', 'sample_theme_scripts' );
