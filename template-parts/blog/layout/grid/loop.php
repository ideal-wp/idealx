<?php
/**
 * The Grid layout Loop.
 *
 * @link https://codex.wordpress.org/The_Loop
 * @package Idealx
 * @since 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="grid-layout uk-child-width-1-2@m uk-grid" uk-grid>
<?php
if ( have_posts() ) :

	while ( have_posts() ) :

		the_post();

		get_template_part( 'template-parts/blog/layout/grid/format', get_post_format() );

		// Stop The Loop (but note the "else:" - see next line).
	endwhile;

else :
	// The very first "if" tested to see if there were any Posts to .
	// display.  This "else" part tells what do if there weren't any.
	esc_html_e( 'Sorry, no posts matched your criteria.', 'idealx' );

	// REALLY stop The Loop.
endif;
?>

</div>

<div class="taman-posts-home-pagination uk-pagination uk-flex-center">
	<?php idealx_numeric_posts_nav(); ?>
</div>
