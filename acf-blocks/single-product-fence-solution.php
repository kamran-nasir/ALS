<?php
//  Block options

    //  Block options
   $background_image_one    = get_field('background_image_one');
    $background_image_two   = get_field('background_image_two');
    $heading                 = get_field('heading');
    $description             = get_field('description');
    $button                  = get_field('button');


    $padding_top            = get_field( 'padding_top' );
    $padding_bottom          = get_field( 'padding_bottom' );
    $custom_classes          = get_field( 'custom_classes' );
    $custom_css              = get_field( 'custom_css' );
	$custom_id           = get_field( 'custom_id' );

?>


	<section class="single-product fence-solution  <?php echo $padding_top; ?> <?php echo $padding_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>" id="<?php echo $custom_id; ?>">
								<div class="d-flex justify-content-center align-items-center">
									<div class="col-lg-6 order-2 order-lg-1">
										<div class="lightgallery">
											<a href="<?php echo get_template_directory_uri(); ?>/images/fence.jpg" class="img-big stagger-animation has-overlay">
                                            <?php
                                                    $background_image_one = wp_get_attachment_image_src( $background_image_one, 'w1920' );
                                                    $image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true );
                                                    $image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
                                            ?>
                                            <img
                                                src="<?php echo wp_get_attachment_image_url( $image, 'w1920' ) ?>"
                                                srcset="<?php echo wp_get_attachment_image_srcset( $image ) ?>"
                                                sizes="100vw"
                                                alt="<?php echo $background_image_one; ?>"
                                                width="<?php echo $background_image_one[1]; ?>"
                                                height="<?php echo $background_image_one[2]; ?>"
                                                class="img-fluid" 
                                            />
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
                                            <a href="<?php echo get_template_directory_uri(); ?>/images/fence.jpg" class="img-big stagger-animation has-overlay">
                                            <?php
                                                    $background_image_two = wp_get_attachment_image_src( $background_image_two, 'w1920' );
                                                    $image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true );
                                                    $image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
                                            ?>
                                            <img
                                                src="<?php echo wp_get_attachment_image_url( $image, 'w1920' ) ?>"
                                                srcset="<?php echo wp_get_attachment_image_srcset( $image ) ?>"
                                                sizes="100vw"
                                                alt="<?php echo $background_image_two; ?>"
                                                width="<?php echo $background_image_two[1]; ?>"
                                                height="<?php echo $background_image_two[2]; ?>"
                                                class="img-responsive" 
                                            />
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
												<h3 class="heading-animation m-0"><?php echo $heading;?></h3>
											</div> <!-- .title-wrap -->
										</div> <!-- .title-row -->
									</div> <!-- .col-md-6 -->
								</div> <!-- .d-flex -->
							</section> <!-- .equal-cols -->
