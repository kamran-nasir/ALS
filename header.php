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
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 d-flex align-items-center">
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
            <ul class="search-bar-wrap list-unstyled m-0 p-0 mb-1-5">
              <li>
                <div class="search-bar">
                  <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
                    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-8" viewBox="0 0 40 40">
                      <path d="M16 32c8.835 0 16-7.165 16-16 0-8.837-7.165-16-16-16C7.162 0 0 7.163 0 16c0 8.835 7.163 16 16 16zm0-5.76c5.654 0 10.24-4.586 10.24-10.24 0-5.656-4.586-10.24-10.24-10.24-5.656 0-10.24 4.584-10.24 10.24 0 5.654 4.584 10.24 10.24 10.24zM28.156 32.8c-1.282-1.282-1.278-3.363.002-4.643 1.282-1.284 3.365-1.28 4.642-.003l6.238 6.238c1.282 1.282 1.278 3.363-.002 4.643-1.283 1.283-3.366 1.28-4.643.002l-6.238-6.238z"
                      fill-rule="evenodd" />
                    </symbol>
                    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-3" viewBox="0 0 20 20">
                      <path d="M8.114 10L.944 2.83 0 1.885 1.886 0l.943.943L10 8.113l7.17-7.17.944-.943L20 1.886l-.943.943-7.17 7.17 7.17 7.17.943.944L18.114 20l-.943-.943-7.17-7.17-7.17 7.17-.944.943L0 18.114l.943-.943L8.113 10z" fill-rule="evenodd" />
                    </symbol>
                  </svg>
                  <form method="get" action="<?php echo home_url(); ?>/" class="searchbox sbx-twitter">
                    <div role="search" class="sbx-twitter__wrapper">
                      <input type="search" name="s" placeholder="Search" autocomplete="off" required="required" class="sbx-twitter__input">
                      <button type="submit" title="Submit your search query." class="sbx-twitter__submit">
                        <svg role="img" aria-label="Search">
                          <use xlink:href="#sbx-icon-search-8"></use>
                        </svg>
                      </button>
                      <button type="reset" title="Clear the search query." class="sbx-twitter__reset">
                        <svg role="img" aria-label="Reset">
                          <use xlink:href="#sbx-icon-clear-3"></use>
                        </svg>
                      </button>
                    </div>
                  </form>
                </div> <!-- .search-bar -->
              </li>
            </ul>
          </nav> <!-- .header-nav -->
        </div> <!-- .nav-wrapper -->
      </div> <!-- .col-12 -->
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
  <div class="header-pattern">
		<svg viewBox="0 0 1440 35" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
      <path d="M258.49 5.88C259.86 2.33 263.28 0 267.08 0H1440V17.5L254 17.48M254 17.52L0 17.5V34.99L240.92 35C244.72 35 248.13 32.67 249.51 29.12L254 17.53" fill="url(#paint0_linear_2404_12559)"/>
      <defs>
      <linearGradient id="paint0_linear_2404_12559" x1="0" y1="17.5" x2="1440" y2="17.5" gradientUnits="userSpaceOnUse">
      <stop offset="0.03" stop-color="#000034"/>
      <stop offset="0.33" stop-color="#712CEE"/>
      <stop offset="0.61" stop-color="#54BDDA"/>
      <stop offset="0.9" stop-color="#00FFBC"/>
      </linearGradient>
      </defs>
    </svg>
	</div> <!-- .header-pattern -->
</header> <!-- .site-header -->

<div id="wrapper">
 <div id="content">

<main class="site-content">
