<?php
/**
 * The template for displaying archive pages.
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

get_header(); ?>

<div id="primary-content" class="uk-section">
	<div id="primary-container" class="tam-container uk-container 
	<?php

	esc_attr( idealx_sidebar_disable() );

	?>
	" >
		<div  id="content-wrap" class="uk-grid-column-small" uk-grid>

			<div id="primary-column" class="uk-width-expand@m uk-first-column">

			<?php get_template_part( 'template-parts/blog/layout' ); ?>

			</div><!-- #primary-column -->

			<?php idealx_sidebar_hook_options(); ?>

		</div><!-- #content-wrap -->
	</div><!-- #primary-container -->
</div><!-- #primary-content -->

<?php
get_footer();
