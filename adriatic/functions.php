<?php 

require_once('wp-bootstrap-navwalker.php');

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Primary Menu' ),
      'top-menu' => __( 'Top Menu' ),
      'left-menu' => __( 'Locations Left Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => 'Top Footer',
			'id' => 'footer-link',
			'description' => 'Top Footer',
			'before_widget' => '<div id="%1$s" class="col-md-3">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));
	}

	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => 'Top Header',
			'id' => 'header-area',
			'description' => 'Top Header',
			'before_widget' => '<div id="%1$s" class="widget %2$s substitute_widget_class">',
			'after_widget' => '</div>',
			'before_title' => '',
			'after_title' => ''
		));
	}

add_theme_support( 'post-thumbnails', array( 'post', 'page', 'products') );
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
add_image_size( 'product-gallery', 150, 100 ); // Soft Crop Mode
function remove_width_attribute( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

add_theme_support('post-thumbnails');

function so23698827_add_rewrite_rules( $rules ) {
  $new = array();
  $new['products/([^/]+)/(.+)/?$'] = 'index.php?products=$matches[2]';
  $new['category/(.+)/?$'] = 'index.php?category=$matches[1]';

  return array_merge( $new, $rules );
}
add_filter( 'rewrite_rules_array', 'so23698827_add_rewrite_rules' );

function so23698827_filter_post_type_link( $link, $post ) {
  if ( $post->post_type == 'products' ) {
    if ( $cats = get_the_terms( $post->ID, 'category' ) ) {
      $link = str_replace( '%prod_category%', current( $cats )->slug, $link );
    }
  }
  return $link;
}
add_filter( 'post_type_link', 'so23698827_filter_post_type_link', 10, 2 );

/* page title shortcode */

function myshortcode_title( ){
   return get_the_title();
}
add_shortcode( 'page_title', 'myshortcode_title' );


?>