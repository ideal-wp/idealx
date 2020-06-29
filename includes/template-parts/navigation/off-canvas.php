<?php
/**
 * Displays menu off-canvas layout.
 *
 * @package idealx
 * @subpackage menu navigation
 * @since 1.0.0
 * @version 1.0.0
 */
$idealx_options = idealx_get_theme_options();
$flip = null;

if (!empty($idealx_options['mobile-o-c-modes'])) {

    $modes = $idealx_options['mobile-o-c-modes'];

    switch ($modes) {
        case 'slide':
            $modes = 'mode:slide';
            break;
        case 'push':
            $modes = 'mode: push';
            break;
        case 'reveal':
            $modes = 'mode: reveal';
            break;
        case 'none':
            $modes = null;
            break;

    }
} else {
    $modes = null;
}

if (! empty($idealx_options['mobile-o-c-flip']) && $idealx_options['mobile-o-c-flip'] == 'right') {

    $flip = '; flip: true';
}
// menu off-canvas layout
if (!empty($idealx_options['header-layout']) && $idealx_options['header-layout'] == '5' && !empty($idealx_options['mobile-select-menu']) &&  $idealx_options['mobile-select-menu'] == 'off-canvas') {
?>
<div class="m-at-offcanvas " id="offcanvas-overlay"
  uk-offcanvas=" mode: <?php echo $modes; ?>   <?php echo $flip; ?>; overlay: true; esc-close:true; bg-close:true;">
  <div id="m-t-offcanvas" class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <div class="idealx-mobile-menu" id="idealx-mobile-nav">
      <?php do_action('idealx_uikit_offcanvas_menu');?>
      <div>
        <?php dynamic_sidebar( 'Off Canvas' ); ?>
      </div>
    </div>
  </div>
</div>
<?php }
// mobile menu offcanvas
?>
<div class="m-at-offcanvas uk-hidden@m" id="offcanvas-overlay"
  uk-offcanvas="  <?php echo $modes; ?>  <?php echo $flip; ?>; overlay: true; esc-close:true; bg-close:true;">
  <div id="m-t-offcanvas" class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <div class="idealx-mobile-menu" id="idealx-mobile-nav">
      <?php do_action('idealx_uikit_offcanvas_menu');?>
      <div>
        <?php dynamic_sidebar( 'Off Canvas' ); ?>
      </div>
    </div>
  </div>
</div>

<?php
 if (!empty($idealx_options['mobile-select-menu']) &&  $idealx_options['mobile-select-menu'] == 'modal') {
  ?>
<div id="idealx-nav-modal-full" class="uk-modal-full" uk-modal>
  <div class="uk-modal-dialog">
    <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
    <div class="uk-section" uk-height-viewport>
      <div class="uk-container uk-width-7-10 uk-text-center">
        <div class="uk-section-large">
          <div class="uk-container">
            <?php do_action('idealx_uikit_modal_menu');?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }