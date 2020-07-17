<?php
/**
 * The Blog System layout.
 *
 * @package Idealx
 * @since 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$idealx_options     = idealx_get_theme_options();
$idealx_blog_layout = 'standard';

if ( ! empty( $idealx_options['select_blog_layout'] ) ) {

	$idealx_blog_layout = $idealx_options['select_blog_layout'];

} else {

	$idealx_blog_layout = 'standard';

}

get_template_part( 'template-parts/blog/layout/' . $idealx_blog_layout . '/loop' );
