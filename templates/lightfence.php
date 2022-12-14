<?php /* Template Name: LightFence*/ ?>
<?php get_header(); ?>


<?php
//  Block options

  $heading              = get_field('heading');
  $image             	= get_field('image');
//  Developer options
  $padding_top          = get_field( 'padding_top' );
  $padding_bottom       = get_field( 'padding_bottom' );
  $custom_classes       = get_field( 'custom_classes' );
  $custom_css           = get_field( 'custom_css' );
?>

<section class="inner-hero bg-midnight-200 pt-8 pt-lg-12 pb-8 pb-lg-12 position-relative overflow-hidden fade-animation">
  <div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="hero-content position-relative z-index-1 text-center">
    				<?php
                        $image_data = wp_get_attachment_image_src( $image, 'w1920' );
                        $image_alt = get_post_meta( $row['icon'], '_wp_attachment_image_alt', true );
                        $image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
                    ?>
                    <img
                        src="<?php echo wp_get_attachment_image_url( $image, 'w1920' ); ?>"
                        srcset="<?php echo wp_get_attachment_image_srcset( $image ); ?>"
                        sizes="100vw"
                        alt="<?php echo $image_alt; ?>"
                        width="<?php echo $image_data[1]; ?>"
                        height="<?php echo $image_data[2]; ?>"
                         class="hero-logo"
                    />
					<p class="text-animation"><?php echo $heading;?></p>
				</div>
			</div>
		</div>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/images/wooden-lines.png" alt="" class="img-cover has-parallax-effect" data-speed="auto">
</section>

<section class="tabs-section">
	<div class="material-tabs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="tab-wrap w-100">
						<span class="red-bar"></span>
						<ul class="list-unstyled d-flex flex-wrap" id="material-tabs">
							<li class="col"><a id="tab1-tab" href="#tab1" class="active">Overview</a></li>
							<li class="col"><a id="tab2-tab" href="#tab2" class="">Configurations</a></li>
						</ul>
					</div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .material-tabs -->

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="tab-content">
					<div id="tab1">
						<?php the_content(); ?>
					</div>
					<div id="tab2">
					<section class="equal-cols pt-10">
						<div class="container">
						<?php
								$args = array(
									'taxonomy' => 'cat_lightfence',
										'parent' => '0',
									'orderby' => 'name',
									'order'   => 'ASC'
								);
								$cats = get_categories($args); $count=1;?>
									<?php foreach($cats as $cat) { ?>
									<div class="two-equal-cards-row d-flex flex-wrap pb-13 <?php if($count%2==0) echo"reverse"?>">
									<?php if($count%2==0){ ?>
											<div class="col-md-12 justify-content-center text-center">
												<div class="title-row">
													<div class="title-wrap">
														<h3 class="heading-animation m-0"><?php echo $cat->name; ?></h3>
														<div class="fade-animation">
															<span class="bottom-line line-centered"></span>
														</div> <!-- .fade-animation -->
													</div> <!-- .title-wrap -->
													<p class="text-animation desc-md"><?php echo $cat->description; ?></p>

												</div> <!-- .title-row -->
											</div> <!-- .col-md-6 -->
											<div class="col-md-12 g-0 text-center">
												<img src="<?php echo z_taxonomy_image_url($cat->term_id);?>" alt="" class="img-fluid">
												<a href="<?php echo get_category_link( $cat->term_id ) ?>" class="btn btn-secondary btn-rarr">see all configurations</a>
											</div> <!-- .col-md-6 -->

									<?php }else{?>
										<div class="col-md-12 justify-content-center text-center">
												<div class="title-row mb-3">
													<div class="title-wrap">
														<h3 class="heading-animation m-0"><?php echo $cat->name; ?></h3>
														<div class="fade-animation">
															<span class="bottom-line line-centered"></span>
														</div> <!-- .fade-animation -->
													</div> <!-- .title-wrap -->
													<p class="text-animation desc-md"><?php echo $cat->description; ?></p>
												</div> <!-- .title-row -->
											</div> <!-- .col-md-6 -->
											<div class="col-md-12 g-0 text-center">
												  <img src="<?php echo z_taxonomy_image_url($cat->term_id);?>" alt="" class="img-fluid mb-5">
													<a href="<?php echo get_category_link( $cat->term_id ) ?>" class="btn btn-secondary btn-rarr">see all configurations</a>
											</div> <!-- .col-md-6 -->
									<?php }?>

								</div> <!-- .row -->
								<?php $count++; } ?>

						</div> <!-- .container -->
					</section> <!-- .equal-cols -->


					</div>
				</div>
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .tabs-section -->

<?php get_footer(); ?>