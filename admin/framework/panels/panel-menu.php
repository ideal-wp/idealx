<?php
/**
 *
 * Panel Menu Settings.
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
	'menu_settings_panel',
	array(
		'priority'    => 2,
		'title'       => esc_html__( 'Menu & Navigation', 'idealx' ),
		'description' => esc_html__( 'Header Content & Layout - Controls the position of the Header Content.', 'idealx' ),
	)
);

// ===============[ section Header Search and Icon]===============

Kirki::add_section(
	'serch_menu_settings_options',
	array(
		'title'       => esc_html__( 'Search In Nav', 'idealx' ),
		'description' => esc_html__( 'Controls the Header Search and Icon.', 'idealx' ),
		'panel'       => 'menu_settings_panel',
		'priority'    => 7,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'select',
		'settings'    => 'shearch_nav_mod',
		'label'       => esc_html__( 'Select Search Header Stayle', 'idealx' ),
		'description' => esc_html__( 'Please select Search Header Stayle here.', 'idealx' ),
		'section'     => 'serch_menu_settings_options',
		'default'     => 'form',
		'placeholder' => esc_html__( 'Select an option...', 'idealx' ),
		'priority'    => 2,
		'multiple'    => 1,
		'choices'     => array(
			'form'    => 'Form',
			'overlay' => 'Overlay ',

		),
	)
);
