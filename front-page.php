<?php /* Template Name: Test*/ ?>

<?php get_header(); ?>
<section class="homepage-hero bg-darkest text-white">
	<div class="homepage-hero__inner">
	<div class="banner-box img-cover-block hero-bg">
	  <img src="<?php echo get_template_directory_uri(); ?>/images/hero-bg.jpg" class="img-cover" alt="">
	</div> <!-- .hero-bg -->
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-md-6">
				<div class="hero__content z-index-1 position-relative">
					<h1>It has the aesthetics of wood with far more durability!</h1>
					<p>We allow you to explore the elegance and beauty of nature without harming it. The materials we picked are completely maintenance-free and have a long lifespan.</p>
					<div class="d-grid d-sm-flex gap-3">
						<a class="btn btn-primary btn-transition px-6" href="#0">Get started</a>
						<a class="btn btn-link" href="#0">Learn more</a>
					</div>
				</div> <!-- .hero-content -->
			</div> <!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
	</div> <!-- .homepage-hero__inner -->
</section> <!-- .hero -->
<?php get_footer(); ?>