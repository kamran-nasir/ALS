
<?php
  // Block options   
//  $bg_color             = get_field('background_color');
  // Developer options
//   $padding_top          = get_field( 'padding_top' );
//   $padding_bottom       = get_field( 'padding_bottom' );
//   $custom_classes       = get_field( 'custom_classes' );
//   $custom_css           = get_field( 'custom_css' );
?>

<section class="homepage-hero bg-darkest text-white">
	<div class="banner-box banner-with-overlay img-cover-block hero-bg">
		<img src="<?php echo get_template_directory_uri(); ?>/images/hero-bg-2.jpg" alt="" class="img-cover has-parallax-effect" data-speed="1.1">
	</div> <!-- .hero-bg -->
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-md-6">
				<div class="homepage-hero__content z-index-1 position-relative">
					<div class="title-row">
						<h1 class="hero-heading-animation text-white">Welcome to ALS</h1>
					</div> <!-- .title-row -->
					<div class="overflow-hidden">
					  <p class="hero-text-animation">Our innovative aluminum based, low maintenance & rust-free architectural solutions turn your outdoor spaces into little pieces of heaven.</p>
					</div> <!-- .overflow-hidden -->
					<div class="overflow-hidden hero-text-animation">
						<a class="btn btn-secondary btn-rarr" href="#0">Become a dealer</a>
					</div>
				</div> <!-- .hero-content -->
			</div> <!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .hero -->