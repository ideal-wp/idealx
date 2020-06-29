<?php
/**
 * idealx admin enqueue
 *
 * @package idealx WordPress Theme
 * @subpackage helpers
 * @version 1.0.0
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Registers a stylesheets.
 * @since 1.0.0
 */

function idealx_load_admin_style()
{

    wp_register_style('idealx_uikit', get_template_directory_uri() . '/includes/admin/assets/css/uikit.css', array(), idealx_theme_version(), 'all');

    wp_register_style('idealx_admin_style', get_template_directory_uri() . '/includes/admin/assets/css/ad-style.css', array(),idealx_theme_version(), 'all'); 

    wp_register_style('idealx_ad_fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome/css/all.min.css', array(), idealx_theme_version(), 'all');


    wp_enqueue_style('idealx_uikit');
    wp_style_add_data('idealx_uikit', 'rtl', 'replace');
    wp_enqueue_style('idealx_ad_fontawesome');
    wp_enqueue_style('idealx_admin_style');

}

add_action('admin_enqueue_scripts', 'idealx_load_admin_style');

/**
 * Enqueue admin Js scripts
 *
 * @since 1.0
 */

function idealx_load_admin_scripts()
{

    wp_register_script('idealx_uikit_js', get_template_directory_uri() . '/assets/js/uikit/uikit.min.js', array(),idealx_theme_version(), true);

    wp_register_script('idealx_uikit_icon_js', get_template_directory_uri() . '/assets/js/uikit/uikit-icons.min.js', array(), idealx_theme_version(), true);

    wp_register_script('idealx_script_js', get_template_directory_uri() . '/includes/admin/assets/js/ideal-script.js', array(), idealx_theme_version(), true);

    wp_register_script('idealx_ad_fontawesome_js', get_template_directory_uri() . '/assets/fonts/fontawesome/js/all.min.js', array(), idealx_theme_version(), true);


    wp_enqueue_script('idealx_ad_fontawesome_js');
    wp_enqueue_script('idealx_uikit_js');
    wp_enqueue_script('idealx_uikit_icon_js');
    wp_enqueue_script('idealx_script_js'); 
    
}

add_action('admin_enqueue_scripts', 'idealx_load_admin_scripts');

/**
 *Remove uikit css styles from idealx Admin Dashboard
 *
 *
 * @since 1.0
 */
function idealx_remove_scripts()
{

    // Check for the page idealx redux
    $screen = get_current_screen();
    if (in_array($screen->id, array('toplevel_page_idealx'))) {
        //Remove uikit css Styles from redux page
        wp_dequeue_style('idealx_uikit');
        wp_dequeue_script('idealx_uikit_js');
        wp_dequeue_script('idealx_uikit_icon_js');

    }

}
add_action('admin_enqueue_scripts', 'idealx_remove_scripts');


if(! class_exists('idealx_Coar')){

    add_action( 'admin_enqueue_scripts', 'idealx_prefix_admin_scripts' );
    
    function idealx_prefix_admin_scripts() {
        wp_enqueue_script( 'wp-color-picker' );
    }
}