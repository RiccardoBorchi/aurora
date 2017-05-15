<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Add support for custom header.
add_theme_support( 'custom-header', array(
  'width'           => 600,
  'height'          => 160,
  'header-selector' => '.site-title a',
  'header-text'     => false,
  'flex-height'     => true,
) );

function my_recent_post()
 {
  global $post;

  $html = "";

  $my_query = new WP_Query( array(
       'post_type' => 'post',
       'posts_per_page' => 4
  ));

  if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
       $html .= <<<_EOF

      <div class="col-md-4">
_EOF;
       $html .= "<h2 class=\"media-margin\">" . get_the_title() . " </h2>";
       $html .= "<img class=\"img-fluid\" src=\">" . get_the_post_thumbnail() . " ";
       $html .= "<p>" . get_the_excerpt() . "</p>";
       $html .= "<i style=\"float: left\" class=\"fa fa-user-o\" aria-hidden=\"true\"></i><p >" . get_the_date() . "</p>";
       $html .= "<i style=\"float: left\" class=\"fa fa-calendar\" aria-hidden=\"true\"></i><p >" . get_the_author() . "</p>";
       $html .= "<a href=\"" . get_permalink() . "\" class=\"btn btn-default waves-effect waves-light\">Read more</a>";


       $html .= <<<_EOF

      </div>
_EOF;

  endwhile; wp_reset_postdata(); endif;


  return $html;
 }
 add_shortcode( 'recent', 'my_recent_post' );


function custom_excerpt_more($more) {
   global $post;
   $more_text = '';
   return '… <a href="'. get_permalink($post->ID) . '">' . $more_text . '</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');




// Aggiunta del menu Wordpress
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu'  => __( 'Header Menu' ),
      'menu_class'   => 'menu',
      'container_id' => 'menu-id',
    )
  );
}
add_action( 'init', 'register_my_menus' );

//* CSS ADMIN AREA
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '
  <style>
    body, td, textarea, input, select {
      font-family: "Lucida Grande";
      font-size: 12px;
    }

  #option-tree-header {
        background: #e93694;
      color: #fff;
      display: block;
      margin: 11px 5px 0 2px;
      min-width: 535px;
      overflow: hidden;
      position: relative;
      -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.05);
      -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.05);
      box-shadow: 0 1px 3px rgba(0,0,0,0.05);
      -webkit-border-radius: 2px 2px 0 0;
      -moz-border-radius: 2px 2px 0 0;
      border-radius: 20px 20px 2px 2px;
  }

  #option-tree-header #option-tree-version span, #option-tree-header #theme-version span {
      border-left: 1px solid #d2ac65;
    }
    #option-tree-sub-header {
      background: #b585bb;
      border-radius: 2px 2px 20px 20px;
  }

  .wp-core-ui .button-primary {
      background: #e93694;
      border-color: #b19053 #ab843c #ab843c;
      -webkit-box-shadow: 0 1px 0 #ab843c;
      box-shadow: 0 1px 0 #ab843c;
      color: #fff;
      text-decoration: none;
      text-shadow: 0 -1px 1px #ab843c, 1px 0 1px #ab843c, 0 1px 1px #ab843c, -1px 0 1px #ab843c;
  }



  </style>';
}


