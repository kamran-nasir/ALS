<?php
//  Block options

  $heading             = get_field('heading');
  $description         = get_field('description');

//  Developer options
  $padding_top          = get_field( 'padding_top' );
  $padding_bottom       = get_field( 'padding_bottom' );
  $custom_classes       = get_field( 'custom_classes' );
  $custom_css           = get_field( 'custom_css' );
?>
<div class="bg-midnight-200 pt-5 pt-lg-10 pb-5 pb-lg-10">
	<div class="row justify-content-center text-center">
		<div class="col-md-7">
			<div class="title-row">
				<div class="title-wrap">
					<h2 class="heading-animation m-0"><?php echo $heading;?></h2>
					<div class="fade-animation">
						<span class="bottom-line line-centered"></span>
					</div> <!-- .fade-animation -->
				</div> <!-- .title-wrap -->
				<p class="text-animation"><?php echo $description;?></p>
			</div> <!-- .title-row -->
		</div> <!-- .col-12 -->
	</div> <!-- .row -->
</div> <!-- .bg-midnight-200 -->
						