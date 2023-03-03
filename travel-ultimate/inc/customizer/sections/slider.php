<?php
/**
 * Slider Section options
 *
 * @package Theme Palace
 * @subpackage Travel Ultimate
 * @since Travel Ultimate 1.0.0
 */

// Add Slider section
$wp_customize->add_section( 'travel_ultimate_slider_section', array(
	'title'             => esc_html__( 'Slider','travel-ultimate' ),
	'description'       => esc_html__( 'Slider Section options.', 'travel-ultimate' ),
	'panel'             => 'travel_ultimate_front_page_panel',
) );

// Slider content enable control and setting
$wp_customize->add_setting( 'travel_ultimate_theme_options[slider_section_enable]', array(
	'default'			=> 	$options['slider_section_enable'],
	'sanitize_callback' => 'travel_ultimate_sanitize_switch_control',
) );

$wp_customize->add_control( new travel_ultimate_Switch_Control( $wp_customize, 'travel_ultimate_theme_options[slider_section_enable]', array(
	'label'             => esc_html__( 'Slider Section Enable', 'travel-ultimate' ),
	'section'           => 'travel_ultimate_slider_section',
	'on_off_label' 		=> travel_ultimate_switch_options(),
) ) );


// Slider content type control and setting
$wp_customize->add_setting( 'travel_ultimate_theme_options[slider_content_type]', array(
	'default'          	=> $options['slider_content_type'],
	'sanitize_callback' => 'travel_ultimate_sanitize_select',
) );

$choices = array( 
		'page' 		=> esc_html__( 'Page', 'travel-ultimate' ),
		'custom' 		=> esc_html__( 'Custom', 'travel-ultimate' ),
	);
if ( class_exists( 'WP_Travel' ) ) {
	$choices['trip'] = esc_html__( 'Trip', 'travel-ultimate' );
}
$wp_customize->add_control( 'travel_ultimate_theme_options[slider_content_type]', array(
	'label'             => esc_html__( 'Content Type', 'travel-ultimate' ),
	'section'           => 'travel_ultimate_slider_section',
	'type'				=> 'select',
	'active_callback' 	=> 'travel_ultimate_is_slider_section_enable',
	'choices'			=> $choices,
) );

for ( $i = 1; $i <= 3; $i++ ) :
	// slider pages drop down chooser control and setting
	$wp_customize->add_setting( 'travel_ultimate_theme_options[slider_content_page_' . $i . ']', array(
		'sanitize_callback' => 'travel_ultimate_sanitize_page',
	) );

	$wp_customize->add_control( new travel_ultimate_Dropdown_Chooser( $wp_customize, 'travel_ultimate_theme_options[slider_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'travel-ultimate' ), $i ),
		'section'           => 'travel_ultimate_slider_section',
		'choices'			=> travel_ultimate_page_choices(),
		'active_callback'	=> 'travel_ultimate_is_slider_section_content_page_enable',
	) ) );

	if ( class_exists( 'WP_Travel' ) ) {
		// slider trip drop down chooser control and setting
		$wp_customize->add_setting( 'travel_ultimate_theme_options[slider_content_trip_' . $i . ']', array(
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( new travel_ultimate_Dropdown_Chooser( $wp_customize, 'travel_ultimate_theme_options[slider_content_trip_' . $i . ']', array(
			'label'             => sprintf( esc_html__( 'Select Trip %d', 'travel-ultimate' ), $i ),
			'section'           => 'travel_ultimate_slider_section',
			'choices'			=> travel_ultimate_trip_choices(),
			'active_callback'	=> 'travel_ultimate_is_slider_section_content_trip_enable',
		) ) );
	}

	//////// Custom Section
	// custom image setting and control.
	$wp_customize->add_setting( 'travel_ultimate_theme_options[custom_image_' . $i . ']', array(
		'sanitize_callback' => 'travel_ultimate_sanitize_image'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'travel_ultimate_theme_options[custom_image_' . $i . ']',
			array(
			'label'       		=> sprintf( esc_html__( 'Image %d', 'travel-ultimate' ), $i ),
			'section'     		=> 'travel_ultimate_slider_section',
			'active_callback'	=> 'travel_ultimate_is_slider_section_content_custom_enable',
	) ) );

	// custom btn setting and control
	$wp_customize->add_setting( 'travel_ultimate_theme_options[custom_title_' . $i . ']', array(
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'travel_ultimate_theme_options[custom_title_' . $i . ']', array(
		'label'           	=> sprintf( esc_html__( 'Title %d', 'travel-ultimate' ), $i ),
		'section'        		=> 'travel_ultimate_slider_section',
		'active_callback' 	=> 'travel_ultimate_is_slider_section_content_custom_enable',
	) );

	// custom description btn setting and control
	$wp_customize->add_setting( 'travel_ultimate_theme_options[custom_description_' . $i . ']', array(
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'travel_ultimate_theme_options[custom_description_' . $i . ']', array(
		'label'           	=> sprintf( esc_html__( 'Description %d', 'travel-ultimate' ), $i ),
		'section'        		=> 'travel_ultimate_slider_section',
		'active_callback' 	=> 'travel_ultimate_is_slider_section_content_custom_enable',
	) );

	// custom link btn setting and control
	$wp_customize->add_setting( 'travel_ultimate_theme_options[custom_url_' . $i . ']', array(
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'travel_ultimate_theme_options[custom_url_' . $i . ']', array(
		'label'           	=> sprintf( esc_html__( 'Link/URL %d', 'travel-ultimate' ), $i ),
		'section'        		=> 'travel_ultimate_slider_section',
		'active_callback' 	=> 'travel_ultimate_is_slider_section_content_custom_enable',
		'type' 							=> 'url',
	) );

	// custom hr setting and control
	$wp_customize->add_setting( 'travel_ultimate_theme_options[custom_hr_'. $i .']', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new travel_ultimate_Customize_Horizontal_Line( $wp_customize, 'travel_ultimate_theme_options[custom_hr_'. $i .']',
		array(
			'section'         => 'travel_ultimate_slider_section',
			'active_callback' => 'travel_ultimate_is_slider_section_content_custom_enable',
			'type'			  => 'hr'
	) ) );
	

endfor;
