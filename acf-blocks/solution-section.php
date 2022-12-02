<?php
//  Block options
  $heading             = get_field('heading');
  $description         = get_field('description');
  $description_copy     = get_field('description_copy');
//  Developer options
  $padding_top          = get_field( 'padding_top' );
  $padding_bottom       = get_field( 'padding_bottom' );
  $custom_classes       = get_field( 'custom_classes' );
  $custom_css           = get_field( 'custom_css' );
?>

<section class="solution-section fade-animation pt-5 pt-lg-10 pb-5 pb-lg-5 <?php echo $spacing_top; ?> <?php echo $spacing_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>" id="<?php echo $custom_id; ?>">
	<div class="container">
		<div class="row justify-content-center text-center mb-5">
			<div class="col-md-9 col-xl-4">
			  <div class="title-row">
					<h3 class="heading-animation m-0"><?php echo $heading;?></h3>
					<div class="fade-animation">
					  <span class="bottom-line line-centered"></span>
					</div> <!-- .fade-animation -->
				</div> <!-- .title-row -->
				<p class="text-animation"><?php echo $description;?></p>
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
        <div class="row solution-slider-wrapper">
            <div class="col-12">
                <div class="solution-slider swiper-container three-cards-slider">
                    <div class="solution-slider-wrapper swiper-wrapper">
                        <?php
                            $args = array(
                                'post_type'      => 'solution',
                                'posts_per_page' => 10,
                            );
                            $loop = new WP_Query($args);
                            while ( $loop->have_posts() ) {
                                $loop->the_post();  ?>
                                <div class="solution-slider-item swiper-slide stagger-animation">
                                    <div class="solution-header">
                                        <div class="solution-img img-cover-block">
                                            <?php
                                                $image_data = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'w1920' );
                                                $image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
                                                $image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
                                            ?>
                                            <img
                                                src="<?php echo wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'w1920' ) ?>"
                                                srcset="<?php echo wp_get_attachment_image_srcset( get_post_thumbnail_id( $post->ID ) ) ?>"
                                                sizes="100vw"
                                                alt="<?php echo $image_alt; ?>"
                                                width="<?php echo $image_data[1]; ?>"
                                                height="<?php echo $image_data[2]; ?>"
                                                class=" has-parallax-effect"
                                                data-speed="auto"
                                            />
                                        </div> <!-- .solution-img -->
                                    </div> <!-- .solution-header -->
                                    <a href="<?php the_permalink();?>" class="solution-footer">
                                        <h4 class="solution-text mb-2 fw-medium"><?php the_title();?></h4>
                                        <p><?php the_content();?></p>
                                        <div class="button">
                                            <button type="button" class="btn btn-inline p-0" href="<?php the_permalink();?>">Explore</button>
                                        </div> <!-- .button -->
                                    </a> <!-- .solution-footer -->
                                </div> <!-- .solution-slider-item -->
                                <?php
                            }
                            ?>
                    </div> <!-- .solution-slider-wrapper -->
                </div> <!-- .solution-slider -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .solution-section -->
