<?php
/**
 * The template for displaying pages.
 *
 * @package idealx WordPress Theme
 * @version 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
get_header();
global $idealx_is_page_sidebar,$idealx_is_page_cards,$idealx_flex,$idealx_is_sticky,$idealx_id_container;

get_template_part( 'includes/partials/page-header/pages-header' );
?>
<div id="idealx-pagecontent" class="idealx-site-content uk-section">
  <div id="idealx-page-content-inner" class="uk-container <?php echo  esc_html($idealx_id_container); ?>">
    <?php if ($idealx_is_page_sidebar == false) {?>
    <div class=" uk-grid-column-small" uk-grid>
      <div class="id-con-warp uk-width-expand@m">
        <div class="uk-container">
          <?php }
          if (!empty($idealx_is_page_cards) && $idealx_is_page_cards == true) {  echo '<div class="uk-card uk-card-default uk-card-body">';
          } 
          if (have_posts()):
              while (have_posts()):

                  the_post();
                  the_content();

                  if (!empty($idealx_is_page_cards) && $idealx_is_page_cards == true) {echo '</div>';}

                  idealx_comment_open();

              endwhile;
          endif;
          if ($idealx_is_page_sidebar == false) {?>
        </div>
      </div>
      <!--/id-con-warp-->
      <div id="sidebar" class="uk-width-1-4@m uk-width-1-4@l <?php echo  esc_html($idealx_flex) ; ?>">
        <div class=" uk-container uk-container-expand " id="blog-sidebar">
          <div class="side-bar uk-flex uk-flex-column" <?php echo  esc_html($idealx_is_sticky); ?>>
            <?php get_sidebar();?>
          </div>
        </div>
      </div><!--/sidebar-->
      <?php } // if is_sidebar end?>
    </div>
  </div>
  <?php
get_footer();