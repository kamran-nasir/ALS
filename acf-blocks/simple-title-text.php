
<?php
//  Block options

    $heading                 = get_field('heading');
//  Developer options
    $padding_top            = get_field( 'padding_top' );
    $padding_bottom          = get_field( 'padding_bottom' );
    $custom_classes          = get_field( 'custom_classes' );
    $custom_css              = get_field( 'custom_css' );
	$custom_id           = get_field( 'custom_id' );

?>
<section class="simple-title-text  <?php echo $padding_top; ?> <?php echo $padding_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>" id="<?php echo $custom_id; ?>">
  <div class="container">
	  <div class="row justify-content-center text-center">
			<div class="col-md-9 col-xl-6">
				<div class="title-row">
					<div class="title-wrap">
						<h3 class="heading-animation m-0"><?php echo $heading;?></h3>
					</div> <!-- .title-wrap -->
				</div> <!-- .title-row -->
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .simple-title-text -->