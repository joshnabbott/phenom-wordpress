<?php

add_action( 'wp_enqueue_scripts', 'phenom_enqueue_scripts' );

if ( ! function_exists( 'phenom_enqueue_scripts' ) ) :

/**
* Add theme styles and scripts here
*/
function phenom_enqueue_scripts() {

	if ( ! is_admin() ) {
		wp_enqueue_style(
			'phenom-style',
			get_bloginfo( 'stylesheet_url' )
		);
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
