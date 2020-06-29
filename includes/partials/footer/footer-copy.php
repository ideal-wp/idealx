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
$site_name = get_bloginfo( 'name' );

?>

  <div id="copyright" class="copyright">
    <div class="uk-container uk-container-expand">
      <div class="">
        <p>&#169; <?php  echo  date('Y').' ' . $site_name ;?>.
        </p>
      </div>
    </div>
  </div>
