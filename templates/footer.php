<footer class="content-info">
 <div class="container">
    <div class="row">
    <?php
    $footerwidget = ot_get_option('footer_widgets', '1');

    if($footerwidget=='1') : ?>

    <div class="col-md-4 col-sm-6 footerleft ">
        <?php if ( function_exists( 'ot_get_option' ) && ( $logo = ot_get_option( 'ff_logo_upload', 'some-image.png' ) ) != '' ): ?>
            <div id="logo-section">
                <a href="<?php bloginfo('url'); ?>"><img class="img-fluid" src="<?php echo esc_attr( $logo ); ?>" class="logo" /></a>
            </div>
             <?php endif; ?>
        <?php dynamic_sidebar('sidebar-footer'); ?>
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
      <?php dynamic_sidebar('sidebar-footer-2'); ?>

      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
      <?php dynamic_sidebar('sidebar-footer-3'); ?>
      </div>
     <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <div class="wrapper">
          <a href="<?php echo get_page_link(ot_get_option('facebook_link', '#')); ?>"><i class="fa fa-5x fa-facebook-square"></i></a>
          <a href="<?php echo get_page_link(ot_get_option('twitter_link', '#')); ?>"><i class="fa fa-5x fa-twitter-square"></i></a>
          <a href="<?php echo get_page_link(ot_get_option('Instagram_link', '#')); ?>"><i class="fa fa-5x fa-instagram"></i></a>

        </div>
      </div>

    <?php
    elseif($footerwidget=='2') : ?>
      <div class="col-md-4 col-sm-6 footerleft ">
        <?php if ( function_exists( 'ot_get_option' ) && ( $logo = ot_get_option( 'ff_logo_upload', 'some-image.png' ) ) != '' ): ?>
            <div id="logo-section">
                <a href="<?php bloginfo('url'); ?>"><img src="<?php echo esc_attr( $logo ); ?>" class="logo" /></a>
            </div>
             <?php endif; ?>
        <?php dynamic_sidebar('sidebar-footer'); ?>
      </div>
      <div class="col-md-4 col-sm-6 paddingtop-bottom">
      <?php dynamic_sidebar('sidebar-footer-2'); ?>

      </div>
     <div class="col-md-4 col-sm-6 paddingtop-bottom">
        <div class="wrapper">
          <a href="<?php echo get_page_link(ot_get_option('facebook_link', '#')); ?>"><i class="fa fa-5x fa-facebook-square"></i></a>
          <a href="<?php echo get_page_link(ot_get_option('twitter_link', '#')); ?>"><i class="fa fa-5x fa-twitter-square"></i></a>
          <a href="<?php echo get_page_link(ot_get_option('Instagram_link', '#')); ?>"><i class="fa fa-5x fa-instagram"></i></a>
        </div>
      </div>

    <?php
    elseif($footerwidget=='3') : ?>
    <div class="col-md-6 footerleft ">
        <?php if ( function_exists( 'ot_get_option' ) && ( $logo = ot_get_option( 'ff_logo_upload', 'some-image.png' ) ) != '' ): ?>
            <div id="logo-section">
                <a href="<?php bloginfo('url'); ?>"><img src="<?php echo esc_attr( $logo ); ?>" class="logo" /></a>
            </div>
             <?php endif; ?>
        <?php dynamic_sidebar('sidebar-footer'); ?>
      </div>
      <div class="col-md-6 paddingtop-bottom">
      <?php dynamic_sidebar('sidebar-footer-2'); ?>

      </div>

      </div>


    <?php else: ?>


    <?php endif; ?>

    </div>
  </div>
</footer>
<!--footer start from here-->
<div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p><?php echo ot_get_option ( 'copyright_at', '© Copyright 2017 - Andrea Tasselli' )?></p>
    </div>
  </div>
</div>


