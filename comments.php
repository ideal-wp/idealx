<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Idealx
 * @since 1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="uk-margin-large-top">

<?php if ( have_comments() ) : ?>

	<h3 id="comments"><?php echo '<span><i>' . esc_html__( 'Join the discussion', 'idealx' ) . '</i></span>'; ?>
	<?php comments_number( esc_html__( 'No Comments', 'idealx' ), esc_html__( 'One Comment', 'idealx' ), esc_html__( '% Comments', 'idealx' ) ); ?>
	</h3>

		<ul class="uk-comment-list">
				<?php
				wp_list_comments(
					array(
						'avatar_size' => 55,
						'style'       => 'ul',
						'short_ping'  => true,
						'callback'    => 'idealx_comment_callback',
					)
				)
				?>
		</ul>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<ul class="uk-pagination uk-flex-between">
				<li class="nav-previous">

				<?php previous_comments_link( '<span uk-pagination-previous></span> ' . esc_html__( 'Older Comments', 'idealx' ) ); ?>

				</li>
				<li class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'idealx' ) . ' <span uk-pagination-next></span>' ); ?></li>
		</ul>
		<?php endif ?>

<?php endif ?>

<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="uk-margin-medium uk-text-danger"><?php esc_html_e( 'Comments are closed.', 'idealx' ); ?></p>
<?php endif ?>

<?php get_template_part( 'commentform' ); ?>

</div>

<?php

/**
 * The template to display a comment.
 *
 * @param Comment      $comment .
 * @param commentArgs  $args .
 * @param commentDepth $depth .
 */
function idealx_comment_callback( $comment, $args, $depth ) {
	?>
<li id="comment-<?php comment_ID(); ?>">
<article id="comment-article-<?php comment_ID(); ?>" <?php comment_class( 'uk-comment uk-visible-toggle' ); ?> tabindex="-1">
		<header class="uk-comment-header uk-position-relative">
				<div class="uk-grid-medium uk-flex-middle" uk-grid>
						<?php if ( 0 !== $args['avatar_size'] ) : ?>
						<div class="uk-width-auto">
								<?php echo get_avatar( $comment, $args['avatar_size'] ); ?>
						</div>
						<?php endif ?>
						<div class="uk-width-expand">
								<h3 class="uk-comment-title uk-margin-remove"><?php comment_author_link( $comment ); ?></h3>
								<p class="uk-comment-meta uk-margin-remove-top">
										<a class="uk-link-reset" href="<?php echo esc_url( get_comment_link( $comment, $args ) ); ?>">
												<time datetime="<?php comment_time( 'c' ); ?>">
													<?php
													/* translators: draft saved date format, see http://php.net/date */
													printf( esc_html__( '%1$s at %2$s', 'idealx' ), esc_html( get_comment_date( '', $comment ) ), esc_html( get_comment_time() ) )
													?>
											</time>
										</a>
								</p>
						</div>
				</div>
				<div class="uk-position-top-right uk-hidden-hover">
						<?php
						comment_reply_link(
							array_merge(
								$args,
								array(
									'depth'     => $depth,
									'max_depth' => $args['max_depth'],
									'add_below' => 'comment-article',
								)
							)
						)
						?>
				</div>
		</header>

		<div class="uk-comment-body">

				<?php if ( '0' === $comment->comment_approved ) : ?>
				<p><?php esc_html_e( 'Your comment is awaiting moderation.', 'idealx' ); ?></p>
				<?php endif ?>

				<?php comment_text(); ?>

				<?php edit_comment_link(); ?>

		</div>

</article>
	<?php
}
if ( comments_open() ) :

	$required_text = null;
	$comment_label = '<label for="comment">' . esc_html__( 'My comment is..', 'idealx' ) . '</label>';

	$form_style = '<label for="comment">' . esc_html__( 'My comment is..', 'idealx' ) . '</label>';
	$consent    = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

	$form_args = array(
		'id_form'              => 'commentform',
		'id_submit'            => 'submit',
		'title_reply'          => esc_html__( 'Leave a Reply', 'idealx' ),
		/* translators: draft saved date format, see http://php.net/date */
			'title_reply_to'   => esc_html__( 'Leave a Reply to %s', 'idealx' ),
		'cancel_reply_link'    => esc_html__( 'Cancel Reply', 'idealx' ),
		'label_submit'         => esc_html__( 'Submit Comment', 'idealx' ),

		'comment_field'        => '<div class="id-comment-text">' . $comment_label . '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="uk-textarea"></textarea></div>',

		'must_log_in'          => '<p class="must-log-in">' .
		sprintf(
										/* translators: draft saved date format, see http://php.net/date */
			__(
				'You must be <a href="%s">logged in</a> to post a comment.',
				'idealx'
			),
			wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
		) . '</p>',

		'logged_in_as'         => '<p class="logged-in-as">' . sprintf(
			/* translators: draft saved date format, see http://php.net/date */
			__(
				'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>',
				'idealx'
			),
			admin_url( 'profile.php' ),
			$user_identity,
			wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) )
		) . '</p>',

		'comment_notes_before' => '',

		'comment_notes_after'  => '',

		'fields'               => apply_filters(
			'idealx_comment_form_default_fields',
			array(

				'author'  =>
					'
				<div class="uk-grid-small" uk-grid> 
				<div    class="uk-width-1-3@s">' .
					'<label for="author">' . esc_html__( 'Name', 'idealx' ) .
					' <span class="required">*</span></label> ' .
					'<input  class="uk-input"id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
					'" size="30" /></div>',

				'email'   =>
					'<div  class="uk-width-1-3@s"><label for="email">' . __( 'Email', 'idealx' ) .
					' <span class="required">*</span></label>' .
					'<input class="uk-input" id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) .
					'" size="30" /></div>',

				'url'     =>
					'<div  class="uk-width-1-3@s"><label for="url">' .
					esc_html__( 'Website', 'idealx' ) . '</label>' .
					'<input class="uk-input" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
					'" size="30" /></div></div>',

				'cookies' => '<div class="id-cookies"><p class="comment-form-cookies-consent"><input class="uk-checkbox" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
				'<label for="wp-comment-cookies-consent">' . esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'idealx' ) . '</label></p></div>',

			)
		),
	);

	comment_form( $form_args );

	endif; // Comments open.

