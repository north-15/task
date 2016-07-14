<?php
/**
 * Implements styles set in the theme customizer
 *
 * 
 */

if ( ! function_exists( 'customizer_library_smartr_build_styles' ) && class_exists( 'Customizer_Library_Styles' ) ) :
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_smartr_build_styles() {

	// Primary Color
	$setting = 'primary-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.primary'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Secondary Color
	$setting = 'secondary-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.secondary'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Border Color
	$setting = 'border';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.border'
			),
			'declarations' => array(
				'border-color' => $color
			)
		) );
	}

	// Primary Font
	$setting = 'smartr_main_font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != customizer_library_get_default( $setting ) ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body'
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}

	// Secondary Font
	$setting = 'smartr_headers_font';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$stack = customizer_library_get_font_stack( $mod );

	if ( $mod != customizer_library_get_default( $setting ) ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'div.smartr-archives article header .entry-title,.flexSlider .mainCaption,body h1,body h2,body h2 a,body h3 a,body h3,body h4,body h5,body h6',
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	} 
	
	
	
	// Body Color
	$setting = 'smartr_body_text_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	// Secondary Color
	$setting = 'smartr_a_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'a'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	// Secondary Color
	$setting = 'smartr_a_hover_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'a:hover'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
		// Secondary Color
	$setting = 'smartr_iconbox1_icon_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.icnblock-1 i'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	$setting = 'smartr_iconbox2_icon_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.icnblock-2 i'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	
	$setting = 'smartr_iconbox3_icon_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.icnblock-3 i'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	$setting = 'smartr_navbar_active_a_cl';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.navbar-default .navbar-nav > .active > a,.navbar-default .navbar-nav > .active > a:focus,.navbar-default .navbar-nav > .active > a:hover '
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	
	$setting = 'smartr_navbar_active_a_bg';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.navbar-default .navbar-nav > .active > a,.navbar-default .navbar-nav > .active > a:focus,.navbar-default .navbar-nav > .active > a:hover '
			),
			'declarations' => array(
				'background' => $color
			)
		) );
	}
	
	$setting = 'smartr_navbar_menu_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.navbar-default .navbar-nav > li > a, .navbar-default .navbar-text'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	$setting = 'smartr_navbar_bg_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.navbar-default'
			),
			'declarations' => array(
				'background' => $color
			)
		) );
	}
	
	$setting = 'smartr_navbar_brand';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.navbar-default .navbar-brand'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	$setting = 'smartr_navbar_dropdown_bg';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.dropdown-menu'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}
	
	$setting = 'smartr_navbar_dropdown_mn_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.dropdown-menu > li > a'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}
	
	
	

}
endif;

add_action( 'customizer_library_styles', 'customizer_library_smartr_build_styles' );

if ( ! function_exists( 'customizer_library_smartr_styles' ) ) :
/**
 * Generates the style tag and CSS needed for the theme options.
 *
 * By using the "Customizer_Library_Styles" filter, different components can print CSS in the header.
 * It is organized this way to ensure there is only one "style" tag.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_smartr_styles() {

	do_action( 'customizer_library_styles' );

	// Echo the rules
	$css = Customizer_Library_Styles()->build();

	if ( ! empty( $css ) ) {
		echo "\n<!-- Begin Custom CSS -->\n<style type=\"text/css\" id=\"smartr-custom-css\">\n";
		echo $css;
		echo "\n</style>\n<!-- End Custom CSS -->\n";
	}
}
endif;

add_action( 'wp_head', 'customizer_library_smartr_styles', 11 );