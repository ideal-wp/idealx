<?php
/**
 * idealx Dynamic Style Generator.
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
 * loading Dynamic Style via WP ajax
 *  
 * */
if (!empty($idealx_options['style-dynamic-load']) && $idealx_options['style-dynamic-load'] == '2' ){

  $idealx_random_number = rand( 0, 99999 );
  $idealx_theme = wp_get_theme();

  if (  !empty($idealx_options['force-dynamic-cache']) && $idealx_options['force-dynamic-cache'] == true ){
    $idealx_cc_v = $idealx_random_number + $idealx_theme->get( 'Version' );
  }else{
    $idealx_cc_v = $idealx_theme->get( 'Version' );
  }
  define( 'idealx_THEME_VERSION', $idealx_cc_v );

  function idealx_dynamic_css_enqueue() {
      wp_enqueue_style( 'idealx-dynamic-style', admin_url( 'admin-ajax.php' ).'?action=dynamic_css&_wpnonce=' . wp_create_nonce( 'dynamic-css-nonce' ), false,  idealx_THEME_VERSION );
  }

  function idealx_dynamic_css() { 

    if (! isset( $_REQUEST['_wpnonce'] ) || 
    !wp_verify_nonce(  wp_unslash($_REQUEST)['_wpnonce'], 'dynamic-css-nonce' ) ) {
        die( 'invalid nonce' );
      } else { 
      
        include IDEALX_THEME_DIRECTORY . '/standard/dynamic-options/style-output.php'; 
      }
      exit;
  }
  add_action( 'wp_ajax_dynamic_css', 'idealx_dynamic_css' );
  add_action( 'wp_ajax_nopriv_dynamic_css', 'idealx_dynamic_css' );
  add_action( 'wp_enqueue_scripts', 'idealx_dynamic_css_enqueue' ); 
}

/**
 * get the style output
 */
function idealx_dynamic_css_output(){
  get_template_part( '/assets/css/dynamic/daynamic' , 'color' );
  get_template_part( '/assets/css/dynamic/daynamic' , 'font' );
  get_template_part( '/assets/css/dynamic/daynamic' , 'option' );
}
// switching quick dynamic css minify

