<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

if ( ! function_exists( 'idealx_is_woocommerce_activated' ) ) {
	function idealx_is_woocommerce_activated() {
		if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
	}
}

/**
 * add the hero section control.
 *@since v 1.0.0
 */
require_once IDEALX_THEME_DIRECTORY .'/includes/partials/home-hero-section/hero-section-control.php';


/**
 * Get idealx theme version.
 *@since v 1.0.0
 */

if (!function_exists('idealx_theme_version')) {
    function idealx_theme_version()
    {
        $ver = wp_get_theme('idealx')->get('Version');
        return $ver;
    }
}



/**
 * Get idealx theme options.
 *@since v 1.0.0
 */


function idealx_get_theme_options()
{

    $idealx_daynamic_options = get_option('idealx');
    $current_options        = get_option('idealx_options_control');

    if (!empty($current_options)) {

        return $current_options;

    } elseif (!empty($idealx_daynamic_options)) {

        return $idealx_daynamic_options;
    } else {

        return $current_options;
    }

}

$idealx_options      = idealx_get_theme_options();
$idealx_get_template_directory_uri = get_template_directory_uri();

