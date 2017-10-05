<?php
if (!function_exists('text_color_styles'))  {
	function text_color_styles(){
		echo '<style type="text/css" >';
		$color_value = get_theme_mod('header_textcolor', '');
		$append_color = sprintf( 'color: %s;',  $color_value );
		if ( $color_value ) {
			echo "\n" . '#top-header a , .openmenu-nav{' . $append_color . '}';
		}
		echo "\n". "</style>". "\n";
	}
}
add_action( 'wp_head', 'text_color_styles' );



if (!function_exists('numero_paragraph_font'))  {
	function numero_paragraph_font(){
		echo '<style type="text/css" >';
		$fontfamily_value = get_theme_mod('numero_paragraph_font', '');
		$append_family = sprintf( 'font-family: %s;',  $fontfamily_value );
			// Output the styles.
		if ( $fontfamily_value ) {
			echo "\n" . '#home-banner p{' . $append_family . '}' ."\n". '#about-us-block p{'.$append_family.'}' ."\n". '#our-work-block p{'.$append_family.'}' ."\n". '#our-services p{' .$append_family.'}' ."\n". '#from-blog  .entry-header p{'.$append_family.'}' ."\n". '#free-trial-block p{'.$append_family.'}' ;
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'numero_paragraph_font' );


if (!function_exists('numero_paragraph_font_size'))  {
	function numero_paragraph_font_size(){
		echo '<style type="text/css" >';
		$fontparagfamily_value = get_theme_mod('numero_paragraph_font_size', '');
		$append_para_family_font = sprintf( 'font-size: %spx !important;',  $fontparagfamily_value );
			// Output the styles.
		if ( $fontparagfamily_value ) {
			echo "\n" . 'p{' . $append_para_family_font . '}';
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'numero_paragraph_font_size' );

if (!function_exists('numero_paragraph_font_color'))  {
	function numero_paragraph_font_color(){
		echo '<style type="text/css" >';
		$color_value = get_theme_mod('numero_paragraph_font_color', '');
		$append_color = sprintf( 'color: %s !important;',  $color_value );
			// Output the styles.
		if ( $color_value ) {
			echo "\n" . 'p{' . $append_color . '}' ;
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'numero_paragraph_font_color' );


if (!function_exists('numero_heading_font_family'))  {
	function numero_heading_font_family(){
		echo '<style type="text/css">';
		$fontfamily_value = get_theme_mod('numero_heading_font_family', '');
		$append_family = sprintf( 'font-family: %s;',  $fontfamily_value );
			// Output the styles.
		if ( $fontfamily_value ) {
			echo "\n" . 'h1,h2,h3,h4,h5,h6{'.$append_family.'}' ;
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'numero_heading_font_family' );


if (!function_exists('numero_headings_font_color'))  {
	function numero_headings_font_color(){
		echo '<style type="text/css" id="rijo-css">';
		$color_value = get_theme_mod('numero_headings_font_color', '');
		$append_color = sprintf( 'color: %s;',  $color_value );
			// Output the styles.
		if ( $color_value ) {
			echo "\n" . 'h1{' . $append_color . '}'."\n".'h2{'.$append_color.'}'."\n".'h3{'.$append_color.'}'.
                "\n".'h4{'.$append_color.'}'."\n".'h5{'.$append_color.'}'."\n".'#about-us-block h2{'.$append_color.'}'."\n".'#our-work-block h2{'.$append_color.'}' ;
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'numero_headings_font_color' );


if (!function_exists('numero_accent_color'))  {
	function numero_accent_color(){
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
			echo "\n" .'#home-banner a.btn-info{'.$append_color.'}'."\n" .'#about-us-block .col-about-us i{'.$icon_color.'}'."\n" .'#why-choose-us .section-title:after{'.$choose_color.'}'."\n" .'#why-choose-us .section-title{'.$choose_color.'}'."\n" .'#our-work-block .works figcaption{'.$opacity_color.'}'."\n".'#our-work-block .works figure:hover figcaption, #our-work-block .works figure:focus figcaption{'.$opacity.'}'."\n" .'.services-block i{'.$choose_color.'}'."\n" .'#clients-block{'.$choose_color.'}'."\n" .'#free-trial-block a{'.$choose_color.'}'."\n" .'#free-trial-block a{'.$append_border.'}';
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'numero_accent_color' );


if (!function_exists('dblogger_secondary_color'))  {
	function dblogger_secondary_color(){
		echo '<style type="text/css" id="rijo-css">';
		$color_value = get_theme_mod('dblogger_secondary_color', '');
        $append_bckcolor = sprintf( 'background-color: %s !important;',  $color_value );
			// Output the styles.
		if ( $color_value ) {
			echo "\n" .'.on{'.$append_bckcolor.'}'."\n".'.theme-post-caption .view-payment{'.$append_bckcolor.'}'."\n".'.widget_categories ul{'.$append_bckcolor.'}';
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'dblogger_secondary_color' );

