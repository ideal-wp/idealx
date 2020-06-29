<?php
/**
 * idealx theme menu layout 2 && 4
 * 
 * @since v1.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) { 
  exit; 
}

  $idealx_options  = idealx_get_theme_options();
  $menu = null;
  $idealx_button_link  = null;
  $idealx_button_texet = null;
if( ! empty($idealx_options['header-layout'])){
  
  $menu = $idealx_options['header-layout'];

}
if(isset($idealx_options['menu_button_text_setting'])){

  $idealx_button_texet = $idealx_options['menu_button_text_setting'];
}

if(isset($idealx_options['menu_button_link_setting'])){

  $idealx_button_link = $idealx_options['menu_button_link_setting'];
}
get_template_part( '/includes/partials/header/menu/menu', 'serch' );
?><div class="uk-navbar-left nav-overlay">
    <div class="idealx-Logo">
      <?php get_template_part( '/includes/partials/header/menu/menu', 'logo' );?>
    </div>
  </div>
  <div class="uk-navbar-center nav-overlay">
<?php if( $menu == '2' ){ ?>
  <div class="uk-visible@s uk-visible@m"><?php do_action('idealx_uikit_top_menu'); ?></div><?php } ?>
  </div>
  <div class="uk-navbar-right nav-overlay uk-visible@s uk-visible@m">
  <?php if( $menu == '4' ){ ?>
  <div class="uk-visible@s "><?php do_action('idealx_uikit_top_menu'); ?></div><?php } ?>
    <ul class="uk-navbar-nav">
      <li>
        <?php do_action('idealx_search_innav'); ?>
      </li>
      <li>
      <?php get_template_part('woocommerce/woo-cart-in-nav' ) ;?>
      </li>
    </ul><?php if( $menu == '4' ){ ?>
    <button class="uk-button uk-button-secondary" onclick="window.location.href='<?php echo esc_url( $idealx_button_link ) ?>'" ><?php echo esc_html($idealx_button_texet) ?></button><?php } ?>
  </div>
  <?php get_template_part( '/includes/partials/header/menu/menu', 'mobile' );?>