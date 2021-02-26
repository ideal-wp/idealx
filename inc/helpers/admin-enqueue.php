<?php
/**
 * Admin Enqueue style & Script.
 *
 * @package Idealx
 * @since 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Registers a stylesheets.
 *
 * @since 1.0.0
 */

/** Admin style */
function idealx_load_admin_style() {

	global $hook_suffix;

	if ( 'appearance_page_idealx-theme-options' !== $hook_suffix ) {
		return;
	}

	wp_register_style( 'idealx_uikit', get_template_directory_uri() . '/assets/css/uikit/uikit.min.css', array(), idealx_theme_version(), 'all' );

	wp_register_style( 'idealx_admin_style', get_template_directory_uri() . '/admin/assets/css/ad-style.css', array(), idealx_theme_version(), 'all' );

	wp_register_style( 'idealx_ad_fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome/css/all.min.css', array(), idealx_theme_version(), 'all' );

	wp_enqueue_style( 'idealx_uikit' );
	wp_style_add_data( 'idealx_uikit', 'rtl', 'replace' );

	wp_enqueue_style( 'idealx_ad_fontawesome' );
	wp_enqueue_style( 'idealx_admin_style' );

}

add_action( 'admin_enqueue_scripts', 'idealx_load_admin_style' );

/**
 * Enqueue admin Js scripts
 *
 * @since 1.0
 */
function idealx_load_admin_scripts() {

	global $hook_suffix;

	if ( 'appearance_page_idealx-theme-options' !== $hook_suffix ) {
		return;
	}

	wp_register_script( 'idealx_uikit_js', get_template_directory_uri() . '/assets/js/uikit/uikit.min.js', array(), idealx_theme_version(), true );

	wp_register_script( 'idealx_uikit_icon_js', get_template_directory_uri() . '/assets/js/uikit/uikit-icons.min.js', array(), idealx_theme_version(), true );

	wp_register_script( 'idealx_script_js', get_template_directory_uri() . '/admin/assets/js/ideal-script.js', array(), idealx_theme_version(), true );

	wp_register_script( 'idealx_ad_fontawesome_js', get_template_directory_uri() . '/assets/fonts/fontawesome/js/all.min.js', array(), idealx_theme_version(), true );

	wp_enqueue_script( 'idealx_ad_fontawesome_js' );
	wp_enqueue_script( 'idealx_uikit_js' );
	wp_enqueue_script( 'idealx_uikit_icon_js' );
	wp_enqueue_script( 'idealx_script_js' );

}

add_action( 'admin_enqueue_scripts', 'idealx_load_admin_scripts' );



if ( ! class_exists( 'idealx_Coar' ) ) {

	if ( is_customize_preview() ) {
		add_action( 'admin_enqueue_scripts', 'idealx_prefix_admin_scripts' );
		/** WP color picker */
		function idealx_prefix_admin_scripts() {
			wp_enqueue_script( 'wp-color-picker' );
		}
	}



	global $hook_suffix;

	if ( ! is_customize_preview() || 'appearance_page_idealx-theme-options' !== $hook_suffix ) {
		return;
	}
	add_action( 'admin_enqueue_scripts', 'idealx_prefix_admin_scripts' );
	/** WP color picker */
	function idealx_prefix_admin_scripts() {
			wp_enqueue_script( 'wp-color-picker' );
			
	}
}

