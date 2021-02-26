<?php
/**
 * Menu Nav serch.
 *
 * @package Idealx
 * @since v1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'idealx_search_innav', 'idealx_nav_serch', 1 );


/** Add serch form to the menu */
function idealx_nav_serch() {
	echo ' <a class="taman-nav-icon-serch uk-navbar-toggle"  uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#" uk-icon="icon:search; ratio: 1.1"></a>';

}

?>

<div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

	<div class="uk-navbar-item uk-width-expand">

		<form class=" search-form uk-search uk-search-navbar uk-width-1-1" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">

			<input class="uk-search-input" type="search" value="" name="s" placeholder="<?php echo esc_attr__( 'Search...', 'idealx' ); ?>" autofocus>

		</form>

	</div>

	<a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

</div>
