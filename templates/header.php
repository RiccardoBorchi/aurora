<header class="banner">
  <div class="container">
    <div class="row">
        <div class="col-md-5">
            <?php if ( function_exists( 'ot_get_option' ) && ( $logo = ot_get_option( 'pp_logo_upload', 'some-image.png' ) ) != '' ){ ?>
            <div id="logo-section">
                <a href="<?php bloginfo('url'); ?>"><img src="<?php echo esc_attr( $logo ); ?>" class="logo" /></a>
            </div>
            <?php } ?>
        </div>
      <div class="col-md-7">

      <div class="b-nav">
          <?php
            wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
          ?>
      </div>

        <div class="b-container">
          <div class="b-menu">
            <div class="b-bun b-bun--top"></div>
            <div class="b-bun b-bun--mid"></div>
            <div class="b-bun b-bun--bottom"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr />
</header>
