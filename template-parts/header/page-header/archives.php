<?php
/**
 * Site Header archives data.
 *
 * @package Taman spa
 * @since v1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'idealx_archives_taitle' ) ) {
	/**
	 * Get the archives_taitle.
	 */
	function idealx_archives_taitle() {

		if ( is_category() ) {

			single_cat_title();

		} elseif ( is_tag() ) {

			single_tag_title();

		} elseif ( is_day() ) {

			echo esc_html__( ' Daily Archives', 'idealx' ) . ': ' . get_the_date();

		} elseif ( is_month() ) {

			echo esc_html__( ' Monthly Archives', 'idealx' ) . ': ' . get_the_date( 'F-Y' );

		} elseif ( is_year() ) {

			echo esc_html__( ' Yearly Archives', 'idealx' ) . ': ' . get_the_date( 'Y' );

		} elseif ( is_author() ) {

			echo esc_html__( ' Author Archives', 'idealx' ) . ': ' . get_the_author();

		} elseif ( is_search() ) {
			echo esc_html__( 'Search Results: ', 'idealx' );

			the_search_query();

		} else {
			echo esc_html__( 'Archives', 'idealx' );
		}

	}
}

$idealx_options = idealx_get_theme_options();

if ( empty( $idealx_options['id-archives-switch-header'] ) || false === $idealx_options['id-archives-switch-header'] ) {
	?>
	<div id="tam-page-header" class="archives-header uk-section uk-background-cover uk-panel uk-flex uk-flex-center uk-flex-middle" <?php
	
	if ( ! empty( header_image() ) ) {
       ?>style="background-image: url(<?php
		esc_url( header_image() );?>); "<?php
	}
	?>
	>

		<div id="color-overlay"></div>

		<div class="headre-contant uk-container uk-container-expand">

			<h1 class=""><?php idealx_archives_taitle(); ?></h1>

		</div>

	</div>
	<?php
}
