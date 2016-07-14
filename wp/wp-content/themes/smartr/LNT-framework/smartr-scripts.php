<?php

/**
 * Enqueue scripts and styles.
 */
function smartr_scripts() {
	
	global $theme_name;
	
	wp_enqueue_style( 'smartr-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'smartr-bootstrap', get_template_directory_uri() .'/stylesheets/bootstrap.min.css','', $theme_name);
	wp_enqueue_style( 'smartr-animations', get_template_directory_uri() .'/stylesheets/animations.css','', $theme_name);
	wp_enqueue_style( 'smartr-prettyphoto-css', get_template_directory_uri() .'/stylesheets/prettyPhoto.css','', $theme_name);
	wp_enqueue_style( 'smartr-styles', get_template_directory_uri() .'/stylesheets/styles.css','', $theme_name);
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/stylesheets/custom-style.css','', $theme_name );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css','', $theme_name );

	wp_enqueue_script( 'smartr-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), $theme_name, true );
	wp_enqueue_script( 'smartr-bootstrap-dropdown-hover', get_template_directory_uri() . '/js/bootstrap-hover-dropdown.min.js', array('jquery'), $theme_name, true );
	wp_enqueue_script( 'smartr-headroom', get_template_directory_uri() . '/js/headroom.js', array('jquery'), $theme_name, true );
	wp_enqueue_script( 'smartr-smart-nav', get_template_directory_uri() . '/js/scroll-to-fixed.js', array('jquery'), $theme_name, true );
	wp_enqueue_script( 'smart-nav-init', get_template_directory_uri() . '/js/smart-nav-init.js', array('jquery'), $theme_name, true );
	
	wp_register_script( 'smartr-cycle', get_template_directory_uri() . '/js/jquery.cycle2.js', array('jquery'), $theme_name, true );
	wp_register_script( 'smartr-pretty-photo-js', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array('jquery'), $theme_name, true );
	wp_register_script( 'smartr-pretty-photo-js-init', get_template_directory_uri() . '/js/pretty-init.js', array('jquery'), $theme_name, true );
	wp_register_script( 'smartr-fs-slider', get_template_directory_uri() . '/js/fs-slider.js', array('jquery'), $theme_name, true );
	wp_register_script( 'smartr-stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array('jquery'), $theme_name, true );
	wp_enqueue_script( 'smartr-init', get_template_directory_uri() . '/js/init.js', array('jquery'), $theme_name, true ,90,1);

	wp_enqueue_script( 'smartr-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), $theme_name, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	
    $mask_color = get_theme_mod( 'smartr_slide_mask_color' ); 
	
    $smartr_imagebox1_animation_border_color = get_theme_mod( 'smartr_imagebox1_animation_border_color', '#E28E76'); 
    $smartr_imagebox2_animation_border_color = get_theme_mod( 'smartr_imagebox2_animation_border_color','#0CA3EE' ); 
    $smartr_imagebox3_animation_border_color = get_theme_mod( 'smartr_imagebox3_animation_border_color','#54C381' ); 
    $smartr_imagebox4_animation_border_color = get_theme_mod( 'smartr_imagebox4_animation_border_color','#FCB910' ); 
	
    $opacity = floatval(get_theme_mod('smartr_slide_mask_opacity','0.5'));
	
    $custom_inline_style = '.hero-mask,.carousel--mask { background: ' . $mask_color . '; opacity: '.$opacity.' ;}';
    $custom_inline_style .= '.lnt--image--box--1:before{ background: '.$smartr_imagebox1_animation_border_color.';}';
    $custom_inline_style .= '.lnt--image--box--2:before{ background: '.$smartr_imagebox2_animation_border_color.';}';
    $custom_inline_style .= '.lnt--image--box--3:before{ background: '.$smartr_imagebox3_animation_border_color.';}';
    $custom_inline_style .= '.lnt--image--box--4:before{ background: '.$smartr_imagebox4_animation_border_color.';}';
	$custom_inline_style .='@media (min-width: 768px) {.navbar-nav > li > a { padding-top: '.intval(get_theme_mod( 'smartr_navbar_size','27' )).'px; padding-bottom: '.intval(get_theme_mod( 'smartr_navbar_size','27' )).'px;}';
    wp_add_inline_style( 'custom-style', $custom_inline_style );
	
	// Conditional polyfills
	$conditional_scripts = array(
	'lnt-html5shiv'           =>  get_template_directory_uri() .'/js/html5shiv.js',
	'lnt-respond'             =>  get_template_directory_uri() .'/js/respond.js'
	);
	foreach ( $conditional_scripts as $handle => $src ) {
	wp_enqueue_script( $handle, $src, array(), '', false );
	}
	add_filter( 'script_loader_tag', function( $tag, $handle ) use ( $conditional_scripts ) {
	if ( array_key_exists( $handle, $conditional_scripts ) ) {
	$tag = '<!--[if lt IE 9]>'."\n".$tag.'<![endif]-->'."\n";
	}
	return $tag;
	}, 10, 2 );
	
	
}

add_action( 'wp_enqueue_scripts', 'smartr_scripts' );
