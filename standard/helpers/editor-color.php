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
$id_primary                 = null;
$id_secondary               = null;
$id_sub_color               = null;
$id_sub_color_plus          = null;

if( !empty
( $idealx_options['id-color-gradient']['from'] )&& !empty( $idealx_options['id-color-gradient']['to']) ){

  $idealx_gradient_prim_from = $idealx_options['id-color-gradient']['from'];
  $idealx_gradient_prim_to   = $idealx_options['id-color-gradient']['to'];
}

  if( !empty( $idealx_options['id-sub-color-gradient']['from']) && !empty( $idealx_options['id-sub-color-gradient']['to']) ){

  $idealx_sub_gradient_from  = $idealx_options['id-sub-color-gradient']['from'];
  $idealx_sub_gradient_to    = $idealx_options['id-sub-color-gradient']['to'];
}
if( !empty( $idealx_options['id_primary_color'])){

$id_primary             =  $idealx_options['id_primary_color'];
}
if( !empty( $idealx_options['id_secondary_color'] )){

  $id_secondary           =  $idealx_options['id_secondary_color'];
}
  if( !empty( $idealx_options['id_sub_additional_color'] )){

  $id_sub_color           =  $idealx_options['id_sub_additional_color'];
}
  if( !empty( $idealx_options['id_sub_plus_color'] )){

  $id_sub_color_plus      =  $idealx_options['id_sub_plus_color'];
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
		'color'	=> $id_primary ,
	),
	array(
		'name'  => esc_html__( 'Secondary Color', 'idealx' ),
		'slug'  => 'secondary-Color',
		'color' => $id_secondary,
	),
	array(
		'name'  => esc_html__( 'Sub Additional Color', 'idealx' ),
		'slug'  => 'sub-additional',
		'color' => $id_sub_color,
  ),
  array(
		'name'  => esc_html__( 'Sub Additional Color plus', 'idealx' ),
		'slug'  => 'sub-additional-plus',
		'color' => $id_sub_color_plus,
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

function toRGB($Hex){
   
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

//$RGB = toRGB($idealx_gradient_prim_from);

$prim    = toRGB($idealx_gradient_prim_from);
$prim_to = toRGB($idealx_gradient_prim_to);

$prim_out    = 'rgba( '. $prim['R']  .','. $prim['G'] .','. $prim['B'].',1)';
$prim_to_out = 'rgba( '. $prim_to['R']  .','. $prim_to['G'] .','. $prim_to['B'].',1)';

$sub     = toRGB($idealx_sub_gradient_from);
$sub_to  = toRGB($idealx_sub_gradient_to);

$sub_out    = 'rgba( '. $sub['R']  .','. $sub['G'] .','. $sub['B'].',1)';
$sub_to_out = 'rgba( '. $sub_to['R']  .','. $sub_to['G'] .','. $sub_to['B'].',1)';
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
      'gradient' => 'linear-gradient(135deg,'. $prim_out .' 0%,'. $prim_to_out .' 100%)',
      'slug'     => 'i-color-gradient'
      ),

    array(
    'name'     => esc_html__( 'Sub Color Gradient ', 'idealx' ),
    'gradient' => 'linear-gradient(135deg,'. $sub_out .' 0%,'. $sub_to_out .' 100%)',
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