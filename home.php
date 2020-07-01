<?php
/**
 * The template for displaying Blog site home.
 *
 * @package idealx WordPress Theme
 * @version 1.0.2
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
} 
get_header();
get_template_part('includes/templates/posts' );
get_footer();