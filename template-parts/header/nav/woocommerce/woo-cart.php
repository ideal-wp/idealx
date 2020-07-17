<?php
/**
 * WooCommerce Cart in nav.
 *
 * @package Idealx
 * @version 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( idealx_is_woocommerce_activated() === false ) {
	return;
}

global $woocommerce;
$idealx_count = $woocommerce->cart->cart_contents_count;

if ( $woocommerce ) {
	?>
	<li>
	<a class="cart-countss-nav" href="<?php echo esc_url( wc_get_cart_url() ); ?>"> <span class="" uk-icon="cart"></span> <span class="cart-count-nav"> <?php echo esc_html( $woocommerce->cart->cart_contents_count ); ?></span> </a>

		<div class="idealx-woo-cart-nav" uk-dropdown="animation: uk-animation-slide-top-small; duration: 500">
			<?php
				// Check for WooCommerce 2.0 and display the cart widget.
				if ( version_compare( WOOCOMMERCE_VERSION, '2.0.0' ) >= 0 ) {
					the_widget( 'WC_Widget_Cart' );
				} else {

					the_widget( 'WooCommerce_Widget_Cart', 'title= ' );
				}
			?>
		</div>
	</li>
	<?php
}
