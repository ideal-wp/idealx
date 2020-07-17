<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Idealx
 * @since 1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
				<footer>
				<?php get_template_part( 'template-parts/footer/footer' ); ?>
				</footer>

			</div> <!-- #tam-main -->

		</div><!-- #wrapper -->

	<?php wp_footer(); ?>

	</body>
</html>
