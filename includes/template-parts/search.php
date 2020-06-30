<?php
/**
 * 
 * Search results countant
 */
if (!defined('ABSPATH')) {
  exit;
}
global $idealx_card;?>
<article  id='article' <?php post_class('idealx-article uk-article'); ?>>
  <div class="article-inner-wrap">
    <div class="article-post-content">
      <div class="uk-card <?php echo  esc_html($idealx_card) ;?>">
        <div class="uk-card-body">

          <h3 class="uk-article-title">
            <a class="uk-link-reset" href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>

          <div class="id-excerpt uk-margin-smal-top">
            <?php  the_excerpt( sprintf(
              __( '&#26;', 'idealx' ),
              the_title( '<span class="screen-reader-text">', '</span>', false )
            ) ); ?>
          </div>

          <div class="id-rea-more">
            <a class="uk-button uk-button-text" href="<?php echo esc_url(get_permalink()); ?> ">
              <?php echo esc_html__( 'Read More', 'idealx' ) ; ?> </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</article>