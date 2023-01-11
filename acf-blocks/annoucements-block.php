<?php
//  Block options
  $background_image_one     = get_field('background_image_one');
  $heading                  = get_field('heading');
  $page_heading             = get_field('page_heading');
  $description              = get_field('description');
  $button                   = get_field('button');
//  Developer options
  $padding_top              = get_field( 'padding_top' );
  $padding_bottom           = get_field( 'padding_bottom' );
  $custom_classes           = get_field( 'custom_classes' );
  $custom_css               = get_field( 'custom_css' );
  $custom_id		        = get_field( 'custom_id' );

?>


<section class="annoucements">
	<div class="container">
  <div class="row justify-content-center text-center mb-3">
		<div class="col-md-7">
			<div class="title-row">
				<div class="title-wrap">
					<h2 class="heading-animation m-0"><?php echo $heading;?></h2>
					<div class="fade-animation">
						<span class="bottom-line line-centered"></span>
					</div> <!-- .fade-animation -->
				</div> <!-- .title-wrap -->
			</div> <!-- .title-row -->
		</div> <!-- .col-12 -->
	</div> <!-- .row -->
	<div class="row justify-content-center align-items-center">
		<div class="col-md-5">
			<div class="img-cover-block">
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
            class="img-cover"
            data-speed="auto"
          />
		</div> <!-- .img-cover-block -->
		</div> <!-- .col-md-6 -->
		<div class="col-md-5">
			<div class="content-wrap">
			   <div class="title-row">
					<div class="title-wrap">
						<h3 class="heading-animation m-0"><?php echo $page_heading;?></h3>
						<div class="fade-animation">
							<span class="bottom-line"></span>
						</div> <!-- .fade-animation -->
					</div> <!-- .title-wrap -->
					<p class="text-animation desc-md"><?php echo $description;?></p>
				</div> <!-- .title-row -->
				<div class="text-animation mt-2">
                <?php if ( is_array($button) && $button['url'] != '' ) { ?>
                <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target'] ?>" class="btn btn-inline p-0"><?php echo ($button['title'] != '') ? $button['title'] : 'About Us'; ?></a>
            <?php } ?>
       	</div>
			</div> <!-- .content-wrap -->
		</div> <!-- .col-md-6 -->
	</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .annoucements -->
