<?php
/**
 * Hero Sections control.
 *
 * @package Idealx
 * @since v1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$idealx_options       = idealx_get_theme_options();
$idealx_en_hero_theme = get_theme_mod( 'idealx_hero_select_en' );
$idealx_en_hero       = false;

if ( ! empty( $idealx_options['blog_hero_en'] ) ) {
	$idealx_blog_hero_select_en = $idealx_options['blog_hero_en'];
} else {
	$idealx_blog_hero_select_en = false;
}


if ( ! empty( $idealx_options['hero_select_en'] ) ) {
	$idealx_get_hero_en = $idealx_options['hero_select_en'];
} else {
	$idealx_blog_hero_select_en = false;
}

if ( ! empty( $idealx_options['fornt_hero_select_en'] ) ) {
	$idealx_fornt_hero_select_en = $idealx_options['fornt_hero_select_en'];
} else {
	$idealx_fornt_hero_select_en = false;
}

if ( ! empty( $idealx_en_hero_theme ) && 'Yes' === $idealx_en_hero_theme ) {
	$idealx_en_hero = true;
}
if ( empty( $idealx_en_hero_theme ) && 'No' === $idealx_en_hero_theme ) {
	$idealx_en_hero = false;
}


if ( ! empty( $idealx_get_hero_en ) && true === $idealx_get_hero_en ) {

	$idealx_en_hero = true;
}

/**
 * Control hero section to the front page is in file.
 * idealx/option-control.php
 *
 *@since v 1.0.0
 */

/**
 * Add the hero section to the front page.
 *
 *@since v 1.0.0
 */
if ( ! function_exists( 'idealx_home_hero_section' ) ) {

	/**  Check if is the front page so add hero section */
	function idealx_home_hero_section() {
		global $idealx_en_hero, $idealx_fornt_hero_select_en;
		global$idealx_blog_hero_select_en;

		if ( is_front_page() && false === $idealx_en_hero ) {
			if ( false === $idealx_fornt_hero_select_en ) {

				get_template_part( 'template-parts/home-hero-section/herro-section' );
			}
		} elseif ( is_home() && false === $idealx_en_hero && false === $idealx_blog_hero_select_en ) {

				get_template_part( 'template-parts/home-hero-section/herro-section' );

		}
	}
}

add_action( 'idealx_hook_after_header_tag', 'idealx_home_hero_section', 1, 10 );

add_action( 'wp_enqueue_scripts', 'idealx_hero_section_styles_method' );


/**
 * Hero section output inline style.
 *
 * @since v 1.0.0
 */
function idealx_hero_section_styles_method() {

	$idealx_options = idealx_get_theme_options();

	if ( ! empty( $idealx_options['hero_overlay_color'] ) ) {

		$hero_sections_overlay_color = ' #hero-section{box-shadow: inset 0 0 0 100vw ' . esc_html( $idealx_options['hero_overlay_color'] ) . ';}';
	} else {
		$hero_sections_overlay_color = null;
	}

	wp_enqueue_style(
		'idealx-custom-style',
		get_template_directory_uri() . '/assets/css/hero-section.css'
	);
	$color = esc_html( get_theme_mod( 'hero_text_color' ) );

	$but_p_backg = esc_html( get_theme_mod( 'hero_primary_button_bg_color' ) );

	$but_p_backg_hov = esc_html( get_theme_mod( 'hero_primary_button_hover_color' ) );

	$but_p_color = esc_html( get_theme_mod( 'hero_primary_button_text_color' ) );

	$but_p_color_hov = esc_html( get_theme_mod( 'hero_primary_button_text_h_color' ) );

	$background = esc_html( get_theme_mod( 'hero_bacground_color' ) );

	$custom_css = "
              #hero-section-content,#hero-section-content h1,button#hero-secondary,#hero-section-content p{color: {$color};}
              #hero-section{background-color: {$background};}
              button#hero-primary{background: {$but_p_backg};color: {$but_p_color};}
							button#hero-primary:hover{background: {$but_p_backg_hov}; color: {$but_p_color_hov}; }
							$hero_sections_overlay_color
              ";
	wp_add_inline_style( 'idealx-custom-style', $custom_css );
}

add_action( 'idealx_hook_after_header_tag', 'idealx_my_con_skip', 1, 10 );
/** Skip links are little internal navigation links. */
function idealx_my_con_skip() {
	echo '<div id="idealx-content"></div>';

}
