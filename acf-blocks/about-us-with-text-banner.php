<?php
//  Block options
  $background_image_one    = get_field('background_image_one');
  $background_image_two    = get_field('background_image_two');
  $heading             = get_field('heading');
  $description         = get_field('description');
  $button              = get_field('button');
//  Developer options
  $padding_top          = get_field( 'padding_top' );
  $padding_bottom       = get_field( 'padding_bottom' );
  $custom_classes       = get_field( 'custom_classes' );
  $custom_css           = get_field( 'custom_css' );
?>

<section class="text-with-offset-images position-relative z-index-1 pt-5 pt-lg-10 pb-5 pb-lg-0 <?php echo $spacing_top; ?> <?php echo $spacing_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>" id="<?php echo $custom_id; ?>">
    <div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 pe-lg-8">
				<div class="title-row">
					<h3 class="heading-animation m-0"><?php echo $heading;?></h3>
					<div class="fade-animation">
					  <span class="bottom-line"></span>
					</div> <!-- .fade-animation -->
				</div> <!-- .title-row -->
				<p class="text-animation"><?php echo $description;?></p>
				<div class="text-animation">
            <?php if ( is_array($button) && $button['url'] != '' ) { ?>
                <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target'] ?>" class="btn btn-inline p-0"><?php echo ($button['title'] != '') ? $button['title'] : 'About Us'; ?></a>
            <?php } ?>
				</div>
				</div> <!-- .col-md-6 -->
				<div class="col-lg-6 images-wrapper position-relative">
					<div class="img-large frame-img overflow-hidden position-relative fade-animation">
            <?php
              $image_data = wp_get_attachment_image_src( $background_image_one, 'w1920' );
              $image_alt = get_post_meta( $background_image_one, '_wp_attachment_image_alt', true );
              $image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
            ?>
            <img
              src="<?php echo wp_get_attachment_image_url( $background_image_one, 'w1920' ) ?>"
              srcset="<?php echo wp_get_attachment_image_srcset( $background_image_one ) ?>"
              sizes="100vw"
              alt="<?php echo $image_alt; ?>"
              width="<?php echo $image_data[1]; ?>"
              height="<?php echo $image_data[2]; ?>"
              class="img-cover has-parallax-effect"
              data-speed="auto"
            />
					</div>
					<div class="img-small frame-img overflow-hidden position-relative stagger-animation">
          <?php
            $image_data = wp_get_attachment_image_src( $background_image_two, 'w1920' );
            $image_alt = get_post_meta( $background_image_two, '_wp_attachment_image_alt', true );
            $image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
          ?>
          <img
            src="<?php echo wp_get_attachment_image_url( $background_image_two, 'w1920' ) ?>"
            srcset="<?php echo wp_get_attachment_image_srcset( $background_image_two ) ?>"
            sizes="100vw"
            alt="<?php echo $image_alt; ?>"
            width="<?php echo $image_data[1]; ?>"
            height="<?php echo $image_data[2]; ?>"
            class="img-cover has-parallax-effect"
            data-speed="auto"
          />
					</div>
			</div> <!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .text-with-offset-images -->
