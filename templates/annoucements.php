<?php /* Template Name: Annoucement*/ ?>
<?php get_header(); ?>
<?php the_content(); ?>
<?php
global $wpdb; 
$args = array(
    'post_type' => 'annoucements',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'title',    
    'order' => 'asc',
);?>
			
<div class="solution-section fade-animation pt-5 pt-lg-10 pb-5 pb-lg-5 <?php echo $spacing_top; ?> <?php echo $spacing_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>" id="<?php echo $custom_id; ?>">
	<div class="container">
        <div class="row solution-slider-wrapper">
            <div class="col-12">
                <div class="solution-slider swiper-container three-cards-slider">
                    <div class="solution-slider-wrapper swiper-wrapper">
                          <?php $loop = new WP_Query( $args ); 	while ( $loop->have_posts() ) : $loop->the_post();?>
                                <div class="solution-slider-item swiper-slide stagger-animation">
                                    <div class="solution-header">
                                        <div class="solution-img img-cover-block">
                                            <?php //echo get_the_ID();
                                                $post_thumbnail_id = get_post_meta( get_the_ID(), '_thumbnail_id', true );

                                                $image_data = wp_get_attachment_image_src( $post_thumbnail_id, 'w1920' );
                                                $image_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
                                                $image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
                                              ?>
                                              <img
                                                src="<?php echo wp_get_attachment_image_url( $post_thumbnail_id, 'w1920' ); ?>"
                                                srcset="<?php echo wp_get_attachment_image_srcset( $post_thumbnail_id ); ?>"
                                                sizes="100vw"
                                                alt="<?php echo $image_alt; ?>"
                                                width="<?php echo $image_data[1]; ?>"
                                                height="<?php echo $image_data[2]; ?>"
                                                class=" has-parallax-effect"
                                                data-speed="auto"
                                              />
                                        </div> <!-- .solution-img -->
                                    </div> <!-- .solution-header -->
                                    <a href="<?php echo get_the_permalink();?>" class="solution-footer">
                                        <h4 class="solution-text mb-2 fw-medium"><?php echo get_the_title();?></h4>
                                        <p><?php $excerpt = get_the_excerpt(); echo $excerpt = substr( $excerpt, 0, 55 );?></p>
                                        <div class="button">
                                            <button type="button" class="btn btn-inline p-0" href="<?php echo get_the_permalink();?>">Explore</button>
                                        </div> <!-- .button -->
                                    </a> <!-- .solution-footer -->
                                </div> <!-- .solution-slider-item -->
                        <?php endwhile;?>
                    </div> <!-- .solution-slider-wrapper -->
                </div> <!-- .solution-slider -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .solution-section -->


<?php get_footer(); ?> 