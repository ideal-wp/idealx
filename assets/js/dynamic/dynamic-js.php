<?php

header("Content-type: text/javascript; charset: UTF-8");

$idealx_options           = idealx_get_theme_options();
$idealx_logo_transparent  = get_option( 'idealx_transparent_option' );

if(!empty($idealx_options['transparent-header']) && $idealx_options['transparent-header'] == true && !empty($idealx_options['switch-blog-header'] ) && $idealx_options['switch-blog-header'] = true ){
 
  echo '
    jQuery(document).ready(function($){
    if ($("body").hasClass("single-post")) {
      $(".idealx-nav").removeClass( "uk-light" ),
      $(".idealx-nav").removeClass( "uk-navbar-transparent" );
       }
      });
  ';

  }

   






   