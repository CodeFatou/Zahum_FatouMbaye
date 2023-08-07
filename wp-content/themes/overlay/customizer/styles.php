<?php
/**
 * Implements styles set in the theme customizer
 *
 * @package Customizer Library Overlay
 */

if ( ! function_exists( 'overlay_customizer_library_build_styles' ) && class_exists( 'Customizer_Library_Styles' ) ) :
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function overlay_customizer_library_build_styles() {

	// Site Breakpoints
	$overlay_resp_menu_min = 'none';
	$overlay_resp_menu = get_theme_mod( 'overlay-menu-breakat', customizer_library_get_default( 'overlay-menu-breakat' ) );
	$overlay_resp_tablet = get_theme_mod( 'overlay-tablet-breakat', customizer_library_get_default( 'overlay-tablet-breakat' ) );
	$overlay_resp_mobile = get_theme_mod( 'overlay-mobile-breakat', customizer_library_get_default( 'overlay-mobile-breakat' ) );

	switch ( $overlay_resp_menu ) :
		case 'always':
			$overlay_resp_menu = 'all';
			$overlay_resp_menu_min = 'none';
			break;
		case 'mobile':
			$overlay_resp_menu = '(max-width: ' . esc_attr( $overlay_resp_mobile ) . 'px)';
			$overlay_resp_menu_min = '(min-width: ' . esc_attr( ( $overlay_resp_mobile + 1 ) ) . 'px)';
			break;
		case 'custom':
			$overlay_resp_menu = '(max-width: ' . esc_attr( get_theme_mod( 'overlay-menu-custom-breakat', customizer_library_get_default( 'overlay-menu-custom-breakat' ) ) ) . 'px)';
			$overlay_resp_menu_min = '(min-width: ' . esc_attr( get_theme_mod( 'overlay-menu-custom-breakat', customizer_library_get_default( 'overlay-menu-custom-breakat' ) ) + 1 ) . 'px)';
			break;
		default: // Defaults to Tablet
			$overlay_resp_menu = '(max-width: ' . esc_attr( $overlay_resp_tablet ) . 'px)';
			$overlay_resp_menu_min = '(min-width: ' . esc_attr( ( $overlay_resp_tablet + 1 ) ) . 'px)';
	endswitch;

	// ------------------------------------------------------------------------------------ Site Identity
	if ( get_theme_mod( 'overlay-uploaded-logo', customizer_library_get_default( 'overlay-uploaded-logo' ) ) ) :
		$setting = 'overlay-logo-max-width';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_logo_width = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'a.custom-logo-link'
				),
				'declarations' => array(
					'max-width' => $overlay_logo_width . 'px'
				)
			) );
		}
		$setting = 'overlay-title-desc-spacing';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_titledesc_spacing = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.site-title'
				),
				'declarations' => array(
					'margin-bottom' => $overlay_titledesc_spacing . 'px'
				)
			) );
		}
		$setting = 'overlay-logo-title-spacing';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_logotitle_spacing = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.site-logo-align .site-logo-title'
				),
				'declarations' => array(
					'padding-left' => $overlay_logotitle_spacing . 'px'
				)
			) );
		}
	endif;
	
	$setting = 'overlay-title-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_title_size = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-title'
			),
			'declarations' => array(
				'font-size' => $overlay_title_size . 'px'
			)
		) );
	}
	$setting = 'overlay-title-fweight';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_title_fweight = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-title'
			),
			'declarations' => array(
				'font-weight' => $overlay_title_fweight
			)
		) );
	}
	$setting = 'overlay-tagline-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_desc_size = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-description'
			),
			'declarations' => array(
				'font-size' => $overlay_desc_size . 'px'
			)
		) );
	}
	$setting = 'overlay-tagline-fweight';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_tagline_fweight = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-description'
			),
			'declarations' => array(
				'font-weight' => $overlay_tagline_fweight
			)
		) );
	}
	$setting = 'overlay-title-font-uppercase';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_nav_item_spacing = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-title'
			),
			'declarations' => array(
				'text-transform' => 'uppercase'
			)
		) );
	}
	$setting = 'overlay-tagline-font-uppercase';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_nav_item_spacing = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-description'
			),
			'declarations' => array(
				'text-transform' => 'uppercase'
			)
		) );
	}
	// ------------------------------------------------------------------------------------ Site Identity

	// ------------------------------------------------------------------------------------ Site Layout
	$setting = 'overlay-site-container-width';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_site_container = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-boxed,
				.site-container,
				.site-boxed .site-header.stick-header.stuck,
				.site-boxed .main-navigation.stick-header.stuck,
				.site-boxed .site-stick-header.stick-header.stuck,
				.site-boxed .site-bar.stick-header.stuck'
			),
			'declarations' => array(
				'max-width' => $overlay_site_container . 'px'
			)
		) );
	}
	// ------------------------------------------------------------------------------------ Site Layout

	// ------------------------------------------------------------------------------------ Sticky Header
	$setting = 'overlay-stuckheader-remove-logo';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_site_container = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-stick-header.stick-header.stuck .custom-logo-link'
			),
			'declarations' => array(
				'display' => 'none !important'
			)
		) );
	}
	$setting = 'overlay-stuckheader-remove-title';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_site_container = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-stick-header.stick-header.stuck .site-title'
			),
			'declarations' => array(
				'display' => 'none !important'
			)
		) );
	}
	$setting = 'overlay-stuckheader-remove-tagline';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_site_container = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-stick-header.stick-header.stuck .site-description'
			),
			'declarations' => array(
				'display' => 'none !important'
			)
		) );
	}
	$setting = 'overlay-stuckheader-logo-img-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_stuck_logotitle_sizing = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header.stick-logonav .site-stick-header.stick-header.stuck .site-header-inner img'
			),
			'declarations' => array(
				'width' => $overlay_stuck_logotitle_sizing . 'px'
			)
		) );
	}
	$setting = 'overlay-stuckheader-title-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_stuck_title_size = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-stick-header.stick-header.stuck .site-title'
			),
			'declarations' => array(
				'font-size' => $overlay_stuck_title_size . 'px'
			)
		) );
	}
	$setting = 'overlay-stuckheader-tagline-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_stuck_tagline_size = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-stick-header.stick-header.stuck .site-description'
			),
			'declarations' => array(
				'font-size' => $overlay_stuck_tagline_size . 'px'
			)
		) );
	}
	$setting = 'overlay-stuckheader-navitem-topbotpad';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_stuck_topbot_pad = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-stick-header.stick-header.stuck .main-navigation ul#overlay-main-menu > li > a,
				.site-stick-header.stick-header.stuck .main-navigation #overlay-main-menu > ul > li > a,
				.main-navigation.stick-header.stuck ul#overlay-main-menu > li > a,
				.main-navigation.stick-header.stuck #overlay-main-menu > ul > li > a'
			),
			'declarations' => array(
				'padding-top' => $overlay_stuck_topbot_pad . 'px',
				'padding-bottom' => $overlay_stuck_topbot_pad . 'px',
			)
		) );
	}
	$setting = 'overlay-stuckheader-navitem-sidepad';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_stuck_side_pad = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-stick-header.stick-header.stuck .main-navigation ul#overlay-main-menu > li > a,
				.site-stick-header.stick-header.stuck .main-navigation #overlay-main-menu > ul > li > a,
				.main-navigation.stick-header.stuck ul#overlay-main-menu > li > a,
				.main-navigation.stick-header.stuck #overlay-main-menu > ul > li > a'
			),
			'declarations' => array(
				'padding-left' => $overlay_stuck_side_pad . 'px',
				'padding-right' => $overlay_stuck_side_pad . 'px',
			)
		) );
	}
	$setting = 'overlay-stuckheader-centeralign';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_site_container = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation.stick-header.stuck .site-container'
			),
			'declarations' => array(
				'display' => 'inline-block'
			)
		) );
	}
	// ------------------------------------------------------------------------------------ Sticky Header

	// ------------------------------------------------------------------------------------ Site Top Bar
	if ( !get_theme_mod( 'overlay-remove-topbar', customizer_library_get_default( 'overlay-remove-topbar' ) ) ) :
		$setting = 'overlay-topbar-spacing-top';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_topbar_top_pad = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.site-header .site-bar-inner'
				),
				'declarations' => array(
					'padding-top' => $overlay_topbar_top_pad . 'px'
				)
			) );
		}
		$setting = 'overlay-topbar-spacing-bottom';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_topbar_bottom_pad = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.site-header .site-bar-inner'
				),
				'declarations' => array(
					'padding-bottom' => $overlay_topbar_bottom_pad . 'px'
				)
			) );
		}
		$setting = 'overlay-topbar-font-size';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_topbar_font_size = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.site-header .site-bar'
				),
				'declarations' => array(
					'font-size' => $overlay_topbar_font_size . 'px'
				)
			) );
		}
		$setting = 'overlay-topbar-social-size';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_topbar_icon = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.site-header .site-bar .social-icon,
					.site-header.overlay-topbar-one button.header-search,
                    .overlay-header-sicons .social-icon'
				),
				'declarations' => array(
					'font-size' => $overlay_topbar_icon . 'px'
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.site-header .site-bar .social-icon'
				),
				'declarations' => array(
					'margin-right' => ( $overlay_topbar_icon / 2 ) + 2 . 'px'
				)
			) );
		}


	endif;
	// ------------------------------------------------------------------------------------ Site Top Bar

	// ------------------------------------------------------------------------------------ Site Header
	$setting = 'overlay-header-spacing-top';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_header_top_pad = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header-inner'
			),
			'declarations' => array(
				'padding-top' => $overlay_header_top_pad . 'px'
			)
		) );
	}
	$setting = 'overlay-header-spacing-bottom';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_header_bottom_pad = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header-inner'
			),
			'declarations' => array(
				'padding-bottom' => $overlay_header_bottom_pad . 'px'
			)
		) );
	}
	// ------------------------------------------------------------------------------------ Site Header

	// ------------------------------------------------------------------------------------ Main Navigation
	$setting = 'overlay-nav-font-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_nav_font_size = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation ul#overlay-main-menu > li > a,
				.main-navigation #overlay-main-menu > ul > li > a,
				.main-navigation .overlay-menu-cart'
			),
			'declarations' => array(
				'font-size' => $overlay_nav_font_size . 'px'
			),
			'media' => esc_attr( $overlay_resp_menu_min )
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.menu-toggle'
			),
			'declarations' => array(
				'font-size' => $overlay_nav_font_size . 'px'
			),
			'media' => esc_attr( $overlay_resp_menu )
		) );
	}

	$setting = 'overlay-align-navdrop-center';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_nav_font_size = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation ul ul a'
			),
			'declarations' => array(
				'text-align' => 'center'
			),
			'media' => esc_attr( $overlay_resp_menu_min )
		) );
	}
	if ( get_theme_mod( 'overlay-nav-advanced-set', customizer_library_get_default( 'overlay-nav-advanced-set' ) ) ) :
		$setting = 'overlay-header-nav-spacing-top';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_nav_pad_top = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.main-navigation ul#overlay-main-menu > li > a,
					.main-navigation.overlay-nav-block #overlay-main-menu > ul > li > a'
				),
				'declarations' => array(
					'padding-top' => $overlay_nav_pad_top . 'px'
				),
				'media' => esc_attr( $overlay_resp_menu_min )
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.menu-toggle'
				),
				'declarations' => array(
					'padding-top' => $overlay_nav_pad_top . 'px'
				),
				'media' => esc_attr( $overlay_resp_menu )
			) );
		}
		$setting = 'overlay-header-nav-spacing-bottom';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_nav_pad_bottom = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.main-navigation ul#overlay-main-menu > li > a,
					.main-navigation.overlay-nav-block #overlay-main-menu > ul > li > a'
				),
				'declarations' => array(
					'padding-bottom' => $overlay_nav_pad_bottom . 'px'
				),
				'media' => esc_attr( $overlay_resp_menu_min )
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.menu-toggle'
				),
				'declarations' => array(
					'padding-bottom' => $overlay_nav_pad_bottom . 'px'
				),
				'media' => esc_attr( $overlay_resp_menu )
			) );
		}
		$setting = 'overlay-header-nav-spacing-side';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_nav_pad_side = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.main-navigation ul#overlay-main-menu > li > a'
				),
				'declarations' => array(
					'padding-left' => $overlay_nav_pad_side . 'px',
					'padding-right' => $overlay_nav_pad_side . 'px'
				),
				'media' => esc_attr( $overlay_resp_menu_min )
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.main-navigation.overlay-nav-block #overlay-main-menu > ul > li > a'
				),
				'declarations' => array(
					'padding-left' => ( $overlay_nav_pad_side / 2 ) . 'px',
					'padding-right' => ( $overlay_nav_pad_side / 2 ) . 'px'
				),
				'media' => esc_attr( $overlay_resp_menu_min )
			) );
		}
		$setting = 'overlay-header-nav-item-spacing';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_nav_item_spacing = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.main-navigation ul#overlay-main-menu > li > a,
					.main-navigation.overlay-nav-block #overlay-main-menu > ul > li > a'
				),
				'declarations' => array(
					'margin-left' => $overlay_nav_item_spacing . 'px',
					'margin-right' => $overlay_nav_item_spacing . 'px'
				),
				'media' => esc_attr( $overlay_resp_menu_min )
			) );
		}
		$setting = 'overlay-header-nav-drop-side-pad';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_navdrop_pad_side = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.main-navigation ul ul a,
					.main-navigation.overlay-nav-block ul ul a'
				),
				'declarations' => array(
					'padding-left' => $overlay_navdrop_pad_side . 'px',
					'padding-right' => $overlay_navdrop_pad_side . 'px'
				),
				'media' => esc_attr( $overlay_resp_menu_min )
			) );
		}
		$setting = 'overlay-header-nav-drop-topbot-pad';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_navdrop_pad_tb = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.main-navigation ul ul a,
					.main-navigation.overlay-nav-block ul ul a'
				),
				'declarations' => array(
					'padding-top' => $overlay_navdrop_pad_tb . 'px',
					'padding-bottom' => $overlay_navdrop_pad_tb . 'px'
				),
				'media' => esc_attr( $overlay_resp_menu_min )
			) );
		}
		$setting = 'overlay-nav-drop-minwidth';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_navdrop_minwidth = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.main-navigation ul ul a'
				),
				'declarations' => array(
					'min-width' => $overlay_navdrop_minwidth . 'px'
				),
				'media' => esc_attr( $overlay_resp_menu_min )
			) );
		}
		$setting = 'overlay-nav-drop-negmargin';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_navdrop_negmargin = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.main-navigation ul ul'
				),
				'declarations' => array(
					'margin-left' => '-' . $overlay_navdrop_negmargin . 'px'
				),
				'media' => esc_attr( $overlay_resp_menu_min )
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.main-navigation ul ul ul'
				),
				'declarations' => array(
					'margin-left' => '0'
				),
				'media' => esc_attr( $overlay_resp_menu_min )
			) );
		}
	endif;
	
	$setting = 'overlay-nav-drop-down-font-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_navdrop_size = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation ul ul a'
			),
			'declarations' => array(
				'font-size' => $overlay_navdrop_size . 'px'
			),
			'media' => esc_attr( $overlay_resp_menu_min )
		) );
	}
	$setting = 'overlay-nav-uppercase';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_nav_item_spacing = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation,
				.menu-toggle'
			),
			'declarations' => array(
				'text-transform' => 'uppercase'
			)
		) );
	}
	// ------------------------------------------------------------------------------------ Main Navigation

	// ------------------------------------------------------------------------------------ Content Area
	$setting = 'overlay-content-spacing-top';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_content_pad_top = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-container.site-content'
			),
			'declarations' => array(
				'padding-top' => $overlay_content_pad_top . 'px'
			)
		) );
	}
	$setting = 'overlay-content-spacing-bottom';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_content_pad_bottom = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-container.site-content'
			),
			'declarations' => array(
				'padding-bottom' => $overlay_content_pad_bottom . 'px'
			)
		) );
	}
	if ( get_theme_mod( 'overlay-content-advanced-set', customizer_library_get_default( 'overlay-content-advanced-set' ) ) ) :
		// Top
		$setting = 'overlay-content-padding-top';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_padcontent_top = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'body #page #content #primary.content-area'
				),
				'declarations' => array(
					'padding-top' => $overlay_padcontent_top . 'px'
				)
			) );
		}
		// Left
		$setting = 'overlay-content-padding-left';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_padcontent_left = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'body #page #content #primary.content-area'
				),
				'declarations' => array(
					'padding-left' => $overlay_padcontent_left . 'px'
				)
			) );
		}
		// Right
		$setting = 'overlay-content-padding-right';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_padcontent_right = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'body #page #content #primary.content-area'
				),
				'declarations' => array(
					'padding-right' => $overlay_padcontent_right . 'px'
				)
			) );
		}
		// Bottom
		$setting = 'overlay-content-padding-bottom';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_padcontent_bottom = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'body #page #content #primary.content-area'
				),
				'declarations' => array(
					'padding-bottom' => $overlay_padcontent_bottom . 'px'
				)
			) );
		}
	endif;
	// ------------------------------------------------------------------------------------ Content Area

	// ------------------------------------------------------------------------------------ Widget Area
	$setting = 'overlay-widget-spacing-bottom';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_widget_spacing = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.widget-area .widget'
			),
			'declarations' => array(
				'margin-bottom' => $overlay_widget_spacing . 'px'
			)
		) );
	}
	$setting = 'overlay-widget-title-spacing';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_widget_title_spacing = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.widget-area .widget-title'
			),
			'declarations' => array(
				'margin-bottom' => $overlay_widget_title_spacing . 'px'
			)
		) );
	}
	if ( get_theme_mod( 'overlay-widget-advanced-set', customizer_library_get_default( 'overlay-widget-advanced-set' ) ) ) :
		$setting = 'overlay-widget-area-size';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_widgetarea_size = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.widget-area'
				),
				'declarations' => array(
					'width' => $overlay_widgetarea_size . '%'
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.content-area'
				),
				'declarations' => array(
					'width' => 100 - $overlay_widgetarea_size . '%'
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'body.page-template-right-sidebar.overlay-break-content .content-area,
					body.page-template-default.overlay-site-full-width-blocked.overlay-break-content.overlay-page-rs .content-area,
					body.overlay-site-full-width-blocked.overlay-break-content.overlay-blog-rs .content-area,
					body.overlay-site-full-width-blocked.overlay-break-content.overlay-blog-post-rs .content-area,
					body.overlay-site-full-width-blocked.overlay-break-content.overlay-blog-search-rs .content-area,

					body.archive.woocommerce.overlay-site-full-width-blocked.overlay-break-content.overlay-wc-rs .content-area,
					body.single-product.woocommerce.overlay-site-full-width-blocked.overlay-break-content.overlay-wc-product-rs .content-area'
				),
				'declarations' => array(
					'width' => 100 - ( $overlay_widgetarea_size + 3 ) . '%',
					'margin' => '0 ' . 3 . '% 0 0'
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'body.page-template-left-sidebar.overlay-break-content .content-area,
					body.page-template-default.overlay-site-full-width-blocked.overlay-break-content.overlay-page-ls .content-area,
					body.overlay-site-full-width-blocked.overlay-break-content.overlay-blog-ls .content-area,
					body.overlay-site-full-width-blocked.overlay-break-content.overlay-blog-post-ls .content-area,
					body.overlay-site-full-width-blocked.overlay-break-content.overlay-blog-search-ls .content-area,
					
					body.archive.woocommerce.overlay-site-full-width-blocked.overlay-break-content.overlay-wc-ls .content-area,
					body.single-product.woocommerce.overlay-site-full-width-blocked.overlay-break-content.overlay-wc-product-ls .content-area'
				),
				'declarations' => array(
					'width' => 100 - ( $overlay_widgetarea_size + 3 ) . '%',
					'margin' => '0 0 0 ' . 3 . '%'
				)
			) );
		}
		// Top
		$setting = 'overlay-widget-padding-top';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_padwidget_top = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'body #page #content .widget-area.widgets-joined,
					body #page #content .widget-area.widgets-apart .widget'
				),
				'declarations' => array(
					'padding-top' => $overlay_padwidget_top . 'px'
				)
			) );
		}
		// Left
		$setting = 'overlay-widget-padding-left';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_padwidget_left = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'body #page #content .widget-area.widgets-joined,
					body #page #content .widget-area.widgets-apart .widget'
				),
				'declarations' => array(
					'padding-left' => $overlay_padwidget_left . 'px'
				)
			) );
		}
		// Right
		$setting = 'overlay-widget-padding-right';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_padwidget_right = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'body #page #content .widget-area.widgets-joined,
					body #page #content .widget-area.widgets-apart .widget'
				),
				'declarations' => array(
					'padding-right' => $overlay_padwidget_right . 'px'
				)
			) );
		}
		// Bottom
		$setting = 'overlay-widget-padding-bottom';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_padwidget_bottom = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'body #page #content .widget-area.widgets-joined,
					body #page #content .widget-area.widgets-apart .widget'
				),
				'declarations' => array(
					'padding-bottom' => $overlay_padwidget_bottom . 'px'
				)
			) );
		}
	endif;
	$setting = 'overlay-widget-font-title';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_widget_title_fsize = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.widget-area .widget-title'
			),
			'declarations' => array(
				'font-size' => $overlay_widget_title_fsize . 'px'
			)
		) );
	}
	$setting = 'overlay-widget-title-fweight';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_widget_title_fweight = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.widget-area .widget-title'
			),
			'declarations' => array(
				'font-weight' => $overlay_widget_title_fweight
			)
		) );
	}
	$setting = 'overlay-widget-font-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_widget_fsize = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'#secondary.widget-area'
			),
			'declarations' => array(
				'font-size' => $overlay_widget_fsize . 'px'
			)
		) );
	}
	$setting = 'overlay-widget-lheight';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_widget_lheight = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'#secondary.widget-area'
			),
			'declarations' => array(
				'line-height' => $overlay_widget_lheight
			)
		) );
	}
	// ------------------------------------------------------------------------------------ Widget Area


	// ------------------------------------------------------------------------------------ Footer Settings
	$setting = 'overlay-footer-widget-space';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_footer_widget_space = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-footer-default .site-footer-widgets .footer-custom-block,
				.overlay-footer-split ul.site-footer-widgets > li'
			),
			'declarations' => array(
				'padding' => '0 ' . $overlay_footer_widget_space . 'px'
			)
		) );
	}
	$setting = 'overlay-footer-icon-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_footer_icon_size = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
                '.overlay-footer-social .site-footer-icons .social-icon,
                .overlay-footer-social-two .site-footer-icons .social-icon'
			),
			'declarations' => array(
				'font-size' => $overlay_footer_icon_size . 'px'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer-icons.overlay-footicon-round .social-icon i,
				.site-footer-icons.overlay-footicon-rounded .social-icon i,
				.site-footer-icons.overlay-footicon-square .social-icon i,
				.site-footer-icons.overlay-footicon-circled .social-icon i'
			),
			'declarations' => array(
				'width' => ( $overlay_footer_icon_size * 2 ) . 'px',
				'height' => ( $overlay_footer_icon_size * 2 ) . 'px'
			)
		) );
	}
	$setting = 'overlay-footer-icon-space';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_footer_icon_space = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
                '.overlay-footer-social .site-footer-icons .social-icon,
                .overlay-footer-social-two .site-footer-icons .social-icon'
			),
			'declarations' => array(
				'margin' => '0 ' . $overlay_footer_icon_space . 'px 15px'
			)
		) );
	}
	$setting = 'overlay-footer-title-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_footer_title_size = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .widget-title'
			),
			'declarations' => array(
				'font-size' => $overlay_footer_title_size . 'px'
			)
		) );
	}
	$setting = 'overlay-footer-title-weight';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_footer_title_weight = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .widget-title'
			),
			'declarations' => array(
				'font-weight' => $overlay_footer_title_weight
			)
		) );
	}
	$setting = 'overlay-footer-title-uc';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_footer_title_uc = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .widget-title'
			),
			'declarations' => array(
				'text-transform' => 'uppercase'
			)
		) );
	}
	$setting = 'overlay-footer-title-space';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_footer_title_space = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .widget-title'
			),
			'declarations' => array(
				'margin' => '0 0 ' . $overlay_footer_title_space . 'px'
			)
		) );
	}
	$setting = 'overlay-footer-font-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_footer_fsize = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer'
			),
			'declarations' => array(
				'font-size' => $overlay_footer_fsize . 'px'
			)
		) );
	}
	$setting = 'overlay-footer-lheight';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_footer_lheight = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer'
			),
			'declarations' => array(
				'line-height' => $overlay_footer_lheight
			)
		) );
	}

	// Footer Custom custom widths
	if ( get_theme_mod( 'overlay-footer-customize', customizer_library_get_default( 'overlay-footer-customize' ) ) ) :
		// Site Footer Column Widths
		$setting = 'overlay-footer-customize-col-1';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$footer_col_one = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.footer-custom-block.footer-custom-one'
				),
				'declarations' => array(
					'max-width' => $footer_col_one . '%'
				)
			) );
		}
		$setting = 'overlay-footer-customize-col-2';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$footer_col_two = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.footer-custom-block.footer-custom-two'
				),
				'declarations' => array(
					'max-width' => $footer_col_two . '%'
				)
			) );
		}
		$setting = 'overlay-footer-customize-col-3';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$footer_col_three = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.footer-custom-block.footer-custom-three'
				),
				'declarations' => array(
					'max-width' => $footer_col_three . '%'
				)
			) );
		}
		$setting = 'overlay-footer-customize-col-4';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$footer_col_four = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.footer-custom-block.footer-custom-four'
				),
				'declarations' => array(
					'max-width' => $footer_col_four . '%'
				)
			) );
		}
		$setting = 'overlay-footer-customize-col-5';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$footer_col_five = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.footer-custom-block.footer-custom-five'
				),
				'declarations' => array(
					'max-width' => $footer_col_five . '%'
				)
			) );
		}
		$setting = 'overlay-center-col-1';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$footer_col_five = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.footer-custom-block.footer-custom-one'
				),
				'declarations' => array(
					'margin' => '0 auto'
				)
			) );
		}
	endif;
	// ------------------------------------------------------------------------------------ Footer Settings

	// ------------------------------------------------------------------------------------ Footer Bottom Bar
	$setting = 'overlay-footer-top-pad';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_header_top_pad = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer-inner'
			),
			'declarations' => array(
				'padding-top' => $overlay_header_top_pad . 'px'
			)
		) );
	}
	$setting = 'overlay-footer-bottom-pad';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_header_bottom_pad = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer-inner'
			),
			'declarations' => array(
				'padding-bottom' => $overlay_header_bottom_pad . 'px'
			)
		) );
	}
	$setting = 'overlay-site-side-social-top';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_sidesocial_top = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-side-social'
			),
			'declarations' => array(
				'top' => $overlay_sidesocial_top . 'px'
			)
		) );
	}
	$setting = 'overlay-side-social-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_sidesocial_size = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-side-social .social-icon'
			),
			'declarations' => array(
				'font-size' => $overlay_sidesocial_size . 'px'
			)
		) );
		if ( $overlay_sidesocial_size > 24 ) {
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.overlay-side-social.overlay-side-social-round .social-icon'
				),
				'declarations' => array(
					'padding' => '10px 18px'
				)
			) );
		}
	}
	$setting = 'overlay-side-social-space';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_sidesocial_space = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-side-social .social-icon'
			),
			'declarations' => array(
				'margin' => '0 0 ' . $overlay_sidesocial_space . 'px'
			)
		) );
	}

	if ( !get_theme_mod( 'overlay-remove-bottombar', customizer_library_get_default( 'overlay-remove-bottombar' ) ) ) :
		$setting = 'overlay-bottombar-spacing-top';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_bottombar_top_pad = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.site-footer .site-bar-inner'
				),
				'declarations' => array(
					'padding-top' => $overlay_bottombar_top_pad . 'px'
				)
			) );
		}
		$setting = 'overlay-bottombar-spacing-bottom';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_bottombar_bottom_pad = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.site-footer .site-bar-inner'
				),
				'declarations' => array(
					'padding-bottom' => $overlay_bottombar_bottom_pad . 'px'
				)
			) );
		}
		$setting = 'overlay-bottombar-font-size';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_bottombar_font_size = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.site-footer .site-bar'
				),
				'declarations' => array(
					'font-size' => $overlay_bottombar_font_size . 'px'
				)
			) );
		}
		$setting = 'overlay-bottombar-social-size';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_bottombar_icon = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.site-footer .site-bar .social-icon,
					.site-footer.overlay-bottombar-one button.header-search,
					.overlay-footer-basic .site-footer-icons .social-icon'
				),
				'declarations' => array(
					'font-size' => $overlay_bottombar_icon . 'px'
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.site-footer .site-bar .social-icon'
				),
				'declarations' => array(
					'margin-right' => ( $overlay_bottombar_icon / 2 ) + 4 . 'px'
				)
			) );
		}
	endif;

	$setting = 'overlay-footer-menu-uppercase';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_footer_menucase = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'#overlay-bottombar-menu li a'
			),
			'declarations' => array(
				'text-transform' => 'uppercase'
			)
		) );
	}
	// ------------------------------------------------------------------------------------ Footer Bottom Bar


	// ------------------------------------------------------------------------------------ Blog Settings
	$setting = 'overlay-blog-img-shadow';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_blogimg_shadow = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-blog-left .wp-post-image,
				.overlay-blog-right .wp-post-image,
				.overlay-blog-alt .wp-post-image,
				.overlay-blog-top .wp-post-image'
			),
			'declarations' => array(
				'box-shadow' => '0 0 0 1px rgba(0, 0, 0, 0.04), 0 1px 8px rgba(0, 0, 0, 0.14)'
			)
		) );
	}
	
	if ( get_theme_mod( 'overlay-blog-advanced-set', customizer_library_get_default( 'overlay-blog-advanced-set' ) ) ) :
		$setting = 'overlay-blog-list-imgcont-size';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_blog_imgcont_size = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.overlay-list.overlay-blog-left .post-img,
					.overlay-list.overlay-blog-right .post-img,
					.overlay-list.overlay-blog-alt .post-img'
				),
				'declarations' => array(
					'width' => $overlay_blog_imgcont_size . '%'
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.overlay-list.overlay-blog-left .post-content,
					.overlay-list.overlay-blog-right .post-content,
					.overlay-list.overlay-blog-alt .post-content'
				),
				'declarations' => array(
					'width' => ( 100 - $overlay_blog_imgcont_size ) . '%'
				)
			) );
		}
		$setting = 'overlay-blog-list-title-fweight';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_blog_title_fweight = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.overlay-list article .entry-title'
				),
				'declarations' => array(
					'font-weight' => $overlay_blog_title_fweight
				)
			) );
		}
		$setting = 'overlay-blog-list-title-space';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_blog_title_space = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.overlay-list article .entry-title'
				),
				'declarations' => array(
					'margin' => '0 0 ' . $overlay_blog_title_space . 'px'
				)
			) );
		}
		$setting = 'overlay-blog-list-font-size';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_blog_fsize = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.overlay-list article .post-content'
				),
				'declarations' => array(
					'font-size' => $overlay_blog_fsize . 'px'
				)
			) );
		}
	endif;
	$setting = 'overlay-blog-list-post-space';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_blog_post_space = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-list.overlay-blog-left article.post, .overlay-list.overlay-blog-left article.page,
				.overlay-list.overlay-blog-right article.post, .overlay-list.overlay-blog-right article.page,
				.overlay-list.overlay-blog-alt article.post, .overlay-list.overlay-blog-alt article.page,
				.overlay-list.overlay-blog-top article.post, .overlay-list.overlay-blog-top article.page'
			),
			'declarations' => array(
				'margin' => '0 0 ' . $overlay_blog_post_space . 'px',
				'padding' => '0 0 ' . $overlay_blog_post_space . 'px'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body.overlay-site-full-width-blocked.overlay-joined-content.break-blog-blocks .site-content-inner .overlay-blog-top .post-inner .post-content'
			),
			'declarations' => array(
				'padding-bottom' => '40px'
			)
		) );
	}
	$setting = 'overlay-blog-grid-space';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_blog_grid_space = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-list.overlay-blog-grid .overlay-list-inner'
			),
			'declarations' => array(
				'margin' => '0 -' . $overlay_blog_grid_space . 'px'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-blog-grid article.blog-grid-block'
			),
			'declarations' => array(
				'padding' => '0 ' . $overlay_blog_grid_space . 'px !important',
				'margin' => '0 0 ' . ( $overlay_blog_grid_space * 2 ) . 'px'
			)
		) );
	}
	// ------------------------------------------------------------------------------------ Blog Settings


	// ------------------------------------------------------------------------------------ Font Settings
	$websafe = ( get_theme_mod( 'overlay-disable-google-font', customizer_library_get_default( 'overlay-disable-google-font' ) ) == 1 ) ? sanitize_html_class( '-websafe' ) : '';

	// Title Font
	$setting = 'overlay-title-font'.$websafe;
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $websafe ) {
		$stack = '\''.$mod.'\', sans-serif';
	} else {
		$stack = customizer_library_get_font_stack( $mod );
	}

	if ( $mod != customizer_library_get_default( $setting ) || get_theme_mod( 'overlay-disable-google-font' ) == 1 ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-title'
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}
	// Tagline Font
	$setting = 'overlay-tagline-font'.$websafe;
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $websafe ) {
		$stack = '\''.$mod.'\', sans-serif';
	} else {
		$stack = customizer_library_get_font_stack( $mod );
	}

	if ( $mod != customizer_library_get_default( $setting ) || get_theme_mod( 'overlay-disable-google-font' ) == 1 ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-description'
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}
	// Main Navigation Font
	$setting = 'overlay-main-nav-font'.$websafe;
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $websafe ) {
		$stack = '\''.$mod.'\', sans-serif';
	} else {
		$stack = customizer_library_get_font_stack( $mod );
	}

	if ( $mod != customizer_library_get_default( $setting ) || get_theme_mod( 'overlay-disable-google-font' ) == 1 ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation'
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}
	// Body Font
	$setting = 'overlay-body-font'.$websafe;
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $websafe ) {
		$stack = '\''.$mod.'\', sans-serif';
	} else {
		$stack = customizer_library_get_font_stack( $mod );
	}

	if ( $mod != customizer_library_get_default( $setting ) || get_theme_mod( 'overlay-disable-google-font' ) == 1 ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body, button, input, select, optgroup, textarea'
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}
	// Body Font Size
	$setting = 'overlay-body-fonts-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_body_font_size = esc_attr( $mod );

		switch ( $overlay_body_font_size ) {
			case '1':
				$overlay_body_font_size = '12';
				break;
			case '2':
				$overlay_body_font_size = '14';
				break;
			case '3':
				$overlay_body_font_size = '';
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

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-container.site-content'
			),
			'declarations' => array(
				'font-size' => $overlay_body_font_size . 'px'
			)
		) );
	}
	$setting = 'overlay-body-font-lheight';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_body_lheight = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'#primary.content-area'
			),
			'declarations' => array(
				'line-height' => $overlay_body_lheight
			)
		) );
	}
	$setting = 'overlay-content-font-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_content_fsize = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'#primary.content-area'
			),
			'declarations' => array(
				'font-size' => $overlay_content_fsize . 'px'
			)
		) );
	}
	$setting = 'overlay-content-lheight';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_content_lheight = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'#primary.content-area'
			),
			'declarations' => array(
				'line-height' => $overlay_content_lheight
			)
		) );
	}

	// Heading Font
	$setting = 'overlay-heading-font'.$websafe;
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	if ( $websafe ) {
		$stack = '\''.$mod.'\', sans-serif';
	} else {
		$stack = customizer_library_get_font_stack( $mod );
	}

	if ( $mod != customizer_library_get_default( $setting ) || get_theme_mod( 'overlay-disable-google-font' ) == 1 ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'h1, h2, h3, h4, h5, h6,
                .widget-area .widget-title,
                .main-navigation a,
                button, input[type="button"],
                input[type="reset"],
                input[type="submit"]'
			),
			'declarations' => array(
				'font-family' => $stack
			)
		) );

	}

	$setting = 'overlay-page-title-upper';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_breadcrumbs_upper = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-page-title .overlay-h-title'
			),
			'declarations' => array(
				'text-transform' => 'uppercase'
			)
		) );
	}
	$setting = 'overlay-breadcrumbs-upper';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_breadcrumbs_upper = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-breadcrumbs'
			),
			'declarations' => array(
				'text-transform' => 'uppercase',
				'font-size' => '0.7em'
			)
		) );
	}
	$setting = 'overlay-breadcrumbs-spacing';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_breadcrumbs_space = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-breadcrumbs > span'
			),
			'declarations' => array(
				'margin' => '0 ' . $overlay_breadcrumbs_space . 'px'
			)
		) );
	}
	$setting = 'overlay-page-title-font-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_ptitle_fsize = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-page-title .overlay-h-title,
				.woocommerce-products-header .woocommerce-products-header__title'
			),
			'declarations' => array(
				'font-size' => $overlay_ptitle_fsize . 'px'
			)
		) );
	}
	$setting = 'overlay-page-title-font-weight';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_footer_title_weight = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-page-title .overlay-h-title,
				.woocommerce-products-header__title'
			),
			'declarations' => array(
				'font-weight' => $overlay_footer_title_weight
			)
		) );
	}
	$setting = 'overlay-page-title-spacing';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_ptitle_bspace = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'header.overlay-page-title'
			),
			'declarations' => array(
				'padding' => '0 0 ' . $overlay_ptitle_bspace . 'px',
				'margin' => '0 0 ' . ( $overlay_ptitle_bspace + 4 ) . 'px'
			)
		) );
	}
	$setting = 'overlay-breadcrumbs-font-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_breadcrumbs_fsize = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-breadcrumbs'
			),
			'declarations' => array(
				'font-size' => $overlay_breadcrumbs_fsize . 'px'
			)
		) );
	}

	// WooCommerce Custom Settings
	if ( class_exists( 'WooCommerce' ) ) :

		$setting = 'overlay-wc-product-col-space';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_wc_col_spacing = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.woocommerce ul.products'
				),
				'declarations' => array(
					'margin' => '0 -' . $overlay_wc_col_spacing . 'px'
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.woocommerce ul.products li.product'
				),
				'declarations' => array(
					'margin' => '0 0 ' . ( $overlay_wc_col_spacing * 3 ) . 'px',
					'padding' => '1px ' . $overlay_wc_col_spacing . 'px 4px'
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.overlay-wcsale-normal ul.products li.product .onsale'
				),
				'declarations' => array(
					'right' => ( $overlay_wc_col_spacing + 5 ) . 'px'
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.overlay-wc-2 ul.products li.product .button,
					.overlay-wc-2 .related.products ul.products li.product .button'
				),
				'declarations' => array(
					'margin' => '0 ' . $overlay_wc_col_spacing . 'px 0'
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.overlay-wc-2 ul.products li.product .star-rating'
				),
				'declarations' => array(
					'right' => $overlay_wc_col_spacing . 'px'
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.overlay-wcsale-triangle ul.products li.product .onsale'
				),
				'declarations' => array(
					'right' => ( $overlay_wc_col_spacing - 22 ) . 'px'
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.overlay-wcsale-square ul.products li.product .onsale,
					.overlay-wcsale-bubble ul.products li.product .onsale'
				),
				'declarations' => array(
					'right' => ( $overlay_wc_col_spacing + 8 ) . 'px'
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.woocommerce ul.products li.product .star-rating'
				),
				'declarations' => array(
					'left' => ( $overlay_wc_col_spacing + 6 ) . 'px'
				)
			) );
		}
		$setting = 'overlay-wc-remove-result-sort';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_remove_resultsort = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.woocommerce .woocommerce-result-count,
					.woocommerce .woocommerce-ordering'
				),
				'declarations' => array(
					'display' => 'none'
				)
			) );
		}
		
		$setting = 'overlay-wc-store-notice-bg-color';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$wc_notice = sanitize_hex_color( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.woocommerce-store-notice,
					p.demo_store'
				),
				'declarations' => array(
					'background-color' => $wc_notice
				)
			) );
		}
		$setting = 'overlay-wc-store-notice-font-color';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$wc_notice_color = sanitize_hex_color( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.woocommerce-store-notice,
					p.demo_store,
					.woocommerce-store-notice a,
					p.demo_store a'
				),
				'declarations' => array(
					'color' => $wc_notice_color
				)
			) );
		}

		if ( get_theme_mod( 'overlay-wcproduct-advanced-set', customizer_library_get_default( 'overlay-wcproduct-advanced-set' ) ) ) :
			$setting = 'overlay-wcproduct-img-sum-size';
			$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

			if ( $mod !== customizer_library_get_default( $setting ) ) {

				$overlay_prod_img_size = esc_attr( $mod );

				Customizer_Library_Styles()->add( array(
					'selectors' => array(
						'.woocommerce #content div.product div.images,
						.woocommerce div.product div.images,
						.woocommerce-page #content div.product div.images,
						.woocommerce-page div.product div.images'
					),
					'declarations' => array(
						'width' => $overlay_prod_img_size . '%'
					)
				) );
				Customizer_Library_Styles()->add( array(
					'selectors' => array(
						'.woocommerce #content div.product div.summary,
						.woocommerce div.product div.summary,
						.woocommerce-page #content div.product div.summary,
						.woocommerce-page div.product div.summary'
					),
					'declarations' => array(
						'width' => 100 - ( $overlay_prod_img_size + 4 ) . '%'
					)
				) );
			}
			$setting = 'overlay-wcproduct-remove-tab-section';
			$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

			if ( $mod !== customizer_library_get_default( $setting ) ) {

				$overlay_rem_prodtabs = esc_attr( $mod );

				Customizer_Library_Styles()->add( array(
					'selectors' => array(
						'.woocommerce-tabs.wc-tabs-wrapper'
					),
					'declarations' => array(
						'display' => 'none'
					)
				) );
			}
			$setting = 'overlay-wc-product-detail-space';
			$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

			if ( $mod !== customizer_library_get_default( $setting ) ) {

				$overlay_prod_tab_space = esc_attr( $mod );

				Customizer_Library_Styles()->add( array(
					'selectors' => array(
						'.woocommerce #content div.product div.images,
						.woocommerce div.product div.images,
						.woocommerce-page #content div.product div.images,
						.woocommerce-page div.product div.images,
						.woocommerce #content div.product div.summary,
						.woocommerce div.product div.summary,
						.woocommerce-page #content div.product div.summary,
						.woocommerce-page div.product div.summary'
					),
					'declarations' => array(
						'margin' => '0 0 ' . $overlay_prod_tab_space . 'px'
					)
				) );
			}
			$setting = 'overlay-wc-product-rel-space';
			$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

			if ( $mod !== customizer_library_get_default( $setting ) ) {

				$overlay_prod_rel_space = esc_attr( $mod );

				Customizer_Library_Styles()->add( array(
					'selectors' => array(
						'.woocommerce-tabs.wc-tabs-wrapper'
					),
					'declarations' => array(
						'margin' => '0 0 ' . $overlay_prod_rel_space . 'px'
					)
				) );
			}
			$setting = 'overlay-wc-product-title-size';
			$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

			if ( $mod !== customizer_library_get_default( $setting ) ) {

				$overlay_wcomtitle_size = esc_attr( $mod );

				Customizer_Library_Styles()->add( array(
					'selectors' => array(
						'.single-product div.product .product_title'
					),
					'declarations' => array(
						'font-size' => $overlay_wcomtitle_size . 'px'
					)
				) );
			}
		endif;

		$setting = 'overlay-wccart-center-totals';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_wccart_center_totals = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.woocommerce-cart .cart-collaterals .cart_totals'
				),
				'declarations' => array(
					'float' => 'none',
					'margin' => '0 auto',
				)
			) );
		}
		$setting = 'overlay-wccheckout-label-upper';
		$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

		if ( $mod !== customizer_library_get_default( $setting ) ) {

			$overlay_wccheck_labelupper = esc_attr( $mod );

			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.woocommerce-checkout form .form-row label'
				),
				'declarations' => array(
					'font-size' => '0.7em',
					'text-transform' => 'uppercase',
					'letter-spacing' => '1px'
				)
			) );
		}
		if ( get_theme_mod( 'overlay-wccat-advanced-set', customizer_library_get_default( 'overlay-wccat-advanced-set' ) ) ) :
			$setting = 'overlay-wc-list-title-height';
			$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

			if ( $mod !== customizer_library_get_default( $setting ) ) {

				$overlay_wc_title_height = esc_attr( $mod );

				Customizer_Library_Styles()->add( array(
					'selectors' => array(
						'.woocommerce ul.products li.product .woocommerce-loop-product__title'
					),
					'declarations' => array(
						'min-height' => $overlay_wc_title_height . 'px'
					)
				) );
			}
			$setting = 'overlay-wc-list-title-size';
			$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

			if ( $mod !== customizer_library_get_default( $setting ) ) {

				$overlay_wctitle_size = esc_attr( $mod );

				Customizer_Library_Styles()->add( array(
					'selectors' => array(
						'body.woocommerce ul.products li.product .woocommerce-loop-product__title'
					),
					'declarations' => array(
						'font-size' => $overlay_wctitle_size . 'px'
					)
				) );
			}
			$setting = 'overlay-wc-product-bottom-space';
			$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

			if ( $mod !== customizer_library_get_default( $setting ) ) {

				$overlay_prod_bottom_space = esc_attr( $mod );

				Customizer_Library_Styles()->add( array(
					'selectors' => array(
						'.woocommerce ul.products li.product'
					),
					'declarations' => array(
						'margin-bottom' => $overlay_prod_bottom_space . 'px'
					)
				) );
			}
		endif;
	endif;

	// --------- Color Settings
	$setting = 'overlay-primary-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_primary_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation ul ul a:hover,
				.main-navigation ul ul a:focus,
				.main-navigation ul ul li.current-menu-item > a,
				.main-navigation ul ul li.current_page_item > a,
				.main-navigation ul ul li.current-menu-parent > a,
				.main-navigation ul ul li.current_page_parent > a,
				.main-navigation ul ul li.current-menu-ancestor > a,
				.main-navigation ul ul li.current_page_ancestor > a,
				
				.main-navigation.overlay-nav-solid a:hover,
				.main-navigation.overlay-nav-solid ul > li > a:hover,
				.main-navigation.overlay-nav-solid ul > li > a:focus,
				.main-navigation.overlay-nav-solid ul > li.current-menu-item > a,
				.main-navigation.overlay-nav-solid ul > li.current-menu-ancestor > a,
				.main-navigation.overlay-nav-solid ul > li.current-menu-parent > a,
				.main-navigation.overlay-nav-solid ul > li.current_page_parent > a,
				.main-navigation.overlay-nav-solid ul > li.current_page_ancestor > a,
				.main-navigation.overlay-nav-solid .current_page_item > a,
				
				.main-navigation.overlay-nav-block ul > li > a:hover span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li > a:focus span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current-menu-item > a span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current-menu-ancestor > a span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current-menu-parent > a span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current_page_parent > a span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current_page_ancestor > a span.nav-span-block,
				.main-navigation.overlay-nav-block .current_page_item > a span.nav-span-block,
				
				.error-btn a:hover,
				.overlay-side-social .social-icon,
				#comments .comment-form input.submit:hover,
				.overlay-footdivide-shortline .footer-custom-block::after,
				.overlay-footdivide-shortline ul.site-footer-widgets > li::after'
			),
			'declarations' => array(
				'background-color' => $overlay_primary_color
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'a,
				.overlay-footer-social-two #overlay-bottombar-menu li a:hover,
				.overlay-footer-social-two.footer-menu-vertical #overlay-bottombar-menu li a:hover'
			),
			'declarations' => array(
				'color' => $overlay_primary_color
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'#site-navigation.main-navigation.overlay-nav-plain ul > li > a:hover,
				#site-navigation.main-navigation.overlay-nav-plain ul > li > a:focus,
				#site-navigation.main-navigation.overlay-nav-plain ul > li.current-menu-item > a,
				#site-navigation.main-navigation.overlay-nav-plain ul > li.current-menu-ancestor > a,
				#site-navigation.main-navigation.overlay-nav-plain ul > li.current-menu-parent > a,
				#site-navigation.main-navigation.overlay-nav-plain ul > li.current_page_parent > a,
				#site-navigation.main-navigation.overlay-nav-plain ul > li.current_page_ancestor > a,
				#site-navigation.main-navigation.overlay-nav-plain .current_page_item > a,
				
				#site-navigation.main-navigation.overlay-nav-underline ul > li > a:hover,
				#site-navigation.main-navigation.overlay-nav-underline ul > li > a:focus,
				#site-navigation.main-navigation.overlay-nav-underline ul > li.current-menu-item > a,
				#site-navigation.main-navigation.overlay-nav-underline ul > li.current-menu-ancestor > a,
				#site-navigation.main-navigation.overlay-nav-underline ul > li.current-menu-parent > a,
				#site-navigation.main-navigation.overlay-nav-underline ul > li.current_page_parent > a,
				#site-navigation.main-navigation.overlay-nav-underline ul > li.current_page_ancestor > a,
				#site-navigation.main-navigation.overlay-nav-underline .current_page_item > a'
			),
			'declarations' => array(
				'color' => $overlay_primary_color . ' !important'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation.overlay-nav-underline ul > li > a:hover,
				.main-navigation.overlay-nav-underline ul > li > a:focus,
				.main-navigation.overlay-nav-underline ul > li.current-menu-item > a,
				.main-navigation.overlay-nav-underline ul > li.current-menu-ancestor > a,
				.main-navigation.overlay-nav-underline ul > li.current-menu-parent > a,
				.main-navigation.overlay-nav-underline ul > li.current_page_parent > a,
				.main-navigation.overlay-nav-underline ul > li.current_page_ancestor > a,
				.main-navigation.overlay-nav-underline .current_page_item > a'
			),
			'declarations' => array(
				'box-shadow' => '0 -4px 0 ' . $overlay_primary_color . ' inset'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'blockquote'
			),
			'declarations' => array(
				'border-left-color' => $overlay_primary_color . ' !important'
			)
		) );

		if ( class_exists( 'WooCommerce' ) ) :
			if ( get_theme_mod( 'overlay-btn-takeon-primary', customizer_library_get_default( 'overlay-btn-takeon-primary' ) ) ) :
				Customizer_Library_Styles()->add( array(
					'selectors' => array(
						'.overlay-wc-basic ul.products li.product .button,
						.overlay-wc-1 ul.products li.product .button,
						.overlay-wc-3 ul.products li.product .button,
						.single-product div.product form.cart .button,
						.overlay-wc-3 ul.products li.product .button,
						.overlay-wc-3 .related.products ul.products li.product .button,
						.overlay-wc-basic ul.products li.product .button,
						.overlay-wc-basic .related.products ul.products li.product .button,
						.woocommerce #respond input#submit.alt,
						.woocommerce a.button.alt,
						.woocommerce button.button.alt,
						.woocommerce input.button.alt'
					),
					'declarations' => array(
						'background-color' => $overlay_primary_color,
						'color' => '#FFF'
					)
				) );
			endif;
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.woocommerce ul.products li.product .onsale,
					.woocommerce span.onsale,
					
					.woocommerce #respond input#submit.alt,
					.woocommerce a.button.alt,
					.woocommerce button.button.alt,
					.woocommerce input.button.alt,
					.woocommerce button.button.disabled,
					.woocommerce button.button.alt.disabled,
					.woocommerce button.button.disabled:hover,
					.woocommerce button.button.alt.disabled:hover,
					.woocommerce .cart .button:hover,
					.woocommerce-cart table.shop_table button:hover,
					.woocommerce form.checkout_coupon .form-row-last button:hover,
					.woocommerce.widget_shopping_cart .buttons a:hover'
				),
				'declarations' => array(
					'background-color' => $overlay_primary_color . ''
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.star-rating span:before,
					p.stars:hover a:before,
					.woocommerce-form-coupon-toggle a:hover'
				),
				'declarations' => array(
					'color' => $overlay_primary_color . ''
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.overlay-wcsale-triangle ul.products li.product .onsale'
				),
				'declarations' => array(
					'border-left-color' => $overlay_primary_color . ''
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.single-product .overlay-wcsale-triangle span.onsale,
					.single-product .overlay-wcsale-triangle .site-main > div.product > span.onsale'
				),
				'declarations' => array(
					'border-right-color' => $overlay_primary_color . ''
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.overlay-wcsale-bubble ul.products li.product .onsale::before,
					.single-product .overlay-wcsale-bubble span.onsale::before'
				),
				'declarations' => array(
					'border-top-color' => $overlay_primary_color . ''
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.woocommerce-account.overlay-wcaccount-style-default .is-active'
				),
				'declarations' => array(
					'box-shadow' => '5px 0 0 ' . $overlay_primary_color . ' inset'
				)
			) );
		endif;
	}
	$setting = 'overlay-secondary-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_secondary_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'a:hover,
				a:focus,
				a:active'
			),
			'declarations' => array(
				'color' => $overlay_secondary_color
			)
		) );
		if ( class_exists( 'WooCommerce' ) ) :
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.overlay-wc-basic ul.products li.product .button:hover,
					.overlay-wc-1 ul.products li.product .button:hover,
					.overlay-wc-3 ul.products li.product .button:hover,
					.single-product div.product form.cart .button:hover,
					.overlay-wc-3 ul.products li.product .button:hover,
					.overlay-wc-3 .related.products ul.products li.product .button:hover,
					.overlay-wc-basic ul.products li.product .button:hover,
					.overlay-wc-basic .related.products ul.products li.product .button:hover,
					.woocommerce #respond input#submit.alt:hover,
					.woocommerce a.button.alt:hover,
					.woocommerce button.button.alt:hover,
					.woocommerce input.button.alt:hover'
				),
				'declarations' => array(
					'background-color' => $overlay_secondary_color
				)
			) );
			Customizer_Library_Styles()->add( array(
				'selectors' => array(
					'.woocommerce div.product p.price,
					.woocommerce div.product span.price,
					.overlay-wcproduct-tabstyle-default div.product .woocommerce-tabs ul.tabs li.active a,
					.overlay-wcproduct-tabstyle-link div.product .woocommerce-tabs ul.tabs li.active a,
					.overlay-wcproduct-tabstyle-vert div.product .woocommerce-tabs ul.tabs li.active a,
					.overlay-wc-4 ul.products li.product .button:hover,
					.woocommerce-account .is-active a,
					.woocommerce-form-coupon-toggle a'
				),
				'declarations' => array(
					'color' => $overlay_secondary_color
				)
			) );
		endif;
	}
	// ---- Default Colors
	$setting = 'overlay-boxed-bg-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$boxed_bg_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body.overlay-site-boxed .site-boxed,
				body.overlay-site-full-width-blocked.overlay-joined-content .site-content-inner,
				body.overlay-site-full-width-blocked.overlay-break-content .content-area,
				body.overlay-site-full-width-blocked.overlay-break-content .widget-area,
				body.overlay-site-full-width-blocked.overlay-break-content .widget-area.widgets-apart .widget'
			),
			'declarations' => array(
				'background-color' => $boxed_bg_color
			)
		) );
	}
	// ---- Header
	$setting = 'overlay-header-bg-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$header_bg_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body #page header.site-header,
				.header-search-block,
                body #page .site-header .site-bar-inner,
                .site-header.overlay-header-grid .site-header-inner'
			),
			'declarations' => array(
				'background-color' => $header_bg_color
			)
		) );
	}
	$setting = 'overlay-header-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$header_font_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body #page header.site-header'
			),
			'declarations' => array(
				'color' => $header_font_color
			)
		) );
	}
	$setting = 'overlay-topbar-bg-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$topbar_bg_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header .site-bar,
				.header-search-block,
				body #page .site-header .site-bar-inner,
				.site-header .header-search-block'
			),
			'declarations' => array(
				'background-color' => $topbar_bg_color
			)
		) );
	}
	$setting = 'overlay-topbar-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$topbar_font_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header .site-bar,
				button.header-search'
			),
			'declarations' => array(
				'color' => $topbar_font_color
			)
		) );
	}
	// Only if Navigation is NOT removed
	$setting = 'overlay-nav-bg-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$nav_bg_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation,
				body.overlay-menu-dropdown .site-stick-header.stick-header.stuck #overlay-main-menu'
			),
			'declarations' => array(
				'background-color' => $nav_bg_color
			)
		) );
	}
	$setting = 'overlay-nav-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$nav_font_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation,
				button.menu-toggle'
			),
			'declarations' => array(
				'color' => $nav_font_color
			)
		) );
	}
	$setting = 'overlay-nav-drop-bg-color';
	$setting_opacity = 'overlay-nav-drop-opacity';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );
	$mod_opacity = get_theme_mod( $setting_opacity, customizer_library_get_default( $setting_opacity ) );

	if ( $mod !== customizer_library_get_default( $setting ) || $mod_opacity !== customizer_library_get_default( $setting_opacity ) ) {

		$color = sanitize_hex_color( $mod );
		$rgba_color = customizer_library_hex_to_rgb( $color );
		$opacity = esc_attr( $mod_opacity );
		
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation ul ul'
			),
			'declarations' => array(
				'background-color' => 'rgba(' . $rgba_color['r'] . ', ' . $rgba_color['g'] . ', ' . $rgba_color['b'] . ', ' . $opacity . ');'
			)
		) );
	}
	$setting = 'overlay-nav-drop-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$nav_dropfont_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation ul ul'
			),
			'declarations' => array(
				'color' => $nav_dropfont_color
			)
		) );
	}
	$setting = 'overlay-nav-selected-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$nav_selected_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation ul ul a:hover,
				.main-navigation ul ul a:focus,
				.main-navigation ul ul li.current-menu-item > a,
				.main-navigation ul ul li.current_page_item > a,
				.main-navigation ul ul li.current-menu-parent > a,
				.main-navigation ul ul li.current_page_parent > a,
				.main-navigation ul ul li.current-menu-ancestor > a,
				.main-navigation ul ul li.current_page_ancestor > a,
				.main-navigation.overlay-nav-solid a:hover,
				.main-navigation.overlay-nav-solid ul > li > a:hover,
				.main-navigation.overlay-nav-solid ul > li > a:focus,
				.main-navigation.overlay-nav-solid ul > li.current-menu-item > a,
				.main-navigation.overlay-nav-solid ul > li.current-menu-ancestor > a,
				.main-navigation.overlay-nav-solid ul > li.current-menu-parent > a,
				.main-navigation.overlay-nav-solid ul > li.current_page_parent > a,
				.main-navigation.overlay-nav-solid ul > li.current_page_ancestor > a,
				.main-navigation.overlay-nav-solid .current_page_item > a,
				.main-navigation.overlay-nav-block ul > li > a:hover span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li > a:focus span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current-menu-item > a span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current-menu-ancestor > a span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current-menu-parent > a span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current_page_parent > a span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current_page_ancestor > a span.nav-span-block,
				.main-navigation.overlay-nav-block .current_page_item > a span.nav-span-block'
			),
			'declarations' => array(
				'background-color' => $nav_selected_color
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation.overlay-nav-plain ul > li > a:hover,
				.main-navigation.overlay-nav-plain ul > li > a:focus,
				.main-navigation.overlay-nav-plain ul > li.current-menu-item > a,
				.main-navigation.overlay-nav-plain ul > li.current-menu-ancestor > a,
				.main-navigation.overlay-nav-plain ul > li.current-menu-parent > a,
				.main-navigation.overlay-nav-plain ul > li.current_page_parent > a,
				.main-navigation.overlay-nav-plain ul > li.current_page_ancestor > a,
				.main-navigation.overlay-nav-plain .current_page_item > a,
				
				.main-navigation.overlay-nav-underline ul > li > a:hover,
				.main-navigation.overlay-nav-underline ul > li > a:focus,
				.main-navigation.overlay-nav-underline ul > li.current-menu-item > a,
				.main-navigation.overlay-nav-underline ul > li.current-menu-ancestor > a,
				.main-navigation.overlay-nav-underline ul > li.current-menu-parent > a,
				.main-navigation.overlay-nav-underline ul > li.current_page_parent > a,
				.main-navigation.overlay-nav-underline ul > li.current_page_ancestor > a,
				.main-navigation.overlay-nav-underline .current_page_item > a'
			),
			'declarations' => array(
				'color' => $nav_selected_color . ' !important'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation.overlay-nav-underline ul > li > a:hover,
				.main-navigation.overlay-nav-underline ul > li > a:focus,
				.main-navigation.overlay-nav-underline ul > li.current-menu-item > a,
				.main-navigation.overlay-nav-underline ul > li.current-menu-ancestor > a,
				.main-navigation.overlay-nav-underline ul > li.current-menu-parent > a,
				.main-navigation.overlay-nav-underline ul > li.current_page_parent > a,
				.main-navigation.overlay-nav-underline ul > li.current_page_ancestor > a,
				.main-navigation.overlay-nav-underline .current_page_item > a'
			),
			'declarations' => array(
				'box-shadow' => '0 -4px 0 ' . $nav_selected_color . ' inset'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation.overlay-nav-plain ul ul li a:hover,
				.main-navigation.overlay-nav-underline ul ul li a:hover'
			),
			'declarations' => array(
				'color' => '#FFF !important'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'#site-navigation.main-navigation ul > li > a:hover,
				#site-navigation.main-navigation ul > li.current-menu-item > a,
				#site-navigation.main-navigation ul > li.current-menu-ancestor > a,
				#site-navigation.main-navigation ul > li.current-menu-parent > a,
				#site-navigation.main-navigation ul > li.current_page_parent > a,
				#site-navigation.main-navigation ul > li.current_page_ancestor > a,
				#site-navigation.main-navigation .current_page_item > a,
				#site-navigation.main-navigation ul > li.current-menu-item > a span.nav-span-block,
				#site-navigation.main-navigation ul > li.current-menu-ancestor > a span.nav-span-block,
				#site-navigation.main-navigation ul > li.current-menu-parent > a span.nav-span-block,
				#site-navigation.main-navigation ul > li.current_page_parent > a span.nav-span-block,
				#site-navigation.main-navigation ul > li.current_page_ancestor > a span.nav-span-block,
				#site-navigation.main-navigation .current_page_item > a span.nav-span-block,
				#site-navigation.main-navigation.overlay-nav-block ul > li > a:hover span.nav-span-block,
				#site-navigation.main-navigation.overlay-nav-plain ul li a:hover,
				#site-navigation.main-navigation.overlay-nav-solid ul li a:hover,
				#site-navigation.main-navigation.overlay-nav-underline ul li a:hover,
				#site-navigation.main-navigation.overlay-nav-blocks ul li a:hover,
				#site-navigation.main-navigation.overlay-nav-blocks ul li a:hover span.nav-span-block'
			),
			'declarations' => array(
				'color' => $nav_selected_color . ' !important'
			),
			'media' => esc_attr( $overlay_resp_menu )
		) );
	}
	$setting = 'overlay-nav-selected-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_navselected_fontcolor = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation ul ul a:hover,
				.main-navigation ul ul a:focus,
				.main-navigation ul ul li.current-menu-item > a,
				.main-navigation ul ul li.current_page_item > a,
				.main-navigation ul ul li.current-menu-parent > a,
				.main-navigation ul ul li.current_page_parent > a,
				.main-navigation ul ul li.current-menu-ancestor > a,
				.main-navigation ul ul li.current_page_ancestor > a,
				.main-navigation.overlay-nav-plain ul ul li a:hover,
				.main-navigation.overlay-nav-underline ul ul li a:hover,
				.main-navigation.overlay-nav-solid ul a:hover,
				.main-navigation.overlay-nav-solid ul > li > a:hover,
				.main-navigation.overlay-nav-solid ul > li > a:focus,
				.main-navigation.overlay-nav-solid ul > li.current-menu-item > a,
				.main-navigation.overlay-nav-solid ul > li.current-menu-ancestor > a,
				.main-navigation.overlay-nav-solid ul > li.current-menu-parent > a,
				.main-navigation.overlay-nav-solid ul > li.current_page_parent > a,
				.main-navigation.overlay-nav-solid ul > li.current_page_ancestor > a,
				.main-navigation.overlay-nav-solid .current_page_item > a,
				.main-navigation.overlay-nav-block ul > li > a:hover span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li > a:focus span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current-menu-item > a span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current-menu-ancestor > a span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current-menu-parent > a span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current_page_parent > a span.nav-span-block,
				.main-navigation.overlay-nav-block ul > li.current_page_ancestor > a span.nav-span-block,
				.main-navigation.overlay-nav-block .current_page_item > a span.nav-span-block'
			),
			'declarations' => array(
				'color' => $overlay_navselected_fontcolor . ' !important'
			)
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.main-navigation.overlay-nav-plain ul > li > a:hover,
				.main-navigation.overlay-nav-plain ul > li > a:focus,
				.main-navigation.overlay-nav-plain ul > li.current-menu-item > a,
				.main-navigation.overlay-nav-plain ul > li.current-menu-ancestor > a,
				.main-navigation.overlay-nav-plain ul > li.current-menu-parent > a,
				.main-navigation.overlay-nav-plain ul > li.current_page_parent > a,
				.main-navigation.overlay-nav-plain ul > li.current_page_ancestor > a,
				.main-navigation.overlay-nav-plain .current_page_item > a,
				
				.main-navigation.overlay-nav-underline ul > li > a:hover,
				.main-navigation.overlay-nav-underline ul > li > a:focus,
				.main-navigation.overlay-nav-underline ul > li.current-menu-item > a,
				.main-navigation.overlay-nav-underline ul > li.current-menu-ancestor > a,
				.main-navigation.overlay-nav-underline ul > li.current-menu-parent > a,
				.main-navigation.overlay-nav-underline ul > li.current_page_parent > a,
				.main-navigation.overlay-nav-underline ul > li.current_page_ancestor > a,
				.main-navigation.overlay-nav-underline .current_page_item > a'
			),
			'declarations' => array(
				'color' => $overlay_navselected_fontcolor . ' !important'
			)
		) );
	}
	
	$setting = 'overlay-site-title-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$sitetitle_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-title a'
			),
			'declarations' => array(
				'color' => $sitetitle_color
			)
		) );
	}
	$setting = 'overlay-site-tagline-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$sitetagline_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-description'
			),
			'declarations' => array(
				'color' => $sitetagline_color
			)
		) );
	}

	// ---- Content
	$setting = 'overlay-content-title-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$page_title_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-h-title'
			),
			'declarations' => array(
				'color' => $page_title_color
			)
		) );
	}
	$setting = 'overlay-content-bc-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$page_bc_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-breadcrumbs'
			),
			'declarations' => array(
				'color' => $page_bc_color
			)
		) );
	}
	$setting = 'overlay-content-head-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$page_heading_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-content-inner h1,
				.site-content-inner h2,
				.site-content-inner h3,
				.site-content-inner h4,
				.site-content-inner h5,
				.site-content-inner h6,
				.widget-area .widget-title'
			),
			'declarations' => array(
				'color' => $page_heading_color
			)
		) );
	}
	$setting = 'overlay-content-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$page_font_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-content-inner'
			),
			'declarations' => array(
				'color' => $page_font_color
			)
		) );
	}
	$setting = 'overlay-widget-head-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$page_wt_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.widget-area .widget-title'
			),
			'declarations' => array(
				'color' => $page_wt_color
			)
		) );
	}
	$setting = 'overlay-widget-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$page_wa_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.widget-area'
			),
			'declarations' => array(
				'color' => $page_wa_color
			)
		) );
	}
	$setting = 'overlay-content-link-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$page_cl_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-content-inner a,
				.overlay-breadcrumbs a,
				.overlay-pagetitle-cheader .overlay-breadcrumbs a'
			),
			'declarations' => array(
				'color' => $page_cl_color
			)
		) );
	}
	$setting = 'overlay-content-link-hover-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$page_clh_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-content-inner a:hover,
				.overlay-breadcrumbs a:hover,
				.overlay-pagetitle-cheader .overlay-breadcrumbs a:hover'
			),
			'declarations' => array(
				'color' => $page_clh_color
			)
		) );
	}
	$setting = 'overlay-widgets-link-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$page_cl_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.widget-area a'
			),
			'declarations' => array(
				'color' => $page_cl_color
			)
		) );
	}
	$setting = 'overlay-widgets-link-hover-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$page_clh_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.widget-area a:hover'
			),
			'declarations' => array(
				'color' => $page_clh_color
			)
		) );
	}
	// ---- Footer
	$setting = 'overlay-footer-bg-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$footer_bg_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body.overlay-site-full-width .site-footer,
				body.overlay-site-boxed .site-footer,
				body.overlay-site-full-width-blocked .site-footer'
			),
			'declarations' => array(
				'background-color' => $footer_bg_color
			)
		) );
	}
	$setting = 'overlay-footer-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$footer_font_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .site-footer-inner'
			),
			'declarations' => array(
				'color' => $footer_font_color
			)
		) );
	}
	$setting = 'overlay-footer-title-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$footer_title_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .widget-title'
			),
			'declarations' => array(
				'color' => $footer_title_color
			)
		) );
	}
	$setting = 'overlay-footer-social-icons-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$footer_si_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-footer-social .site-footer-icons .social-icon'
			),
			'declarations' => array(
				'color' => $footer_si_color
			)
		) );
	}
	$setting = 'overlay-footer-link-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$footerl_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .site-footer-inner a'
			),
			'declarations' => array(
				'color' => $footerl_color
			)
		) );
	}
	$setting = 'overlay-footer-link-hover-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$footerlh_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .site-footer-inner a:hover'
			),
			'declarations' => array(
				'color' => $footerlh_color
			)
		) );
	}
	$setting = 'overlay-bottombar-bg-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$bottombar_bg_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .site-bar,
				.site-footer .site-bar .site-bar-inner'
			),
			'declarations' => array(
				'background-color' => $bottombar_bg_color
			)
		) );
	}
	$setting = 'overlay-bottombar-font-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$bottombar_font_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .site-bar'
			),
			'declarations' => array(
				'color' => $bottombar_font_color
			)
		) );
	}
	$setting = 'overlay-bottombar-link-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$bottombarl_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .site-bar-text a,
				.site-footer .site-bar .site-bar-inner a'
			),
			'declarations' => array(
				'color' => $bottombarl_color
			)
		) );
	}
	$setting = 'overlay-bottombar-link-hover-color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$bottombarlh_color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer .site-bar-text a:hover,
				.site-footer .site-bar .social-icon:hover,
				.site-footer #overlay-bottombar-menu li a:hover'
			),
			'declarations' => array(
				'color' => $bottombarlh_color
			)
		) );
	}
	// --------- Color Settings

	// --------- Mobile Settings
	$setting = 'overlay-onmobile-remove-topbar';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_mobile_topbar = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header .site-bar'
			),
			'declarations' => array(
				'display' => 'none !important'
			),
			'media' => '(max-width: ' . esc_attr( $overlay_resp_mobile ) . 'px)'
		) );
	}
	$setting = 'overlay-onmobile-remove-headsearch';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_mobile_topbar = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header .site-bar button.header-search,
				.header-search-block, .header-search-overlay'
			),
			'declarations' => array(
				'display' => 'none !important'
			),
			'media' => '(max-width: ' . esc_attr( $overlay_resp_mobile ) . 'px)'
		) );
	}
	$setting = 'overlay-onmobile-remove-sidesocial';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_mobile_topbar = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.overlay-side-social'
			),
			'declarations' => array(
				'display' => 'none !important'
			),
			'media' => '(max-width: ' . esc_attr( $overlay_resp_mobile ) . 'px)'
		) );
	}
	$setting = 'overlay-onmobile-remove-stickyheader';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_mobile_topbar = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-stick-header.stick-header.stuck'
			),
			'declarations' => array(
				'position' => 'relative !important',
				'top' => '0 !important'
			),
			'media' => '(max-width: ' . esc_attr( $overlay_resp_mobile ) . 'px)'
		) );
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-stick-header.stick-header.stuck .site-stick-inner'
			),
			'declarations' => array(
				'display' => 'block !important'
			),
			'media' => '(max-width: ' . esc_attr( $overlay_resp_mobile ) . 'px)'
		) );
	}
	$setting = 'overlay-mobilemenu-btn-size';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_mobnavbtn_font_size = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'button.menu-toggle'
			),
			'declarations' => array(
				'font-size' => $overlay_mobnavbtn_font_size . 'px'
			),
			'media' => esc_attr( $overlay_resp_menu )
		) );
	}
	// --------- Mobile Settings
	$setting = 'overlay-bg-image-header-clear';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_mobile_topbar = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-header,
				.site-bar-inner'
			),
			'declarations' => array(
				'background' => 'none !important'
			)
		) );
	}
	$setting = 'overlay-bg-image-footer-clear';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$overlay_mobile_topbar = esc_attr( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.site-footer,
				.site-footer .site-bar'
			),
			'declarations' => array(
				'background' => 'none !important'
			)
		) );
	}
	
}
endif;

add_action( 'customizer_library_styles', 'overlay_customizer_library_build_styles' );

if ( ! function_exists( 'overlay_customizer_library_styles' ) ) :
/**
 * Generates the style tag and CSS needed for the theme options.
 *
 * By using the "Customizer_Library_Styles" filter, different components can print CSS in the header.
 * It is organized this way to ensure there is only one "style" tag.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function overlay_customizer_library_styles() {

	do_action( 'customizer_library_styles' );

	// Echo the rules
	$css = Customizer_Library_Styles()->build();

	if ( ! empty( $css ) ) {
		wp_register_style( 'overlay-customizer-custom-css', false );
		wp_enqueue_style( 'overlay-customizer-custom-css' );
 		wp_add_inline_style( 'overlay-customizer-custom-css', $css );
	}
}
endif;

add_action( 'wp_enqueue_scripts', 'overlay_customizer_library_styles', 11 );