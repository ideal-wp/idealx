<?php
/**
 *
 * Panel Blog Settings.
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
	'blog_settings_panel',
	array(
		'priority' => 8,
		'title'    => esc_html__( 'Blog', 'idealx' ),
	)
);
// ===================[ section blog home settings ]===================
Kirki::add_section(
	'blog_settings_options',
	array(
		'title'    => esc_html__( 'Blog Home Styling', 'idealx' ),
		'panel'    => 'blog_settings_panel',
		'priority' => 1,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'select',
		'settings'    => 'select_blog_layout',
		'label'       => esc_html__( 'Chose your home Blog Layout', 'idealx' ),
		'section'     => 'blog_settings_options',
		'default'     => 'standard',
		'placeholder' => esc_html__( 'Select an option...', 'idealx' ),
		'priority'    => 10,
		'multiple'    => 1,
		'choices'     => array(
			'standard' => esc_html__( 'Standard', 'idealx' ),
			'grid'     => esc_html__( 'Grid', 'idealx' ),
		),
	)
);
