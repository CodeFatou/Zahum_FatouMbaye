<?php
/**
 * Functions used to implement options
 *
 * @package Customizer Library Overlay
 */

/**
 * Enqueue Google Fonts
 */
function overlay_customizer_fonts() {

	// Font options
	$fonts = array(
		get_theme_mod( 'overlay-body-font', customizer_library_get_default( 'overlay-body-font' ) ),
		get_theme_mod( 'overlay-title-font', customizer_library_get_default( 'overlay-title-font' ) ),
		get_theme_mod( 'overlay-main-nav-font', customizer_library_get_default( 'overlay-main-nav-font' ) ),
		get_theme_mod( 'overlay-tagline-font', customizer_library_get_default( 'overlay-tagline-font' ) ),
		get_theme_mod( 'overlay-heading-font', customizer_library_get_default( 'overlay-heading-font' ) )
	);

	$font_uri = customizer_library_get_google_font_uri( $fonts );

	// Load Google Fonts
	wp_enqueue_style( 'overlay_customizer_fonts', $font_uri, array(), null, 'screen' );

}
add_action( 'wp_enqueue_scripts', 'overlay_customizer_fonts' );
