<?php
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if(!class_exists('Kirki')){
  return;
}

$idealx_options              = idealx_get_theme_options();
$idealx_gradient_prim_from   = null;
$idealx_gradient_prim_to     = null;
$idealx_sub_gradient_from    = null;
$idealx_sub_gradient_to      = null;
$idealx_id_primary                 = null;
$idealx_id_secondary               = null;
$idealx_id_sub_color               = null;
$idealx_id_sub_color_plus          = null;

if( !empty
( $idealx_options['id_color_gradient']['from'] )&& !empty( $idealx_options['id_color_gradient']['to']) ){

  $idealx_gradient_prim_from = $idealx_options['id_color_gradient']['from'];
  $idealx_gradient_prim_to   = $idealx_options['id_color_gradient']['to'];
}

  if( !empty( $idealx_options['id_sub_color_gradient']['from']) && !empty( $idealx_options['id_sub_color_gradient']['to']) ){

  $idealx_sub_gradient_from  = $idealx_options['id_sub_color_gradient']['from'];
  $idealx_sub_gradient_to    = $idealx_options['id_sub_color_gradient']['to'];
}
if( !empty( $idealx_options['id_primary_color'])){

$idealx_id_primary             =  $idealx_options['id_primary_color'];
}
if( !empty( $idealx_options['id_secondary_color'] )){

  $idealx_id_secondary           =  $idealx_options['id_secondary_color'];
}
  if( !empty( $idealx_options['id_sub_additional_color'] )){

  $idealx_id_sub_color           =  $idealx_options['id_sub_additional_color'];
}
  if( !empty( $idealx_options['id_sub_plus_color'] )){

  $idealx_id_sub_color_plus      =  $idealx_options['id_sub_plus_color'];
}

/* 

======= Branded Colors for WP editor color palette ===========

*/

/**
 * 
 * Adding Branded Code To Support
 * Custom Gutenberg Color Palettes
 * 
 * 
 */
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  =>esc_html__( 'Primary Color', 'idealx' ),
		'slug'  => 'primary-color',
		'color'	=> $idealx_id_primary ,
	),
	array(
		'name'  => esc_html__( 'Secondary Color', 'idealx' ),
		'slug'  => 'secondary-Color',
		'color' => $idealx_id_secondary,
	),
	array(
		'name'  => esc_html__( 'Sub Additional Color', 'idealx' ),
		'slug'  => 'sub-additional',
		'color' => $idealx_id_sub_color,
  ),
  array(
		'name'  => esc_html__( 'Sub Additional Color plus', 'idealx' ),
		'slug'  => 'sub-additional-plus',
		'color' => $idealx_id_sub_color_plus,
  ),
  
  array(
  'name'  => esc_html__( 'Soft Blue', 'idealx' ),
  'slug'  => 'soft-blue-color',
  'color' => '#778beb',
  ),

  array(
    'name'  => esc_html__( 'Brewed Mustard', 'idealx' ),
    'slug'  => 'brewed-mustard-color',
    'color' => '#e77f67',
  ),

  array(
    'name'  => esc_html__( 'Tigerlily', 'idealx' ),
    'slug'  => 'tigerlily-additional-color',
    'color' => '#e15f41',
  ),

  array(
    'name'  => esc_html__( 'Flamingo Pink', 'idealx' ),
    'slug'  => 'flamingo-pink-color',
    'color' => '#f78fb3',
  ),
  array(
    'name'  => esc_html__( 'idealx Black', 'idealx' ),
    'slug'  => 'idealx-black-color',
    'color' => '#000000',
  ),
  array(
    'name'  => esc_html__( 'idealx white', 'idealx' ),
    'slug'  => 'idealx-wite-color',
    'color' => '#ffffff',
  ),

) 
);
// Adds support for Gradient Color Options and convert Redux output.

//convert color From Hexadecimal to RGB

function idealx_toRGB($Hex){
   
  if (substr($Hex,0,1) == "#")
      $Hex = substr($Hex,1);
      
  $R = substr($Hex,0,2);
  $G = substr($Hex,2,2);
  $B = substr($Hex,4,2);
  
  $R = hexdec($R);
  $G = hexdec($G);
  $B = hexdec($B);
  
  $RGB['R'] = $R;
  $RGB['G'] = $G;
  $RGB['B'] = $B;
  
  return $RGB;
  
  }

//$RGB = idealx_toRGB($idealx_gradient_prim_from);

$idealx_prim    = idealx_toRGB($idealx_gradient_prim_from);
$idealx_prim_to = idealx_toRGB($idealx_gradient_prim_to);

$idealx_prim_out    = 'rgba( '. $idealx_prim['R']  .','. $idealx_prim['G'] .','. $idealx_prim['B'].',1)';
$idealx_prim_to_out = 'rgba( '. $idealx_prim_to['R']  .','. $idealx_prim_to['G'] .','. $idealx_prim_to['B'].',1)';

$idealx_sub     = idealx_toRGB($idealx_sub_gradient_from);
$idealx_sub_to  = idealx_toRGB($idealx_sub_gradient_to);

$idealx_sub_out    = 'rgba( '. $idealx_sub['R']  .','. $idealx_sub['G'] .','. $idealx_sub['B'].',1)';
$idealx_sub_to_out = 'rgba( '. $idealx_sub_to['R']  .','. $idealx_sub_to['G'] .','. $idealx_sub_to['B'].',1)';
/**
 * 
 * Adding Branded Gradient Background Options 
 * 
 * 
 */
add_theme_support(
  'editor-gradient-presets',
 
  array(
    array(
      'name'     => esc_html__( 'Color Gradient', 'idealx' ),
      'gradient' => 'linear-gradient(135deg,'. $idealx_prim_out .' 0%,'. $idealx_prim_to_out .' 100%)',
      'slug'     => 'i-color-gradient'
      ),

    array(
    'name'     => esc_html__( 'Sub Color Gradient ', 'idealx' ),
    'gradient' => 'linear-gradient(135deg,'. $idealx_sub_out .' 0%,'. $idealx_sub_to_out .' 100%)',
    'slug'     => 'i-sub-color-gradient'
    ),
    array(
        'name'     => esc_html__( 'Roseanna', 'idealx' ),
        'gradient' => 'linear-gradient(135deg,rgba(255,175,189) 0%, rgba(255,195,160) 100%)',
        'slug'     => 'roseanna-idealx'
    ),
    array(
        'name'     =>esc_html__( 'Purple Love', 'idealx' ),
        'gradient' => 'linear-gradient(135deg,rgba(204,43,94) 0%,rgba(117,58,136) 100%)',
        'slug'     =>  'purple-love-idealx',
    ),
    
  )
  
);