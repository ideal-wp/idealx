<?php
/**
 *
 * The template part Blog layout "Standrad" Post Formats "Standrad".
 *
 * This template part When writing or editing a Post, “Standard” designates that no Post Format is specified. Also if an invalid format is specified, “Standard” (no format) is applied by default.
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
	'uk-article',
);

global $idealx_category;
$idealx_category = get_the_category();

$idealx_attachments = get_posts(
	array(
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'posts_per_page' => 1,
		'post_parent'    => $post->ID,
		'exclude'        => get_post_thumbnail_id(),
	),
	wp_reset_postdata()
);


?>
<div class="post-grid uk-grid" uk-grid>
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
				if ( has_post_thumbnail() ) {

					$idealx_featured_img_url = get_the_post_thumbnail_url();
					?>
						<div
							class="uk-background-cover uk-background-center-center uk-height-max-medium uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle uk-background-norepeat uk-card-media-top"
							style="background-image:url(<?php echo esc_url( $idealx_featured_img_url ); ?>);"
							uk-height-viewport="expand: true"
							>

							<a href="<?php  echo esc_url( get_the_permalink() ); ?>">
							<div class="taman-overlay uk-overlay uk-position-cover uk-visible-toggle uk-animation-toggle">
								<div class="uk-position-center uk-hidden-hover">
									<span class="uk-animation-slide-left" uk-icon="icon: link; ratio: 2"></span>
								</div>
							</div></a>

						</div>
					<?php
				} elseif ( $idealx_attachments ) {

					$idealx_post_img_url = wp_get_attachment_image_src( $idealx_attachments[0]->ID, 'full', true );
					?>
					<div
							class="uk-background-cover uk-background-center-center uk-height-max-medium uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle uk-background-norepeat uk-card-media-top"
							style="background-image:url(<?php echo esc_url( $idealx_post_img_url[0] ); ?>);"
							uk-height-viewport="expand: true">


							<a href="<?php echo esc_url( get_the_permalink() ); ?>">
							<div class="taman-overlay uk-overlay uk-position-cover uk-visible-toggle uk-animation-toggle">
								<div class="uk-position-center uk-hidden-hover">
									<span class="uk-animation-slide-left" uk-icon="icon: link; ratio: 2"></span>
								</div>
							</div></a>

						</div>
						<?php
				}
				?>
				</div><!--/uk-card-media-top-->
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
						<a  class="uk-button uk-button-text" href="<?php echo esc_url( get_permalink() ); ?> ">
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
