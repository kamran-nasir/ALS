<?php 
//  Block options   
$count_list    = get_field('count_list');
//  Developer options
$padding_top          = get_field( 'padding_top' );
$padding_bottom       = get_field( 'padding_bottom' );
$custom_classes       = get_field( 'custom_classes' );
$custom_css           = get_field( 'custom_css' );

?>

<section class="statics-numbers bg-primary text-white pt-5 pb-5 position-relative <?php echo $spacing_top; ?> <?php echo $spacing_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>" id="<?php echo $custom_id; ?>">
	<div class="container position-relative z-index-1">
		<div class="row">
			<?php 
				if( $count_list ) {				
					foreach( $count_list as $row ) {?>
						<div class="col-md-4 numbers-row stagger-animation">
							<div class="numbers-wrap">
								<div class="numbers">
										<span class="line-number"><?php echo ( $row['number'] );?></span>
										<h3 class="h2 counts text-white" data-number="<?php echo ( $row['number'] );?>"><?php echo ( $row['number'] );?></h3>
									</div> <!-- .numbers -->
									<div class="content">
										<p><?php echo ( $row['heading'] );?></p>
									</div> <!-- .content -->
							</div> <!-- .d-flex -->
						</div> <!-- .col-md-4 -->
				<?php } 
			}?>
			</div> <!-- .col-md-4 -->
		</div> <!-- .row -->
	<img class="img-cover" src="<?php echo get_template_directory_uri(); ?>/images/bg-lines.png" alt="">
</section> <!-- .statics-numbers -->