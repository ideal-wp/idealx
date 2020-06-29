<?php
/*
 *
 * panel Typography
 *
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

$idealx_config_id = 'idealx_theme';


Kirki::add_panel( 'typography_settings', array(
  'priority'       => 3,
  'title'          => esc_html__( 'Typography', 'idealx' ),
) );

//===========[ section Typography genral Option ]=============

Kirki::add_section( 'genral_typography_settings', array(
  'title'          => esc_html__( 'General Typography', 'idealx' ),
  'description'    => esc_html__('This tab contains general typography options.', 'idealx'),
  'panel'          => 'typography_settings',
  'priority'       => 1,
) );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'typography',
	'settings'    => 'idealx_body_font_family',
  'label'       => esc_html__( 'Body Font Family', 'idealx' ),
  'description'    => esc_html__('General Site font Setting', 'idealx'),
	'section'     => 'genral_typography_settings',
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
	'priority'    => 1,
	'output'      => [
		[
			'element' => 'body,.article-inner-wrap .id-excerpt p,.article-inner-wrap .uk-card-default,.uk-card-default,p',
		],
	],
] );

//=============[ section Typography Heading Option]===============

Kirki::add_section( 'headers_typography_settings', array(
  'title'          => esc_html__( 'Headers Typography', 'idealx' ),
  'panel'          => 'typography_settings',
  'priority'       => 2,
) );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'typography',
	'settings'    => 'idealx_h1_family',
	'label'       => esc_html__( 'Heading 1', 'idealx' ),
	'section'     => 'headers_typography_settings',
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
	'priority'    => 1,
	'output'      => [
		[
			'element' => 'h1',
		],
	],	
] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'typography',
	'settings'    => 'idealx_h2_family',
	'label'       => esc_html__( 'Heading 2', 'idealx' ),
	'section'     => 'headers_typography_settings',
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
	'output'      => [
		[
			'element' => 'h2',
		],
	],	] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'typography',
	'settings'    => 'idealx_h3_family',
	'label'       => esc_html__( 'Heading 3', 'idealx' ),
	'section'     => 'headers_typography_settings',
	'default'     =>[
    'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => '',
		'text-align'     => '',
	],
	'priority'    => 3,
	'output'      => [
		[
			'element' => 'h3',
		],
	],	] );



Kirki::add_field( $idealx_config_id, [
	'type'        => 'typography',
  'settings'    => 'idealx_h4_family',
  'transport'   => 'auto',
	'label'       => esc_html__( 'Heading 4', 'idealx' ),
	'section'     => 'headers_typography_settings',
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
	'output'      => [
		[
			'element' => 'h4',
		],
	],	] );


Kirki::add_field( $idealx_config_id, [
	'type'        => 'typography',
	'settings'    => 'idealx_h5_family',
	'label'       => esc_html__( 'Heading 5', 'idealx' ),
	'section'     => 'headers_typography_settings',
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
	'priority'    => 5,
	'output'      => [
		[
			'element' => 'h5',
		],
	],	] );

Kirki::add_field( $idealx_config_id, [
	'type'        => 'typography',
	'settings'    => 'idealx_h6_family',
	'label'       => esc_html__( 'Heading 6', 'idealx' ),
	'section'     => 'headers_typography_settings',
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
	'priority'    => 6,
	'output'      => [
		[
			'element' => 'h6',
		],
	],	] );
//==========[ section Responsivetypography Settings ]=============
Kirki::add_section( 'responsive_typography_settings', array(
  'title'          => esc_html__( 'Headers Responsive', 'idealx' ),
  'panel'          => 'typography_settings',
  'priority'       => 3,
) );

Kirki::add_field($idealx_config_id, [
	'type'        => 'slider',
	'settings'    => 'h1-small-desktop-font-size',
	'label'       => esc_html__('H1 Small Desktop', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 75,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'priority'       => 1,
  'transport'   => 'auto',
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h1-tablet-font-size',
	'label'       => esc_html__('H1 Small Desktop', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 70,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'priority'       => 2,
  'transport'   => 'auto',
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h1-phone-font-size',
	'label'       => esc_html__('H1 Phone', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 65,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'priority'       => 3,
  'transport'   => 'auto',
] );
//-----------------------------------------
Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h2-small-desktop-font-size',
	'label'       => esc_html__('H2 Small Desktop', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 75,
	'choices'     => [
		'min'  => 0,
		'max'  => 90,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h2-tablet-font-size',
	'label'       => esc_html__('H2 Small Desktop', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 80,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h2-phone-font-size',
	'label'       => esc_html__('H2 Phone', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 70,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );
//-----------------------------------------

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h3-small-desktop-font-size',
	'label'       => esc_html__('h3 Small Desktop', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 95,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h3-tablet-font-size',
	'label'       => esc_html__('h3 Small Desktop', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 70,
	'choices'     => [
		'min'  => 0,
		'max'  => 85,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h3-phone-font-size',
	'label'       => esc_html__('h3 Phone', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 75,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );
//-----------------------------------------

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h4-small-desktop-font-size',
	'label'       => esc_html__('h4 Small Desktop', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 100,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h4-tablet-font-size',
	'label'       => esc_html__('h4 Small Desktop', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 80,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h4-phone-font-size',
	'label'       => esc_html__('h4 Phone', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 85,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );
//-----------------------------------------

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h5-small-desktop-font-size',
	'label'       => esc_html__('h5 Small Desktop', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 100,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h5-tablet-font-size',
	'label'       => esc_html__('h5 Small Desktop', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 100,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h5-phone-font-size',
	'label'       => esc_html__('h5 Phone', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 90,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );
//-----------------------------------------

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h6-small-desktop-font-size',
	'label'       => esc_html__('h6 Small Desktop', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 100,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h6-tablet-font-size',
	'label'       => esc_html__('h6 Small Desktop', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 100,
	'choices'     => [
		'min'  => 0,
		'max'  => 100,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );

Kirki::add_field( $idealx_config_id , [
	'type'        => 'slider',
	'settings'    => 'h6-phone-font-size',
	'label'       => esc_html__('h6 Phone', 'idealx'),
	'section'     => 'responsive_typography_settings',
	'default'     => 100,
	'choices'     => [
		'min'  => 0,
		'max'  => 95,
		'step' => 5,
  ],
  'transport'   => 'auto',
] );
//-----------------------------------------