<?php /* Template Name: Technical Resource*/ ?>
<?php get_header(); ?>
<?php the_content(); ?>

<section class="download-cards">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php 
					$args = array(
						'taxonomy' => 'cat_technical',
							'parent' => '0', 
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



<?php get_footer(); ?>