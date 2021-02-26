<?php
/**
 * IdealX Admin Theme Options page.
 *
 * @package Idealx
 * @since v1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$idealx_theme_version = idealx_theme_version();
get_template_part( 'admin/inc/options-page/panels/panel', 'header' );
?>

			<div class="uk-section uk-padding-small">
				<div class="uk-container uk-padding-small">
					<div class="idealx-welcome-header-wrap">

						<h1 class="idealxwelcome"><?php echo esc_html__( 'Welcome to idealx', 'idealx' ); ?>
							<span><?php echo 'v' . esc_html( $idealx_theme_version ); ?></span></h1>

						<div class="sub-text">
							<?php echo esc_html__( 'Thank you for choosing idealx as your WordPress theme!', 'idealx' ); ?>
						</div>

						<div class="idealx-welcome-tab">
							<ul class="idealx-tab" uk-tab>

								<li><a href="#"><?php esc_html_e( 'Getting started', 'idealx' ); ?> </a></li>

								<li><a href="#"><?php esc_html_e( 'options', 'idealx' ); ?></a></li>
							</ul>
							<ul class="uk-switcher uk-margin">

								<li><?php get_template_part( 'admin/inc/options-page/panels/panel', 'start' ); ?></li>

								<li><?php get_template_part( 'admin/inc/options-page/panels/panel', 'options' ); ?></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			
</div>