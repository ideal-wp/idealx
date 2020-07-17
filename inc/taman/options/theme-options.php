<?php
/**
 * Thme Options.
 *
 * @package Idealx
 * @version 1.0.0
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


/**
 * Get idealx theme options.
 *
 * @since v 1.0.0
 */
function idealx_get_theme_options() {
	/**
	* Return; if class Kirki not exists.
	*
	* @since v 1.0.1
	*/

	if ( ! class_exists( 'Kirki' ) ) {
		return;
	}

	$idealx_daynamic_options = get_option( 'idealx' );
	$current_options         = get_option( 'idealx_options_control' );

	if ( ! empty( $current_options ) ) {

		return $current_options;

	} elseif ( ! empty( $idealx_daynamic_options ) ) {

		return $idealx_daynamic_options;
	} else {

		return $current_options;
	}

}

$idealx_options                    = idealx_get_theme_options();
$idealx_get_template_directory_uri = get_template_directory_uri();
