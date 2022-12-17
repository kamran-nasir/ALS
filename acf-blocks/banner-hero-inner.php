
<?php
//  Block options

    $heading                 = get_field('heading');
    $description             = get_field('description');
//  Developer options
    $padding_top            = get_field( 'padding_top' );
    $padding_bottom          = get_field( 'padding_bottom' );
    $custom_classes          = get_field( 'custom_classes' );
    $custom_css              = get_field( 'custom_css' );
	$custom_id		           = get_field( 'custom_id' );

?>
<section class="homepage-hero bg-darkest text-white <?php echo $padding_top; ?> <?php echo $padding_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>" id="<?php echo $custom_id; ?>">
<section class="inner-hero bg-primary pt-8 pt-lg-12 pb-8 pb-lg-12 position-relative overflow-hidden fade-animation" >
  <div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9 col-xl-6">
				<div class="hero-content position-relative z-index-1 text-center text-white">
				  <h2 class="heading-animation text-white"><?php echo $heading;?></h2>
					<p class="text-animation"><?php echo $description;?></p>
				</div> <!-- .hero-content -->
			</div> <!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
	<img src="<?php echo get_template_directory_uri(); ?>/images/bg-lines-2.png" alt="" class="img-cover has-parallax-effect" data-speed="auto">
</section> <!-- .inner-hero -->