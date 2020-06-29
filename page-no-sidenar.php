<?php
/**
 * Ttemplate name: No Sidebar
 *
 * @package idealx WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}
get_header();
global $idealx_is_page_cards;
?>
  <div id="idealx-pagecontent" class="idealx-page-content uk-section">
    <div class=" uk-container-expand">
      <div id="idealx-page-content-inner" class="uk-container">
        <?php if ($idealx_is_page_cards == true ) { echo '<div class="uk-card uk-card-default uk-card-body">';}?>
        <?php
          if (have_posts()):
              while (have_posts()):
                  the_post();
                  the_content();
                  if ($idealx_is_page_cards == true ) { echo '</div>';}
                  idealx_comment_open();
              endwhile;
          endif;
          ?>
      </div>
    </div>
  </div>
<?php
get_footer();