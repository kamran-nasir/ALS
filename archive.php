<?php get_header(); ?>

<section class="inner-hero bg-primary pt-8 pt-lg-12 pb-8 pb-lg-12 position-relative overflow-hidden fade-animation">
  <div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9 col-xl-6">
				<div class="hero-content position-relative z-index-1 text-center text-white">
				  <h2 class="heading-animation text-white"><?php echo get_queried_object()->name; //var_dump(get_queried_object())?></h2>
				</div> <!-- .hero-content -->
			</div> <!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
	<img src="<?php echo get_template_directory_uri(); ?>/images/bg-lines-2.png" alt="" class="img-cover has-parallax-effect" data-speed="auto">
</section> <!-- .inner-hero -->

<?php  if(get_queried_object()->taxonomy=='cat_lightfence'){?>

	
<section class="generic-tabs-section">
	<div class="generic-tabs">
		<div class="bg-midnight-200 py-1-5 mb-1 mb-md-4-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="nav nav-tabs flex-lg-wrap justify-content-center flex-nowrap horizentol-scroll-mobile">							
                        <?php
						  $args = array(
							'taxonomy' => 'cat_lightfence',
							'orderby' => 'name',
							'order'   => 'ASC'
						);
			 
							$categories = get_categories($args);
							
                        // foreach ( $categories as $key => $category ) { 
                            $term_id = $category->parent;
                            $taxonomy_name = 'cat_lightfence';
                            $termchildren = get_term_children( get_queried_object()->term_id, $taxonomy_name );
                            $i=0; 
                           
                            foreach ( $termchildren as $child ) {
                                $term = get_term_by( 'id', $child, $taxonomy_name );
                                ?>
                                    <li class="<?php if($i==0) echo 'active';?>">
                                        <a class="btn-corner-radius" data-toggle="tab" href="#tab-<?php echo $i;?>"><?php  echo $term->name;?></a>
                                    </li>
                                <?php                                
                           $i++; }
                      //  }                             
                        ?>                           
						</ul>
					</div> <!-- .col-12 -->
				</div> <!-- .row -->
			</div> <!-- .container -->
		</div> <!-- .bg-midnight-200 -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="tab-content">                        
                            <?php $i=0;
                                foreach ( $categories as $key => $category ) { 
                                    $term_id = $category->parent;
                                    $taxonomy_name = 'cat_lightfence';
                                    $termchildren = get_term_children( $term_id, $taxonomy_name );
                                    foreach ( $termchildren as $child ) {
                                        $term = get_term_by( 'id', $child, $taxonomy_name );                                            
                                            ?>                          
                                                <div id="tab-<?php echo $i;?>" class="tab-pane <?php if($i==0) echo 'active';?>">
                                                
                                                    <div class="col-md-8 col-lg-6 order-1 order-lg-2">
                                                            <div class="title-row mb-6 mb-lg-0 ps-lg-5">
                                                                <div class="title-wrap">
                                                                    <?php 
                                                                        query_posts(array( 
                                                                            'post_type' => 'lightfence',
                                                                            'showposts' => -1,
                                                                            'tax_query' => array(
                                                                                array(
                                                                                    'taxonomy' => 'cat_lightfence',
                                                                                    'terms' => $term->term_id,
                                                                                    'field' => 'term_id',
                                                                                )
                                                                            ),
                                                                            'orderby' => 'title',
                                                                            'order' => 'ASC' )
                                                                        );
                                                                            
                                                                        while (have_posts()) : the_post();        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                                                                        $post_thumbnail_id = get_post_meta( $post->ID, '_thumbnail_id', true );
                                                                        $image                  = get_field('secondary_feature_image_');?>                                                                          
                                                                          <section class="single-product fence-solution pb-5 pb-lg-10">
                                                                                <div class="d-flex justify-content-center align-items-center">
                                                                                    <div class="col-lg-6 order-2 order-lg-1">
                                                                                        <div class="lightgallery">
                                                                                            <a href="<?php echo $featured_img_url;?>" class="img-big stagger-animation has-overlay">
                                                                                            <?php
                                                                                                        $image_data = wp_get_attachment_image_src( $post_thumbnail_id, 'w1920' );
                                                                                                        $image_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
                                                                                                        $image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
                                                                                                ?>
                                                                                                <img
                                                                                                    src="<?php echo wp_get_attachment_image_url( $post_thumbnail_id, 'w1920' ) ?>"
                                                                                                    srcset="<?php echo wp_get_attachment_image_srcset( $post_thumbnail_id ) ?>"
                                                                                                    sizes="100vw"
                                                                                                    alt="<?php echo $image_alt; ?>"
                                                                                                    width="<?php echo $image_data[1]; ?>"
                                                                                                    height="<?php echo $image_data[2]; ?>"
                                                                                                    class="img-big stagger-animation has-overlay" 
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
                                                                                            <?php
                                                                                                    $image_data = wp_get_attachment_image_src( $image, 'w1920' );
                                                                                                    $image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true );
                                                                                                    $image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
                                                                                            ?>
                                                                                            <img
                                                                                                src="<?php echo wp_get_attachment_image_url( $image, 'w1920' ) ?>"
                                                                                                srcset="<?php echo wp_get_attachment_image_srcset( $image ) ?>"
                                                                                                sizes="100vw"
                                                                                                alt="<?php echo $image_alt; ?>"
                                                                                                width="<?php echo $image_data[1]; ?>"
                                                                                                height="<?php echo $image_data[2]; ?>"
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
                                                                                                <h3 class="heading-animation m-0"><?php the_title();?></h3>
                                                                                            </div> <!-- .title-wrap -->
                                                                                        </div> <!-- .title-row -->
                                                                                    </div> <!-- .col-md-6 -->
                                                                                </div> <!-- .d-flex -->
                                                                            </section> <!-- .equal-cols -->
                                                                            
                                                                        <?php endwhile; ?>
                                                                </div> <!-- .title-wrap -->
                                                            </div> <!-- .title-row -->
                                                        </div> <!-- .col-md-6 --> 
                                                </div>  
                                <?php  $i++;  
                                    }    
                                }                             
                                ?>              

					</div> <!-- .tab-content -->
				</div> <!-- .col-12 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .generic-tabs -->
