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
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4774264488206253"
     crossorigin="anonymous"></script>
</head>

<body <?php body_class( 'site-wrapper' ); ?>>

<?php wp_body_open(); ?>
<span class="cursor">
  <span class="cursor__follower"></span>
	<span class="cursor__label">drag</span>
</span>
<header class="site-header clearfix" role="banner">
  <div class="container">
    <div class="row">
      <div class="col-12 d-flex align-items-center justify-content-between">
        <div class="header-logo">
          <a href="<?php echo esc_url( home_url() ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ) ); ?>" aria-label="Go to Home" <?php echo (is_front_page()) ? 'aria-current="page"' : ''; ?>>
            <span><?php bloginfo('description'); ?></span>
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
          </a>
        </div>
        <button class="header-nav-toggle btn ms-auto" aria-label="<?php _e( 'show primary navigation', 'skel' ); ?>" aria-haspopup="true" aria-expanded="false" aria-controls="siteMenu">
          <svg width="33" height="17" viewBox="0 0 33 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 1H32.0588" stroke="#000033" stroke-width="2"/>
            <path d="M0 8.35352H32.0588" stroke="#000033" stroke-width="2"/>
            <path d="M0 16H17.6471" stroke="#000033" stroke-width="2"/>
          </svg>
        </button>
        <div class="nav-wrapper">
          <nav class="header-secondary">
            <?php
            if ( has_nav_menu( 'header-secondary-menu' ) ) {

                  wp_nav_menu( array(
                  'theme_location' => 'header-secondary-menu',
                  'container' => 'false',
                  'menu_class' => 'header-secondary-parent-menu',
                  'items_wrap'	=> '<ul class="%2$s">%3$s</ul>',
                  )
                );
            }
            ?>
          </nav> <!-- .header-secondary -->
          <nav class="header-nav" role="navigation" aria-label="<?php _e( 'primary navigation', 'skel' ); ?>">
          <div class="header-logo d-lg-none">
            <a href="<?php echo esc_url( home_url() ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ) ); ?>" aria-label="Go to Home" <?php echo (is_front_page()) ? 'aria-current="page"' : ''; ?>>
              <span><?php bloginfo('description'); ?></span>
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
            </a>
          </div>
            <button class="header-nav-close" aria-label="<?php _e( 'close primary navigation' ); ?>" aria-haspopup="true" aria-expanded="true" aria-controls="siteMenu"><svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <line y1="-1" x2="19.2559" y2="-1" transform="matrix(0.686591 0.727044 0.686591 -0.727044 1.77881 0.861084)" stroke="#04142D" stroke-width="2"/>
              <line y1="-1" x2="19.2559" y2="-1" transform="matrix(0.686591 -0.727044 -0.686591 -0.727044 0.999878 14.8608)" stroke="#04142D" stroke-width="2"/>
              </svg>
            </button>
            <?php wp_nav_menu( array(
              'theme_location' => 'header-primary-menu',
              'container' => 'false',
              'menu_class' => 'header-primary-parent-menu',
              'items_wrap'	=> '<ul id="siteMenu" class="%2$s">%3$s</ul>',
              )
            ); ?>
          </nav> <!-- .header-nav -->
          <ul class="social-links list-unstyled nav">
          <li>
            <a href="#0">
              <span class="i-facebook i-font-before"></span>
            </a>
          </li>
          <li>
            <a href="#0">
              <span class="i-instagram i-font-before"></span>
            </a>
          </li>
          <li>
            <a href="#0">
              <span class="i-linkedin i-font-before"></span>
            </a>
          </li>
        </ul> <!-- .list-unstyled social-links -->
        </div> <!-- .nav-wrapper -->
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
</header>
<div id="wrapper">
 <div id="content">
  <main class="site-content">
