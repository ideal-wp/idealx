<?php
/**
 * Admin Dynamic Js.
 *
 * @package Idealx
 * @since v1.0.0
 */

header( 'Content-type: text/javascript; charset: UTF-8', true );

$idealx_primary   = '#3c40c6';
$idealx_secondary = '#f53b57';
$idealx_sub_color = '#0fbcf9';
$idealx_sub_plus  = '#05c46b';


$idealx_core_theme_options = get_option( 'idealx_options_control' );

if ( ! empty( $idealx_core_theme_options['id_primary_color'] ) ) {

	$idealx_primary = $idealx_core_theme_options['id_primary_color'];

}

if ( ! empty( $idealx_core_theme_options['id_secondary_color'] ) ) {

	$idealx_secondary = $idealx_core_theme_options['id_secondary_color'];

}

if ( ! empty( $idealx_core_theme_options['id_sub_additional_color'] ) ) {

	$idealx_sub_color = $idealx_core_theme_options['id_sub_additional_color'];

}

if ( ! empty( $idealx_core_theme_options['id_sub_plus_color'] ) ) {

	$idealx_sub_plus = $idealx_core_theme_options['id_sub_plus_color'];

}



echo ' jQuery(function($) {
  if (typeof $.wp !== "undefined" && typeof $.wp.wpColorPicker !== "undefined" ) {
      $.wp.wpColorPicker.prototype.options  = {
    defaultColor: false,
    hide: true,
    width: 250,
    border: true,
    palettes: [
    "' . esc_html( $idealx_primary ) . '",
    "' . esc_html( $idealx_secondary ) . '",
    "' . esc_html( $idealx_sub_color ) . '",
    "' . esc_html( $idealx_sub_plus ) . '",
    "#ffffff",
    "#000000",
    ]
    }
  }
 });

';



if ( class_exists( 'idealx_Core' ) ) {

	echo ' jQuery(document).ready(function($){

        var idealxColorOptions = {
          defaultColor: false,
          change: function(event, ui){},
          clear: function() {},
          hide: true,
          palettes: [
            "' . esc_html( $idealx_primary ) . '",
            "' . esc_html( $idealx_secondary ) . '",
            "' . esc_html( $idealx_sub_color ) . '",
            "' . esc_html( $idealx_sub_plus ) . '",
          " #ffffff",
          "#000000",
            ]
        };

    $(".idela-meta-color-field").wpColorPicker(idealxColorOptions);

    var idealxColorAlfaOptions = {

    defaultColor: false,
    change: function(event, ui){},
    clear: function() {},
    hide: true,
    palettes: [
      "' . esc_html( $idealx_primary ) . '",
      "' . esc_html( $idealx_secondary ) . '",
      "' . esc_html( $idealx_sub_color ) . '",
      "' . esc_html( $idealx_sub_plus ) . '",
    " #ffffff",
    "#000000",
    
    ]
    };

    $(".idela-meta-color-alfa-field").wpColorPicker(idealxColorAlfaOptions);
    
});

    ';
}
