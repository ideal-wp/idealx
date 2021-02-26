<?php
/**
 * Search form in navbar.
 *
 * @package Idealx
 * @since v1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'idealx_search_innav', 'idealx_nav_serch', 1 );


if ( ! function_exists( 'idealx_nav_serch' ) ) {
	/** Add serch form to the menu */
	function idealx_nav_serch() {
		echo '	
        <form class="uk-search uk-search-default" role="search" method="get" action="' . esc_url( home_url( '/' ) ) . '">
        <span class="uk-search-icon-flip" uk-search-icon></span>

              <input class="uk-search-input" type="search" value="" name="s" placeholder="' . esc_attr__( 'Search...', 'idealx' ) . '" autofocus>
        </form>
		';
	}
}
