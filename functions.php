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
* PURPOSE : If there are zero results (or other parameters) in the archive query, get_post_type() isn't reliable for knowing what the archive's post type is. This function gets the post type from the global $wp_query object instead.
*  PARAMS : n/a
* RETURNS : boolean / string - the slug for the post type fromm $wp_query, or false if that is not found.
*   NOTES :
*/
function jp_get_archive_post_type(){
  $post_type = false;

  global $wp_query;
  if( isset($wp_query->query['post_type']) ){
      $post_type = $wp_query->query['post_type'];
  }

  return $post_type;
}
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
    register_post_type('marketing', [
      'label' => __('Marketing', 'txtdomain'),
      'public' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-book',
      'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments'],
      'show_in_rest' => true,
      'rewrite' => ['slug' => 'marketing'],
      'taxonomies' => ['marketing'],
      'labels' => [
        'singular_name' => __('marketing', 'txtdomain'),
        'add_new_item' => __('Add new marketing', 'txtdomain'),
        'new_item' => __('New marketing', 'txtdomain'),
        'view_item' => __('View marketing', 'txtdomain'),
        'not_found' => __('No marketing found', 'txtdomain'),
        'not_found_in_trash' => __('No marketing found in trash', 'txtdomain'),
        'all_items' => __('All marketing', 'txtdomain'),
        'insert_into_item' => __('Insert into book', 'txtdomain')
      ],		
    ]);

    register_taxonomy('cat_marketing', ['marketing'], [
      'label' => __('Categories', 'txtdomain'),
      'hierarchical' => true,
      'rewrite' => ['slug' => 'cat_marketing'],
      'show_admin_column' => true,
      'show_in_rest' => true,
      'labels' => [
        'singular_name' => __('marketing', 'txtdomain'),
        'all_items' => __('All marketing', 'txtdomain'),
        'edit_item' => __('Edit marketing', 'txtdomain'),
        'view_item' => __('View marketing', 'txtdomain'),
        'update_item' => __('Update marketing', 'txtdomain'),
        'add_new_item' => __('Add New marketing', 'txtdomain'),
        'new_item_name' => __('New marketing Name', 'txtdomain'),
        'search_items' => __('Search marketing', 'txtdomain'),
        'parent_item' => __('Parent marketing', 'txtdomain'),
        'parent_item_colon' => __('Parent Genre:', 'txtdomain'),
        'not_found' => __('No marketing found', 'txtdomain'),
      ]
    ]);
    register_taxonomy_for_object_type('cat_marketing', 'marketing');

 
  });


  //CUstom post type Technical resource

  add_action('init', function() {
    register_post_type('technical', [
      'label' => __('Technical Resource', 'txtdomain'),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-book',
      'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments'],
      'show_in_rest' => true,
      'rewrite' => ['slug' => 'technical'],
      'taxonomies' => ['technical'],
      'labels' => [
        'singular_name' => __('Technical', 'txtdomain'),
        'add_new_item' => __('Add new Technical', 'txtdomain'),
        'new_item' => __('New Technical', 'txtdomain'),
        'view_item' => __('View Technical', 'txtdomain'),
        'not_found' => __('No Technical found', 'txtdomain'),
        'not_found_in_trash' => __('No Technical found in trash', 'txtdomain'),
        'all_items' => __('All Technical', 'txtdomain'),
        'insert_into_item' => __('Insert into book', 'txtdomain')
      ],		
    ]);

    register_taxonomy('cat_technical', ['technical'], [
      'label' => __('Categories', 'txtdomain'),
      'hierarchical' => true,
      'rewrite' => ['slug' => 'cat_technical'],
      'show_admin_column' => true,
      'show_in_rest' => true,
      'labels' => [
        'singular_name' => __('technical', 'txtdomain'),
        'all_items' => __('All Technical', 'txtdomain'),
        'edit_item' => __('Edit Technical', 'txtdomain'),
        'view_item' => __('View Technical', 'txtdomain'),
        'update_item' => __('Update Technical', 'txtdomain'),
        'add_new_item' => __('Add New Technical', 'txtdomain'),
        'new_item_name' => __('New Technical Name', 'txtdomain'),
        'search_items' => __('Search Technical', 'txtdomain'),
        'parent_item' => __('Parent Technical', 'txtdomain'),
        'parent_item_colon' => __('Parent Genre:', 'txtdomain'),
        'not_found' => __('No Technical found', 'txtdomain'),
      ]
    ]);
    register_taxonomy_for_object_type('cat_technical', 'technical');

 
  });

  // Custom post type for Light Fence

  add_action('init', function() {
    register_post_type('lightfence', [
      'label' => __('Light Fence Resource', 'txtdomain'),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-book',
      'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments'],
      'show_in_rest' => true,
      'rewrite' => ['slug' => 'light-fence'],
      'taxonomies' => ['cat_lightfence'],
      'labels' => [
        'singular_name' => __('Light Fence', 'txtdomain'),
        'add_new_item' => __('Add new Light Fence', 'txtdomain'),
        'new_item' => __('New Light Fence', 'txtdomain'),
        'view_item' => __('View Light Fence', 'txtdomain'),
        'not_found' => __('No Light Fence found', 'txtdomain'),
        'not_found_in_trash' => __('No Light Fence found in trash', 'txtdomain'),
        'all_items' => __('All Light Fence', 'txtdomain'),
        'insert_into_item' => __('Insert into book', 'txtdomain')
      ],		
    ]);

    register_taxonomy('cat_lightfence', ['lightfence'], [
      'label' => __('Categories', 'txtdomain'),
      'hierarchical' => true,
      'rewrite' => ['slug' => 'cat_lightfence'],
      'show_admin_column' => true,
      'show_in_rest' => true,
      'labels' => [
        'singular_name' => __('Light Fence', 'txtdomain'),
        'all_items' => __('All Light Fence', 'txtdomain'),
        'edit_item' => __('Edit Light Fence', 'txtdomain'),
        'view_item' => __('View Light Fence', 'txtdomain'),
        'update_item' => __('Update Light Fence', 'txtdomain'),
        'add_new_item' => __('Add New Light Fence', 'txtdomain'),
        'new_item_name' => __('New Light Fence Name', 'txtdomain'),
        'search_items' => __('Search Light Fence', 'txtdomain'),
        'parent_item' => __('Parent Light Fence', 'txtdomain'),
        'parent_item_colon' => __('Parent Genre:', 'txtdomain'),
        'not_found' => __('No Light Fence found', 'txtdomain'),
      ]
    ]);
    register_taxonomy_for_object_type('cat_lightfence', 'lightfence');

 
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