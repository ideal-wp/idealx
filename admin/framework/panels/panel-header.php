<?php
/**
 *
 * PANEL PAGE HEADER OPTIONS.
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
	'page_header',
	array(
		'priority' => 5,
		'title'    => esc_html__( 'Pages Header', 'idealx' ),
	)
);

/* ===========[ section Page Header ]============= */

Kirki::add_section(
	'page_header_settings',
	array(
		'title'       => esc_html__( 'Page Header', 'idealx' ),
		'description' => esc_html__( 'Global Page Header Options', 'idealx' ),
		'panel'       => 'page_header',
		'priority'    => 1,
	)
);

/* ===========[ section single post  Header Settings ]============= */

Kirki::add_section(
	'single_header_settings',
	array(
		'title'       => esc_html__( 'Single Post', 'idealx' ),
		'description' => esc_html__( 'Global Single Post Header Options', 'idealx' ),
		'panel'       => 'page_header',
		'priority'    => 2,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'toggle',
		'settings'    => 'switch-blog-header',
		'label'       => esc_html__( 'Disable Blog Header ', 'idealx' ),
		'description' => esc_html__( ' This Option will Remove Blog Page Header', 'idealx' ),
		'section'     => 'single_header_settings',
		'default'     => '',
		'priority'    => 1,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'toggle',
		'settings'    => 'switch-to-background',
		'label'       => esc_html__( ' Header Background ', 'idealx' ),
		'description' => esc_html__( 'if you enable it will write overall blog post header background', 'idealx' ),
		'section'     => 'single_header_settings',
		'default'     => '',
		'priority'    => 2,
	)
);


