
<?php
//  Block options   
  $heading             = get_field('heading');
  $description         = get_field('description');
  $gallery_list     	   = get_field('gallery_list');
//  Developer options
  $padding_top         = get_field( 'padding_top' );
  $padding_bottom      = get_field( 'padding_bottom' );
  $custom_classes      = get_field( 'custom_classes' );
  $custom_css          = get_field( 'custom_css' );
?>

<section class="centered-gallery pt-10 pb-10">
  <div class="container">
		<div class="row justify-content-center text-center mb-7">
			<div class="col-md-7">
				<div class="title-row">
					<div class="title-wrap">
						<h2 class="heading-animation m-0"><?php echo $heading;?></h2>
						<div class="fade-animation">
							<span class="bottom-line line-centered"></span>
						</div> <!-- .fade-animation -->
					</div> <!-- .title-wrap -->
					<p class="text-animation"><?php echo $description;?></p>
				</div> <!-- .title-row -->
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
		<div class="row">
			<div class="col-12">
				<div class="centered-swiper">
					<div class="swiper-wrapper lr_scroll">
                        <?php if( $gallery_list ) {				
				                foreach( $gallery_list as $row ) { ?>
                                    <div class="swiper-slide">
                                        <div class="card-image">
                                            <?php
                                                    $image_data = wp_get_attachment_image_src( $row['gallery'], 'w1920' );
                                                    $image_alt = get_post_meta( $row['gallery'], '_wp_attachment_image_alt', true );
                                                    $image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
                                            ?>
                                            <img
                                                src="<?php echo wp_get_attachment_image_url( $row['gallery'], 'w1920' ); ?>"
                                                srcset="<?php echo wp_get_attachment_image_srcset( $row['gallery'] ); ?>"
                                                sizes="100vw"
                                                alt="<?php echo $image_alt; ?>"
                                                width="<?php echo $image_data[1]; ?>"
                                                height="<?php echo $image_data[2]; ?>"
                                                class=" img-cover has-parallax-effect"
                                                data-speed="auto"    
                                            />                                            
                                        </div>
                                    </div>
                            <?php }
                        }    ?>        
					</div>
				</div>
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
  </div>
</section>