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
    $wp_customize->get_setting( 'background_image' )->transport  = 'postMessage';

    $wp_customize->get_section('title_tagline')->title = esc_html( 'Branding' ); 


    require get_template_directory() . '/inc/lib/fo-to-range.php';
    require get_template_directory() . '/inc/lib/theme-info.php';


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

  /********* header intro **********/

  $wp_customize->add_section('digitalnomad_header', array(
    'title'                     => __('Header Intro', 'digitalnomad'),
    'description'               => 'Easily edit your header section',
    'priority'                  => 60,   

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
    'type'     => 'toggle',
    'priority' => 1,

) ) );



  $wp_customize->add_setting( 'header_background_image', array(
    'default'                   => get_template_directory_uri().'/assets/img/bg-1.jpg',
    'type'                      => 'theme_mod',
    'capability'                => 'edit_theme_options',
    'sanitize_callback'         => 'esc_url_raw',
) );

  $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize,'header_background_image', array(
        'label'                     => esc_html( 'Background Image' ),
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



  // Slider SECTION

  $wp_customize->add_section( 'digitalnomad_slider_options' , array(
    'title'      => __('Slider Section','digitalnomad'),
    'priority'   => 61,
)
);

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
    'type'     => 'toggle',
    'priority' => 1,

) ) );

  global $options_categories;
  $wp_customize->add_setting('digitalnomad_slide_categories', array(
    'default' => '',
    'type' => 'option',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'digitalnomad_sanitize_slidecat'
));
  $wp_customize->add_control('digitalnomad_slide_categories', array(
    'label' => __('Slider Category', 'digitalnomad'),
    'section' => 'digitalnomad_slider_options',
    'type'    => 'select',
    'description' => __('Select a category for the featured post slider', 'digitalnomad'),
    'choices'    => $options_categories
));




  $wp_customize->add_setting('digitalnomad_slider_number',
    array(
        'default' =>'3',
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






  // Post SETTINGS

  $wp_customize->add_section('digitalnomad_blog_section', array(
    'title'                     => __('Post Settings', 'digitalnomad'),
    'description'               => 'Easily edit your header section',
    'priority'                  => 62,   

));


  $wp_customize->add_setting( 'digitalnomad_blog_section_count', array(
    'default'                   => esc_html__('3','digitalnomad'),
    'sanitize_callback'         => 'digitalnomad_sanitize_integer'
)
);
  $wp_customize->add_control( 'digitalnomad_blog_section_count', array(
    'type'                      => 'integer',
    'label'                     => __('Number Of Blog To Show - i.e 10 (default is 3)','digitalnomad'),
    'section'                   => 'digitalnomad_blog_section',

)
);

  // Page SETTINGS

  $wp_customize->add_section('digitalnomad_page_setting', array(
    'title'                     => __('Page Setting', 'digitalnomad'),
    'description'               => 'Easily edit your header section',
    'priority'                  => 63,   

));


  $wp_customize->add_setting('digitalnomad_related_post_number',
    array(
      'default' => '3',
        'sanitize_callback' => 'digitalnomad_sanitize_integer'
    )
);

  $wp_customize->add_control('digitalnomad_related_post_number',
    array(
        'type' => 'integer',
        'label' => __('Number Of related post To Show - i.e 10 (default is 3)','digitalnomad'),
        'section' => 'digitalnomad_page_setting',

    )
); 


   // social LINKS

  $wp_customize->add_section( 'social', array(
     'title'    					=> __( 'Social Links', 'digitalnomad'  ),
     'priority'                  => 110,

 ) );

  $social_sites = array( 'facebook', 'twitter','google-plus',  'behance', 'dribbble', 'tumblr');

  foreach( $social_sites as $social_site ) 
  {
     $wp_customize->add_setting( "social[$social_site]", array(
        'default'             =>'#',
        'type'              	=> 'theme_mod',
        'capability'        	=> 'edit_theme_options',
        'sanitize_callback' 	=> 'esc_url_raw'
    ) );

     $wp_customize->add_control( "social[$social_site]", array(
        'label'   				=> ucwords( $social_site ) . __( " Url:", 'digitalnomad' ),
        'section' 				=> 'social',
        'type'    				=> 'text',
    ) );
 }

 // Layouts
 $wp_customize->add_section( 'layouts', array(
  'title' => __( 'Layouts', 'digitalnomad' ),
  'priority' => 115,
) );

 $wp_customize->add_setting( 'digitalnomad_banner_setting', array(
    'default'        => 'half-height',
) );

 $wp_customize->add_control( 'digitalnomad_banner_setting', array(
    'label'   => 'Header Setting',
    'section' => 'layouts',
    'type'    => 'radio',
    'choices' => array(
       'half-height' => esc_html__( 'Half-Height', 'digitalnomad' ),
       'full-height' => esc_html__( 'Full-Height', 'digitalnomad' ),				
   ),
    'priority' => 3
) );


 $wp_customize->add_setting( 'digitalnomad_sidebar_setting', array(
    'default'        => 'right-sidebar',

) );

 $wp_customize->add_control( 'digitalnomad_sidebar_setting', array(
    'label'   => 'Sidebar Setting',
    'section' => 'layouts',
    'type'    => 'radio',
    'choices' => array(
       'col-md-8 pull-right'=>  esc_html__( 'Sidebar left', 'digitalnomad' ),
       'right-sidebar' =>  esc_html__( 'Sidebar right', 'digitalnomad' ),				
   ),
    'priority' => 3
) );

 $wp_customize->add_setting( 'digitalnomad_home_layouts', array(
    'default'        => 'default',

) );
 $wp_customize->add_control( 'digitalnomad_home_layouts', array(
    'label'   => 'Posts Setting',
    'section' => 'layouts',
    'type'    => 'radio',
    'choices' => array(
       'default' 	=>  esc_html__( 'Default layout', 'digitalnomad' ),
       'two' 		=>  esc_html__( 'Two Layout', 'digitalnomad' ),
       'classic' 	=>  esc_html__( 'Classic Layout', 'digitalnomad' ),				

   ),
    'priority' => 3
) );

  // Font SETTINGS

 $wp_customize->add_section('digitalnomad_font_settings', 
    array(
        'title'                     => __('Font Settings', 'digitalnomad'),
        'description'               => 'Change font family, size and color (Headings & Paragraph) for Homepage, Blog Posts & Pages.',
        'priority'                  => 125,
    ));


 $font_choices = customizer_library_get_font_choices();

 $wp_customize->add_setting( 'digitalnomad_paragraph_font', array(
    'default'        => 'PT Serif',
    'sanitize_callback'=>'customizer_library_sanitize_font_choice',
) );

 $wp_customize->add_control( 'digitalnomad_paragraph_font', array(
    'label'   => esc_attr__('Pick Paragraph Font Family', 'digitalnomad' ),
    'description'   => esc_attr__('Default : PT Serif', 'digitalnomad' ),
    'section' => 'digitalnomad_font_settings',
    'type'    => 'select',
    'choices' => $font_choices,
    'priority' => 1,
));

 $wp_customize->add_setting( 'digitalnomad_paragraph_font_color', 
    array(
        'default' => '#43484d', 
        'transport' => 'refresh', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ) 
);
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digitalnomad_paragraph_font_color', 
    array(
        'label'      => esc_attr__( 'Pick Paragraph Font Color', 'digitalnomad' ),
        'description'   => esc_attr__('Default : #43484d', 'digitalnomad' ),
        'section'    => 'digitalnomad_font_settings',
        'priority'   => 2,
    ) 
) );    

 $wp_customize->add_setting( 'digitalnomad_paragraph_font_size', array(
    'default'       => get_theme_mod( 'digitalnomad_paragraph_font_size', '16px' ),
    'capability'    => 'edit_theme_options',
    'transport'     => 'refresh',
) );

 $wp_customize->add_control( new Customizer_Range_Value_Control( $wp_customize, 'digitalnomad_paragraph_font_size', array(
    'type'     => 'range-value',
    'section'  => 'digitalnomad_font_settings',
    'settings' => 'digitalnomad_paragraph_font_size',        
    'label'    => __( 'Pick Paragraph Font Size' , 'digitalnomad' ),
    'description'   => esc_attr__('Default : 16px', 'digitalnomad' ),
    'input_attrs' => array(
        'min'    => 11,
        'max'    => 24,
        'step'   => 1,
        'suffix' => 'px',
    ),
    'priority'   => 3,
) ) );


 $wp_customize->add_setting( 'digitalnomad_heading_font_family', array(
    'default'        => 'Montserrat',
    'sanitize_callback' =>'customizer_library_sanitize_font_choice',
) );

 $wp_customize->add_control( 'digitalnomad_heading_font_family', array(
    'label'   => 'Pick Heading Font Family',
    'description'   =>  esc_attr__('Default : Montserrat', 'digitalnomad' ),
    'section' => 'digitalnomad_font_settings',
    'type'    => 'select',
    'choices' => $font_choices,
    'priority' => 4,
));


 $wp_customize->add_setting( 'digitalnomad_headings_font_color', 
    array(
        'default' => '#5a5a5a', 
        'transport' => 'refresh', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ) );
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digitalnomad_headings_font_color', 
    array(
        'label'      => esc_attr__( 'Pick Heading Font Color', 'digitalnomad' ),
        'section'    => 'digitalnomad_font_settings',
        'priority'   => 5,
    ) ) );



}
add_action( 'customize_register', 'digitalnomad_customize_register' );


