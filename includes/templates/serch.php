<?php
/**
 *  loop Search content.
 *
 * @package idealx WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
global $idealx_is_sidebar,$idealx_flex,$idealx_is_sticky;
?>
<div id="idealx-site-content" class="idealx-site-content uk-section">
  <div class="uk-container uk-container-expand ">
    <?php if ($idealx_is_sidebar == false) {?>
    <div class=" uk-grid-column-small" uk-grid>
      <div class="id-con-warp uk-width-expand@m">
        <div class="uk-container uk-container-expand">
          <?php }?>
          <!--Search results posts-->
          <?php
              if (have_posts()): while (have_posts()): the_post();
              
                      get_template_part('includes/template-parts/search');
                  endwhile;
              else:
                get_template_part('includes/partials/search-notfound');
              endif;
          ?>
          <div class="idealx-posts-home-pagination uk-pagination uk-flex-center">
            <?php idealx_pagination_bar();?>
          </div>
          <!--/Search results posts-->
          <?php if (empty($idealx_is_sidebar) || $idealx_is_sidebar == false) {?>
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
      <!--/sidebar-->
      <?php }?>
    </div>
  </div>