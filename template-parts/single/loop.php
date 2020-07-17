<?php
/**
 * The Loop for single post.
 *
 * @link https://codex.wordpress.org/The_Loop
 * @package Taman Sap
 * @since 1.0.0
 */

if ( have_posts() ) :

	while ( have_posts() ) :

		the_post();

		get_template_part( 'template-parts/single/content' );

		idealx_single_post_pagination();

	endwhile;

endif;

?>

<div class="taman-single-tags">
	<?php

	if ( has_tag() ) {

		echo wp_kses_post( get_the_tag_list( '<p>', ', ', '</p>' ) );

	}

	?>
</div>
