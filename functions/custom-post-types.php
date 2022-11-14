<?php

/*=============================================
=            Post Type - Team                 =
=============================================*/
function skel_create_post_type() {

	$cpt_team_labels = array(
		'name'               => __( 'Team' ),
		'all_items'          => __( 'All Members' ),
		'singular_name'      => __( 'Member'  ),
		'add_new'            => __('Add New' ),
		'add_new_item'       => __('Add New Member' ),
		'edit_item'          => __('Edit Member' ),
		'new_item'           => __('New Member' ),
		'view_item'          => __('View Member' ),
		'search_items'       => __('Search Members' ),
		'not_found'          =>  __('No Member found' ),
		'not_found_in_trash' => __('No Member found in Trash' ),
		'parent_item_colon'  => ''
	);

	$cpt_team_args = array(
		'labels'              => $cpt_team_labels,
		'public'              => false, // archive and single
		'show_ui'             => true, // manage single post from backend
		'hierarchical'        => true, // simple page ordering
		'has_archive'         => false, // pagination & archive page
		'menu_position'       => 20, // below pages
		'menu_icon'           => 'dashicons-admin-users', //defaults to post icon
		'supports'            => array('title','editor','thumbnail','page-attributes', 'custom-fields'),
		// enable gutenberg
		// 'show_in_rest' => true,
	);

	$cpt_news_labels = array(
		'name'               => __( 'News' ),
		'all_items'          => __( 'All News' ),
		'singular_name'      => __( 'News'  ),
		'add_new'            => __('Add New' ),
		'add_new_item'       => __('Add New News' ),
		'edit_item'          => __('Edit News' ),
		'new_item'           => __('New News' ),
		'view_item'          => __('View News' ),
		'search_items'       => __('Search News' ),
		'not_found'          =>  __('No News found' ),
		'not_found_in_trash' => __('No News found in Trash' ),
		'parent_item_colon'  => ''
	);

	$cpt_news_args = array(
		'labels'              => $cpt_news_labels,
		'public'              => true, // archive and single
		'show_ui'             => true, // manage single post from backend
		'hierarchical'        => true, // simple page ordering
		'has_archive'         => false, // pagination & archive page
		'menu_position'       => 20, // below pages
		'menu_icon'           => 'dashicons-media-text', //defaults to post icon
		'supports'            => array('title','editor','excerpt','thumbnail','page-attributes', 'custom-fields'),
		// enable gutenberg
		// 'show_in_rest' => true,
	);

	$cpt_press_release_labels = array(
		'name'               => __( 'Press Releases' ),
		'all_items'          => __( 'All Press Releases' ),
		'singular_name'      => __( 'Press Release'  ),
		'add_new'            => __('Add New' ),
		'add_new_item'       => __('Add New Press Release' ),
		'edit_item'          => __('Edit Press Release' ),
		'new_item'           => __('New Press Release' ),
		'view_item'          => __('View Press Release' ),
		'search_items'       => __('Search Press Releases' ),
		'not_found'          =>  __('No Press Release found' ),
		'not_found_in_trash' => __('No Press Release found in Trash' ),
		'parent_item_colon'  => ''
	);

	$cpt_press_release_args = array(
		'labels'              => $cpt_press_release_labels,
		'public'              => true, // archive and single
		'show_ui'             => true, // manage single post from backend
		'hierarchical'        => true, // simple page ordering
		'has_archive'         => false, // pagination & archive page
		'menu_position'       => 20, // below pages
		'menu_icon'           => 'dashicons-megaphone', //defaults to post icon
		'supports'            => array('title','excerpt','page-attributes', 'custom-fields'),
		// enable gutenberg
		// 'show_in_rest' => true,
	);

	$cpt_publication_labels = array(
		'name'               => __( 'Publications' ),
		'all_items'          => __( 'All Publications' ),
		'singular_name'      => __( 'Publication'  ),
		'add_new'            => __('Add New' ),
		'add_new_item'       => __('Add New Publication' ),
		'edit_item'          => __('Edit Publication' ),
		'new_item'           => __('New Publication' ),
		'view_item'          => __('View Publication' ),
		'search_items'       => __('Search Publications' ),
		'not_found'          =>  __('No Publication found' ),
		'not_found_in_trash' => __('No Publication found in Trash' ),
		'parent_item_colon'  => ''
	);

	$cpt_publication_args = array(
		'labels'              => $cpt_publication_labels,
		'public'              => true, // archive and single
		'show_ui'             => true, // manage single post from backend
		'hierarchical'        => true, // simple page ordering
		'has_archive'         => false, // pagination & archive page
		'menu_position'       => 20, // below pages
		'menu_icon'           => 'dashicons-admin-page', //defaults to post icon
		'supports'            => array('title','excerpt','thumbnail','page-attributes', 'custom-fields'),
		// enable gutenberg
		// 'show_in_rest' => true,
	);

	$cpt_portfolio_labels = array(
		'name'               => __( 'Portfolio' ),
		'all_items'          => __( 'All Portfolio' ),
		'singular_name'      => __( 'Portfolio'  ),
		'add_new'            => __('Add New' ),
		'add_new_item'       => __('Add New Portfolio' ),
		'edit_item'          => __('Edit Portfolio' ),
		'new_item'           => __('New Portfolio' ),
		'view_item'          => __('View Portfolio' ),
		'search_items'       => __('Search Portfolio' ),
		'not_found'          =>  __('No Portfolio found' ),
		'not_found_in_trash' => __('No Portfolio found in Trash' ),
		'parent_item_colon'  => ''
	);

	$cpt_portfolio_args = array(
		'labels'              => $cpt_portfolio_labels,
		'public'              => true, // archive and single
		'show_ui'             => true, // manage single post from backend
		'hierarchical'        => true, // simple page ordering
		'has_archive'         => true, // pagination & archive page
		'menu_position'       => 20, // below pages
		'menu_icon'           => 'dashicons-admin-site', //defaults to post icon
		'supports'            => array('title','editor','thumbnail','page-attributes', 'custom-fields'),
		// enable gutenberg
		'show_in_rest' => true,
	);

	register_post_type( 'team', $cpt_team_args );
	register_post_type( 'news', $cpt_news_args );
	register_post_type( 'press-release', $cpt_press_release_args );
	register_post_type( 'publication', $cpt_publication_args );
	register_post_type( 'portfolio', $cpt_portfolio_args );
	// flush_rewrite_rules();
}


