<?php
/**
 * idealx functions and definitions.
 *
 * @package idealx
 * @since 1.0
 */
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


define( 'IDEALX_THEME_DIRECTORY', get_template_directory() );
define( 'IDEALX_THEME_DIR_URI', get_template_directory_uri() );

/**
 * Load text domain.
 * @since 1.0.0
 */
add_action( 'after_setup_theme', 'idealx_lang_setup' );

if ( ! function_exists( 'idealx_lang_setup' ) ) {

	function idealx_lang_setup() {
		
		load_theme_textdomain( 'idealx', get_template_directory() . '/lang' );
	}
}
/**
 * idealx classes Control.
 * @since 1.0.0
 */
require IDEALX_THEME_DIRECTORY .'/idealx/classes/classes-control.php';

/**
 * idealx Options Control.
 * @since 1.0.0
 */

require_once IDEALX_THEME_DIRECTORY . '/idealx/options-control.php';

/**
 * 
 * call TGM Plugin Activation
 * @since 1.0.0
 */
require_once IDEALX_THEME_DIRECTORY . '/includes/admin/tgm-plugin/class-tgm-plugin-activation.php';
require_once IDEALX_THEME_DIRECTORY .'/includes/admin/tgm-plugin/plugins-activation.php';

/**
 * idealx Theme options For (Kirki).
 * @since 1.0.0
 */
require_once IDEALX_THEME_DIRECTORY . '/standard/helpers/kirki-ideal.php';

/**
 * Standrad idealx theme helpers
 * @since 1.0.0
 */

require_once IDEALX_THEME_DIRECTORY . '/standard/helpers/style-enqueue.php';
require_once IDEALX_THEME_DIRECTORY . '/standard/helpers/script-enqueue.php';
require_once IDEALX_THEME_DIRECTORY . '/standard/helpers/admin-enqueue.php';
require_once IDEALX_THEME_DIRECTORY . '/standard/dynamic-options/daynamic-style.php';
require_once IDEALX_THEME_DIRECTORY . '/standard/dynamic-options/dynamic-js.php';

/**
 * idealx Admin Theme Function and Options.
 * @since 1.0.0
 */

require_once IDEALX_THEME_DIRECTORY . '/includes/admin/inc/function-admin.php';


/**
 * 
 *Sets up theme defaults and registers support for various WordPress features.
 *@since 1.0.0
 */
require_once IDEALX_THEME_DIRECTORY . '/standard/helpers/all-wp-support.php';
/**
 * 
 * Woocommerce Supourt features.
 * @since 1.0.0
 */
require_once IDEALX_THEME_DIRECTORY . '/standard/helpers/woocommerce.php';
/**
 *  idealx theme hooks and actions.
 * @since 1.0.0
 */
function idealx_hooks_init() {
	
	require_once IDEALX_THEME_DIRECTORY . '/idealx/hooks/hooks.php';
  require_once IDEALX_THEME_DIRECTORY . '/standard/dynamic-options/ideal-action.php';
	
} 

add_action( 'after_setup_theme', 'idealx_hooks_init', 10 );