
<?php
//  Block options
    $source_title   		 = get_field('source_title');
    $heading                 = get_field('heading');
    $description             = get_field('description');
    $button                  = get_field('button');
//  Developer options
    $padding_top            = get_field( 'padding_top' );
    $padding_bottom          = get_field( 'padding_bottom' );
    $custom_classes          = get_field( 'custom_classes' );
    $custom_css              = get_field( 'custom_css' );
	  $custom_id           = get_field( 'custom_id' );

?>

<section class="simple-text fade-animation  <?php echo $padding_top; ?> <?php echo $padding_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>" id="<?php echo $custom_id; ?>">
<div class="bg-primary text-white position-relative pt-10 pb-10">
	<div class="container position-relative z-index-1 overflow-hidden">
		<div class="row justify-content-center">
			<div class="col-md-7 text-center">
			  <div class="title-row mb-5">
					<div class="title-wrap">
						<h2 class="heading-animation text-white m-0"><?php echo $heading;?></h2>
						<div class="fade-animation">
							<span class="bottom-line line-centered"></span>
						</div> <!-- .fade-animation -->
					</div> <!-- .title-wrap -->
						<p class="text-animation mb-1-5 text-white desc-lg"><?php echo $description;?></p>
						<div class="blockquote-footer">
							<cite title="Source Title"><?php echo $source_title;?></cite>
						</div>
				</div> <!-- .title-row -->
                <?php if ( is_array($button) && $button['url'] != '' ) { ?>
                    <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target'] ?>" class="btn btn-secondary btn-rarr"><?php echo ($button['title'] != '') ? $button['title'] : 'Download'; ?></a>
                <?php } ?>
				<!-- <a href="#0" class="btn btn-secondary btn-rarr">become a dealer</a> -->
			</div> <!-- .col-md-7 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
	<img class="img-cover" src="<?php echo get_template_directory_uri(); ?>/images/bg-lines.png" alt="">
	</div> <!-- .pt-10 pb-10 -->
</section> <!-- .simple-text -->