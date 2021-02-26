<?php
/**
 * General setup functions.
 *
 * @package Idealx.
 * @since v1.0.0
 */

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Enqueue style & script.
 */
require_once IDEALX_THEME_DIRECTORY . '/inc/helpers/admin-enqueue.php';

require_once IDEALX_THEME_DIRECTORY . '/inc/helpers/style-enqueue.php';

require_once IDEALX_THEME_DIRECTORY . '/inc/helpers/script-enqueue.php';

// Get primary category.
require_once IDEALX_THEME_DIRECTORY . '/inc/helpers/category.php';

// Breadcrumb.
require_once IDEALX_THEME_DIRECTORY . '/inc/helpers/breadcrumb.php';

// Menue.
require_once IDEALX_THEME_DIRECTORY . '/inc/helpers/menu-walker.php';
require_once IDEALX_THEME_DIRECTORY . '/inc/helpers/nav-menu.php';

// Register sidebar.
require_once IDEALX_THEME_DIRECTORY . '/inc/helpers/sidebar.php';


// Register helpers.
require_once IDEALX_THEME_DIRECTORY . '/inc/helpers/comments.php';

// Woocommerce support.
require_once IDEALX_THEME_DIRECTORY . '/inc/helpers/woocommerce.php';

// Hero section control.
require_once IDEALX_THEME_DIRECTORY . '/template-parts/home-hero-section/hero-section-control.php';


/**
 * Add skip link after body tag.
 *
 * @since v 1.0.8
 */
if ( ! function_exists( 'idealx_skip_link_after_bodytag' ) ) {
	/**
	 * Add skip link after body tag.
	 */
	function idealx_skip_link_after_bodytag() {

		echo '<a id= "skip-nav" class="screenreader-text" href= "#idealx-content" >' . esc_html__( 'Skip Navigation to Content', 'idealx' ) . '</a>';

	}

	add_action( 'wp_body_open', 'idealx_skip_link_after_bodytag' );

}



	/**
	 * Theme setup.
	 *
	 * @since v 1.0.0
	 */
function idealx_after_wp_theme_setup() {

	// content width  defined.
	if ( ! isset( $content_width ) ) {

		$content_width = 900;
	}

	add_theme_support( 'title-tag' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Post Thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Post Formats.
	add_theme_support(
		'post-formats',
		array(
			'link',
			'gallery',
			'quote',
			'image',
			'video',
			'audio',
		)
	);

	// widgets support.
	add_theme_support( 'widgets' );

	// Responsive Embeds.
	add_theme_support( 'responsive-embeds' );

	// Add theme support for Yoast SEO breadcrumbs.
	add_theme_support( 'yoast-seo-breadcrumbs' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 40,
			'width'       => 150,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		)
	);

}
add_action( 'after_setup_theme', 'idealx_after_wp_theme_setup' );


/**
 * Filtering front page template.
 *
 * @param PageHomefront_page $template .
 * */
function idealx_filter_front_page_template( $template ) {

	return is_front_page() ? '' : $template;
}
add_filter( 'frontpage_template', 'idealx_filter_front_page_template' );

