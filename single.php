<?php
/**
 * The template for displaying single posts.
 *
 * @package idealx WordPress Theme
 * @version 1.0.1
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
get_header();
global $idealx_is_sidebar,$idealx_animation,$idealx_id_child,$idealx_flex,$idealx_id_container,$idealx_is_single_cards,$idealx_featured_image,$idealx_is_sticky;
// Start the loop.
while (have_posts()): the_post();
    // single Post header.
    if (is_single() && 'post' == get_post_type() ) {
      get_template_part('includes/partials/page-header/header', 'single');
    }
    ?>
  <div id="idealx-site-content" class="idealx-site-content uk-section">
    <div class="uk-container <?php echo  esc_html($idealx_id_container); ?>">
      <?php if (empty($idealx_is_sidebar) || $idealx_is_sidebar == false ) {?>
      <div class=" uk-grid-column-small" uk-grid>
        <div class="id-con-warp uk-width-expand@m">
          <div class="uk-container">
            <?php }?>
            <!--single post-->
            <article id="post-<?php the_ID();?>" <?php post_class('uk-article');?>>
              <div class="article-inner-wrap">
                <?php
                /**
               * Disabled Post Formats
               * well be added in the new release
               * get_template_part('/includes/template-parts/single-post/content', get_post_format());
               * @since v 1.0.2
               */
                  get_template_part('/includes/template-parts/single-post/content');
                  idealx_single_post_pagination(); 
                  ?>
                <div class="idealx-single-tags">
                  <?php if (has_tag()) {echo esc_html(get_the_tag_list('<p>', ', ', '</p>'));}?>
                </div>
                <?php  idealx_box_athour_single_post();
                  idealx_comment_open();
                  idealx_comment_close();
endwhile; // End the loop. ?>
              </div>
            </article>
            <!--/single post-->
            <?php if (empty($idealx_is_sidebar) || $idealx_is_sidebar == false ) {?>
          </div>
        </div>
        <!--/id-con-warp-->
        <div class="uk-width-1-4@m uk-width-1-4@l <?php echo  esc_html($idealx_flex );?>">
          <div class=" uk-container uk-container-expand " id="blog-sidebar">
            <div class="side-bar uk-flex uk-flex-column "<?php echo  esc_html($idealx_is_sticky); ?>>
              <?php get_sidebar();?>
            </div>
          </div>
        </div>
        <!--/id-con-warp-->
        <?php }?>
    </div>
  </div>
  <?php get_footer();?>