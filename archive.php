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