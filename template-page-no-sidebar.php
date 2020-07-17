<?php
/**
 * Ttemplate name: No Sidebar
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#uses-for-page-templates
 *
 * @package Idealx
 * @since 1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<div id="primary-content" class="uk-section">
	<div id="primary-container" class="tam-container uk-container" >
		<div id="content-wrap" calss="content-wrap">
					<span class="breadcrumb"><?php idealx_get_breadcrumb(); ?></span>
					<div class="uk-container uk-card uk-card-default">
						<div class="uk-card-body">

							<?php

							if ( have_posts() ) :

								while ( have_posts() ) :

										the_post();

										the_content();


								endwhile;

							endif;

							?>
						</div>
					</div>		

		</div><!-- #content-wrap -->

			<?php idealx_comment_open(); ?>

			<?php idealx_comment_close(); ?>


	</div><!-- #primary-container -->
</div><!-- #primary-content -->
<?php
	get_footer();
