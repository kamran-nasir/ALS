<?php /* Template Name: Marketing*/ ?>
<?php get_header(); ?>
<?php the_content(); ?>

<section class="download-list pt-8 pb-8">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<ul class="list-unstyled m-0 p-0">
					<?php
					global $wpdb; 
					$args = array(
						'post_type' => 'marketing',
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'orderby' => 'title',
						'order' => 'asc',
					);
					$ip_address =   $_SERVER['REMOTE_ADDR'];
					$tablename = $wpdb->prefix.'form_disable';	
					$ip_addressData = $wpdb->get_results("SELECT count(*) as total FROM `wp_form_disable` WHERE `ip_address` ='".$ip_address."'");
					$loop = new WP_Query( $args ); $i=0;
					if($ip_addressData[0]->total>=1) { $active=1; } else{  $active=0;}
					while ( $loop->have_posts() ) : $loop->the_post();?>
								<li class="stagger-animation">
									<span class="number">0<?php echo $i;?>.</span> <!-- .number -->
									<span class="title"><?php echo get_the_title();?></span> <!-- .title -->
									<?php if($active==1){ ?>
										<a target="_blank" href="<?php echo get_field('download_file_link', get_the_ID());?>"   download  class="btn btn-secondary ">Download</a>
									<?php }else{?>	
										<a href="#document-1" id="download_form"  data-id="<?php echo get_the_ID();?>" class="btn btn-secondary download-form">Download</a>
									<?php }?>
								</li>
						<?php $i++;
					endwhile;?>
				</ul> <!-- .list-unstyled m-0 p-0 -->
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- .download-list -->
<div id="document-1" class="download-popup position-relative mfp-hide">
    <div id="form1">  </div> 

		


<?php get_footer(); ?>