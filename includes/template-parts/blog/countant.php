<?php
/**
 * 
 * blog home countant
 */
if (!defined('ABSPATH')) {
  exit;
}
global $idealx_category,$idealx_card;?>
<article <?php post_class('idealx-article uk-article'); ?> id='article'>
  <div class="article-inner-wrap">
    <div class="article-post-content">
      <div>
        <div class="uk-card <?php echo esc_html($idealx_card) ;?>">
        <?php if ( has_post_thumbnail()) { ?>
          <div class="uk-card-media-top">
            <img src="<?php
                $idealx_featured_img_url = get_the_post_thumbnail_url();
                echo esc_url($idealx_featured_img_url) ; ?>" alt="">
          </div>
        <?php } ?>
          <div class="uk-card-body">
            <h3 class="uk-article-title"><a class="uk-link-reset" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="uk-grid-collapse uk-child-width-expand@s" uk-grid>
              <div>
                <p class="uk-article-meta id-post-meta">
                  <span uk-icon="icon: bookmark "></span> <?php   idealx_idealx_get_primary_category($idealx_category); ?>
                </p>
              </div>
              <div>
                <p class="uk-article-meta id-post-meta">
                  <span uk-icon="icon: calendar "></span>
                  <?php echo  esc_html(the_time('F d,y')) ;?>
                </p>
              </div>
              <div>
                <p class="uk-article-meta id-post-meta">
                  <span uk-icon="icon: comment"></span>
                  <a class="" href="<?php the_permalink(); ?>#comments">
                    <?php comments_number(esc_html__('No Comments','idealx'), esc_html__('One Comment', 'idealx'), esc_html__('% Comments', 'idealx') );?>
                  </a>
                </p>
              </div>
            </div>
            <div class="id-excerpt uk-margin-smal-top">
              <?php  the_excerpt( sprintf(
/* translators: draft saved date format, see http://php.net/date */
              __( 'Continue reading %s', 'idealx' ),
              the_title( '<span class="screen-reader-text">', '</span>', false )
            ) ); ?>
            </div>
            <div class="id-rea-more">
              <a class="uk-button uk-button-text" href="<?php echo esc_url(get_permalink()); ?> ">
                <?php echo esc_html__( 'Read More', 'idealx' ) ; ?> </a>
                
            </div>
            <div class="uk-card-footer">
              <div class="uk-grid-collapse uk-child-width-1-2" uk-grid>
                <div>
                  <p class="uk-article-meta id-post-meta">
                    <?php echo esc_html__('By','idealx') .': ' ;?><?php the_author_posts_link(); ?>
                  </p>
                </div>
                <div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/article-post-content-->
  </div>
</article>