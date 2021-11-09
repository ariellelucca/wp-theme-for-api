<?php
/**
 * Abril Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Abril_Theme
 */

add_action( 'after_setup_theme', 'sample_theme_setup' );

if ( ! function_exists( 'sample_theme_setup' ) ) {
	function sample_theme_setup() {
		load_theme_textdomain( 'sample-theme', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'sidebar' );

		add_theme_support( 'widgets' );

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
}


add_action( 'wp_enqueue_scripts', 'sample_theme_scripts' );

function sample_theme_scripts() {

	wp_enqueue_style( 'sample-theme-style', get_stylesheet_uri(), array(), @filemtime( get_stylesheet_uri() ) );
	wp_style_add_data( 'sample-theme-style', 'rtl', 'replace' );

	wp_enqueue_style( 'grid-theme-style', get_template_directory_uri() . '/assets/css/grid-system.css', array(), @filemtime( get_template_directory_uri() . '/assets/css/grid-system.css' ) );
	
	wp_enqueue_script( 'sample_theme_scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), @filemtime( get_stylesheet_uri() . '/assets/js/scripts.js' ), true );

	wp_localize_script( 'sample_theme_scripts', 'ajax', array(
		'url' => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce('ajax-nonce')
	) );

}


function sampletheme_get_svg( $svg_path ) {

	if ( file_exists( trailingslashit( get_template_directory() ) . $svg_path ) ) {
		return file_get_contents( trailingslashit( get_template_directory() ) . $svg_path );
	}

}


add_action('wp_ajax_nopriv_sample_theme_posts_api', 'sample_theme_posts_api');

add_action('wp_ajax_sample_theme_posts_api', 'sample_theme_posts_api');

function sample_theme_posts_api( $page ) {

	$results = wp_remote_retrieve_body( wp_remote_get('https://veja.abril.com.br/wp-json/wp/v2/posts?page=' . $page . '&per_page=10') );

	$results = json_decode( $results );

	if ( ! ( is_array( $results ) ) || ( empty ( $results ) ) ) {
		return false;
	}

	return $results;
}


function sample_theme_posts( $page ) {

	$posts = sample_theme_posts_api( $page );

	return $posts;

}


add_action('wp_ajax_nopriv_sample_theme_include_posts', 'sample_theme_include_posts');

add_action('wp_ajax_sample_theme_include_posts', 'sample_theme_include_posts');

function sample_theme_include_posts( $page ) {

	get_template_part( 'template-parts/content', array( 'page' => $page ) );
	wp_die();

}


add_action( 'widgets_init', 'sample_theme_home_sidebar' );

function sample_theme_home_sidebar() {

	register_sidebar(
		array(
			'name' => __('Custom', 'sample-theme'),
			'id' => 'sidebar-home',
			'description' => __('Home Sidebar', 'sample-theme'),
			'before_widget' => '<div class="widget-content">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

}
