<?php
/**
 * Displays the head section of the theme
 *
 * @package idealx
 * @subpackage Header Frontend
 * @since 1.0.0
 * @version 1.0.2
 */
get_template_part('includes/admin/framework/variable');
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes();?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes();?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes();?>>
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
  <?php wp_head();?>
</head>

<body <?php body_class();?>>
  <?php wp_body_open();?>
  <div id="wrapper" class="id-wrapper wrapper">
    <div id="id-main" class="id-main">
      <header>
        <?php get_template_part('includes/template-parts/navigation/menu');?>
      </header>
      <?php idealx_hook_after_header_tag();
get_template_part('includes/template-parts/navigation/off-canvas');?>