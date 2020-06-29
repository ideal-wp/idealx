<?php
/**
 * The template for displaying Archives.
 *
 * @package idealx WordPress Theme
 * @version 1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
get_header();
$idealx_options      = idealx_get_theme_options();
if(!empty($idealx_options['id-archives-switch-header'])){
    $idealx_arch_header = $idealx_options['id-archives-switch-header'];
}else{
    $idealx_arch_header  = false;
}
if ( $idealx_arch_header  == false || !class_exists('Kirki')) {
    get_template_part('includes/partials/page-header/header', 'archives');
} elseif (!empty($idealx_options['transparent-header']) && $idealx_options['transparent-header'] == true) {
 ?><div class="plog-page-header-margin"></div><?php
}
get_template_part('includes/templates/posts');
get_footer();
