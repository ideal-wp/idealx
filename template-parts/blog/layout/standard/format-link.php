<?php
/**
 *
 * The template part Blog layout "Standrad" Post Formats "link".
 *
 * A link to another site. Themes may wish to use the first <a href=””> tag in the post content as the external link for that post. An alternative approach could be if the post consists only of a URL, then that will be the URL and the title (post_title) will be the name attached to the anchor for it.
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
	'post-link-formats',
);

global $idealx_category;

$idealx_post_link = idealx_grab_the_url_link();

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

					<a href="<?php echo esc_url( $idealx_post_link ); ?>" target="_blank" uk-tooltip="<?php echo esc_attr__( 'Visit the site', 'idealx' ); ?>">
						<div class="uk-card-media-top format-link-top">

							<div class="post-format-link-top">

									<span class="format-link-icon"><i class="fas fa-link"></i></span>

							</div>



						</div><!--/uk-card-media-top-->
					</a>
						<div class="uk-card-body">

						<h3 class="uk-article-title"><a class="uk-link-reset" href="<?php get_the_permalink(); ?>"><?php get_the_title(); ?></a></h3>

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
