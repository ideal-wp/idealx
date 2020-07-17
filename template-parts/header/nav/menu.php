<?php
/**
 * Menu Nav.
 *
 * @package Idealx
 * @since v1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	<div id="taman-nav" class="taman-nav uk-navbar-container">

		<div class="uk-container uk-container-expand">

				<nav class="uk-navbar" id="taman-nav-c" uk-navbar>

						<?php
							get_template_part( 'template-parts/header/nav/menu-left' );
						?>

				</nav>

		</div>

	</div>
