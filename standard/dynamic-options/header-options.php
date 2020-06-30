<?php
/**
 *
 *  idealx Header Dynamic Options.
 *
 * @package idealx Theme
 * @subpackage Standrad/Dynamic
 * @since V1.0.0
 * @version 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

$idealx_options = idealx_get_theme_options();
global $idealx_transparent_header,$idealx_select_header_mod;
$idealx_transparent_header = null;
$idealx_is_transparent_header = get_post_meta(get_the_ID(), 'is_header_trans', true);
 
if(idealx_is_woocommerce_activated() == true){
if( is_woocommerce() && is_product() || is_cart() || is_checkout() || is_account_page()){
    $idealx_is_transparent_header = 'off';
}
}

if (!empty($idealx_options['transparent-header'])) {
    $idealx_transparent_header = $idealx_options['transparent-header'];
}

if (!empty($idealx_options['select-header-mod'])) {
    $idealx_select_header_mod = $idealx_options['select-header-mod'];
} else { $idealx_select_header_mod = null;}

if ($idealx_is_transparent_header == 'off') {
    $idealx_transparent_header = 0;
} elseif ($idealx_is_transparent_header == 'on') {
    $idealx_transparent_header = 1;
}

//Reveal a Sticky Header
if (!empty($idealx_options['reveal-header']) && $idealx_options['reveal-header'] == true) {

    add_action('idealx_hook_before_header', 'idealx_reveal_header_top');
    add_action('idealx_hook_after_header', 'idealx_reveal_header_after');

    function idealx_reveal_header_top()
    {
        global $idealx_options;
        global $idealx_transparent_header,$idealx_select_header_mod;
        
        $idealx_mode = $idealx_select_header_mod;

        if ($idealx_transparent_header == true) {

            echo '<div uk-sticky="media: 960; show-on-up: true; animation: uk-animation-slide-top; cls-active uk-navbar-sticky; sel-target: .uk-navbar-container; cls-inactive: cls-inactive: uk-navbar-transparent ' .  esc_html($idealx_mode) . '; "class="uk-sticky" style="">';
        } else {
            echo '<div uk-sticky="media: 960; show-on-up: true; animation: uk-animation-slide-top; cls-active uk-navbar-sticky; sel-target: .uk-navbar-container;"
    class="uk-sticky" style="">';

        }

    }
    function idealx_reveal_header_after()
    {
        echo '</div>';
    }
}

//chek if reveal header true or false
if(!empty($idealx_options['reveal-header'])){
    $idealx_reveal_header_test = $idealx_options['reveal-header'];
}else{
    $idealx_reveal_header_test =false; 
}

//Sticky Navbar fixed
if (!empty($idealx_options['sticky-header']) && $idealx_options['sticky-header'] == true && empty($idealx_options['reveal-header']) || $idealx_reveal_header_test == false) {
    add_action('idealx_hook_before_header', 'idealx_reveal_header_top', 1, 10);
    add_action('idealx_hook_after_header', 'idealx_reveal_header_after', 1, 10);

    function idealx_reveal_header_top()
    {
       
        global $idealx_transparent_header,$idealx_select_header_mod;
        global $idealx_options;

        if ( ! empty($idealx_options['sticky-header'] ) && $idealx_options['sticky-header'] == true && $idealx_transparent_header == true) {

            echo '<div class="idealx-top-sticky" uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent ' .  esc_html($idealx_select_header_mod) . ' ; top: 200">
        ';
        } elseif (!empty($idealx_options['sticky-header']) && $idealx_options['sticky-header'] == true && ! $idealx_transparent_header == true) {

            echo '<div class="idealx-top-sticky" uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky;  top: 200">';

        } else {
            echo '<div>';
        }
    }
    function idealx_reveal_header_after()
    {
        echo '</div>';
    }
} elseif (!empty($idealx_options['sticky-header']) && $idealx_options['sticky-header'] == true && !empty($idealx_options['reveal-header']) && $idealx_options['reveal-header'] == true) {
    /* do nothing */
    $idealx_no_thing_null = null;
}

// bg Header with Transparent Header
if ($idealx_transparent_header == true) {
    add_action('idealx_hook_page_header_close', 'idealx_page_header_after');

    function idealx_page_header_after()
    {
        echo '<div class="header-hero"> </div>';
    }

}
