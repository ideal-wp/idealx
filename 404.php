<?php
/**
* The template for displaying 404 not found.
*
* @package idealx WordPress Theme
* @version 1.0.0
*/
// Exit if accessed directly
if (!defined('ABSPATH')) {
   exit;
}
get_header();
$idealx_options = idealx_get_theme_options();
$page_404_bg_image = IDEALX_THEME_DIR_URI.'/assets/images/404.jpg';
?>
<div id="idealx-site-content" class="idealx-site-content uk-section uk-background-cover uk-background-center-center"
  style="background-image: url('<?php echo esc_url($page_404_bg_image)?>'); background-repeat: no-repeat;"
  uk-height-viewport>
  <div class="uk-container uk-container-expand ">
    <div class="error-404-bg-img-overlay"></div>
    <div class="pg-not-found uk-position-center">
      <h2><?php echo esc_html__( 'Page Not Found', 'idealx' ); ?></h2>
      <a class="uk-button id-button-primary uk-button-large" href="<?php echo esc_url( home_url() ); ?>">
        <span><?php echo esc_html__( 'Back Home', 'idealx' ); ?></span>
        <i uk-icon="arrow-right"></i>
      </a>
    </div>
  </div>
</div>
<?php get_footer();?>