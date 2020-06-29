<?php
/**
 * Displays menu navigation.
 *
 * @package idealx
 * @subpackage menu navigation
 * @since 1.0.0
 * @version 1.0.0
 */


$idealx_options           = idealx_get_theme_options();
$idealx_is_transparent_header   = get_post_meta( get_the_ID(), 'is_header_trans', true );
$idealx_transparent_header      = null;
$mode                    = null;


if( !empty( $idealx_options['transparent-header'] ) ){

  $idealx_transparent_header  = $idealx_options['transparent-header'];

}

if( !empty( $idealx_options['select-header-mod'] ) ){

  $mode   = $idealx_options['select-header-mod'];

}

if ( ! empty( $idealx_is_transparent_header ) && $idealx_is_transparent_header == 'off' ){

  $idealx_transparent_header= false ;

}elseif( ! empty( $idealx_is_transparent_header ) && $idealx_is_transparent_header == 'on' ) {

  $idealx_transparent_header= true;
}

// mobile & offcanvas options
if( !empty( $idealx_options['mobile-o-c-flip'] ) &&  $idealx_options['mobile-o-c-flip'] =='right' ){

  $flip = 'true';

}elseif( !empty( $idealx_options['mobile-o-c-flip'] ) &&  $idealx_options['mobile-o-c-flip'] =='left' ){

  $flip = 'false';
}

  // mobile & offcanvas options
require_once IDEALX_THEME_DIRECTORY .'/standard/dynamic-options/header-options.php';

if ( !empty($idealx_options['user-nav'])&& $idealx_options['user-nav'] == true){require_once IDEALX_THEME_DIRECTORY .'/includes/partials/header/user-navbar.php';}

    idealx_hook_page_header_open();
    idealx_hook_before_header(); 
    
    ?>
      <div id="idealx-nav"
        class="idealx-nav uk-navbar-container <?php if( $idealx_transparent_header== true ) {echo 'uk-navbar-transparent ' . $mode ;}?>">
        <div class="uk-container uk-container-expand">
          <nav class="uk-navbar" id="idealx-nav-c" uk-navbar>
          <?php
             get_template_part( '/includes/partials/header/menu/menu', 'switch' );
          ?>
          </nav>
        </div>
      </div>
    <?php

     idealx_hook_after_header();
     idealx_hook_page_header_close(); ?>