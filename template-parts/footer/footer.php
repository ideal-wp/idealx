<?php
/**
 * Footer copy righ
 *
 * @package Idealx.
 * @version 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$taman_site_name = get_bloginfo( 'name' );
$idealx_options  = idealx_get_theme_options();

if ( empty( $idealx_options['to_top_remove_setting'] ) || false === $idealx_options['to_top_remove_setting'] ) {

	?>

<div id="id-to-top" class="id-to-top uk-text-right@s uk-margin uk-text-center">

	<a href="#" uk-totop uk-scroll uk-icon="uk-to-top"></a>

</div>

<?php } ?>



<div id="footer-outer">

	<div id="copyright" class="copyright">

		<div class="uk-container uk-container-expand">

			<div class="">

				<p>&#169; <?php echo esc_html( date_i18n( _x( 'Y', 'copyright date format; check date() on php.net', 'idealx' ) ) ) . ' ' . esc_html( $taman_site_name ); ?>.</p>

			</div>

		</div>

	</div>

</div>
