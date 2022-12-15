<?php /* Template Name: Marketing*/ ?>
<?php get_header(); ?>
<?php the_content(); ?>

<section class="download-list pt-8 pb-8">
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
								<li class="stagger-animation">
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
<div id="document-1" class="download-popup position-relative mfp-hide">
    <div id="form1"></div>
</div>  

<script>

		 function sendContact() {
		jQuery.ajax({
			url: "/wp-admin/admin-ajax.php",
			data:{
				'userName': jQuery("#userName").val(),
				'userEmail': jQuery("#userEmail").val(),
				'lastName': jQuery("#lastName").val(),
				'post_id': jQuery("#post_id").val(),
				'action': 'sayhello2',
			},
			type: "POST",
			success:function(data1){
				console.log(data1);                   
				document.getElementById('download').click();
				jQuery("#mail-status").text("Message Sent");
			},
		});
	}
</script>
<?php get_footer(); ?>