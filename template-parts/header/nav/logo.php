<?php
/**
 * Menu Nav logo.
 *
 * @package Idealx
 * @since v1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$idealx_home_url       = esc_url( home_url() );
$idealx_logo_site_name = get_bloginfo( 'name' );

$idealx_custom_logo_id = get_theme_mod( 'custom_logo' );
$idealx_image          = wp_get_attachment_image_src( $idealx_custom_logo_id, 'full' );


?>

<a id="logo" class="uk-navbar-item uk-logo site-logo" href="<?php echo esc_url( $idealx_home_url ); ?>">
   <?php
	if ( ! empty( $idealx_image ) ) {

		?>
		 <img src="<?php echo esc_url( $idealx_image[0] ); ?>">
		 <?php
	} else {
		?>
	<h2><?php echo esc_html( $idealx_logo_site_name ); ?></h2>
		<?php
	}
	?>
	  
	</a>
