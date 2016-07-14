<?php
/**
 * Smartr functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Smartr
 */

if ( ! function_exists( 'smartr_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function smartr_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Smartr, use a find and replace
	 * to change 'smartr' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'smartr', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'smartr' ),
		//'footer_nav' => esc_html__( 'Footer Menu', 'smartr' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
	/*
	 * Add image sizes
	 */
	 
	add_image_size( 'smartr_xlarge', 1920, 1080);
	add_image_size( 'smartr_large', 1200, 800);
	add_image_size( 'smartr-galleries', 300, 300);

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'smartr_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
 
 add_theme_support('woocommerce');
 
 add_theme_support( 'custom-logo' );
 
}

endif; // smartr_setup

add_action( 'after_setup_theme', 'smartr_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function smartr_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'smartr_content_width', 640 );
}
add_action( 'after_setup_theme', 'smartr_content_width', 0 );



/**
 *  load theme functions
 */
 
require get_template_directory() . '/LNT-framework/smartr-init.php';

if(function_exists('wp_get_theme')){
	$theme = wp_get_theme();
	$smartr_version = $theme->get('Version');
	$themename 	= $theme->get('Name');
	global $theme_name;
	$theme_name = $smartr_version;
}


