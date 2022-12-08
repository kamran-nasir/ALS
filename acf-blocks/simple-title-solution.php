
<?php
//  Block options

  $heading             = get_field('heading');

//  Developer options
  $padding_top          = get_field( 'padding_top' );
  $padding_bottom       = get_field( 'padding_bottom' );
  $custom_classes       = get_field( 'custom_classes' );
  $custom_css           = get_field( 'custom_css' );
?>


<section class="simple-title-text pt-5 pt-lg-10 pb-8 pb-lg-10">
  <div class="container">
	  <div class="row justify-content-center text-center">
		  <div class="col-md-9">
				<div class="title-row">
					<div class="title-wrap">
						<h4 class="text-animation m-0"><?php echo $heading;?></h4>
					</div> <!-- .title-wrap -->
				</div> <!-- .title-row -->
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section>
 <!-- .simple-title-text -->