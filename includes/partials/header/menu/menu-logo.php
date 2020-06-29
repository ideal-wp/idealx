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
$home_url = esc_url(home_url());
$logo_site_name = get_bloginfo('name');

if (!empty($idealx_options['logo-ss-height'])) {
    $logo_height = $idealx_options['logo-ss-height'];
} else {
    $logo_height = '35px';
}

$logo = null;

if (!class_exists('Kirki')) {
    $menu_logo_img = 0;

} elseif (!empty($idealx_options['logo-img-menu'])) {
    $menu_logo_img = $idealx_options['logo-img-menu'];
} else {
    $menu_logo_img = 0;
}

if ($menu_logo_img == 0) {
    $logo = $logo_site_name;
    $case = '0';
}

if (!empty($menu_logo_img) && $menu_logo_img == true) {

    ?><a id="logo" class="uk-navbar-item uk-logo site-logo" href="<?php echo $home_url ?>">
  <img class="idealx-Logoo" src="<?php //echo $logo; ?>" style=" height:<?php echo $logo_height; ?>"
    alt=" <?php echo get_bloginfo('name'); ?>">
</a><?php

} elseif ($menu_logo_img == 0) {

    ?><a id="logo" class="uk-navbar-item uk-logo site-logo" href="<?php echo $home_url ?>">
  <h2><?php echo $logo; ?></h2>
</a><?php

}
?>
<?php