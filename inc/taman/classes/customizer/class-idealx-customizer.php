<?php // phpcs:ignore WordPress.Files.FileName
/**
 * Idealx Customizer.
 *
 * @package idealx WordPress Theme
 * @subpackage classes
 * @version 1.0.0
 * @since 1.0.0
 */

// Exit if accessed this directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Idealx Customizer Loader.
 */
if ( ! class_exists( 'Idealx_Customizer' ) ) {
	/**
	 * Idealx Customizer Loader.
	 *
	 * @since 1.0.0
	 */
	class Idealx_Customizer {

		/**
		 * Idealx Customizer instance.
		 *
		 * @var instance $instance
		 * @since 1.0.0
		 */
		private static $instance = null;

		/**
		 * Idealx Customizer construct.
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			$this->initialize_hooks();

			add_action( 'customize_register', array( $this, 'idealx_register_customize_sections' ) );
		}

		/**
		 * Initiator
		 */
		public static function get_instance() {

			if ( ! isset( self::$instance ) ) {

				self::$instance = new self();
			}
			return self::$instance;
		}


		/**
		 * Idealx Customizer initialize_hooks.
		 *
		 * @since 1.0.0
		 */
		private function initialize_hooks() {

			add_action(
				'idealx_customizer_mt_init',
				function () {
					$this->load_files(
						array()
					);
				}
			);

			do_action( 'idealx_customizer_mt_init' );
		}


		/**
		 * Idealx Customizer idealx_register_customize_sections.
		 *
		 * @param idealx_register_customize_sections $wp_customize .
		 * @since 1.0.0
		 */
		public function idealx_register_customize_sections( $wp_customize ) {

			// idealx_register_sections.
			// idealx_register_setting.
			// idealx_new_control.
		}

		/**
		 *  Author Section
		 *
		 * @param author_callout_section $wp_customize .
		 * */
		private function author_callout_section( $wp_customize ) {

		}

		/**
		 * Loads specified PHP files from the theme directory.
		 *
		 * @param loadfiles $file_names the file .
		 * @since 1.0.0
		 */
		public function load_files( $file_names = array() ) {
			foreach ( $file_names as $file_name ) {
				$path = IDEALX_THEME_DIRECTORY . $file_name . '.php';
				if ( file_exists( $path ) ) {
					require_once $path;
				}
			}
		}

	}
}
new Idealx_Customizer();