/**
 * Filter the excerpt length to 50 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function idealx_custom_excerpt_length( $length ) {
	if ( is_admin() ) {

		return $length;
	}
	return 35;
}
add_filter( 'excerpt_length', 'idealx_custom_excerpt_length', 999 );

if ( ! function_exists( 'idealx_theme_excerpt_more' ) && ! is_admin() ) :
	/**
	 * Continue reading' link prepended with an ellipsis.
	 *
	 * @param excerptmore $more Continue reading from  post excerpt.
	 */
	function idealx_theme_excerpt_more( $more ) {

		$link = sprintf(
			'<a href="%1$s" id="more-link" class="more-link">%2$s</a>%3$s',
			esc_url( get_permalink( get_the_ID() ) ),
			/* translators: %s: Name of current post */
			sprintf( __( 'Continue reading ', 'idealx' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' ),
			sprintf( '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
		);
		return ' &hellip; ' . $link;

	}
	add_filter( 'excerpt_more', 'idealx_theme_excerpt_more' );

endif;



if ( ! function_exists( 'idealx_pagination_bar' ) ) {
	/**
	 * Paginate_links().
	 * Adding Page Number Pagination.
	 * posts home pagination.
	 *
	 * @link https://developer.wordpress.org/reference/functions/paginate_links/
	 * @since v1.0.0
	 */
	function idealx_pagination_bar() {
		global $wp_query;

		$total_pages = $wp_query->max_num_pages;

		if ( $total_pages > 1 ) {
				$current_page = max( 1, get_query_var( 'paged' ) );

				$paginate_links = paginate_links(
					array(
						'base'    => get_pagenum_link( 1 ) . '%_%',
						'format'  => 'page=%#%',
						'current' => $current_page,
						'total'   => $total_pages,
					)
				);

				echo wp_kses_post( $paginate_links );
		}
	}
}
/**
 *
 * Posts home pagination.
 *
 * @since v1.0.0
 */
function idealx_numeric_posts_nav() {

	if ( is_singular() ) {
			return;
	}

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if ( $wp_query->max_num_pages <= 1 ) {
			return;
	}

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/** Add current page to the array */
	if ( $paged >= 1 ) {
			$links[] = $paged;
	}

	/** Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
			$links[] = $paged - 1;
			$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
			$links[] = $paged + 2;
			$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/** Previous Post Link */
	if ( get_previous_posts_link() ) {
			printf( '<li>%s</li>' . "\n", wp_kses_post( get_previous_posts_link() ) );
	}

	/** Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links, true ) ) {
			$idealx_class = 1 === $paged ? ' class= active' : '';

			printf( '<li%s><a href="%s">%s</a></li>' . "\n", esc_attr( $idealx_class ), esc_url( get_pagenum_link( 1 ) ), esc_html( '1' ) );

		if ( ! in_array( 2, $links, true ) ) {
				echo '<li>…</li>';
		}
	}

	/** Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
			$idealx_class = $paged === $link ? ' class= active' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", esc_attr( $idealx_class ), esc_url( get_pagenum_link( $link ) ), esc_html( $link ) );
	}

	/** Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links, true ) ) {
		if ( ! in_array( $max - 1, $links, true ) ) {
				echo '<li>…</li>' . "\n";
		}

			$idealx_class = $paged === $max ? ' class= active' : '';
			printf( '<li%s><a href="%s">%s</a></li>' . "\n", esc_attr( $idealx_class ), esc_url( get_pagenum_link( $max ) ), esc_html( $max ) );
	}
	/** Next Post Link */
	if ( get_next_posts_link() ) {
			printf( '<li>%s</li>' . "\n", wp_kses_post( get_next_posts_link() ) );
	}

	echo '</ul></div>' . "\n";

}

/**
 *
 * Single post Previous and next post pagination.
 *
 * @since 1.0.0
 */
function idealx_single_post_pagination() {
	$next_post = get_next_post();
	echo '
    
     ' . wp_kses_post( previous_post_link( '<ul class="idealx-single-pagin uk-pagination"> <li > %link ', '<h4 class="uk-margin-small-left"> ' . esc_html__( 'Previous:', 'idealx' ) . ' %title </h4></li>', true, '5' ) ) . '

        ' . ( is_a( $next_post, 'WP_Post' ) ?
		wp_kses_post(
			next_post_link(
				'<li class="uk-margin-auto-left">%link',
				'<h4 class="uk-margin-small-left" >
    ' . esc_html__( 'Next:', 'idealx' ) . '%title </h4></li></ul>',
				true,
				'5'
			)
		)
		: '</ul>' ) . '';

}




/* Post Formats */

/**Get the first imge in the post. */
function idealx_catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output    = preg_match_all( '/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches );
	$first_img = $matches[1][0];

	if ( empty( $first_img ) ) {
		$first_img = null;
	}
	return $first_img;
}


/**Postmeta. */
function idealx_post_meat_imge() {

	global $idealx_category;
	?>

<div class="uk-overlay uk-overlay-primary uk-position-bottom">
<h3 class="uk-article-title"><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h3>

		<p class="uk-article-meta">
		<?php esc_html_e( 'Written by', 'idealx' ); ?>
		<?php the_author_posts_link(); ?>
		<span class="uk-hidden@l"><?php esc_html_e( 'on', 'idealx' ); ?>
			<?php echo esc_html( get_the_time( 'F d,y' ) ); ?></span>
		<?php esc_html_e( ' Posted in', 'idealx' ); ?>
		<?php idealx_get_primary_category( $idealx_category ); ?>
		</p>

</div>

	<?php
}


/**
 * URLs from all gallery images in a post.
 */
function idealx_show_gallery_image_urls() {

		global $post;
		$content = null;
		// Make sure the post has a gallery in it.
	if ( ! has_shortcode( $post->post_content, 'gallery' ) ) {
		return $content;
	}

		// Retrieve all galleries of this post.
		$galleries = get_post_galleries_images( $post );

	$idealx_image_list = '<div class="uk-position-relative  uk-light" tabindex="-1" uk-slideshow> <ul class="uk-slideshow-items" uk-height-viewport="min-height: 300"">';

	// Loop through all galleries found.
	foreach ( $galleries as $gallery ) {

		// Loop through each image in each gallery.
		foreach ( $gallery as $idealx_image ) {

			$idealx_image_list .= '<li class="post-gallery "><img src="' . esc_url( $idealx_image ) . '" alt="" uk-cover></li>';

		}
	}

	$idealx_image_list .= '</ul> <a class="uk-position-top-left uk-position-small" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
	<a class="taman-right-g-nav uk-position-top-left uk-position-small" href="#" uk-slidenav-next uk-slideshow-item="next"></a> </div>';

	// Append our image list to the content of our post.
	$content     .= $idealx_image_list;
	$allowed_html = array(

		'div' => array(
			'id'           => array(),
			'class'        => array(),
			'style'        => array(),
			'tabindex'     => array(),
			'uk-slideshow' => array(),
			'style'        => array(),
			'style'        => array(),
		),
		'a'   => array(
			'alt'                  => array(),
			'href'                 => array(),
			'class'                => array(),
			'aria-label'           => array(),
			'uk-slidenav-previous' => array(),
			'uk-position-small'    => array(),
			'uk-slideshow-item'    => array(),
			'uk-slidenav-next'     => array(),
			'style'                => array(),

		),
		'ul'  => array(
			'id'                  => array(),
			'uk-cover'            => array(),
			' uk-height-viewport' => array(),
			'class'               => array(),
		),
		'li'  => array(
			'id'       => array(),
			'uk-cover' => array(),
			'style'    => array(),
			'class'    => array(),

		),
		'img' => array(
			'src'      => array(),
			'alt'      => array(),
			'uk-cover' => array(),
		),

	);
		echo wp_kses( $content, $allowed_html );

}


/**
 * Output a post's first image.
 */
function idealx_echo_first_image() {
	$args = array(
		'posts_per_page' => 1,
		'order'          => 'ASC',
		'post_mime_type' => 'image',
		'post_status'    => null,
		'post_type'      => 'attachment',
	);

	$idealx_attachments = get_children( $args );

	if ( $idealx_attachments ) {
			echo '<img src="' . esc_url( wp_get_attachment_thumb_url( $idealx_attachments[1]->ID ) ) . '" class="current">';
	}
}


/** Post format Link */
function idealx_grab_the_url_link() {

	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );

}
/** Post Formats Embedded Midea.
 *
 * @param getTheMediaTeype $teype .
 */
function idealx_the_post_formats__embedded_midea( $teype = array() ) {
	global $post;
	$content = do_shortcode( apply_filters( 'the_content', $post->post_content ) );
	$embed   = get_media_embedded_in_content( $content, $teype );
	if ( ! empty( $embed ) ) {
		$output = str_replace( '?visual=true', '?visual=false', $embed[0] );
	}

	$allowed_html = array(

		'iframe' => array(
			'id'              => array(),
			'class'           => array(),
			'title'           => array(),
			'allowfullscreen' => array(),
			'width'           => array(),
			'height'          => array(),
			'src'             => array(),

		),
		'div'    => array(
			'id'         => array(),
			'class'      => array(),
			'aria-label' => array(),
			'tabindex'   => array(),
			'style'      => array(),
		),
		'a'      => array(
			'alt'           => array(),
			'href'          => array(),
			'class'         => array(),
			'aria-label'    => array(),
			'aria-valuenow' => array(),
			'aria-valuemin' => array(),
			'aria-valuemax' => array(),
			'role'          => array(),
			'style'         => array(),

		),
		'source' => array(
			'type'    => array(),
			'src'     => array(),
			'id'      => array(),
			'class'   => array(),
			'loop'    => array(),
			'preload' => array(),
			'style'   => array(),
		),
		'audio'  => array(
			'autoplay' => array(),
			'controls' => array(),
			'name'     => array(),
			'loop'     => array(),
			'preload'  => array(),
			'src'      => array(),
			'id'       => array(),
			'class'    => array(),

		),
		'video'  => array(
			'autoplay' => array(),
			'controls' => array(),
			'name'     => array(),
			'loop'     => array(),
			'preload'  => array(),
			'src'      => array(),
			'id'       => array(),
			'class'    => array(),

		),

		'span'   => array(),
	);

	echo wp_kses( $output, $allowed_html );
}

/**
 *  Wrap an uk-cover-container around an iframe or embed in content automatically.
 *
 * @param wrap_embed_with_div $html .
 * @param wrapembedwithdiv    $url .
 * @param wrap                $attr .
 * */
function idealx_wrap_embed_with_div( $html, $url, $attr ) {

	return '<div class="taman-iframe-video uk-video uk-height-large">' . $html . '</div>';

}

add_filter( 'embed_oembed_html', 'idealx_wrap_embed_with_div', 10, 3 );
