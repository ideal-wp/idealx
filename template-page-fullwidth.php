<?php
/**
 * Ttemplate name: Full Width
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
<div id="primary-content" class="mt-fullwidth">
							<?php

							if ( have_posts() ) :

								while ( have_posts() ) :

										the_post();

										the_content();


								endwhile;

							endif;

							?>
</div><!-- #primary-content -->
<?php
	get_footer();
