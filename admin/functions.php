<?php
/**
 * Functions and definitions for admin.
 *
 * @package Idealx
 * @since v1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'idealx_is_woocommerce_activated' ) ) {
	/** Checking That woocommerce is active. */
	function idealx_is_woocommerce_activated() {
		if ( class_exists( 'woocommerce' ) ) {
			return true;
		} else {
			return false; }
	}
}

// Kirki config.
require_once IDEALX_THEME_DIRECTORY . '/admin/framework/config.php';

// Admin Dynamic Js.
require_once IDEALX_THEME_DIRECTORY . '/admin/inc/js-dynamic.php';


/**  Create Admin theme Page. */
function idealx_theme_page() {
	add_theme_page( 'idealx WP Theme Options', 'Ideal X Options', 'edit_theme_options', 'idealx-theme-options', 'idealx_option_page', 10 );
}
add_action( 'admin_menu', 'idealx_theme_page' );
/**  Create Admin theme Page options. */
function idealx_option_page() {

	get_template_part( 'admin/inc/options-page/ideal-page' );

}




// Code Output .
add_action( 'wp_head', 'idealx_output_options_hook_code' );
add_action( 'wp_head', 'idealx_output_options_hook_code_in_footer' );
/**
 *
 * Code Output .
 *
 * @hooked in WP_hed CSS out pout
 * @since 1.0.0
 */
function idealx_output_options_hook_code() {

	$idealx_options = idealx_get_theme_options();

	if ( ! empty( $idealx_options['code_html_editor'] ) ) {

		echo esc_html( $idealx_options['code_html_editor'] );
	}

	if ( ! empty( $idealx_options['code_css_editor'] ) ) {

		echo '<style type="text/css">' . esc_html( $idealx_options['code_css_editor'] ) . '</style>';
	}

}

/**
 *
 * Code Output .
 *
 * @hooked in wp_footer Js out pout
 * @since 1.0.0
 */
function idealx_output_options_hook_code_in_footer() {
	$idealx_options = idealx_get_theme_options();

	if ( ! empty( $idealx_options['code_js_editor'] ) ) {

		echo '<script type= "text/javascript">' . esc_html( $idealx_options['code_js_editor'] ) . '</script>';
	}
}

// loader logo in Customizer.
if ( class_exists( 'Kirki' ) ) {

	if ( ! function_exists( 'idealx_add_loader_styles_to_header' ) ) {
		/**
		 * Adds the loader CSS to our `<head>`.
		 */
		function idealx_add_loader_styles_to_header() {                 ?>
				<style>
					.kirki-customizer-loading-wrapper {
						background-image: url("<?php echo esc_url( IDEALX_THEME_URI . '/admin/assets/img/icon/ideal-white.svg' ); ?>") !important;
						background-size: 100px;
					}
				</style>
				<?php
		}
	}
	add_action( 'wp_head', 'idealx_add_loader_styles_to_header', 100 );
}
