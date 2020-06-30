<?php $idealx_options = idealx_get_theme_options();
if ( empty($idealx_options['mobile-select-menu'])){
  $idealx_off_canvas = 'off-canvas';
}elseif( !empty($idealx_options['mobile-select-menu'])){
  $idealx_off_canvas = $idealx_options['mobile-select-menu'];
}

 if ( !empty($idealx_off_canvas) &&  $idealx_off_canvas == 'off-canvas') { ?>
<div class="uk-navbar-right uk-hidden@m">
  <a class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #offcanvas-overlay" uk-navbar-toggle-icon href=""> </a>
</div>
<?php }elseif ( !empty($idealx_options['mobile-select-menu']) &&  $idealx_options['mobile-select-menu'] == 'modal') { ?>
<div class="uk-navbar-right uk-hidden@m">
  <a class="uk-navbar-toggle uk-hidden@m" href="#idealx-nav-modal-full" uk-navbar-toggle-icon uk-toggle></a>
</div>
<?php }