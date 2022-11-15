<?php
//  Block options   
  $heading             = get_field('heading');
  $description         = get_field('description');
  $description_copy     = get_field('description_copy');
//  Developer options
  $padding_top          = get_field( 'padding_top' );
  $padding_bottom       = get_field( 'padding_bottom' );
  $custom_classes       = get_field( 'custom_classes' );
  $custom_css           = get_field( 'custom_css' );
?>

<section class="solution-section fade-animation pt-10 pb-10 <?php echo $spacing_top; ?> <?php echo $spacing_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>" id="<?php echo $custom_id; ?>">
	<div class="container">
		<div class="row justify-content-center text-center mb-5">
			<div class="col-md-6">
			  <div class="title-row">
					<h3 class="heading-animation m-0"><?php echo $heading;?></h3>
					<div class="fade-animation">
					  <span class="bottom-line line-centered"></span>
					</div> <!-- .fade-animation -->
				</div> <!-- .title-row -->
				<p class="text-animation"><?php echo $description;?></p>
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
	<div class="container-fluid solution-slider-wrapper">
	  <div class="row">
			<div class="col-12">
				<div class="solution-slider swiper-container three-cards-slider">
					<div class="solution-slider-wrapper swiper-wrapper">
                        <?php 
                            if( $description_copy ) {				
                                foreach( $description_copy as $row ) {?>
                                    <div class="solution-slider-item swiper-slide stagger-animation">
                                        <div class="solution-header">
                                            <div class="solution-img img-cover-block">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/solution-1.jpg" alt="" class="img-cover has-parallax-effect" data-speed="auto">
                                            </div> <!-- .solution-img -->
                                        </div> <!-- .solution-header -->
                                        <a href="#0" class="solution-footer">
                                            <h4 class="solution-text mb-2 fw-medium"><?php echo ( $row['name'] );?></h4>
                                            <p><?php echo ( $row['description'] );?></p>
                                            <div class="button">
                                            <?php 
                                            if ( is_array($row['button']) && $row['button']['url'] != '' ) { ?>
                                                <button type="button" class="btn btn-inline p-0" href="<?php echo $row['button']['url'];?>"><?php echo $row['button']['title']?></button>
                                            <?php } ?>	
                                            
                                            </div> <!-- .button -->
                                        </a> <!-- .solution-footer -->
                                    </div> <!-- .solution-slider-item -->
                            <?php } 
                        }?>
					</div> <!-- .solution-slider-wrapper -->
				</div> <!-- .solution-slider -->
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
	</div> <!-- .container-fluid -->
</section> <!-- .solution-section -->
