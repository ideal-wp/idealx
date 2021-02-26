<?php
/**
 *
 * The template part Blog layout "Standrad" Post Formats "image".
 *
 * @link https://developer.wordpress.org/themes/functionality/post-formats/#supported-formats
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
	'post-format-t-imge',
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
<div class="" uk-grid>
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
							class="uk-background-cover uk-background-center-center uk-height-max-large uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle uk-background-norepeat uk-card-media-top"
							style="background-image:url(<?php echo esc_url( $idealx_featured_img_url ); ?>);"
							uk-height-viewport="expand: true"
							>


							<?php idealx_post_meat_imge(); ?>

						</div>
					<?php
				} elseif ( $idealx_attachments ) {


					?>
					<div
							class=" uk-panel uk-flex uk-flex-center uk-flex-middle  uk-card-media-top uk-cover-container uk-height-large">
							<?php
							echo '<a href="';
							echo esc_url( get_the_permalink() );
							echo '" class="thumbnail-wrapper">';
							echo '<img data-src="';
							echo esc_url( idealx_catch_that_image() );
							echo '" alt="' . esc_attr( get_the_title() )
							. '" uk-img>';
							echo '</a>';
							?>
						<?php idealx_post_meat_imge(); ?>

					</div>
						<?php
				} else {

					?>
					<div
							class=" uk-panel uk-flex uk-flex-center uk-flex-middle  uk-card-media-top uk-cover-container uk-height-large ">
							<?php
							echo '<a href="';
							echo esc_url( get_the_permalink() );
							echo '" class="thumbnail-wrapper">';
							echo '<img data-src="';
							echo esc_url( idealx_catch_that_image() );
							echo '" uk-img uk-cover>';
							echo ' alt="">';
							echo '</a>';
							?>
						<?php idealx_post_meat_imge(); ?>

					</div>
					<?php
				}
				?>
				</div><!--/uk-card-media-top-->

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
