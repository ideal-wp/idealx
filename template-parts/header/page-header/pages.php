<?php
/**
 * Site Page Header.
 *
 * @package Taman spa
 * @since v1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$idealx_options = idealx_get_theme_options();

if ( empty( $idealx_options['id-pages-switch-header'] ) || false === $idealx_options['id-pages-switch-header'] ) {
	?>
<div id="tam-page-header" class="page-header uk-section uk-background-cover uk-panel uk-flex uk-flex-center uk-flex-middle" 
	<?php
	
	if ( ! empty( header_image() ) ) {
       ?>style="background-image: url(<?php
		esc_url( header_image() );?>); "<?php
	}
	?>
>

	<div id="color-overlay"></div>

	<div class="headre-contant uk-container uk-container-expand">

		<h1 class=""><?php echo esc_html( get_the_title() ); ?></h1>

	</div>
</div>

	<?php
}
