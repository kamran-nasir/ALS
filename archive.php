<?php get_header(); ?>
<?php  $cat_slug = (get_queried_object()->slug);?>



<section class="inner-hero bg-bg-midnight-200 pt-8 pt-lg-12 pb-8 pb-lg-12 position-relative overflow-hidden fade-animation">
  <div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9 col-xl-6">
				<div class="hero-content position-relative z-index-1 text-center">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/light-fence.png" alt="" class="hero-logo">
					<p class="text-animation"><?php $term = get_queried_object();  ?>	
					<?php echo $term->description; // will show taxonomy slug ?></p>
				</div> <!-- .hero-content -->
			</div> <!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
	<img src="<?php echo get_template_directory_uri(); ?>/images/wooden-lines.png" alt="" class="img-cover has-parallax-effect" data-speed="auto">
</section> <!-- .inner-hero -->

<section class="tabs-section">
  <div class="material-tabs d-flex flex-wrap" id="material-tabs">
		<a id="tab1-tab" href="#tab1" class="col active">Overview</a>
		<a id="tab2-tab" href="#tab2" class="col">Configurations</a>
		<span class="yellow-bar"></span>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="tab-content">
					<div id="tab1">
						<div class="row justify-content-center text-center pt-5 pt-lg-10 pb-5 pb-lg-10">
							<div class="col-md-8">
								<div class="title-row">
									<h3 class="text-animation">The foremost market Innovators in manufacturing environment friendly Sunroof Pergola, Sun Shutters, Privacy Screens, & Light Fences.</h3>
								</div> <!-- .title-row -->
							</div> <!-- .col-12 -->
						</div> <!-- .row -->
						<div class="bg-midnight-200 pt-5 pt-lg-10 pb-5 pb-lg-10">
							<div class="row justify-content-center text-center">
								<div class="col-md-7">
									<div class="title-row">
										<div class="title-wrap">
											<h2 class="heading-animation m-0">Love Your Neighbor as Yourself but Don’t Take Down Your Fence</h2>
											<div class="fade-animation">
												<span class="bottom-line line-centered"></span>
											</div> <!-- .fade-animation -->
										</div> <!-- .title-wrap -->
										<p class="text-animation">Carl Sandburg</p>
									</div> <!-- .title-row -->
								</div> <!-- .col-12 -->
							</div> <!-- .row -->
						</div> <!-- .bg-midnight-200 -->
						<div class="cards-with-hover position-relative pt-5 pt-lg-10 pb-10 pt-5 pt-lg-10">
							<div class="row justify-content-center text-center mb-3">
								<div class="col-md-9 col-xl-6">
									<div class="title-row">
										<div class="title-wrap">
											<h3 class="heading-animation m-0">Fence problems</h3>
											<div class="fade-animation">
												<span class="bottom-line line-centered"></span>
											</div> <!-- .fade-animation -->
										</div> <!-- .title-wrap -->
									</div> <!-- .title-row -->
								</div> <!-- .col-12 -->
							</div> <!-- .row -->
							<div class="row gy-3 gx-lg-10 gy-lg-5">
								<div class="col-md-6 col-lg-4">
									<div class="card d-flex align-items-center stagger-animation">
										<span class="icon flex-shrink-0">
											<img src="<?php echo get_template_directory_uri(); ?>/images/ic-value-1.svg" alt="">
										</span>
										<h5 class="flex-grow-1 ms-2-5 mt-0">Easy to install</h5>
									</div> <!-- .card -->
								</div> <!-- .col-md-4 -->
								<div class="col-md-6 col-lg-4">
									<div class="card d-flex align-items-center stagger-animation">
										<span class="icon flex-shrink-0">
											<img src="<?php echo get_template_directory_uri(); ?>/images/ic-value-2.svg" alt="">
										</span>
										<h5 class="flex-grow-1 ms-2-5 mt-0">Lightweight and high strength</h5>
									</div> <!-- .card -->
								</div> <!-- .col-md-4 -->
								<div class="col-md-6 col-lg-4">
									<div class="card d-flex align-items-center stagger-animation">
										<span class="icon flex-shrink-0">
											<img src="<?php echo get_template_directory_uri(); ?>/images/ic-value-3.svg" alt="">
										</span>
										<h5 class="flex-grow-1 ms-2-5 mt-0">Wide range of colors and natural wood designs</h5>
									</div> <!-- .card -->
								</div> <!-- .col-md-4 -->
								<div class="col-md-6 col-lg-4">
									<div class="card d-flex align-items-center stagger-animation">
										<span class="icon flex-shrink-0">
											<img src="<?php echo get_template_directory_uri(); ?>/images/ic-value-4.svg" alt="">
										</span>
										<h5 class="flex-grow-1 ms-2-5 mt-0">Durable under extreme weather conditions</h5>
									</div> <!-- .card -->
								</div> <!-- .col-md-4 -->
								<div class="col-md-6 col-lg-4">
									<div class="card d-flex align-items-center stagger-animation">
										<span class="icon flex-shrink-0">
											<img src="<?php echo get_template_directory_uri(); ?>/images/ic-value-5.svg" alt="">
										</span>
										<h5 class="flex-grow-1 ms-2-5 mt-0">Affordable and maintenance free</h5>
									</div> <!-- .card -->
								</div> <!-- .col-md-4 -->
								<div class="col-md-6 col-lg-4">
									<div class="card d-flex align-items-center stagger-animation">
										<span class="icon flex-shrink-0">
											<img src="<?php echo get_template_directory_uri(); ?>/images/ic-value-6.svg" alt="">
										</span>
										<h5 class="flex-grow-1 ms-2-5 mt-0">Innovative modern design</h5>
									</div> <!-- .card -->
								</div> <!-- .col-md-4 -->
							</div> <!-- .row -->
						</div> <!-- .cards-with-hover pt-10 pb-10 -->
						<div class="bg-with-block-text fade-animation">
							<div class="position-relative pt-5 pt-lg-10 pb-5 pb-lg-10 overflow-hidden">
								<div class="container">
									<div class="row">
										<div class="col-md-10 col-xl-6 col-xl-5">
											<div class="title-row bg-primary text-white p-2 p-md-6 position-relative z-index-1">
												<div class="title-wrap">
													<h3 class="heading-animation m-0 text-white">How really do ALS overcome those problems?</h3>
													<div class="fade-animation">
														<span class="bottom-line"></span>
													</div> <!-- .fade-animation -->
												</div> <!-- .title-wrap -->
												<p class="text-animation desc-md">We provide a variety of light-weight pre-assembled fence options that will surely add value to your home. With guaranteed color textures and durability for more than 15 years, ALS fence designs will enhance and complement your architectural design. You will appreciate our options because they require minimal maintenance and have absolutely no insect, stain, or mildew concerns. We was able to develop its fencing solutions and tackle most of the issues that all types of consumers face not only because of our unique designs, but also because of our innovative picket.</p>
											</div> <!-- .title-row -->
										</div> <!-- .col-md-6 -->
									</div> <!-- .row -->
								</div> <!-- .container -->
								<img src="<?php echo get_template_directory_uri(); ?>/images/bg-big.jpg" alt="" class="img-cover has-parallax-effect" data-speed="auto">
							</div> <!-- .position-relative pt-10 pb-10 overflow-hidden -->
						</div> <!-- .bg-with-block-text -->
						<div class="row g-0 align-items-center justify-content-end offset-img-with-text pt-5 pt-lg-10 pb-5 pb-lg-10">
							<div class="col-md-10 col-xl-6 col-left-fluid bg-midnight-200 ps-2 pe-2 pt-5 pt-lg-10 pb-5 pb-md-14 pb-lg-10">
							  <div class="title-row col-md-10 mb-5">
									<div class="title-wrap">
										<h3 class="heading-animation m-0">Slat Features</h3>
										<div class="fade-animation">
											<span class="bottom-line"></span>
										</div> <!-- .fade-animation -->
										<p class="text-animation desc-md">
										Recently, we came up with a lightweight slat that is sure to provide the same features as traditional aluminum products with ease of use. Our iconic inserts slats that are made of pre painted aluminum coils with polyurethane foam core providing superior flatness and strength while maintaining lightweight.
										</p>
									</div> <!-- .title-wrap -->
								</div> <!-- .title-row -->
								<ul class="icon-with-text spaces-md list-unstyled mb-md-10 mb-lg-0">
									<li class="stagger-animation">
										<span class="icon flex-shrink-0">
											<img src="<?php echo get_template_directory_uri(); ?>/images/brush.svg" alt="">
										</span> <!-- .icon -->
										<span class="text text-midnight-500 flex-grow-1 ms-1-5">
											Paint Type Variations
											<span class="text-dark-grey d-block small fw-light">PE, HDPE, PUPE, PUPA, PVDF</span>
										</span> <!-- .text -->
									</li>
									<li class="stagger-animation">
										<span class="icon flex-shrink-0">
											<img src="<?php echo get_template_directory_uri(); ?>/images/fence.svg" alt="">
										</span> <!-- .icon -->
										<span class="text text-midnight-500 flex-grow-1 ms-1-5">
											Pre-painted aluminum coil with thickness
											<span class="text-dark-grey d-block small">0.4 mm to 0.6 mm</span>
										</span> <!-- .text -->
									</li>
									<li class="stagger-animation">
										<span class="icon flex-shrink-0">
											<img src="<?php echo get_template_directory_uri(); ?>/images/foam.svg" alt="">
										</span> <!-- .icon -->
										<span class="text text-midnight-500 flex-grow-1 ms-1-5">
											Polyurethane foam core having density
											<span class="text-dark-grey d-block small">50 kg/m3 to 60 kg/m3</span>
										</span> <!-- .text -->
									</li>
								</ul> <!-- .list-unstyled -->
							</div> <!-- .col-md-6 -->
							<div class="col-md-10 col-xl-6 fade-animation">
								<div class="img-cover-block">
									<img src="<?php echo get_template_directory_uri(); ?>/images/col-1.jpg" alt="" class="img-cover has-parallax-effect" data-speed="auto">
								</div> <!-- .img-cover-block -->
							</div> <!-- .col-md-6 -->
						</div> <!-- .row -->


					</div>
					<div id="tab2">
					<section class="equal-cols pt-10">
						<div class="container">
						<div class="two-equal-cards-row d-flex flex-column flex-lg-row">
								<div class="col-md-6">
									<div class="img-cover-block">
										<img src="<?php echo get_template_directory_uri(); ?>/images/col-1.jpg" alt="" class="img-cover has-parallax-effect" data-speed="auto">
									</div> <!-- .img-cover-block -->
								</div> <!-- .col-md-6 -->
								<div class="col-md-6">
									<div class="title-row p-10">
										<div class="title-wrap">
											<h3 class="heading-animation m-0">Horizontal Fence System</h3>
											<div class="fade-animation">
												<span class="bottom-line"></span>
											</div> <!-- .fade-animation -->
										</div> <!-- .title-wrap -->
										<p class="text-animation desc-md">Aluminum Light Solutions is one of the most pioneering companies in the design and production of lightweight architectural systems using innovative aluminum slats designed in Canada.</p>
									</div> <!-- .title-row -->
								</div> <!-- .col-md-6 -->
							</div> <!-- .row -->
						</div> <!-- .container -->
					</section> <!-- .equal-cols -->

					<section class="equal-cols">
						<div class="container">
						<div class="two-equal-cards-row d-flex flex-column flex-lg-row flex-lg-row-reverse">
								<div class="col-md-6 g-0">
									<div class="img-cover-block">
										<img src="<?php echo get_template_directory_uri(); ?>/images/col-2.jpg" alt="" class="img-cover has-parallax-effect" data-speed="auto">
									</div> <!-- .img-cover-block -->
								</div> <!-- .col-md-6 -->
								<div class="col-md-6">
									<div class="title-row p-10">
										<div class="title-wrap">
											<h3 class="heading-animation m-0">Vertical Fence System</h3>
											<div class="fade-animation">
												<span class="bottom-line"></span>
											</div> <!-- .fade-animation -->
										</div> <!-- .title-wrap -->
										<p class="text-animation desc-md">If you're looking for an architectural systems company that will provide long-term benefits, look no further than Light Solutions. We value perfection, and our designs are always stunning. Our solutions will enhance your property's beauty for years to come. Give your home the upgrade it deserves! Our solutions are not only affordable, but they provide unmatched quality that stands decades as well.</p>
									</div> <!-- .title-row -->
								</div> <!-- .col-md-6 -->
							</div> <!-- .row -->
						</div> <!-- .container -->
					</section> <!-- .equal-cols -->
					</div>
				</div>
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .tabs-section -->
<?php 
	$term_id = $term->term_id;
	$taxonomy_name = 'cat_technical';
	$termchildren = get_term_children( $term_id, $taxonomy_name );
