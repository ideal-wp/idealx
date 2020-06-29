<?php
// Exit if accessed this directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


use WPTRT\AdminNotices\Notices;

/**
 * idealx Is Now Installed,
 * Recommended Plugins if not Installed.
 * 
 * @since v 1.0.0
 */

$idealx_installed_notices = new Notices();

$idealx_installed_notices->add(
  'idealx_add_recommended_plugins_notice',    // Unique ID.
  esc_html__( 'idealx Is Now Installed And Ready To Use!', 'idealx' ),   // The title for this notice.
  esc_html__( 'Get ready to build something beautiful. Start Installation/Update Of Recommended Plugins Needed', 'idealx' ), // The content for this notice.
  [
      'scope'         => 'user',       // Dismiss is per-user instead of global.
      'screens'       => [ 'themes','dashboard' ], // Only show notice in the "themes" screen.
      'type'          => 'success',    // Make this a warning (orange color).
      'alt_style'     => true,         // Use alt styles.
      'option_prefix' => 'idealx_notices',   // Change the user-meta prefix.
  ]
);


if ( ! class_exists( 'Kirki' ) ) {
  $idealx_installed_notices->boot();
} 




