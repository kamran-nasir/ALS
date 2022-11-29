
<?php
//  Block options
    $background_image_one    = get_field('background_image_one');
    $background_image_two    = get_field('background_image_two');
    $heading                 = get_field('heading');
    $description             = get_field('description');
    $button                  = get_field('button');
//  Developer options
    $padding_top            = get_field( 'padding_top' );
    $padding_bottom          = get_field( 'padding_bottom' );
    $custom_classes          = get_field( 'custom_classes' );
    $custom_css              = get_field( 'custom_css' );
?>

<section class="download-catalog pb-10">
	<div class="container position-relative overflow-hidden">
		<div class="row">
			<div class="col-12">
				<div class="bg-midnight-200">
					<div class="d-flex flex-wrap align-items-center position-relative z-index-1 overflow-hidden">
						<div class="col-lg-5 ps-lg-6 p-5">
							<div class="title-row">
								<h2 class="heading-animation m-0"><?php echo $heading;?></h2>
								<div class="fade-animation">
									<span class="bottom-line"></span>
								</div> <!-- .fade-animation -->
							</div> <!-- .title-row -->
							<p class="text-animation"><?php echo $description;?></p>
							<div class="text-animation">
                            <?php if ( is_array($button) && $button['url'] != '' ) { ?>
                                <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target'] ?>" class="btn btn-secondary btn-rarr"><?php echo ($button['title'] != '') ? $button['title'] : 'Download'; ?></a>
                            <?php } ?>
							</div>
						</div> <!-- .col-md-4 -->
						<div class="col-lg-7">
							<div class="img-wrapper fade-animation">
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
                            />
							</div> <!-- .img-wrapper -->
						</div> <!-- .col-md-8 -->
					</div> <!-- .d-flex flex-wrap -->
				</div> <!-- .bg-midnight-200 position-relative -->
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
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
            class="img-cover has-parallax-effect" data-speed="auto"
        />
	</div> <!-- .container -->
</section> <!-- .download-catalog -->
