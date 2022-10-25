<?php
function skel_enqueue_scripts() {

	/* Do not load in backend */
	if (is_admin()) return;

	// load jquery at bottom
	// https://wordpress.stackexchange.com/questions/173601/enqueue-core-jquery-in-the-footer
	// ths will break gravity forms on some pages, be careful
	wp_scripts()->add_data( 'jquery', 'group', 1 );
	wp_scripts()->add_data( 'jquery-core', 'group', 1 );

	/* wp_enqueue_script(
		'identifier',
		'url',
		'dependency',
		'version',
		load_in_footer_boolean
	); */

	// version using WP function is not working correctly so we have add it to the file itself
	wp_enqueue_style(
		'skeleton-style',
		get_stylesheet_uri(),
		array(),
		filemtime( get_template_directory() . '/style.css' )
	);

  // load style-rtl for rtl languages
  wp_style_add_data( 'skeleton-style', 'rtl', 'replace' );

  wp_enqueue_script(
    'modernizr',
    get_template_directory_uri() . '/js/vendor/modernizr-3.6.0.min.js'
  );

  wp_enqueue_script(
    'plugins',
    get_template_directory_uri() . '/js/plugins.js',
    array('jquery'),
    filemtime( get_template_directory() . '/js/plugins.js' ),
    true
  );

	wp_enqueue_style( 'icomoon-icon', get_template_directory_uri() . '/fonts/icons/style.css', null, '', 'all' );

	/* First argument is the handle where it is used */
	wp_localize_script('custom', 'localize_var', array(
		'adminUrl' => admin_url('admin-ajax.php'),
	));

	wp_localize_script('plugins', 'restObj', array(
		'restUrl' => rest_url(),
		'restNonce' => wp_create_nonce('wp_rest')
	));

	// wp_enqueue_script(
	//   'custom',
	//   get_template_directory_uri() . '/js/custom.js',
	//   array('jquery', 'plugins'),
	//   filemtime( get_template_directory() . '/js/custom.js' ),
	//   true
	// );

	// localize scripts
	// wp_localize_script(
	//   'custom',
	//   'localize_var',
	//   array(
	//     'ajax_url' => admin_url( 'admin-ajax.php' ),
	//     // security
	//     'nonce'    => wp_create_nonce( 'nonce_name' ),
	//   )
	// );

}
add_action('wp_enqueue_scripts', 'skel_enqueue_scripts');
?>
