<?php get_header();?>


<?php while (have_posts()) : the_post(); ?>
<section class="inner-hero bg-primary text-white position-relative overflow-hidden fade-animation pt-8 pt-lg-12 pb-8 pb-lg-12 ">
  <div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9 col-xl-8">
				<div class="hero-content position-relative z-index-1 text-center text-white">
				  <h2 class="heading-animation text-white"><?php echo get_the_title();?></h2>
				</div> <!-- .hero-content -->
			</div> <!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
	<img src="<?php echo get_template_directory_uri(); ?>/images/bg-lines-2.png" alt="" class="img-cover has-parallax-effect" data-speed="auto">
</section> <!-- .inner-hero -->


			
<div class="solution-section fade-animation pt-5 pt-lg-10 pb-5 pb-lg-5 <?php echo $spacing_top; ?> <?php echo $spacing_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>" id="<?php echo $custom_id; ?>">
	<div class="container">
        <div class="row solution-slider-wrapper">
            <div class="col-12">
                <div class="solution-slider swiper-container three-cards-slider">
                    <div class="solution-slider-wrapper swiper-wrapper">
                         <?php the_content();?>
                    </div> <!-- .solution-slider-wrapper -->
                </div> <!-- .solution-slider -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .solution-section --><?php endwhile; ?>


<?php get_footer(); ?>