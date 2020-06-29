<?php
/**
 * idealx theme menu layout 2 && 4
 * 
 * @since v1.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) { 
  exit; 
}

$idealx_options = idealx_get_theme_options();
?>
<div class="uk-navbar-left ">
  <div class="idealx-Logo">
    <?php get_template_part( '/includes/partials/header/menu/menu', 'logo' );?>
  </div>
</div>
<div class="uk-navbar-center"></div>
<div class="uk-navbar-right nav-overlay">
  <ul class="uk-navbar-nav">
    <li>
      <?php do_action('idealx_search_innav'); ?>
    </li>
    <li>
      <?php if ( !empty($idealx_options['mobile-select-menu']) &&  $idealx_options['mobile-select-menu'] == 'off-canvas') { ?>
      <a class="uk-navbar-toggle " uk-toggle="target: #offcanvas-overlay" uk-navbar-toggle-icon></a>
      <?php }
        if ( !empty($idealx_options['mobile-select-menu']) &&  $idealx_options['mobile-select-menu'] == 'modal') { ?>
      <a class="" href="#idealx-nav-modal-full" uk-navbar-toggle-icon uk-toggle></a>
      <?php } ?>
    </li>
  </ul>
</div>