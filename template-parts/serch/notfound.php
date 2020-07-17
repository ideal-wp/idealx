<?php
/**
 *  Search not found.
 *
 * @package Taman Spa
 * @version 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<article id="search-not-found" class="post no-results not-found">
			<header class="archive-header">

				<h3 class="search-not-found-title"> <?php esc_html_e( 'Sorry,Your search:', 'idealx' ); ?> <span> "<?php the_search_query(); ?>" </span> <?php esc_html_e( 'did not match any documents', 'idealx' ); ?></h3>

			</header>

			<p><?php esc_html_e( 'Please try again with some different keywords,Type keyword & press enter.', 'idealx' ); ?></p>

			<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="uk-search uk-search-large">
			<span uk-search-icon></span>

				<input name="s" class="uk-search-input" type="search" placeholder="<?php esc_attr_e( 'Search...', 'idealx' ); ?>" value="">

			</form>

</article>
