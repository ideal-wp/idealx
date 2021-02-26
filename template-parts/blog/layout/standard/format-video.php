<?php
/**
 *
 * The template part Blog layout "Standrad" Post Formats "Video ".
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
	'post-formats-video',
);

global $idealx_category;



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
							<div class="uk-video uk-height-medium">
									<?php
										idealx_the_post_formats__embedded_midea( array( 'video', 'iframe' ) );
									?>
							</div>
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
