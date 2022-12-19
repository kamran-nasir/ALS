<?php
//  Block options
    $heading                 = get_field('heading');
    $scrolling_text          = get_field('cards_list');
//  Developer options
    $padding_top             = get_field( 'padding_top' );
    $padding_bottom          = get_field( 'padding_bottom' );
    $custom_classes          = get_field( 'custom_classes' );
    $custom_css              = get_field( 'custom_css' );
    $custom_id           = get_field( 'custom_id' );

?>


<section class="cards-with-hover position-relative pt-5 pt-lg-10 pb-10 pt-5 pt-lg-10   <?php echo $padding_top; ?> <?php echo $padding_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>" id="<?php echo $custom_id; ?>">
  <div class="container">
		<div class="row justify-content-center text-center mb-3">
			<div class="col-md-9 col-xl-8">
				<div class="title-row">
					<div class="title-wrap">
						<h3 class="heading-animation m-0"><?php echo $heading;?></h3>
						<div class="fade-animation">
							<span class="bottom-line line-centered"></span>
						</div> <!-- .fade-animation -->
					</div> <!-- .title-wrap -->
				</div> <!-- .title-row -->
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
		<div class="row gy-3 gx-lg-10 gy-lg-5">
        <?php if( $scrolling_text ) {
            foreach( $scrolling_text as $row ) { ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card d-flex align-items-center stagger-animation">
                        <span class="icon flex-shrink-0">
                        <?php
                            $image_data = wp_get_attachment_image_src( $row['icon'], 'w1920' );
                            $image_alt = get_post_meta( $row['icon'], '_wp_attachment_image_alt', true );
                            $image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
                        ?>
                        <img
                            src="<?php echo wp_get_attachment_image_url( $row['icon'], 'w1920' ); ?>"
                            srcset="<?php echo wp_get_attachment_image_srcset( $row['icon'] ); ?>"
                            sizes="100vw"
                            alt="<?php echo $image_alt; ?>"
                            width="<?php echo $image_data[1]; ?>"
                            height="<?php echo $image_data[2]; ?>"
                        />
                        </span>
                        <h5 class="flex-grow-1 ms-2-5 mt-0"><?php echo $row['title']; ?></h5>
                    </div> <!-- .card -->
                </div> <!-- .col-md-4 -->
                <?php }
            }?>
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .cards-with-hover pt-10 pb-10 -->