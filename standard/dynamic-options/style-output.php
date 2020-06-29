<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
header("Content-type: text/css; charset: UTF-8");

$idealx_options = idealx_get_theme_options();

if ($idealx_options['minify-dynamic-allow'] == false ){

    function dynamic_idealx_minify_css( $css ) {

        $css = preg_replace( '/\s+/', ' ', $css );
        
        $css = preg_replace( '/\/\*[^\!](.*?)\*\//', '', $css );
        
        $css = preg_replace( '/(,|:|;|\{|}) /', '$1', $css );
        
        $css = preg_replace( '/ (,|;|\{|})/', '$1', $css );
        
        $css = preg_replace( '/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css );
        
        $css = preg_replace( '/(:| )(\.?)0(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css );
        
        return trim( $css );
    }
}

/**
 * get the style output
 */
function idealx_dynamic_style_output(){
    get_template_part( '/assets/css/dynamic/daynamic' , 'color' );
    get_template_part( '/assets/css/dynamic/daynamic' , 'font' );
    get_template_part( '/assets/css/dynamic/daynamic' , 'option' );
}

ob_start(); 
idealx_dynamic_style_output();
$idealx_dynamic_ajax_css = ob_get_contents();
ob_end_clean();
if ($idealx_options['minify-dynamic-allow'] == false ){
    $idealx_dynamic_ajax_css = dynamic_idealx_minify_css($idealx_dynamic_ajax_css);     
}
echo esc_attr($idealx_dynamic_ajax_css);