/*================================
=            Taxonomy            =
================================*/
// $reference_default_args = array(
// 	'publicly_queryable' => true, // archive inherit from public
// 	'show_ui'            => true, // manage terms, false if we want to set default terms and don't want to add/edit them, inherit from public
// 	'show_in_menu'       => true, // hide from sidebar menu but accessible from URL, requires 'show_ui' true.
// 	'show_in_nav_menus'  => true, // apprearance menu
// 	'show_in_quick_edit' => true, // requires 'show_ui' true.
// );

function skel_build_taxonomies() {

	/*----------  Team Category  ----------*/
	$category = array(
		'name'                       => __( 'Categories' ),
		'all_items'                  => __( 'All Categories' ),
		'singular_name'              => __( 'Category' ),
		'search_items'               => __( 'Search Categories' ),
		'popular_items'              => __( 'Popular Categories' ),
		'all_items'                  => __( 'All Categories' ),
		'parent_item'                => __( 'Parent Category' ),
		'parent_item_colon'          => __( 'Parent Category:' ),
		'edit_item'                  => __( 'Edit Category' ),
		'update_item'                => __( 'Update Category' ),
		'add_new_item'               => __( 'Add New Category' ),
		'new_item_name'              => __( 'New Category Name' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Categories' ),
		'choose_from_most_used'      => __( 'Choose from the most used Categories' ),
		'menu_name'                  => __( 'Categories' )
	);

	register_taxonomy(
		'team-category', // taxonomy name
		array( 'team' ), // post type
		array(
			'labels'            => $category,
			'public'             => false,
			'show_ui'            => true, // manage terms, false if we want to set default terms and don't want to add/edit them
			'hierarchical'       => true,
			'show_admin_column'  => true,
			'show_in_rest'       => true
		)
	);

	register_taxonomy(
		'news-category', // taxonomy name
		array( 'news' ), // post type
		array(
			'labels'            => $category,
			'public'             => false,
			'show_ui'            => true, // manage terms, false if we want to set default terms and don't want to add/edit them
			'hierarchical'       => true,
			'show_admin_column'  => true,
			'show_in_rest'       => true
		)
	);

	register_taxonomy(
		'publication-category', // taxonomy name
		array( 'publication' ), // post type
		array(
			'labels'            => $category,
			'public'             => false,
			'show_ui'            => true, // manage terms, false if we want to set default terms and don't want to add/edit them
			'hierarchical'       => true,
			'show_admin_column'  => true,
			'show_in_rest'       => true
		)
	);

}
add_action( 'init', 'skel_build_taxonomies', 0 );
add_action( 'init', 'skel_create_post_type' );
