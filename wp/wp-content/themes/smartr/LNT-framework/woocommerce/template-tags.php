<?php
/**
 * Custom template tags used to integrate this theme with WooCommerce.
 *
 * @package smartr
 */

/**
 * Cart Link
 * Displayed a link to the cart including the number of items present and the cart total
 * @param  array $settings Settings
 * @return array           Settings
 * @since  1.0.0
 */
if ( ! function_exists( 'smartr_cart_link' ) ) {
	function smartr_cart_link() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		
			<a data-hover="dropdown" data-delay="300" class="dropdown-toggle" aria-haspopup="true" href="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" title="<?php _e( 'View your shopping cart', 'smartr' ); ?>">
				<i class="fa fa-shopping-cart"></i>&nbsp;( <?php echo wp_kses_data( WC()->cart->get_cart_total() ); ?> ) <span class="smartr-cart-count"><?php echo wp_kses_data( sprintf( _n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'smartr' ), WC()->cart->get_cart_contents_count() ) );?></span>
			</a>
	
		<?php
	}
}

/**
 * Display Product Search
 * @since  1.0.0
 * @uses  smartr_is_woocommerce_activated() check if WooCommerce is activated
 * @return void
 */
if ( ! function_exists( 'smartr_product_search' ) ) {
	function smartr_product_search() {
		if ( smartr_is_woocommerce_activated() ) { ?>
			<div class="site-search">
				<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
			</div>
		<?php
		}
	}
}

/**
 * Display Header Cart
 * @since  1.0.0
 * @uses  smartr_is_woocommerce_activated() check if WooCommerce is activated
 * @return void
 */
if ( ! function_exists( 'smartr_header_cart' ) ) {
	function smartr_header_cart() {
		if ( smartr_is_woocommerce_activated() ) { ?>
			<li class="dropdown site-header-cart menu">
				<?php smartr_cart_link(); ?>
				<ul role="menu" class=" dropdown-menu">
				<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
				</ul>
			</li>
		<?php
		}
	}
}

/**
 * Upsells
 * Replace the default upsell function with our own which displays the correct number product columns
 * @since   1.0.0
 * @return  void
 * @uses    woocommerce_upsell_display()
 */
if ( ! function_exists( 'smartr_upsell_display' ) ) {
	function smartr_upsell_display() {
		woocommerce_upsell_display( -1, 3 );
	}
}