/**
 * Adds sanitization callback function: Sidebar Layout
 * @package digitalnomad
 */
function digitalnomad_sanitize_layout( $input ) {
    global $site_layout;
    if ( array_key_exists( $input, $site_layout ) ) {
        return $input;
    } else {
        return '';
    }
}



/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function digitalnomad_customize_partial_blogname() {
	bloginfo( 'name' );
}

function digitalnomad_customize_partial_header_text() {
    echo esc_html(get_theme_mod('digitalnomad_header_text'));
}

function digitalnomad_customize_partial_header_tag_line() {
    echo esc_html(get_theme_mod('digitalnomad_header_tag_line'));
}


function digitalnomad_sanitize_slidecat( $input ) {
    global $options_categories;
    if ( array_key_exists( $input, $options_categories ) ) {
        return $input;
    } else {
        return '';
    }
}


if ( ! function_exists( 'digitalnomad_sanitize_checkbox' ) ) 
{
  function digitalnomad_sanitize_checkbox( $input ) 
  {
     if ( $input == 1 ) 
     {
        return 1;
    } 
    else 
    {
        return 0;
    }
}
}

function digitalnomad_sanitize_integer( $input ) {
  if( is_numeric( $input ) ) {
     return intval( $input );
 }
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
	wp_enqueue_script( 'digitalnomad-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'digitalnomad_customize_preview_js' );
