<?php
/**
 *
 * Panel Sidebar
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
	'sidebar_settings_panel',
	array(
		'priority' => 6,
		'title'    => esc_html__( 'Sidebar', 'idealx' ),
	)
);
// ===================[ section mesidebar settings ]===================
Kirki::add_section(
	'sidebar_settings_options',
	array(
		'title'    => esc_html__( 'Sidebar Controls', 'idealx' ),
		'panel'    => 'sidebar_settings_panel',
		'priority' => 1,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'switch',
		'settings'    => 'is_post_sidebar',
		'label'       => esc_html__( 'Disable Blog Sidebar', 'idealx' ),
		'description' => esc_html__( 'Switch To Disable Blog Sidebar, this option will Remove the blog sidebar if is on', 'idealx' ),
		'section'     => 'sidebar_settings_options',
		'default'     => false,
		'priority'    => 1,
		'choices'     => array(
			'on'  => esc_html__( 'Disable', 'idealx' ),
			'off' => esc_html__( 'Enable', 'idealx' ),
		),
	)
);


Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'switch',
		'settings'    => 'is_page_sidebar',
		'label'       => esc_html__( 'Disable Page Sidebar', 'idealx' ),
		'description' => esc_html__( 'this option will Remove Page sidebar if is on', 'idealx' ),
		'section'     => 'sidebar_settings_options',
		'default'     => false,
		'priority'    => 2,
		'choices'     => array(
			'on'  => esc_html__( 'Disable', 'idealx' ),
			'off' => esc_html__( 'Enable', 'idealx' ),
		),
	)
);


Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'switch',
		'settings'    => 'is_wooc_sidebar',
		'label'       => esc_html__( 'Woocommerce Sidebar', 'idealx' ),
		'description' => esc_html__( 'this option will enable Woocommerce sidebar if is on', 'idealx' ),
		'section'     => 'sidebar_settings_options',
		'default'     => '',
		'priority'    => 3,
		'choices'     => array(
			'on'  => esc_html__( 'Enable', 'idealx' ),
			'off' => esc_html__( 'Disable', 'idealx' ),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'select',
		'settings'    => 'sidebar-position',
		'label'       => esc_html__( 'Sidebar position', 'idealx' ),
		'section'     => 'sidebar_settings_options',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an option...', 'idealx' ),
		'priority'    => 4,
		'multiple'    => 1,
		'choices'     => array(
			'right' => esc_html__( 'Right', 'idealx' ),
			'left'  => esc_html__( 'Left', 'idealx' ),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'switch',
		'settings' => 'i-sticky-sidebar',
		'label'    => esc_html__( 'Enable Sticky Sidebar', 'idealx' ),
		'section'  => 'sidebar_settings_options',
		'default'  => '',
		'priority' => 5,
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'idealx' ),
			'off' => esc_html__( 'Disable', 'idealx' ),
		),
	)
);
