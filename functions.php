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
   



  add_action('init', function() {
    register_post_type('downloads', [
      'label' => __('Downloads', 'txtdomain'),
      'public' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-book',
      'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments'],
      'show_in_rest' => true,
      'rewrite' => ['slug' => 'book'],
      'taxonomies' => ['download_type'],
      'labels' => [
        'singular_name' => __('Download', 'txtdomain'),
        'add_new_item' => __('Add new Download', 'txtdomain'),
        'new_item' => __('New Download', 'txtdomain'),
        'view_item' => __('View Download', 'txtdomain'),
        'not_found' => __('No Download found', 'txtdomain'),
        'not_found_in_trash' => __('No Download found in trash', 'txtdomain'),
        'all_items' => __('All Download', 'txtdomain'),
        'insert_into_item' => __('Insert into book', 'txtdomain')
      ],		
    ]);

    register_taxonomy('download_type', ['downloads'], [
      'label' => __('Categories', 'txtdomain'),
      'hierarchical' => true,
      'rewrite' => ['slug' => 'download-type'],
      'show_admin_column' => true,
      'show_in_rest' => true,
      'labels' => [
        'singular_name' => __('download', 'txtdomain'),
        'all_items' => __('All download', 'txtdomain'),
        'edit_item' => __('Edit download', 'txtdomain'),
        'view_item' => __('View download', 'txtdomain'),
        'update_item' => __('Update download', 'txtdomain'),
        'add_new_item' => __('Add New download', 'txtdomain'),
        'new_item_name' => __('New download Name', 'txtdomain'),
        'search_items' => __('Search download', 'txtdomain'),
        'parent_item' => __('Parent download', 'txtdomain'),
        'parent_item_colon' => __('Parent Genre:', 'txtdomain'),
        'not_found' => __('No download found', 'txtdomain'),
      ]
    ]);
    register_taxonomy_for_object_type('download_type', 'book');

 
  });
  /* Hook into the 'init' action so that the function                                                                                   
  * Containing our post type registration is not 
  * unnecessarily executed. 
   '.do_shortcode('[wpforms id="599"]').'
  */
   
  add_action( 'init', 'custom_post_type', 0 );

  add_theme_support( 'post-thumbnails' );


  add_action('wp_ajax_nopriv_sayhello2', 'sayhello2_function');
  add_action('wp_ajax_sayhello2', 'say_hello2_function');
  function say_hello2_function(){

    $content = "Please Download PDF file<br>'".get_field($_POST['post_id'],'download_file_link').'"'; 
   
    $toEmail = "anwaralam6858@gmail.com";
    $mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
    if(mail($toEmail, 'Download File', $content, $mailHeaders)) {
        echo  'Mail Sent';
    } else {
        echo  "<p class='Error'>Problem in Sending Mail.</p>";
    }

  }  

add_action('wp_ajax_nopriv_sayhello', 'say_hello_function');
add_action('wp_ajax_sayhello', 'say_hello_function');
function say_hello_function(){
  
echo '	<div class="row gx-0 h-100">
          <div class="col-md-12">
            <div class="title-row">
              <h4>'.get_the_title($_POST['post_id']).'-'.$_POST['post_id'].'</h4>
                <span class="bottom-line line-centered"></span>
            </div>
            <p>Fill out the information below to get a free download of our document.</p>
              <div class="form-align">
                  <div id="frmContact">
                      <div id="mail-status"></div>
                      <input type="hidden" name="post_id" id="post_id" value="'.$_POST['post_id'].'" class="demoInputBox">
                      <div>
                          <label style="padding-top:20px;">Name</label><br/>
                          <input type="text" name="userName" id="userName" class="demoInputBox">
                      </div>
                      <div>
                          <label>Last Name</label><span id="last-info" class="info"></span><br/>
                          <input type="text" name="lastName" id="lastName" class="demoInputBox">
                      </div>  
                      <div>
                          <label>Email</label><span id="userEmail-info" class="info"></span><br/>
                          <input type="text" name="userEmail" id="userEmail" class="demoInputBox">
                      </div>                                        
                      <div>
                          <button name="submit" class="btnAction" onClick="sendContact();">Send</button>
                      </div>
                  </div>
              </div>
            </div>
        </div> ';
  exit();
}