</section> <!-- .generic-tabs -->

<?php  } else{?>	

<section class="download-list">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<ul class="list-unstyled m-0 p-0">	
					<?php 
					$args = array(  
						'post_type' => 'technical',
						'post_status' => 'publish',
						'posts_per_page' => -1, 
						'orderby' => 'title', 
						'order' => 'ASC', 
					);
					$loop = new WP_Query( $args ); $i=1;
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<li>	
									<span class="number">0<?php echo $i;?>.</span> <!-- .number -->
									<span class="title"><?php echo the_title();?></span> <!-- .title -->
									<a href="#document-1" id="download_form" data-id="<?php echo get_the_ID();?>" class="btn btn-secondary download-form">Download</a>
								</li>
					<?php $i++;
					endwhile;
					wp_reset_postdata();?>						
				</ul> <!-- .list-unstyled m-0 p-0 -->
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .download-list -->
<?php }?>
<div id="document-1" class="download-popup position-relative mfp-hide"></div>   <!-- .Ajax call for display dropdown form -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function($) {	
	$('.download-form').click(function(e) { 
		e.preventDefault();
		let postID = $(this).attr("data-id");
		console.log(postID);
		jQuery.ajax({
			type: 'POST',
			url: '/wp-admin/admin-ajax.php',
			data: {
				'action': 'sayhello',
				'post_id' : postID
			},
			success: function (data) {  
			//	console.log(data);
				$("#document-1").html(data);
			}
		});	
	});
});
</script>
<script>
		 function sendContact() {		
		jQuery.ajax({
			url: "/wp-admin/admin-ajax.php",
			data:{
				'userName': $("#userName").val(),
				'userEmail': $("#userEmail").val(),
				'lastName': $("#lastName").val(),
				'post_id': $("#post_id").val(),
				'action': 'sayhello2',
			},
			type: "POST",			
			success:function(data1){
				console.log(data1);
				$("#mail-status").html(data1);
			},			
		});
	}	 
</script>


<?php get_footer(); ?>