<?php
/**
 * Enqueue Google Fonts for Blocks Editor
 */
function overlay_customizer_editor_fonts() {

	// Font options
	$fonts = array(
		get_theme_mod( 'overlay-body-font', customizer_library_get_default( 'overlay-body-font' ) ),
		get_theme_mod( 'overlay-title-font', customizer_library_get_default( 'overlay-title-font' ) )
	);

	$font_uri = customizer_library_get_google_font_uri( $fonts );

	// Load Google Fonts
	if ( !get_theme_mod( 'overlay-disable-google-font', customizer_library_get_default( 'overlay-disable-google-font' ) ) ) {
		wp_enqueue_style( 'overlay_customizer_editor_fonts', $font_uri, array(), null, 'screen' );
	}

}
add_action( 'enqueue_block_editor_assets', 'overlay_customizer_editor_fonts' );

if ( ! function_exists( 'overlay_customizer_editor_styles' ) ) :
/**
 * Generates the fonts selected in the Customizer and enqueues it to the Blocks Editor
 */
function overlay_customizer_editor_styles() {
	$overlay_body_font = get_theme_mod( 'overlay-body-font', customizer_library_get_default( 'overlay-body-font' ) );
	$overlay_heading_font = get_theme_mod( 'overlay-heading-font', customizer_library_get_default( 'overlay-heading-font' ) );
	if ( get_theme_mod( 'overlay-disable-google-font' ) == 1 ) {
		$overlay_body_font = get_theme_mod( 'overlay-body-font-websafe', customizer_library_get_default( 'overlay-body-font-websafe' ) );
		$overlay_heading_font = get_theme_mod( 'overlay-heading-font-websafe', customizer_library_get_default( 'overlay-heading-font-websafe' ) );
	}

    $overlay_editor_width = get_theme_mod( 'overlay-site-container-width', customizer_library_get_default( 'overlay-site-container-width' ) );
    $overlay_editor_bgcolor = get_background_color();
    
    $overlay_editor_css = '.editor-styles-wrapper { background-color: #' . esc_attr( $overlay_editor_bgcolor ) . '; }';
	$overlay_editor_css .= '.editor-styles-wrapper .wp-block { max-width: ' . esc_attr( $overlay_editor_width ) . 'px; }';

	$overlay_body_font_size = get_theme_mod( 'overlay-body-fonts-size', customizer_library_get_default( 'overlay-body-fonts-size' ) );
	switch ( $overlay_body_font_size ) {
		case '1':
			$overlay_body_font_size = '12';
			break;
		case '2':
			$overlay_body_font_size = '14';
			break;
		case '3':
			$overlay_body_font_size = '16';
			break;
		case '4':
			$overlay_body_font_size = '18';
			break;
		case '5':
			$overlay_body_font_size = '20';
			break;
		case '6':
			$overlay_body_font_size = '24';
			break;
	}
	$overlay_newbody_size = 'overlay-content-font-size';
	$overlay_newbody_mod = get_theme_mod( $overlay_newbody_size, customizer_library_get_default( $overlay_newbody_size ) );
	if ( $overlay_newbody_mod !== customizer_library_get_default( $overlay_newbody_size ) ) {
		$overlay_body_font_size = $overlay_newbody_mod;
	}
	$overlay_body_line_height = get_theme_mod( 'overlay-body-font-lheight', customizer_library_get_default( 'overlay-body-font-lheight' ) );
	$overlay_newbody_lheight = 'overlay-content-lheight';
	$overlay_newbody_lmod = get_theme_mod( $overlay_newbody_lheight, customizer_library_get_default( $overlay_newbody_lheight ) );
	if ( $overlay_newbody_lmod !== customizer_library_get_default( $overlay_newbody_lheight ) ) {
		$overlay_body_line_height = $overlay_newbody_lmod;
	}
	$overlay_editor_css .= '.editor-styles-wrapper .wp-block {
					font-family: "' . esc_attr( $overlay_body_font ) . '", sans-serif;
					font-size: ' . esc_attr( $overlay_body_font_size ) . 'px;
					color: ' . sanitize_hex_color( get_theme_mod( 'overlay-content-font-color', customizer_library_get_default( 'overlay-content-font-color' ) ) ) . ';
					line-height: ' . esc_attr( $overlay_body_line_height ) . ';
				}';

	$overlay_editor_css .= '.editor-post-title .editor-post-title__block .editor-post-title__input,
				.editor-styles-wrapper h1.wp-block,
				.editor-styles-wrapper h2.wp-block,
				.editor-styles-wrapper h3.wp-block,
				.editor-styles-wrapper h4.wp-block,
				.editor-styles-wrapper h5.wp-block,
				.editor-styles-wrapper h6.wp-block {
					font-family: "' . esc_attr( $overlay_heading_font ) . '", sans-serif;
					color: ' . sanitize_hex_color( get_theme_mod( 'overlay-content-head-font-color', customizer_library_get_default( 'overlay-content-head-font-color' ) ) ) . ';
                }
				.wp-block-quote:not(.is-large),
				.wp-block-quote:not(.is-style-large) {
					border-left-color: ' . sanitize_hex_color( get_theme_mod( 'vogue-primary-color', customizer_library_get_default( 'vogue-primary-color' ) ) ) . ' !important;
				}';
	
	$overlay_heading_font_size = get_theme_mod( 'overlay-heading-fonts-size', customizer_library_get_default( 'overlay-heading-fonts-size' ) );

	switch ( $overlay_heading_font_size ) {
		case '1':
			$overlay_editor_css .= '.editor-styles-wrapper h1.wp-block { font-size: 2em; margin: 0 0 0.67em; }
									.editor-styles-wrapper h2.wp-block { font-size: 1.5em; }
									.editor-styles-wrapper h3.wp-block { font-size: 1.17em; }
									.editor-styles-wrapper h4.wp-block { font-size: 1em; }
									.editor-styles-wrapper h5.wp-block { font-size: 0.83em; }
									.editor-styles-wrapper h6.wp-block { font-size: 0.67em; }';
			break;
		case '2':
			$overlay_editor_css .= '.editor-styles-wrapper h1.wp-block { font-size: 2.4em; }
									.editor-styles-wrapper h2.wp-block { font-size: 2.1em; }
									.editor-styles-wrapper h3.wp-block { font-size: 1.9em; }
									.editor-styles-wrapper h4.wp-block { font-size: 1.4em; }
									.editor-styles-wrapper h5.wp-block { font-size: 1.1em; }
									.editor-styles-wrapper h6.wp-block { font-size: 0.9em; }';
			break;
		case '3':
			$overlay_editor_css .= '.editor-styles-wrapper h1.wp-block { font-size: 3em; }
									.editor-styles-wrapper h2.wp-block { font-size: 2.7em; }
									.editor-styles-wrapper h3.wp-block { font-size: 2.2em; }
									.editor-styles-wrapper h4.wp-block { font-size: 1.8em; }
									.editor-styles-wrapper h5.wp-block { font-size: 1.4em; }
									.editor-styles-wrapper h6.wp-block { font-size: 1em; }';
			break;
		case '4':
			$overlay_editor_css .= '.editor-styles-wrapper h1.wp-block { font-size: 3.8em; }
									.editor-styles-wrapper h2.wp-block { font-size: 3.3em; }
									.editor-styles-wrapper h3.wp-block { font-size: 2.7em; }
									.editor-styles-wrapper h4.wp-block { font-size: 2.1em; }
									.editor-styles-wrapper h5.wp-block { font-size: 1.8em; }
									.editor-styles-wrapper h6.wp-block { font-size: 1.4em; }';
			break;
	}

	if ( !empty( $overlay_editor_css ) && function_exists( 'register_block_type' ) && is_admin() ) {
		wp_register_style( 'overlay-customizer-custom-css', true );
		wp_enqueue_style( 'overlay-customizer-custom-css' );
        wp_add_inline_style( 'overlay-customizer-custom-css', $overlay_editor_css );
	}
}
endif;
add_action( 'enqueue_block_editor_assets', 'overlay_customizer_editor_styles', 11 );
