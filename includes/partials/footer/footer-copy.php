<?php
/**
 * Footer copy righ 
 *
 * @package idealx WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
$idealx_site_name = get_bloginfo( 'name' );

?>

  <div id="copyright" class="copyright">
    <div class="uk-container uk-container-expand">
      <div class="">
        <p>&#169; <?php  echo  esc_html(date('Y')).' ' .esc_html($idealx_site_name)  ;?>.
        </p>
      </div>
    </div>
  </div>
