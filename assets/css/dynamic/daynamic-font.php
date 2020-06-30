<?php
/**
 * Typography Dynamic style
 *
 * @package idealx Theme
 * @subpackage Dynamic style
 * @since V1.0.0
 * @version 1.0.0
 *  - Body Font
 *  - Headers Typography
 *  - menu Typography
 *  - page Header Typography
 *
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
if (!class_exists('Kirki')) {
    return;
}
$idealx_options = idealx_get_theme_options();

/**
 * Elementor heading line height will inherit the them
 */
if (!empty($idealx_options['idealx_h1_family']['line-height'])) {
    $idealx_h1_lineheight = $idealx_options['idealx_h1_family']['line-height'];
} else {
    $idealx_h1_lineheight = '1.7';
}

if (!empty($idealx_options['idealx_h2_family']['line-height'])) {
    $idealx_h2_lineheight = $idealx_options['idealx_h2_family']['line-height'];

} else {
    $idealx_h2_lineheight = '1.7';
}

if (!empty($idealx_options['idealx_h3_family']['line-height'])) {
    $idealx_h3_lineheight = $idealx_options['idealx_h3_family']['line-height'];

} else {
    $idealx_h3_lineheight = '1.7';
}

if (!empty($idealx_options['idealx_h4_family']['line-height'])) {
    $idealx_h4_lineheight = $idealx_options['idealx_h4_family']['line-height'];

} else {
    $idealx_h4_lineheight = '1.7';
}
if (!empty($idealx_options['idealx_h5_family']['line-height'])) {
    $idealx_h5_lineheight = $idealx_options['idealx_h5_family']['line-height'];
} else {
    $idealx_h5_lineheight = '1.7';
}
if (!empty($idealx_options['idealx_h6_family']['line-height'])) {
    $idealx_h6_lineheight = $idealx_options['idealx_h6_family']['line-height'];
} else {
    $idealx_h6_lineheight = '1.7';
}

/*-------------------------------------------------------------------------
#                              Body Font                                 #
-------------------------------------------------------------------------*/

?>
.elementor-widget-heading h1.elementor-heading-title {
line-height: <?php echo esc_html( $idealx_h1_lineheight); ?>;
}

.elementor-widget-heading h2.elementor-heading-title {
line-height: <?php echo esc_html($idealx_h2_lineheight); ?>;
}

.elementor-widget-heading h3.elementor-heading-title {
line-height: <?php echo esc_html($idealx_h3_lineheight); ?>;
}

.elementor-widget-heading h4.elementor-heading-title {
line-height: <?php echo esc_html($idealx_h4_lineheight); ?>;
}

.elementor-widget-heading h5.elementor-heading-title {
line-height: <?php echo esc_html($idealx_h5_lineheight); ?>;
}

.elementor-widget-heading h6.elementor-heading-title {
line-height: <?php echo esc_html($idealx_h6_lineheight); ?>;
}
<?php

if (!empty($idealx_options['h1-small-desktop-font-size'])) {
    $idealx_h1_small_desktop_font_size_system = $idealx_options['h1-small-desktop-font-size'];
} else {
    $idealx_h1_small_desktop_font_size_system = '90';
}
if (!empty($idealx_options['h1-tablet-font-size'])) {

    $idealx_h1_tablet_font_size_system = $idealx_options['h1-tablet-font-size'];
} else {
    $idealx_h1_tablet_font_size_system = '90';
}
if (isset($idealx_options['h1-phone-font-size'])) {

    $idealx_h1_phone_font_size_system = $idealx_options['h1-phone-font-size'];
} else {

    $idealx_h1_phone_font_size_system = '90';
}

if (!empty($idealx_options['h2-small-desktop-font-size'])) {
    $idealx_h2_small_desktop_font_size_system = $idealx_options['h2-small-desktop-font-size'];
} else {
    $idealx_h2_small_desktop_font_size_system = '90';
}
if (!empty($idealx_options['h2-tablet-font-size'])) {

    $idealx_h2_tablet_font_size_system = $idealx_options['h2-tablet-font-size'];
} else {
    $idealx_h2_tablet_font_size_system = '90';
}
if (!empty($idealx_options['h2-phone-font-size'])) {

    $idealx_h2_phone_font_size_system = $idealx_options['h2-phone-font-size'];
} else {

    $idealx_h2_phone_font_size_system = '90';
}

