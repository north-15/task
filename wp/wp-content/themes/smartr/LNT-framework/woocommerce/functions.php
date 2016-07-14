<?php
/**
 * General functions used to integrate this theme with WooCommerce.
 *
 * @package smartr
 */

/**
 * Before Content
 * Wraps all WooCommerce content in wrappers which match the theme markup
 * @since   1.0.0
 * @return  void
 */
if ( ! function_exists( 'smartr_store_before_content' ) ) {
	function smartr_store_before_content() {
		?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-offset-1 col-sm-10 col-md-10 top50">
			<div class="row">
				<div class="col-sm-9 col-md-9">
					<div id="primary" class="content-area storeProducts">
						<main id="main" class="site-main" role="main">
	    	<?php
	}
}

/**
 * After Content
 * Closes the wrapping divs
 * @since   1.0.0
 * @return  void
 */
if ( ! function_exists( 'smartr_after_content' ) ) {
	function smartr_after_content() {
		?>
						</main><!-- #main -->
					</div><!-- #primary -->
				</div>
				<div class="col-sm-3 col-md-3">
				<?php get_sidebar('primary');?>
				</div>
			</div>
		</div>
	</div>
</div>
		<?php
	}
}

/**
 * Default loop columns on product archives
 * @return integer products per row
 * @since  1.0.0
 */
function smartr_loop_columns() {
	return apply_filters( 'smartr_loop_columns', 3 ); // 3 products per row
}

/**
 * Add 'woocommerce-active' class to the body tag
 * @param  array $classes
 * @return array $classes modified to include 'woocommerce-active' class
 */
function smartr_woocommerce_body_class( $classes ) {
	if ( smartr_is_woocommerce_activated() ) {
		$classes[] = 'woocommerce-active';
	}

	return $classes;
}

/**
 * Cart Fragments
 * Ensure cart contents update when products are added to the cart via AJAX
 * @param  array $fragments Fragments to refresh via AJAX
 * @return array            Fragments to refresh via AJAX
 */
if ( ! function_exists( 'smartr_cart_link_fragment' ) ) {
	function smartr_cart_link_fragment( $fragments ) {
		global $woocommerce;

		ob_start();

		smartr_cart_link();

		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}

/**
 * WooCommerce specific scripts & stylesheets
 * @since 1.0.0
 */
function smartr_woocommerce_scripts() {
	global $theme_name;

	wp_enqueue_style( 'smartr-woocommerce-style', FRAMEWORK_FUNCTIONS_URI. 'woocommerce/css/woocommerce.css', $theme_name );
}

/**
 * Related Products Args
 * @param  array $args related products args
 * @since 1.0.0
 * @return  array $args related products args
 */
function smartr_related_products_args( $args = array() ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $args, $defaults );

	return $args;
}

/**
 * Product gallery thumnail columns
 * @return integer number of columns
 * @since  1.0.0
 */
function smartr_thumbnail_columns() {
	return intval( apply_filters( 'smartr_product_thumbnail_columns', 4 ) );
}

/**
 * Products per page
 * @return integer number of products
 * @since  1.0.0
 */
function smartr_products_per_page() {
	return intval( apply_filters( 'smartr_products_per_page', 12 ) );
}

/**
 * Query WooCommerce Extension Activation.
 * @var  $extension main extension class name
 * @return boolean
 */
function smartr_is_woocommerce_extension_activated( $extension = 'WC_Bookings' ) {
	return class_exists( $extension ) ? true : false;
}