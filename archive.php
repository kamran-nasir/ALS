<?php get_header(); ?>

<section class="inner-hero bg-primary pt-8 pt-lg-12 pb-8 pb-lg-12 position-relative overflow-hidden fade-animation">
  <div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9 col-xl-8">
				<div class="hero-content position-relative z-index-1 text-center text-white">
				  <h2 class="heading-animation text-white"><?php echo get_queried_object()->name; //var_dump(get_queried_object()->term_id)?></h2>
				</div> <!-- .hero-content -->
			</div> <!-- .col-md-6 -->
		</div> <!-- .row -->
	</div> <!-- .container -->
	<img src="<?php echo get_template_directory_uri(); ?>/images/bg-lines-2.png" alt="" class="img-cover has-parallax-effect" data-speed="auto">
</section> <!-- .inner-hero -->

<?php  if(get_queried_object()->taxonomy=='cat_lightfence'){ ;?>


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
            <div class="container pb-5">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                                <?php $i=0;
                                  //  foreach ( $categories as $key => $category ) {
                                       // $term_id = $category->parent;
                                        $taxonomy_name = 'cat_lightfence';
                                        $termchildren = get_term_children( get_queried_object()->term_id, $taxonomy_name );
                                        foreach ( $termchildren as $child ) {
                                            $term = get_term_by( 'id', $child, $taxonomy_name );
                                                ?>
                                                    <div id="tab-<?php echo $i;?>" class="tab-pane <?php if($i==0) echo 'active';?>">


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
                                                                              // 'orderby' => 'DATE',
                                                                                'order' => 'ASC' )
                                                                            );

                                                                            while (have_posts()) : the_post();        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'w1920');
                                                                            $post_thumbnail_id = get_post_meta( $post->ID, '_thumbnail_id', true );
                                                                            $image                  = get_field('secondary_feature_image_');?>
                                                                            <section class="single-product fence-solution">
                                                                                    <div class="d-flex flex-wrap   justify-content-center align-items-center">
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
                                                                                                        class="img-big has-overlay"
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
                                                                                                <?php
                                                                                                $image_data = wp_get_attachment_image_src( $image, 'w1920' );
                                                                                                   if($image_data){
                                                                                                        $image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true );
                                                                                                        $image_alt = esc_attr( trim( strip_tags( $image_alt ) ) );
                                                                                                ?>
                                                                                                <a href="<?php echo wp_get_attachment_image_url( $image, 'w1920' ) ?>" class="img-small stagger-animation has-overlay">
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
                                                                                                <?php }?>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-8 col-lg-6 order-1 order-lg-2">
                                                                                            <div class="title-row ps-lg-5">
                                                                                                <div class="title-wrap">
                                                                                                    <h4 class="heading-animation m-0"><?php the_title();?></h4>
                                                                                                    <div class="text-animation"><?php the_content();?></div>
                                                                                                </div> <!-- .title-wrap -->
                                                                                            </div> <!-- .title-row -->
                                                                                        </div> <!-- .col-md-6 -->
                                                                                    </div> <!-- .d-flex -->
                                                                                </section> <!-- .equal-cols -->

                                                                            <?php endwhile; ?>

                                                    </div>
                                    <?php  $i++;
                                        }
                                  //  }
                                    ?>

                        </div> <!-- .tab-content -->
                    </div> <!-- .col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .generic-tabs -->
    </section> <!-- .generic-tabs -->

<?php  } else{?>

    <section class="download-list pt-5 pt-md-10 pb-5 pb-md-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <ul class="list-unstyled m-0 p-0">
                        <?php
                            query_posts(array(
                                'post_type' => 'technical',
                                'showposts' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'cat_technical',
                                        'terms' => get_queried_object()->term_id,
                                        'field' => 'term_id',
                                    )
                                ),
                                'orderby' => 'title',
                                'order' => 'ASC' )
                            );
                            $i=1;
                             $formID =   get_the_ID();
                             $ip_address =   $_SERVER['REMOTE_ADDR'];
                             $tablename = $wpdb->prefix.'form_disable';	
                             $ip_addressData = $wpdb->get_results("SELECT count(*) as total FROM `wp_form_disable` WHERE `ip_address` ='".$ip_address."'");
                             if($ip_addressData[0]->total>=1) { $active=1; } else{  $active=0;}
                             while ( have_posts() ) : the_post();?>
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

<?php }?>

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
                location.reload(true);
			},
		});
	}
</script>

<?php get_footer(); ?>