<?php
header( "Content-type: text/css; charset: UTF-8" );

?>

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

	<?php if($font) :?>

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

	<?php endif; ?>

	<?php for($i=1;$i<=6;$i++) : ?>

	<?php if( !${'font_h'.$i} ) continue; ?>

	h<?php echo $i; ?>  {
	    font-family: '<?php echo isset($families[${'font_h'.$i}['font-family']]) ? $families[${'font_h'.$i}['font-family']] : $ot_google_fonts[${'font_h'.$i}['font-family']]['family'] ;  ?>';
	    font-style: <?php if(${'font_h'.$i}['font-style']){echo ${'font_h'.$i}['font-style'] ;} ?>;
		font-size: <?php if(${'font_h'.$i}['font-size']){echo ${'font_h'.$i}['font-size'] ;} ?>;
		font-variant: <?php if(${'font_h'.$i}['font-variant']){echo ${'font_h'.$i}['font-variant'] ;} ?>;
		font-weight: <?php if(${'font_h'.$i}['font-weight']){echo ${'font_h'.$i}['font-weight'] ;} ?>;
		letter-spacing: <?php if(${'font_h'.$i}['letter-spacing']){echo ${'font_h'.$i}['letter-spacing'] ;} ?>;
		line-height: <?php if(${'font_h'.$i}['line-height']){echo ${'font_h'.$i}['line-height'] ;} ?>;
		text-decoration: <?php if(${'font_h'.$i}['text-decoration']){echo ${'font_h'.$i}['text-decoration'] ;} ?>;
		text-transform: <?php if(${'font_h'.$i}['text-transform']){echo ${'font_h'.$i}['text-transform'] ;} ?>;
		color: <?php if(${'font_h'.$i}['font-color']){echo ${'font_h'.$i}['font-color'] ;} ?>;
	}

	<?php endfor; ?>
	</style>