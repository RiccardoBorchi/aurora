<?php
/**
 * Template Name: Landing Template
 */
$families = array(
      'arial'     => 'Arial',
      'georgia'   => 'Georgia',
      'helvetica' => 'Helvetica',
      'palatino'  => 'Palatino',
      'tahoma'    => 'Tahoma',
      'times'     => '"Times New Roman", sans-serif',
      'trebuchet' => 'Trebuchet',
      'verdana'   => 'Verdana'
    );
$font = ot_get_option ( 'font_body', '' );
$font_h1 = ot_get_option ( 'font_h1', '' );
$font_h2 = ot_get_option ( 'font_h2', '' );
$font_h3 = ot_get_option ( 'font_h3', '' );
$font_h4 = ot_get_option ( 'font_h4', '' );
$font_h5 = ot_get_option ( 'font_h5', '' );
$ot_google_fonts = get_theme_mod( 'ot_google_fonts', array() );
?>
<style type="text/css">

	body {
	background-color: <?php echo ot_get_option ( 'custom_background_css', '#fff' ); ?>;
	}


	.wpcf7-form input {
	  border:1px solid <?php echo ot_get_option ( 'contact_form_css', '#e93694' ); ?>;
	}


	.wpcf7-form textarea {
	  border:1px solid <?php echo ot_get_option ( 'contact_form_css', '#e93694' ); ?>;
	}

	footer {

		background-color: <?php echo ot_get_option ( 'footer_color', '#e93694' ); ?>;
	}

	.service-post {
    color: <?php echo ot_get_option ( 'color_text_services', '#fff' ); ?>;
    background-color: <?php echo ot_get_option ( 'color_background_services', 'a979b7' ); ?>;
	}

	.content-103 .service-hover {
	  background: <?php echo ot_get_option ( 'hover_service', '#eb7a5c' ); ?>;
	}

	.content-103 .service-icon i {
	  font-size: 18px;
	  color: <?php echo ot_get_option ( 'icon_color', '#eb7a5c' ); ?> !important;
	}

	.content-103 .service-icon {

    border: 2px solid <?php echo ot_get_option ( 'icon_color', '#eb7a5c' ); ?>;
	}

	h1 span {
	  box-shadow:
	    10px 0 0 <?php echo ot_get_option ( 'hedline_color', '#a979b7' ); ?>,
	    -10px 0 0 <?php echo ot_get_option ( 'hedline_color', '#a979b7' ); ?>;
	  background: <?php echo ot_get_option ( 'hedline_color', '#a979b7' ); ?>;
	  color: <?php echo ot_get_option ( 'color_text_home_h1', '#fff' ); ?>;
	}

	body{
	    font-family: '<?php echo isset($families[$font['font-family']]) ? $families[$font['font-family']] : $ot_google_fonts[$font['font-family']]['family'] ;  ?>';
	    font-style: <?php if($font['font-style']){echo $font['font-style'] ;} ?>;
		font-size: <?php if($font['font-size']){echo $font['font-size'] ;} ?>;
		font-variant: <?php if($font['font-variant']){echo $font['font-variant'] ;} ?>;
		font-weight: <?php if($font['font-weight']){echo $font['font-weight'] ;} ?>;
		letter-spacing: <?php if($font['letter-spacing']){echo $font['letter-spacing'] ;} ?>;
		line-height: <?php if($font['line-height']){echo $font['line-height'] ;} ?>;
		text-decoration: <?php if($font['text-decoration']){echo $font['text-decoration'] ;} ?>;
		text-transform: <?php if($font['text-transform']){echo $font['text-transform'] ;} ?>;
		color: <?php if($font['font-color']){echo $font['font-color'] ;} ?>;
	}

	h1 {
	    font-family: '<?php echo isset($families[$font_h1['font-family']]) ? $families[$font_h1['font-family']] : $ot_google_fonts[$font_h1['font-family']]['family'] ;  ?>';
	    font-style: <?php if($font_h1['font-style']){echo $font_h1['font-style'] ;} ?>;
		font-size: <?php if($font_h1['font-size']){echo $font_h1['font-size'] ;} ?>;
		font-variant: <?php if($font_h1['font-variant']){echo $font_h1['font-variant'] ;} ?>;
		font-weight: <?php if($font_h1['font-weight']){echo $font_h1['font-weight'] ;} ?>;
		letter-spacing: <?php if($font_h1['letter-spacing']){echo $font_h1['letter-spacing'] ;} ?>;
		line-height: <?php if($font_h1['line-height']){echo $font_h1['line-height'] ;} ?>;
		text-decoration: <?php if($font_h1['text-decoration']){echo $font_h1['text-decoration'] ;} ?>;
		text-transform: <?php if($font_h1['text-transform']){echo $font_h1['text-transform'] ;} ?>;
		color: <?php if($font_h1['font-color']){echo $font_h1['font-color'] ;} ?>;
	}

	h2 {
	    font-family: '<?php echo isset($families[$font_h2['font-family']]) ? $families[$font_h2['font-family']] : $ot_google_fonts[$font_h2['font-family']]['family'] ;  ?>';
	    font-style: <?php if($font_h2['font-style']){echo $font_h2['font-style'] ;} ?>;
		font-size: <?php if($font_h2['font-size']){echo $font_h2['font-size'] ;} ?>;
		font-variant: <?php if($font_h2['font-variant']){echo $font_h2['font-variant'] ;} ?>;
		font-weight: <?php if($font_h2['font-weight']){echo $font_h2['font-weight'] ;} ?>;
		letter-spacing: <?php if($font_h2['letter-spacing']){echo $font_h2['letter-spacing'] ;} ?>;
		line-height: <?php if($font_h2['line-height']){echo $font_h2['line-height'] ;} ?>;
		text-decoration: <?php if($font_h2['text-decoration']){echo $font_h2['text-decoration'] ;} ?>;
		text-transform: <?php if($font_h2['text-transform']){echo $font_h2['text-transform'] ;} ?>;
		color: <?php if($font_h2['font-color']){echo $font_h2['font-color'] ;} ?>;
	}

	h3 {
	    font-family: '<?php echo isset($families[$font_h3['font-family']]) ? $families[$font_h3['font-family']] : $ot_google_fonts[$font_h3['font-family']]['family'] ;  ?>';
	    font-style: <?php if($font_h3['font-style']){echo $font_h3['font-style'] ;} ?>;
		font-size: <?php if($font_h3['font-size']){echo $font_h3['font-size'] ;} ?>;
		font-variant: <?php if($font_h3['font-variant']){echo $font_h3['font-variant'] ;} ?>;
		font-weight: <?php if($font_h3['font-weight']){echo $font_h3['font-weight'] ;} ?>;
		letter-spacing: <?php if($font_h3['letter-spacing']){echo $font_h3['letter-spacing'] ;} ?>;
		line-height: <?php if($font_h3['line-height']){echo $font_h3['line-height'] ;} ?>;
		text-decoration: <?php if($font_h3['text-decoration']){echo $font_h3['text-decoration'] ;} ?>;
		text-transform: <?php if($font_h3['text-transform']){echo $font_h3['text-transform'] ;} ?>;
		color: <?php if($font_h3['font-color']){echo $font_h3['font-color'] ;} ?>;
	}

	h4 {
	    font-family: '<?php echo isset($families[$font_h4['font-family']]) ? $families[$font_h4['font-family']] : $ot_google_fonts[$font_h4['font-family']]['family'] ;  ?>';
	    font-style: <?php if($font_h4['font-style']){echo $font_h4['font-style'] ;} ?>;
		font-size: <?php if($font_h4['font-size']){echo $font_h4['font-size'] ;} ?>;
		font-variant: <?php if($font_h4['font-variant']){echo $font_h4['font-variant'] ;} ?>;
		font-weight: <?php if($font_h4['font-weight']){echo $font_h4['font-weight'] ;} ?>;
		letter-spacing: <?php if($font_h4['letter-spacing']){echo $font_h4['letter-spacing'] ;} ?>;
		line-height: <?php if($font_h4['line-height']){echo $font_h4['line-height'] ;} ?>;
		text-decoration: <?php if($font_h4['text-decoration']){echo $font_h4['text-decoration'] ;} ?>;
		text-transform: <?php if($font_h4['text-transform']){echo $font_h4['text-transform'] ;} ?>;
		color: <?php if($font_h4['font-color']){echo $font_h4['font-color'] ;} ?>;
	}

	h5 {
	    font-family: '<?php echo isset($families[$font_h5['font-family']]) ? $families[$font_h5['font-family']] : $ot_google_fonts[$font_h5['font-family']]['family'] ;  ?>';
	    font-style: <?php if($font_h5['font-style']){echo $font_h5['font-style'] ;} ?>;
		font-size: <?php if($font_h5['font-size']){echo $font_h5['font-size'] ;} ?>;
		font-variant: <?php if($font_h5['font-variant']){echo $font_h5['font-variant'] ;} ?>;
		font-weight: <?php if($font_h5['font-weight']){echo $font_h5['font-weight'] ;} ?>;
		letter-spacing: <?php if($font_h5['letter-spacing']){echo $font_h5['letter-spacing'] ;} ?>;
		line-height: <?php if($font_h5['line-height']){echo $font_h5['line-height'] ;} ?>;
		text-decoration: <?php if($font_h5['text-decoration']){echo $font_h5['text-decoration'] ;} ?>;
		text-transform: <?php if($font_h5['text-transform']){echo $font_h5['text-transform'] ;} ?>;
		color: <?php if($font_h5['font-color']){echo $font_h5['font-color'] ;} ?>;
	}

