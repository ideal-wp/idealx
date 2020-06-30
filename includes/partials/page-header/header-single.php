<?php
/**
 *
 *  Single Post Page Header.
 *
 * @package idealx Theme
 * @subpackage idealx Partials Page header
 * @since V1.0.0
 * @version 1.0.0
 */
if (!('ABSPATH')) {
    exit;
}
$idealx_options = idealx_get_theme_options();
$idealx_himg = get_the_post_thumbnail_url();
$idealx_enable_header = null;
$idealx_featured_options = null;
$idealx_featured_img_h = null;

if (class_exists('Kirki')) {

    if (!empty($idealx_options['switch-blog-header'])) {
        $idealx_enable_header = $idealx_options['switch-blog-header'];
    }

    if (!empty($idealx_options['post-img-background'])) {
        $idealx_featured_options = $idealx_options['post-img-background'];
    }
    if (!empty($idealx_options['post-img-background'])) {
        $idealx_featured_img_h = $idealx_options['post-img-background'];
    }

} else {

    $idealx_enable_header = false;
    $idealx_featured_options = false;
}
if (empty($idealx_enable_header) || $idealx_enable_header == false) {
// if Enable Blog Header
    if ($idealx_enable_header !== true && $idealx_featured_options == true) {?>

<div id="blog-page-header"
  class=" idealx-page-header-blog  uk-section uk-padding-remove  uk-flex-middle uk-background-cover uk-background-fixed uk-background-norepeat uk-background-center-center"
  style="background-image: url(<?php echo esc_url($idealx_himg); ?>);">
  <div id="blog-page-header-overlay">
    <div class="uk-container uk-container-expand blog-wrap-header ">
      <!--start Blog Header-->
      <div class="id-bh-inner-wrap">
        <?php if (($post->post_type === 'post' && is_single())) {idealx_get_cattegory();}?>
        <a class=""></a>
        <h1 class="entry-title"> <?php echo esc_html(get_the_title()); ?></h1>
        <div class="id-breadcrumb ">
          <?php idealx_get_breadcrumb();?>
        </div>
        <div class="avatar-post-info vcard author">
          <span class="fn uk-link-reset">
            <?php the_author_posts_link();?>
          </span>
          <?php
$idealx_id_u_time = get_the_time('U');
        $idealx_id_u_modified_time = get_the_modified_time('U');
        if ($idealx_id_u_modified_time >= $idealx_id_u_time + 86400) {
            ?>
          <span class="meta-date date published"> | <i><?php echo get_the_date(); ?></i></span>
          <span
            class="meta-date date updated rich-snippet-hidden"><?php echo esc_html(get_the_modified_time(__('F jS, Y', 'idealx'))); ?></span>
          <?php } else {?>
          <span class="meta-date date updated"> | <i><?php echo get_the_date(); ?></i></span>
          <?php }?>
          <span> <i> | </i>
            <?php comments_number(esc_html__('No Comments', 'idealx'), esc_html__('One Comment', 'idealx'), esc_html__('% Comments', 'idealx'));?></span>
        </div>
      </div>
      <!--/start Blog Header-->
    </div>
  </div>
</div>
<?php
} elseif ($idealx_enable_header !== true && $idealx_featured_options !== true) {?>

<div id="blog-page-header" class=" idealx-page-header-blog uk-section uk-padding-remove">
  <div id="blog-page-header-overlay">
    <div class="uk-container uk-container-expand blog-wrap-header ">
      <!--start Blog Header-->
      <div class="id-bh-inner-wrap">
        <div class="id-cat-post-header">
          <?php if (($post->post_type === 'post' && is_single())) { idealx_get_cattegory() ; }?>
        </div>
        <h1 class="entry-title"> <?php echo esc_html(get_the_title()); ?></h1>
        <div class="id-breadcrumb ">
          <?php idealx_get_breadcrumb();?>
        </div>
        <div class="id-post-info">
          <span class="fn uk-link-reset"><?php the_author_posts_link();?></span>
          <?php

        $idealx_id_u_time = get_the_time('U');
        $idealx_id_u_modified_time = get_the_modified_time('U');

        if ($idealx_id_u_modified_time >= $idealx_id_u_time + 86400) {

            ?>
          <span class="meta-date date published"> | <i><?php echo get_the_date(); ?></i></span>
          <span class="meta-date date updated rich-snippet-hidden"><?php
echo esc_html(get_the_modified_time(__('F jS, Y', 'idealx'))); ?>
          </span>
          <?php
} else {
            ?>
          <span class="meta-date date updated"> | <i><?php echo get_the_date(); ?></i></span>
          <?php }?>
          <span> <i> | </i>
            <?php comments_number(esc_html__('No Comments', 'idealx'), esc_html__('One Comment', 'idealx'), esc_html__('% Comments', 'idealx'));?></span>
        </div>
      </div>
      <!--/Blog Header-->
    </div>
  </div>
</div>
<?php }
} elseif (!empty($idealx_options['transparent-header']) && $idealx_options['transparent-header'] == true) {?>
 <div class="plog-page-header-margin"></div>
 <?php

}
?>