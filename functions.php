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
require_once( get_template_directory() . '/functions/acf.php' );
require_once( get_template_directory() . '/functions/custom-post-types.php' );
require_once( get_template_directory() . '/functions/api.php' );
require_once( get_template_directory() . '/functions/remove-comments.php' );
require_once( get_template_directory() . '/functions/remove-post-type.php' );


// Register menus
////////////////////////////////////////////////
register_nav_menus(
  array(
    // 'header-primary menu' => 'Header Primary Menu',
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
