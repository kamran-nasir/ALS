<?php /* Template Name: Become a dealer*/ ?>
<?php get_header(); ?>
<section class="inner-hero bg-primary pt-12 pb-12 position-relative overflow-hidden">
  <div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="hero-content position-relative z-index-1 text-center text-white">
				  <h2 class="heading-animation text-white">Contact Us</h2>
				</div> <!-- .hero-content -->
			</div> <!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
	<img src="<?php echo get_template_directory_uri(); ?>/images/bg-lines-2.png" alt="" class="img-cover has-parallax-effect" data-speed="auto">
</section> <!-- .inner-hero -->

<section class="contact-us pt-10 pb-10">
  <div class="container">
		<div class="row justify-content-center text-center mb-7">
			<div class="col-md-7">
				<div class="title-row">
					<div class="title-wrap">
						<h3 class="heading-animation m-0">How to reach us</h3>
						<div class="fade-animation">
							<span class="bottom-line line-centered"></span>
						</div> <!-- .fade-animation -->
					</div> <!-- .title-wrap -->
					<p class="text-animation">Do you still need further technical information? Need to find a wholesaler near to you? or you may be interested to become a dealer. Please fill in the form below and our team will be happy to contact you soon!</p>
				</div> <!-- .title-row -->
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
		<div class="row">
			<div class="col-md-8">

			<?php echo do_shortcode('[gravityform id="13" title="true" description="true" ajax="true"]');?>
			</div> <!-- .col-md-8 -->
			<div class="col-md-4 col-right-fluid bg-midnight-200">
				<div class="contact-details p-5 pe-1">
					<div class="title-row mb-3">
						<div class="title-wrap">
							<h4 class="heading-animation m-0">Need More Assistance?</h4>
							<div class="fade-animation">
								<span class="bottom-line"></span>
							</div> <!-- .fade-animation -->
						</div> <!-- .title-wrap -->
						<p class="text-animation desc-md">Send us an inquiry via the following contact details. We will get back to you within 24 working hours (except all major holidays)</p>
					</div> <!-- .title-row -->
					<ul class="icon-with-text list-unstyled">
						<li>
							<span class="icon flex-shrink-0">
								<img src="<?php echo get_template_directory_uri(); ?>/images/mail.svg" alt="">
							</span> <!-- .icon -->
							<span class="text flex-grow-1 ms-1-5">
							  <a href="mailto:info@lightaluminum.com">info@lightaluminum.com</a>
							</span> <!-- .text -->
						</li>
						<li>
							<span class="icon flex-shrink-0">
								<img src="<?php echo get_template_directory_uri(); ?>/images/pin.svg" alt="">
							</span> <!-- .icon -->
							<span class="text flex-grow-1 ms-1-5">
								Aqaba International Industrial Estate, </br> P.O Box 787 Aqaba 77110, Aqaba (ASEZA), </br> Jordan.
							</span> <!-- .text -->
						</li>
					</ul> <!-- .list-unstyled -->
					</div> <!-- .contact-details -->
			</div> <!-- .col-md-4 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .inner-hero -->

<?php get_footer(); ?>