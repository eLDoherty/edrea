<?php

/**
 * Enqueue Style and Script
 */
add_action( 'wp_enqueue_scripts', 'edrea_enqueue_scripts' );

function edrea_enqueue_scripts() {

    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/dist/main.css', array(), '0.1.0', 'all' );

    wp_enqueue_script( 'screen', get_template_directory_uri() . '/dist/main.js', array( 'jquery' ) );
    wp_enqueue_script( 'masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array( 'jquery' ) );

}

/**
 * Theme support
 */
add_action( 'after_setup_theme', 'edrea_setup' );

function edrea_setup() {

	load_theme_textdomain( 'pine', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'edrea' ),
		)
	);

	/*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
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

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

/**
 * Register sidebar
 */
add_action( 'widgets_init', 'edrea_widgets_init' );

function edrea_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'edrea' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'edrea' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
