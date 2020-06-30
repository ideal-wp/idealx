<?php
/**
 * idealx theme menu logo center
 *
 * @since v1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
} 
?>
<div class="uk-navbar-left uk-hidden@l">
  <div class="idealx-Logo">
    <?php get_template_part( '/includes/partials/header/menu/menu', 'logo' );?>
  </div>
</div>
<div class="uk-navbar-center uk-visible@s uk-visible@m">
  <div class="uk-navbar-nav">
    <?php do_action('idealx_uikit_top_menu'); ?>
  </div>
  <div class="idealx-Logo">
    <?php get_template_part( '/includes/partials/header/menu/menu', 'logo' );?>
  </div>
  <div class="uk-navbar-nav ">
    <?php do_action('idealx_uikit_top_menu'); ?>
  </div>
</div>
<?php get_template_part( '/includes/partials/header/menu/menu', 'mobile' );?>