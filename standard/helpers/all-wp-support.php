<?php
/**
 *
 * Theme Setup activate recommended WordPress features
 * @package idealx
 * @subpackage helpers / WP support
 * @since 1.0.0
 * @version 1.0.0
 *
 */
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}

$idealx_options = idealx_get_theme_options();

//content width  defined
if (!isset($content_width)) {
    $content_width = 900;
}

function idealx_wp_theme_setup()
{

    add_theme_support('title-tag');
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');
    //Post Thumbnails
    add_theme_support('post-thumbnails');
    //Post Formats
    add_theme_support('post-formats', array(
        'link',
        'gallery',
        'quote',
        'image',
        'video',
    ));

    //widgets support
    add_theme_support('widgets');

    //Add theme support for Yoast SEO breadcrumbs
    add_theme_support('yoast-seo-breadcrumbs');

}
add_action('after_setup_theme', 'idealx_wp_theme_setup');

/**
 * Register Navigation menus
 */
require_once IDEALX_THEME_DIRECTORY . '/standard/helpers/nav-menu.php';

/**
 * Register sidebars
 */
require_once IDEALX_THEME_DIRECTORY . '/standard/helpers/sidebar.php';

/**
 *
 *   Register sidebars Footer Widget Areas
 */
require_once IDEALX_THEME_DIRECTORY . '/standard/helpers/footer-w.php';
/**
 * comments walker
 */
require_once IDEALX_THEME_DIRECTORY . '/standard/helpers/comment-walker.php';
/**
 * Branded Colors for WP editor color palette
 * Branded Gradient Background Options
 */
require_once IDEALX_THEME_DIRECTORY . '/standard/helpers/editor-color.php';
/**
 * get the primary category for a post
 */
require_once IDEALX_THEME_DIRECTORY . '/standard/helpers/category .php';
/**
 * the breadcrumb
 */
require_once IDEALX_THEME_DIRECTORY . '/standard/helpers/breadcrumb.php';

//Filters the maximum number of words in a post excerpt.
function idealx_custom_excerpt_length($length)
{
    return 35;
}
add_filter('excerpt_length', 'idealx_custom_excerpt_length', 999);

//Continue reading' link prepended with an ellipsis

if (!function_exists('idealx_theme_excerpt_more') && !is_admin()):

    function idealx_theme_excerpt_more($more)
{

        $link = sprintf('<a href="%1$s" id="more-link" class="more-link">%2$s</a>%3$s',
            esc_url(get_permalink(get_the_ID())),
            /* translators: %s: Name of current post */
            sprintf(__('Continue reading ', 'idealx'), '<span class="screen-reader-text">' . get_the_title(get_the_ID()) . '</span>'),
            sprintf('<span class="screen-reader-text">' . get_the_title(get_the_ID()) . '</span>')
        );
        return ' &hellip; ' . $link;

    }
    add_filter('excerpt_more', 'idealx_theme_excerpt_more');

endif;

//Adding Page Number Pagination

if (!function_exists('idealx_pagination_bar')) {

    function idealx_pagination_bar()
    {
        global $wp_query;

        $total_pages = $wp_query->max_num_pages;

        if ($total_pages > 1) {
            $current_page = max(1, get_query_var('paged'));

            echo paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => 'page/%#%',
                'current' => $current_page,
                'total' => $total_pages,
            ));
        }
    }
}

//Filtering frontpage_template

function idealx_filter_front_page_template($template)
{

    return is_front_page() ? '' : $template;
}
add_filter('frontpage_template', 'idealx_filter_front_page_template');
/**
 *
 *single post Previous and next post pagination
 *
 *
 * @since 1.0.0
 */

function idealx_single_post_pagination()
{
    $next_post = get_next_post();
    echo '
    
     ' . previous_post_link('<ul class="idealx-single-pagin uk-pagination"> <li > %link ', '<h4 class="uk-margin-small-left"> ' . esc_html__('Previous:', 'idealx') . ' %title </h4></li>', true, '5') . '

        ' . (is_a( $next_post , 'WP_Post' ) ?
        next_post_link('<li class="uk-margin-auto-left">%link', '<h4 class="uk-margin-small-left" >
    ' . esc_html__('Next:', 'idealx') . '%title </h4></li></ul>', true, '5')
        : '</ul>') . '
    
      
      
    ';

}

/**
 *Author Info Box
 *
 *@since 1.0.0
 */
function idealx_box_athour_single_post()
{
    global $post;
    $display_name = get_the_author_meta('display_name', $post->post_author);

    // If display name is not available then use nickname as display name
    if (empty($display_name)) {
        $display_name = get_the_author_meta('nickname', $post->post_author);
    }

// Get author's biographical information or description
    $user_description = get_the_author_meta('user_description', $post->post_author);

    // Get author's website URL
    $user_website = get_the_author_meta('url', $post->post_author);
// Get link to the author archive page
    $user_posts = get_author_posts_url(get_the_author_meta('ID', $post->post_author));
    echo '

<div class="idealx-author-bio-box u-kcard uk-card-default ">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="65" height="65" src="' . esc_url(get_avatar_url(get_the_author_meta('user_email'), 90)) . '">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">' . esc_html($display_name) . '</h3>
                <p class="uk-text-meta uk-margin-remove-top">
                <a href="' . esc_url($user_posts) . '" uk-icon="bookmark" class="uk-margin-small-right uk-icon-button uk-icon-link"
                uk-tooltip="' . esc_html__('All posts', 'idealx') . '" >
                </a>

                ' . (!empty($user_website) ? '
                <a href="' . esc_url($user_website) . '" class="uk-icon-link uk-icon-button" uk-icon="world"  uk-tooltip="' . esc_html__('Website', 'idealx') . '"></a>
                ' : "") . '
                </p>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
        <p>' . esc_html($user_description) . '</p>
    </div>
</div>
';

}
/**
 * 
 * 
 * @hooked in WP_hed CSS out pout
 * @hooked in wp_footer Js out pout
 *@since 1.0.0
 * 
 */

add_action('wp_head', 'idealx_output_options_hook_code');
add_action('wp_head', 'idealx_output_options_hook_code_in_footer');

function idealx_output_options_hook_code() {

    $idealx_options = idealx_get_theme_options();

    if(! empty($idealx_options['code_html_editor']) ){ 

        echo $idealx_options['code_html_editor']; 
    }

    if(! empty($idealx_options['code_css_editor']) ){ 

        echo '<style type="text/css">'.$idealx_options['code_css_editor'].'</style>'; 
    }

}


function idealx_output_options_hook_code_in_footer() {
    $idealx_options = idealx_get_theme_options();

    if(! empty($idealx_options['code_js_editor']) ){

        echo'<script type= "text/javascript">'. $idealx_options['code_js_editor'].'</script>';
     }
}

