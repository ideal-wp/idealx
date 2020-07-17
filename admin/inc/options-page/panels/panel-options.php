<?php
// Exit if accessed this directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( 'Kirki' ) ) {

  $idealx_is_disabled = 'isDisabled';

} else {

	$idealx_is_disabled = 'isactive';
}
?>
<div class="uk-container admin-options-container">

  <h3><?php esc_html_e( 'Quick Links to Customizer Settings:', 'idealx' ); ?></h3>

  <div class="uk-text-center" uk-grid>

    <div class="uk-width-3-4">

      <div class="uk-text-center" uk-grid>

        <div class="uk-width-1-2">

          <div class=" uk-card uk-card-primary uk-text-left">

            <div class=" uk-card-body">

              <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>

                <li>

                  <a
                    href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=home_hero_callout_section' ) ); ?>"><span
                      class="uk-margin-small-right" uk-icon="icon: table"></span>
                    <?php esc_html_e( 'Home Hero Section', 'idealx' ); ?></a>

                </li>

                <li>

                   <a class="<?php echo esc_html( $idealx_is_disabled ); ?>" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=general_settings_panel' ) ); ?>"><span class="uk-margin-small-right" uk-icon="icon: table"></span> <?php esc_html_e( 'General Settings ', 'idealx' ); ?></a>

                </li>

                <li>

                 <!-- <a class="<?php //echo esc_html( $idealx_is_disabled ); ?>"
                    href="<?php //echo esc_url( admin_url( 'customize.php?autofocus[panel]=-menu_settings_panel' ) ); ?>"><span
                      class="uk-margin-small-right" uk-icon="icon: table"></span>
                    <?php //esc_html_e( 'Menu & Navigation', 'idealx' ); ?></a>-->

                </li>

                <li><a class="<?php echo esc_html( $idealx_is_disabled ); ?>"
                    href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=typography_settings' ) ); ?>"><span
                      class="uk-margin-small-right" uk-icon="icon: table"></span>
                    <?php esc_html_e( 'Typography', 'idealx' ); ?></a>

                </li>

              </ul>

            </div>

          </div>

        </div>

        <div class="uk-width-1-2">

          <div class=" uk-card uk-card-primary uk-text-left">

            <div class=" uk-card-body">

              <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>

                <li>

                  <a class="<?php echo esc_html( $idealx_is_disabled ); ?>"
                    href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=page_header' ) ); ?>"><span
                      class="uk-margin-small-right" uk-icon="icon: table"></span>
                    <?php esc_html_e( 'Pages Header', 'idealx' ); ?></a>

                </li>

                <li>

                  <a class="<?php echo esc_html( $idealx_is_disabled ); ?>"
                    href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=sidebar_settings_panel' ) ); ?>"><span
                      class="uk-margin-small-right"
                      uk-icon="icon: table"></span><?php esc_html_e( 'Sidebar', 'idealx' ); ?></a>

                </li>

                <li>

                 <a class="<?php echo esc_html( $idealx_is_disabled ); ?>"
                    href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=blog_settings_panel' ) ); ?>"><span
                      class="uk-margin-small-right" uk-icon="icon: table"></span>
                    <?php esc_html_e( 'Blog', 'idealx' ); ?></a> 

                </li>

                <li>

                <!--  <a class="<?php //echo esc_html( $idealx_is_disabled ); ?>"
                    href="<?php //echo esc_url( admin_url( 'customize.php?autofocus[panel]=page_settings_panel' ) ); ?>"><span
                      class="uk-margin-small-right" uk-icon="icon: table"></span>
                    <?php //esc_html_e( 'Page Styling', 'idealx' ); ?></a> -->

                </li>
              </ul>
            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="uk-width-1-4">
      <?php if ( ! class_exists( 'Kirki' ) ) { ?>

      <div class="uk-card uk-card-default uk-card-body">
        <span class="icon-admin-kirki-ero-no uk-icon-button" uk-icon="icon: warning; ratio: 5.5"></span>
        <a href="<?php echo esc_url( admin_url( 'themes.php?page=tgmpa-install-plugins&plugin_status=activate' ) ); ?>">
          <?php esc_html_e( 'Please active or instal Kirki Plugin to use The full Options', 'idealx' ); ?></a>
      </div>

      <?php } ?>
    </div>

  </div>

</div>