<?php

/*=============================================
=            Post Type            =
=============================================*/
function skel_create_post_type() {

	$cpt_download_labels = array(
		'name'               => __( 'Downloads' ),
		'all_items'          => __( 'All Downloads' ),
		'singular_name'      => __( 'Download'  ),
		'add_new'            => __('Add New' ),
		'add_new_item'       => __('Add New Download' ),
		'edit_item'          => __('Edit Download' ),
		'new_item'           => __('New Download' ),
		'view_item'          => __('View Download' ),
		'search_items'       => __('Search Downloads' ),
		'not_found'          =>  __('No Download found' ),
		'not_found_in_trash' => __('No Download found in Trash' ),
		'parent_item_colon'  => ''
	);

	$cpt_download_args = array(
		'labels'              => $cpt_download_labels,
		'public'              => false,
		'show_ui'             => true,
		'capability_type'     => 'post',
		'menu_position'       => 20, //below pages
		'menu_icon'           => 'dashicons-welcome-view-site', //defaults to post icon
		//Uncomment the following line to change the slug;
		//You must also save your permalink structure to prevent 404 errors
		//'rewrite'           => array( 'slug' => 'project/%skills%', 'with_front' => false ),
		'supports'            => array('title','thumbnail','excerpt','custom-fields'),
	);

	$cpt_case_study_labels = array(
		'name'               => __( 'Case Studies' ),
		'all_items'          => __( 'All Case Studies' ),
		'singular_name'      => __( 'Case Study'  ),
		'add_new'            => __('Add New' ),
		'add_new_item'       => __('Add New Case Study' ),
		'edit_item'          => __('Edit Case Study' ),
		'new_item'           => __('New Case Study' ),
		'view_item'          => __('View Case Study' ),
		'search_items'       => __('Search Case Studies' ),
		'not_found'          =>  __('No Case Study found' ),
		'not_found_in_trash' => __('No Case Study found in Trash' ),
		'parent_item_colon'  => ''
	);

	$cpt_case_study_args = array(
		'labels'              => $cpt_case_study_labels,
		'public'              => false,
		'show_ui'             => true,
		'capability_type'     => 'post',
		'menu_position'       => 20, //below pages
		'menu_icon'           => 'dashicons-welcome-view-site', //defaults to post icon
		//Uncomment the following line to change the slug;
		//You must also save your permalink structure to prevent 404 errors
		//'rewrite'           => array( 'slug' => 'project/%skills%', 'with_front' => false ),
		'supports'            => array('title','thumbnail','excerpt','custom-fields'),
	);

	$cpt_project_labels = array(
		'name'               => __( 'Projects' ),
		'all_items'          => __( 'All Projects' ),
		'singular_name'      => __( 'Project'  ),
		'add_new'            => __('Add New' ),
		'add_new_item'       => __('Add New Project' ),
		'edit_item'          => __('Edit Project' ),
		'new_item'           => __('New Project' ),
		'view_item'          => __('View Project' ),
		'search_items'       => __('Search Projects' ),
		'not_found'          =>  __('No Project found' ),
		'not_found_in_trash' => __('No Project found in Trash' ),
		'parent_item_colon'  => ''
	);

	$cpt_project_args = array(
		'labels'              => $cpt_project_labels,
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'query_var'           => true,
		'hierarchical'        => true, //simple page ordering
		'has_archive'         => true, //pagination & archive page
		'capability_type'     => 'post',
		'menu_position'       => 20, //below pages
		'menu_icon'           => 'dashicons-welcome-view-site', //defaults to post icon
		'show_in_rest' => true,
		//Uncomment the following line to change the slug;
		//You must also save your permalink structure to prevent 404 errors
		//'rewrite'           => array( 'slug' => 'project/%skills%', 'with_front' => false ),
		'supports'            => array('title','editor','thumbnail','page-attributes', 'custom-fields', 'excerpt'),
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
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'query_var'           => true,
		'hierarchical'        => true, //simple page ordering
		'has_archive'         => false, //pagination & archive page
		'capability_type'     => 'post',
		'menu_position'       => 20, //below pages
		'menu_icon'           => 'dashicons-welcome-view-site', //defaults to post icon
		//Uncomment the following line to change the slug;
		//You must also save your permalink structure to prevent 404 errors
		//'rewrite'           => array( 'slug' => 'project/%skills%', 'with_front' => false ),
		'show_in_rest' => true,
		'supports'            => array('title','editor','thumbnail','page-attributes', 'custom-fields'),
	);

	$cpt_awards_labels = array(
		'name'               => __( 'Awards' ),
		'all_items'          => __( 'All Awards' ),
		'singular_name'      => __( 'Award'  ),
		'add_new'            => __('Add New' ),
		'add_new_item'       => __('Add New Award' ),
		'edit_item'          => __('Edit Award' ),
		'new_item'           => __('New Award' ),
		'view_item'          => __('View Award' ),
		'search_items'       => __('Search Awards' ),
		'not_found'          =>  __('No Award found' ),
		'not_found_in_trash' => __('No Award found in Trash' ),
		'parent_item_colon'  => ''
	);

	$cpt_award_args = array(
		'labels'              => $cpt_awards_labels,
		'public'              => false,
		'show_ui'             => true,
		'hierarchical'        => true, // simple page ordering
		'capability_type'     => 'post',
		'menu_position'       => 20, //below pages
		'menu_icon'           => 'dashicons-welcome-view-site', //defaults to post icon
		//Uncomment the following line to change the slug;
		//You must also save your permalink structure to prevent 404 errors
		//'rewrite'           => array( 'slug' => 'project/%skills%', 'with_front' => false ),
		'supports'            => array('title','thumbnail','excerpt','custom-fields'),
	);

	register_post_type( 'project', $cpt_project_args );
	register_post_type( 'download', $cpt_download_args );
	register_post_type( 'case-study', $cpt_case_study_args );
	register_post_type( 'news', $cpt_news_args );
	register_post_type( 'award', $cpt_award_args );
	// flush_rewrite_rules();
}