if (!empty($idealx_options['idealx_h1_family']['font-size'])) {
    $idealx_h1_font_size = intval($idealx_options['idealx_h1_family']['font-size']);
} else {
    $idealx_h1_font_size = '30px';
}

if (!empty($idealx_options['h3-small-desktop-font-size'])) {
    $idealx_h3_small_desktop_font_size_system = $idealx_options['h3-small-desktop-font-size'];
} else {
    $idealx_h3_small_desktop_font_size_system = '90';
}
if (!empty($idealx_options['h3-tablet-font-size'])) {

    $idealx_h3_tablet_font_size_system = $idealx_options['h3-tablet-font-size'];
} else {
    $idealx_h3_tablet_font_size_system = '90';
}
if (!empty($idealx_options['h3-phone-font-size'])) {

    $idealx_h3_phone_font_size_system = $idealx_options['h3-phone-font-size'];
} else {

    $idealx_h3_phone_font_size_system = '90';
}
if (!empty($idealx_options['h4-small-desktop-font-size'])) {
    $idealx_h4_small_desktop_font_size_system = $idealx_options['h4-small-desktop-font-size'];
} else {
    $idealx_h4_small_desktop_font_size_system = '95';
}
if (!empty($idealx_options['h4-tablet-font-size'])) {

    $idealx_h4_tablet_font_size_system = $idealx_options['h4-tablet-font-size'];
} else {
    $idealx_h4_tablet_font_size_system = '95';
}
if (!empty($idealx_options['h4-phone-font-size'])) {

    $idealx_h4_phone_font_size_system = $idealx_options['h4-phone-font-size'];
} else {

    $idealx_h4_phone_font_size_system = '95';
}
if (!empty($idealx_options['h5-small-desktop-font-size'])) {
    $idealx_h5_small_desktop_font_size_system = $idealx_options['h5-small-desktop-font-size'];
} else {
    $idealx_h5_small_desktop_font_size_system = '95';
}
if (!empty($idealx_options['h5-tablet-font-size'])) {

    $idealx_h5_tablet_font_size_system = $idealx_options['h5-tablet-font-size'];
} else {
    $idealx_h5_tablet_font_size_system = '95';
}
if (!empty($idealx_options['h5-phone-font-size'])) {

    $idealx_h5_phone_font_size_system = $idealx_options['h5-phone-font-size'];
} else {

    $idealx_h5_phone_font_size_system = '95';
}

if (!empty($idealx_options['h6-small-desktop-font-size'])) {
    $idealx_h6_small_desktop_font_size_system = $idealx_options['h6-small-desktop-font-size'];
} else {
    $idealx_h6_small_desktop_font_size_system = '95';
}
if (!empty($idealx_options['h6-tablet-font-size'])) {

    $idealx_h6_tablet_font_size_system = $idealx_options['h6-tablet-font-size'];
} else {
    $idealx_h6_tablet_font_size_system = '95';
}
if (!empty($idealx_options['h6-phone-font-size'])) {

    $idealx_h6_phone_font_size_system = $idealx_options['h6-phone-font-size'];
} else {

    $idealx_h6_phone_font_size_system = '95';
}

$idealx_h1_desktop_size = intval($idealx_h1_font_size) * intval($idealx_h1_small_desktop_font_size_system) / 100;
$idealx_h1_tablet_size = intval($idealx_h1_font_size) * intval($idealx_h1_tablet_font_size_system) / 100;
$idealx_h1_phone_size = intval($idealx_h1_font_size) * intval($idealx_h1_phone_font_size_system) / 100;

if (!empty($idealx_options['idealx_h2_family']['font-size'])) {
    $idealx_h2_font_size = intval($idealx_options['idealx_h2_family']['font-size']);
} else {
    $idealx_h2_font_size = '25px';
}

$idealx_h2_desktop_size = intval($idealx_h2_font_size) * intval($idealx_h2_small_desktop_font_size_system) / 100;
$idealx_h2_tablet_size = intval($idealx_h2_font_size) * intval($idealx_h2_tablet_font_size_system) / 100;
$idealx_h2_phone_size = intval($idealx_h2_font_size) * intval($idealx_h2_phone_font_size_system) / 100;

