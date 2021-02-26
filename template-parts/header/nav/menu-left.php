<?php
/**
 * Menu Nav left.
 *
 * @package Idealx
 * @since v1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Get Serach options mood */
function idealx_search_mood_innav() {
	$idealx_options = idealx_get_theme_options();
	$moode          = 'form';
	if ( ! empty( $idealx_options['shearch_nav_mod'] ) ) {
		$moode = $idealx_options['shearch_nav_mod'];
	}

	return $moode;
}
get_template_part( 'template-parts/header/nav/search', idealx_search_mood_innav() );
?>
	<div class="uk-navbar-left nav-overlay">

		<div class="taman-Logo">
		<?php get_template_part( 'template-parts/header/nav/logo' ); ?>
		</div>

		<div class="uk-visible@s uk-visible@m">

		<?php do_action( 'idealx_uikit_top_menu' ); ?>

		</div>


	</div>

	<div class="uk-navbar-center"></div>

	<div class="uk-navbar-right nav-overlay uk-visible@s uk-visible@m">

		<ul class="uk-navbar-nav">

			<li>
			<?php do_action( 'idealx_search_innav' ); ?>
			</li>

			<?php get_template_part( 'template-parts/header/nav/woocommerce/woo-cart' ); ?>

		</ul>

	</div>

<div class="uk-navbar-right uk-hidden@m">
	<a class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #offcanvas-overlay" uk-navbar-toggle-icon href=""> </a>
</div>