?>
<section class="generic-tabs-section">
	<div class="generic-tabs">
		<div class="bg-midnight-200 py-1-5 mb-1 mb-md-4-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="nav nav-tabs flex-lg-wrap justify-content-center flex-nowrap horizentol-scroll-mobile">
							<?php $i=0; foreach ( $termchildren as $child ) { $term = get_term_by( 'id', $child, $taxonomy_name );?>
								<li class="<?php if($i==0) echo 'active';?>"><a class="btn-corner-radius" data-toggle="tab" href="#tab-<?php echo $i;?>"><?php echo $term->name;?></a></li>
							<?php $i++;}?>									

						</ul>
					</div> <!-- .col-12 -->
				</div> <!-- .row -->
			</div> <!-- .container -->
		</div> <!-- .bg-midnight-200 -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="tab-content">
					<?php $i=0; foreach ( $termchildren as $child ) { $term = get_term_by( 'id', $child, $taxonomy_name );?>
						<div id="tab-<?php echo $i;?>" class="tab-pane <?php if($i==0) echo 'active';?>">
						<?php the_content();?>
							<section class="single-product fence-solution pb-5 pb-lg-10">
								<div class="d-flex justify-content-center align-items-center">
									<div class="col-lg-6 order-2 order-lg-1">
										<div class="lightgallery">
											<a href="<?php echo get_template_directory_uri(); ?>/images/fence.jpg" class="img-big stagger-animation has-overlay">
												<img src="<?php echo get_template_directory_uri(); ?>/images/fence.jpg" alt="" class="img-fluid">
												<div class="image-overlay">
													<div class="image-overlay-inside">
														<div class="icon">
															<svg class="fs-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
																<!-- Top Right -->
																<path class="tr arrow" d="M74.6 33.6l0-4.3L63.2 40.7c-1.1 1.1-2.8 1.1-3.8 0c-1.1-1.1-1.1-2.8 0-3.9l11.4-11.4h-4.3 c-1.5 0-2.7-1.2-2.7-2.7c0-1.5 1.2-2.7 2.7-2.7h10.9c1.5 0 2.7 1.2 2.7 2.7v10.9c0 1.5-1.2 2.7-2.7 2.7 C75.8 36.3 74.6 35.1 74.6 33.6z"/>

																<!-- Top Left -->
																<path class="tl arrow" d="M33.6 25.4h-4.3l11.4 11.4c1.1 1.1 1.1 2.8 0 3.8c-1.1 1.1-2.8 1.1-3.8 0L25.4 29.3v4.3 c0 1.5-1.2 2.7-2.7 2.7c-1.5 0-2.7-1.2-2.7-2.7V22.7c0-1.5 1.2-2.7 2.7-2.7l10.9 0c1.5 0 2.7 1.2 2.7 2.7 C36.3 24.2 35.1 25.4 33.6 25.4z"/>

																<!-- Bottom Left -->
																<path class="bl arrow" d="M25.4 66.4l0 4.3l11.4-11.4c1.1-1.1 2.8-1.1 3.8 0c1.1 1.1 1.1 2.8 0 3.9L29.3 74.6h4.3 c1.5 0 2.7 1.2 2.7 2.7c0 1.5-1.2 2.7-2.7 2.7H22.7c-1.5 0-2.7-1.2-2.7-2.7V66.4c0-1.5 1.2-2.7 2.7-2.7 C24.2 63.7 25.4 64.9 25.4 66.4z"/>

																<!-- Bottom Right -->
																<path class="br arrow" d="M66.4 74.6h4.3L59.3 63.2c-1.1-1.1-1.1-2.8 0-3.8c1.1-1.1 2.8-1.1 3.8 0l11.4 11.4v-4.3 c0-1.5 1.2-2.7 2.7-2.7c1.5 0 2.7 1.2 2.7 2.7v10.9c0 1.5-1.2 2.7-2.7 2.7l-10.9 0c-1.5 0-2.7-1.2-2.7-2.7 C63.7 75.8 64.9 74.6 66.4 74.6z"/>

																<!-- Outline -->
																<path class="outline" d="M94 5c0.5 0 1 0.5 1 1v88c0 0.5-0.5 1-1 1H6c-0.5 0-1-0.5-1-1V6c0-0.5 0.5-1 1-1H94 M94 0H6C2.7 0 0 2.7 0 6v88 c0 3.3 2.7 6 6 6h88c3.3 0 6-2.7 6-6V6C100 2.7 97.3 0 94 0L94 0z"/>
															</svg>
														</div>
													</div>
												</div> <!-- .image-overlay -->
											</a> <!-- .img-big -->
											<a href="<?php echo get_template_directory_uri(); ?>/images/fence-2.jpg" class="img-small stagger-animation has-overlay">
												<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/fence-2.jpg">
												<div class="image-overlay">
													<div class="image-overlay-inside">
														<div class="icon">
															<svg class="fs-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
																<!-- Top Right -->
																<path class="tr arrow" d="M74.6 33.6l0-4.3L63.2 40.7c-1.1 1.1-2.8 1.1-3.8 0c-1.1-1.1-1.1-2.8 0-3.9l11.4-11.4h-4.3 c-1.5 0-2.7-1.2-2.7-2.7c0-1.5 1.2-2.7 2.7-2.7h10.9c1.5 0 2.7 1.2 2.7 2.7v10.9c0 1.5-1.2 2.7-2.7 2.7 C75.8 36.3 74.6 35.1 74.6 33.6z"/>

																<!-- Top Left -->
																<path class="tl arrow" d="M33.6 25.4h-4.3l11.4 11.4c1.1 1.1 1.1 2.8 0 3.8c-1.1 1.1-2.8 1.1-3.8 0L25.4 29.3v4.3 c0 1.5-1.2 2.7-2.7 2.7c-1.5 0-2.7-1.2-2.7-2.7V22.7c0-1.5 1.2-2.7 2.7-2.7l10.9 0c1.5 0 2.7 1.2 2.7 2.7 C36.3 24.2 35.1 25.4 33.6 25.4z"/>

																<!-- Bottom Left -->
																<path class="bl arrow" d="M25.4 66.4l0 4.3l11.4-11.4c1.1-1.1 2.8-1.1 3.8 0c1.1 1.1 1.1 2.8 0 3.9L29.3 74.6h4.3 c1.5 0 2.7 1.2 2.7 2.7c0 1.5-1.2 2.7-2.7 2.7H22.7c-1.5 0-2.7-1.2-2.7-2.7V66.4c0-1.5 1.2-2.7 2.7-2.7 C24.2 63.7 25.4 64.9 25.4 66.4z"/>

																<!-- Bottom Right -->
																<path class="br arrow" d="M66.4 74.6h4.3L59.3 63.2c-1.1-1.1-1.1-2.8 0-3.8c1.1-1.1 2.8-1.1 3.8 0l11.4 11.4v-4.3 c0-1.5 1.2-2.7 2.7-2.7c1.5 0 2.7 1.2 2.7 2.7v10.9c0 1.5-1.2 2.7-2.7 2.7l-10.9 0c-1.5 0-2.7-1.2-2.7-2.7 C63.7 75.8 64.9 74.6 66.4 74.6z"/>

																<!-- Outline -->
																<path class="outline" d="M94 5c0.5 0 1 0.5 1 1v88c0 0.5-0.5 1-1 1H6c-0.5 0-1-0.5-1-1V6c0-0.5 0.5-1 1-1H94 M94 0H6C2.7 0 0 2.7 0 6v88 c0 3.3 2.7 6 6 6h88c3.3 0 6-2.7 6-6V6C100 2.7 97.3 0 94 0L94 0z"/>
															</svg>
														</div>
													</div>
												</div> <!-- .image-overlay -->
											</a>
										</div>
									</div>
									<div class="col-md-8 col-lg-6 order-1 order-lg-2">
										<div class="title-row mb-6 mb-lg-0 ps-lg-5">
											<div class="title-wrap">
												<h3 class="heading-animation m-0">Gate - W 804 x 1520 MM</h3>
											</div> <!-- .title-wrap -->
										</div> <!-- .title-row -->
									</div> <!-- .col-md-6 -->
								</div> <!-- .d-flex -->
							</section> <!-- .equal-cols -->
						</div> <!-- .tab-pane -->
						<?php $i++;}?>

					</div> <!-- .tab-content -->
				</div> <!-- .col-12 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .generic-tabs -->
</section> <!-- .generic-tabs -->

<?php get_footer(); ?>