<?php
// Exit if accessed this directly
if (!defined('ABSPATH')) {
    exit;
}
function get_primary_category($idealx_category)
{
    $useCatLink = true;
    // If post has a category assigned.
    if ($idealx_category) {
        $idealx_category_display = '';
        $idealx_category_link = '';
        if (class_exists('WPSEO_Primary_Term')) {
            // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
            $wpseo_primary_term = new WPSEO_Primary_Term('category', get_the_id());
            $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
            $term = get_term($wpseo_primary_term);
            if (is_wp_error($term)) {
                // Default to first category (not Yoast) if an error is returned
                $idealx_category_display = $idealx_category[0]->name;
                $idealx_category_link = get_category_link($idealx_category[0]->term_id);
            } else {
                // Yoast Primary category
                $idealx_category_display = $term->name;
                $idealx_category_link = get_category_link($term->term_id);
            }
        } else {
            // Default, display the first category in WP's list of assigned categories
            $idealx_category_display = $idealx_category[0]->name;
            $idealx_category_link = get_category_link($idealx_category[0]->term_id);
        }
        // Display category
        if (!empty($idealx_category_display)) {
            if ($useCatLink == true && !empty($idealx_category_link)) {
                return '<a href="' . esc_url($idealx_category_link) . '">' . esc_html($idealx_category_display) . '</a>';
            } else {
                return '' . esc_html($idealx_category_display) . '';
            }
        }
    }
}

function idealx_get_cattegory()
{

    $categories = get_the_category();

    $output = null;

    if (!empty($categories)) {

        foreach ($categories as $idealx_category) {

            $output .= '<div id="cat-post-header"> <a  class="cat-post-header uk-link-reset uk-button' . esc_attr($idealx_category->slug) . '" href="' . esc_url(get_category_link($idealx_category->term_id)) . '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'idealx'), $idealx_category->name)) . '" uk-tooltip="' . esc_attr(sprintf(__('View all posts in %s', 'idealx'), $idealx_category->name)) . '" >' . esc_html($idealx_category->name) . '</a> </div>';
        }

    }

    echo trim($output);

    return;
}
