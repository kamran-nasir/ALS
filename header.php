<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <!-- HTML Boilerplte v8.00 -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php wp_title( '-', true, 'right' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png?1" type="image/png">
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet">
</head>

<body <?php body_class( 'site-wrapper' ); ?>>

<?php wp_body_open(); ?>

<header class="site-header clearfix" role="banner">
  <div class="container">
    <div class="row">
      <div class="col-12 d-flex align-items-center">
        <div class="header-logo">
          <a href="<?php echo esc_url( home_url() ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ) ); ?>" aria-label="Go to Home" <?php echo (is_front_page()) ? 'aria-current="page"' : ''; ?>>
            <span><?php bloginfo('description'); ?></span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
          </a>
        </div>

        <div class="nav-wrapper ms-auto">
          <nav class="header-secondary">
            <?php wp_nav_menu( array(
              'theme_location' => 'header-secondary-menu',
              'container' => 'false',
              'menu_class' => 'header-secondary-parent-menu',
              'items_wrap'	=> '<ul class="%2$s">%3$s</ul>',
              )
            ); ?>
          </nav> <!-- .header-secondary -->
          <nav class="header-nav" role="navigation" aria-label="<?php _e( 'primary navigation', 'skel' ); ?>">
            <button class="header-nav-close" aria-label="<?php _e( 'close primary navigation' ); ?>" aria-haspopup="true" aria-expanded="true" aria-controls="siteMenu"><i class="i-font-before i-x"></i></button>
            <?php wp_nav_menu( array(
              'theme_location' => 'header-primary-menu',
              'container' => 'false',
              'menu_class' => 'header-primary-parent-menu',
              'items_wrap'	=> '<ul id="siteMenu" class="%2$s">%3$s</ul>',
              )
            ); ?>

          </nav> <!-- .header-nav -->
        </div> <!-- .nav-wrapper -->
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
</header>
<div id="wrapper">
 <div id="content">
  <main class="site-content">
