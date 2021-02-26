<?php
/**
 * Site Header.
 *
 * @package Taman spa
 * @since v1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( is_search() ) {
	get_template_part( '/template-parts/header/page-header/archives' );
}

if ( is_category()
			|| is_tag()
			|| is_day()
			|| is_month()
			|| is_year()
			|| is_author()
			|| is_author()
			) {

	get_template_part( '/template-parts/header/page-header/archives' );
}

global $post;
$idealx_posttype = get_post_type( $post );

if ( ( is_single() && 'post' === $idealx_posttype ) ) {

	get_template_part( '/template-parts/header/page-header/single' );

} elseif ( is_page() && 'page' === $idealx_posttype && ! is_front_page() ) {
	get_template_part( '/template-parts/header/page-header/pages' );

}
