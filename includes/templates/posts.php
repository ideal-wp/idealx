<?php
/**
 *  loop content.
 *
 * @package idealx WordPress Theme
 * @version 1.0.1
 * @since 1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
global $idealx_is_sidebar,$idealx_animation,$idealx_id_child,$idealx_flex,$idealx_is_sticky,$idealx_category;
?>
<div id="idealx-site-content" class="idealx-site-content uk-section">
  <div class="uk-container uk-container-expand ">
    <?php if ($idealx_is_sidebar== false) {?>
    <div class=" uk-grid-column-small" uk-grid>
      <div class="id-con-warp uk-width-expand@m">
        <div class="uk-container uk-container-expand">
          <?php }?>
          <!--Plog posts-->
          <div class="<?php echo  esc_html($idealx_id_child); ?>" uk-grid <?php echo  esc_attr($idealx_animation); ?>>

            <?php if (have_posts()): while (have_posts()): the_post();
              get_template_part('includes/template-parts/blog/countant', get_post_format());
              //v 1.0.1 add There are No Posts Yet - if there are no post
                  endwhile;else: esc_html_e('There are No Posts Yet', 'idealx');  endif;
            ?>
            <!--/uk-grid-->
          </div>
          <div class="idealx-posts-home-pagination uk-pagination uk-flex-center">
            <?php idealx_pagination_bar();?>
          </div>
          <!--/Blog posts-->
          <?php if (empty($idealx_is_sidebar) && $idealx_is_sidebar == false) {?>
        </div>
      </div>
      <!--/id-con-warp-->
      <div class="uk-width-1-4@m uk-width-1-4@l <?php echo  esc_html($idealx_flex); ?>">
        <div class=" uk-container uk-container-expand " id="blog-sidebar">
          <div class="side-bar uk-flex uk-flex-column " <?php echo  esc_html($idealx_is_sticky); ?>>

            <?php get_sidebar();?>

          </div>
        </div>
      </div>
      <!--/id-con-warp-->
      <?php }?>
    </div>
  </div>
</div>