if (  empty($idealx_options['minify-dynamic-allow']) || $idealx_options['minify-dynamic-allow'] == false){

  function idealx_dynamic_idealx_minify( $css ) {

    $css = preg_replace( '/\s+/', ' ', $css );
    
    $css = preg_replace( '/\/\*[^\!](.*?)\*\//', '', $css );
    
    $css = preg_replace( '/(,|:|;|\{|}) /', '$1', $css );
    
    $css = preg_replace( '/ (,|;|\{|})/', '$1', $css );
    
    $css = preg_replace( '/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css );
    
    $css = preg_replace( '/(:| )(\.?)0(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css );
    
    return trim( $css );
  
  }
}
/*
 * Enqueues dynamic theme option CSS in head using wp_add_inline_style.
 *
 * 
 */
if(empty($idealx_options['style-dynamic-load'])){

  $idealx_lod_min_css_dynnamic = '1';
}else{
  $idealx_lod_min_css_dynnamic = $idealx_options['style-dynamic-load'];
}

if ($idealx_lod_min_css_dynnamic == '1' ){

  function idealx_dynamic_css_styles_method() {

    global $idealx_options ;
  
      ob_start(); 
      
      // Include css.
      idealx_dynamic_css_output();
      
      $idealx_dynamic_css = ob_get_contents();
      ob_end_clean();

      if ( empty($idealx_options['minify-dynamic-allow']) || $idealx_options['minify-dynamic-allow'] == false ){
      
        $idealx_dynamic_css = idealx_dynamic_idealx_minify($idealx_dynamic_css);     
      }
      wp_register_style( 'dynamic_css', false );
      wp_enqueue_style( 'dynamic_css' );
      wp_add_inline_style( 'dynamic_css', $idealx_dynamic_css );
  }
  add_action( 'wp_enqueue_scripts', 'idealx_dynamic_css_styles_method' );
}
/**
 * Writes the dynamic Style into a file 
 * 
 * 
 * @since 1.0
 */

/**
 * dir is writable??
 * @since 1.0.0
 */
function idealx_check_assets_dir_writable() {
	
	global $wp_filesystem;
	
	if ( empty($wp_filesystem) || ! function_exists( 'request_filesystem_credentials' ) ) {	
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
	}
	// checking the directory ( /assets/css/dynamic/ )is writable or not 
	$path = IDEALX_THEME_DIRECTORY . '/assets/css/dynamic/';
	
	// ask have direct access?
	if( get_filesystem_method(array(), $path) === "direct" ) {
		return true;
	} 
	
	if ( ! function_exists( 'submit_button' ) ) {
		require_once( ABSPATH . 'wp-admin/includes/template.php' );
	}
	
	ob_start();
	$fs_stored_credentials = request_filesystem_credentials('', '', false, false, null);
	ob_end_clean();

	
	if ( $fs_stored_credentials && WP_Filesystem( $fs_stored_credentials ) ) {
		return true;
	}
	
	return false;
	
}

/**
 * Writes the dynamic CSS into a file
 * 
 */

if (! empty($idealx_options['style-dynamic-load']) && $idealx_options['style-dynamic-load'] == '3' ){

  function idealx_generate_file_css() {
    
    if( idealx_check_assets_dir_writable() === true) {

      $css_dir = get_template_directory() . '/assets/css/dynamic/'; 
      ob_start(); 

      // Include css.
      idealx_dynamic_css_output();

      $css = ob_get_clean(); 
      
      // Write css to file.
      global $wp_filesystem;
      
      if ( empty($wp_filesystem) ) {	
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
      }

      WP_Filesystem();
      
      $file_chmod = ( defined('FS_CHMOD_FILE') ) ? FS_CHMOD_FILE : false;
      
      if ( is_multisite() ) {
        if( !$wp_filesystem->put_contents($css_dir . 'idealx-dynamic-styles-multi-id-'. get_current_blog_id() .'.css', $css, $file_chmod)) { 
          // Filesystem can not write.
          update_option('idealx_dynamic_css_success', 'false');
        } else {
          update_option('idealx_dynamic_css_success', 'true');
        }
      } else {
        if( !$wp_filesystem->put_contents($css_dir . 'idealx-dynamic-styles.css', $css, $file_chmod)) {
          // Filesystem can not write.
          update_option('idealx_dynamic_css_success', 'false');
        } else {
          update_option('idealx_dynamic_css_success', 'true');
        }
      }
      // Update version number for cache busting.
      $idealx_random_number = rand( 0, 99999 );
      update_option('idealx_dynamic_css_version', $idealx_random_number);
    } // endif CSS dir is writable.
    else {
      // Filesystem can not write.
      update_option('idealx_dynamic_css_success', 'false');
    }  
  }
}
/**
 * 
 * write and chutdown
 * 
 */

/**
 * 
 * checking the user permission to write the file if is enable by idealx options
 * to write or not 
 */

if ( ! empty($idealx_options['shutdown-dynamic-file']) && $idealx_options['shutdown-dynamic-file'] == true ){

  remove_action( 'idealx_off_write', 'idealx_generate_file_css', 1 );

}elseif( ! empty($idealx_options['shutdown-dynamic-file']) && $idealx_options['shutdown-dynamic-file'] == false &&
! empty($idealx_options['style-dynamic-load']) &&
$idealx_options['style-dynamic-load'] == '3')
{
  
  idealx_generate_file_css(); // Start to write the file

}

function idealx_shutdown_dynamic_file(){

  global $idealx_options;

  if ($idealx_options['style-dynamic-load'] == '3' ){

    add_action( 'shutdown', 'idealx_generate_file_css', 10, 1 );
  }
}

/**
 * register dynamic style via stylesheet.
 * that we was write it up in ( /assets/css/dynamic/ )
 * @since 1.0.0
 * 
 */
if (! empty($idealx_options['style-dynamic-load']) && $idealx_options['style-dynamic-load'] == '3' ){

  function idealx_register_dynamic_style(){
    
    global $idealx_options;
      
    $idealx_theme = wp_get_theme();
    $idealx_cc_v = $idealx_theme->get( 'Version' );
    //register dynamic style for multisite
    if( is_multisite() && file_exists( IDEALX_THEME_DIRECTORY . '/assets/css/dynamic/idealx-dynamic-styles-multi-id-'. get_current_blog_id() .'.css' ) ) {
    //register dynamic style
      wp_register_style('dynamic-css', get_template_directory_uri() . '/assets/css/dynamic/idealx-dynamic-styles-multi-id-'. get_current_blog_id() .'.css', '', $idealx_cc_v);

    } else {
      wp_register_style('dynamic-css', get_template_directory_uri() . '/assets/css/dynamic/idealx-dynamic-styles.css', '', $idealx_cc_v);
    }
    wp_enqueue_style('dynamic-css');

  }
}
// Enqueue dynamic css.
if( ! empty($idealx_options['style-dynamic-load']) && $idealx_options['style-dynamic-load'] == '3' ) {
	add_action( 'wp_enqueue_scripts', 'idealx_register_dynamic_style', 20 );
}