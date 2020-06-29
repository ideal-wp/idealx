<?php
/**
 * Navigation Menus
 *
 * @package idealx
 * @subpackage helpers
 * @since 1.0.0
 * @version 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
require_once IDEALX_THEME_DIRECTORY . '/standard/helpers/menu-walker.php';
/**
 * Registers navigation menu locations for a theme.
 */
add_action('after_setup_theme', 'idealx_register_top_menu');

if(class_exists('Kirki')){
add_action('after_setup_theme', 'idealx_register_nav_menus');
}

function idealx_register_top_menu()
{
    
    register_nav_menus(array(

        'top-menu'      => esc_html__('Top menu', 'idealx'),
        'mobile-menu'   => esc_html__('mobile Menu offcanvas', 'idealx'),
        
    ));

}



function idealx_register_nav_menus()
{
    
    register_nav_menus(array(

        'modal-menu'    => esc_html__('mobile Modal menu', 'idealx'),
        'footer-menu'   => esc_html__('Footer Menu', 'idealx'),
        
    ));

}
        



function idealx_menu_notitle($menu)
{
    return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu);

}
add_filter('wp_nav_menu', 'idealx_menu_notitle');
add_filter('wp_page_menu', 'idealx_menu_notitle');
add_filter('wp_list_categories', 'idealx_menu_notitle');