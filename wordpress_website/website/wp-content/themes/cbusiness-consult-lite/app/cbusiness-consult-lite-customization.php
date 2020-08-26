<?php
function cbusiness_consult_lite_customize_register($wp_customize){

    $wp_customize->add_section('cbusiness_consult_lite_header', array(
        'title'    => esc_html__('CBusiness Consult Header Phone and email', 'cbusiness-consult-lite'),
        'description' => '',
        'priority' => 30,
    ));
    
     $wp_customize->add_section('cbusiness_consult_lite_social', array(
        'title'    => esc_html__('CBusiness Consult Social Link', 'cbusiness-consult-lite'),
        'description' => '',
        'priority' => 35,
    ));
    	
	$wp_customize->add_section('cbusiness_consult_lite_footer', array(
        'title'    => esc_html__('CBusiness Consult Lite Footer', 'cbusiness-consult-lite'),
        'description' => '',
        'priority' => 37,
    ));
 
   //  =============================
    //  = Text Input phone number                =
    //  =============================
    $wp_customize->add_setting('cbusiness_consult_lite_phone', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
 
    $wp_customize->add_control('cbusiness_consult_lite_phone', array(
        'label'      => esc_html__('Phone Number', 'cbusiness-consult-lite'),
        'section'    => 'cbusiness_consult_lite_header',
        'setting'   => 'cbusiness_consult_lite_phone',
        'type'    => 'number'
    ));
    
    //  =============================
    //  = Text Input Email                =
    //  =============================
    $wp_customize->add_setting('cbusiness_consult_lite_email', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_email'       
    ));
 
    $wp_customize->add_control('cbusiness_consult_lite_email', array(
        'label'      => esc_html__('Email', 'cbusiness-consult-lite'),
        'section'    => 'cbusiness_consult_lite_header',
        'setting'   => 'cbusiness_consult_lite_email',
        'type'    => 'email'
    ));
    
    //  =============================
    //  = Text Input facebook                =
    //  =============================
    $wp_customize->add_setting('cbusiness_consult_lite_fb', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('cbusiness_consult_lite_fb', array(
        'label'      => esc_html__('Facebook', 'cbusiness-consult-lite'),
        'section'    => 'cbusiness_consult_lite_social',
        'setting'   => 'cbusiness_consult_lite_fb',
    ));
    //  =============================
    //  = Text Input Twitter                =
    //  =============================
    $wp_customize->add_setting('cbusiness_consult_lite_twitter', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('cbusiness_consult_lite_twitter', array(
        'label'      => esc_html__('Twitter', 'cbusiness-consult-lite'),
        'section'    => 'cbusiness_consult_lite_social',
        'setting'   => 'cbusiness_consult_lite_twitter',
    ));
    //  =============================
    //  = Text Input googleplus                =
    //  =============================
    $wp_customize->add_setting('cbusiness_consult_lite_glplus', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('cbusiness_consult_lite_glplus', array(
        'label'      => esc_html__('Google Plus', 'cbusiness-consult-lite'),
        'section'    => 'cbusiness_consult_lite_social',
        'setting'   => 'cbusiness_consult_lite_glplus',
    ));
    //  =============================
    //  = Text Input linkedin                =
    //  =============================
    $wp_customize->add_setting('cbusiness_consult_lite_in', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('cbusiness_consult_lite_in', array(
        'label'      => esc_html__('Linkedin', 'cbusiness-consult-lite'),
        'section'    => 'cbusiness_consult_lite_social',
        'setting'   => 'cbusiness_consult_lite_in',
    ));
	//  =============================
    //  = slider section              =
    //  =============================
    $wp_customize->add_section('cbusiness_consult_lite_banner', array(
        'title'    => esc_html__('CBusiness Consult Lite Home banner Text', 'cbusiness-consult-lite'),
        'description' => esc_html__('add home banner text here.','cbusiness-consult-lite'),
        'priority' => 36,
    ));
   
// Banner heading Text
    $wp_customize->add_setting('banner_heading',array(
            'default'   => null,
            'sanitize_callback' => 'sanitize_text_field'    
    ));
    
    $wp_customize->add_control('banner_heading',array( 
            'type'  => 'text',
            'label' => esc_html__('Add Banner heading here','cbusiness-consult-lite'),
            'section'   => 'cbusiness_consult_lite_banner',
            'setting'   => 'banner_heading'
    )); // Banner heading Text

    // Banner heading Text
    $wp_customize->add_setting('banner_sub_heading',array(
            'default'   => null,
            'sanitize_callback' => 'sanitize_text_field'    
    ));
    
    $wp_customize->add_control('banner_sub_heading',array( 
            'type'  => 'text',
            'label' => esc_html__('Add Banner sub heading here','cbusiness-consult-lite'),
            'section'   => 'cbusiness_consult_lite_banner',
            'setting'   => 'banner_sub_heading'
    )); // Banner heading Text

  //  =============================
    //  = Footer              =
    //  =============================
	
	// Footer design and developed
	 $wp_customize->add_setting('cbusiness_consult_lite_design', array(
        'default'        => '',
		'sanitize_callback' => 'sanitize_textarea_field'
    ));
 
    $wp_customize->add_control('cbusiness_consult_lite_design', array(
        'label'      => esc_html__('Design and developed', 'cbusiness-consult-lite'),
        'section'    => 'cbusiness_consult_lite_footer',
        'setting'   => 'cbusiness_consult_lite_design',
		'type'	   =>'textarea'
    ));
	// Footer copyright
	 $wp_customize->add_setting('cbusiness_consult_lite_copyright', array(
        'default'        => '',
		'sanitize_callback' => 'sanitize_textarea_field'       
    ));
 
    $wp_customize->add_control('cbusiness_consult_lite_copyright', array(
        'label'      => esc_html__('Copyright', 'cbusiness-consult-lite'),
        'section'    => 'cbusiness_consult_lite_footer',
        'setting'   => 'cbusiness_consult_lite_copyright',
		'type'	   =>'textarea'
    ));	
}
add_action('customize_register', 'cbusiness_consult_lite_customize_register');