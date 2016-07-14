<?php



/**
 * Query WooCommerce activation
 */
if ( ! function_exists( 'smartr_is_woocommerce_activated' ) ) {
	function smartr_is_woocommerce_activated() {
		return class_exists( 'woocommerce' ) ? true : false;
	}
}

/**
 * Load WooCommerce compatibility files.
 */
 
if ( smartr_is_woocommerce_activated() ) {
	require FRAMEWORK_FUNCTIONS .'woocommerce/hooks.php';
	require FRAMEWORK_FUNCTIONS .'woocommerce/functions.php';
	require FRAMEWORK_FUNCTIONS .'woocommerce/template-tags.php';
	require FRAMEWORK_FUNCTIONS .'woocommerce/integrations.php';
}