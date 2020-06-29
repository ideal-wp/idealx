<?php
/**
 *
 *  Search Page Header.
 *
 * @package idealx Theme
 * @subpackage idealx Partials Page header 
 * @since V1.0.0
 * @version 1.0.0
 */
if (!('ABSPATH')) {
    exit;
}

?>
<div id="archives-page-header" class=" idealx-page-header-archives  uk-section uk-padding-remove  uk-flex-middle">
  <div id="archives-header-overlay">
    <div class="uk-container uk-container-expand archives-wrap-header ">
      <!--archives Header-->
      <div class="id-archives-inner-wrap">
        <div>
          <div class="ar-entry-title">
            <h1 class=""> <?PHP esc_html_e( 'Search Results: ', 'idealx' ) .the_search_query()?></h1>
          </div>
          <?php idealx_get_breadcrumb();  ?>
        </div>
      </div>
    </div>
    <!--/ archives-->
  </div>
</div>
</div>