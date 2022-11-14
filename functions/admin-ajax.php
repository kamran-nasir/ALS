<?php
// Update post
////////////////////////////////////////////////
function update_post() {
  $data = $_POST;

  $args = array(
    'post_type'      => $data['cpt'],
    'posts_per_page' => $data['postsPerPage'],
  );

  // Check if pagenumber is set for load more
  if ( isset($data['pageNumber']) && $data['pageNumber'] != '' ) {
    $args['paged'] = $data['pageNumber'] + 1;
  }

  //print_r( $args );
  $custom_query = new WP_Query($args);

  if ( $custom_query->have_posts() ) :
  while ( $custom_query->have_posts() ) : $custom_query->the_post();

    if ( $data['cpt'] == 'press-release' ) {
      get_template_part('template-parts/press-release-card');
    }

  endwhile;
    wp_reset_query();
  endif;
}

// function must start with wp_ajax_
add_action('wp_ajax_update_post_ajax', 'update_post');
// for logout uers, no privilages, function must start with wp_ajax_nopriv_
add_action('wp_ajax_nopriv_update_post_ajax', 'update_post');