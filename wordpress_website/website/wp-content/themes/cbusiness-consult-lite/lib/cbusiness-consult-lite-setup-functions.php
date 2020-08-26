<?php 
 if ( ! function_exists( 'cbusiness_consult_lite_setup' ) ) :
function cbusiness_consult_lite_setup() {   
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'cbusiness-consult-lite' )
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );	

		$defaults = array(
		'default-image'          => get_template_directory_uri() .'/design/images/slider.jpg',
		'default-text-color' => 'ffffff',
		'width'                  => 1400,
		'height'                 => 500,
		'uploads'                => true,
		'wp-head-callback'   => 'cbusiness_consult_lite_header_style',			
		);
		add_theme_support( 'custom-header', $defaults );
} 
endif; // cbusiness_consult_lite_setup
add_action( 'after_setup_theme', 'cbusiness_consult_lite_setup' );