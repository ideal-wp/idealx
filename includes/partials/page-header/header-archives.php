<?php
/**
 *
 *  Archives Page Header.
 *
 * @package idealx Theme
 * @subpackage idealx Partials Page header 
 * @since V1.0.0
 * @version 1.0.0
 */
if (!('ABSPATH')) {
    exit;
}
$idealx_options    = idealx_get_theme_options();
$idealx_id_taitel= null;

if ( ! function_exists( 'idealx_archives_taitle' ) ) {

  function idealx_archives_taitle(){

    if( is_category()){

      single_cat_title() ;

    }elseif(is_tag()){

      single_tag_title();

    }elseif(is_day()){

      echo esc_html__(' Daily Archives', 'idealx' ) .': ' . get_the_date();

    }elseif(is_month()){

      echo esc_html__(' Monthly Archives', 'idealx' ) .': ' . get_the_date('F-Y');

    }elseif(is_year()){

      echo esc_html__(' Yearly Archives', 'idealx' ) .': ' . get_the_date('Y');

    }elseif(is_author()){

      echo esc_html__(' Author Archives', 'idealx' ) .': ' . get_the_author();

    }else{
      echo esc_html__('Archives', 'idealx' );
    }


  }
}
?>
<div id="archives-page-header" class=" idealx-page-header-archives  uk-section uk-padding-remove  uk-flex-middle">
  <div id="archives-header-overlay">
    <div class="uk-container uk-container-expand archives-wrap-header ">
      <!--archives Header-->
      <div class="id-archives-inner-wrap">
        <div>
          <div class="ar-entry-title">
            <h1 class=""> <?php idealx_archives_taitle(); ?></h1>
          </div>
          <?php idealx_get_breadcrumb();  ?>
        </div>
      </div>
    </div>
    <!--/ archives-->
  </div>
</div>
</div>