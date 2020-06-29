<?php
/**
 * Ttemplate name: With Sidebar
 *
 * @package idealx WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly

if (!defined('ABSPATH')) {
    exit;
}
get_header();
global $idealx_is_page_cards,$idealx_flex,$id_sticky;?>
<div id="idealx-pagecontent" class="idealx-site-content uk-section">
  <div class="uk-container uk-container-expand">
    <div class=" uk-grid-column-small" uk-grid>
      <div class="id-con-warp uk-width-expand@m">
        <div class="uk-container">
          <?php if (!empty($idealx_is_page_cards) && $idealx_is_page_cards == true) { echo '<div class="uk-card uk-card-default uk-card-body">';}?>
          <?php
          if (have_posts()):
              while (have_posts()):

                  the_post();
                  the_content();

                  if ($idealx_is_page_cards == true ) {
                      echo '</div>';}

                  idealx_comment_open();

              endwhile;
          endif;
          ?>
        </div>
      </div> <!--/id-con-warp-->
      <div id="sidebar" class="uk-width-1-4@m uk-width-1-4@l <?php echo $flex; ?>">
        <div class=" uk-container uk-container-expand " id="blog-sidebar">
          <div class="side-bar uk-flex uk-flex-column" <?php echo $idealx_is_sticky; ?>>
            <?php get_sidebar();?>
          </div>
        </div>
      </div> <!--/sidebar-->
    </div>
  </div>
  <?php
get_footer();