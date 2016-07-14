<?php
/**
 * smartr WooCommerce hooks
 *
 * @package smartr
 */

/**
 * Styles
 * @see  smartr_woocommerce_scripts()
 */
add_action( 'wp_enqueue_scripts', 			'smartr_woocommerce_scripts',		20 );
add_filter( 'woocommerce_enqueue_styles', 	'__return_empty_array' );

/**
 * Layout
 * @see  smartr_before_content()
 * @see  smartr_after_content()
 * @see  woocommerce_breadcrumb()
 */
 
remove_action( 'woocommerce_before_main_content', 	'woocommerce_breadcrumb', 					20, 0 );
remove_action( 'woocommerce_before_main_content', 	'woocommerce_output_content_wrapper', 		10 );
remove_action( 'woocommerce_after_main_content', 	'woocommerce_output_content_wrapper_end', 	10 );
remove_action( 'woocommerce_sidebar', 				'woocommerce_get_sidebar', 					10 );
add_action( 'woocommerce_before_main_content', 		'smartr_store_before_content', 				10 );
add_action( 'woocommerce_after_main_content', 		'smartr_after_content', 				10 );
add_action( 'smartr_content_top', 				'woocommerce_breadcrumb', 					10 );

/**
 * Products
 * @see  smartr_upsell_display()
 */
remove_action( 'woocommerce_after_single_product_summary', 	'woocommerce_upsell_display', 				15 );
add_action( 'woocommerce_after_single_product_summary', 	'smartr_upsell_display', 				15 );
remove_action( 'woocommerce_before_shop_loop_item_title', 	'woocommerce_show_product_loop_sale_flash', 10 );
add_action( 'woocommerce_after_shop_loop_item_title', 		'woocommerce_show_product_loop_sale_flash', 6 );


/**
 * Header
 * @see  smartr_product_search()
 * @see  smartr_header_cart()
 */
 
//add_action( 'smartr_header', 'smartr_product_search', 	40 );
add_action( 'smartr_main_menu_links_items_after', 'smartr_header_cart', 		60 );

/**
 * Filters
 * @see  smartr_woocommerce_body_class()
 * @see  smartr_cart_link_fragment()
 * @see  smartr_thumbnail_columns()
 * @see  smartr_related_products_args()
 * @see  smartr_products_per_page()
 * @see  smartr_loop_columns()
 * @see  smartr_breadcrumb_delimeter()
 */
add_filter( 'body_class', 								'smartr_woocommerce_body_class' );
add_filter( 'woocommerce_product_thumbnails_columns', 	'smartr_thumbnail_columns' );
add_filter( 'woocommerce_output_related_products_args', 'smartr_related_products_args' );
add_filter( 'loop_shop_per_page', 						'smartr_products_per_page' );
add_filter( 'loop_shop_columns', 						'smartr_loop_columns' );

if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '2.3', '>=' ) ) {
	add_filter( 'woocommerce_add_to_cart_fragments', 'smartr_cart_link_fragment' );
} else {
	add_filter( 'add_to_cart_fragments', 'smartr_cart_link_fragment' );
}

/**
 * Integrations
 * @see  smartr_woocommerce_integrations_scripts()
 * @see  smartr_woocommerce_integrations_layout()
 * @see  smartr_add_bookings_customizer_css()
 */
add_action( 'wp_enqueue_scripts', 						'smartr_woocommerce_integrations_scripts' );
add_action( 'wp',										'smartr_woocommerce_integrations_layout' );
