<?php

/**
 * DK functions and definitions
 *
 * @package DK
 * @since DK 0.1
 */

if (!defined('DK_VERSION')) {
	// Replace the version number of the theme on each release.
	define('DK_VERSION', '1.0');
}

if (!function_exists('dk_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 *
	 * @since DK 0.1
	 */
	function dk_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain('dk', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		add_image_size('dk-featured-image', 800, 500, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__('Primary Menu', 'dk'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));

		// Enable support for Custom Background.
		add_theme_support('custom-background', array(
			'default-color' => 'eff4f8'
		));
	}
endif; // dk_setup
add_action('after_setup_theme', 'dk_setup');

//Register widgetized area and update sidebar with default widgets
function dk_widgets_init() {
	register_sidebar([
		'name' => __('Sidebar', 'dk'),
		'id' => 'sidebar',
		'description' => 'Appears as the default sidebar.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	]);
}
add_action('widgets_init', 'dk_widgets_init');

/**
 * Enqueue scripts and styles
 */
function dk_scripts() {
	wp_enqueue_style('dk-style', get_template_directory_uri() . '/assets/style.css', array('dashicons'), DK_VERSION);
	wp_enqueue_script('dk-navigation', get_template_directory_uri() . '/assets/navigation.js', array(), DK_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'dk_scripts');

/**
 * Custom template tags for this theme.
 */
require(get_template_directory() . '/inc/template-tags.php');

/**
 * Customizer additions
 */
require(get_template_directory() . '/inc/customizer.php');
