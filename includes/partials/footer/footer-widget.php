<?php
/**
 * idealx theme Footer Widget Area.
 * 
 * @since v1.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$idealx_options  = idealx_get_theme_options();
if(empty($idealx_options['to_top_remove_setting']) || $idealx_options['to_top_remove_setting'] == false){
?>
 <div id="id-to-top" class="id-to-top uk-text-right@s uk-margin uk-text-center">
      <a href="#" uk-totop uk-scroll uk-icon="uk-to-top">
      </a>
    </div>
<?php } ?>
  <div class="push"></div>

  <div id="footer-outer" class="footer-outer">
    <div id="footer-widget" class="footer-widgets uk-container-expand uk-background-secondary">
      <div class="uk-container uk-container-expand">
        <?php
        /* The footer widget area is triggered if any of the areas
        * have widgets. So let's check that first.
        *
        * If none of the sidebars have widgets, then let's bail early.
        */
       /* if (   ! is_active_sidebar( 'first-footer-widget-area'  )
            && ! is_active_sidebar( 'second-footer-widget-area' )
            && ! is_active_sidebar( 'third-footer-widget-area'  )
            && ! is_active_sidebar( 'fourth-footer-widget-area' )
        ):  
    endif; */
            //Checking if All Widget Areas Are Populated
            if (   is_active_sidebar( 'first-footer-widget-area'  )
            && is_active_sidebar( 'second-footer-widget-area' )
            && is_active_sidebar( 'third-footer-widget-area'  )
            && is_active_sidebar( 'fourth-footer-widget-area' )
        ) : ?>
        <div class="id-widget-area">
          <div class="uk-grid-collapse uk-child-width-expand@s" uk-grid>
            <div class="first quarter left widget-area">
              <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
            </div><!-- .first .widget-area -->
            <div class="second quarter widget-area">
              <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
            </div><!-- .second .widget-area -->
            <div class="third quarter widget-area">
              <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
            </div><!-- .third .widget-area -->
            <div class="fourth quarter right widget-area">
              <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
            </div><!-- .fourth .widget-area -->
          </div>
        </div>
        <?php // Checking if Just Three Widget Areas Are Populated
        elseif ( is_active_sidebar( 'first-footer-widget-area'  )
        && is_active_sidebar( 'second-footer-widget-area' )
        && is_active_sidebar( 'third-footer-widget-area'  )
        && ! is_active_sidebar( 'fourth-footer-widget-area' )
    ) : ?>
        <div class="id-widget-area">
          <div class="uk-grid-collapse uk-child-width-expand@s " uk-grid>
            <div class="first one-third left widget-area">
              <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
            </div><!-- .first .widget-area -->
            <div class="second one-third widget-area">
              <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
            </div><!-- .second .widget-area -->
            <div class="third one-third right widget-area">
              <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
            </div><!-- .third .widget-area -->
          </div>
        </div>
        <?php 
    //Checking if Just Two Widget Areas Are Populated

    elseif ( is_active_sidebar( 'first-footer-widget-area'  )
        && is_active_sidebar( 'second-footer-widget-area' )
        && ! is_active_sidebar( 'third-footer-widget-area'  )
        && ! is_active_sidebar( 'fourth-footer-widget-area' )
    ) : ?>
        <div class="id-widget-area">
          <div class="uk-grid-collapse uk-child-width-expand@s " uk-grid>
            <div class="first half left widget-area">
              <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
            </div><!-- .first .widget-area -->
            <div class="second half right widget-area">
              <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
            </div><!-- .second .widget-area -->
          </div>
        </div>
        <?php //Checking if Just One Widget Area is Populated
    elseif ( is_active_sidebar( 'first-footer-widget-area'  )
        && ! is_active_sidebar( 'second-footer-widget-area' )
        && ! is_active_sidebar( 'third-footer-widget-area'  )
        && ! is_active_sidebar( 'fourth-footer-widget-area' )
    ) :
    ?>
        <div class="id-widget-area">
          <div class="uk-grid-collapse uk-child-width-expand@s" uk-grid>
            <div class="first full-width widget-area">
              <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
            </div><!-- .first .widget-area -->
          </div>
        </div>
        <?php //end of all sidebar checks.
          
        endif;
    ?>
      </div>
    </div>
  </div>