<?php
/**
 * Electro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Electro
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'electro_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function electro_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Electro, use a find and replace
		 * to change 'electro' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'electro', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-primary' => esc_html__( 'Primary', 'electro' ),
				'menu-secondary' => esc_html__( 'Seconary', 'electro' ),
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

		// Set up the WordPress core custom background feature.
		// add_theme_support(
		// 	'custom-background',
		// 	apply_filters(
		// 		'electro_custom_background_args',
		// 		array(
		// 			'default-color' => 'ffffff',
		// 			'default-image' => '',
		// 		)
		// 	)
		// );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
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
endif;
add_action( 'after_setup_theme', 'electro_setup' );

function electro_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'electro_add_woocommerce_support' );

add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = ' &gt; ';
	return $defaults;
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function electro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'electro_content_width', 800 );
}
add_action( 'after_setup_theme', 'electro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function electro_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar-1', 'electro' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'electro' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'electro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function electro_scripts() {
	wp_enqueue_style( 'electro-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'foundation-style', get_template_directory_uri() . './assets/css/vendor/foundation.css', array() );
	wp_enqueue_script( 'foundation-script', get_template_directory_uri() . './assets/js/vendor/foundation.js');
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . './assets/css/custom.css', array() );
	wp_enqueue_style( 'font-style', "https://use.typekit.net/uti4wyh.css" );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'electro_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * WooCommerce hooks.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Enqueue Block Assets Editor
 */

function electro_enqueue_block_assets() {
	wp_enqueue_style('block-style', get_template_directory_uri() . '/assets/css/block-editor.css');
}

add_action('enqueue_block_assets', 'electro_enqueue_block_assets');

/**
 * Enqueuing block editor assets
 */

// function sample_theme_enqueue_block_editor_assets() {
// 	wp_enqueue_script('editor-script', get_template_directory_uri() . '/assets/js/editor.js', array('wp-blocks', 'wp-dom-ready', 'wp-edit-post'));
// }

// add_action('enqueue_block_editor_assets', 'sample_theme_enqueue_block_editor_assets');
