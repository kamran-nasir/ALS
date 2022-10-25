<?php

/*================================
=           Custom API            =
================================*/

add_action('rest_api_init', function() {
  register_rest_route( 'custom/v1', '/postfilter/', array(
    'methods' => 'GET', // can you any method POST/GET etc
    'callback' => 'postfilter_callback',
    'permission_callback' => '__return_true',
  ) );

  register_rest_route( 'custom/v1', '/projectfilter/', array(
    'methods' => 'GET', // can you any method POST/GET etc
    'callback' => 'projectfilter_callback',
    'permission_callback' => '__return_true',
  ) );

  register_rest_route( 'custom/v1', '/awardfilter/', array(
    'methods' => 'GET', // can you any method POST/GET etc
    'callback' => 'awardsfilter_callback',
    'permission_callback' => '__return_true',
  ) );

  register_rest_route( 'custom/v1', '/downloadfilter/', array(
    'methods' => 'GET', // can you any method POST/GET etc
    'callback' => 'downloadfilter_callback',
    'permission_callback' => '__return_true',
  ) );

  register_rest_route( 'custom/v1', '/newsfilter/', array(
    'methods' => 'GET', // can you any method POST/GET etc
    'callback' => 'newsfilter_callback',
    'permission_callback' => '__return_true',
  ) );
});


// Post Filter Callback
////////////////////////////////////////////////
function postfilter_callback() {

  $data = $_GET;


  if($data['cpt'] == 'all') {
    $post_type = '';
  } else {
    $post_type = $data['cpt'];
  }

  //By Search Field text
  if(isset($data['queryString']) && $data['queryString']!=''):

    $args = array(
      'post_type' => $post_type,
      'posts_per_page' => 9,
      's'              => $data['queryString'],
      'engine'         => 'default',
      'fields'         => 'all',
      'orderby' => 'date',
      'order' => 'DESC',
    );

  endif;



  /* Check if pagenumber is set for load more */
  if ( isset($data['pageNumber']) && $data['pageNumber'] != '' ) {
    $args['paged'] = $data['pageNumber']+1;
  }


  if ( isset($data['catID']) && $data['catID'] != '' ) :
    $args['tax_query'] = array(
      array(
        'taxonomy' => $data['taxonomy'],
        'field'    => 'id',
        'terms'    => $data['catID'],
      )
    );

  endif;


  $postQuery = new SWP_Query($args);


  if ($postQuery->have_posts()) :
    while ($postQuery->have_posts()) : $postQuery->the_post();
    $post_type = get_post_type();
      include( TEMPLATEPATH . '/template-parts/search-card.php' );
    endwhile;
  wp_reset_postdata();
  endif;
  die();
}

// Project Filter Callback
////////////////////////////////////////////////
function projectfilter_callback() {

  $response = array();
  $data = $_GET;
  $post_type = $data['cpt'];

  if(isset($data['service']) || isset($data['product']) || isset($data['market'])):
    $tax_query = array('relation' => 'AND');
  endif;

  if ( isset($data['service']) && $data['service'] != '' ) :
    $tax_query[] = array(
      array(
        'taxonomy' => 'service',
        'field'    => 'slug',
        'terms'    => $data['service'],
      )
    );
  endif;

  if ( isset($data['product']) && $data['product'] != '' ) :
    $tax_query[] = array(
      array(
        'taxonomy' => 'product',
        'field'    => 'slug',
        'terms'    => $data['product'],
      )
    );

  endif;

  if ( isset($data['market']) && $data['market'] != '' ) :
    $tax_query[] = array(
      array(
        'taxonomy' => 'market',
        'field'    => 'slug',
        'terms'    => $data['market'],
      )
    );
  endif;

	if ( isset($data['sector']) && $data['sector'] != '' ) :
    $tax_query[] = array(
      array(
        'taxonomy' => 'sector',
        'field'    => 'slug',
        'terms'    => $data['sector'],
      )
    );
  endif;

  if ( isset($data['year']) && $data['year'] != '' ) :
    $tax_query[] = array(
      array(
        'taxonomy' => 'project-year',
        'field'    => 'slug',
        'terms'    => $data['year'],
      )
    );
  endif;

	$args = array(
		'post_type' => 'project',
		'posts_per_page' => 9,
		'orderby' => 'date',
		'order' => 'DESC',
		'tax_query' => $tax_query,
	);

  /* Check if pagenumber is set for load more */
  if ( isset($data['pageNumber']) && $data['pageNumber'] != '' ) {
    $args['paged'] = $data['pageNumber']+1;
  }

  $postQuery = new WP_Query($args);

  if ($postQuery->have_posts()) :
    $latest_post_year = (int)$data['latestPostYear'];
    while ($postQuery->have_posts()) : $postQuery->the_post();
      include( TEMPLATEPATH . '/template-parts/project-card.php' );
    endwhile;

  wp_reset_postdata();
  endif;

  //echo json_encode($response);
  die();
}

