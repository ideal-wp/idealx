<?php
/**
 * idealx theme Registering the Footer Widget Areas.
 * @version 1.0.0
 * @since v1.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// Register sidebars  Footer Widget Areas by running idealx_register_widgets_init().
add_action( 'widgets_init', 'idealx_register_widgets_init' );


if( ! function_exists( 'idealx_register_widgets_init' ) ){

  function idealx_register_widgets_init() {
  
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'idealx' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'idealx' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'idealx' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'idealx' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'idealx' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'idealx' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'idealx' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The fourth footer widget area', 'idealx' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
        
  }

}

