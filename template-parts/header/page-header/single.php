<?php
/**
 * Site Header.
 *
 * @package Taman spa
 * @since v1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post;
$idealx_u_time          = get_the_time( 'U' );
$idealx_u_modified_time = get_the_modified_time( 'U' );
$display_name           = get_the_author_meta( 'display_name', $post->post_author );
$user_posts             = get_author_posts_url( get_the_author_meta( 'ID', $post->post_author ) );

// If display name is not available then use nickname as display name.
if ( empty( $display_name ) ) {

	$display_name = get_the_author_meta( 'nickname', $post->post_author );
}
$no_post_imge            = null;
$idealx_featured_img_url = get_the_post_thumbnail_url();

if ( empty( $idealx_featured_img_url ) ) {
	$no_post_imge = 'post-no-imege';
}


$idealx_options = idealx_get_theme_options();

if ( empty( $idealx_options['switch-blog-header'] ) || false === $idealx_options['switch-blog-header'] ) {
	?>

<div id="tam-page-header" class="uk-section single-header uk-background-cover uk-background-center-center uk-panel uk-flex uk-flex-center uk-flex-middle uk-background-norepeat 
	<?php echo esc_attr( $no_post_imge ); ?>"
	<?php
	if ( ! empty( $idealx_featured_img_url ) ) {

		?>
style="background-image:url(<?php echo esc_url( $idealx_featured_img_url ); ?>);" <?php } ?>>

	<div id="color-overlay"></div>

	<div class="headre-contant uk-container uk-container-expand">

		<?php

		if ( ( 'post' === $post->post_type && is_single() ) ) {
			?>

		<div class="taman-cat-post-header">
			<?php idealx_get_cattegory(); ?>
		</div>

		<h1 class="taman-entry-title entry-title"> <?php echo esc_html( get_the_title() ); ?></h1>	

		<div class="taman-post-header-info">

			<span class="fn uk-link-reset">
				<a  href="<?php echo esc_url( $user_posts ); ?>" >
				<?php echo esc_html( $display_name ); ?>
				</a>
			</span>
				<?php
				if ( $idealx_u_modified_time >= $idealx_u_time + 86400 ) {

					?>
					<span class="meta-date date published"> | <i><?php echo esc_html( get_the_time( 'F d-Y' ) ); ?></i></span>

					<span class="meta-date date updated rich-snippet-hidden">
							<?php echo esc_html( get_the_modified_time( __( 'F jS-Y', 'idealx' ) ) ); ?>
					</span>
						<?php
				} else {
					?>
						<span class="meta-date date updated"> | <i><?php echo esc_html( get_the_time( 'F jS-Y' ) ); ?></i></span>

					<?php
				}
				?>


				<span>  | 
					<?php comments_number( esc_html__( 'No Comments', 'idealx' ), esc_html__( 'One Comment', 'idealx' ), esc_html__( '% Comments', 'idealx' ) ); ?></span>
		</div><!--/taman-post-header-info-->
		<?php } ?>
	</div>
</div>

	<?php
}

