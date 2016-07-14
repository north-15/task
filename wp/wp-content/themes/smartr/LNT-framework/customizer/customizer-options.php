<?php
/**
 * Customizer Library
 *
 * @package        Customizer_Library
 * @author         Devin Price, The Theme Foundry
 * @license        GPL-2.0+
 * @version        1.3.0
 */

/**
 * Defines customizer options
 *
 * @package Customizer Library Demo
 */

function customizer_library_smartr_options() {

	// Theme defaults
	$primary_color = '#5bc08c';
	$secondary_color = '#666';
	
	$icons = smartr_fontawesome_icons_list();

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Stores all the panels to be added
	$panels = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Colors
	$section = 'colors';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Colors Navbar & Typography', 'smartr' ),
		'priority' => '40'
	);
	
	$font_choices = customizer_library_get_font_choices();

	$options['smartr_main_font'] = array(
		'id' => 'smartr_main_font',
		'label'   => __( 'Primary Font', 'smartr' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Open Sans'
	);

	$options['smartr_headers_font'] = array(
		'id' => 'smartr_headers_font',
		'label'   => __( 'Header Font', 'smartr' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $font_choices,
		'default' => 'Open Sans'
	);
	
	
	$options['smartr_body_text_color'] = array(
		'id' => 'smartr_body_text_color',
		'label'   => __( 'Body Text Color', 'smartr' ),
		'section' => $section,
		'type'    => 'color',
		'default' => '#666666',
	);
	
	$options['smartr_a_color'] = array(
		'id' => 'smartr_a_color',
		'label'   => __( 'Links Color', 'smartr' ),
		'section' => $section,
		'type'    => 'color',
		'default' => '#337ab7',
	);
	
	$options['smartr_a_hover_color'] = array(
		'id' => 'smartr_a_hover_color',
		'label'   => __( 'Links Hover and Focus Color', 'smartr' ),
		'section' => $section,
		'type'    => 'color',
		'default' => '#23527c',
	);
	
	$options['smartr_navbar_size'] = array(
	'id' => 'smartr_navbar_size',
	'label'   => __( 'Navbar Top/Bottom', 'smartr' ),
	'desc'     => __( 'Top / bottom padding: Min is 15px, max is 55px, step is 2px', 'smartr' ),
	'section' => $section,
	'type'    => 'range',
	'input_attrs' => array(
        'min'   => 15,
        'max'   => 55,
        'step'  => 2,
        'style' => 'color: #0a0',
	)
	);
	
	$options['smartr_navbar_brand'] = array(
		'id' => 'smartr_navbar_brand',
		'label'   => __( 'Navbar Brand Color', 'smartr' ),
		'section' => $section,
		'type'    => 'color',
		'default' => '#777777',
	);
	
	$options['smartr_navbar_bg_color'] = array(
		'id' => 'smartr_navbar_bg_color',
		'label'   => __( 'Navbar Bg Color', 'smartr' ),
		'section' => $section,
		'type'    => 'color',
		'default' => '#F5F2EC',
	);
	
	$options['smartr_navbar_menu_color'] = array(
		'id' => 'smartr_navbar_menu_color',
		'label'   => __( 'Navbar Menu Color', 'smartr' ),
		'section' => $section,
		'type'    => 'color',
		'default' => '#6D625B',
	);
	
	$options['smartr_navbar_active_a_bg'] = array(
		'id' => 'smartr_navbar_active_a_bg',
		'label'   => __( 'Navbar Menu Active Item Bg', 'smartr' ),
		'section' => $section,
		'type'    => 'color',
		'default' => '#F5F2EC',
	);
	
	$options['smartr_navbar_active_a_cl'] = array(
		'id' => 'smartr_navbar_active_a_cl',
		'label'   => __( 'Navbar Menu Active Item Color', 'smartr' ),
		'section' => $section,
		'type'    => 'color',
		'default' => '#555555',
	);
	
	$options['smartr_navbar_dropdown_bg'] = array(
		'id' => 'smartr_navbar_dropdown_bg',
		'label'   => __( 'Navbar Menu Dropdown Bg Color', 'smartr' ),
		'section' => $section,
		'type'    => 'color',
		'default' => '#F4F2ED',
	);
	
	$options['smartr_navbar_dropdown_mn_color'] = array(
		'id' => 'smartr_navbar_dropdown_mn_color',
		'label'   => __( 'Navbar Menu Dropdown Items Color', 'smartr' ),
		'section' => $section,
		'type'    => 'color',
		'default' => '#333',
	);
	
	
	$section = 'general';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'General Settings', 'smartr' ),
		'priority' => '25'
	);
	
	$options['smartr_show_description'] = array(
		'id' => 'smartr_show_description',
		'label'   => __( 'Show site description in the navbar', 'smartr' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
	);
	
	// Social Links 
	$hpblocks = 'hpblocks';

	$panels[] = array(
		'id' => $hpblocks,
		'title' => __( 'Homepage Sections', 'smartr' ),
		'priority' => '30'
	);

	
	/***********************/
	
	/******************************/
	
	$section = 'cta';
	
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Cta Section', 'smartr' ),
		'priority' => '10',
		'panel' => $hpblocks
	);
	
	$options['smartr_show_cta'] = array(
		'id' => 'smartr_show_cta',
		'label'   => __( 'Show cta section', 'smartr' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
	);
	
	$options['smartr_cta_section_image'] = array(
		'id' => 'smartr_cta_section_image',
		'label'   => __( 'Background Image', 'smartr' ),
		'section' => $section,
		'type'    => 'upload',
		 //'default' => get_template_directory_uri() . '/images/business-1219868_1280.jpg',
	);
	
	$options['smartr_cta_section_header'] = array(
		'id' => 'smartr_cta_section_header',
		'label'   => __( 'Cta Section Header', 'smartr' ),
		'section' => $section,
		'type'    => 'text',
		//'default' => 'Call to action main header',
	);
	
	$options['smartr_cta_section_text'] = array(
		'id' => 'smartr_cta_section_text',
		'label'   => __( 'Cta Section Text', 'smartr' ),
		'section' => $section,
		'type'    => 'textarea',
		//'default' => 'Add your call to action text here. Nulla dictum mauris ac nunc quislos pharetra cursus in non consequat',
	);
	
	$btns = array(
	'btn-default' => 'Default',
	'btn-primary' => 'Primary',
	'btn-success' => 'Success',
	'btn-info' => 'Info',
	'btn-warning' => 'Warning',
	'btn-danger' => 'Danger',
	);
	
	$options['smartr_cta_section_button'] = array(
		'id' => 'smartr_cta_section_button',
		'label'   => __( 'Cta Button Style', 'smartr' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $btns,
		//'default' => 'btn-info'
	);
	
	$options['smartr_cta_btn_text'] = array(
		'id' => 'smartr_cta_btn_text',
		'label'   => __( 'Btn Text', 'smartr' ),
		'section' => $section,
		'type'    => 'text',
		//'default' => 'Button Text Here'
	);
	
	$options['smartr_cta_btn_link'] = array(
		'id' => 'smartr_cta_btn_link',
		'label'   => __( 'Btn Link', 'smartr' ),
		'section' => $section,
		'type'    => 'text',
		//'default' => '#'
	);
	
	
	$section = 'blogs';
	
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Blog Section', 'smartr' ),
		'priority' => '10',
		'panel' => $hpblocks
	);
	
	$options['smartr_show_bs'] = array(
		'id' => 'smartr_show_bs',
		'label'   => __( 'Show Blog section', 'smartr' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
	);
	
	
	$options['smartr_blog_section_header'] = array(
		'id' => 'smartr_blog_section_header',
		'label'   => __( 'Blog Section Header', 'smartr' ),
		'section' => $section,
		'type'    => 'text',
	);
	
	$options['smartr_blog_section_sub'] = array(
		'id' => 'smartr_blog_section_sub',
		'label'   => __( 'Blog Section Sub Header', 'smartr' ),
		'section' => $section,
		'type'    => 'textarea',
	);
	
	$section = 'pages';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Layout Settings', 'smartr' ),
		'priority' => '25'
	);
	
	$options['smartr_show_featured_media'] = array(
		'id' => 'smartr_show_featured_media',
		'label'   => __( 'Show Image/video/audio/Gallery n featured media section in single pages', 'smartr' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
	);

	$blg = array(
	'excerpt' => 'Excerpt',
	'full-content' => 'Full Content',
	);
	
	$options['smartr_front_content_excerpt_content'] = array(
		'id' => 'smartr_front_content_excerpt_content',
		'label'   => __( 'Home Blog Entries', 'smartr' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $blg,
		'default' => 'excerpt'
	);
	
	$lyt = array(
	'2col' => '2 Collumn',
	'1col' => '1 Collumn',
	);
	
	$options['smartr_single_layout'] = array(
		'id' => 'smartr_single_layout',
		'label'   => __( 'Single Post Pages Layout', 'smartr' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $lyt,
		'default' => 'btn-info'
	);
	
	$options['smartr_defaultpage_layout'] = array(
		'id' => 'smartr_defaultpage_layout',
		'label'   => __( 'Default Pages Layout', 'smartr' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $lyt,
		'default' => 'btn-info'
	);
	
	$options['smartr_archivespage_layout'] = array(
		'id' => 'smartr_archivespage_layout',
		'label'   => __( 'Archives Pages Layout', 'smartr' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $lyt,
		'default' => 'btn-info'
	);
	
	$options['smartr_searchpage_layout'] = array(
		'id' => 'smartr_searchpage_layout',
		'label'   => __( 'Search Pages Layout', 'smartr' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $lyt,
		'default' => 'btn-info'
	);
	
	// Slider

	
	$slider = 'slider';

	$panels[] = array(
		'id' => $slider,
		'title' => __( 'Homepage Slider', 'smartr' ),
		'priority' => '30'
	);

	$section = 'slider-section';
	
	
	$args = array('type' => 'post');
	$cats_ = array();
	$categories = get_categories( $args );
        foreach( $categories as $cats){
            $cats_[$cats->term_id] = $cats->name;
		}
		

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Homepage Slider', 'smartr' ),
		'priority' => '10',
		'panel' => $slider
	);
	
	$clrs = array(
	'default' => 'Default',
	'primary' => 'Primary',
	'success' => 'Success',
	'info' => 'Info',
	'warning' => 'Warning',
	'danger' => 'Danger',
	);
	
	$slider_type = array(
	'fullscreen' => __('Full Screen','smartr'),
	'alternative' => __('Alternative','smartr'),
	);

	$options['smartr_slider_type'] = array(
		'id' => 'smartr_slider_type',
		'label'   => __( 'Slider Type', 'smartr' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $slider_type,
		//'default' => 'fullscreen'
	);
	
	$options['smartr_slide_button_style'] = array(
		'id' => 'smartr_slide_button_style',
		'label'   => __( 'Slider Button Style', 'smartr' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $clrs,
		//'default' => 'fullscreen'
	);
	
	$options['smartr_slide_cats'] = array(
		'id' => 'smartr_slide_cats',
		'label'   => __( 'Slider Category (The slider will pull posts from this category)', 'smartr' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $cats_
	);
	
	/* option group */
	$options['smartr_slide_mask_color'] = array(
	'id' => 'smartr_slide_mask_color',
	'label'   => __( 'Slides Mask Color', 'smartr' ),
	'section' => $section,
	'type'    => 'color',
	//'default' => '#000000' // hex
	);
	
	$options['smartr_slide_mask_opacity'] = array(
	'id' => 'smartr_slide_mask_opacity',
	'label'   => __( 'Slide Mask Opacity', 'smartr' ),
	'section' => $section,
	'type'    => 'range',
	'input_attrs' => array(
        'min'   => 0,
        'max'   => .9,
        'step'  => .1,
        'style' => 'color: #0a0',
	)
	);
	
	$options['smartr_slide_speed'] = array(
	'id' => 'smartr_slide_speed',
	'label'   => __( 'Slider Speed', 'smartr' ),
	'section' => $section,
	'type'    => 'range',
	'input_attrs' => array(
        'min'   => 5000,
        'max'   => 12000,
        'step'  => 500,
        'style' => 'color: #0a0',
	)
	);
	
	
	$options['smartr_show_default_slider'] = array(
		'id' => 'smartr_show_default_slider',
		'label'   => __( 'Show Default Homepage Slider ', 'smartr' ),
		'section' => $section,
		'type'    => 'checkbox',
		//'default' => 0,
	);
	
	$options['smartr_show_default_slider_on_home'] = array(
		'id' => 'smartr_show_default_slider_on_home',
		'label'   => __( 'Show default homepage slider on page set as the blog page ', 'smartr' ),
		'section' => $section,
		'type'    => 'checkbox',
		//'default' => 0,
	);
	
	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_smartr_options' );
