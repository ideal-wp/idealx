<?php
/**
 *
 * PANEL Woocommerce.
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
	'idealx_woocommerce_option',
	array(
		'priority' => 6,
		'title'    => esc_html__( 'idealx Woocommerce', 'idealx' ),
	)
);

// ===========[ Shop Header ]=============

Kirki::add_section(
	'shop_header_settings',
	array(
		'title'       => esc_html__( 'shop Header', 'idealx' ),
		'description' => esc_html__( 'Global Woocommerce Shop Header', 'idealx' ),
		'panel'       => 'idealx_woocommerce_option',
		'priority'    => 1,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'background',
		'settings'    => 'sshop-header-bg',
		'label'       => esc_html__( 'Chose Shop Header Background Options', 'idealx' ),
		'description' => esc_html__( 'Choose and adjust the settings as appropriate for your Shop Header', 'idealx' ),
		'section'     => 'shop_header_settings',
		'default'     => array(
			'background-color'      => '#eee',
			'background-image'      => '',
			'background-repeat'     => '',
			'background-position'   => '',
			'background-size'       => '',
			'background-attachment' => '',
		),
		'output'      => array(
			array(
				'element' => '#woo-tam-page-header',
			),
		),

		'priority'    => 1,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'color',
		'settings' => 'shop_color_rgba_header_overlay',
		'label'    => esc_html__( 'Shop Header overlay Color', 'idealx' ),
		'section'  => 'shop_header_settings',
		'default'  => '',
		'choices'  => array(
			'alpha' => true,
		),
		'priority' => 2,
		'output'   => array(
			array(
				'element'  => '#shop-header-color-overlay',
				'property' => 'background-color',

			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'dimensions',
		'settings'    => 'shop-header-hight',
		'label'       => esc_html__( 'shop Header Padding', 'idealx' ),
		'description' => esc_html__( 'Choose and adjust the default shop header padding Top & Bottom', 'idealx' ),
		'section'     => 'shop_header_settings',
		'default'     => array(
			'padding-top'    => '70px',
			'padding-bottom' => '70px',
		),
		'priority'    => 3,
		'output'      => array(
			array(
				'element' => '.woo-headre-contant ',
			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'typography',
		'settings' => 'shop_header_font_h',
		'label'    => esc_html__( 'Shop title Font option', 'idealx' ),
		'section'  => 'shop_header_settings',
		'default'  => array(
			'font-family'    => '',
			'variant'        => '',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '#000',
			'text-transform' => '',
			'text-align'     => '',
		),
		'priority' => 4,
		'output'   => array(
			array(
				'element' => '.woocommerce-products-header h1',
			),
		),

	)
);


Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'typography',
		'settings' => 'shop_header_font_desc',
		'label'    => esc_html__( 'Shop Header Description Font Options', 'idealx' ),
		'section'  => 'shop_header_settings',
		'default'  => array(
			'font-family'    => '',
			'variant'        => '',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'color'          => '#000',
			'text-transform' => '',
			'text-align'     => '',
		),
		'priority' => 5,
		'output'   => array(
			array(
				'element' => '.woocommerce-products-header p',
			),
		),

	)
);


