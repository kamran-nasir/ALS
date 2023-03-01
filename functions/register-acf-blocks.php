<?php

// Create a new block category
////////////////////////////////////////////////
function skel_block_category( $categories, $post ) {
  return array_merge(
    $categories,
    array(
      array(
        'slug' => 'mubadala',
        'title' => 'Mubadala',
      ),
    )
  );
}
add_filter( 'block_categories_all', 'skel_block_category', 10, 2);

function skel_register_acf_blocks() {

  // Text editor
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'text-editor',
    'title'             => 'Text editor',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/text-editor.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/text-editor.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Hero
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'hero',
    'title'             => 'Hero',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/hero.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));


  
  //   // bg-midnight-heading
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'Annoucements Block',
    'title'             => 'annoucements-block',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/annoucements-block.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));




  //   // bg-midnight-heading
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'cards-stamp-about',
    'title'             => 'cards-stamp-about',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/cards-stamp-about.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));




//   // bg-midnight-heading
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'simple-title-lightfence',
    'title'             => 'simple-title-lightfence',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/simple-title-lightfence1.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));




  // bg-midnight-heading
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'bg-midnight-heading',
    'title'             => 'Midnight Heading',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/bg-midnight-heading.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));



 
  //About Us
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'about-us-with-text-banner',
    'title'             => 'About us With Text Banner',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/about-us-with-text-banner.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));





//  intersted-about.php
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'intersted-about',
    'title'             => 'intersted-about',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/intersted-about.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));


//single-product-fence-solution
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'single-product-fence-solution',
    'title'             => 'single-product-fence-solution',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/single-product-fence-solution.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));




  //inner-hero-sub-cat
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'inner-hero-sub-cat.php',
    'title'             => 'inner-hero-sub-cat.php',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/inner-hero-sub-cat.php.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));


  //image-with-heading-solution
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'image-with-heading-solution',
    'title'             => 'image-with-heading-solution',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/image-with-heading-solution.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));



  //simple-title-solution.php
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'simple-title-solution',
    'title'             => 'simple-title-solution',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/simple-title-solution.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));



  //cards-with-hover-about
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'cards-with-hover-about',
    'title'             => 'cards-with-hover-about',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/cards-with-hover-about.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));



  //block-two-heading-with-repeator
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'block-two-heading-with-repeator',
    'title'             => 'block-two-heading-with-repeator',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/block-two-heading-with-repeator.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));



  //bg-with-block-text
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'bg-with-block-text',
    'title'             => 'bg-with-block-text',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/bg-with-block-text.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));


  //simple-title-text
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'simple-title-text',
    'title'             => 'simple-title-text',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/simple-title-text.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));


  //banner-hero-inner
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'banner-hero-inner',
    'title'             => 'banner-hero-inner',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/banner-hero-inner.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

  //About Us
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'count-text-number',
    'title'             => 'Count Text Number',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/count-text-number.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));


  

	// annoucements-section
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'annoucements-section',
    'title'             => 'annoucements-section',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/annoucements-section.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/banner-with-scrolling-text.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));



	// solution-section
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'solution-section',
    'title'             => 'Solution section',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/solution-section1.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/banner-with-scrolling-text.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));



  // Catelog Download
  ////////////////////////////////////////////////

  acf_register_block_type(array(
    'name'              => 'catalog-download',
    'title'             => 'Catalog Download',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/catalog.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));



// Banner-with-equal-text-right-section
  ////////////////////////////////////////////////

  acf_register_block_type(array(
    'name'              => 'banner-with-equal-text-right',
    'title'             => 'Banner with equal text right',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/banner-with-equal-text-right.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));



