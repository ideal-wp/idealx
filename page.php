<?php
/**
 * The template for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
	<div id="primary-container" class="tam-container uk-container <?php esc_attr( idealx_sidebar_disable() ); ?>" >
		<div  id="content-wrap" class="uk-grid-column-small" uk-grid>
			<div id="primary-column" class="uk-width-expand@m uk-first-column">
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

			<?php idealx_comment_open(); ?>

			<?php idealx_comment_close(); ?>

			</div><!-- #primary-column -->

			<?php idealx_sidebar_hook_options(); ?>

		</div><!-- #content-wrap -->
	</div><!-- #primary-container -->
</div><!-- #primary-content -->
<?php
	get_footer();

