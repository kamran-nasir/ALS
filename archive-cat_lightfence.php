<?php get_header(); ?>

<section class="inner-hero bg-primary pt-8 pt-lg-12 pb-8 pb-lg-12 position-relative overflow-hidden fade-animation">
  <div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9 col-xl-6">
				<div class="hero-content position-relative z-index-1 text-center text-white">
				  <h2 class="heading-animation text-white"><?php echo get_queried_object()->name; //var_dump(get_queried_object())?></h2>
				</div> <!-- .hero-content -->
			</div> <!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
	<img src="<?php echo get_template_directory_uri(); ?>/images/bg-lines-2.png" alt="" class="img-cover has-parallax-effect" data-speed="auto">
</section> <!-- .inner-hero -->


<?php get_footer(); ?>