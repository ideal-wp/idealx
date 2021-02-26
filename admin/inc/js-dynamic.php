<?php
/**
 * Idealx Admin Dynamic Js Generator.
 *
 * @package Idealx.
 * @since 1.0.0
 * @version 1.0.1
 */

// Exit if accessed this directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *If class Kirki not exists.
 *
 *@since v 1.0.1
*/
if ( class_exists( 'Kirki' ) ) {
	$idealx_core_theme_options = get_option( 'idealx_options_control' );
}




/**
 *
 * Loading Dynamic js via WP ajax.
 * */

$idealx_random_number = wp_rand( 0, 99999 );
$idealx_theme         = wp_get_theme();
$idealx_cc_v          = wp_get_theme()->get( 'Version' );

/** Enqueue */
function idealx_core_ad_dynamic_js_enqueue() {
	wp_enqueue_script( 'idealx-ad-dynamic-js', admin_url( 'admin-ajax.php' ) . '?action=ad_dynamic_js&_wpnonce=' . wp_create_nonce( 'dynamic-ad-js-nonce' ), array( 'wp-tinymce' ), time(), true );
}

/** Enqueue */
function idealx_core_ad_dynamic_js() {
	if ( ! isset( $_REQUEST['_wpnonce'] ) ||
	! wp_verify_nonce( wp_unslash( $_REQUEST )['_wpnonce'], 'dynamic-ad-js-nonce' ) ) {
		die( 'invalid nonce' );
	} else {

		include IDEALX_THEME_DIRECTORY . '/admin/assets/js/ad-dynamic.php';

	}
	exit;
}

	add_action( 'wp_ajax_ad_dynamic_js', 'idealx_core_ad_dynamic_js' );
	add_action( 'wp_ajax_nopriv_ad_dynamic_js', 'idealx_core_ad_dynamic_js' );
	add_action( 'admin_enqueue_scripts', 'idealx_core_ad_dynamic_js_enqueue' );


