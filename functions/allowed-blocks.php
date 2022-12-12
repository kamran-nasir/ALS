<?php
/*
 * Whitelist specific Gutenberg blocks (paragraph, heading, image and lists)
 *
 * @author Misha Rudrastyh
 * @link https://rudrastyh.com/gutenberg/remove-default-blocks.html#allowed_block_types_all
 */

// Get list of all registered blocks
// Paste it on front-page.php file
/* ========================================== */
// $registered_block_slugs = array_keys( WP_Block_Type_Registry::get_instance()->get_all_registered() );
// echo '<pre>' . print_r( $registered_block_slugs, true ) . '</pre>';

// add_filter( 'allowed_block_types_all', 'misha_allowed_block_types', 25, 2 );

function misha_allowed_block_types( $allowed_blocks, $editor_context ) {

  $allowed_blocks = array(
		'acf/text-editor',
		'acf/hero',
		'acf-blocks/about-us',
		 'acf/banner-with-scrolling-text',
		 'acf/banner-with-text-and-line-art',
		 'acf/banner-with-text-and-line-art-two',
		 'acf/banner-with-text-and-line-art-three',
		// 'acf/news-cards-slider',
		// 'acf/simple-text',
		// 'acf/two-columns-diagonal-text',
		// 'acf/two-columns-diagonal-text-two',
		// 'acf/image-and-text-columns',
		// 'acf/timeline',
		// 'acf/quote',
		// 'acf/team-cards',
		// 'acf/banner-with-three-columns-text',
		// 'acf/complex-text-with-columns',
		// 'acf/list-latest-news',
		// 'acf/list-latest-press-releases',
		// 'acf/publication-cards-slider',
		// 'acf/banner-with-numbers-and-line-art',
		// 'acf/banner-with-accordion',
		// 'acf/two-columns-diagonal-text-three',
		// 'acf/portfolio-map',
		// 'acf/contact-map',
		// 'acf/project-details',
		// 'acf/page-hero',
		// 'acf/all-press-releases',
		// 'acf/all-news',
	);

  // Allow more blocks depending on the post type
  // Same can also be used for specific post ID or users roles
	if ( 'CUSTOM_POST_TYPE' === $editor_context->post->post_type ) {
    $post_allowed_blocks = array(
      'core/image',
    );
		$allowed_blocks = array_merge( $post_allowed_blocks );
	}

	return $allowed_blocks;

}
?>