</style>

<?php while (have_posts()) : the_post(); ?>

<h1>
  <span>
   <?php echo ot_get_option ( 'home_hedline', 'Start your WOW SEO adventure. Right Now' )?>
  </span>
</h1>

<div class="content-103">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="service-post">
					<a class="white-text" href="<?php echo get_page_link(ot_get_option('link_left', '#')); ?>">
					<div class="service-content">
						<div class="service-icon">
								<i class="fa fa-share-alt"></i>
						</div> <!-- service-icon -->
						<h3 class="service-title"><?php echo ot_get_option ( 'h1_left', 'Advertising' )?></h3>
						<p class="service-description"><?php echo ot_get_option ( 'h2_left', 'Lorem Ipsum' )?></p>
					</div> <!-- service-content --></a>
					<div class="service-hover"></div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="service-post">
					<a class="white-text" href="<?php echo get_page_link(ot_get_option('link_center', '#')); ?>">
					<div class="service-content">
						<div class="service-icon">
								<i class="fa fa-pencil"></i>
						</div> <!-- .s-icon -->
						<h3 class="service-title"><?php echo ot_get_option ( 'h1_center', 'Branding Design' )?></h3>
						<p class="service-description"><?php echo ot_get_option ( 'h2_center', 'Lorem Ipsum' )?></p>
					</div> <!-- service-content --></a>
					<div class="service-hover"></div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="service-post">
					<a class="white-text" href="<?php echo get_page_link(ot_get_option('link_right', '#' )); ?>">
					<div class="service-content">
						<div class="service-icon">
								<i class="fa fa-lightbulb-o"></i>
						</div> <!-- .s-icon -->
						<h3 class="service-title"><?php echo ot_get_option ( 'h1_right', 'Creative Marketing' )?></h3>
						<p class="service-description"><?php echo ot_get_option ( 'h2_right', 'Lorem Ipsum' )?></p>
					</div> <!-- service-content --></a>
					<div class="service-hover"></div>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="counter" data-count="<?php echo ot_get_option ( 'ore_1', '150' )?>">0</div>
				<h4 style="text-align: center;"><?php echo ot_get_option ( 'coffe_1', 'Work hours' )?></h4>
			</div>
			<div class="col-md-4">
				<div class="counter" data-count="<?php echo ot_get_option ( 'ore_2', '20' )?>">0</div>
				<h4 style="text-align: center;"><?php echo ot_get_option ( 'coffe_2', 'Projects in progress' )?></h4>
			</div>
			<div class="col-md-4">
				<div class="counter" data-count="<?php echo ot_get_option ( 'ore_3', '190' )?>">0</div>
				<h4 style="text-align: center;"><?php echo ot_get_option ( 'coffe_3', 'Drinking coffee' )?></h4>
			</div>
			</div>
		</div>
	</div>

	<!-- Begin MailChimp Signup Form -->
