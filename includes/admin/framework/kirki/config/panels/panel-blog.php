<?php
/*
 *
 * panel Blog
 *
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

$idealx_config_id = 'idealx_theme';


Kirki::add_panel( 'blog_settings_panel', array(
  'priority'       => 8,
  'title'          => esc_html__( 'Blog', 'idealx' ),
) );
//===================[ section blog home settings ]===================
Kirki::add_section( 'blog_settings_options', array(
  'title'          => esc_html__( 'Blog Home Styling', 'idealx' ),
  'panel'          => 'blog_settings_panel',
  'priority'       => 1,
) );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'toggle',
	'settings'    => 'add-cards-blog',
  'label'       => esc_html__( 'Cards Style' , 'idealx' ),
  'description' =>  esc_html__( 'Add cards style to posts in blog home' , 'idealx' ),
	'section'     => 'blog_settings_options',
	'default'     => false,
	'priority'    => 2,
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'toggle',
	'settings'    => 'add-scrollspy',
  'label'       => esc_html__( 'Scrollspy Animations' , 'idealx' ),
  'description' =>  esc_html__( 'Lood Posts on animations, Ex. if you scroll down a page, and an element appears in the viewport for the first time, you can trigger a smooth animation to fade in the element.' , 'idealx' ),
	'section'     => 'blog_settings_options',
	'default'     => '',
	'priority'    => 3,
] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'select',
	'settings'    => 'id-scroll-animations',
	'label'       => esc_html__('Select Animation To Use Within Lood Posts', 'idealx'), 
	'section'     => 'blog_settings_options',
	'default'     => '',
	'placeholder' => esc_html__( 'Select an option...', 'idealx' ),
	'priority'    => 4,
	'multiple'    => 1,
	'choices'     => [
		'uk-animation-fade'               =>  esc_html__('fade','idealx' ),
    'uk-animation-scale-up'           =>  esc_html__('scale up','idealx' ),
    'uk-animation-scale-down'         =>  esc_html__('scale down','idealx' ),
    'uk-animation-shake'              =>  esc_html__('shake','idealx' ),
    'uk-animation-slide-top'          =>  esc_html__('slide top','idealx' ),
    'uk-animation-slide-bottom'       =>  esc_html__('slide bottom','idealx' ),
    'uk-animation-slide-left'         =>  esc_html__('slide left','idealx' ),
    'uk-animation-slide-right'        =>  esc_html__('slide right','idealx' ),
    'uk-animation-slide-top-small'    =>  esc_html__('slide top small','idealx' ),
    'uk-animation-slide-bottom-small' =>  esc_html__('slide bottom small','idealx' ),
    'uk-animation-slide-left-small'   =>  esc_html__('slide left small','idealx' ),
    'uk-animation-slide-right-small'  =>  esc_html__('slide right small','idealx' ),
    'uk-animation-slide-top-medium'    =>  esc_html__('slide top medium','idealx' ),
    'uk-animation-slide-bottom-medium' =>  esc_html__('slide bottom medium','idealx' ),
    'uk-animation-slide-left-medium'   =>  esc_html__('slide left medium','idealx' ),
    'uk-animation-slide-right-medium'  =>  esc_html__('slide right medium','idealx' ),
	],
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'toggle',
	'settings'    => 'repeat-scrollspy',
  'label'       => esc_html__( 'Repeat Animati on Scroll up and down' , 'idealx' ),
  'description' =>  esc_html__( 'Applies the Animati every time the element is on Scroll view up or down.' , 'idealx' ),
	'section'     => 'blog_settings_options',
	'default'     => '',
	'priority'    => 5,
] );

//===================[ section Single Post settings ]===================
Kirki::add_section( 'single_post_settings_options', array(
  'title'          => esc_html__( 'Single post Styling', 'idealx' ),
  'panel'          => 'blog_settings_panel',
  'priority'       => 2,
) );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'toggle',
	'settings'    => 'post-imge-in',
  'label'       => esc_html__( 'Remove Featured Image From Inside The Post
  ' , 'idealx' ),
  'description' => esc_html__( 'Remove The Featured Image Inside the Single Post' , 'idealx' ),
	'section'     => 'single_post_settings_options',
	'default'     => false,
	'priority'    => 1,
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'toggle',
	'settings'    => 'post-cards',
  'label'       => esc_html__( 'Add Cards style to single post
  ' , 'idealx' ),
	'section'     => 'single_post_settings_options',
	'default'     => false,
	'priority'    => 2,
] );