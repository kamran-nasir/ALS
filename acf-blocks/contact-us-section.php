<?php
//  Block options

  $heading                = get_field('heading');
  $description            = get_field('description');
  $contact_title          = get_field('contact_title');
  $contact_detail         = get_field('contact_detail');
  $contact_email          = get_field('contact_email');
  $contact_address        = get_field('contact_address');
  //  Developer options
    $padding_top          = get_field( 'padding_top' );
    $padding_bottom       = get_field( 'padding_bottom' );
    $custom_classes       = get_field( 'custom_classes' );
    $custom_css           = get_field( 'custom_css' );
    $custom_id		        = get_field( 'custom_id' );

?>

<section class="contact-us pt-10 pb-10">
  <div class="container">
		<div class="row justify-content-center text-center mb-4">
			<div class="col-md-7">
				<div class="title-row">
					<div class="title-wrap">
						<h3 class="heading-animation m-0"><?php echo $heading;?></h3>
						<div class="fade-animation">
							<span class="bottom-line line-centered"></span>
						</div> <!-- .fade-animation -->
					</div> <!-- .title-wrap -->
					<p class="text-animation"><?php echo $description;?></p>
				</div> <!-- .title-row -->
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
		<div class="row">
			<div class="col-md-8">
			<?php echo do_shortcode('[gravityform id="1" title="true" description="true" ajax="true"]');?>
			</div> <!-- .col-md-8 -->
			<div class="col-md-4 col-right-fluid bg-midnight-200">
				<div class="contact-details p-5 pe-1">
					<div class="title-row mb-3">
						<div class="title-wrap">
							<h4 class="heading-animation m-0"><?php echo $contact_title;?></h4>
							<div class="fade-animation">
								<span class="bottom-line"></span>
							</div> <!-- .fade-animation -->
						</div> <!-- .title-wrap -->
						<p class="text-animation desc-md"><?php echo $contact_detail;?></p>
					</div> <!-- .title-row -->
					<ul class="icon-with-text list-unstyled">
						<li>
							<span class="icon flex-shrink-0">
								<img src="<?php echo get_template_directory_uri(); ?>/images/mail.svg" alt="">
							</span> <!-- .icon -->
							<span class="text flex-grow-1 ms-1-5">
							  <a href="mailto:<?php echo $contact_email;?>"><?php echo $contact_email;?></a>
							</span> <!-- .text -->
						</li>
						<li>
							<span class="icon flex-shrink-0">
								<img src="<?php echo get_template_directory_uri(); ?>/images/pin.svg" alt="">
							</span> <!-- .icon -->
							<span class="text flex-grow-1 ms-1-5">
								<?php echo $contact_address;?>
							</span> <!-- .text -->
						</li>
					</ul> <!-- .list-unstyled -->
					</div> <!-- .contact-details -->
			</div> <!-- .col-md-4 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .inner-hero -->