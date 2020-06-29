<?php
/**
 * idealx admin page functions and definitions.
 *
 * @package idealx
 * @since 1.0
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

$idealx_options = idealx_get_theme_options();
/**
 * WPTRT Autoload
 *  Loader class.
 */
require_once IDEALX_THEME_DIRECTORY . '/includes/admin/inc/WPTT/Loader.php';
$idealx_loder = new \WPTRT\Autoload\Loader();
/**
 * 
 *  AdminNotices classes.
 * @since v1.0.0
 */
$idealx_loder->add( 'WPTRT\\AdminNotices\\', get_theme_file_path( 'includes/admin/inc/notices/src' ) );
$idealx_loder->register();
/**
 * 
 *  AdminNotices.
 * @since v1.0.0
 */
require_once IDEALX_THEME_DIRECTORY . '/includes/admin/inc/notices/notices.php';

/**
 * 
 *  Admin Dynamic JS.
 * @since v1.0.0
 */
require_once IDEALX_THEME_DIRECTORY . '/includes/admin/inc/helpers/js-dynamic.php';

//=========================================================
add_action('after_switch_theme','idealx_theme_welcome_redirect');

/**
* Redirect to welcome page when idealx is activated.
*
* @since 1.0.0
*/
function idealx_theme_welcome_redirect() {
  
  global $pagenow;
  
  // Verify that the theme was activated.
  if ( is_admin() && 'themes.php' === $pagenow && isset( $_GET['activated'] ) ) {
    
    // Do not redirect if network activated.
    if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {
      return;
    }
    
    // Redirect.
    wp_safe_redirect( add_query_arg( array( 'page' => 'idealx-theme-options' ), admin_url( 'themes.php' ) ) );
    
  }
  
}
//Create Admin theme Page
function idealx_theme_page()
{
    add_theme_page('idealx WP Theme Options', 'Ideal  Options', 'edit_theme_options', 'idealx-theme-options', 'idealx_option_page', 10);
}
add_action('admin_menu', 'idealx_theme_page');

function idealx_option_page()
{

    get_template_part('includes/admin/inc/theme-page/ideal-options');


}

/**
 * Adds the loader CSS to our `<head>`.
 *
 */
if (class_exists('Kirki')) {

    if (!function_exists('idealx_add_loader_styles_to_header')) {

        function idealx_add_loader_styles_to_header()
        {
            ?>
          <style>
            .kirki-customizer-loading-wrapper {
              background-image: url("<?php echo esc_url(IDEALX_THEME_DIR_URI . '/includes/admin/assets/img/icon/ideal-white.svg'); ?>") !important;
              background-size: 100px;
            }
          </style>
          <?php
}
    }
    add_action('wp_head', 'idealx_add_loader_styles_to_header', 100);
}


