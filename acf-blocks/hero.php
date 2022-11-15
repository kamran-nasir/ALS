
<?php
//  Block options
  $background_image    = get_field('background_image');
  $heading             = get_field('heading');
  $description         = get_field('description');
  $button              = get_field('button');
//  Developer options
  $padding_top          = get_field( 'padding_top' );
  $padding_bottom       = get_field( 'padding_bottom' );
  $custom_classes       = get_field( 'custom_classes' );
  $custom_css           = get_field( 'custom_css' );
?>
<section class="homepage-hero bg-darkest text-white <?php echo $spacing_top; ?> <?php echo $spacing_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>" id="<?php echo $custom_id; ?>">

	<div class="banner-box banner-with-overlay img-cover-block hero-bg">
	<?php
			$image_data = wp_get_attachment_image_src( $background_image, 'w1920' );
			$image_alt = get_post_meta( $background_image, '_wp_attachment_image_alt', true );
			$image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
	?>
	<img
		src="<?php echo wp_get_attachment_image_url( $background_image, 'w1920' ) ?>"
		srcset="<?php echo wp_get_attachment_image_srcset( $background_image ) ?>"
		sizes="100vw"
		alt="<?php echo $image_alt; ?>"
		width="<?php echo $image_data[1]; ?>"
		height="<?php echo $image_data[2]; ?>"
		class="img-cover has-parallax-effect"
		data-speed="1.1"
	/>
	</div> <!-- .hero-bg -->
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-md-6">
				<div class="homepage-hero__content z-index-1 position-relative">
					<div class="title-row">
						<h1 class="hero-heading-animation text-white"><?php echo $heading;?></h1>
					</div> <!-- .title-row -->
					<div class="overflow-hidden">
					  <p class="hero-text-animation"><?php echo $description;?></p>
					</div> <!-- .overflow-hidden -->
					<div class="overflow-hidden hero-text-animation">
						<?php if ( is_array($button) && $button['url'] != '' ) { ?>
							<a href="<?php echo $button['url']; ?>" target="<?php echo $button['target'] ?>" class="btn btn-secondary btn-rarr"><?php echo ($button['title'] != '') ? $button['title'] : 'Learn more'; ?></a>
						<?php } ?>
					</div>
				</div> <!-- .hero-content -->
			</div> <!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .hero -->