<?php
/**
 * @package idealx WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( post_password_required() ) {
	return;
}

$idealx_options    = idealx_get_theme_options();
$comments_open_attr = (comments_open() || have_comments()) ? 'true' : 'false';
$consent       = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
?>

<div class="comment-wrap " data-comments-open="<?php echo esc_attr($comments_open_attr); ?>">

  <?php if ( have_comments() ) : ?>
  <h3 id="comments"><?php echo '<span><i>'. esc_html__("Join the discussion", 'idealx').'</i></span>' ?>
    <?php comments_number(esc_html__('No Comments','idealx'), esc_html__('One Comment', 'idealx'), esc_html__('% Comments', 'idealx') );?>
  </h3>

  <div class="idealx-comment-pagination uk-pagination">
    <div class="uk-margin-auto-right"><?php esc_url( previous_comments_link() );  ?></div>
    <div class="uk-margin-auto-left"><?php esc_url( next_comments_link() );  ?></div>
  </div>

  <ul class="uk-comment-list">
    <?php wp_list_comments( array( 
        'avatar_size' => 70,
        'style'       => 'ul',
        'callback'    => 'idealx_theme_comments',
        'type'        => 'all' 
      ) 
    ); 
    ?>
  </ul>

  <div class="idealx-comment-pagination uk-pagination">
    <div class="uk-margin-auto-right uk-margin-small-left"><?php esc_url( previous_comments_link() );  ?></div>
    <div class="uk-margin-auto-left uk-margin-small-right"><?php esc_url( next_comments_link() );  ?></div>
  </div>

  <?php else : // this is displayed if there are no comments so far ?>

  <?php endif; ?>


  <?php if ( comments_open() ) : 

$required_text = null;
$comment_label = '<label for="comment">' . esc_html__('My comment is..', 'idealx') . '</label>';

$form_style    = '<label for="comment">' . esc_html__('My comment is..', 'idealx') . '</label>';
$consent       = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

$args = array(
  'id_form'           => 'commentform',
  'id_submit'         => 'submit',
  'title_reply'       => esc_html__( 'Leave a Reply', 'idealx' ),
/* translators: draft saved date format, see http://php.net/date */
  'title_reply_to'    => esc_html__( 'Leave a Reply to %s', 'idealx' ),
  'cancel_reply_link' => esc_html__( 'Cancel Reply', 'idealx' ),
  'label_submit'      => esc_html__( 'Submit Comment', 'idealx' ),
    
  'comment_field' =>  '<div class="id-comment-text">'.$comment_label.'<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="uk-textarea"></textarea></div>',

  'must_log_in' => '<p class="must-log-in">' .
  sprintf(
    /* translators: draft saved date format, see http://php.net/date */
      __( 'You must be <a href="%s">logged in</a> to post a comment.', 'idealx' ),
      wp_login_url( apply_filters( 'idealx_the_permalink', esc_url(get_permalink()) ) )
    ) . '</p>',
  'logged_in_as' => '<p class="logged-in-as">' .
    sprintf(
      /* translators: draft saved date format, see http://php.net/date */
    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'idealx' ),
      esc_url(admin_url( 'profile.php' )),
      $user_identity,
      wp_logout_url( apply_filters( 'idealx_the_permalink', esc_url(get_permalink()) ) )
    ) . '</p>',

  'comment_notes_before' => '',

  'comment_notes_after' => '',

  'fields' => apply_filters( 'idealx_comment_form_default_fields', array(

    'author' =>
      '
      <div class="uk-grid-small" uk-grid> 
      <div    class="uk-width-1-3@s">' .
      '<label for="author">' . __( 'Name', 'idealx' ) .
      ' <span class="required">*</span></label> ' .
      '<input  class="uk-input"id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30" /></div>',

    'email' =>
      '<div  class="uk-width-1-3@s"><label for="email">' . __( 'Email', 'idealx' ) .
      ' <span class="required">*</span></label>' .
      '<input class="uk-input" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30" /></div>',

    'url' =>
      '<div  class="uk-width-1-3@s"><label for="url">' .
      __( 'Website', 'idealx' ) . '</label>' .
      '<input class="uk-input" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" size="30" /></div></div>',
			
			'cookies' => '<div class="id-cookies"><p class="comment-form-cookies-consent"><input class="uk-checkbox" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
      '<label for="wp-comment-cookies-consent">' . __( 'Save my name, email, and website in this browser for the next time I comment.', 'idealx' ) . '</label></p></div>'
  
    )
  ),
);

comment_form($args);

endif; // have_comments() ?>

</div><!-- #comments -->