/*================================
=            Taxonomy            =
================================*/
function skel_build_taxonomies() {

	/*---------- Project - Service  ----------*/
	$service_labels = array(
		'name'                       => __( 'Services' ),
		'all_items'                  => __( 'All Services' ),
		'singular_name'              => __( 'Service' ),
		'search_items'               => __( 'Search Services' ),
		'popular_items'              => __( 'Popular Services' ),
		'all_items'                  => __( 'All Services' ),
		'parent_item'                => __( 'Parent Service' ),
		'parent_item_colon'          => __( 'Parent Service:' ),
		'edit_item'                  => __( 'Edit Service' ),
		'update_item'                => __( 'Update Service' ),
		'add_new_item'               => __( 'Add New Service' ),
		'new_item_name'              => __( 'New Vertical Name' ),
		'separate_items_with_commas' => __( 'Separate Services with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Services' ),
		'choose_from_most_used'      => __( 'Choose from the most used Services' ),
		'menu_name'                  => __( 'Services' )
	);

	register_taxonomy(
		'service', // taxonomy name
		array( 'project' ), // post type
		array(
			'labels'            => $service_labels,
			'public'            => false,
			'show_ui'           => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest' => true
			//'rewrite'    => array( 'slug' => 'custom_post_type', 'with_front' => false ) //this will enable the url to be custom_post_type/term instead of taxonomy/term
		)
	);

	/*---------- Project - Sector  ----------*/
	$sector_labels = array(
		'name'                       => __( 'Sectors' ),
		'all_items'                  => __( 'All Sectors' ),
		'singular_name'              => __( 'Sector' ),
		'search_items'               => __( 'Search Sectors' ),
		'popular_items'              => __( 'Popular Sectors' ),
		'all_items'                  => __( 'All Sectors' ),
		'parent_item'                => __( 'Parent Sector' ),
		'parent_item_colon'          => __( 'Parent Sector:' ),
		'edit_item'                  => __( 'Edit Sector' ),
		'update_item'                => __( 'Update Sector' ),
		'add_new_item'               => __( 'Add New Sector' ),
		'new_item_name'              => __( 'New Vertical Name' ),
		'separate_items_with_commas' => __( 'Separate Sectors with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Sectors' ),
		'choose_from_most_used'      => __( 'Choose from the most used Sectors' ),
		'menu_name'                  => __( 'Sectors' )
	);

	register_taxonomy(
		'sector', // taxonomy name
		array( 'project' ), // post type
		array(
			'labels'            => $sector_labels,
			'public'            => false,
			'show_ui'           => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest' => true
			//'rewrite'    => array( 'slug' => 'custom_post_type', 'with_front' => false ) //this will enable the url to be custom_post_type/term instead of taxonomy/term
		)
	);

	/*---------- Project - Market  ----------*/
	$market_labels = array(
		'name'                       => __( 'Markets' ),
		'all_items'                  => __( 'All Markets' ),
		'singular_name'              => __( 'Market' ),
		'search_items'               => __( 'Search Markets' ),
		'popular_items'              => __( 'Popular Markets' ),
		'all_items'                  => __( 'All Markets' ),
		'parent_item'                => __( 'Parent Market' ),
		'parent_item_colon'          => __( 'Parent Market:' ),
		'edit_item'                  => __( 'Edit Market' ),
		'update_item'                => __( 'Update Market' ),
		'add_new_item'               => __( 'Add New Market' ),
		'new_item_name'              => __( 'New Vertical Name' ),
		'separate_items_with_commas' => __( 'Separate Markets with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Markets' ),
		'choose_from_most_used'      => __( 'Choose from the most used Markets' ),
		'menu_name'                  => __( 'Markets' )
	);

	register_taxonomy(
		'market', // taxonomy name
		array( 'project' ), // post type
		array(
			'labels'            => $market_labels,
			'public'            => false,
			'show_ui'           => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest' => true
			//'rewrite'    => array( 'slug' => 'custom_post_type', 'with_front' => false ) //this will enable the url to be custom_post_type/term instead of taxonomy/term
		)
	);

	/*---------- Project - Year  ----------*/
	$year_labels = array(
		'name'                       => __( 'Years' ),
		'all_items'                  => __( 'All Years' ),
		'singular_name'              => __( 'Year' ),
		'search_items'               => __( 'Search Years' ),
		'popular_items'              => __( 'Popular Years' ),
		'all_items'                  => __( 'All Years' ),
		'parent_item'                => __( 'Parent Year' ),
		'parent_item_colon'          => __( 'Parent Year:' ),
		'edit_item'                  => __( 'Edit Year' ),
		'update_item'                => __( 'Update Year' ),
		'add_new_item'               => __( 'Add New Year' ),
		'new_item_name'              => __( 'New Vertical Name' ),
		'separate_items_with_commas' => __( 'Separate Years with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Years' ),
		'choose_from_most_used'      => __( 'Choose from the most used Years' ),
		'menu_name'                  => __( 'Years' )
	);

	register_taxonomy(
		'project-year', // taxonomy name
		array( 'project' ), // post type
		array(
			'labels'            => $year_labels,
			'public'            => false,
			'show_ui'           => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest' => true
			//'rewrite'    => array( 'slug' => 'custom_post_type', 'with_front' => false ) //this will enable the url to be custom_post_type/term instead of taxonomy/term
		)
	);

	/*----------  Project - Product  ----------*/
	$product_labels = array(
		'name'                       => __( 'Products' ),
		'singular_name'              => __( 'Product' ),
		'search_items'               => __( 'Search Products' ),
		'popular_items'              => __( 'Popular Products' ),
		'all_items'                  => __( 'All Products' ),
		'parent_item'                => __( 'Parent Product' ),
		'parent_item_colon'          => __( 'Parent Product:' ),
		'edit_item'                  => __( 'Edit Product' ),
		'update_item'                => __( 'Update Product' ),
		'add_new_item'               => __( 'Add New Product' ),
		'new_item_name'              => __( 'New Product Name' ),
		'separate_items_with_commas' => __( 'Separate Products with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Products' ),
		'choose_from_most_used'      => __( 'Choose from the most used Products' ),
		'menu_name'                  => __( 'Products' )
	);

	register_taxonomy(
		'product', // taxonomy name
		array( 'project' ), // post type
		array(
			'labels'            => $product_labels,
			'public'            => false,
			'show_ui'           => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest' => true
			//'rewrite'    => array( 'slug' => 'custom_post_type', 'with_front' => false ) //this will enable the url to be custom_post_type/term instead of taxonomy/term
		)
	);

	/*---------- Project - Industry  ----------*/
	$industry_labels = array(
		'name'                       => __( 'Industries' ),
		'singular_name'              => __( 'Industry' ),
		'search_items'               => __( 'Search Industries' ),
		'popular_items'              => __( 'Popular Industries' ),
		'all_items'                  => __( 'All Industries' ),
		'parent_item'                => __( 'Parent Industry' ),
		'parent_item_colon'          => __( 'Parent Industry:' ),
		'edit_item'                  => __( 'Edit Industry' ),
		'update_item'                => __( 'Update Industry' ),
		'add_new_item'               => __( 'Add New Industry' ),
		'new_item_name'              => __( 'New Industry Name' ),
		'separate_items_with_commas' => __( 'Separate Industries with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Industries' ),
		'choose_from_most_used'      => __( 'Choose from the most used Industries' ),
		'menu_name'                  => __( 'Industries' )
	);

	register_taxonomy(
		'industry', // taxonomy name
		array( 'project' ), // post type
		array(
			'labels'            => $industry_labels,
			'public'            => false,
			'show_ui'           => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest' => true
			//'rewrite'    => array( 'slug' => 'custom_post_type', 'with_front' => false ) //this will enable the url to be custom_post_type/term instead of taxonomy/term
		)
	);

	/*---------- Project - Location  ----------*/
	$vertical_labels = array(
		'name'                       => __( 'Locations' ),
		'all_items'                  => __( 'All Locations' ),
		'singular_name'              => __( 'Location' ),
		'search_items'               => __( 'Search Locations' ),
		'popular_items'              => __( 'Popular Locations' ),
		'all_items'                  => __( 'All Locations' ),
		'parent_item'                => __( 'Parent Location' ),
		'parent_item_colon'          => __( 'Parent Location:' ),
		'edit_item'                  => __( 'Edit Location' ),
		'update_item'                => __( 'Update Location' ),
		'add_new_item'               => __( 'Add New Location' ),
		'new_item_name'              => __( 'New Location Name' ),
		'separate_items_with_commas' => __( 'Separate Locations with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Locations' ),
		'choose_from_most_used'      => __( 'Choose from the most used Locations' ),
		'menu_name'                  => __( 'Locations' )
	);

	register_taxonomy(
		'location', // taxonomy name
		array( 'project' ), // post type
		array(
			'labels'            => $vertical_labels,
			'public'            => false,
			'show_ui'           => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest' => true
			//'rewrite'    => array( 'slug' => 'custom_post_type', 'with_front' => false ) //this will enable the url to be custom_post_type/term instead of taxonomy/term
		)
	);

	/*----------  News Category  ----------*/
	$new_category_labels = array(
		'name'                       => __( 'Categories' ),
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
		'news-category', // taxonomy name
		array( 'news' ), // post type
		array(
			'labels'            => $new_category_labels,
			'public'            => false,
			'show_ui'           => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest' => true
			//'rewrite'    => array( 'slug' => 'custom_post_type', 'with_front' => false ) //this will enable the url to be custom_post_type/term instead of taxonomy/term
		)
	);

	/*----------  News Quarters  ----------*/
	$new_quarter_labels = array(
		'name'                       => __( 'Quarters' ),
		'singular_name'              => __( 'Quarter' ),
		'search_items'               => __( 'Search Quarters' ),
		'popular_items'              => __( 'Popular Quarters' ),
		'all_items'                  => __( 'All Quarters' ),
		'parent_item'                => __( 'Parent Quarter' ),
		'parent_item_colon'          => __( 'Parent Quarter:' ),
		'edit_item'                  => __( 'Edit Quarter' ),
		'update_item'                => __( 'Update Quarter' ),
		'add_new_item'               => __( 'Add New Quarter' ),
		'new_item_name'              => __( 'New Quarter Name' ),
		'separate_items_with_commas' => __( 'Separate Quarters with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Quarters' ),
		'choose_from_most_used'      => __( 'Choose from the most used Quarters' ),
		'menu_name'                  => __( 'Quarters' )
	);

	register_taxonomy(
		'news-quarter', // taxonomy name
		array( 'news' ), // post type
		array(
			'labels'            => $new_quarter_labels,
			'public'            => false,
			'show_ui'           => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest' => true
			//'rewrite'    => array( 'slug' => 'custom_post_type', 'with_front' => false ) //this will enable the url to be custom_post_type/term instead of taxonomy/term
		)
	);

	/*----------  News Sectors - also called Business Vertical  ----------*/
	$new_sector_labels = array(
		'name'                       => __( 'Business Verticals' ),
		'singular_name'              => __( 'Business Vertical' ),
		'search_items'               => __( 'Search Business Verticals' ),
		'popular_items'              => __( 'Popular Business Verticals' ),
		'all_items'                  => __( 'All Business Verticals' ),
		'parent_item'                => __( 'Parent Business Vertical' ),
		'parent_item_colon'          => __( 'Parent Business Vertical:' ),
		'edit_item'                  => __( 'Edit Business Vertical' ),
		'update_item'                => __( 'Update Business Vertical' ),
		'add_new_item'               => __( 'Add New Business Vertical' ),
		'new_item_name'              => __( 'New Business Vertical Name' ),
		'separate_items_with_commas' => __( 'Separate Business Verticals with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Business Verticals' ),
		'choose_from_most_used'      => __( 'Choose from the most used Business Verticals' ),
		'menu_name'                  => __( 'Business Verticals' )
	);

	register_taxonomy(
		'news-sector', // taxonomy name
		array( 'news' ), // post type
		array(
			'labels'             => $new_sector_labels,
			'public'            => false,
			'show_ui'           => true,
			'hierarchical'       => true,
			'show_admin_column'  => true,
			'show_in_rest'       => true
			//'rewrite'    => array( 'slug' => 'custom_post_type', 'with_front' => false ) //this will enable the url to be custom_post_type/term instead of taxonomy/term
		)
	);

	/*----------  News Years  ----------*/
	register_taxonomy(
		'news-year', // taxonomy name
		array( 'news' ), // post type
		array(
			'labels'            => $year_labels,
			'public'            => false,
			'show_ui'           => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest' => true
			//'rewrite'    => array( 'slug' => 'custom_post_type', 'with_front' => false ) //this will enable the url to be custom_post_type/term instead of taxonomy/term
		)
	);

	/*----------  Award Years  ----------*/
	register_taxonomy(
		'award-year', // taxonomy name
		array( 'award' ), // post type
		array(
			'labels'            => $year_labels,
			'public'            => false,
			'show_ui'           => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest' => true
			//'rewrite'    => array( 'slug' => 'custom_post_type', 'with_front' => false ) //this will enable the url to be custom_post_type/term instead of taxonomy/term
		)
	);

	/*----------  Download Category  ----------*/
	$download_category_labels = array(
		'name'                       => __( 'Categories' ),
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
		'downloads-category', // taxonomy name
		array( 'download' ), // post type
		array(
			'labels'            => $download_category_labels,
			'public'            => false,
			'show_ui'           => true,
			'hierarchical'      => true,
			'show_admin_column' => true,
			'show_in_rest' => true
			//'rewrite'    => array( 'slug' => 'custom_post_type', 'with_front' => false ) //this will enable the url to be custom_post_type/term instead of taxonomy/term
		)
	);

}
add_action( 'init', 'skel_build_taxonomies', 0 );
add_action( 'init', 'skel_create_post_type' );
