<?php
/**
 * Functions used to implement options
 *
 * @package Customizer Library Demo
 */

/**
 * Enqueue Google Fonts Example
 */
function smartr_fonts() {

	// Font options
	$fonts = array(
		get_theme_mod( 'smartr_main_font', customizer_library_get_default( 'smartr_main_font' ) ),
		get_theme_mod( 'smartr_headers_font', customizer_library_get_default( 'smartr_headers_font' ) )
	);

	$font_uri = customizer_library_get_google_font_uri( $fonts );

	// Load Google Fonts
	wp_enqueue_style( 'smartr_fonts', $font_uri, array(), null, 'screen' );

}
add_action( 'wp_enqueue_scripts', 'smartr_fonts' );