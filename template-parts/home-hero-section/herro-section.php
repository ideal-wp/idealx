<?php
/**
 *  Idealx – Home Hero Section.
 *
 * @package idealx WordPress Theme
 * @version 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$idealx_hero_header      = get_theme_mod( 'hearo_text' );
$idealx_hero_textarea    = get_theme_mod( 'hero_textarea' );
$idealx_hero_pri_but_enb = get_theme_mod( 'hero_select_primary_button_s' );
$idealx_hero_sec_but_enb = get_theme_mod( 'hero_select_button_s' );
$idealx_secondary_text   = get_theme_mod( 'secondary_button_text' );
$idealx_secondary_link   = get_theme_mod( 'secondary_button_link' );
$idealx_primary_text     = get_theme_mod( 'primary_button_text' );
$idealx_primary_link     = get_theme_mod( 'primary_button_link' );
$idealx_hero_img_bac     = esc_url( get_theme_mod( 'hero_background_image' ) );
?>
<div id="hero-section" class=" hero-section uk-section uk-section-primary
<?php

if ( ! class_exists( 'Kirki' ) ) {

	?>
	uk-background-cover uk-background-norepeat uk-background-center-center"

	<?php if ( ! empty( $idealx_hero_img_bac ) ) { ?> 
	style="background-image: url(<?php echo esc_html( $idealx_hero_img_bac ); ?>);" 

		<?php
	}
}
?>
													>
		<div class="hero-container uk-container">

				<div id="hero-section-content" class="hero-content">

				<?php
				if ( ! empty( $idealx_hero_header ) ) {

					echo '<h1>' . esc_html( $idealx_hero_header ) . ' </h1>';

				} else {

					echo '<p>' . esc_html__( 'Edit this by going to your Dashboard -> Appearance -> Customise -> Home Hero Section', 'idealx' ) . '
                                        </p>';
				}
				?>
										<div id="hero-section-content">
												<p>
												<?php

												if ( ! empty( $idealx_hero_textarea ) ) {
													echo esc_html( $idealx_hero_textarea );
												} else {
													echo esc_html__( 'Edit this by going to your Dashboard -> Appearance -> Customise -> Home Hero Section', 'idealx' );
												}

												?>
												</p>

										</div>

						<?php if ( empty( $idealx_hero_sec_but_enb ) || 'No' === $idealx_hero_sec_but_enb ) { ?>

								<button id="hero-secondary" class="uk-button uk-button-secondary uk-button-large" onclick="window.location.href='<?php echo esc_url( $idealx_secondary_link ); ?>'">

											<?php
											if ( ! empty( $idealx_secondary_text ) ) {
												echo esc_html( $idealx_secondary_text );
											} else {
												echo esc_html__( 'Secondary', 'idealx' );
											}
											?>
								</button>

						<?php } ?>

						<?php if ( empty( $idealx_hero_pri_but_enb ) || 'No' === $idealx_hero_pri_but_enb ) { ?>

							<button id="hero-primary" class="uk-button uk-button-secondary uk-button-large" onclick="window.location.href='<?php echo esc_url( $idealx_primary_link ); ?>'">
								<?php
								if ( ! empty( $idealx_primary_text ) ) {

									echo esc_html( $idealx_primary_text );

								} else {

									echo esc_html__( 'Primary', 'idealx' );

								}
								?>
							</button>

						<?php } ?>

				</div>

		</div>

</div>
