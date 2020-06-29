<?php
/**
 * 
 *  idealx hooks Actions.
 *
 * @package idealx Theme
 * @subpackage idealx/hooks
 * @since V1.0.0
 * @version 1.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Hook after header tag
function idealx_hook_after_header_tag(){

	do_action( 'idealx_hook_after_header_tag' );
	
}

// Hook before header menu
function idealx_hook_before_header(){

	do_action( 'idealx_hook_before_header' );
	
}
// Hook after header menu
function idealx_hook_after_header(){

	do_action( 'idealx_hook_after_header' );
}
// Hook page header to open
function idealx_hook_page_header_open(){

	do_action( 'idealx_hook_page_header_open' );
}
//hook page header to close
function idealx_hook_page_header_close(){

	do_action( 'idealx_hook_page_header_close' );
}