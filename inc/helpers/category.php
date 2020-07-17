<?php
/**
 * Taman spa get primary category.
 *
 * @package Idealx.
 * @since v1.0.0
 */

// Exit if accessed this directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get primary category.
 *
 * @param PrimaryCategory $idealx_category to Get primary category.
 * @since v1.0.0
 */
function idealx_get_primary_category( $idealx_category ) {

	$use_cat_link = true;
	// If post has a category assigned.
	if ( $idealx_category ) {
		$idealx_category_display = '';
		$idealx_category_link    = '';
		if ( class_exists( 'WPSEO_Primary_Term' ) ) {
			// Show the post's 'Primary' category, if this Yoast feature is available, & one is set.
			$wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
			$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
			$term               = get_term( $wpseo_primary_term );
			if ( is_wp_error( $term ) ) {
				// Default to first category (not Yoast) if an error is returned.
				$idealx_category_display = $idealx_category[0]->name;
				$idealx_category_link    = get_category_link( $idealx_category[0]->term_id );
			} else {
				// Yoast Primary category.
				$idealx_category_display = $term->name;
				$idealx_category_link    = get_category_link( $term->term_id );
			}
		} else {
			// Default, display the first category in WP's list of assigned categories.
			$idealx_category_display = $idealx_category[0]->name;
			$idealx_category_link    = get_category_link( $idealx_category[0]->term_id );
		}
		// Display category.
		if ( ! empty( $idealx_category_display ) ) {

			if ( true === $use_cat_link && ! empty( $idealx_category_link ) ) {

				echo '<a href="' . esc_url( $idealx_category_link ) . '">' . esc_html( $idealx_category_display ) . '</a>';

			} else {
				echo '' . esc_html( $idealx_category_display ) . '';
			}
		}
	}
}
/**
 * Idealx_get_cattegory.
 */
function idealx_get_cattegory() {
	$categories = get_the_category();

	$output = null;

	if ( ! empty( $categories ) ) {

		foreach ( $categories as $idealx_category ) {

			$output .= '<div id="cat-post-header"> <a  class="cat-post-header uk-link-reset uk-button' . $idealx_category->slug . '" href="' . get_category_link( $idealx_category->term_id ) . '" alt="' .
			/* translators: draft saved date format, see http://php.net/date */
			sprintf( __( 'View all posts in %s', 'idealx' ), $idealx_category->name ) . '" uk-tooltip="' .
			/* translators: draft saved date format, see http://php.net/date */
			sprintf( __( 'View all posts in %s', 'idealx' ), $idealx_category->name ) . '" >' . esc_html( $idealx_category->name ) . '</a> </div>';
		}
	}
	$cat_out      = trim( $output );
	$allowed_html = array(
		'a'   => array(
			'alt'        => array(),
			'href'       => array(),
			'uk-tooltip' => array(),
			'class'      => array(),

		),
		'div' => array(
			'id'    => array(),
			'class' => array(),
		),
	);
		echo wp_kses( $cat_out, $allowed_html );
}
