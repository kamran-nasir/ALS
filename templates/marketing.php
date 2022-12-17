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
					$ip_address =   $_SERVER['REMOTE_ADDR'];
					$loop = new WP_Query( $args ); $i=1;
					    while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<li class="stagger-animation">
									<span class="number">0<?php echo $i;?>.</span> <!-- .number -->
									<span class="title"><?php echo the_title();?></span> <!-- .title -->
									<?php 
									 $tablename = $wpdb->prefix.'form_disable';	
									 $ip_addressData = $wpdb->get_results("SELECT ip_address,formID  FROM $tablename WHERE (ip_address =  '". $ip_address ."')");
										$next24 = strtotime('+1 day', $next24); //add 24 hours in updated date
										$current = $ip_addressData[0]->date;
									
											//check if current then is bigger then next 24 hours 
											if($current < $next24 && ($ip_address ==$ip_addressData[0]->ip_address) && ($ip_addressData[0]->formID ==get_the_ID()))
											{?>
											<a href="#document-1" id="download_form" style="pointer-events: none" data-id="<?php echo get_the_ID();?>" class="btn btn-secondary download-form">Download</a>
											<?php 
										}else{?>
											<a href="#document-1" id="download_form"  data-id="<?php echo get_the_ID();?>" class="btn btn-secondary download-form">Download</a>
										<?php 
										}?>
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
				//jQuery('#download_form').prop('disabled', true);               
				document.getElementById('download').click();
				document.getElementById('download_form').disabled=true;
				jQuery("#mail-status").text("Message Sent");
				jQuery.magnificPopup.close();
				jQuery("#download_form").disabled = true;
				console.log(jQuery("#download_form").disabled = true);
				location.reload(true);

			},
		});
	}
</script>
<?php get_footer(); ?>