<?php
/**
 *
 * Panel Typography.
 *
 * @package Idealx
 * @since v1.0.0
 */

// Exit if accessed this directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$idealx_config_id = 'idealx_theme';


Kirki::add_panel(
	'typography_settings',
	array(
		'priority' => 3,
		'title'    => esc_html__( 'Typography', 'idealx' ),
	)
);

// ===========[ section Typography genral Option ]=============

Kirki::add_section(
	'genral_typography_settings',
	array(
		'title'       => esc_html__( 'General Typography', 'idealx' ),
		'description' => esc_html__( 'This tab contains general typography options.', 'idealx' ),
		'panel'       => 'typography_settings',
		'priority'    => 1,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'typography',
		'settings'    => 'idealx_body_font_family',
		'label'       => esc_html__( 'Body Font Family', 'idealx' ),
		'description' => esc_html__( 'General Site font Setting', 'idealx' ),
		'section'     => 'genral_typography_settings',
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => '',
			'text-align'     => '',
		),
		'priority'    => 1,
		'output'      => array(
			array(
				'element' => 'body,.article-inner-wrap .id-excerpt p,.article-inner-wrap .uk-card-default,.uk-card-default,p',
			),
		),
	)
);

// =============[ section Typography Heading Option]===============

Kirki::add_section(
	'headers_typography_settings',
	array(
		'title'    => esc_html__( 'Headers Typography', 'idealx' ),
		'panel'    => 'typography_settings',
		'priority' => 2,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'typography',
		'settings' => 'idealx_h1_family',
		'label'    => esc_html__( 'Heading 1', 'idealx' ),
		'section'  => 'headers_typography_settings',
		'default'  => array(
			'font-family'    => '',
			'variant'        => '',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => '',
			'text-align'     => '',
		),
		'priority' => 1,
		'output'   => array(
			array(
				'element' => 'h1',
			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'typography',
		'settings' => 'idealx_h2_family',
		'label'    => esc_html__( 'Heading 2', 'idealx' ),
		'section'  => 'headers_typography_settings',
		'default'  => array(
			'font-family'    => '',
			'variant'        => '',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => '',
			'text-align'     => '',
		),
		'priority' => 2,
		'output'   => array(
			array(
				'element' => 'h2',
			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'typography',
		'settings' => 'idealx_h3_family',
		'label'    => esc_html__( 'Heading 3', 'idealx' ),
		'section'  => 'headers_typography_settings',
		'default'  => array(
			'font-family'    => '',
			'variant'        => '',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => '',
			'text-align'     => '',
		),
		'priority' => 3,
		'output'   => array(
			array(
				'element' => 'h3',
			),
		),
	)
);



Kirki::add_field(
	$idealx_config_id,
	array(
		'type'      => 'typography',
		'settings'  => 'idealx_h4_family',
		'transport' => 'auto',
		'label'     => esc_html__( 'Heading 4', 'idealx' ),
		'section'   => 'headers_typography_settings',
		'default'   => array(
			'font-family'    => '',
			'variant'        => '',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => '',
			'text-align'     => '',
		),
		'priority'  => 4,
		'output'    => array(
			array(
				'element' => 'h4',
			),
		),
	)
);


Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'typography',
		'settings' => 'idealx_h5_family',
		'label'    => esc_html__( 'Heading 5', 'idealx' ),
		'section'  => 'headers_typography_settings',
		'default'  => array(
			'font-family'    => '',
			'variant'        => '',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => '',
			'text-align'     => '',
		),
		'priority' => 5,
		'output'   => array(
			array(
				'element' => 'h5',
			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'typography',
		'settings' => 'idealx_h6_family',
		'label'    => esc_html__( 'Heading 6', 'idealx' ),
		'section'  => 'headers_typography_settings',
		'default'  => array(
			'font-family'    => '',
			'variant'        => '',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '',
			'text-transform' => '',
			'text-align'     => '',
		),
		'priority' => 6,
		'output'   => array(
			array(
				'element' => 'h6',
			),
		),
	)
);
