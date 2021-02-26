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
add_action( 'wp_enqueue_scripts', 'idealx_wp_register_enqueue_style' );

add_action( 'wp_enqueue_scripts', 'idealx_fonts_register_enqueue_style' );

add_action( 'wp_enqueue_scripts', 'idealx_elements_register_enqueue_style' );

if ( idealx_is_woocommerce_activated() === true ) {
	add_action( 'wp_enqueue_scripts', 'idealx_enqueue_woocommerce_style' );
}

/**
 * Registers a stylesheets.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_register_style
 *
 * @since v1.0.0
 */
function idealx_wp_register_enqueue_style() {
	wp_register_style( 'idealx_uikit', IDEALX_THEME_URI . '/assets/css/uikit/uikit.min.css', array(), idealx_theme_version(), 'all' );

	wp_register_style( 'idealx_select2', IDEALX_THEME_URI . '/assets/css/select2/select2.min.css', array(), idealx_theme_version(), 'all' );

	wp_register_style( 'idealx_select2_bootstrap', IDEALX_THEME_URI . '/assets/css/select2/select2-bootstrap.min.css', array(), idealx_theme_version(), 'all' );

	wp_register_style( 'idealx_superfish', IDEALX_THEME_URI . '/assets/css/superfish/css/megafish.css', array(), idealx_theme_version(), 'all' );
	wp_register_style( 'idealx_superfish2', IDEALX_THEME_URI . '/assets/css/superfish/css/superfish-navbar.css', array(), idealx_theme_version(), 'all' );
	wp_register_style( 'idealx_superfish3', IDEALX_THEME_URI . '/assets/css/superfish/css/superfish-vertical.css', array(), idealx_theme_version(), 'all' );
	wp_register_style( 'idealx_superfish4', IDEALX_THEME_URI . '/assets/css/superfish/css/superfish.css', array(), idealx_theme_version(), 'all' );

	wp_register_style( 'idealx_style', IDEALX_THEME_URI . '/assets/css/theme-style.css', array(), idealx_theme_version(), 'all' );

	

	
	

	wp_enqueue_style( 'idealx_select2' );
	wp_enqueue_style( 'idealx_select2_bootstrap' );

	wp_enqueue_style( 'idealx_superfish' );
	wp_enqueue_style( 'idealx_superfish2' );
	wp_enqueue_style( 'idealx_superfish3' );
	wp_enqueue_style( 'idealx_superfish4' );

	wp_enqueue_style( 'idealx_uikit' );
	wp_style_add_data( 'idealx_uikit', 'rtl', 'replace' );

	
	wp_enqueue_style( 'idealx_style' );
	wp_style_add_data( 'idealx_style', 'rtl', 'replace' );

}

/**
 *
 * Fonts enqueue.
 */
function idealx_fonts_register_enqueue_style() {

	wp_register_style( 'idealx_fontawesome', IDEALX_THEME_URI . '/assets/fonts/fontawesome/css/all.min.css', array(), idealx_theme_version(), 'all' );

	wp_register_style( 'idealx-google-raleway', IDEALX_THEME_URI . '/assets/fonts/Raleway/Raleway-style/raleway-style.css', array(), idealx_theme_version(), 'all' );

	wp_enqueue_style( 'idealx_fontawesome' );

	wp_enqueue_style( 'idealx-google-raleway' );
}

/** Elements register & enqueue style. */
function idealx_elements_register_enqueue_style() {

	wp_register_style( 'idealx_widget_calendar', get_template_directory_uri() . '/assets/css/elements/widget/calendar/calendar.css', array(), idealx_theme_version(), 'all' );

	wp_enqueue_style( 'idealx_widget_calendar' );
}


/** WooCommerce style.*/
function idealx_enqueue_woocommerce_style() {
	wp_register_style( 'idealx_woocommerce', get_template_directory_uri() . '/assets/css/WooCommerce.css', array(), idealx_theme_version(), 'all' );

	wp_enqueue_style( 'idealx_woocommerce' );

}
