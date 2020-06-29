 <?php
 if (!defined('ABSPATH')) {
  exit;
}
  global
$idealx_options?>
  <div class="uk-navbar-container uk-container-expand">
    <div class="user-nav uk-container uk-container-expand">
      <nav class=" uk-visible@s">
        <div class="uk-navbar-left">
          <div class="uk-navbar-item">
            <p><?php if(!empty($idealx_options['user_nav_left_area'])){
              echo esc_html($idealx_options['user_nav_left_area']);
            }else{ esc_html_e( 'yourname@yoursite.com', 'idealx' );}  ?></p>
          </div>
          <div class="uk-navbar-right"><!--Right User-->
            <div class="uk-navbar-item">
            <?php if(!empty($idealx_options['user_nav_right_area'])){
              echo esc_html($idealx_options['user_nav_right_area']);
            }else{ esc_html_e( 'Your Phone Here', 'idealx' );}  ?>
            </div> <!--/Right User-->
          </div>
        </div>
      </nav>
    </div> <!--/div user Navbar -->
  </div> 