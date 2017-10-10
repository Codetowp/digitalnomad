<?php
/**
 * Digital Nomad Theme Customizer
 *
 * @package Digital_Nomad
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function digitalnomad_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    
    $wp_customize->get_section('title_tagline')->title = __( 'Branding' ); 
        
    require get_template_directory() . '/inc/customizer-controls.php';
	require get_template_directory() . '/inc/lib/fo-to-range.php';



	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'digitalnomad_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'digitalnomad_customize_partial_blogdescription',
		) );
        
        $wp_customize->selective_refresh->add_partial( 'digitalnomad_header_text', array(
            'selector'       	 	=> '#home-banner h1',
            'render_callback' 	 	=> 'digitalnomad_customize_partial_header_text',

        ) ); 
        
        $wp_customize->selective_refresh->add_partial( 'digitalnomad_header_tag_line', array(
            'selector'       	 	=> '#home-banner span',
            'render_callback' 	 	=> 'digitalnomad_customize_partial_header_tag_line',

        ) ); 
        
     
        
	}
    
/*****************************Panel***********************************************/
    
		$wp_customize->add_panel( 'digitalnomad_pannel' ,array(
            'priority'        		=> 101,
            'title'           		=> esc_html__( 'Frontpage Theme Sections', 'digitalnomad' ),
            'description'     		=> '',
        ) );
    
/********* header intro **********/
    
        $wp_customize->add_section('digitalnomad_header', array(
            'title'                     => __('Header Intro', 'digitalnomad'),
            'description'               => 'Easily edit your header section',
            'priority'                  => 15,   
            'panel'                     => 'digitalnomad_pannel',    

        ));
    
        /********* header Disable **********/
    
        $wp_customize->add_setting( 'digitalnomad_disable', array(
                'sanitize_callback' => 'digitalnomad_sanitize_checkbox',
                'default'           => '',
                'capability'        => 'manage_options',
                'transport'         => 'refresh',
            )
        );
    
        
        $wp_customize->add_control( new Customizer_Toggle_Control( $wp_customize, 'digitalnomad_disable', array(
                'settings' => 'digitalnomad_disable',
                'label'    => __( 'Disable Header Section?', 'digitalnomad' ),
                'section'  => 'digitalnomad_header',
                'type'     => 'ios',
                'priority' => 1,

        ) ) );

    
       
        $wp_customize->add_setting( 'header_background_image', array(
            'default'                   => '',
            'type'                      => 'theme_mod',
            'capability'                => 'edit_theme_options',
            'sanitize_callback'         => 'esc_url_raw',
        ) );
    
        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,'header_background_image', array(
            'label'                     => __( 'Background Image', '' ),
            'section'                   => 'digitalnomad_header',
            'settings'                  => 'header_background_image',
            'context'                   => 'header_background_image',
            'priority'                  => 20,
            ) 
        ) );
    
        $wp_customize->add_setting( 'digitalnomad_header_text', array(      
            'default'                   => esc_html__('Section Main Title', 'digitalnomad'),
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
        ) );    

        $wp_customize->add_control( 'digitalnomad_header_text', array(
            'type'						=> 'text',
            'label' 					=> __( 'Header', 'digitalnomad' ),
            'section'  					=> 'digitalnomad_header',
            'priority' 					=> 1,
        ) );
    
        
        $wp_customize->add_setting( 'digitalnomad_header_tag_line', array(      
            'default'                   => esc_html__('Section Title', 'digitalnomad'),
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'postMessage', // refresh or postMessage              
        ) );    

        $wp_customize->add_control( 'digitalnomad_header_tag_line', array(
            'type'						=> 'text',
            'label' 					=> __( 'Tag line', 'digitalnomad' ),
            'section'  					=> 'digitalnomad_header',
            'priority' 					=> 2,
        ) );
    
    
        $wp_customize->add_setting( 'digitalnomad_header_button_text', array(      
            'default'                   => 'contact us' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'digitalnomad_header_button_text', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button Text', 'digitalnomad' ),
            'section'  					=> 'digitalnomad_header',
            'priority' 					=> 4,
        ) );	
   
        $wp_customize->add_setting( 'digitalnomad_header_button_url', array(      
            'default'                   => '#' ,
            'sanitize_callback'         => 'sanitize_text_field',
            'transport'                 => 'refresh',               
        ) );    

        $wp_customize->add_control( 'digitalnomad_header_button_url', array(
            'type'						=> 'text',
            'label' 					=> __( 'Button Url', 'digitalnomad' ),
            'section'  					=> 'digitalnomad_header',
            'priority' 					=> 5
        ) );	  
    

       $social_sites = array( 'facebook', 'twitter','instagram',  'google-plus', 'pinterest', 'linkedin', 'rss');

		foreach( $social_sites as $social_site ) 
        {
                $wp_customize->add_setting( "social[$social_site]", array(
                'default'           => '',
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'esc_url_raw'
            ) );

                $wp_customize->add_control( "social[$social_site]", array(
                'label'            => ucwords( $social_site ) . __( " Url:", 'digitalnomad' ),
                'section'          => 'digitalnomad_header',
                'type'             => 'text',
                'priority' 		   => 20,
            ) );
		}