// Banner-with-equal-text-left-section
  ////////////////////////////////////////////////

  acf_register_block_type(array(
    'name'              => 'banner-with-equal-text-left',
    'title'             => 'Banner With Equal Text Left',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/banner-with-equal-text-left.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));



  // download-section
  ////////////////////////////////////////////////

  acf_register_block_type(array(
    'name'              => 'download-catalog',
    'title'             => 'download catalog',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/download-catalog.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));



  // gallery-section
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'gallery-section',
    'title'             => 'Gallery Section',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/gallery-section.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/banner-with-scrolling-text.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));



  // cards-section
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'cards-with-hover',
    'title'             => 'Cards With Hover',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/cards-with-hover.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/banner-with-scrolling-text.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));





  // -------------------------------------------------------------------------------------------
	// Banner with scrolling text
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'banner-with-scrolling-text',
    'title'             => 'Banner with scrolling text',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/banner-with-scrolling-text.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/banner-with-scrolling-text.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Banner with text and line art
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'banner-with-text-and-line-art',
    'title'             => 'Banner with text and line art',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/banner-with-text-and-line-art.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/banner-with-text-and-line-art.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Banner with text and line art two
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'banner-with-text-and-line-art-two',
    'title'             => 'Banner with text and line art two',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/banner-with-text-and-line-art-two.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/banner-with-text-and-line-art-two.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// News cards slider
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'news-cards-slider',
    'title'             => 'News cards slider',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/news-cards-slider.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/news-cards-slider.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Two columns diagonal text
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'two-columns-diagonal-text',
    'title'             => 'Two columns diagonal text',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/two-columns-diagonal-text.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/two-columns-diagonal-text.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Two columns diagonal text two
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'two-columns-diagonal-text-two',
    'title'             => 'Two columns diagonal text two',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/two-columns-diagonal-text-two.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/two-columns-diagonal-text-two.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Image and text columns
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'image-and-text-columns',
    'title'             => 'Image and text columns',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/image-and-text-columns.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/image-and-text-columns.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Timeline
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'timeline',
    'title'             => 'Timeline',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/timeline.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/timeline.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Quote
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'quote',
    'title'             => 'Quote',
    'category'          => 'mubadala',
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
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Team cards
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'team-cards',
    'title'             => 'Team cards',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/team-cards.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/team-cards.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// List latest news
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'list-latest-news',
    'title'             => 'List latest news',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/list-latest-news.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/list-latest-news.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// List latest press releases
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'list-latest-press-releases',
    'title'             => 'List latest press releases',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/list-latest-press-releases.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/list-latest-press-releases.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Publications cards slider
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'publication-cards-slider',
    'title'             => 'Publication cards slider',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/publication-cards-slider.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/publication-cards-slider.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Banner with three columns text
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'banner-with-three-columns-text',
    'title'             => 'Banner with three columns text',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/banner-with-three-columns-text.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/banner-with-three-columns-text.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Complex text with columns
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'complex-text-with-columns',
    'title'             => 'Complex text with columns',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/complex-text-with-columns.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/complex-text-with-columns.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Banner with numbers and line art
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'banner-with-numbers-and-line-art',
    'title'             => 'Banner with numbers and line art',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/banner-with-numbers-and-line-art.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/banner-with-numbers-and-line-art.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Simple text
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'simple-text',
    'title'             => 'Simple text',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/simple-text.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/simple-text.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Banner with accordion
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'banner-with-accordion',
    'title'             => 'Banner with accordion',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/banner-with-accordion.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/banner-with-accordion.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Two columns diagonal text three
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'two-columns-diagonal-text-three',
    'title'             => 'Two columns diagonal text three',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/two-columns-diagonal-text-three.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/two-columns-diagonal-text-three.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Portfolio map
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'portfolio-map',
    'title'             => 'Portfolio map',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/portfolio-map.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/portfolio-map.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// contact-us-section
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'contact-us-section',
    'title'             => 'Contact Us Section',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/contact-us-section.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/contact-map.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

  // Contact map
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'contact-map',
    'title'             => 'Contact map',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/contact-map.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/contact-map.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// All Press Releases
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'all-press-releases',
    'title'             => 'All Press Releases',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/all-press-releases.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/all-press-releases.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// All News
  ////////////////////////////////////////////////
  // acf_register_block_type(array(
  //   'name'              => 'show-all-news',
  //   'title'             => 'All News',
  //   'category'          => 'mubadala',
  //   'icon' => array(
  //     'background' => '#ff2500',
  //     'foreground' => '#fff',
  //     'src' => 'layout',
  //   ),
  //   'render_template'  	=> 'acf-blocks/all-news.php',
  //   'example'           => [
  //     'attributes' => [
  //       'mode' => 'preview',
  //       'data' => array(
  //         'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/all-news.jpg',
  //       ),
  //     ]
  //   ],
  //   'mode'              => 'edit',
  //   'post_types'        => array( 'page' ),
  //   'supports'          => array(
  //     'align' => false,
  //     'customClassName' => false,
	// 		'mode' => false
  //   )
  // ));

	// Project details
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'project-details',
    'title'             => 'Project details',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/project-details.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/project-details.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'portfolio' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Page hero
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'page-hero',
    'title'             => 'Page hero',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/page-hero.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/page-hero.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page', 'portfolio' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

	// Banner with text and line art three
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'banner-with-text-and-line-art-three',
    'title'             => 'Banner with text and line art three',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/banner-with-text-and-line-art-three.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/banner-with-text-and-line-art-three.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));




	// inner-hero-light-fence
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'inner-hero-light-fence',
    'title'             => 'inner-hero-light-fence',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/inner-hero-light-fence.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/ribbon-text.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));




  // Ribbon Text
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'ribbon-text',
    'title'             => 'Ribbon Text',
    'category'          => 'mubadala',
    'icon' => array(
      'background' => '#ff2500',
      'foreground' => '#fff',
      'src' => 'layout',
    ),
    'render_template'  	=> 'acf-blocks/ribbon-text.php',
    'example'           => [
      'attributes' => [
        'mode' => 'preview',
        'data' => array(
          'preview_image' => get_template_directory_uri() . '/acf-blocks/preview/ribbon-text.jpg',
        ),
      ]
    ],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
      'customClassName' => false,
			'mode' => false
    )
  ));

}


// Check if function exists and hook into setup
////////////////////////////////////////////////
if ( function_exists( 'acf_register_block_type' ) ) {
  add_action( 'acf/init', 'skel_register_acf_blocks' );
}