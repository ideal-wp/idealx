<?php
// Exit if accessed this directly
if (!defined('ABSPATH')) {
  exit;
}
$admin_logo = IDEALX_THEME_DIR_URI . '/includes/admin/assets/img/ideallogo.png';
?>

<div class="idealx-admin-wrap wrap">
  <div class="idealx-admin-header">
    <nav class="uk-navbar-container uk-margin" uk-navbar>
      <div class="uk-navbar-left idealx-logo-admin">
        <a class="uk-navbar-item uk-logo" href="#">
          <img class="idealx-admin-Logoo" src="<?php echo esc_url($admin_logo); ?>" style=" height:22px;"
            ?><span>idealx</span> </a>
      </div>
      <div class="uk-navbar-right idealx-admi-header-right">
        <ul class="uk-navbar-nav">
          <li>
            <span class="uk-navbar-item idea">
            <span class="seedling"><i class="fas fa-seedling"></i></span>
            <?php esc_html_e( 'idealx is an idea born in 2020 and grows up', 'idealx') ?>
          </span></li>
          <li><a uk-tooltip="title: <?php esc_html_e( 'Visit the theme page on Github', 'idealx') ?>; pos: bottom" href="https://github.com/ideal-theme" class="uk-navbar-item" ><i class="fab fa-github"></i></a></li>
          </ul>
      </div>
    </nav>
  </div>
</div>