Kirki::add_field(
	$idealx_config_id,
	array(
		'type'            => 'background',
		'settings'        => 's-post-header-bg',
		'label'           => esc_html__( 'Chose Background', 'idealx' ),
		'description'     => esc_html__( 'Choose and adjust the settings as appropriate for you', 'idealx' ),
		'section'         => 'single_header_settings',
		'default'         => array(
			'background-color'      => '',
			'background-image'      => '',
			'background-repeat'     => '',
			'background-position'   => '',
			'background-size'       => '',
			'background-attachment' => '',
		),
		'active_callback' => function() {
			$current_options = get_option( 'idealx_options_control' );
			$checkbox_value  = $current_options['switch-to-background'];

			if ( true === $checkbox_value ) {
				return true;
			}
			return false;
		},
		'priority'        => 3,
		'output'          => array(
			array(
				'element' => '#tam-page-header.post-no-imege,#tam-page-header',

			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'dimensions',
		'settings'    => 'post-header-hight',
		'label'       => esc_html__( 'Blog Header Padding', 'idealx' ),
		'description' => esc_html__( 'Add and adjust the default Blog header padding Top & Bottom', 'idealx' ),
		'section'     => 'single_header_settings',
		'default'     => array(
			'padding-top'    => '',
			'padding-bottom' => '',
		),
		'priority'    => 4,
		'output'      => array(
			array(
				'element' => '#tam-page-header.single-header .headre-contant',

			),
		),
	)
);


Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'toggle',
		'settings'    => 'post-img-background',
		'label'       => esc_html__( ' Featured images Header Background ', 'idealx' ),
		'description' => esc_html__( 'if you enable it will add post featured image as background', 'idealx' ),
		'section'     => 'single_header_settings',
		'default'     => '',
		'priority'    => 5,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'color',
		'settings' => 'blog-color-rgba-header-overlay',
		'label'    => esc_html__( 'Blog Header overlay Color', 'idealx' ),
		'section'  => 'single_header_settings',
		'default'  => '',
		'choices'  => array(
			'alpha' => true,
		),
		'priority' => 6,
		'output'   => array(
			array(
				'element'  => '#tam-page-header.single-header #color-overlay',
				'property' => 'background-color',
			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'color',
		'settings' => 'header-text-color',
		'label'    => esc_html__( 'Blog Header general Text Color', 'idealx' ),
		'section'  => 'single_header_settings',
		'default'  => '',
		'priority' => 7,
		'output'   => array(
			array(
				'element'  => '#tam-page-header.post-no-imege,#tam-page-header.single-header .headre-contant',
				'property' => 'color',
			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'typography',
		'settings' => 'blog-header-font',
		'label'    => esc_html__( 'Post title Font option', 'idealx' ),
		'section'  => 'single_header_settings',
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
		'priority' => 8,
		'output'   => array(
			array(
				'element' => '#tam-page-header.single-header .headre-contant h1',

			),
		),


	)
);
/* ===========[ section Archives Page Header Settings ]============= */
Kirki::add_section(
	'archives_header_settings',
	array(
		'title'       => esc_html__( 'Archives Header', 'idealx' ),
		'description' => esc_html__( 'Global Archives Header Options', 'idealx' ),
		'panel'       => 'page_header',
		'priority'    => 3,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'toggle',
		'settings' => 'id-archives-switch-header',
		'label'    => esc_html__( 'Disable Archives Page Header ', 'idealx' ),
		'section'  => 'archives_header_settings',
		'default'  => '',
		'priority' => 1,
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'background',
		'settings'    => 'archives-header-bg',
		'label'       => esc_html__( 'Chose Background', 'idealx' ),
		'description' => esc_html__( 'Choose and adjust the settings as appropriate for you', 'idealx' ),
		'section'     => 'archives_header_settings',
		'default'     => array(
			'background-color'      => '#eee',
			'background-image'      => '',
			'background-repeat'     => '',
			'background-position'   => '',
			'background-size'       => '',
			'background-attachment' => '',
		),
		'priority'    => 2,
		'output'      => array(
			array(
				'element' => '#tam-page-header.archives-header',

			),
		),

	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'color',
		'settings' => 'archives-color-rgba-header-overlay',
		'label'    => esc_html__( 'Archives Header overlay Color', 'idealx' ),
		'section'  => 'archives_header_settings',
		'default'  => '',
		'choices'  => array(
			'alpha' => true,
		),
		'priority' => 3,
		'output'   => array(
			array(
				'element'  => '#tam-page-header.archives-header #color-overlay',
				'property' => 'background-color',
			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'        => 'dimensions',
		'settings'    => 'archives-header-hight',
		'label'       => esc_html__( 'Archives Header Padding', 'idealx' ),
		'description' => esc_html__( 'Choose and adjust the default Archives header padding Top & Bottom', 'idealx' ),
		'section'     => 'archives_header_settings',
		'default'     => array(
			'padding-top'    => '70px',
			'padding-bottom' => '70px',
		),
		'priority'    => 4,
		'output'      => array(
			array(
				'element' => '#tam-page-header.archives-header .headre-contant',
			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'typography',
		'settings' => 'archives-header-font',
		'label'    => esc_html__( 'Archives title Font option', 'idealx' ),
		'section'  => 'archives_header_settings',
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
				'element' => '#tam-page-header.archives-header .headre-contant h1',

			),
		),
	)
);

Kirki::add_field(
	$idealx_config_id,
	array(
		'type'     => 'color',
		'settings' => 'ar-header-text-color',
		'label'    => esc_html__( 'Archives Header general Text Color', 'idealx' ),
		'section'  => 'archives_header_settings',
		'default'  => '#000',
		'priority' => 6,
		'output'   => array(
			array(
				'element'  => '#tam-page-header.archives-header .headre-contant',
				'property' => 'color',

			),
		),
	)
);

	/* ===========[ section  Page Header Settings ]============= */

	Kirki::add_section(
		'pages_header_settings',
		array(
			'title'       => esc_html__( 'Pages Header', 'idealx' ),
			'description' => esc_html__( 'Global Pages Header Options', 'idealx' ),
			'panel'       => 'page_header',
			'priority'    => 3,
		)
	);

	Kirki::add_field(
		$idealx_config_id,
		array(
			'type'     => 'toggle',
			'settings' => 'id-pages-switch-header',
			'label'    => esc_html__( 'Disable pages Page Header ', 'idealx' ),
			'section'  => 'pages_header_settings',
			'default'  => '',
			'priority' => 1,
		)
	);

	Kirki::add_field(
		$idealx_config_id,
		array(
			'type'        => 'background',
			'settings'    => 'pages-header-bg',
			'label'       => esc_html__( 'Chose Background', 'idealx' ),
			'description' => esc_html__( 'Choose and adjust the settings as appropriate for you', 'idealx' ),
			'section'     => 'pages_header_settings',
			'default'     => array(
				'background-color'      => '#eee',
				'background-image'      => '',
				'background-repeat'     => '',
				'background-position'   => '',
				'background-size'       => '',
				'background-attachment' => '',
			),
			'priority'    => 2,
			'output'      => array(
				array(
					'element' => '#tam-page-header.page-header',

				),
			),
		)
	);

	Kirki::add_field(
		$idealx_config_id,
		array(
			'type'     => 'color',
			'settings' => 'pages-color-rgba-header-overlay',
			'label'    => esc_html__( 'Pages Header overlay Color', 'idealx' ),
			'section'  => 'pages_header_settings',
			'default'  => '',
			'choices'  => array(
				'alpha' => true,
			),
			'priority' => 3,
			'output'   => array(
				array(
					'element'  => '#tam-page-header #color-overlay',
					'property' => 'background-color',
				),
			),
		)
	);

	Kirki::add_field(
		$idealx_config_id,
		array(
			'type'        => 'dimensions',
			'settings'    => 'pages-header-hight',
			'label'       => esc_html__( 'Pages Header Padding', 'idealx' ),
			'description' => esc_html__( 'Choose and adjust the default Pages header padding Top & Bottom', 'idealx' ),
			'section'     => 'pages_header_settings',
			'default'     => array(
				'padding-top'    => '',
				'padding-bottom' => '',
			),
			'priority'    => 4,
			'output'      => array(
				array(
					'element' => '.page-header .headre-contant',
				),
			),
		)
	);

	Kirki::add_field(
		$idealx_config_id,
		array(
			'type'     => 'typography',
			'settings' => 'pages-header-font',
			'label'    => esc_html__( 'Pages title Font option', 'idealx' ),
			'section'  => 'pages_header_settings',
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
					'element' => '.page-header .headre-contant h1',
				),
			),

		)
	);

	Kirki::add_field(
		$idealx_config_id,
		array(
			'type'     => 'typography',
			'settings' => 'ar_header_pages_text_ge',
			'label'    => esc_html__( 'Pages Header general Text', 'idealx' ),
			'section'  => 'pages_header_settings',
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
			'priority' => 6,
			'output'   => array(
				array(
					'element' => '.page-header .headre-contant',
				),
			),

		)
	);
