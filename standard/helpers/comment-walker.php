<?php
/**
 *
 * comments walker
 * @package idealx
 * @subpackage helpers /comments walker
 * @since 1.0.0
 * @version 1.0.0
 *
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}



// Custom Callback

function idealx_theme_comments($comment, $args, $depth)
{

  $comment = $GLOBALS['comment'] ;
    ?>
<li <?php comment_class();?> id="comment-<?php comment_ID()?>">
  <div class="comment-wrap uk-visible-toggle">
    <div class="comment-img uk-comment-avatar">
      <?php echo get_avatar($comment, $args['avatar_size'], null, null, array('class' => array('img-responsive', 'img-circle'))); ?>
    </div>
    <div class="comment-body">
      <h4 class="comment-author uk-comment-title"><?php echo get_comment_author_link(); ?></h4>
      <span
        class="comment-date uk-comment-meta"><?php
/* translators: draft saved date format, see http://php.net/date */
         printf(esc_html__('%1$s at %2$s', 'idealx'), esc_html(get_comment_date()), esc_html(get_comment_time()))?></span>
      <?php if ($comment->comment_approved == '0') {?><em><i class="fa fa-spinner fa-spin" aria-hidden="true"></i>
        <?php esc_html_e('Comment awaiting approval', 'idealx');?></em><br /><?php }?>
      <div class="uk-comment-body">
        <?php comment_text();?>
      </div>
      <span class="comment-reply uk-hidden-hover">
        <?php comment_reply_link(array_merge($args, array('reply_text' => __('Reply', 'idealx'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID);?></span>
      <?php edit_comment_link(esc_html__('Edit', 'idealx'),
        '<div class="edit-link">', '</div>');?>
    </div>
  </div>
  <?php }

//Comments are closed

if (!function_exists('idealx_comment_close')) {

    function idealx_comment_close()
    {
        if (
            !comments_open()
            && !is_page()
            && post_type_supports(get_post_type(), 'comments')
        ): ?>
            <div class="id-comment-post-close">
                <div class="uk-placeholder">
                <?php esc_html_e('Comments are closed.', 'idealx');?>
                </div>
            </div>
            <?php
endif;

    }

}

if (!function_exists('idealx_comment_open')) {

    function idealx_comment_open()
    {
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()): ?>
            <div id="id-comments" class="uk-section">
            <?php comments_template();?>
            </div>
            <?php
        endif;
    }
}

