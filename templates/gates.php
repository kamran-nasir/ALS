<?php /* Template Name: Gates*/ ?>
<?php get_header(); ?>
<?php the_content(); ?>

<section class="single-product pb-5 pb-lg-10">
	<div class="container">
		<div class="row g-0 justify-content-center align-items-center">
			<div class="col-lg-6 order-2 order-lg-1">
				<div class="img-big stagger-animation">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/gate-1-1.jpg" alt="" class="img-fluid">
				</div> <!-- .img-big -->
				<ul class="nav product-gallery stagger-animation" id="lightgallery">
					<li data-responsive="<?php echo get_template_directory_uri(); ?>/images/gate-3.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/gate-3.jpg">
						<a href="">
							<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/gate-3.jpg">
							<div class="demo-gallery-poster">
								<img src="https://sachinchoolur.github.io/lightgallery.js/static/img/zoom.png">
							</div>
						</a>
					</li>
					<li data-responsive="<?php echo get_template_directory_uri(); ?>/images/gate-4.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/gate-4.jpg">
						<a href="">
							<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/gate-4.jpg">
							<div class="demo-gallery-poster">
								<img src="https://sachinchoolur.github.io/lightgallery.js/static/img/zoom.png">
							</div>
						</a>
					</li>
					<li data-responsive="<?php echo get_template_directory_uri(); ?>/images/gate-2.jpg" data-src="<?php echo get_template_directory_uri(); ?>/images/gate-2.jpg">
						<a href="">
							<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/gate-2.jpg">
							<div class="demo-gallery-poster">
								<img src="https://sachinchoolur.github.io/lightgallery.js/static/img/zoom.png">
							</div>
						</a>
					</li>
        </ul>
	    </div> <!-- .col-md-6 -->
			 <div class="col-md-8 col-lg-6 order-1 order-lg-2">
				<div class="title-row mb-6 mb-lg-0 ps-lg-5">
					<div class="title-wrap">
						<h3 class="heading-animation m-0">Gate - W 804 x 1520 MM</h3>
					</div> <!-- .title-wrap -->
				</div> <!-- .title-row -->
			 </div> <!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .equal-cols -->

<?php get_footer(); ?>