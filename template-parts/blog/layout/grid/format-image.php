<?php
/**
 *
 * The template part Blog layout "Grid" Post Formats "image".
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

global $idealx_category;
$idealx_category = get_the_category();

$idealx_classes = array(

	'taman-article',
	' uk-article',
);

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

			<article <?php post_class( $idealx_classes ); ?> id='article'>
				<div class="article-inner-wrap">
					<div class="article-post-content">
						<div>
							<div class="uk-card uk-card-default">

							<div class="uk-card-media-top uk-cover-container uk-height-medium">

										<?php
										if ( $idealx_attachments ) {

											
											?>

						<img src="<?php echo esc_url( idealx_catch_that_image() ); ?>" uk-cover> 



												<?php
										} elseif ( has_post_thumbnail() ) {

                      $idealx_featured_img_url = get_the_post_thumbnail_url();
											?>
						<img src="<?php echo esc_url( $idealx_featured_img_url ); ?>" uk-cover>


											<?php
										} else {
											?>
					  <img src="<?php echo esc_url( idealx_catch_that_image() ); ?>" uk-cover> 
											<?php
										}

										?>

								</div><!--/uk-card-media-top-->

								<div class="uk-card-body">

									<h3 class="uk-article-title grid-poet-title"><a class="uk-link-reset"
											href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h3>

									<div class="uk-grid-collapse uk-grid uk-grid-collapse" uk-grid>

										<div>
											<p class="uk-article-meta id-post-meta">
												<span uk-icon="icon: bookmark "></span>
												<?php idealx_get_primary_category( $idealx_category ); ?>
											</p>
										</div>

										<div>
											<p class="uk-article-meta id-post-meta">
												<span uk-icon="icon: calendar "></span>
												<?php echo esc_html( get_the_time( 'M d,y' ) ); ?>
											</p>
										</div>

										<div>
											<p class="uk-article-meta id-post-meta">
												<span uk-icon="icon: comment"></span>
												<a class="" href="<?php echo esc_url( get_the_permalink() ); ?> #comments">
													<?php comments_number( esc_html__( 'No Comments', 'idealx' ), esc_html__( 'One Comment', 'idealx' ), esc_html__( '% Comments', 'idealx' ) ); ?>
												</a>
											</p>
										</div>

									</div>

									<div class="id-excerpt uk-margin-smal-top">
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
									<div class="id-rea-more">
										<a class="uk-button uk-button-text" href="<?php echo esc_url( get_permalink() ); ?> ">
											<?php echo esc_html__( 'Read More', 'idealx' ); ?> </a>

									</div><!--/id-rea-more-->

									<div class="uk-card-footer">

										<div class="uk-grid-collapse uk-child-width-1-2" uk-grid>

											<div>
												<p class="uk-article-meta id-post-meta">
													<?php echo esc_html__( 'By', 'idealx' ) . ': '; ?><?php the_author_posts_link(); ?>
												</p>
											</div>

											<div></div>

										</div><!--/uk-grid-->

									</div> <!--/uk-card-footer-->

								</div>
							</div>
						</div>
					</div>
				</div><!--/article-post-content-->
			</article>
