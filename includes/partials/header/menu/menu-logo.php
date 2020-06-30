<?php
/**
 * idealx theme Logo in nav
 *
 * @since v1.0.0
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
$idealx_options = idealx_get_theme_options();
$idealx_is_trans = get_post_meta(get_the_ID(), 'is_header_trans', true);
$idealx_home_url = esc_url(home_url());
$idealx_logo_site_name = get_bloginfo('name');

if (!empty($idealx_options['logo-ss-height'])) {
    $idealx_logo_height = $idealx_options['logo-ss-height'];
} else {
    $idealx_logo_height = '35px';
}

$idealx_logo = null;

if (!class_exists('Kirki')) {
    $idealx_menu_logo_img = 0;

} elseif (!empty($idealx_options['logo-img-menu'])) {
    $idealx_menu_logo_img = $idealx_options['logo-img-menu'];
} else {
    $idealx_menu_logo_img = 0;
}

if ($idealx_menu_logo_img == 0) {
    $idealx_logo = $idealx_logo_site_name;
    $idealx_case = '0';
}

if (!empty($idealx_menu_logo_img) && $idealx_menu_logo_img == true) {

    ?><a id="logo" class="uk-navbar-item uk-logo site-logo" href="<?php echo esc_url($idealx_home_url) ?>">
  <img class="idealx-Logoo" src="<?php //echo $idealx_logo; ?>" style=" height:<?php echo esc_html($idealx_logo_height); ?>"
    alt=" <?php echo esc_html(get_bloginfo('name')); ?>">
</a><?php

} elseif ($idealx_menu_logo_img == 0) {

    ?><a id="logo" class="uk-navbar-item uk-logo site-logo" href="<?php echo esc_url($idealx_home_url) ?>">
  <h2><?php echo esc_html($idealx_logo); ?></h2>
</a><?php

}
?>
<?php