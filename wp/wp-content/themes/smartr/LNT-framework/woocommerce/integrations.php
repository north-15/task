<?php
/**
 * Integration logic for WooCommerce extensions
 *
 * @package smartr
 */

/**
 * Styles & Scripts
 * @return void
 */
function smartr_woocommerce_integrations_scripts() {
	/**
	 * Bookings
	 */
	if ( smartr_is_woocommerce_extension_activated( 'WC_Bookings' ) ) {
		wp_enqueue_style( 'smartr-woocommerce-bookings-style', FRAMEWORK_FUNCTIONS_URI. 'woocommerce/css/bookings.css' );
	}

	/**
	 * Brands
	 */
	if ( smartr_is_woocommerce_extension_activated( 'WC_Brands' ) ) {
		wp_enqueue_style( 'smartr-woocommerce-brands-style', FRAMEWORK_FUNCTIONS_URI. 'woocommerce/css/brands.css' );
	}

	/**
	 * Wishlists
	 */
	if ( smartr_is_woocommerce_extension_activated( 'WC_Wishlists_Wishlist' ) ) {
		wp_enqueue_style( 'smartr-woocommerce-wishlists-style', FRAMEWORK_FUNCTIONS_URI. 'woocommerce/css/wishlists.css' );
	}

	/**
	 * AJAX Layered Nav
	 */
	if ( smartr_is_woocommerce_extension_activated( 'SOD_Widget_Ajax_Layered_Nav' ) ) {
		wp_enqueue_style( 'smartr-woocommerce-ajax-layered-nav-style', FRAMEWORK_FUNCTIONS_URI. 'LNT-framework/woocommerce/css/ajax-layered-nav.css' );
	}

	/**
	 * Variation Swatches
	 */
	if ( smartr_is_woocommerce_extension_activated( 'WC_SwatchesPlugin' ) ) {
		wp_enqueue_style( 'smartr-variation-swatches-style', FRAMEWORK_FUNCTIONS_URI. 'LNT-framework/woocommerce/css/variation-swatches.css' );
	}

	/**
	 * Composite Products
	 */
	if ( smartr_is_woocommerce_extension_activated( 'WC_Composite_Products' ) ) {
		wp_enqueue_style( 'smartr-composite-products-style', FRAMEWORK_FUNCTIONS_URI.'woocommerce/css/composite-products.css' );
	}

	/**
	 * WooCommerce Photography
	 */
	if ( smartr_is_woocommerce_extension_activated( 'WC_Photography' ) ) {
		wp_enqueue_style( 'smartr-woocommerce-photography-style', FRAMEWORK_FUNCTIONS_URI.'woocommerce/css/photography.css' );
	}

	/**
	 * Product Reviews Pro
	 */
	if ( smartr_is_woocommerce_extension_activated( 'WC_Product_Reviews_Pro' ) ) {
		wp_enqueue_style( 'smartr-woocommerce-product-reviews-pro-style', FRAMEWORK_FUNCTIONS_URI.'woocommerce/css/product-reviews-pro.css' );
	}

	/**
	 * WooCommerce Smart Coupons
	 */
	if ( smartr_is_woocommerce_extension_activated( 'WC_Smart_Coupons' ) ) {
		wp_enqueue_style( 'smartr-woocommerce-smart-coupons-style', FRAMEWORK_FUNCTIONS_URI.'woocommerce/css/smart-coupons.css' );
	}
}

/**
 * Integrations layout tweaks
 * @return void
 */
function smartr_woocommerce_integrations_layout() {
	/**
	 * WooCommerce Photography
	 */
	if ( smartr_is_woocommerce_extension_activated( 'WC_Photography' ) ) {
		remove_action( 'wc_photography_before_main_content', 'woocommerce_breadcrumb', 20 );
	}
}

