/**
 * Customizer Custom Functionality
 */
( function( $ ) {
    $( document ).ready( function ($) {
        // Range Input Value Display
        $( document ).on( 'input change', 'input[type="range"]', function() {
            $( this ).prev().find( '.rngval' ).html( $(this).val() );
        });

        // Show / Hide Uploaded Logo Settings
        overlay_uploaded_logo_check();
        $( '#customize-control-overlay-uploaded-logo input[type=checkbox]' ).on( 'change', function() {
            overlay_uploaded_logo_check();
        });
        function overlay_uploaded_logo_check() {
            if ( $( '#customize-control-overlay-uploaded-logo input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-logo-max-width' ).show();
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-add-back-title' ).show();
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-add-back-tagline' ).show();
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-logo-align-side' ).show();
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-logo-alignment' ).show();
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-title-desc-spacing' ).show();
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-logo-title-spacing' ).show();
                overlay_logo_sidebyside_check();
            } else {
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-logo-max-width' ).hide();
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-add-back-title' ).hide();
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-add-back-tagline' ).hide();
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-logo-align-side' ).hide();
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-logo-alignment' ).hide();
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-title-desc-spacing' ).hide();
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-logo-title-spacing' ).hide();
                overlay_logo_sidebyside_check();
            }
        }
        $( '#customize-control-overlay-logo-align-side input[type=checkbox]' ).on( 'change', function() {
            overlay_logo_sidebyside_check();
        });
        function overlay_logo_sidebyside_check() {
            if ( $( '#customize-control-overlay-uploaded-logo input[type=checkbox]' ).is( ':checked' ) && $( '#customize-control-overlay-logo-align-side input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-logo-alignment' ).show();
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-logo-title-spacing' ).show();
            } else {
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-logo-alignment' ).hide();
                $( '#sub-accordion-section-title_tagline #customize-control-overlay-logo-title-spacing' ).hide();
            }
        }

        // Show / Hide Google/Websafe Font Settings
        overlay_websafe_check();
        $( '#customize-control-overlay-disable-google-font input[type=checkbox]' ).on( 'change', function() {
            overlay_websafe_check();
        });
        function overlay_websafe_check() {
            if ( $( '#customize-control-overlay-disable-google-font input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-overlay-panel-font-settings-default #customize-control-overlay-body-font' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-default #customize-control-overlay-heading-font' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-default #customize-control-overlay-body-font-websafe' ).show();
                $( '#sub-accordion-section-overlay-panel-font-settings-default #customize-control-overlay-heading-font-websafe' ).show();
                
                $( '#sub-accordion-section-overlay-panel-font-settings-title-tagline #customize-control-overlay-title-font' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-title-tagline #customize-control-overlay-tagline-font' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-title-tagline #customize-control-overlay-title-font-websafe' ).show();
                $( '#sub-accordion-section-overlay-panel-font-settings-title-tagline #customize-control-overlay-tagline-font-websafe' ).show();

                $( '#sub-accordion-section-overlay-panel-font-settings-section-header #customize-control-overlay-main-nav-font' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-header #customize-control-overlay-main-nav-font-websafe' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-font-settings-default #customize-control-overlay-body-font-websafe' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-default #customize-control-overlay-heading-font-websafe' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-default #customize-control-overlay-body-font' ).show();
                $( '#sub-accordion-section-overlay-panel-font-settings-default #customize-control-overlay-heading-font' ).show();
                
                $( '#sub-accordion-section-overlay-panel-font-settings-title-tagline #customize-control-overlay-title-font' ).show();
                $( '#sub-accordion-section-overlay-panel-font-settings-title-tagline #customize-control-overlay-tagline-font' ).show();
                $( '#sub-accordion-section-overlay-panel-font-settings-title-tagline #customize-control-overlay-title-font-websafe' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-title-tagline #customize-control-overlay-tagline-font-websafe' ).hide();

                $( '#sub-accordion-section-overlay-panel-font-settings-section-header #customize-control-overlay-main-nav-font-websafe' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-header #customize-control-overlay-main-nav-font' ).show();
            }
        }

        // Site Breakpoints
        var overlay_c_breakpoints = $( '#customize-control-overlay-menu-breakat select' ).val();
        overlay_breakpoint_value_check( overlay_c_breakpoints );
        $( '#customize-control-overlay-menu-breakat select' ).on( 'change', function() {
            var overlay_c_break_value = $( this ).val();
            overlay_breakpoint_value_check( overlay_c_break_value );
        } );
        function overlay_breakpoint_value_check( overlay_c_break_value ) {
            if ( overlay_c_break_value == 'custom' ) {
                $( '#sub-accordion-section-overlay-panel-settings-breakpoints #customize-control-overlay-menu-custom-breakat' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-settings-breakpoints #customize-control-overlay-menu-custom-breakat' ).hide();
            }
        }

        // Site Layout
        var overlay_site_layout = $( '#customize-control-overlay-site-layout select' ).val();
        overlay_sitelayout_value_check( overlay_site_layout );
        $( '#customize-control-overlay-site-layout select' ).on( 'change', function() {
            var overlay_site_layout_value = $( this ).val();
            overlay_sitelayout_value_check( overlay_site_layout_value );
        } );
        function overlay_sitelayout_value_check( overlay_site_layout_value ) {
            if ( overlay_site_layout_value == 'overlay-site-boxed' ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-site #customize-control-overlay-break-content' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-site #customize-control-overlay-break-widgets' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-content #customize-control-overlay-content-divider-line' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-break' ).hide();
                $( '#sub-accordion-section-colors #customize-control-overlay-boxed-bg-color' ).show();
                $( '#sub-accordion-section-background_image #customize-control-overlay-bg-image-header-clear' ).hide();
                $( '#sub-accordion-section-background_image #customize-control-overlay-bg-image-footer-clear' ).hide();
            } else if ( overlay_site_layout_value == 'overlay-site-full-width-blocked' ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-site #customize-control-overlay-break-content' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-site #customize-control-overlay-break-widgets' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-content #customize-control-overlay-content-divider-line' ).hide();
                $( '#sub-accordion-section-colors #customize-control-overlay-boxed-bg-color' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-break' ).show();
                $( '#sub-accordion-section-background_image #customize-control-overlay-bg-image-header-clear' ).show();
                $( '#sub-accordion-section-background_image #customize-control-overlay-bg-image-footer-clear' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-settings-section-site #customize-control-overlay-break-content' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-site #customize-control-overlay-break-widgets' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-content #customize-control-overlay-content-divider-line' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-break' ).hide();
                $( '#sub-accordion-section-colors #customize-control-overlay-boxed-bg-color' ).hide();
                $( '#sub-accordion-section-background_image #customize-control-overlay-bg-image-header-clear' ).show();
                $( '#sub-accordion-section-background_image #customize-control-overlay-bg-image-footer-clear' ).show();
            }
        }

        // Show / Hide Topbar
        overlay_topbar_check();
        $( '#customize-control-overlay-remove-topbar input[type=checkbox]' ).on( 'change', function() {
            overlay_topbar_check();
        });
        function overlay_topbar_check() {
            if ( $( '#customize-control-overlay-remove-topbar input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-topbar-layout' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-topbar-switch' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-topbar-spacing-top' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-topbar-spacing-bottom' ).hide();
            } else {
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-topbar-layout' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-topbar-switch' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-topbar-spacing-top' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-topbar-spacing-bottom' ).show();
            }
        }

        // Site Header Check
        var overlay_site_header = $( '#customize-control-overlay-header-layout select' ).val();
        overlay_siteheader_value_check( overlay_site_header );
        $( '#customize-control-overlay-header-layout select' ).on( 'change', function() {
            var overlay_site_header_value = $( this ).val();
            overlay_siteheader_value_check( overlay_site_header_value );
        } );
        function overlay_siteheader_value_check( overlay_site_header_value ) {
            if ( overlay_site_header_value == 'header-one' ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-align-nav-full-width' ).hide();
            } else if ( overlay_site_header_value == 'header-two' ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-align-nav-full-width' ).hide();
            } else {
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-align-nav-full-width' ).show();
            }
        }
        // Top Bar WC cart
        overlay_topbar_wc_check();
        $( '#customize-control-overlay-header-add-topcart input[type=checkbox]' ).on( 'change', function() {
            overlay_topbar_wc_check();
        });
        function overlay_topbar_wc_check() {
            if ( $( '#customize-control-overlay-header-add-topcart input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-header-add-drop-topcart' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-header-add-drop-topcart' ).hide();
            }
        }

        // Show / Hide Uploaded Logo Settings
        overlay_search_enabled_check();
        $( '#customize-control-overlay-remove-header-search input[type=checkbox]' ).on( 'change', function() {
            overlay_search_enabled_check();
        });
        function overlay_search_enabled_check() {
            if ( $( '#customize-control-overlay-remove-header-search input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-header-search-type' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-search-shortcode' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-search-shortcode-help' ).hide();
            } else {
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-header-search-type' ).show();
                var overlay_tbsearch = $( '#customize-control-overlay-header-search-type select' ).val();
                overlay_tbsearch_value_check( overlay_tbsearch );
            }
        }
        var overlay_tbsearch = $( '#customize-control-overlay-header-search-type select' ).val();
        overlay_tbsearch_value_check( overlay_tbsearch );
        $( '#customize-control-overlay-header-search-type select' ).on( 'change', function() {
            var overlay_tbsearch_value = $( this ).val();
            overlay_tbsearch_value_check( overlay_tbsearch_value );
        } );
        function overlay_tbsearch_value_check( overlay_tbsearch_value ) {
            if ( $( '#customize-control-overlay-remove-header-search input[type=checkbox]' ).not( ':checked' ) && overlay_tbsearch_value == 'overlay-search-plugin-shortcode' ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-search-shortcode' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-search-shortcode-help' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-search-shortcode' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header #customize-control-overlay-search-shortcode-help' ).hide();
            }
        }

        // Show / Hide Mobile Menu Icon Settings
        overlay_mobileicon_check();
        $( '#customize-control-overlay-mobile-menu-addicon input[type=checkbox]' ).on( 'change', function() {
            overlay_mobileicon_check();
        });
        function overlay_mobileicon_check() {
            if ( $( '#customize-control-overlay-mobile-menu-addicon input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-overlay-panel-edit-text-section-topbar #customize-control-overlay-mobile-menu-icon' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-edit-text-section-topbar #customize-control-overlay-mobile-menu-icon' ).hide();
            }
        }

        // Show / Hide Advanced Navigation Settings
        overlay_nav_advanced_check();
        $( '#customize-control-overlay-nav-advanced-set input[type=checkbox]' ).on( 'change', function() {
            overlay_nav_advanced_check();
        });
        function overlay_nav_advanced_check() {
            if ( $( '#customize-control-overlay-nav-advanced-set input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-header-nav-spacing-top' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-header-nav-spacing-bottom' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-header-nav-spacing-side' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-header-nav-item-spacing' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-header-nav-drop-side-pad' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-header-nav-drop-topbot-pad' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-nav-drop-minwidth' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-nav-drop-negmargin' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-header-nav-spacing-top' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-header-nav-spacing-bottom' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-header-nav-spacing-side' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-header-nav-item-spacing' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-header-nav-drop-side-pad' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-header-nav-drop-topbot-pad' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-nav-drop-minwidth' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-nav #customize-control-overlay-nav-drop-negmargin' ).hide();
            }
        }
        // Show / Hide Custom Content Area Padding Settings
        overlay_content_cpadding_check();
        $( '#customize-control-overlay-content-advanced-set input[type=checkbox]' ).on( 'change', function() {
            overlay_content_cpadding_check();
        });
        function overlay_content_cpadding_check() {
            if ( $( '#customize-control-overlay-content-advanced-set input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-content #customize-control-overlay-content-padding-top' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-content #customize-control-overlay-content-padding-left' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-content #customize-control-overlay-content-padding-right' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-content #customize-control-overlay-content-padding-bottom' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-settings-section-content #customize-control-overlay-content-padding-top' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-content #customize-control-overlay-content-padding-left' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-content #customize-control-overlay-content-padding-right' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-content #customize-control-overlay-content-padding-bottom' ).hide();
            }
        }
        // Show / Hide Advanced Widget Area Settings
        overlay_widget_cpadding_check();
        $( '#customize-control-overlay-widget-advanced-set input[type=checkbox]' ).on( 'change', function() {
            overlay_widget_cpadding_check();
        });
        function overlay_widget_cpadding_check() {
            if ( $( '#customize-control-overlay-widget-advanced-set input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-widget #customize-control-overlay-widget-area-size' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-widget #customize-control-overlay-widget-padding-top' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-widget #customize-control-overlay-widget-padding-left' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-widget #customize-control-overlay-widget-padding-right' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-widget #customize-control-overlay-widget-padding-bottom' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-settings-section-widget #customize-control-overlay-widget-area-size' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-widget #customize-control-overlay-widget-padding-top' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-widget #customize-control-overlay-widget-padding-left' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-widget #customize-control-overlay-widget-padding-right' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-widget #customize-control-overlay-widget-padding-bottom' ).hide();
            }
        }

        // Header Media / Slider Check
        var overlay_headermedia = $( '#customize-control-overlay-site-media-type select' ).val();
        overlay_mediaslider_value_check( overlay_headermedia );
        $( '#customize-control-overlay-site-media-type select' ).on( 'change', function() {
            var overlay_headermedia_value = $( this ).val();
            overlay_mediaslider_value_check( overlay_headermedia_value );
        } );
        function overlay_mediaslider_value_check( overlay_headermedia_value ) {
            if ( overlay_headermedia_value == 'overlay-site-media-shortcode' ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-none' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-cheader' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-slider' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-fimage' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-site-media-fimage-size' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-sitemedia-display-all' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-sitemedia-fullwidth' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-imgoverlay' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-shortcode' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-enable-basic-slider' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-sitemedia-shortcode' ).show();
            } else if ( overlay_headermedia_value == 'overlay-site-media-fimage' ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-none' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-slider' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-shortcode' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-sitemedia-shortcode' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-cheader' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-sitemedia-display-all' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-enable-basic-slider' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-site-media-fimage-size' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-sitemedia-fullwidth' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-fimage' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-imgoverlay' ).show();
            } else if ( overlay_headermedia_value == 'overlay-site-media-media' ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-none' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-slider' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-shortcode' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-sitemedia-shortcode' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-fimage' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-site-media-fimage-size' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-enable-basic-slider' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-sitemedia-display-all' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-sitemedia-fullwidth' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-cheader' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-imgoverlay' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-sitemedia-display-all' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-cheader' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-slider' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-shortcode' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-sitemedia-shortcode' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-fimage' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-site-media-fimage-size' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-sitemedia-fullwidth' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-enable-basic-slider' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-imgoverlay' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-header-media #customize-control-overlay-noteon-media-none' ).show();
            }
        }

        // Page Title Check
        var overlay_pagetitle = $( '#customize-control-overlay-pagetitle-layout select' ).val();
        overlay_pagetitle_value_check( overlay_pagetitle );
        $( '#customize-control-overlay-pagetitle-layout select' ).on( 'change', function() {
            var overlay_pagetitle_value = $( this ).val();
            overlay_pagetitle_value_check( overlay_pagetitle_value );
        } );
        function overlay_pagetitle_value_check( overlay_pagetitle_value ) {
            if ( overlay_pagetitle_value == 'overlay-pagetitle-cheader' ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-title #customize-control-overlay-noteon-pagetitle-cheader' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-settings-section-title #customize-control-overlay-noteon-pagetitle-cheader' ).hide();
            }
        }

        // Blog Layout Check
        var overlay_blog = $( '#customize-control-overlay-blog-list-layout select' ).val();
        overlay_blog_value_check( overlay_blog );
        $( '#customize-control-overlay-blog-list-layout select' ).on( 'change', function() {
            var overlay_blog_value = $( this ).val();
            overlay_blog_value_check( overlay_blog_value );
        } );
        function overlay_blog_value_check( overlay_blog_value ) {
            if ( overlay_blog_value == 'overlay-blog-tile' ) {
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-vert-center-items' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-list-post-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-grid-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-grid-cols' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-top-center' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-tile-anim' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-img-shadow' ).hide();
            } else if ( overlay_blog_value == 'overlay-blog-grid' ) {
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-vert-center-items' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-list-post-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-grid-cols' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-grid-space' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-top-center' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-tile-anim' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-img-shadow' ).hide();
            } else if ( overlay_blog_value == 'overlay-blog-top' ) {
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-vert-center-items' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-list-post-space' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-grid-cols' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-grid-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-top-center' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-tile-anim' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-img-shadow' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-grid-cols' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-grid-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-top-center' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-vert-center-items' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-list-post-space' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-tile-anim' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-img-shadow' ).show();
            }
        }
        // Show / Hide Blog Extra Search Settings
        overlay_blog_search_check();
        $( '#customize-control-overlay-blog-list-search input[type=checkbox]' ).on( 'change', function() {
            overlay_blog_search_check();
        });
        function overlay_blog_search_check() {
            if ( $( '#customize-control-overlay-blog-list-search input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-search-list-layout' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-search-list-layout' ).hide();
            }
        }
        // Show / Hide Blog Image Select
        var overlay_img_select = $( '#customize-control-overlay-blog-list-img-prop select' ).val();
        overlay_img_select_value_check( overlay_img_select );
        $( '#customize-control-overlay-blog-list-img-prop select' ).on( 'change', function() {
            var overlay_img_select_value = $( this ).val();
            overlay_img_select_value_check( overlay_img_select_value );
        } );
        function overlay_img_select_value_check( overlay_img_select_value ) {
            if ( overlay_img_select_value == 'post-thumbnail' ) {
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-list-img-cut' ).hide();
            } else {
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-list-img-cut' ).show();
            }
        }
        // Show / Hide Advanced Blog Settings
        overlay_blog_advanced_check();
        $( '#customize-control-overlay-blog-advanced-set input[type=checkbox]' ).on( 'change', function() {
            overlay_blog_advanced_check();
        });
        function overlay_blog_advanced_check() {
            if ( $( '#customize-control-overlay-blog-advanced-set input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-list-imgcont-size' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-list-title-fweight' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-list-title-space' ).show();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-list-font-size' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-list-imgcont-size' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-list-title-fweight' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-list-title-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-blog-settings-list #customize-control-overlay-blog-list-font-size' ).hide();
            }
        }

        // Show / Hide footer layout settings
        var overlay_footer_select_value = $( '#customize-control-overlay-footer-layout select' ).val();
        overlay_footer_value_check( overlay_footer_select_value );

        $( '#customize-control-overlay-footer-layout select' ).on( 'change', function() {
            var overlay_selected_footer = $( this ).val();
            overlay_footer_value_check( overlay_selected_footer );
            overlay_footer_custom_check();
        } );

        function overlay_footer_value_check( overlay_selected_footer ) {
            if ( overlay_selected_footer == 'footer-none' ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-default' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-social' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-split' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-custom-cols' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-widget-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footalign' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-social-menuitems-one' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-remove-social' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-style' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-size' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footdivide-style' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-size' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-weight' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-uc' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-top-pad' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-bottom-pad' ).hide();
                $( '#sub-accordion-section-overlay-panel-colors-section-footer #customize-control-overlay-footer-title-font-color' ).hide();
                $( '#sub-accordion-section-overlay-panel-colors-section-footer #customize-control-overlay-footer-social-icons-color' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-none' ).show();
                $( '#sub-accordion-panel-overlay-panel-font-settings #accordion-section-overlay-panel-font-settings-section-footer' ).addClass( 'overlay-remove-panel' );
                overlay_footer_custom_check();
            } else if ( overlay_selected_footer == 'footer-basic' ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-bottombar-layout' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-default' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-social' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-split' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-none' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-social' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-custom-cols' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-widget-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-social-menuitems-one' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-style' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-size' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footalign' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-remove-botbar-social' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footdivide-style' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-add-botbar-fullcart' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-size' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-weight' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-uc' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-colors-section-footer #customize-control-overlay-footer-title-font-color' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-lheight' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-top-pad' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-bottom-pad' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-remove-social' ).show();
                $( '#sub-accordion-section-overlay-panel-colors-section-footer #customize-control-overlay-footer-social-icons-color' ).hide();
                $( '#sub-accordion-panel-overlay-panel-font-settings #accordion-section-overlay-panel-font-settings-section-footer' ).removeClass( 'overlay-remove-panel' );
                overlay_footer_custom_check();
            } else if ( overlay_selected_footer == 'footer-social' ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-default' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-social' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-split' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-none' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-custom-cols' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-widget-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footalign' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-social-menuitems-one' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footdivide-style' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-size' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-weight' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-uc' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-colors-section-footer #customize-control-overlay-footer-title-font-color' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-top-pad' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-bottom-pad' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-style' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-size' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-space' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-social' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-remove-social' ).show();
                $( '#sub-accordion-section-overlay-panel-colors-section-footer #customize-control-overlay-footer-social-icons-color' ).show();
                $( '#sub-accordion-panel-overlay-panel-font-settings #accordion-section-overlay-panel-font-settings-section-footer' ).removeClass( 'overlay-remove-panel' );
                overlay_footer_custom_check();
            } else if ( overlay_selected_footer == 'footer-social-two' ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-default' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-social' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-split' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-none' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-custom-cols' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-widget-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footalign' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footdivide-style' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-size' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-weight' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-uc' ).hide();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-colors-section-footer #customize-control-overlay-footer-title-font-color' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-social-menuitems-one' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-top-pad' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-bottom-pad' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-style' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-size' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-space' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-social' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-remove-social' ).show();
                $( '#sub-accordion-section-overlay-panel-colors-section-footer #customize-control-overlay-footer-social-icons-color' ).show();
                $( '#sub-accordion-panel-overlay-panel-font-settings #accordion-section-overlay-panel-font-settings-section-footer' ).removeClass( 'overlay-remove-panel' );
                overlay_footer_custom_check();
            } else if ( overlay_selected_footer == 'footer-split' ) {
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-default' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-social' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-none' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-custom-cols' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-remove-social' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-style' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-size' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-social-menuitems-one' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-top-pad' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-bottom-pad' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-split' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-widget-space' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footalign' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footdivide-style' ).show();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-size' ).show();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-weight' ).show();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-uc' ).show();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-space' ).show();
                $( '#sub-accordion-section-overlay-panel-colors-section-footer #customize-control-overlay-footer-title-font-color' ).show();
                $( '#sub-accordion-section-overlay-panel-colors-section-footer #customize-control-overlay-footer-social-icons-color' ).hide();
                $( '#sub-accordion-panel-overlay-panel-font-settings #accordion-section-overlay-panel-font-settings-section-footer' ).removeClass( 'overlay-remove-panel' );
                overlay_footer_custom_check();
            } else {
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-social' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-split' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-none' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-remove-social' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-style' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-size' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-icon-space' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-social-menuitems-one' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-top-pad' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-bottom-pad' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-noteon-footer-default' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-custom-cols' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-widget-space' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footalign' ).show();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footdivide-style' ).show();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-size' ).show();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-weight' ).show();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-uc' ).show();
                $( '#sub-accordion-section-overlay-panel-font-settings-section-footer #customize-control-overlay-footer-title-space' ).show();
                $( '#sub-accordion-section-overlay-panel-colors-section-footer #customize-control-overlay-footer-title-font-color' ).show();
                $( '#sub-accordion-section-overlay-panel-colors-section-footer #customize-control-overlay-footer-social-icons-color' ).hide();
                $( '#sub-accordion-panel-overlay-panel-font-settings #accordion-section-overlay-panel-font-settings-section-footer' ).removeClass( 'overlay-remove-panel' );
                overlay_footer_custom_check();
            }
        }

        $( '#customize-control-overlay-footer-custom-cols select, #customize-control-overlay-footer-customize input[type=checkbox]' ).on( 'change', function() {
            overlay_footer_custom_check();
        });

        function overlay_footer_custom_check() {
            if ( $( '#customize-control-overlay-footer-layout select' ).val() == 'footer-default' && $( '#customize-control-overlay-footer-customize input[type=checkbox]' ).is( ':checked' ) ) {
                if ( $( '#customize-control-overlay-footer-custom-cols select' ).val() == 'overlay-footer-custom-cols-1' ) {
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-1' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-center-col-1' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-2' ).hide();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-3' ).hide();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-4' ).hide();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-5' ).hide();
                } else if ( $( '#customize-control-overlay-footer-custom-cols select' ).val() == 'overlay-footer-custom-cols-2' ) {
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-1' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-center-col-1' ).hide();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-2' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-3' ).hide();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-4' ).hide();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-5' ).hide();
                } else if ( $( '#customize-control-overlay-footer-custom-cols select' ).val() == 'overlay-footer-custom-cols-4' ) {
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-1' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-center-col-1' ).hide();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-2' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-3' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-4' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-5' ).hide();
                } else if ( $( '#customize-control-overlay-footer-custom-cols select' ).val() == 'overlay-footer-custom-cols-5' ) {
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-1' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-center-col-1' ).hide();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-2' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-3' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-4' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-5' ).show();
                } else {
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-1' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-center-col-1' ).hide();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-2' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-3' ).show();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-4' ).hide();
                    $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-5' ).hide();
                }
            } else {
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-1' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-center-col-1' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-2' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-3' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-4' ).hide();
                $( '#sub-accordion-section-overlay-panel-settings-section-footer #customize-control-overlay-footer-customize-col-5' ).hide();
            }
        }

        // Show / Hide Advanced WooCommerce Settings
        overlay_wcom_advanced_check();
        $( '#customize-control-overlay-wcproduct-advanced-set input[type=checkbox]' ).on( 'change', function() {
            overlay_wcom_advanced_check();
        });
        function overlay_wcom_advanced_check() {
            if ( $( '#customize-control-overlay-wcproduct-advanced-set input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-overlay-woocommerce-product-settings #customize-control-overlay-wcproduct-img-sum-size' ).show();
                $( '#sub-accordion-section-overlay-woocommerce-product-settings #customize-control-overlay-wcproduct-remove-tab-section' ).show();
                $( '#sub-accordion-section-overlay-woocommerce-product-settings #customize-control-overlay-wc-product-detail-space' ).show();
                $( '#sub-accordion-section-overlay-woocommerce-product-settings #customize-control-overlay-wc-product-rel-space' ).show();
                $( '#sub-accordion-section-overlay-woocommerce-product-settings #customize-control-overlay-wc-product-title-size' ).show();
            } else {
                $( '#sub-accordion-section-overlay-woocommerce-product-settings #customize-control-overlay-wcproduct-img-sum-size' ).hide();
                $( '#sub-accordion-section-overlay-woocommerce-product-settings #customize-control-overlay-wcproduct-remove-tab-section' ).hide();
                $( '#sub-accordion-section-overlay-woocommerce-product-settings #customize-control-overlay-wc-product-detail-space' ).hide();
                $( '#sub-accordion-section-overlay-woocommerce-product-settings #customize-control-overlay-wc-product-rel-space' ).hide();
                $( '#sub-accordion-section-overlay-woocommerce-product-settings #customize-control-overlay-wc-product-title-size' ).hide();
            }
        }
        // Show / Hide Advanced WooCommerce Settings
        overlay_wcomcat_advanced_check();
        $( '#customize-control-overlay-wccat-advanced-set input[type=checkbox]' ).on( 'change', function() {
            overlay_wcomcat_advanced_check();
        });
        function overlay_wcomcat_advanced_check() {
            if ( $( '#customize-control-overlay-wccat-advanced-set input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-overlay-woocommerce-settings #customize-control-overlay-wc-product-bottom-space' ).show();
                $( '#sub-accordion-section-overlay-woocommerce-settings #customize-control-overlay-wc-list-title-size' ).show();
                $( '#sub-accordion-section-overlay-woocommerce-settings #customize-control-overlay-wc-list-title-height' ).show();
            } else {
                $( '#sub-accordion-section-overlay-woocommerce-settings #customize-control-overlay-wc-product-bottom-space' ).hide();
                $( '#sub-accordion-section-overlay-woocommerce-settings #customize-control-overlay-wc-list-title-size' ).hide();
                $( '#sub-accordion-section-overlay-woocommerce-settings #customize-control-overlay-wc-list-title-height' ).hide();
            }
        }

        // Show / Hide Social Link Settings
        overlay_social_set_check();
        $( '#customize-control-overlay-social-add-sideicons input[type=checkbox]' ).on( 'change', function() {
            overlay_social_set_check();
        });
        function overlay_social_set_check() {
            if ( $( '#customize-control-overlay-social-add-sideicons input[type=checkbox]' ).is( ':checked' ) ) {
                $( '#sub-accordion-section-overlay-panel-social-section-links-settings #customize-control-overlay-social-set-sideicons-left' ).show();
                $( '#sub-accordion-section-overlay-panel-social-section-links-settings #customize-control-overlay-social-let-scroll' ).show();
                $( '#sub-accordion-section-overlay-panel-social-section-links-settings #customize-control-overlay-site-side-social-top' ).show();
                $( '#sub-accordion-section-overlay-panel-social-section-links-settings #customize-control-overlay-side-social-look' ).show();
                $( '#sub-accordion-section-overlay-panel-social-section-links-settings #customize-control-overlay-side-social-size' ).show();
                $( '#sub-accordion-section-overlay-panel-social-section-links-settings #customize-control-overlay-side-social-space' ).show();
            } else {
                $( '#sub-accordion-section-overlay-panel-social-section-links-settings #customize-control-overlay-social-set-sideicons-left' ).hide();
                $( '#sub-accordion-section-overlay-panel-social-section-links-settings #customize-control-overlay-social-let-scroll' ).hide();
                $( '#sub-accordion-section-overlay-panel-social-section-links-settings #customize-control-overlay-site-side-social-top' ).hide();
                $( '#sub-accordion-section-overlay-panel-social-section-links-settings #customize-control-overlay-side-social-look' ).hide();
                $( '#sub-accordion-section-overlay-panel-social-section-links-settings #customize-control-overlay-side-social-size' ).hide();
                $( '#sub-accordion-section-overlay-panel-social-section-links-settings #customize-control-overlay-side-social-space' ).hide();
            }
        }

    } );
} )( jQuery );