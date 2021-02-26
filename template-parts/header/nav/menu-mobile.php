<?php
/**
 * Mobile Menu.
 *
 * @package Idealx
 * @since v1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>



<div class="m-at-offcanvas " id="offcanvas-overlay" uk-offcanvas="overlay: true; esc-close:true; bg-close:true;">
		<div id="m-t-offcanvas" class="uk-offcanvas-bar">

		<button class="uk-offcanvas-close" type="button" uk-close></button>

			<div class="idealx-mobile-menu" id="idealx-mobile-nav">

					<?php do_action( 'idealx_uikit_offcanvas_menu' ); ?>

					<div>

						<?php dynamic_sidebar( 'Off Canvas' ); ?>

					</div>
					<!-------<div class="taman-clos-offcanves">
						<a class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #offcanvas-overlay" href="#" ><span><?php echo esc_html__( 'close menu', 'idealx' ); ?></span></a>
					</div>---->
			</div>

		</div>

</div>
