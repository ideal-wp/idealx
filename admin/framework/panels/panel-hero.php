<?php
/**
 *
 * Panel hero
 *
 * @package Idealx
 * @since v1.0.0
 */

// Exit if accessed this directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$idealx_config_id = 'idealx_theme';

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'toggle',
		'settings' => 'hero_select_en',
		'label'    => esc_html__( 'Disable Home Hero Section', 'idealx' ),
		'section'  => 'home_hero_callout_section',
		'default'  => false,
		'priority' => 1,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'toggle',
		'settings' => 'blog_hero_en',
		'label'    => esc_html__( 'Disable Home Hero Section on Blog Home', 'idealx' ),
		'section'  => 'home_hero_callout_section',
		'default'  => false,
		'priority' => 1,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'toggle',
		'settings' => 'fornt_hero_select_en',
		'label'    => esc_html__( 'Disable Home Hero Section on Front Page', 'idealx' ),
		'section'  => 'home_hero_callout_section',
		'default'  => false,
		'priority' => 1,
	)
);





Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'color',
		'settings' => 'hero_overlay_color',
		'label'    => esc_html__( 'Chose your Hero section overlay color', 'idealx' ),
		'section'  => 'home_hero_callout_section',
		'default'  => '',
		'choices'  => array(
			'alpha' => true,
		),
		'priority' => 7,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'background',
		'settings' => 'hero_section_background_setting',
		'label'    => esc_html__( 'Hero Section Background Control', 'idealx' ),
		'section'  => 'home_hero_callout_section',
		'priority' => 6,
		'default'  => array(
			'background-color'      => '#1446ce',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		),
		'output'   => array(
			array(
				'element'  => '#hero-section',
				'property' => 'background-color',
			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'dimensions',
		'settings' => 'dimensions_hero_padding_top_bottom',
		'label'    => esc_html__( 'Adjust Height with Padding Top & Bottom For Hero Section', 'idealx' ),
		'section'  => 'home_hero_callout_section',
		'default'  => array(
			'padding-top'    => '70px',
			'padding-bottom' => '70px',
		),
		'priority' => 6,
		'output'   => array(
			array(
				'element' => '#hero-section',
			),
		),

	)
);
