<?php
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}



if ( ! function_exists( 'idealx_theme_version' ) ) {

    function idealx_theme_version()
    {
        $ver = wp_get_theme('idealx')->get('Version');
        return $ver;
    }
}


add_action('wp_enqueue_scripts', 'idealx_wp_register_enqueue_style');
add_action('wp_enqueue_scripts', 'idealx_elements_register_enqueue_style');
add_action('wp_enqueue_scripts', 'idealx_fonts_register_enqueue_style');
add_action('wp_enqueue_scripts', 'idealx_enqueue_woocommerce_style');

/**
 * Registers a stylesheets.
 * @since 1.0
 */

function idealx_wp_register_enqueue_style()
{

    wp_register_style('idealx_uikit', get_template_directory_uri() . '/assets/css/uikit/uikit.min.css', idealx_theme_version(), idealx_theme_version(), 'all');

    wp_register_style('idealx_select2', get_template_directory_uri() . '/assets/css/select2/select2.min.css', array(),idealx_theme_version(), 'all');
    
    wp_register_style('idealx_select2_bootstrap', get_template_directory_uri() . '/assets/css/select2/select2-bootstrap.min.css', array(), idealx_theme_version(), 'all');


    wp_register_style('idealx_style', get_template_directory_uri() . '/assets/css/idealx-style.css', array(), idealx_theme_version(), 'all');

    wp_enqueue_style('idealx_uikit');
    wp_style_add_data('idealx_uikit', 'rtl', 'replace');

    wp_enqueue_style('idealx_select2');
    wp_enqueue_style('idealx_select2_bootstrap');

    wp_enqueue_style('idealx_style');
    wp_style_add_data('idealx_style', 'rtl', 'replace');


}

function idealx_elements_register_enqueue_style()
{

    wp_register_style('idealx_widget_calendar', get_template_directory_uri() . '/assets/css/eElements/widget/calendar/calendar.css', array(), idealx_theme_version(), 'all');

    wp_register_style('idealx_editor_color', get_template_directory_uri() . '/assets/css/eElements/gutenberg/editor-color.css', array(), idealx_theme_version(), 'all');

    wp_enqueue_style('idealx_widget_calendar');
    wp_enqueue_style('idealx_editor_color');
}

function idealx_fonts_register_enqueue_style()
{
    wp_register_style('idealx_fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome/css/all.min.css', array(), idealx_theme_version(), 'all');

    wp_register_style('idealx-google-raleway', get_template_directory_uri() . '/assets/fonts/Raleway/Raleway-style/raleway-style.css', array(),idealx_theme_version(), 'all');

    wp_enqueue_style('idealx_fontawesome');
    wp_enqueue_style('idealx-google-raleway');
}



function idealx_enqueue_woocommerce_style()
{
    wp_register_style('idealx_woocommerce', get_template_directory_uri() . '/assets/css/WooCommerce.css', array(), idealx_theme_version(), 'all');

   
    wp_enqueue_style('idealx_woocommerce');
    

}