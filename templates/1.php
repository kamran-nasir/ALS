<?php /* Template Name: LightFence1*/ ?>
<?php get_header(); ?>
<?php the_content(); ?>

<section class="download-cards">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php 
					$args = array(
						'taxonomy' => 'cat_technical',
						'orderby' => 'name',
						'order'   => 'ASC'
					);
					$cats = get_categories($args);?>
					<ul class="list-unstyled m-0 p-0 nav">
						<?php foreach($cats as $cat) { ?>
						<li>
							<a href="<?php echo get_category_link( $cat->term_id ) ?>">
								<span class="icon">
								<?php if (function_exists('z_taxonomy_image_url')):  ?>	
									<img src="<?php echo z_taxonomy_image_url($cat->term_id);?>" alt="">
								<?php endif;?>
								</span> <!-- .icon -->
								<span class="text h4">
								<?php echo $cat->name; ?>
								</span> <!-- .text -->
							</a>
						</li>						
					<?php } ?>					
				</ul> <!-- .list-unstyled m-0 p-0nav -->
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .download-cards -->

<section class="download-list">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<ul class="list-unstyled m-0 p-0">	
					<?php 
					$args = array(  
						'post_type' => 'marketing',
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