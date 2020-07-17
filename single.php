<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Idealx
 * @since 1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>


<div id="primary-content" class="uk-section">
	<div id="primary-container" class="tam-container uk-container <?php esc_attr( idealx_sidebar_disable() ); ?>" >
		<div  id="content-wrap" class="uk-grid-column-small" uk-grid>

			<div id="primary-column" class="uk-width-expand@m uk-first-column">

				<div class="uk-container">

						<?php get_template_part( 'template-parts/single/loop' ); ?>

						<?php idealx_comment_open(); ?>

						<?php idealx_comment_close(); ?> 

				</div>

			</div><!-- #primary-column -->
			<?php idealx_sidebar_hook_options(); ?>


		</div><!-- #content-wrap -->
	</div><!-- #primary-container -->
</div><!-- #primary-content -->

<?php
get_footer();

