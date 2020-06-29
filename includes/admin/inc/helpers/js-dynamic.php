<?php
/**
 * idealx Dynamic Js Generator for admin .
 *
 * @package idealx-admin/inc/helpers
 * @since 1.0.0
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}


$idealx_core_theme_options = get_option('idealx_options_control');
/**
 *
 * loading Dynamic js via WP ajax
 *
 * */

$random_number = rand(0, 99999);
$idealx_theme = wp_get_theme();
$cc_v = wp_get_theme()->get('Version');

function idealx_core_ad_dynamic_js_enqueue()
{

    wp_enqueue_script('idealx-ad-dynamic-js', admin_url('admin-ajax.php') . '?action=ad_dynamic_js&_wpnonce=' . wp_create_nonce('dynamic-ad-js-nonce'), array('wp-tinymce'), time(), true);
}
function idealx_core_ad_dynamic_js()
{

    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'dynamic-ad-js-nonce')) {
        die('invalid nonce');
    } else {

        include IDEALX_THEME_DIRECTORY . '/includes/admin/assets/js/ad-dynamic.php';

    }
    exit;
}
add_action('wp_ajax_ad_dynamic_js', 'idealx_core_ad_dynamic_js');
add_action('wp_ajax_nopriv_ad_dynamic_js', 'idealx_core_ad_dynamic_js');
add_action('admin_enqueue_scripts', 'idealx_core_ad_dynamic_js_enqueue');