if (!empty($idealx_options['idealx_h3_family']['font-size'])) {
    $idealx_h3_font_size = intval($idealx_options['idealx_h3_family']['font-size']);
} else {
    $idealx_h3_font_size = '20px';
}

$idealx_h3_desktop_size = intval($idealx_h3_font_size) * intval($idealx_h3_small_desktop_font_size_system) / 100;
$idealx_h3_tablet_size = intval($idealx_h3_font_size) * intval($idealx_h3_tablet_font_size_system) / 100;
$idealx_h3_phone_size = intval($idealx_h3_font_size) * intval($idealx_h3_phone_font_size_system) / 100;

if (!empty($idealx_options['idealx_h4_family']['font-size'])) {
    $idealx_h4_font_size = intval($idealx_options['idealx_h4_family']['font-size']);
} else {
    $idealx_h4_font_size = '18px';
}

$idealx_h4_desktop_size = intval($idealx_h4_font_size) * intval($idealx_h4_small_desktop_font_size_system) / 100;
$idealx_h4_tablet_size = intval($idealx_h4_font_size) * intval($idealx_h4_tablet_font_size_system) / 100;
$idealx_h4_phone_size = intval($idealx_h4_font_size) * intval($idealx_h4_phone_font_size_system) / 100;

if (!empty($idealx_options['idealx_h5_family']['font-size'])) {
    $idealx_h5_font_size = intval($idealx_options['idealx_h5_family']['font-size']);
} else {
    $idealx_h5_font_size = '16px';
}

$idealx_h5_desktop_size = intval($idealx_h5_font_size) * intval($idealx_h5_small_desktop_font_size_system) / 100;
$idealx_h5_tablet_size = intval($idealx_h5_font_size) * intval($idealx_h5_tablet_font_size_system) / 100;
$idealx_h5_phone_size = intval($idealx_h5_font_size) * intval($idealx_h5_phone_font_size_system) / 100;

if (!empty($idealx_options['idealx_h6_family']['font-size'])) {
    $idealx_h6_font_size = intval($idealx_options['idealx_h6_family']['font-size']);
} else {
    $idealx_h6_font_size = '14px';
}

$idealx_h6_desktop_size = intval($idealx_h6_font_size) * intval($idealx_h6_small_desktop_font_size_system) / 100;
$idealx_h6_tablet_size = intval($idealx_h6_font_size) * intval($idealx_h6_tablet_font_size_system) / 100;
$idealx_h6_phone_size = intval($idealx_h6_font_size) * intval($idealx_h6_phone_font_size_system) / 100;

/*  small desktop  */
?>
<?php
echo '
@media only screen and (max-width: 1300px) and (min-width: 1000px) {
  h1,.elementor-widget-heading h1.elementor-heading-title{
      font-size:' . esc_html($idealx_h1_desktop_size ). 'px;

      line-height:170%;
    }

    h2,.elementor-widget-heading h2.elementor-heading-title{
      font-size:' . esc_html($idealx_h2_desktop_size) . 'px;
      line-height:150%;

    }

    h3,.elementor-widget-heading h3.elementor-heading-title{
      font-size:' . esc_html($idealx_h3_desktop_size) . 'px;
      line-height:140%;

    }

    h4,.elementor-widget-heading h4.elementor-heading-title{
      font-size:' . esc_html($idealx_h4_desktop_size) . 'px;
      line-height:140%;

    }

    h5,.elementor-widget-heading h5.elementor-heading-title{
      font-size:' . esc_html($idealx_h5_desktop_size) . 'px;
      line-height:140%;

    }

    h6,.elementor-widget-heading h6.elementor-heading-title{
      font-size:' . esc_html($idealx_h6_desktop_size) . 'px;
      line-height:140%;

    }

}
/*  tablet  */

