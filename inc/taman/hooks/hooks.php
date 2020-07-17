<?php
/**
 *
 * Taman Spa hooks Actions.
 *
 * @package Idealx
 * @subpackage inc/taman/hooks
 * @since V1.0.0
 * @version 1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Triggered after the opening body tag.
	 * Adds backward compatibility for WordPress versions < 5.2.
	 *
	 * @link https://developer.wordpress.org/reference/functions/wp_body_open/
	 * @since 1.0.0
	 */
	function wp_body_open() {

		do_action( 'wp_body_open' );
	}
}

/** Sidebar Hook */
function idealx_sidebar_hook_options() {

	do_action( 'idealx_sidebar_hook_options' );

}

