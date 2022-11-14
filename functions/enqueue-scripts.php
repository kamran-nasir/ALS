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

	wp_enqueue_style(
		'skeleton-style',
		get_stylesheet_uri(),
		array(),
		filemtime( get_template_directory() . '/style.css' )
	);

	wp_enqueue_style(
		'mapbox-style',
		'https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css',
		array(),
		'2.0',
		true
	);

	// load style-rtl for rtl languages
	// wp_style_add_data( 'skeleton-style', 'rtl', 'replace' );

	wp_enqueue_script(
		'mapbox-script',
		'https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js',
		array(),
		'2.0',
		true
	);

	wp_enqueue_script(
		'skeleton-plugins',
		get_template_directory_uri() . '/js/plugins.js',
		array('jquery'),
		filemtime( get_template_directory() . '/js/plugins.js' ),
		true
	);

	// localize scripts
	wp_localize_script(
		'skeleton-plugins', // file name without extension where we want to use the localize_var
		'localize_var',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			// security
			'nonce'    => wp_create_nonce( 'nonce_name' ),
		)
	);

}
add_action('wp_enqueue_scripts', 'skel_enqueue_scripts');
?>
