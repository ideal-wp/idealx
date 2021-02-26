<?php
/**
 *  Comments Helpers.
 *
 * @package Idealx
 * @since 1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! function_exists( 'idealx_theme_comment_replay_scripts' ) ) {
	/** Comment comment replay scripts. */
	function idealx_theme_comment_replay_scripts() {

		if ( ! is_admin() ) {

			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

						wp_enqueue_script( 'comment-reply' );

			}
		}
	}
}
add_action( 'wp_enqueue_scripts', 'idealx_theme_comment_replay_scripts' );


if ( ! function_exists( 'idealx_comment_close' ) ) {

	/** Comment close. */
	function idealx_comment_close() {
		if (
			! comments_open()
			&& ! is_page()
			&& post_type_supports( get_post_type(), 'comments' )
		) : ?>
			<div class="id-comment-post-close">
				<div class="uk-placeholder">
				<?php esc_html_e( 'Comments are closed.', 'idealx' ); ?>
				</div>
			</div>
			<?php
endif;

	}
}

if ( ! function_exists( 'idealx_comment_open' ) ) {
	/** Comment open. */
	function idealx_comment_open() {
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			?>
			<div id="id-comments" class="uk-section">
			<?php comments_template(); ?>
			</div>
			<?php
		endif;
	}
}