<div style="padding-top: 20px; padding-bottom: 20px; margin-top: 44px;" class="container container-2">
	<div class="row">
		<div style="text-align: right;" class="col-md-4">
		<h2 style="color: #fff; margin-top: auto !important;"><?php echo ot_get_option ( 'newsletter_1', 'Subscribe Now!' )?><h2>
		</div>
		<div class="col-md-8">
			<div  id="mc_embed_signup">
				<form action="<?php echo ot_get_option ( 'form_action', '#' )?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">

					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
				    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_00dd953dd1a287bdc6d4a67e6_32b6357816" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				    </div>
				</form>
			</div>
		</div>
	</div>
</div>


<!--End mc_embed_signup-->
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div style="margin-top: 40px;" class="container">
	<div class="row">
	<?php echo do_shortcode("[recent]"); ?>
	</div>
</div>


<div style="margin-top: 40px;" class="container">
	<div class="row">
	<div class="col-md-6">
	<h2><?php echo ot_get_option ( 'contact_h1', 'Contact' )?></h2>
	<p><?php echo ot_get_option ( 'text_contact', ' Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam' )?></p>
	    <p><i class="fa fa-map-pin"></i><?php echo ot_get_option ( 'street_contact', '221B Baker Street, London' )?></p>
        <p><i class="fa fa-phone"></i><?php echo ot_get_option ( 'phone_contact', 'Phone (US) : +91 9999 878 398' ); ?></p>
        <p><?php if($mail_contact = ot_get_option ( 'mail_contact' ) ) :?><i class="fa fa-envelope"></i><?php echo $mail_contact; ?></p>
		</div>
		<div class="col-md-6">
		<?php echo do_shortcode( '[contact-form-7 id="66" title="Modulo di contatto 1"]' ); ?>
		</div>
	</div>
</div>

