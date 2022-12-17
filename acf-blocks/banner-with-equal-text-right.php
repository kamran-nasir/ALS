

<?php
//  Block options
    $image                  = get_field('image');
    $heading                 = get_field('heading');
    $description             = get_field('description');
//  Developer options
    $padding_top            = get_field( 'padding_top' );
    $padding_bottom          = get_field( 'padding_bottom' );
    $custom_classes          = get_field( 'custom_classes' );
    $custom_css              = get_field( 'custom_css' );
    $custom_id		           = get_field( 'custom_id' );

?>

<section class="equal-cols pt-10  <?php echo $padding_top; ?> <?php echo $padding_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>" id="<?php echo $custom_id; ?>">
	<div class="container">
		<div class="row g-0 align-items-center  <?php echo $swap;?>">
			<div class="col-md-6">
				<div class="img-cover-block">
                <?php
                        $image_data = wp_get_attachment_image_src( $image, 'w1920' );
                        $image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true );
                        $image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
                ?>
                <img
                    src="<?php echo wp_get_attachment_image_url( $image, 'w1920' ) ?>"
                    srcset="<?php echo wp_get_attachment_image_srcset( $image ) ?>"
                    sizes="100vw"
                    alt="<?php echo $image_alt; ?>"
                    width="<?php echo $image_data[1]; ?>"
                    height="<?php echo $image_data[2]; ?>"
                    class="img-cover has-parallax-effect" 
                    data-speed="auto"
                />
				  <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/col-1.jpg" alt="" class="img-cover has-parallax-effect" data-speed="auto"> -->
				</div> <!-- .img-cover-block -->
			 </div> <!-- .col-md-6 -->
			 <div class="col-md-6">
				<div class="title-row p-10">
					<div class="title-wrap">
						<h3 class="heading-animation m-0"><?php echo $heading;?></h3>
						<div class="fade-animation">
							<span class="bottom-line"></span>
						</div> <!-- .fade-animation -->
					</div> <!-- .title-wrap -->
					<p class="text-animation desc-md"><?php echo $description;?></p>
				</div> <!-- .title-row -->
			 </div> <!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .equal-cols -->