<?php
/**
 * Site Header.
 *
 * @package Idealx
 * @since v1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<header>
	<?php

	get_template_part( 'template-parts/header/nav/menu' );

	get_template_part( 'template-parts/header/page-header/header', 'page' );

	?>

</header>

<?php do_action( 'idealx_hook_after_header_tag' ); ?>

<?php get_template_part( 'template-parts/header/nav/menu-mobile' ); ?>
