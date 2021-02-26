<?php
/**
 *
 * The template part Blog layout "Standrad" Post Formats "gallery".
 *
 * @link https://developer.wordpress.org/themes/functionality/post-formats/#supported-formats
 *
 * @package Idealx
 * @since 1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$idealx_classes = array(

	'taman-article',
	' uk-article',
);

global $idealx_category;
$idealx_category = get_the_category();

$idealx_attachments = get_posts(
	array(
		'post_type'      => 'attachment',
		'posts_per_page' => 1,
		'post_parent'    => $post->ID,
		'exclude'        => get_post_thumbnail_id(),
	),
	wp_reset_postdata()
);


?>
<div class="uk-grid" uk-grid>
	<div class="uk-width-1-6 uk-visible@l">
			<div class="post-datd-stand">
			<span class="month-data"> <?php echo esc_html( get_the_time( 'M' ) ); ?></span>
				<span class="day-data" ><?php echo esc_html( get_the_time( 'd' ) ); ?></span>
				<span class="year-data" ><?php echo esc_html( get_the_time( 'Y' ) ); ?></span>
			</div>
	</div>

	<div class="uk-width-5-6@l">
			<article <?php post_class( $idealx_classes ); ?> id="post-<?php the_ID(); ?>">
			<div class="uk-card uk-card-default">
			<div class="uk-card-media-top">
					<?php

					if ( count( $idealx_attachments ) > 1 ) {
						?>
			<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>
				<ul class="uk-slideshow-items uk-height-viewport="min-height: 300"">

						<?php
						if ( $idealx_attachments ) {
							foreach ( $idealx_attachments as $idealx_attachment ) {
								$idealx_class    = 'post-attachment mime-' . sanitize_title( $idealx_attachment->post_mime_type );
								$idealx_thumbimg = wp_get_attachment_image_src( $idealx_attachment->ID, 'full', true );
								echo '<li class="post-gallery ' . esc_attr( $idealx_class ) . ' data-design-thumbnail">
              
              <img src="' . esc_attr( $idealx_thumbimg[0] ) . '" alt="" uk-cover>

              </li>';
							}
						}
						?>
				</ul>

				<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
				<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

			</div>
						<?php
					} elseif ( $idealx_attachments < 1 ) {

						foreach ( $idealx_attachments as $idealx_attachment ) {
							echo wp_get_attachment_link( $idealx_attachment->ID, 'full' );
						}
					} else {

						idealx_show_gallery_image_urls();
					
					}

					?>
				</div>
				<div class="uk-card-body">
				<h3 class="uk-article-title"><a class="uk-link-reset" href="<?php  echo esc_url( get_the_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h3>

					<p class="uk-article-meta">
						<?php esc_html_e( 'Written by', 'idealx' ); ?>
						<?php the_author_posts_link(); ?>
						<span class="uk-hidden@l"><?php esc_html_e( 'on', 'idealx' ); ?>
						<?php echo esc_html( get_the_time( 'F d,y' ) ); ?></span>
						<?php esc_html_e( ' Posted in', 'idealx' ); ?>
						<?php idealx_get_primary_category( $idealx_category ); ?>
					</p>
					<div class="tam-excerpt uk-margin-smal-top">
						<?php
						the_excerpt(
							sprintf(
							/* translators: draft saved date format, see http://php.net/date */
								__( 'Continue reading %s', 'idealx' ),
								get_the_title( '<span class="screen-reader-text">', '</span>', false )
							)
						);
						?>
					</div>

				</div><!--/uk-card-body-->

				<div class="uk-card-footer">
					<div class="uk-grid-small uk-child-width-auto" uk-grid>

						<div id="id-rea-more">
							<a class="uk-button uk-button-text" href="<?php echo esc_url( get_permalink() ); ?> ">
							<?php echo esc_html__( 'Read More', 'idealx' ); ?> </a>
						</div>

						<div id="tam-comment-meta">
							<a class="uk-button uk-button-text" href="<?php echo esc_url( get_permalink() ); ?>#comments">
							<?php comments_number( esc_html__( 'No Comments', 'idealx' ), esc_html__( 'One Comment', 'idealx' ), esc_html__( '% Comments', 'idealx' ) ); ?> </a>
						</div>

					</div>
				</div><!--/uk-card-footer-->

			</div><!--/uk-card-->
		</article>

	</div>

</div><!--/uk-grid-->

<?php
