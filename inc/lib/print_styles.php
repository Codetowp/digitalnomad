<?php
if (!function_exists('text_color_styles'))  {
	function text_color_styles(){
		echo '<style type="text/css" >';
		$color_value = get_theme_mod('header_textcolor', '');
		$append_color = sprintf( 'color: %s;',  $color_value );
		if ( $color_value ) {
			echo "\n" . '#top-header a , .openmenu-nav{' . esc_html($append_color) . '}';
		}
		echo "\n". "</style>". "\n";
	}
}
add_action( 'wp_head', 'text_color_styles' );



if (!function_exists('digitalnomad_paragraph_font'))  {
	function digitalnomad_paragraph_font(){
		echo '<style type="text/css" >';
		$fontfamily_value = get_theme_mod('digitalnomad_paragraph_font','PT Serif');
		$append_family = sprintf( 'font-family: %s !important;',  $fontfamily_value );
			// Output the styles.
		if ( $fontfamily_value ) {
			echo "\n" . '#home-banner p{' .esc_html($append_family) . '}' ."\n". '#about-us-block p{'.esc_html($append_family).'}' ."\n". '#our-work-block p{'.esc_html($append_family).'}' ."\n". '#our-services p{' .esc_html($append_family).'}' ."\n". '#from-blog  .entry-header p{'.esc_html($append_family).'}' ."\n". '#free-trial-block p{'.esc_html($append_family).'}' ."\n". 'p{'.esc_html($append_family).'}'."\n". 'aside ul li a{'.esc_html($append_family).'}' ."\n". ' #home-banner span{'.esc_html($append_family).'}'."\n". '.btn-white{'.esc_html($append_family).'}'."\n". '.widget_recent_comments ul li span{'.esc_html($append_family).'}'."\n". '#top-menu.navbar-default .navbar-brand{'.esc_html($append_family).'}';
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'digitalnomad_paragraph_font' );


if (!function_exists('digitalnomad_paragraph_font_size'))  {
	function digitalnomad_paragraph_font_size(){
		echo '<style type="text/css" >';
		$fontparagfamily_value = get_theme_mod('digitalnomad_paragraph_font_size', '');
		$append_para_family_font = sprintf( 'font-size: %spx !important;',  $fontparagfamily_value );
			// Output the styles.
		if ( $fontparagfamily_value ) {
			echo "\n" . 'p{' .esc_html ($append_para_family_font) . '}';
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'digitalnomad_paragraph_font_size' );

if (!function_exists('digitalnomad_paragraph_font_color'))  {
	function digitalnomad_paragraph_font_color(){
		echo '<style type="text/css" >';
		$color_value = get_theme_mod('digitalnomad_paragraph_font_color', '');
		$append_color = sprintf( 'color: %s !important;',  $color_value );
			// Output the styles.
		if ( $color_value ) {
			echo "\n" . 'p{' . esc_html($append_color) . '}' ;
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'digitalnomad_paragraph_font_color' );


if (!function_exists('digitalnomad_heading_font_family'))  {
	function digitalnomad_heading_font_family(){
		echo '<style type="text/css">';
		$fontfamily_value = get_theme_mod('digitalnomad_heading_font_family','Montserrat');
		$append_family = sprintf( 'font-family: %s !important;',  $fontfamily_value );
			// Output the styles.
		if ( $fontfamily_value ) {
			echo "\n" . 'h1, h2, h3, h4, h5, h6{'.esc_html( $append_family ).'}' ;
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'digitalnomad_heading_font_family' );


if (!function_exists('digitalnomad_headings_font_color'))  {
	function digitalnomad_headings_font_color(){
		echo '<style type="text/css" id="rijo-css">';
		$color_value = get_theme_mod('digitalnomad_headings_font_color', '');
		$append_color = sprintf( 'color: %s;',  $color_value );
			// Output the styles.
		if ( $color_value ) {
			echo "\n" . 'h1{' .esc_html ($append_color) . '}'."\n".'h2{'.esc_html($append_color).'}'."\n".'h3{'.esc_html($append_color).'}'.
                "\n".'h4{'.esc_html($append_color).'}'."\n".'h5{'.esc_html($append_color).'}'."\n".'#about-us-block h2{'.esc_html($append_color).'}'."\n".'#our-work-block h2{'.esc_html($append_color).'}' ;
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'digitalnomad_headings_font_color' );


if (!function_exists('digitalnomad_accent_color'))  {
	function digitalnomad_accent_color(){
		echo '<style type="text/css" id="rijo-css">';
		$color_value = get_theme_mod('numero_accent_color', '');
        $opacity_value= get_theme_mod('numero_accent_opacity');
		$append_color = sprintf( 'background-color: %s ;',  $color_value );
        $icon_color = sprintf( 'color: %s ;',  $color_value );
        $choose_color = sprintf('background : %s ;',  $color_value );
        $opacity =sprintf('opacity : %s ;',  $opacity_value );
        $opacity_color = sprintf( 'background : %s; ',  $color_value );
        $append_border=sprintf( '    border: 1px %s solid;',  $color_value );

        

			// Output the styles.
		if ( $color_value ) {
			echo "\n" .'#home-banner a.btn-info{'.esc_html($append_color).'}'."\n" .'#about-us-block .col-about-us i{'.esc_html($icon_color).'}'."\n" .'#why-choose-us .section-title:after{'.esc_html($choose_color).'}'."\n" .'#why-choose-us .section-title{'.esc_html($choose_color).'}'."\n" .'#our-work-block .works figcaption{'.esc_html($opacity_color).'}'."\n".'#our-work-block .works figure:hover figcaption, #our-work-block .works figure:focus figcaption{'.esc_html($opacity).'}'."\n" .'.services-block i{'.esc_html($choose_color).'}'."\n" .'#clients-block{'.esc_html($choose_color).'}'."\n" .'#free-trial-block a{'.esc_html($choose_color).'}'."\n" .'#free-trial-block a{'.esc_html($append_border).'}';
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'digitalnomad_accent_color' );


if (!function_exists('digitalnomad_secondary_color'))  {
	function digitalnomad_secondary_color(){
		echo '<style type="text/css" id="rijo-css">';
		$color_value = get_theme_mod('digitalnomad_secondary_color', '');
        $append_bckcolor = sprintf( 'background-color: %s !important;',  $color_value );
			// Output the styles.
		if ( $color_value ) {
			echo "\n" .'.on{'.esc_html($append_bckcolor).'}'."\n".'.theme-post-caption .view-payment{'.esc_html($append_bckcolor).'}'."\n".'.widget_categories ul{'.esc_html($append_bckcolor).'}';
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'digitalnomad_secondary_color' );