@media only screen and (max-width: 999px) and (min-width: 690px) {

    h1,.elementor-widget-heading h1.elementor-heading-title{
      font-size:' . esc_html($idealx_h1_tablet_size) . 'px;
      line-height:160%;
    }

    h2,.elementor-widget-heading h2.elementor-heading-title{
      font-size:' . esc_html($idealx_h2_tablet_size ). 'px;
      line-height:160%;

    }

    h3,.elementor-widget-heading h3.elementor-heading-title{
      font-size:' . esc_html($idealx_h3_tablet_size) . 'px;
      line-height:140%;

    }

    h4,.elementor-widget-heading h4.elementor-heading-title{
      font-size:' . esc_html($idealx_h4_tablet_size) . 'px;
      line-height:140%;

    }

    h5,.elementor-widget-heading h5.elementor-heading-title{
      font-size:' . esc_html($idealx_h5_tablet_size) . 'px;
      line-height:140%;

    }

    h6,.elementor-widget-heading h6.elementor-heading-title{
      font-size:' . esc_html($idealx_h6_tablet_size) . 'px;
      line-height:140%;

    }

}
/*    phone    */
@media only screen and (max-width: 690px) {

    h1,.elementor-widget-heading h1.elementor-heading-title{
      font-size:' . esc_html($idealx_h1_phone_size) . 'px;
      line-height:150%;

    }

    h2,.elementor-widget-heading h2.elementor-heading-title{
      font-size:' . esc_html($idealx_h2_phone_size) . 'px;
      line-height:140%;

    }

    h3,.elementor-widget-heading h3.elementor-heading-title{
      font-size:' . esc_html($idealx_h3_phone_size) . 'px;
      line-height:120%;

    }

    h4,.elementor-widget-heading h4.elementor-heading-title{
      font-size:' . esc_html($idealx_h4_phone_size) . 'px;
      line-height:120%;

    }

    h5,.elementor-widget-heading h5.elementor-heading-title{
      font-size:' . esc_html($idealx_h5_phone_size) . 'px;
      line-height:120%;

    }

    h6,.elementor-widget-heading h6.elementor-heading-title{
      font-size:' . esc_html($idealx_h6_phone_size) . 'px;
      line-height:120%;

    }

}
'; ?>
<?php
/*-=========================[ menu ]=====================- */

echo '

' . (!empty($idealx_options['navbar-light-color-moode']) ? '
.uk-light #idealx-nav-c .uk-navbar-nav>li>a{
  color:' .esc_html( $idealx_options['navbar-light-color-moode'] ). ';
}' : null) . '

' . (!empty($idealx_options['navbar-dark-color-moode']) ? '

.uk-dark  #idealx-nav-c .uk-navbar-nav>li>a{
  color:' . esc_html($idealx_options['navbar-dark-color-moode']) . ';
}' : null) . '

' . (!empty($idealx_options['header-font-f']) ? '
.uk-active #idealx-nav-c .uk-navbar-nav>li>a{
  color:' . esc_html($idealx_options['header-font-f']['color']) . ';
}' : null) . '
' . (!empty($idealx_options['menu-header-link-hover']['hover']) ? '
#idealx-nav-c .uk-navbar-nav>li>a:hover{
  color:' . esc_html($idealx_options['menu-header-link-hover']['hover']) . ';
}' : null) . '
' . (!empty($idealx_options['menu-header-link-hover']['active']) ? '
#idealx-nav-c .uk-navbar-nav>li.uk-active>a{
  color:' . esc_html($idealx_options['menu-header-link-hover']['active']) . ';
}' : null) . '

';
/*-=========================[ Page Header ]=====================-*/
echo '

' . (!empty($idealx_options['header-text-color']) ? '
.id-bh-inner-wrap{
  
  color:' . esc_html($idealx_options['header-text-color']) . ';
}' : null) . '

' . (!empty($idealx_options['header-text-color']) ? '
.id-bh-inner-wrap a{
  color:' . esc_html($idealx_options['header-text-color']) . ';
}' : null) . '

' . (!empty($idealx_options['ar-header-text-color']) ? '
.id-archives-inner-wrap,.id-archives-inner-wrap em{
  color: ' . esc_html($idealx_options['ar-header-text-color']) . ';
}' : null) . '


' . (!empty($idealx_options['ar-header-text-color'])? '
.id-archives-inner-wrap a{ 
  color:' . esc_html($idealx_options['ar-header-text-color']) . ';
}' : null) . '
';

/*-=========================[ Page Header ]=====================-*/