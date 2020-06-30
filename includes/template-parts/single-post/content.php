<?php
/**
 * Single Post Content
 *
 * @version 1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
global $idealx_is_featured_image, $idealx_card_imge, $idealx_featured_image, $idealx_is_single_cards;
global $post;
$idealx_posttype = get_post_type( $post );
if ($idealx_is_featured_image == false) {
    if (has_post_thumbnail()) {
        $idealx_featured_image = get_the_post_thumbnail_url();
    }
}
?>

<?php if (!empty($idealx_is_single_cards) && $idealx_is_single_cards == true) {
    echo '<div class="uk-card uk-card-default ">';}

if ( ( is_single() ) && ( $idealx_posttype === 'post' ) && has_post_thumbnail() && $idealx_is_featured_image == false): ?>
<div
  class="uk-background-cover uk-background-center-center uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle uk-background-norepeat uk-card-media-top <?php echo  esc_html($idealx_card_imge); ?> "
  style="background-image:url(<?php echo  esc_html($idealx_featured_image); ?>);">
</div>
<?php
endif;
?>
<div id="content-id-s">
  <?php
if (!empty($idealx_is_single_cards) && $idealx_is_single_cards == true) {
    echo '<div class="uk-card-body">';}

the_content();

if (!empty($idealx_is_single_cards) && $idealx_is_single_cards == true) {
    echo '</div>
     </div>';
}

$idealx_defaults = array(
    'before' => '<ul class="uk-pagination">' . __('Pages:', 'idealx'),
    'after' => '</ul>',
    'link_before' => '<li>',
    'link_after' => '</li>',
    'next_or_number' => 'number',
    'separator' => ' ',
    'nextpagelink' => esc_html__('Next page', 'idealx'),
    'previouspagelink' => esc_html__('Previous page', 'idealx'),
    'pagelink' => '%',
    'echo' => 1,
);

wp_link_pages($idealx_defaults);

?>
</div>