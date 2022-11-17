<?php

require_once( get_template_directory() . '/functions/miscellaneous.php' );
require_once( get_template_directory() . '/functions/helpers.php' );
require_once( get_template_directory() . '/functions/disable-auto-embed-script.php' );
require_once( get_template_directory() . '/functions/disable-wp-generated-image-sizes.php' );
require_once( get_template_directory() . '/functions/add-image-sizes.php' );
require_once( get_template_directory() . '/functions/custom-login.php' );
require_once( get_template_directory() . '/functions/register-acf-blocks.php' );
require_once( get_template_directory() . '/functions/block-editor-settings.php' );
require_once( get_template_directory() . '/functions/enqueue-scripts.php' );
require_once( get_template_directory() . '/functions/remove-junk-from-head.php' );
require_once( get_template_directory() . '/functions/wp-plugins.php' );
require_once( get_template_directory() . '/functions/security.php' );
require_once( get_template_directory() . '/functions/remove-comments.php' );
require_once( get_template_directory() . '/functions/custom-post-types.php' );
//require_once( get_template_directory() . '/functions/limit-dashboard-to-admin.php' );
require_once( get_template_directory() . '/functions/admin-ajax.php' );



// Register menus
////////////////////////////////////////////////
register_nav_menus(
  array(
    'header-primary-menu' => 'Header Primary Menu',
    'header-secondary-menu' => 'Header Secondary Menu',
    'footer-primary-menu' => 'Footer Primary Menu',
    'footer-secondary-menu' => 'Footer Secondary Menu',
  )
);

// Add except to page post type
add_post_type_support( 'page', 'excerpt' );
add_post_type_support( 'news', 'excerpt' );

/*----------  REQUIRED - Do not edit  ----------*/

/*=============================================
=            Add editor stylesheet            =
=============================================*/
 add_editor_style();


/*============================================================
=            Overrides default image-URL behavior            =
============================================================*/
// http://wordpress.org/support/topic/insert-image-default-to-no-link
update_option('image_default_link_type', 'none');


/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
  // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Solution', 'Post Type General Name', 'twentytwenty' ),
          'singular_name'       => _x( 'Solution', 'Post Type Singular Name', 'twentytwenty' ),
          'menu_name'           => __( 'Solution', 'twentytwenty' ),
          'parent_item_colon'   => __( 'Parent Solution', 'twentytwenty' ),
          'all_items'           => __( 'All Solution', 'twentytwenty' ),
          'view_item'           => __( 'View Solution', 'twentytwenty' ),
          'add_new_item'        => __( 'Add New Solution', 'twentytwenty' ),
          'add_new'             => __( 'Add New', 'twentytwenty' ),
          'edit_item'           => __( 'Edit Solution', 'twentytwenty' ),
          'update_item'         => __( 'Update Solution', 'twentytwenty' ),
          'search_items'        => __( 'Search Solution', 'twentytwenty' ),
          'not_found'           => __( 'Not Found', 'twentytwenty' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
      );
       
  // Set other options for Custom Post Type
       
      $args = array(
          'label'               => __( 'Solution', 'twentytwenty' ),
          'description'         => __( 'Solution news and reviews', 'twentytwenty' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          // You can associate this CPT with a taxonomy or custom taxonomy. 
          //'taxonomies'          => array( 'genres' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */ 
          'hierarchical'        => true,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'post',
          'show_in_rest' => true,
   
      );
       
      // Registering your Custom Post Type
      register_post_type( 'solution', $args );
   
  }
   
  /* Hook into the 'init' action so that the function                                                                                   
  * Containing our post type registration is not 
  * unnecessarily executed. 
  */
   
  add_action( 'init', 'custom_post_type', 0 );

  add_theme_support( 'post-thumbnails' );
  