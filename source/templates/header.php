<!DOCTYPE html>
<html <?php language_attributes( 'html' ) ?>>
<head>
  <title><?php wp_title(); ?></title>
  <!-- Basic Meta Data -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />

  <!-- WordPress -->
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="primary-container" class="container">
    <header class="row-fluid">
      <div class="span12">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>

        <form action="/search" method="get" class=".form-search pull-right">
          <input type="text" name="q" placeholder="search products" class="input-medium search-query" />
          <input type="submit" value="Search" class="btn" />
        </form>

        <nav>
          <span>/ <a href="">Home</a></span>
          <span>/ <a href="">Team</a></span>
          <span>/ <a href="">Shop</a></span>
          <span>/ <a href="">About</a></span>
          <span>/ <a href="">Videos</a></span>
          <?php
            // wp_nav_menu(
            //   array(
            //     'theme_location'  => 'nav-1',
            //     'container_id'    => 'navigation',
            //     'container_class' => 'clear',
            //     'menu_class'      => 'nav',
            //     'depth'           => '2'
            //     )
            //   );
          ?>
        </nav>
      </div>
    </header><!-- End header -->

