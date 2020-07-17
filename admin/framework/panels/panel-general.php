<?php
/**
 *
 * Panel General Settings.
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
	'general_settings_panel',
	array(
		'priority' => 1,
		'title'    => esc_html__( 'General Settings', 'idealx' ),
	)
);

Kirki::add_section(
	'general_settings_new',
	array(
		'title'       => esc_html__( 'General Settings', 'idealx' ),
		'description' => esc_html__( 'Welcome to the idealx options panel! You can switch between option sections.', 'idealx' ),
		'panel'       => 'general_settings_panel',
		'priority'    => 1,
	)
);
Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'color',
		'settings'    => 'body_b_color',
		'label'       => esc_html__( 'General background color', 'idealx' ),
		'description' => esc_html__( 'Pick a background color for the theme', 'idealx' ),
		'section'     => 'general_settings_new',
		'default'     => '#fff',
		'output'      => array(
			array(
				'element'  => 'body',
				'property' => 'background-color',
			),
		),

	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'color',
		'settings'    => 'body_f_color',
		'label'       => esc_html__( 'General Font Color', 'idealx' ),
		'description' => esc_html__( 'Choose the general font color for the site', 'idealx' ),
		'section'     => 'general_settings_new',
		'output'      => array(
			array(
				'element'  => 'body,.uk-card-default,.taman-article .uk-article-meta,.article-inner-wrap .id-excerpt p,.article-inner-wrap .uk-card-default,.uk-card-default',
				'property' => 'color',
			),
		),
		'default'     => '#333',

	)
);
// =================[ section General Color]=============
Kirki::add_section(
	'general_settings_color',
	array(
		'title'     => esc_html__( 'General Color', 'idealx' ),
		'panel'     => 'general_settings_panel',
		'transport' => 'auto',
		'priority'  => 2,
	)
);
Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'color',
		'settings'    => 'id_primary_color',
		'label'       => esc_html__( 'Primary Color', 'idealx' ),
		'description' => esc_html__( 'Choose the Primary Color for the site', 'idealx' ),
		'section'     => 'general_settings_color',
		'default'     => '#3c40c6',
		'output'      => array(
			array(
				'element'  => '.id-button-primary,.id-primary,.cart-count-nav,.idealx-woo-cart-nav .widget_shopping_cart a.button,
				.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,
				.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.id-primary,body[data-form-submit="regular"], input[type=submit],.uk-checkbox:checked, .uk-checkbox:indeterminate, .uk-radio:checked',
				'property' => 'background-color',
			),

			array(
				'element'  => 'a,.uk-button-text,#id-rea-more a,.uk-card-default .uk-button,.uk-card-default #id-rea-more a',
				'property' => 'color',
			),
			array(
				'element'  => '.uk-input:focus, .uk-select:focus, .uk-textarea:focus,input[type=text]:focus, input[type=email]:focus, input[type=password]:focus, input[type=tel]:focus, input[type=url]:focus, input[type=search]:focus, input[type=date]:focus, textarea:focus,.uk-textarea:focus,.uk-input:focus, .uk-select:focus, .uk-textarea:focus,.woocommerce input#coupon_code:focus,.bypostauthor .img-circle,ul>li .bypostauthor .img-circle,.children li .bypostauthor .img-circle',
				'property' => 'border-color',
			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'color',
		'settings'    => 'id_secondary_color',
		'label'       => esc_html__( 'Secondary Color', 'idealx' ),
		'description' => esc_html__( 'Choose the Secondary Color for the site', 'idealx' ),
		'section'     => 'general_settings_color',
		'default'     => '#f53b57',
		'output'      => array(
			array(
				'element'  => '',
				'property' => 'background-color',
			),

			array(
				'element'  => '',
				'property' => 'color',
			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'color',
		'settings'    => 'id_sub_additional_color',
		'label'       => esc_html__( 'Sub Additional Color', 'idealx' ),
		'description' => esc_html__( 'Applicable theme items will have an option to choose this as color.', 'idealx' ),
		'section'     => 'general_settings_color',
		'default'     => '#0fbcf9',
		'output'      => array(
			array(
				'element'  => '',
				'property' => 'background-color',
			),

			array(
				'element'  => '',
				'property' => 'color',
			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'color',
		'settings'    => 'id_sub_plus_color',
		'label'       => esc_html__( 'Sub Additional Color #2', 'idealx' ),
		'description' => esc_html__( 'Applicable theme items will have an option to choose this as color.', 'idealx' ),
		'section'     => 'general_settings_color',
		'default'     => '#05c46b',
		'output'      => array(
			array(
				'element'  => '',
				'property' => 'background-color',
			),

			array(
				'element'  => '',
				'property' => 'color',
			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'multicolor',
		'settings'    => 'id_color_gradient',
		'label'       => esc_html__( 'Color Gradient', 'idealx' ),
		'description' => esc_html__( 'Applicable theme elements will have the option to choose this as a color (i.e. buttons, icons etc..)', 'idealx' ),
		'section'     => 'general_settings_color',
		'priority'    => 10,
		'alpha'       => false,
		'choices'     => array(
			'from' => esc_html__( 'from', 'idealx' ),
			'to'   => esc_html__( 'to', 'idealx' ),

		),
		'default'     => array(
			'from' => '',
			'to'   => '',

		),
		'transport'   => 'auto',
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'multicolor',
		'settings'    => 'id_sub_color_gradient',
		'label'       => esc_html__( 'Sub Color Gradient', 'idealx' ),
		'description' => esc_html__( 'Applicable theme elements will have the option to choose this as a color (i.e. buttons, icons etc..)', 'idealx' ),
		'section'     => 'general_settings_color',
		'priority'    => 10,
		'alpha'       => false,
		'choices'     => array(
			'from' => esc_html__( 'from', 'idealx' ),
			'to'   => esc_html__( 'to', 'idealx' ),

		),
		'default'     => array(
			'from' => '',
			'to'   => '',

		),
		'transport'   => 'auto',
	)
);
// =============[ section More Extra Setting ]================
Kirki::add_section(
	'extra_settings_control',
	array(
		'title'       => esc_html__( 'Extra Setting', 'idealx' ),
		'description' => esc_html__( 'More Extra Setting & Functionality.', 'idealx' ),
		'panel'       => 'general_settings_panel',
		'priority'    => 3,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'switch',
		'settings'    => 'to_top_remove_setting',
		'label'       => esc_html__( 'Remove Totop', 'idealx' ),
		'description' => esc_html__( 'If It Enable will Remove Back Totop .', 'idealx' ),
		'section'     => 'extra_settings_control',
		'default'     => '',
		'priority'    => 10,
		'choices'     => array(
			'on'  => esc_html__( 'Enable', 'idealx' ),
			'off' => esc_html__( 'Disable', 'idealx' ),
		),
		'transport'   => 'auto',
	)
);
// =================[ subsection Code Insert ]===============
Kirki::add_section(
	'code_insert_control',
	array(
		'title'       => esc_html__( 'Code Insert', 'idealx' ),
		'description' => esc_html__( 'Here you Can add and insert CSS / Js code.', 'idealx' ),
		'panel'       => 'general_settings_panel',
		'priority'    => 4,
		'transport'   => 'auto',
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'code',
		'settings'    => 'code_html_editor',
		'label'       => esc_html__( 'HTML Code', 'idealx' ),
		'description' => esc_html__( 'Insert custom HTML Code inside head tag if you would like added to the site Head or wp_head', 'idealx' ),
		'section'     => 'code_insert_control',
		'default'     => '',
		'choices'     => array(
			'language' => 'HTML',
		),
		'transport'   => 'auto',
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'code',
		'settings'    => 'code_css_editor',
		'label'       => esc_html__( 'CSS Code', 'idealx' ),
		'description' => esc_html__( 'Insert custom CSS you would like added to the site head', 'idealx' ),
		'section'     => 'code_insert_control',
		'default'     => '',
		'choices'     => array(
			'language' => 'CSS',
		),
		'transport'   => 'auto',
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'code',
		'settings'    => 'code_js_editor',
		'label'       => esc_html__( 'Js Code', 'idealx' ),
		'description' => esc_html__( 'Insert custom Js you would like added to the site Footer (Insert the code without <script> </script>)', 'idealx' ),
		'section'     => 'code_insert_control',
		'default'     => '',
		'choices'     => array(
			'language' => 'JS',
		),
		'transport'   => 'auto',
	)
);

