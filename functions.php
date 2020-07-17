<?php
/**
 * Idealx functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Idealx
 * @since 1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


define( 'IDEALX_THEME_DIRECTORY', trailingslashit( get_template_directory() ) );
define( 'IDEALX_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

if ( ! function_exists( 'idealx_theme_version' ) ) {
	/**
	 * Get theme Versions.
	 */
	function idealx_theme_version() {
			$ver = wp_get_theme( 'idealx' )->get( 'Version' );
			$dev = time();
			return $ver;
	}
}



add_action( 'after_setup_theme', 'idealx_lang_setup' );

if ( ! function_exists( 'idealx_lang_setup' ) ) {
	/**
	 * Load text domain.
	 *
	 * @since 1.0.0
	 */
	function idealx_lang_setup() {

		load_theme_textdomain( 'idealx', get_template_directory() . '/languages' );
	}
}

// Functions and definitions for admin.
require_once IDEALX_THEME_DIRECTORY . '/admin/functions.php';


/**
 * Teme options and helpers.
 *
 * @since V1.0.0
 */

require_once IDEALX_THEME_DIRECTORY . '/inc/taman/options/theme-options.php';

// Theme Setup.
require_once IDEALX_THEME_DIRECTORY . '/inc/helpers/theme-setup.php';
// Theme Hooks.
require_once IDEALX_THEME_DIRECTORY . '/inc/taman/hooks/hooks.php';
// Theme builder.
require_once IDEALX_THEME_DIRECTORY . '/inc/site-builder/theme-builder.php';

/**
 *
 * Call TGM Plugin Activation.
 *
 * @since 1.0.0
 */
require_once IDEALX_THEME_DIRECTORY . '/admin/framework/tgm-plugin/plugins-activation.php';

/**
 *
 * Classes Control .
 *
 * @since 1.0.0
 */
require_once IDEALX_THEME_DIRECTORY . '/inc/taman/classes/classes-control.php';
