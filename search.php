<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
						<?php

						if ( have_posts() ) :

							while ( have_posts() ) :

								the_post();

								get_template_part( 'template-parts/blog/layout/standard/format' );

							endwhile;

						else :

								get_template_part( 'template-parts/serch/notfound' );

						endif;


						?>
					<div class="taman-posts-home-pagination uk-pagination uk-flex-center">

						<?php idealx_numeric_posts_nav(); ?>

					</div>

			</div><!-- #primary-column -->

			<?php idealx_sidebar_hook_options(); ?>

		</div><!-- #content-wrap -->
	</div><!-- #primary-container -->
</div><!-- #primary-content -->
<?php
get_footer();
