<?php

// Hide admin toolbar
////////////////////////////////////////////////
add_filter('show_admin_bar', '__return_false');


// Disable WordPress all sitemaps - /wp-sitemap.xml
////////////////////////////////////////////////
add_filter('wp_sitemaps_enabled', '__return_false');


// Disable image compression in WordPress
// WordPress sets it to 82% by default
////////////////////////////////////////////////
add_filter('jpeg_quality', function($arg){return 100;});


/* ======================================================
=            Disable file editor in backend            =
====================================================== */
// define('DISALLOW_FILE_EDIT', TRUE);


/*----------  Enable login captcha  ----------*/
// function is_login_page() {
// 	return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
// }
// if ( is_login_page() ) {
// 	require_once( get_template_directory() . '/functions/captcha.php' );
// }



// Add attributes to enqueue styles
////////////////////////////////////////////////
/* DO NOT USE with Autoptimizer or any contact plugin */
// function add_style_attribute($tag, $handle) {
//   if ( 'google-fonts' !== $handle )
//       return $tag;
//   return str_replace( " rel='stylesheet'", " rel='preload'", $tag );
// }
// add_filter('style_loader_tag', 'add_style_attribute', 10, 2);


// Remove jquery migrate
////////////////////////////////////////////////
// Not useful if autoptimize is enabled
function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
	}
}
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );


// Remove query string from static files
////////////////////////////////////////////////
// function skel_remove_cssjs_ver( $src ) {
//  if( strpos( $src, '?ver=' ) )
//  $src = remove_query_arg( 'ver', $src );
//  return $src;
// }
// add_filter( 'style_loader_src', 'skel_remove_cssjs_ver', 10, 2 );
// add_filter( 'script_loader_src', 'skel_remove_cssjs_ver', 10, 2 );


// Redirect to result, if search query one result
////////////////////////////////////////////////
// function skel_redirect_single_post() {
// 	if (is_search()) {
// 		global $wp_query;
// 		if ($wp_query->post_count == 1 && $wp_query->max_num_pages == 1) {
// 			wp_redirect(get_permalink($wp_query->posts['0']->ID));
// 			exit;
// 		}
// 	}
// }
// add_action('template_redirect', 'skel_redirect_single_post');


// Limit search results to post
////////////////////////////////////////////////
// http://www.wpbeginner.com/wp-tutorials/how-to-limit-search-results-for-specific-post-types-in-wordpress/*/
// function searchfilter($query) {
// 	if ($query->is_search && !is_admin() ) {
// 			$query->set('post_type',array('post'));
// 	}
// 	return $query;
// }
// add_filter('pre_get_posts','searchfilter');


// Add attributes to enqueue scripts
////////////////////////////////////////////////
// function add_script_attribute($tag, $handle) {
// 	if ( 'modernizr' !== $handle )
// 			return $tag;
// 	return str_replace( ' src', ' async="async" src', $tag );
// }
// add_filter('script_loader_tag', 'add_script_attribute', 10, 2);


////////////////////////////////////////////////
//! REQUIRED - Do not edit below
////////////////////////////////////////////////

// Defer scripts
////////////////////////////////////////////////
// Add defer attribute to the scripts to set the resource priority to low
function skel_defer_scripts( $tag, $handle, $src ) {
  $defer = array(
    'plugins',
    'custom',
  );
  if ( in_array( $handle, $defer ) ) {
     return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
  }
    return $tag;
}
add_filter( 'script_loader_tag', 'skel_defer_scripts', 10, 3 );


// Wrap oEmbed resource/video inside a div
////////////////////////////////////////////////
function skel_embed_oembed_html($html, $url, $attr, $post_id) {
  return '<div class="embed-responsive embed-responsive-16by9">' . $html . '</div>';
}
add_filter('embed_oembed_html', 'skel_embed_oembed_html', 99, 4);


// Add body classes to editor
////////////////////////////////////////////////
function skel_mce_settings($initArray) {
  $initArray['body_class'] = 'post';
  return $initArray;
}
add_filter('tiny_mce_before_init', 'skel_mce_settings');


// Add page slug to body class
////////////////////////////////////////////////
function skel_add_slug_body_class($classes) {
  global $post;
  if (isset($post)) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
  return $classes;
}
add_filter('body_class', 'skel_add_slug_body_class');


// Prevent WP Editor from removing span
////////////////////////////////////////////////
function skel_no_delete_span($init) {
  // Command separated string of extended elements
  $ext = 'span[id|name|class|style]';

  // Add to extended_valid_elements if it alreay exists
  if (isset($init['extended_valid_elements'])) {
    $init['extended_valid_elements'] .= ',' . $ext;
  } else {
    $init['extended_valid_elements'] = $ext;
  }

  // Super important: return $init!
  return $init;
}
add_filter('tiny_mce_before_init', 'skel_no_delete_span');


// Custom login errors
////////////////////////////////////////////////
function skel_custom_wordpress_errors() {
  return 'Something is wrong!';
}
add_filter('login_errors', 'skel_custom_wordpress_errors');


// Change default excerpt length
////////////////////////////////////////////////
function skel_get_the_excerpt_length() {
  return 150; // Default Length
}
add_filter('excerpt_length', 'skel_get_the_excerpt_length');


// Add ellipsis at the end of excerpt
////////////////////////////////////////////////
function skel_get_the_excerpt_more( $more ) {
  return '... ';
}
add_filter('excerpt_more', 'skel_get_the_excerpt_more');

?>