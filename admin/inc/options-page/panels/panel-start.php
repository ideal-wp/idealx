<?php
// Exit if accessed this directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<style>
.notice {
  display: none !important;
}
</style>
<?php if ( ! class_exists( 'Kirki' ) ) { ?>

	<div uk-alert class="idealx-kirki-notic-admin">

	  <h3><?php esc_html_e( 'Important Notice', 'idealx' ); ?> </h3>
	  <div class="uk-clearfix">

		  <div class="uk-float-left">

			<div class="idealx-notic-admin-text">

			  <span>
			  <?php esc_html_e( 'Please install and activate the recommended plugins and any of the desired optional plugins which you wish to use on your site, Or Watch the video below, to know how to start', 'idealx' ); ?>
			  </span>

			</div>

	  </div>

	  <div class="uk-float-right">

	  <div class="idealx-admin-instal">

	  <a href="<?php echo esc_url( admin_url( 'themes.php?page=tgmpa-install-plugins&plugin_status=activate' ) ); ?>"
		class="uk-button uk-button-default"><?php esc_html_e( 'Begin Installing Plugins', 'idealx' ); ?></a>

	  </div>

	  </div>

	  </div>

	</div>
<?php } ?>





<div class="idealx-admin-page-footer-start">

  <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
	<div>

	  <span class="id-ad-icon"><i class="fas fa-book"></i></span>
	  <h3>DOCUMENTATION</h3>

	  <p>
		<?php esc_html_e( 'The idealx Theme is in the first release So Now The documentation is under construction and you can visit our documentation site .', 'idealx' ); ?>
	  </p>

	  <a href="https://idealx.mtaman.me/docs/"
		class="uk-button uk-button-default uk-margin-bottom"><?php esc_html_e( 'DOCUMENTATION', 'idealx' ); ?></a>

	</div>

	<div>

	  <span class="id-ad-icon"><i class="far fa-life-ring"></i></span>
	  <h3><?php esc_html_e( 'Support', 'idealx' ); ?></h3>
	  
	<p>
		<?php esc_html_e( 'Got any questions? Please Go idealx WordPress Theme Support Page Ask away and we will get back to you shortly..', 'idealx' ); ?>
	  </p>

	</div>

	<div>

	  <span class="id-ad-icon-smile"><i class="fas fa-smile"></i></span>
	  <h3><?php esc_html_e( 'Please Rate us', 'idealx' ); ?></h3>
	  <p>
		<?php esc_html_e( ' We understand that there can be no success, without excellent support. Could you please do us a BIG favor and give it a 5-star rating on WordPress? This would boost our motivation and help other users make a comfortable decision while choosing the idealx theme.', 'idealx' ); ?>
	  </p>

	</div>

  </div>

</div>
