<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$idealx_options = idealx_get_theme_options();


$menu = 0;
 
if( ! empty( $idealx_options['header-layout'] )){
  $menu = $idealx_options['header-layout'];
}

switch ($menu){
    case '1':
      get_template_part( '/includes/partials/header/menu/menu', 'left' );

    break;
    case '2':
      get_template_part( '/includes/partials/header/menu/menu', 'center' );

    break;
    case '3':
      get_template_part( '/includes/partials/header/menu/menu', 'logo-center');
    break;

    case '4':
      get_template_part( '/includes/partials/header/menu/menu', 'center' );

    break;
    case '5':
      get_template_part( '/includes/partials/header/menu/menu', 'canvs' );

    break;

    default:
    get_template_part( '/includes/partials/header/menu/menu', 'left' );
    
    break;

}
?>
  