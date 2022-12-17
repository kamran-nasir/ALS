

<?php
//  Block options
    $background_image_one    = get_field('background_image');
    $heading                 = get_field('heading');
    $description             = get_field('description');
    $card_heading            = get_field('card_heading');
    $card_description        = get_field('card_description');
    $scrolling_text          = get_field('scrolling_text');
//  Developer options
    $padding_top             = get_field( 'padding_top' );
    $padding_bottom          = get_field( 'padding_bottom' );
    $custom_classes          = get_field( 'custom_classes' );
    $custom_css              = get_field( 'custom_css' );
    $custom_id           = get_field( 'custom_id' );

?>


<section class="offset-img-with-text pt-5 pt-lg-10     <?php echo $padding_top; ?> <?php echo $padding_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>" id="<?php echo $custom_id; ?>">
	<div class="container">
	  <div class="row justify-content-center text-center mb-7">
			<div class="col-md-9 col-xl-6">
				<div class="title-row">
					<div class="title-wrap">
						<h3 class="heading-animation m-0"><?php echo $heading;?></h3>
						<div class="fade-animation">
							<span class="bottom-line line-centered"></span>
						</div> <!-- .fade-animation -->
					</div> <!-- .title-wrap -->
					<p class="text-animation"><?php echo $description;?></p>
				</div> <!-- .title-row -->
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
		<div class="row g-0 align-items-center justify-content-end">
			<div class="col-md-10 col-xl-6 col-left-fluid bg-midnight-200 ps-2 pe-2 pt-5 pt-lg-10 pb-5 pb-md-14 pb-lg-10">
				<div class="title-row col-md-10 mb-5">
					<div class="title-wrap">
						<h3 class="heading-animation m-0"><?php echo $card_heading;?></h3>
						<div class="fade-animation">
							<span class="bottom-line"></span>
						</div> <!-- .fade-animation -->
						<p class="text-animation desc-md">
						<?php echo $card_description;?>
						</p>
					</div> <!-- .title-wrap -->
				</div> <!-- .title-row -->
				<ul class="icon-with-text spaces-md list-unstyled mb-md-10 mb-lg-0">
                <?php if( $scrolling_text ) {
                    foreach( $scrolling_text as $row ) { ?>
                            <li class="stagger-animation">
                                <span class="icon flex-shrink-0">
                                <?php
                                    $image_data = wp_get_attachment_image_src( $row['image'], 'w1920' );
                                    $image_alt = get_post_meta( $row['gallery'], '_wp_attachment_image_alt', true );
                                    $image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
                                ?>
                                <img
                                    src="<?php echo wp_get_attachment_image_url( $row['image'], 'w1920' ); ?>"
                                    srcset="<?php echo wp_get_attachment_image_srcset( $row['image'] ); ?>"
                                    sizes="100vw"
                                    alt="<?php echo $image_alt; ?>"
                                    width="<?php echo $image_data[1]; ?>"
                                    height="<?php echo $image_data[2]; ?>"
                                />
                                </span> <!-- .icon -->
                                <span class="text text-midnight-500 flex-grow-1 ms-1-5">
                                <?php echo $row['heading']; ?>
                                    <span class="text-dark-grey d-block small fw-light"><?php echo $row['description']; ?></span>
                                </span> <!-- .text -->
                            </li>                           
                        <?php }
                    }?>        
				</ul> <!-- .list-unstyled -->
			</div> <!-- .col-md-6 -->
			<div class="col-md-10 col-xl-6 fade-animation">
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
                class="img-cover has-parallax-effect" 
                data-speed="auto"
            />
			</div> <!-- .img-cover-block -->
			</div> <!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .equal-cols -->
