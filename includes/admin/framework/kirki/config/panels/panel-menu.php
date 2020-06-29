<?php
/*
 *
 * panel Menu & Navigation 
 *
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}
$idealx_config_id = 'idealx_theme';


Kirki::add_panel( 'menu_settings_panel', array(
  'priority'       => 2,
  'title'          => esc_html__( 'Menu & Navigation', 'idealx' ),
  'description'    => esc_html__('Header Content & Layout - Controls the position of the Header Content.', 'idealx'),
) );
//===================[ section menu settings ]========================

Kirki::add_section( 'menu_settings_options', array(
  'title'          => esc_html__( 'Menu Layout Controls', 'idealx' ),
  'panel'          => 'menu_settings_panel',
  'priority'       => 1,
) );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'radio-image',
	'settings'    => 'header-layout',
  'label'       => esc_html__('Layout Controls', 'idealx'),
  'description' => esc_html__('Controls the general layout of the header.', 'idealx'),
	'section'     => 'menu_settings_options',
	'default'     => '',
	'priority'    => 1,
	'choices'     => [
		'1'   => get_template_directory_uri() . '/includes/admin/assets/img/menu/1.jpg',
		'2' => get_template_directory_uri() . '/includes/admin/assets/img/menu/2.jpg',
    '3'  => get_template_directory_uri() . '/includes/admin/assets/img/menu/3.jpg',
    '4'  => get_template_directory_uri() . '/includes/admin/assets/img/menu/4.jpg',
		'5'  => get_template_directory_uri() . '/includes/admin/assets/img/menu/5.jpg',

	],
] );

Kirki::add_field( $idealx_config_id, [
	'type'     => 'text',
	'settings' => 'menu_button_text_setting',
	'label'    => esc_html__( 'Menu Button Text', 'idealx' ),
	'section'  => 'menu_settings_options',
	'default'  => '',
	'priority' => 2,
] );

Kirki::add_field( $idealx_config_id, [
	'type'     => 'link',
	'settings' => 'menu_button_link_setting',
	'label'    => esc_html__( 'Menu Button Link', 'idealx' ),
	'section'  => 'menu_settings_options',
	'default'  => '',
	'priority' => 3,
] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'color',
	'settings'    => 'nav_burron_backgroundcolor_setting',
	'label'       => esc_html__( 'Button Background', 'idealx' ),
	'section'     => 'menu_settings_options',
	'default'     => '#000',
	'priority' => 4,
	'output'      => [
		[
			'element' => '#idealx-nav button',
			'property'    => 'background-color',
		],
	],

] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'color',
	'settings'    => 'nav_button_backgroundcolor_hover_setting',
	'label'       => esc_html__( 'Button Background On Hover', 'idealx' ),
	'section'     => 'menu_settings_options',
	'default'     => '#000',
	'priority' => 4,
	'output'      => [
		[
			'element' => '#idealx-nav button:hover',
			'property'    => 'background-color',
		],
	],

] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'color',
	'settings'    => 'nav_button_backgroundcolor_text_setting',
	'label'       => esc_html__( 'Button Text Color', 'idealx' ),
	'section'     => 'menu_settings_options',
	'default'     => '#fff',
	'priority' => 4,
	'output'      => [
		[
			'element' => '#idealx-nav button',
			'property'    => 'color',
		],
	],

] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'color',
	'settings'    => 'nav_button_backgroundcolor_text_hover_setting',
	'label'       => esc_html__( 'Button Text Color On Hover', 'idealx' ),
	'section'     => 'menu_settings_options',
	'default'     => '#fff',
	'priority' => 4,
	'output'      => [
		[
			'element' => '#idealx-nav button:hover',
			'property'    => 'color',
		],
	],

] );

//==============================[ section Logo ]====================

Kirki::add_section( 'logo_menu_settings_options', array(
  'title'          => esc_html__( 'Logo', 'idealx' ),
  'panel'          => 'menu_settings_panel',
  'priority'       => 2,
) );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'switch',
	'settings'    => 'logo-img-menu',
  'label'       => esc_html__('Use Image for Logo', 'idealx'),
  'description' => esc_html__('Enable it if you want tou use image logo if it Disable theme will use your site name from site  site name', 'idealx'),
	'section'     => 'logo_menu_settings_options',
	'default'     => '',
	'priority'    => 1,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'idealx' ),
		'off' => esc_html__( 'Disable', 'idealx' ),
	],
] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'typography',
	'settings'    => 'logo-font-no-img',
  'label'       => esc_html__( 'Logo Text Font' , 'idealx' ),
  'description' => esc_html__( 'Select the Logo Text Font' , 'idealx' ),
	'section'     => 'logo_menu_settings_options',
	'default'     => [
		'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => '',
		'text-align'     => '',
	],
	'priority'    => 2,
	'transport'   => 'auto',
  'active_callback' => function() {
    $current_options        = get_option('idealx_options_control');
    $checkbox_value = $current_options['logo-img-menu']  ;
  
    if ( $checkbox_value == '0' ) {
      return true;
    }
    return false;
  },

] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'image',
	'settings'    => 'header-s-logo',
	'label'       => esc_html__('Upload a site logo', 'idealx'), 
	'description' => esc_html__('You can upload a logo image to appear in place of your site title', 'idealx'),
	'section'     => 'logo_menu_settings_options',
  'default'     => '',
  'active_callback' => function() {
    $current_options        = get_option('idealx_options_control');
    $checkbox_value = $current_options['logo-img-menu']  ;
  
    if ( $checkbox_value == '1' ) {
      return true;
    }
    return false;
  },
] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'dimension',
	'settings'    => 'logo-ss-height',
	'label' => esc_html__( 'Logo Height ,' , 'idealx' ),
	'section'     => 'logo_menu_settings_options',
  'default'     => '35px',
  'active_callback' => function() {
    $current_options        = get_option('idealx_options_control');
    $checkbox_value = $current_options['logo-img-menu']  ;
  
    if ( $checkbox_value == '1' ) {
      return true;
    }
    return false;
  },
] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'image',
	'settings'    => 'mobile-s-logo',
	'label'       => esc_html__('Mobile Logo Upload', 'idealx'),  
	'description' => esc_html__('chose mobile devices logo', 'idealx'),
	'section'     => 'logo_menu_settings_options',
  'default'     => '',
  'active_callback' => function() {
    $current_options        = get_option('idealx_options_control');
    $checkbox_value = $current_options['logo-img-menu']  ;
  
    if ( $checkbox_value == '1' ) {
      return true;
    }
    return false;
  },
] );

//=========================[ section Styling ]================

Kirki::add_section( 'styling_menu_settings_options', array(
  'title'          => esc_html__( 'Menu Styling', 'idealx' ),
  'panel'          => 'menu_settings_panel',
  'priority'       => 3,
) );
Kirki::add_field( $idealx_config_id, [
	'type'        => 'dimension',
	'settings'    => 'nav-idealx-height',
	'label'       => esc_html__( 'Header Height' , 'idealx' ),
	'section'     => 'styling_menu_settings_options',
  'default'     => '80px',
  'priority'       => 1,
  
] );
Kirki::add_field( $idealx_config_id , [
	'type'        => 'color',
	'settings'    => 'header-m-b-color',
	'label'       => esc_html__('Choose a background color for menu', 'idealx'),
	'description' => esc_html__('Pick a background color for the header menu .', 'idealx'),
	'section'     => 'styling_menu_settings_options',
  'default'     => '',
  'priority'       => 2,
] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'select',
	'settings'    => 'header-shadow-b',
  'label'       => esc_html__('Select Header Box Shadow', 'idealx'),
  'description' => esc_html__('Please select your header box shadow here.', 'idealx'),
	'section'     => 'styling_menu_settings_options',
	'default'     => '',
	'placeholder' => esc_html__( 'Select an option...', 'idealx' ),
	'priority'    => 3,
	'multiple'    => 1,
	'choices'     => [
    'smal'      => 'Smal',
    'larg'      => 'Larg',
    'NO'        => 'NO Shadow',
	],
] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'typography',
	'settings'    => 'header-font-f',
  'label'       =>  esc_html__( 'Navigation & Header Font' , 'idealx' ),
  'description' =>  esc_html__( 'Select the properties of the navigation & Header Font' , 'idealx' ),
	'section'     => 'styling_menu_settings_options',
	'default'     => [
		'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => '',
		'text-align'     => '',
	],
	'priority'    => 4,


] );

Kirki::add_field( $idealx_config_id, [
  'type'        => 'multicolor',
  'settings'    => 'menu-header-link-hover',
  'label'       => esc_html__( 'Header Link Hover color' , 'idealx' ),
  'section'     => 'styling_menu_settings_options',
  'priority'    => 10,
  'choices'     => [
      'hover'    => esc_html__( 'hover', 'idealx' ),
      'active'   => esc_html__( 'active', 'idealx' ),
  ],
  'default'     => [
      'hover'    => '',
      'active'   => '',
  ],
] );
//=================[ section Mobile Menu ]====================
Kirki::add_section( 'mobile_menu_settings_options', array(
  'title'          => esc_html__( 'Mobile Menu', 'idealx' ),
  'description'    => esc_html__('Controls the Off Canvas Menu & Mobile Menu.', 'idealx'),
  'panel'          => 'menu_settings_panel',
  'priority'       => 4,
) );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'select',
	'settings'    => 'mobile-select-menu',
	'label'       => esc_html__('Mobile Menu Style', 'idealx'),
	'section'     => 'mobile_menu_settings_options',
	'default'     => '',
	'placeholder' => esc_html__( 'Select Menu Style...', 'idealx' ),
	'priority'    => 5,
	'multiple'    => 1,
	'choices'     => [
		'off-canvas' =>  esc_html__('Off-canvas', 'idealx'),
    'modal'      => esc_html__('Modal', 'idealx'),
	],
] );


Kirki::add_field( $idealx_config_id, [
	'type'        => 'select',
	'settings'    => 'mobile-o-c-flip',
  'label'       => esc_html__('Open side', 'idealx'),
  'description' => esc_html__('Flip off-canvas to the ...? side.', 'idealx'),
	'section'     => 'mobile_menu_settings_options',
	'default'     => '',
	'placeholder' => esc_html__( 'Select Open side...', 'idealx' ),
	'priority'    => 6,
	'multiple'    => 1,
	'choices'     => [
		'right'     => esc_html__('Right', 'idealx'),
    'left'      => esc_html__('Left', 'idealx'),
  ],
  'active_callback' => function() {
    $current_options        = get_option('idealx_options_control');
    $checkbox_value         = $current_options['mobile-select-menu']  ;
    
    if ( $checkbox_value = 'off-canvas' ) {
      return true;
    }
    return false;
  },
] );


Kirki::add_field( $idealx_config_id, [
	'type'        => 'select',
	'settings'    => 'mobile-o-c-modes',
  'label'       => esc_html__('Off-canvas Animation modes', 'idealx'),
  'description' => esc_html__('Select Off-canvas Animation Style', 'idealx'),
	'section'     => 'mobile_menu_settings_options',
	'default'     => '',
	'placeholder' => esc_html__( 'Select Open side...', 'idealx' ),
	'priority'    => 7,
	'multiple'    => 1,
	'choices'     => [
    'slide'     => esc_html__('Slide', 'idealx'),
    'push'      => esc_html__('Push', 'idealx'),
    'reveal'    => esc_html__('reveal', 'idealx'),
    'none'      => esc_html__('none', 'idealx'),
  ],
  'active_callback' => function() {
    $current_options        = get_option('idealx_options_control');
    $checkbox_value         = $current_options['mobile-select-menu']  ;
    
    if ( $checkbox_value = 'off-canvas' ) {
      return true;
    }
    return false;
  },
] );

Kirki::add_field( $idealx_config_id , [
  'type'        => 'color',
  'priority'    => 8,
	'settings'    => 'off-canvas-b-color',
	'label'       => esc_html__('Off-canvas Background Color', 'idealx'),
	'section'     => 'mobile_menu_settings_options',
  'default'     => '',
  'active_callback' => function() {
    $current_options        = get_option('idealx_options_control');
    $checkbox_value         = $current_options['mobile-select-menu']  ;
    
    if ( $checkbox_value = 'off-canvas' ) {
      return true;
    }
    return false;
  },
] );

Kirki::add_field( $idealx_config_id , [
  'type'        => 'color',
  'priority'    => 9,
	'settings'    => 'off-canvas-overlay-color',
	'label'       => esc_html__('Off-canvas Overlay Background Color', 'idealx'), 
	'section'     => 'mobile_menu_settings_options',
  'default'     => '',
  'choices'     => [
		'alpha' => true,
	],
  'active_callback' => function() {
    $current_options        = get_option('idealx_options_control');
    $checkbox_value         = $current_options['mobile-select-menu']  ;
    
    if ( $checkbox_value = 'off-canvas' ) {
      return true;
    }
    return false;
  },
] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'typography',
	'settings'    => 'font-offcanvas',
  'label'       => esc_html__( 'Off-canvas font' , 'idealx' ),
	'section'     => 'mobile_menu_settings_options',
	'default'     => [
		'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => '',
		'text-align'     => '',
	],
	'priority'    => 10,
	'transport'   => 'auto',
  

] );

//=================[ section Header Effect ]====================

Kirki::add_section( 'effects_menu_settings_options', array(
  'title'          => esc_html__( 'Effects & Animation', 'idealx' ),
  'description'    => esc_html__('Header Effects & Animation Menu Styling - Controls the position of the Header Content.', 'idealx'),
  'panel'          => 'menu_settings_panel',
  'priority'       => 5,
) );


Kirki::add_field( $idealx_config_id, [
	'type'        => 'switch',
	'settings'    => 'reveal-header',
  'label'       => esc_html__('Reveal Header on Scroll', 'idealx'),
  'description' => esc_html__('hide header & show header when start to scroll back up', 'idealx'),
	'section'     => 'effects_menu_settings_options',
	'default'     => '',
	'priority'    => 1,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'idealx' ),
		'off' => esc_html__( 'Disable', 'idealx' ),
  ],
  
] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'switch',
	'settings'    => 'sticky-header',
  'label'       => esc_html__('Sticky Navbar', 'idealx'),
  'description' => esc_html__(' always remain Navbar to be at the top of the screen even when scrolling down the page.', 'idealx'),
	'section'     => 'effects_menu_settings_options',
	'default'     => '',
	'priority'    => 2,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'idealx' ),
		'off' => esc_html__( 'Disable', 'idealx' ),
  ],
  'active_callback' => function() {
    $current_options        = get_option('idealx_options_control');
    $checkbox_value = $current_options['reveal-header']  ;

    if ( $checkbox_value == '0') {
      return true;
    }
    return false;
  },
  
] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'switch',
	'settings'    => 'transparent-header',
  'label'       => esc_html__(' Transparent Header', 'idealx'),
  'description' => esc_html__(' When using an image or colored background for the hero section of your website, you might want to turn the navbar transparent. Just swich it to Transparent Navbar and also you can control it from page or force it.', 'idealx'),
	'section'     => 'effects_menu_settings_options',
	'default'     => '',
	'priority'    => 3,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'idealx' ),
		'off' => esc_html__( 'Disable', 'idealx' ),
  ],
  
] );


Kirki::add_field( $idealx_config_id, [
	'type'        => 'select',
	'settings'    => 'select-header-mod',
  'label'       => esc_html__('Color mode options for Transparent Header ', 'idealx'), 
  'description' => esc_html__('Select Option the light option to improve the visibility of objects on dark backgrounds in a light style. When using a dark style, Select the . option dark to elements on a light background.', 'idealx'),
	'section'     => 'effects_menu_settings_options',
	'default'     => '',
	'placeholder' => esc_html__( 'Select an option...', 'idealx' ),
	'priority'    => 4,
	'multiple'    => 1,
	'choices'     => [
    "uk-light" => esc_html__('Light','idealx'),
     "uk-dark"  => esc_html__('Dark','idealx'),
	],
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'color',
	'settings'    => 'navbar-light-color-moode',
	'label'       => esc_html__('Choose a Font color for light mood', 'idealx'),
	'section'     => 'effects_menu_settings_options',
	'default'     => '',
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'color',
	'settings'    => 'navbar-dark-color-moode',
	'label'       => esc_html__('Choose a Font color for dark mood', 'idealx'),
	'section'     => 'effects_menu_settings_options',
	'default'     => '',
] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'image',
	'settings'    => 'header-t-logo-light-kmod',
	'label'       => esc_html__('Upload a site logo for Transparent Header in light mode', 'idealx'),
	'section'     => 'effects_menu_settings_options',
  'default'     => '',
  'active_callback' => function() {
    $current_options        = get_option('idealx_options_control');
    $checkbox_value = $current_options['logo-img-menu']  ;

    if ( $checkbox_value == true) {
      return true;
    }
    return false;
  },
] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'image',
	'settings'    => 'header-t-logo-dark-kmod',
	'label'       => esc_html__('Upload a site logo for Transparent Header in dark mode', 'idealx'),
	'section'     => 'effects_menu_settings_options',
  'default'     => '',
  'active_callback' => function() {
    $current_options        = get_option('idealx_options_control');
    $checkbox_value = $current_options['logo-img-menu']  ;

    if ( $checkbox_value == true) {
      return true;
    }
    return false;
  },
] );

//=================[section Navbar / userbar ]====================

Kirki::add_section( 'user_nav_bar_settings_options', array(
  'title'          => esc_html__( 'Top Navbar / user navbar', 'idealx' ),
  'panel'          => 'menu_settings_panel',
  'priority'       => 6,
) );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'switch',
	'settings'    => 'user-nav',
  'label'       => esc_html__('Enable user top Navbar', 'idealx'),
  'description' => esc_html__('show / hide user navbar. ', 'idealx'),
	'section'     => 'user_nav_bar_settings_options',
	'default'     => '',
	'priority'    => 1,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'idealx' ),
		'off' => esc_html__( 'Disable', 'idealx' ),
  ],
  
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'color',
	'settings'    => 'navbar-b-color',
	'label'       => esc_html__('Choose a background color for top nav', 'idealx'), 
  'description' => esc_html__('Pick a background color for the user navbar (default: #333).', 'idealx'),
  'priority'    => 2,
	'section'     => 'user_nav_bar_settings_options',
	'default'     => '',
	'output'      => [
		[
			'element' => '.user-nav',
			'property' => 'background',
		],
	],
] );

Kirki::add_field( $idealx_config_id , [
  'type'        => 'color',
  'priority'    => 3,
	'settings'    => 'navbar-f-color',
	'label'       => esc_html__('Choose a Font color for top nav', 'idealx'),
	'description' => esc_html__('Pick a Font color for the user navbar (default: #fff).','idealx'),
	'section'     => 'user_nav_bar_settings_options',
	'default'     => '', 
	'output'      => [
		[
			'element' => '.user-nav .uk-navbar-item,.user-nav p',
			'property' => 'color',
		],
	],
] );

Kirki::add_field( $idealx_config_id, [
  'type'        => 'multicolor',
  'settings'    => 'link-b-color',
  'label'       => esc_html__( 'Link Color' , 'idealx' ),
  'description'      => esc_html__( 'Controls the color of text links in top navbar.','idealx' ),
  'section'     => 'user_nav_bar_settings_options',
  'priority'    => 4,
  'choices'     => [
      'link'    => esc_html__( 'Color', 'idealx' ),
      'hover'   => esc_html__( 'Hover', 'idealx' ),
      'active'  => esc_html__( 'Active', 'idealx' ),
  ],
  'default'     => [
      'link'    => '',
      'hover'   => '',
      'active'  => '',
	],
	'output'      => [
		[
			'element' => '.user-nav a',
			
		],
	],
] );


Kirki::add_field( $idealx_config_id, [
	'type'     => 'text',
	'settings' => 'user_nav_left_area',
	'label'    => esc_html__( 'Add The Text In The Left Area', 'idealx' ),
	'section'  => 'user_nav_bar_settings_options',
	'default'  => esc_html__( 'yourname@yoursite.com', 'idealx' ),
	'priority' => 5,
] );

Kirki::add_field( $idealx_config_id, [
	'type'     => 'text',
	'settings' => 'user_nav_right_area',
	'label'    => esc_html__( 'Add The Text In The Right Area', 'idealx' ),
	'section'  => 'user_nav_bar_settings_options',
	'default'  => esc_html__( 'Your Phone Here', 'idealx' ),
	'priority' => 6,
] );



//===============[ section Header Search and Icon]===============

Kirki::add_section( 'serch_menu_settings_options', array(
  'title'          => esc_html__( 'Search & Icon', 'idealx' ),
  'description'    => esc_html__('Controls the Header Search and Icon.', 'idealx'),
  'panel'          => 'menu_settings_panel',
  'priority'       => 7,
) );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'switch',
	'settings'    => 'search-icon-nav',
  'label'       => esc_html__('Enable Search icon in Navbar', 'idealx'),
	'section'     => 'serch_menu_settings_options',
	'default'     => '',
	'priority'    => 1,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'idealx' ),
		'off' => esc_html__( 'Disable', 'idealx' ),
  ],
  
] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'select',
	'settings'    => 'shearch-nav-mod',
  'label'       => esc_html__('Select Search Header Stayle', 'idealx'),
  'description' => esc_html__('Please select Search Header Stayle here.', 'idealx'),
	'section'     => 'serch_menu_settings_options',
	'default'     => '',
	'placeholder' => esc_html__( 'Select an option...', 'idealx' ),
	'priority'    => 2,
	'multiple'    => 1,
	'choices'     => [
    'overlay'     => 'Overlay ',
    'dropdown'    => 'Dropdown',
    'modal'       => 'Modal'
	],
] );