<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package idealx WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly
if ( ! defined('ABSPATH') ) {
    exit;
}

$idealx_options = idealx_get_theme_options();
$page_404_bg_image = IDEALX_THEME_DIR_URI . '/assets/images/404.png';
get_header();
?>
<div id="idealx-site-content404"
  class="idealx-site-content404 uk-section uk-background-bottom-right  uk-background-image@s  uk-height-viewport"
  style="background-image: url('<?php echo esc_url($page_404_bg_image) ?>'); background-repeat: no-repeat;" uk-height-viewport="offset-top: true">
  <div class="uk-container uk-container-expand ">
    <div class="error-404-bg-img-overlay"></div>
    <div class="pg-not-found uk-position-center">
      <h2><?php echo esc_html__('Sorry, this page isnt available.', 'idealx'); ?></h2>
      <p><?php echo esc_html__('The link you followed may be broken, or the page may have been removed.', 'idealx'); ?>
      </p>
      <a class="uk-button id-button-primary uk-button-large" href="<?php echo esc_url(home_url()); ?>">
        <span><?php echo esc_html__('Back Home', 'idealx'); ?></span>
        <i uk-icon="arrow-right"></i>
      </a>
    </div>
  </div>
</div>
<?php get_footer();?>