<?php

/**
 * Template Name: Home Template
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

$font = ot_get_option ( 'font_body' );
for($i=1;$i<=6;$i++){
	${'font_h'.$i} = ot_get_option ( 'font_h'.$i);
}
$ot_google_fonts = get_theme_mod( 'ot_google_fonts', array() );
?>


<?php while (have_posts()) : the_post(); ?>

<div class="container section-1">
	<h1>
	  <span>
	   <?php echo ot_get_option ( 'home_hedline', 'Start your WOW SEO adventure. Right Now' )?>
	  </span>

	</h1>
</div>

<div class="content-103 section-2">
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
	<div class="container section-3">
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
<div style="padding-top: 40px; padding-bottom: 40px; margin: 44px 0 44px 0;" class="container-fluid container-2 section-4">
	<div class="row">
		<div style="text-align: right;" class="col-md-4">
		<h2 class="subscribe-text"><?php echo ot_get_option ( 'newsletter_1', 'Subscribe Now!' )?><h2>
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

<div style="margin-top: 40px;" class="container section-5">
	<div class="row">
	<?php echo do_shortcode("[recent]"); ?>
	</div>
</div>


<div style="padding-top: 40px; padding-bottom: 40px; margin: 44px 0 44px 0;" class="container-fluid container-2 section-6">
	<div class="row">
		<div class="col-md-7">
		<h2 style="text-align: center; color: #fff; margin-top: auto !important;"><?php echo ot_get_option ( 'newsletter_1', 'Start Make Money Today' )?><h2>
		</div>
		<div class="col-md-5">
		<h2 style=" color: #fff; margin-top: auto !important;"><?php echo ot_get_option ( 'newsletter_1', 'Contact Now>>' )?><h2>
		</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="container section-7">
	<div class="row">
		<div class="col-md-12">
			<ul class="img-list">
				<li>
					<div class="item">
						<img src="http://nxworld.net/codepen/css-image-hover-effects/pic01.jpg" />
						<span class="text-content"><span>Place Name</span></span>
						<div class="item-overlay top"></div>
					</div>
				</li>
				<li>
					<div class="item">
						<img src="http://nxworld.net/codepen/css-image-hover-effects/pic01.jpg" />
						<span class="text-content"><span>Place Name</span></span>
						<div class="item-overlay top"></div>
					</div>
				</li>
				<li>
					<div class="item">
						<img src="http://nxworld.net/codepen/css-image-hover-effects/pic01.jpg" />
						<span class="text-content"><span>Place Name</span></span>
						<div class="item-overlay top"></div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ul class="img-list">
				<li>
					<div class="item">
						<img src="http://nxworld.net/codepen/css-image-hover-effects/pic01.jpg" />
						<span class="text-content"><span>Place Name</span></span>
						<div class="item-overlay top"></div>
					</div>
				</li>
				<li>
					<div class="item">
						<img src="http://nxworld.net/codepen/css-image-hover-effects/pic01.jpg" />
						<span class="text-content"><span>Place Name</span></span>
						<div class="item-overlay top"></div>
					</div>
				</li>
				<li>
					<div class="item">
						<img src="http://nxworld.net/codepen/css-image-hover-effects/pic01.jpg" />
						<span class="text-content"><span>Place Name</span></span>
						<div class="item-overlay top"></div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>

<div style="margin-top: 40px;" class="container section-8">
	<div class="row">
	<div class="col-md-6">
	<h2><?php echo ot_get_option ( 'contact_h1', 'Contact' )?></h2>
	<p><?php echo ot_get_option ( 'text_contact', ' Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam' )?></p>
	    <p><i class="fa fa-map-pin"></i><?php echo ot_get_option ( 'street_contact', '221B Baker Street, London' )?></p>
        <p><i class="fa fa-phone"></i><?php echo ot_get_option ( 'phone_contact', 'Phone (US) : +91 9999 878 398' )?></p>
        <p><?php if($mail_contact = ot_get_option ( 'mail_contact' ) ) :?><i class="fa fa-envelope"></i><?php echo $mail_contact; ?></p><?php endif; ?>


		</div>



		<div class="col-md-6">
<?php echo do_shortcode( '[contact-form-7 id="66" title="Modulo di contatto 1"]' ); ?>
		</div>
	</div>
</div>

<div class="container hide-mobile section-9">
	<div class="row">
		<div class="col-4 offset-4">
		<span style="margin-top: 90px;">
			<figure class="icon-cards">
			  <div class="icon-cards__content">
			    <div class="icon-cards__item"><i class="fa fa-line-chart" aria-hidden="true"></i><p>SEO Ready</p></div>
			    <div class="icon-cards__item"><i class="fa fa-cubes" aria-hidden="true"></i><p>Solid Template</p></div>
			    <div class="icon-cards__item"><i class="fa fa-heart" aria-hidden="true"></i><p>Powered By Love</p></div>
			  </div>
			</figure>
		</span>
		</div>
	</div>
</div>

