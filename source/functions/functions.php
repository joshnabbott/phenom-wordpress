<?php

add_action( 'wp_enqueue_scripts', 'phenom_enqueue_scripts' );
add_action( 'init', 'register_menus' );

function register_menus() {
  register_nav_menus(
    array(
      'primary-nav' => __( 'Primary Nav' ),
      'footer-nav' => __( 'Footer Nav' )
    )
  );
}


if ( ! function_exists( 'phenom_enqueue_scripts' ) ) :

  /**
   * Add theme styles and scripts here
   */
  function phenom_enqueue_scripts() {

    if ( ! is_admin() ) {
      wp_enqueue_style('phenom-style', get_bloginfo('stylesheet_url'));
      wp_deregister_script('jquery');
      wp_enqueue_script('jquery', "http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js");
      wp_enqueue_script('theme', get_template_directory_uri() . "/javascripts/theme.js");
    }

  }

endif; // phenom_enqueue_scripts

add_action( 'after_setup_theme', 'phenom_setup' );

if ( ! function_exists( 'phenom_setup' ) ) :

  /**
   * Set up your theme here
   */
  function phenom_setup() {
    add_theme_support( 'post-thumbnails' );
  }

endif; // phenom_setup
