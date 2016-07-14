<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Smartr
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function smartr_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'smartr_infinite_scroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );
} // end function smartr_jetpack_setup
add_action( 'after_setup_theme', 'smartr_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function smartr_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'partials/entry', get_post_format() ); 
	}
} // end function smartr_infinite_scroll_render
