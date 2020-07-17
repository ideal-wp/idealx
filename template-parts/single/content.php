<?php
/**
 * Single post the content.
 *
 * @package Idealx
 * @since v1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$idealx_classes = array();

?>
<span class="breadcrumb"><?php idealx_get_breadcrumb(); ?></span>
<article <?php post_class( $idealx_classes ); ?> id="post-<?php the_ID(); ?>">

	<div class="uk-card uk-card-default">

		<div class="uk-card-media-top">

		</div><!--/uk-card-media-top-->

		<div class="uk-card-body">
		<div class=""><?php the_content(); ?></div>
			<?php

			$idealx_defaults = array(
				'before'           => '<ul class="uk-pagination">' . __( 'Pages:', 'idealx' ),
				'after'            => '</ul>',
				'link_before'      => '<li>',
				'link_after'       => '</li>',
				'next_or_number'   => 'number',
				'separator'        => ' ',
				'nextpagelink'     => esc_html__( 'Next page', 'idealx' ),
				'previouspagelink' => esc_html__( 'Previous page', 'idealx' ),
				'pagelink'         => '%',
				'echo'             => 1,
			);

			wp_link_pages( $idealx_defaults );

			?>

		</div>

	</div><!--/uk-card-->

</article>
