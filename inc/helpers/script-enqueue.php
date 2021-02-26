<?php
/**
 * Enqueue style.
 *
 * @package Idealx
 * @since 1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
*Wp enqueue scripts.
*
* @link https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
*
* @since v1.0.0
*/
add_action( 'wp_enqueue_scripts', 'idealx_load_scripts' );

/**
 * Registers a script to be enqueued later using the wp_enqueue_script() function.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_register_script
 *
 * @since v1.0.0
 */
function idealx_load_scripts() {
	wp_register_script( 'taman_uikit_js', IDEALX_THEME_URI . '/assets/js/uikit/uikit.min.js', array(), idealx_theme_version(), true );

	wp_register_script( 'taman_uikit_icon_js', IDEALX_THEME_URI . '/assets/js/uikit/uikit-icons.min.js', array(), idealx_theme_version(), true );

	wp_register_script( 'taman_select2_js', IDEALX_THEME_URI . '/assets/js/select2/select2.min.js', array(), idealx_theme_version(), true );

	wp_register_script( 'taman_js', IDEALX_THEME_URI . '/assets/js/taman.js', array(), idealx_theme_version(), true );

	wp_register_script( 'taman_superfish', IDEALX_THEME_URI . '/assets/js/superfish/hoverIntent.js', array(), idealx_theme_version(), true );

	wp_register_script( 'taman_superfish1', IDEALX_THEME_URI . '/assets/js/superfish/superfish.js', array(), idealx_theme_version(), true );

	wp_register_script( 'taman_superfish2', IDEALX_THEME_URI . '/assets/js/superfish/supersubs.js', array(), idealx_theme_version(), true );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'taman_superfish' );
	wp_enqueue_script( 'taman_superfish1' );
	wp_enqueue_script( 'taman_superfish2' );

	wp_enqueue_script( 'taman_uikit_js' );
	wp_enqueue_script( 'taman_uikit_icon_js' );

	wp_enqueue_script( 'taman_select2_js' );
	wp_enqueue_script( 'taman_js' );

}
