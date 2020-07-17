<?php
/**
 * WooCommerce helpers.
 *
 * @package Idealx
 * @subpackage inc/helpers
 * @version 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Check if WooCommerce is activated.
 */
if ( idealx_is_woocommerce_activated() === false ) {
	return;
}

if ( ! function_exists( 'idealx_theme_add_woocommerce_support' ) ) {
	/**
	 *
	 * Add theme Support Woocommerce.
	 *
	 * @since 1.0.0
	 */
	function idealx_theme_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
}
add_action( 'after_setup_theme', 'idealx_theme_add_woocommerce_support' );

/**
 *
 * Update the cart when Product added to cart with ajax.
 *
 * @since 1.0.0
 */

if ( $woocommerce && version_compare( $woocommerce->version, '3.0', '>=' ) ) {
	add_filter( 'woocommerce_add_to_cart_fragments', 'idealx_add_to_cart_fragment' );

} else {
	add_filter( 'add_to_cart_fragments', 'idealx_add_to_cart_fragment' );
}

// Update the cart with ajax.
if ( ! function_exists( 'idealx_add_to_cart_fragment' ) ) {
	/**
	 *
	 *
	 * Update the cart with ajax.
	 *
	 * @param fragments $fragments .
	 *  */
	function idealx_add_to_cart_fragment( $fragments ) {
		global $woocommerce;
		ob_start();
		?>
<span class="cart-count-nav"> <?php echo esc_html( $woocommerce->cart->cart_contents_count ); ?></span>
		<?php
		$fragments['span.cart-count-nav'] = ob_get_clean();
		return $fragments;
	}
}

/**
 *
 * Remove action.
 *
 * Woocommerce_before_main_content , woocommerce_output_content_wrapper 10
 * woocommerce_after_main_content  , woocommerce_output_content_wrapper_end 10
 */

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );

remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

/**
 * Lood woo idealx shop customize mark.
 *
 * @since 1.0.0
 */


if ( $woocommerce ) {

	add_action( 'wp', 'idealx_woo_shop_customize_mark' );
}
/** Shop header */
function idealx_woo_shop_customize_mark() {
	// Shop header.
	if ( is_shop() || is_product_category() || is_product_tag() || is_product_taxonomy() ) {

		add_action( 'woocommerce_before_main_content', 'idealx_before_shop_header', 1 );

		add_action( 'woocommerce_before_shop_loop', 'idealx_after_shop_header', 1 );

		add_action( 'woocommerce_before_shop_loop', 'woocommerce_breadcrumb', 10 );

	}

	if ( is_product() ) {
		add_action( 'woocommerce_before_single_product', 'woocommerce_breadcrumb', 2 );

	}

}
/**
 *
 * Customize Shop.
 *
 * @hooked woocommerce_before_shop_loop
 * @hooked woocommerce_after_main_content
 * @since v1.0.0
 */
// SHop.
add_action( 'woocommerce_before_shop_loop', 'idealx_before_content_loop', 2 );
add_action( 'woocommerce_after_main_content', 'idealx_woocommerce_sidebar', 1 );
/**
 *
 * Displaying all single products.
 * hook woocommerce_before_single_product 1
 * hook woocommerce_after_single_product  1
 *
 *@since v1.0.0
 */

// Single product.
add_action( 'woocommerce_before_single_product', 'idealx_before_content_loop', 1 );
add_action( 'woocommerce_after_single_product', 'idealx_woocommerce_sidebar', 1 );

/**
 * Hook: woocommerce_sidebar.
 *
 * @Remove woocommerce_before_main_content', 'woocommerce_breadcrumb', 20
 * @Remove woocommerce_get_sidebar - 10
 * @since v1.0.0
 */
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );


/**
 *
 * Add header to product archives, including the main shop page which is a post type archive.
 *
 * @hooked woocommerce_before_shop_loop', 'idealx_after_shop_header', 1
 *
 * @hookedwoocommerce_before_main_content', 'idealx_before_shop_header', 1
 * @since 1.0.0
 */


/** Start shop header.*/
function idealx_before_shop_header() {
	?>
<div id="woo-tam-page-header" class="woo-header uk-section uk-background-cover uk-panel uk-flex uk-flex-center uk-flex-middle">

	<div id="shop-header-color-overlay"></div>

	<div class="woo-headre-contant uk-container uk-container-expand">
	<?php
}


/** End of shop header. */
function idealx_after_shop_header() {
	?>
	</div>
</div>
	<?php
}
/**
 * Hooked in archive-product.php.
 * woocommerce_before_shop_loop , 'idealx_before_content_loop', 2
 * woocommerce_after_main_content', 'idealx_woocommerce_sidebar', 1
 *
 * @hooked in content-product.php.
 * woocommerce_after_single_product, 'idealx_woocommerce_sidebar', 1
 * woocommerce_before_single_product 'idealx_before_content_loop', 1
 * @since 1.0.0
 */

/** Before content loop*/
function idealx_before_content_loop() {
	?>
<div id="primary-content" class="uk-section">
	<div id="primary-container" class="tam-container uk-container uk-container-expand" >
		<div  id="content-wrap" class="uk-grid-column-small" uk-grid>

			<div id="primary-column" class="uk-width-expand@m uk-first-column">
	<?php
}


/** Sidebar*/
function idealx_woocommerce_sidebar() {

	$idealx_options = idealx_get_theme_options();

	?>
				</div><!-- #primary-column -->

					<?php
					// Check if user disable sidebar or not.
					if ( empty( $idealx_options['is_wooc_sidebar'] ) || false === $idealx_options['is_wooc_sidebar'] ) {

						get_template_part( 'template-parts/sidebar/sidebar' );

					}
					?>

			</div><!-- #content-wrap -->
		</div><!-- #primary-container -->
	</div><!-- #primary-content -->
	<?php
}
