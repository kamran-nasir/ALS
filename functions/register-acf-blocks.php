<?php

// Create a new block category
////////////////////////////////////////////////
function skel_block_category( $categories, $post ) {
  return array_merge(
    $categories,
    array(
      array(
        'slug' => 'amana',
        'title' => __( 'amana', 'skel' ),
      ),
    )
  );
}
add_filter( 'block_categories_all', 'skel_block_category', 10, 2);

function skel_register_acf_blocks() {

  // Hero Banner
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'hero-banner',
    'title'             => __( 'Hero Banner', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/hero-banner.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero-banner.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Flexible columns with icons and details
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'flexible-columns-with-icons-and-details',
  //   'title'             => __( 'Flexible columns with icons and details', 'skel' ),
  //   'category'          => 'amana',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/flexible-columns-with-icons-and-details.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/flexible-columns-with-icons-and-details.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page', 'news', 'project' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
  //     'mode' => false,
  //   )
  // ));

  // Expanding Content
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'expanding-content',
    'title'             => __( 'Expanding Content', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/expanding-content.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/expanding-content.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Three columns with icon and details
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'three-columns-with-icon-and-details',
  //   'title'             => __( 'Three columns with icon and details', 'skel' ),
  //   'category'          => 'amana',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/three-columns-with-icon-and-details.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/three-columns-with-icon-and-details.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page', 'news', 'project' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
  //     'mode' => false,
  //   )
  // ));

  // Three cards with icon and details
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'three-cards-with-icon-and-details',
    'title'             => __( 'Three cards with icon and details', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/three-cards-with-icon-and-details.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/three-cards-with-icon-and-details.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Four cards slider with icon and details
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'four-cards-slider-with-icon-and-details',
  //   'title'             => __( 'Four cards slider with icon and details', 'skel' ),
  //   'category'          => 'amana',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/four-cards-slider-with-icon-and-details.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/four-cards-slider-with-icon-and-details.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page', 'news', 'project' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
  //     'mode' => false,
  //   )
  // ));

  // Featured Case Study
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'case-study',
    'title'             => __( 'Featured Case Study', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/featured-case-study.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/featured-case-study.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Split columns with fluid image and fixed content
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'split-columns-with-fluid-image-and-fixed-content',
    'title'             => __( 'Split columns with fluid image and fixed content', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/split-columns-with-fluid-image-and-fixed-content.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/split-columns-with-fluid-image-and-fixed-content.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Logo Marquee
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'logo-marquee',
  //   'title'             => __( 'Logo Marquee', 'skel' ),
  //   'category'          => 'amana',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/logo-marquee.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/logo-marquee.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page', 'news', 'project' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
  //     'mode' => false,
  //   )
  // ));

  // Featured Content Cards Slider
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'featured-content-cards',
    'title'             => __( 'Featured Content Cards Slider', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/featured-content-cards-slider.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/featured-content-cards-slider.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Featured Content Cards V2
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'featured-content-cards-v2',
  //   'title'             => __( 'Featured Content Cards V2', 'skel' ),
  //   'category'          => 'amana',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/featured-content-cards-v2.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/featured-content-cards-v2.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page', 'news', 'project' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
  //     'mode' => false,
  //   )
  // ));

  // Popup Video
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'popup-video',
    'title'             => __( 'Popup Video', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/popup-video.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/popup-video.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Single Project Profile
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'single-project-profile',
    'title'             => __( 'Single Project Profile', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/single-project-profile.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/single-project-profile.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Cards with Overlay Details
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'cards-with-overlay-details',
  //   'title'             => __( 'Cards with Overlay Details', 'skel' ),
  //   'category'          => 'amana',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/cards-with-overlay-details.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/cards-with-overlay-details.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page', 'news', 'project' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
  //     'mode' => false,
  //   )
  // ));

  // Contact Cards
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'contact-cards',
    'title'             => __( 'Contact Cards', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/contact-cards.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/contact-cards.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Single Project Profile Centered
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'single-project-profile-centered',
    'title'             => __( 'Single Project Profile Centered', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/single-project-profile-centered.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/single-project-profile-centered.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Hash Navigation
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'hash-navigation',
    'title'             => __( 'Hash Navigation', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/hash-navigation.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hash-navigation.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Content and Image Column
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'content-and-image-column',
    'title'             => __( 'Content and Image Column', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/content-and-image-column.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/content-and-image-column.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Content and Fluid Image Column
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'content-and-fluid-image-column',
    'title'             => __( 'Content and Fluid Image Column', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/content-and-fluid-image-column.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/content-and-fluid-image-column.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Four Color Buttons
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'four-color-buttons',
  //   'title'             => __( 'Four Color Buttons', 'skel' ),
  //   'category'          => 'amana',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/four-color-buttons.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/four-color-buttons.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page', 'news', 'project' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
  //     'mode' => false,
  //   )
  // ));

  // Hero Steps
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'hero-steps',
  //   'title'             => __( 'Hero Steps', 'skel' ),
  //   'category'          => 'amana',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/hero-steps.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero-steps.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page', 'news', 'project' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
  //     'mode' => false,
  //   )
  // ));

  // Color Cards Slider
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'color-cards-slider',
  //   'title'             => __( 'Color Cards Slider', 'skel' ),
  //   'category'          => 'amana',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/color-cards-slider.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/color-cards-slider.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page', 'news', 'project' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
  //     'mode' => false,
  //   )
  // ));

  // Color Cards with Overlay Details Slider
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'color-cards-with-overlay-details-slider',
    'title'             => __( 'Color Cards with Overlay Details Slider', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/color-cards-with-overlay-details-slider.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/color-cards-with-overlay-details-slider.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Simple Content
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'simple-content',
    'title'             => __( 'Simple Content', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/simple-content.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/simple-content.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Global Map
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'global-map',
  //   'title'             => __( 'Global Map', 'skel' ),
  //   'category'          => 'amana',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/global-map.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/global-map.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page', 'news', 'project' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
  //     'mode' => false,
  //   )
  // ));

  // Two Equal Cards with Image on Hover
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'two-equal-cards-with-image-on-hover',
    'title'             => __( 'Two Equal Cards with Image on Hover', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/two-equal-cards-with-image-on-hover.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/two-equal-cards-with-image-on-hover.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Two Equal Cards with Popup
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'two-equal-cards-with-popup',
  //   'title'             => __( 'Two Equal Cards with Popup', 'skel' ),
  //   'category'          => 'amana',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/two-equal-cards-with-popup.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/two-equal-cards-with-popup.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page', 'news', 'project' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
  //     'mode' => false,
  //   )
  // ));

  // Quote
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'quote',
    'title'             => __( 'Quote', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/quote.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/quote.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Cards Grid
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'cards-grid',
    'title'             => __( 'Cards Grid', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/cards-grid.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/cards-grid.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Overlay
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'overlay',
  //   'title'             => __( 'Overlay', 'skel' ),
  //   'category'          => 'amana',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/overlay.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/overlay.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page', 'news', 'project' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
  //     'mode' => false,
  //   )
  // ));

  // Two Equal Cards
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'twp-equal-cards',
    'title'             => __( 'Two Equal Cards', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/two-equal-cards.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/two-equal-cards.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Vertical with Products
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'vertical-with-products',
    'title'             => __( 'Vertical with Products', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/vertical-with-products.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/vertical-with-products.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Banner with Content
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'banner-with-content',
  //   'title'             => __( 'Banner with Content', 'skel' ),
  //   'category'          => 'amana',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/banner-with-content.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/banner-with-content.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page', 'news', 'project' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
  //     'mode' => false,
  //   )
  // ));

  // Expanding Projects Slider
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'expanding-projects-slider',
    'title'             => __( 'Expanding Projects Slider', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/expanding-projects-slider.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/expanding-projects-slider.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Masonry Slider
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'masonry-slider',
  //   'title'             => __( 'Masonry Slider', 'skel' ),
  //   'category'          => 'amana',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/masonry-slider.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/masonry-slider.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page', 'news', 'project' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
  //     'mode' => false,
  //   )
  // ));


  // Download Media Filter
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'download-media-filter',
    'title'             => __( 'Download Media Filter', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/download-media-filter.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/download-media-filter.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Latest News
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'all-news',
    'title'             => __( 'All News', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/all-news.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/download-media-filter.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Our Featured Work
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'our-featured-work',
    'title'             => __( 'Our Featured Work', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/our-featured-work.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/our-featured-work.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false
    )
  ));

  // NEW BLOCKS
  ////////////////////////////////////////////////

  // Hero Scrolling headings
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'hero-scrolling-headings',
    'title'             => __( 'Hero Scrolling Headings', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/hero-scrolling-headings.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero-scrolling-headings.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Tab Content Slider
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'tab-content-slider',
    'title'             => __( 'Tab Content Slider', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/tab-content-slider.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/tab-content-slider.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Three Cards with Heading Slider
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'three-cards-with-heading-slider',
    'title'             => __( 'Three Cards with Heading Slider', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/three-cards-with-heading-slider.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/three-cards-with-heading-slider.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Global Offices
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'global-offices',
    'title'             => __( 'Global Offices', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/global-offices.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/global-offices.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Masked video with Content
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'masked-video-with-content',
    'title'             => __( 'Masked video with Content', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/masked-video-with-content.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/global-offices.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Two Equal Flip Cards
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'two-equal-flip-cards',
    'title'             => __( 'Two Equal Flip Cards', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/two-equal-flip-cards.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/two-equal-flip-cards.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Featured Projects with Thumbnails Slider
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'featured-projects-with-thumbnails-slider',
    'title'             => __( 'Featured Projects with Thumbnails Slider', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/featured-projects-with-thumbnails-slider.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/featured-projects-with-thumbnails-slider.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Single Image with Content Slider
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'single-image-with-content-slider',
    'title'             => __( 'Single Image with Content Slider', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/single-image-with-content-slider.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/single-image-with-content-slider.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Award Cards
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'award-cards',
    'title'             => __( 'Award Cards', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/award-cards.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/award-cards.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Latest News Grid
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'latest-news-grid',
    'title'             => __( 'Latest News Grid', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/latest-news-grid.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/latest-news-grid.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Featured News Grid
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'featured-news-grid',
    'title'             => __( 'Featured News Grid', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/featured-news-grid.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/featured-news-grid.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // List Logos
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'list-logos',
    'title'             => __( 'List Logos', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/list-logos.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/list-logos.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Team Cards Slider
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'team-cards-slider',
    'title'             => __( 'Team Cards Slider', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/team-cards-slider.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/team-cards-slider.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Scrolling Statistics
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'scrolling-statistics',
    'title'             => __( 'Scrolling Statistics', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/scrolling-statistics.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/scrolling-statistics.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Vertical Slider with icon and details
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'vertical-slider-with-icon-and-details',
    'title'             => __( 'Vertical Slider with icon and details', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/vertical-slider-with-icon-and-details.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/vertical-slider-with-icon-and-details.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Simple Banner
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'simple-banner',
    'title'             => __( 'Simple Banner', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/simple-banner.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/simple-banner.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Simple Banner with Popup Video
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'simple-banner-with-popup-video',
    'title'             => __( 'Simple Banner with Popup Video', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/simple-banner-with-popup-video.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/simple-banner-with-popup-video.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Empty Black Block
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'empty-black-block',
    'title'             => __( 'Empty Black Block', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/empty-black-block.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/empty-black-block.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Three Columns with Number and Text
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'three-columns-with-number-and-text',
    'title'             => __( 'Three Columns with Number and Text', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/three-columns-with-number-and-text.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/three-columns-with-number-and-text.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Three Text Cards
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'three-text-cards',
    'title'             => __( 'Three Text Cards', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/three-text-cards.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/three-text-cards.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Two Column Contact Cards
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'two-column-contact-cards',
    'title'             => __( 'Two Column Contact Cards', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/two-column-contact-cards.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/two-column-contact-cards.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // History Timeline
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'history-timeline',
    'title'             => __( 'History Timeline', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/history-timeline.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/history-timeline.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // All Awards
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'all-awards',
    'title'             => __( 'All Awards', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/all-awards.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/all-awards.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));


  // Project Meta
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'project-meta',
    'title'             => __( 'Project Meta', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/project-meta.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/project-meta.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));


  // Contact Form
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'contact-form',
    'title'             => __( 'Contact Form', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/contact-form.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/contact-form.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Banner with Content Box
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'banner-with-content-box',
    'title'             => __( 'Banner with Content Box', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/banner-with-content-box.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/banner-with-content-box.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

  // Two Columns with Quote
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'two-columns-with-quote',
    'title'             => __( 'Two Columns with Quote', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/two-columns-with-quote.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/two-columns-with-quote.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

	// Three Cards with Image Popup
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'three-cards-with-image-pop-up',
    'title'             => __( 'Three Cards with Image Popup', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/three-cards-with-image-pop-up.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/three-cards-with-image-pop-up.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

	// Advanced History Timeline
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'advanced-history-timeline',
    'title'             => __( 'Advanced History Timeline', 'skel' ),
    'category'          => 'amana',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/advanced-history-timeline.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/advanced-history-timeline.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'news', 'project' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
      'mode' => false,
    )
  ));

}


// Check if function exists and hook into setup
////////////////////////////////////////////////
if ( function_exists( 'acf_register_block_type' ) ) {
  add_action( 'acf/init', 'skel_register_acf_blocks' );
}
