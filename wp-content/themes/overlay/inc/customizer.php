<?php
/**
 * Overlay Theme Customizer
 */
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function overlay_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	// $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'overlay_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'overlay_customize_partial_blogdescription',
		) );
		// Header Partials
		$wp_customize->selective_refresh->add_partial( 'overlay-edit-text-phone', array(
			'selector'        => '.header-phone',
			'render_callback' => 'overlay_customize_partial_header_phone',
		) );
		$wp_customize->selective_refresh->add_partial( 'overlay-edit-text-address', array(
			'selector'        => '.header-address',
			'render_callback' => 'overlay_customize_partial_header_address',
		) );
		// Footer Partials
		$wp_customize->selective_refresh->add_partial( 'overlay-edit-text-footer-address', array(
			'selector'        => '.footer-address',
			'render_callback' => 'overlay_customize_partial_footer_address',
		) );
		$wp_customize->selective_refresh->add_partial( 'overlay-edit-text-footer-extratxt', array(
			'selector'        => '.extra-txt',
			'render_callback' => 'overlay_customize_partial_extra_txt',
		) );
	}
}
add_action( 'customize_register', 'overlay_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function overlay_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function overlay_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Render Header partials.
 */
function overlay_customize_partial_header_phone() {
	bloginfo( 'overlay-edit-text-phone' );
}
function overlay_customize_partial_header_address() {
	bloginfo( 'overlay-edit-text-address' );
}
/**
 * Render Footer partials.
 */
function overlay_customize_partial_footer_address() {
	bloginfo( 'overlay-edit-text-footer-address' );
}
function overlay_customize_partial_extra_txt() {
	bloginfo( 'overlay-edit-text-footer-extratxt' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function overlay_customize_preview_js() {
	wp_enqueue_script( 'overlay-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), OVERLAY_THEME_VERSION, true );
}
add_action( 'customize_preview_init', 'overlay_customize_preview_js' );

/**
 * Enqueue Overlay custom customizer styling.
 */
function overlay_load_customizer_script() {
	wp_enqueue_script( 'overlay-customizer-js', get_template_directory_uri() . "/customizer/customizer-library/js/customizer-custom.js", array('jquery'), OVERLAY_THEME_VERSION, true );
    wp_enqueue_style( 'overlay-customizer-css', get_template_directory_uri() . "/customizer/customizer-library/css/customizer.css", array(), OVERLAY_THEME_VERSION );
}
add_action( 'customize_controls_enqueue_scripts', 'overlay_load_customizer_script' );

/**
 * Function to create Customizer internal linking.
 */
function overlay_customizer_internal_links() { ?>
	<script type="text/javascript">
	 (function($) {
		 $(document).ready(function() {
			 var api = wp.customize;
			 api.bind('ready', function() {
				 $(['control', 'section', 'panel']).each(function(i, type) {
					 $('a[rel="tc-'+type+'"]').click(function(e) {
						 e.preventDefault();
						 var id = $(this).attr('href').replace('#', '');
						 if(api[type].has(id)) {
							 api[type].instance(id).focus();
						 }
					 });
				 });
			 });
		 });
	 })(jQuery);
	</script><?php
 }
 add_action( 'customize_controls_print_scripts', 'overlay_customizer_internal_links' );
 
 /**
 * Enqueue Google Fonts for Blocks Editor
 */
function overlay_load_editor_fonts() {
	// Font options
	$overlay_editor_fonts = array(
		get_theme_mod( 'overlay-body-font', customizer_library_get_default( 'overlay-body-font' ) ),
		get_theme_mod( 'overlay-heading-font', customizer_library_get_default( 'overlay-heading-font' ) )
	);
	$overlay_font_uri = customizer_library_get_google_font_uri( $overlay_editor_fonts );

	// Load Google Fonts
	if ( !get_theme_mod( 'overlay-disable-google-font', customizer_library_get_default( 'overlay-disable-google-font' ) ) ) {
		wp_enqueue_style( 'overlay_load_editor_fonts', $overlay_font_uri, array(), null, 'screen' );
	}
}
add_action( 'enqueue_block_editor_assets', 'overlay_load_editor_fonts' );

if ( ! function_exists( 'overlay_gutenberg_editor_styles' ) ) :
/**
 * Generates the fonts selected in the Customizer and enqueues it to the Blocks Editor
 */
function overlay_gutenberg_editor_styles() {
	$websafe = ( get_theme_mod( 'overlay-disable-google-font', customizer_library_get_default( 'overlay-disable-google-font' ) ) == 1 ) ? '-websafe' : '';

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
	$overlay_heading_font_size = esc_attr( get_theme_mod( 'overlay-heading-fonts-size', customizer_library_get_default( 'overlay-heading-fonts-size' ) ) );
	switch ( $overlay_heading_font_size ) {
		case '1':
			$overlay_heading_font_size = '.editor-styles-wrapper .wp-block-heading h1 {
									font-size: 2em;
								}.editor-styles-wrapper .wp-block-heading h2 {
									font-size: 1.5em;
								}.editor-styles-wrapper .wp-block-heading h3 {
									font-size: 1.17em;
								}.editor-styles-wrapper .wp-block-heading h4 {
									font-size: 1em;
								}.editor-styles-wrapper .wp-block-heading h5 {
									font-size: 0.83em;
								}.editor-styles-wrapper .wp-block-heading h6 {
									font-size: 0.67em;
								}';
			break;
		case '2':
			$overlay_heading_font_size = '.editor-styles-wrapper .wp-block-heading h1 {
									font-size: 2.4em;
								}.editor-styles-wrapper .wp-block-heading h2 {
									font-size: 2.1em;
								}.editor-styles-wrapper .wp-block-heading h3 {
									font-size: 1.9em;
								}.editor-styles-wrapper .wp-block-heading h4 {
									font-size: 1.4em;
								}.editor-styles-wrapper .wp-block-heading h5 {
									font-size: 1.1em;
								}.editor-styles-wrapper .wp-block-heading h6 {
									font-size: 0.9em;
								}';
			break;
		case '3':
			$overlay_heading_font_size = '.editor-styles-wrapper .wp-block-heading h1 {
									font-size: 3em;
								}.editor-styles-wrapper .wp-block-heading h2 {
									font-size: 2.7em;
								}.editor-styles-wrapper .wp-block-heading h3 {
									font-size: 2.2em;
								}.editor-styles-wrapper .wp-block-heading h4 {
									font-size: 1.8em;
								}.editor-styles-wrapper .wp-block-heading h5 {
									font-size: 1.4em;
								}.editor-styles-wrapper .wp-block-heading h6 {
									font-size: 1em;
								}';
			break;
		case '4':
			$overlay_heading_font_size = '.editor-styles-wrapper .wp-block-heading h1 {
									font-size: 3.8em;
								}.editor-styles-wrapper .wp-block-heading h2 {
									font-size: 3.3em;
								}.editor-styles-wrapper .wp-block-heading h3 {
									font-size: 2.7em;
								}.editor-styles-wrapper .wp-block-heading h4 {
									font-size: 2.1em;
								}.editor-styles-wrapper .wp-block-heading h5 {
									font-size: 1.8em;
								}.editor-styles-wrapper .wp-block-heading h6 {
									font-size: 1.4em;
								}';
			break;
	}

	$editor_css = '.editor-styles-wrapper .wp-block {
					font-family: "' . esc_attr( get_theme_mod( 'overlay-body-font'.$websafe, customizer_library_get_default( 'overlay-body-font'.$websafe ) ) ) . '", sans-serif;
					color: ' . sanitize_hex_color( get_theme_mod( 'overlay-content-font-color', customizer_library_get_default( 'overlay-content-font-color' ) ) ) . ';
				}
				.editor-post-title__block .editor-post-title__input,
				.editor-styles-wrapper .wp-block-heading h1,
				.editor-styles-wrapper .wp-block-heading h2,
				.editor-styles-wrapper .wp-block-heading h3,
				.editor-styles-wrapper .wp-block-heading h4,
				.editor-styles-wrapper .wp-block-heading h5,
				.editor-styles-wrapper .wp-block-heading h6 {
					font-family: "' . esc_attr( get_theme_mod( 'overlay-heading-font'.$websafe, customizer_library_get_default( 'overlay-heading-font'.$websafe ) ) ) . '", sans-serif;
					color: ' . sanitize_hex_color( get_theme_mod( 'overlay-content-head-font-color', customizer_library_get_default( 'overlay-content-head-font-color' ) ) ) . ';
				}
				.editor-styles-wrapper .wp-block,
				.editor-styles-wrapper .wp-block p {
					font-size: ' . esc_attr( $overlay_body_font_size ) . 'px;
					line-height: ' . esc_attr( get_theme_mod( 'overlay-body-font-lheight', customizer_library_get_default( 'overlay-body-font-lheight' ) ) ) . ';
				}
				.editor-styles-wrapper .wp-block-quote:not(.is-large),
				.editor-styles-wrapper .wp-block-quote:not(.is-style-large) {
					border-left-color: ' . sanitize_hex_color( get_theme_mod( 'overlay-primary-color', customizer_library_get_default( 'overlay-primary-color' ) ) ) . ' !important;
				}';
	$editor_css .= $overlay_heading_font_size;
	
	// Override Content Font Size - if set
	$overlay_font_overide = 'overlay-content-font-size';
	$overlay_font_overide_mod = get_theme_mod( $overlay_font_overide, customizer_library_get_default( $overlay_font_overide ) );
	if ( $overlay_font_overide_mod !== customizer_library_get_default( $overlay_font_overide ) ) {
		$overlay_fontsize_overide = esc_attr( $overlay_font_overide_mod );
		$editor_css .= '.editor-styles-wrapper .wp-block,
						.editor-styles-wrapper .wp-block p {
							font-size: ' . esc_attr( $overlay_fontsize_overide ) . 'px;
						}';
	}
	// Override Content Line Height - if set
	$overlay_fontlh_overide = 'overlay-content-lheight';
	$overlay_fontlh_overide_mod = get_theme_mod( $overlay_fontlh_overide, customizer_library_get_default( $overlay_fontlh_overide ) );
	if ( $overlay_fontlh_overide_mod !== customizer_library_get_default( $overlay_fontlh_overide ) ) {
		$overlay_fontlh_overide = esc_attr( $overlay_fontlh_overide_mod );
		$editor_css .= '.editor-styles-wrapper .wp-block,
						.editor-styles-wrapper .wp-block p {
							line-height: ' . esc_attr( $overlay_fontlh_overide ) . ';
						}';
	}

	if ( ! empty( $editor_css ) ) {
		wp_register_style( 'overlay-custom-editor-css', false );
		wp_enqueue_style( 'overlay-custom-editor-css' );
 		wp_add_inline_style( 'overlay-custom-editor-css', $editor_css );
	}
}
endif;
add_action( 'enqueue_block_editor_assets', 'overlay_gutenberg_editor_styles', 11 );
