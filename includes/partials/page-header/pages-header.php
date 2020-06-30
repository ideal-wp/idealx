<?php
// Exit if accessed this directly
if (!defined('ABSPATH')) {
  exit;
}

$idealx_options = idealx_get_theme_options();
$idealx_pages_header_titel = esc_html(get_the_title());
if(!empty($idealx_options['id-pages-switch-header'])){
  $idealx_pages_header_en = $idealx_options['id-pages-switch-header'];
}else{
$idealx_pages_header_en = false;
}
if (is_front_page() || is_home()) {
    return;

} elseif (empty($idealx_pages_header_en) || $idealx_pages_header_en == false) {
    ?>
<div id="idealx-pages-header" class="idealx-pages-header-pag uk-padding-remove  uk-section   uk-flex-middle  uk-section-primary">
  <div id="idealx-pages-header-overlay">
    <div class="uk-container uk-container-expand pages-wrap-header ">
      <!--pages Header-->
      <div class="id-header-pages-inner-wrap">
        <div>
          <div id="pages-entry-title" class="ar-entry-title pages-entry-title">
            <h1 class=""> <?php echo esc_html($idealx_pages_header_titel) ?></h1>
          </div>

            <?php
            idealx_get_breadcrumb();?>
        </div>
      </div>
    </div>
    <!--/ pages-->
  </div>
</div>
</div>
<?php }