<?php
/**
 * bs-diona functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bs-diona
 */

if( ! defined('ABSPATH') ) exit;

require_once __DIR__.'/inc/func.php';
//require_once __DIR__.'/inc/post-type.php';
require_once __DIR__.'/inc/enqueue-scripts.php';
require_once __DIR__.'/inc/carbon-fields/cb.php';

if ( ! function_exists( 'bs_diona_setup' ) ) :
	function bs_diona_setup() {
		load_theme_textdomain( 'bs-diona', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'bs-diona' ),
			'menu-footer' => esc_html__( 'Footer', 'bs-diona' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bs_diona_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'bs_diona_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bs_diona_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bs_diona_content_width', 640 );
}
add_action( 'after_setup_theme', 'bs_diona_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bs_diona_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bs-diona' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bs-diona' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar left', 'bs-diona' ),
		'id'            => 'sidebar-left',
		'description'   => esc_html__( 'Add widgets here.', 'bs-diona' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar left', 'bs-diona' ),
		'id'            => 'sidebar-left',
		'description'   => esc_html__( 'Add widgets here.', 'bs-diona' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bs_diona_widgets_init' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';
//
///**
// * Custom template tags for this theme.
// */
//require get_template_directory() . '/inc/template-tags.php';
//
///**
// * Functions which enhance the theme by hooking into WordPress.
// */
//require get_template_directory() . '/inc/template-functions.php';
//
///**
// * Customizer additions.
// */
//require get_template_directory() . '/inc/customizer.php';
//
///**
// * Load Jetpack compatibility file.
// */
//if ( defined( 'JETPACK__VERSION' ) ) {
//	require get_template_directory() . '/inc/jetpack.php';
//}
/**
 * Plugin Name: My Revisions Config
 */
