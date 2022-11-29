<?php
//  Block options
  $heading             = get_field('heading');
  $description         = get_field('description');
  $cards_list     	   = get_field('cards_list');
//  Developer options
  $padding_top         = get_field( 'padding_top' );
  $padding_bottom      = get_field( 'padding_bottom' );
  $custom_classes      = get_field( 'custom_classes' );
  $custom_css          = get_field( 'custom_css' );
?>

<section class="cards-with-hover position-relative pt-5 pt-lg-5 pb-0 pb-lg-5">
	<ul class="js-ticker list-unstyled marquee-text fade-animation">
		<li>Durable</li>
		<li>Affordable</li>
		<li>Green</li>
	</ul>
	<div class="container">
		<div class="row justify-content-center text-center mb-4 mb-lg-7">
			<div class="col-md-12">
				<div class="title-row">
					<div class="title-wrap">
						<h2 class="heading-animation m-0"><?php echo $heading;?></h2>
						<div class="fade-animation">
							<span class="bottom-line line-centered"></span>
						</div> <!-- .fade-animation -->
					</div> <!-- .title-wrap -->
					<div class="d-flex justify-content-center">
						<div class="col-md-9 col-xl-6">
							<p class="text-animation"><?php echo $description;?></p>
						</div> <!-- .col-md-7 -->
					</div> <!-- .d-flex justify-content-center -->
				</div> <!-- .title-row -->
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
		<div class="row">
		<?php
			if( $cards_list ) {
				foreach( $cards_list as $row ) { ?>
					<div class="col-lg-4">
						<div class="card stagger-animation">
							<span class="icon">
							<?php
									$image_data = wp_get_attachment_image_src( $row['icon'], 'w1920' );
									$image_alt = get_post_meta( $row['icon'], '_wp_attachment_image_alt', true );
									$image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
							?>
							<img
								src="<?php echo wp_get_attachment_image_url( $row['icon'], 'w1920' ); ?>"
								srcset="<?php echo wp_get_attachment_image_srcset( $row['icon'] ); ?>"
								sizes="100vw"
								alt="<?php echo $image_alt; ?>"
								width="<?php echo $image_data[1]; ?>"
								height="<?php echo $image_data[2]; ?>"
							/>
							</span>
							<h4><?php echo $row['title'];?></h4>
							<p><?php echo $row['description'];?></p>
						</div> <!-- .card -->
					</div> <!-- .col-md-4 -->
			<?php }
			}?>
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .cards-with-hover pt-10 pb-10 -->
