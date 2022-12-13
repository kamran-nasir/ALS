<?php get_header(); ?>



<?php 
$queried_object = get_queried_object();
 $term_id = $queried_object->term_id;
//  $term_id = $terms[0]->term_id;
//	$term_id = $term->term_id;
	$taxonomy_name = 'cat_technical';
	$termchildren = get_term_children( $term_id, $taxonomy_name );
	if($termchildren) {
?>

<section class="generic-tabs-section">
	<div class="generic-tabs">
		<div class="bg-midnight-200 py-1-5 mb-1 mb-md-4-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="nav nav-tabs flex-lg-wrap justify-content-center flex-nowrap horizentol-scroll-mobile">
							<?php $i=0; foreach ( $termchildren as $child ) { $term = get_term_by( 'id', $child, $taxonomy_name );?>
								<li class="<?php if($i==0) echo 'active';?>"><a class="btn-corner-radius" data-toggle="tab" href="#tab-<?php echo $i;?>"><?php echo $term->name;?></a></li>
							<?php $i++;}?>									

						</ul>
					</div> <!-- .col-12 -->
				</div> <!-- .row -->
			</div> <!-- .container -->
		</div> <!-- .bg-midnight-200 -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="tab-content">
					<?php $i=0; foreach ( $termchildren as $child ) { $term = get_term_by( 'id', $child, $taxonomy_name );?>
						<div id="tab-<?php echo $i;?>" class="tab-pane <?php if($i==0) echo 'active';?>">
						<?php the_content();?>
							<section class="single-product fence-solution pb-5 pb-lg-10">
								<div class="d-flex justify-content-center align-items-center">
									<div class="col-lg-6 order-2 order-lg-1">
										<div class="lightgallery">
											<a href="<?php echo get_template_directory_uri(); ?>/images/fence.jpg" class="img-big stagger-animation has-overlay">
												<img src="<?php echo get_template_directory_uri(); ?>/images/fence.jpg" alt="" class="img-fluid">
												<div class="image-overlay">
													<div class="image-overlay-inside">
														<div class="icon">
															<svg class="fs-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
																<!-- Top Right -->
																<path class="tr arrow" d="M74.6 33.6l0-4.3L63.2 40.7c-1.1 1.1-2.8 1.1-3.8 0c-1.1-1.1-1.1-2.8 0-3.9l11.4-11.4h-4.3 c-1.5 0-2.7-1.2-2.7-2.7c0-1.5 1.2-2.7 2.7-2.7h10.9c1.5 0 2.7 1.2 2.7 2.7v10.9c0 1.5-1.2 2.7-2.7 2.7 C75.8 36.3 74.6 35.1 74.6 33.6z"/>

																<!-- Top Left -->
																<path class="tl arrow" d="M33.6 25.4h-4.3l11.4 11.4c1.1 1.1 1.1 2.8 0 3.8c-1.1 1.1-2.8 1.1-3.8 0L25.4 29.3v4.3 c0 1.5-1.2 2.7-2.7 2.7c-1.5 0-2.7-1.2-2.7-2.7V22.7c0-1.5 1.2-2.7 2.7-2.7l10.9 0c1.5 0 2.7 1.2 2.7 2.7 C36.3 24.2 35.1 25.4 33.6 25.4z"/>

																<!-- Bottom Left -->
																<path class="bl arrow" d="M25.4 66.4l0 4.3l11.4-11.4c1.1-1.1 2.8-1.1 3.8 0c1.1 1.1 1.1 2.8 0 3.9L29.3 74.6h4.3 c1.5 0 2.7 1.2 2.7 2.7c0 1.5-1.2 2.7-2.7 2.7H22.7c-1.5 0-2.7-1.2-2.7-2.7V66.4c0-1.5 1.2-2.7 2.7-2.7 C24.2 63.7 25.4 64.9 25.4 66.4z"/>

																<!-- Bottom Right -->
																<path class="br arrow" d="M66.4 74.6h4.3L59.3 63.2c-1.1-1.1-1.1-2.8 0-3.8c1.1-1.1 2.8-1.1 3.8 0l11.4 11.4v-4.3 c0-1.5 1.2-2.7 2.7-2.7c1.5 0 2.7 1.2 2.7 2.7v10.9c0 1.5-1.2 2.7-2.7 2.7l-10.9 0c-1.5 0-2.7-1.2-2.7-2.7 C63.7 75.8 64.9 74.6 66.4 74.6z"/>

																<!-- Outline -->
																<path class="outline" d="M94 5c0.5 0 1 0.5 1 1v88c0 0.5-0.5 1-1 1H6c-0.5 0-1-0.5-1-1V6c0-0.5 0.5-1 1-1H94 M94 0H6C2.7 0 0 2.7 0 6v88 c0 3.3 2.7 6 6 6h88c3.3 0 6-2.7 6-6V6C100 2.7 97.3 0 94 0L94 0z"/>
															</svg>
														</div>
													</div>
												</div> <!-- .image-overlay -->
											</a> <!-- .img-big -->
											<a href="<?php echo get_template_directory_uri(); ?>/images/fence-2.jpg" class="img-small stagger-animation has-overlay">
												<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/fence-2.jpg">
												<div class="image-overlay">
													<div class="image-overlay-inside">
														<div class="icon">
															<svg class="fs-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
																<!-- Top Right -->
																<path class="tr arrow" d="M74.6 33.6l0-4.3L63.2 40.7c-1.1 1.1-2.8 1.1-3.8 0c-1.1-1.1-1.1-2.8 0-3.9l11.4-11.4h-4.3 c-1.5 0-2.7-1.2-2.7-2.7c0-1.5 1.2-2.7 2.7-2.7h10.9c1.5 0 2.7 1.2 2.7 2.7v10.9c0 1.5-1.2 2.7-2.7 2.7 C75.8 36.3 74.6 35.1 74.6 33.6z"/>

																<!-- Top Left -->
																<path class="tl arrow" d="M33.6 25.4h-4.3l11.4 11.4c1.1 1.1 1.1 2.8 0 3.8c-1.1 1.1-2.8 1.1-3.8 0L25.4 29.3v4.3 c0 1.5-1.2 2.7-2.7 2.7c-1.5 0-2.7-1.2-2.7-2.7V22.7c0-1.5 1.2-2.7 2.7-2.7l10.9 0c1.5 0 2.7 1.2 2.7 2.7 C36.3 24.2 35.1 25.4 33.6 25.4z"/>

																<!-- Bottom Left -->
																<path class="bl arrow" d="M25.4 66.4l0 4.3l11.4-11.4c1.1-1.1 2.8-1.1 3.8 0c1.1 1.1 1.1 2.8 0 3.9L29.3 74.6h4.3 c1.5 0 2.7 1.2 2.7 2.7c0 1.5-1.2 2.7-2.7 2.7H22.7c-1.5 0-2.7-1.2-2.7-2.7V66.4c0-1.5 1.2-2.7 2.7-2.7 C24.2 63.7 25.4 64.9 25.4 66.4z"/>

																<!-- Bottom Right -->
																<path class="br arrow" d="M66.4 74.6h4.3L59.3 63.2c-1.1-1.1-1.1-2.8 0-3.8c1.1-1.1 2.8-1.1 3.8 0l11.4 11.4v-4.3 c0-1.5 1.2-2.7 2.7-2.7c1.5 0 2.7 1.2 2.7 2.7v10.9c0 1.5-1.2 2.7-2.7 2.7l-10.9 0c-1.5 0-2.7-1.2-2.7-2.7 C63.7 75.8 64.9 74.6 66.4 74.6z"/>

																<!-- Outline -->
																<path class="outline" d="M94 5c0.5 0 1 0.5 1 1v88c0 0.5-0.5 1-1 1H6c-0.5 0-1-0.5-1-1V6c0-0.5 0.5-1 1-1H94 M94 0H6C2.7 0 0 2.7 0 6v88 c0 3.3 2.7 6 6 6h88c3.3 0 6-2.7 6-6V6C100 2.7 97.3 0 94 0L94 0z"/>
															</svg>
														</div>
													</div>
												</div> <!-- .image-overlay -->
											</a>
										</div>
									</div>
									<div class="col-md-8 col-lg-6 order-1 order-lg-2">
										<div class="title-row mb-6 mb-lg-0 ps-lg-5">
											<div class="title-wrap">
												<h3 class="heading-animation m-0">Gate - W 804 x 1520 MM</h3>
											</div> <!-- .title-wrap -->
										</div> <!-- .title-row -->
									</div> <!-- .col-md-6 -->
								</div> <!-- .d-flex -->
							</section> <!-- .equal-cols -->
						</div> <!-- .tab-pane -->
						<?php $i++;}?>

					</div> <!-- .tab-content -->
				</div> <!-- .col-12 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .generic-tabs -->
</section> <!-- .generic-tabs -->
<?php }else{?>
<section class="generic-tabs-section">
	<div class="generic-tabs">
		<div class="bg-midnight-200 py-1-5 mb-1 mb-md-4-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="nav nav-tabs flex-lg-wrap justify-content-center flex-nowrap horizentol-scroll-mobile">
								<li class="">No Product found</li>

						</ul>
					</div> <!-- .col-12 -->
				</div> <!-- .row -->
			</div> <!-- .container -->
		</div> <!-- .bg-midnight-200 -->
	</div>
</section>	
<?php  } ?>

<?php get_footer(); ?>