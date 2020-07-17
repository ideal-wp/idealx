<?php
/**
 * Site Builder Options.
 *
 * @package Idealx
 * @version 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


$idealx_options = idealx_get_theme_options();

/**
 * Start Blog Sidebar.
 */
// Check if user disable sidebar or not.
if ( empty( $idealx_options['is_post_sidebar'] ) || false === $idealx_options['is_post_sidebar'] ) {

	add_action( 'idealx_sidebar_hook_options', 'idealx_blog_sidebar' );

}

		/** Blog sidebar. */
function idealx_blog_sidebar() {

	global $post;
	$idealx_posttype = get_post_type( $post );

	if ( (
	( is_archive() )
	|| ( is_author() )
	|| ( is_category() )
	|| ( is_home() )
	|| ( is_single() )
	|| ( is_search() )
	|| ( is_tag() )
	)
	&& ( 'post' === $idealx_posttype ) ) {

			get_template_part( 'template-parts/sidebar/sidebar' );
	}
}

/**
 * Start page Sidebar.
 */
// Check if user disable sidebar or not.
if ( empty( $idealx_options['is_page_sidebar'] ) || false === $idealx_options['is_page_sidebar'] ) {

	add_action( 'idealx_sidebar_hook_options', 'idealx_page_sidebar' );
}
/** Page sidebar. */
function idealx_page_sidebar() {

	if ( is_page() ) {
		get_template_part( 'template-parts/sidebar/sidebar' );
	}
}

/** Befor content. */
function idealx_sidebar_disable() {

	global $post;
	$idealx_posttype = get_post_type( $post );
	$idealx_options  = idealx_get_theme_options();

	if ( (
	( is_archive() )
	|| ( is_author() )
	|| ( is_category() )
	|| ( is_home() )
	|| ( is_single() )
	|| ( is_tag() )
	)
	&& ( 'post' === $idealx_posttype ) ) {

		if ( ! empty( $idealx_options['is_post_sidebar'] ) || true === $idealx_options['is_post_sidebar'] ) {

			echo 'uk-container-small';
		}
	} elseif ( is_page() && ! empty( $idealx_options['is_page_sidebar'] ) || true === $idealx_options['is_page_sidebar'] ) {

				echo 'uk-container-small';

	}

}
