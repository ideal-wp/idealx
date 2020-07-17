<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Idealx
 * @since 1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( function_exists( 'dynamic_sidebar' ) ) {

	global $post;
	global $woocommerce;

	$idealx_posttype = get_post_type( $post );

	if ( (
		( is_archive() )
		|| ( is_author() )
		|| ( is_category() )
		|| ( is_home() )
		|| ( is_single() )
		|| ( is_tag() )
	)
		&& ( 'post' === $idealx_posttype ) ) {

		dynamic_sidebar( 'Blog Sidebar' );

	} elseif ( $woocommerce && is_shop()
		|| $woocommerce && is_product_category()
		|| $woocommerce && is_product_tag()
		|| $woocommerce && is_product() ) {

		dynamic_sidebar( 'WooCommerce Sidebar' );

	} else {

		dynamic_sidebar( 'Page Sidebar' );

	}
}
