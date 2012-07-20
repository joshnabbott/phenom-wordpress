<!DOCTYPE html>
<html <?php language_attributes( 'html' ) ?>>
<head>
  <title><?php wp_title(); ?></title>
  <!-- Basic Meta Data -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />

  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon" />
  <!-- WordPress -->
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="primary-container" class="container">
    <header class="row-fluid">
      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>

      <form action="http://shop.phenom.fm/search" method="get" class="form-search pull-right">
        <input type="text" name="q" placeholder="search products" class="input-medium search-query" />
        <input type="submit" value="Search" class="btn" />
      </form>

        <?php
          wp_nav_menu(array(
            'theme_location'  => 'primary-nav',
            'container'       => 'nav',
            'container_class' => 'menu-{menu slug}-container',
            'menu_class'      => 'menu unstyled',
            'before'          => '/ ',
          ));
        ?>
    </header>