/**********Slider***********/

        $wp_customize->add_section( 'digitalnomad_slider_options' , array(
            'title'      => __('Slider','digitalnomad'),
            'priority'   => 30,
        )
      );

    
        /********* header Disable **********/
    
        $wp_customize->add_setting( 'digitalnomad_slider_disable', array(
                'sanitize_callback' => 'digitalnomad_sanitize_checkbox',
                'default'           => '',
                'capability'        => 'manage_options',
                'transport'         => 'refresh',
            )
        );
    
        
        $wp_customize->add_control( new Customizer_Toggle_Control( $wp_customize, 'digitalnomad_slider_disable', array(
                'settings' => 'digitalnomad_slider_disable',
                'label'    => __( 'Disable Slider Section?', 'digitalnomad' ),
                'section'  => 'digitalnomad_slider_options',
                'type'     => 'ios',
                'priority' => 1,

        ) ) );
		
		global $options_categories;
            $wp_customize->add_setting('digitalnomad_slide_categorie', array(
                'default' => '',
                'type' => 'option',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'atoz_sanitize_slidecat'
            ));
		
		
    
        $wp_customize->add_setting('digitalnomad_slider_number',
                array(
                    'sanitize_callback' => 'digitalnomad_sanitize_integer'
                )
            );
            
        $wp_customize->add_control('digitalnomad_slider_number',
            array(
                'type' => 'integer',
                'default' => 3,
                'label' => __('Number Of Slides To Show - i.e 10 (default is 3)','digitalnomad'),
                'section' => 'digitalnomad_slider_options',

                )
            ); 


    
    
    
    
/*********Blog Section**********/
    
        $wp_customize->add_section('digitalnomad_blog_section', array(
            'title'                     => __('Blog Section', 'digitalnomad'),
            'description'               => 'Easily edit your header section',
            'priority'                  => 50,   
            'panel'                     => 'digitalnomad_pannel',    

        ));
    
    
        $wp_customize->add_setting( 'digitalnomad_blog_section_count', array(
            'default'                   => esc_html__('3','digitalnomad'),
            'sanitize_callback'         => 'numero_sanitize_integer'
            )
        );
         $wp_customize->add_control( 'digitalnomad_blog_section_count', array(
            'type'                      => 'integer',
            'label'                     => __('Number Of Blog To Show - i.e 10 (default is 3)','digitalnomad'),
            'section'                   => 'digitalnomad_blog_section',

            )
        );
    
    
    
    
}
add_action( 'customize_register', 'digitalnomad_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function digitalnomad_customize_partial_blogname() {
	bloginfo( 'name' );
}

function digitalnomad_customize_partial_header_text() {
    echo get_theme_mod('digitalnomad_header_text');
}

function digitalnomad_customize_partial_header_tag_line() {
    echo get_theme_mod('digitalnomad_header_tag_line');
}



/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function digitalnomad_customize_preview_js() {
	wp_enqueue_script( 'digitalnomad-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'digitalnomad_customize_preview_js' );


