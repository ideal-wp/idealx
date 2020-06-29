<?php
/**
 * idealx Dynamic Js Generator.
 *
 * @package idealx
 * @since 1.0
 */
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$idealx_options = idealx_get_theme_options();
/**
 * 
 * loading Dynamic js via WP ajax
 *  
 * */

  $random_number = rand( 0, 99999 );
  $idealx_theme = wp_get_theme();

  if (!empty ( $idealx_options['force-dynamic-cache'] ) && $idealx_options['force-dynamic-cache'] == '1' ){
    $cc_v = $random_number + $idealx_theme->get( 'Version' );
  }else{
    $cc_v = $idealx_theme->get( 'Version' );
  }
  define( 'idealx_ATHEME_VERSION', $cc_v );

  function idealx_dynamic_js_enqueue() {
      wp_enqueue_script( 'idealx-dynamic-js', admin_url( 'admin-ajax.php' ).'?action=dynamic_js&_wpnonce=' . wp_create_nonce( 'dynamic-js-nonce' ), array('jquery'),  idealx_ATHEME_VERSION,true );
  }
  function idealx_dynamic_js() { 

      $nonce = $_REQUEST['_wpnonce'];
      if ( ! wp_verify_nonce( $nonce, 'dynamic-js-nonce' ) ) {
        die( 'invalid nonce' );
      } else { 
      
        include IDEALX_THEME_DIRECTORY . '/assets/js/dynamic/dynamic-js.php'; 
      }
      exit;
  }
  add_action( 'wp_ajax_dynamic_js', 'idealx_dynamic_js' );
  add_action( 'wp_ajax_nopriv_dynamic_js', 'idealx_dynamic_js' );
  add_action( 'wp_enqueue_scripts', 'idealx_dynamic_js_enqueue' ); 