// Awards Filter Callback
function awardsfilter_callback() {

  $response = array();
  $data = $_GET;
  $post_type = $data['cpt'];

  // print_r($data);
  // die();

  $args = array(
    'post_type' => 'award',
    'posts_per_page' => 8,
    'fields'         => 'ids',
    'order'          => 'ASC',
    'post_status'    => 'publish'
  );

  /* Check if pagenumber is set for load more */
  if ( isset($data['pageNumber']) && $data['pageNumber'] != '' ) {
    $args['paged'] = $data['pageNumber']+1;
  }


  $postQuery = new WP_Query($args);

  if ($postQuery->have_posts()) :
    while ($postQuery->have_posts()) : $postQuery->the_post();
      $awardID = get_the_ID();
      $logo = get_field('logo', $awardID);
      $color = get_field('color', $awardID);
      include( TEMPLATEPATH . '/template-parts/awards-card.php' );
    endwhile;

  wp_reset_postdata();
  endif;

  die();
}

// Download Filter Callback
function downloadfilter_callback() {

  $response = array();
  $data = $_GET;
  $post_type = $data['cpt'];
  // print_r($data);
  // die();

  //By Search Field text
  $args = array(
    'post_type' => $data['cpt'],
    'posts_per_page' => 9,
    'orderby' => 'date',
    'order' => 'DESC',
  );

  /* Check if pagenumber is set for load more */
  if ( isset($data['pageNumber']) && $data['pageNumber'] != '' ) {
    $args['paged'] = $data['pageNumber']+1;
  }

  $postQuery = new WP_Query($args);

  if ($postQuery->have_posts()) :
    while ($postQuery->have_posts()) : $postQuery->the_post();
    $post_type = get_post_type();
      include( TEMPLATEPATH . '/template-parts/search-card.php' );
    endwhile;

  wp_reset_postdata();
  endif;

  //echo json_encode($response);
  die();
}

// News Filter Callack
function newsfilter_callback() {

  $response = array();
  $data = $_GET;
  $post_type = $data['cpt'];

	if(isset($data['sector']) || isset($data['quarter']) || isset($data['year'])):
    $tax_query = array('relation' => 'AND');
  endif;

  if ( isset($data['sector']) && $data['sector'] != '' ) :
    $tax_query[] = array(
      array(
        'taxonomy' => 'news-sector',
        'field'    => 'slug',
        'terms'    => $data['sector'],
      )
    );
  endif;

  if ( isset($data['quarter']) && $data['quarter'] != '' ) :
    $tax_query[] = array(
      array(
        'taxonomy' => 'news-quarter',
        'field'    => 'slug',
        'terms'    => $data['quarter'],
      )
    );

  endif;

  if ( isset($data['year']) && $data['year'] != '' ) :
    $tax_query[] = array(
      array(
        'taxonomy' => 'news-year',
        'field'    => 'slug',
        'terms'    => $data['year'],
      )
    );
  endif;

  $args = array(
    'post_type'      => $data['cpt'],
    'posts_per_page' => 9,
    'orderby'        => 'date',
    'order'          => 'DESC',
		'tax_query'      => $tax_query,
  );

  /* Check if pagenumber is set for load more */
  if ( isset($data['pageNumber']) && $data['pageNumber'] != '' ) {
    $args['paged'] = $data['pageNumber']+1;
  }

  $postQuery = new WP_Query($args);

  if ($postQuery->have_posts()) :
		$ar_size = array('tall', 'taller', 'tallest');
    while ($postQuery->have_posts()) : $postQuery->the_post();
			$post_type = get_post_type();
			get_template_part('template-parts/card', null, array('ar_size' => $ar_size));
    endwhile;
  wp_reset_postdata();
  endif;

  //echo json_encode($response);
  die();
}


?>
