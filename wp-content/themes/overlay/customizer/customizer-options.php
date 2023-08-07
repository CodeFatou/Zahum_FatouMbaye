<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library Overlay
 */

function overlay_customizer_library_options() {

	$primary_color = '#4e87d8';
    $secondary_color = '#0b53b9';
    
    $fontweight_choices = array(
        '200' => __( '200', 'overlay' ),
        '300' => __( '300', 'overlay' ),
        '400' => __( '400', 'overlay' ),
        '500' => __( '500', 'overlay' ),
        '600' => __( '600', 'overlay' ),
        '700' => __( '700', 'overlay' ),
        '900' => __( '900', 'overlay' ),
    );

    $seo_element_choices = array(
        'h1' => __( 'H1', 'overlay' ),
        'h2' => __( 'H2', 'overlay' ),
        'h3' => __( 'H3', 'overlay' ),
        'h4' => __( 'H4', 'overlay' ),
        'h5' => __( 'H5', 'overlay' ),
        'h6' => __( 'H6', 'overlay' ),
        'div' => __( 'div', 'overlay' ),
        'span' => __( 'span', 'overlay' ),
        'p' => __( 'P', 'overlay' ),
    );

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Stores all the panels to be added
	$panels = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;

    // ------------------------------------------------------------------------------------------- title_tagline
    $section = 'title_tagline';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Site Identity', 'overlay' ),
        'priority' => '10',
        'description' => __( 'Change the <a href="#overlay-panel-settings-section-header" rel="tc-section">Header Layout</a> or <a href="#overlay-panel-settings-section-footer" rel="tc-section">Footer Layouts</a><br />Select <a href="#overlay-panel-settings-section-header-media" rel="tc-section">Header Media</a> to add to your site<br />Change Full <a href="#overlay-panel-colors" rel="tc-panel">Theme Colors Settings</a><br />Edit the <a href="#overlay-panel-blog-settings" rel="tc-section">Blog & Post Layout Settings</a> section<br />Add <a href="#overlay-panel-social-section-links" rel="tc-section">Social Links</a> to your site', 'overlay' ),
    );

    $options['overlay-uploaded-logo'] = array(
        'id' => 'overlay-uploaded-logo',
        'label'   => __( 'Advanced Logo Settings', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
        'description' => __( 'Apply these settings once a logo is uploaded', 'overlay' ),
    );
	$options['overlay-logo-max-width'] = array(
        'id' => 'overlay-logo-max-width',
        'label'   => __( 'Set a max-width for the logo', 'overlay' ),
        'section' => $section,
        'type'    => 'number'
    );
    $options['overlay-add-back-title'] = array(
        'id' => 'overlay-add-back-title',
        'label'   => __( 'Add the Site Title', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-add-back-tagline'] = array(
        'id' => 'overlay-add-back-tagline',
        'label'   => __( 'Add the Site Tagline', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-logo-align-side'] = array(
        'id' => 'overlay-logo-align-side',
        'label'   => __( 'Align the Logo and Titles Side by Side', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'top' => __( 'Top', 'overlay' ),
        'middle' => __( 'Middle', 'overlay' ),
        'bottom' => __( 'Bottom', 'overlay' )
    );
    $options['overlay-logo-alignment'] = array(
        'id' => 'overlay-logo-alignment',
        'label'   => __( 'Logo Alignment', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'middle'
    );
    $rangedefault = get_theme_mod( 'overlay-logo-title-spacing', 20 );
    $options['overlay-logo-title-spacing'] = array(
        'id' => 'overlay-logo-title-spacing',
        'label'   => __( 'Logo & Site Title Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 80,
            'step'  => 1,
        ),
        'default' => 20,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">80</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-title-desc-spacing', 0 );
    $options['overlay-title-desc-spacing'] = array(
        'id' => 'overlay-title-desc-spacing',
        'label'   => __( 'Site Title & Description Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 50,
            'step'  => 1,
        ),
        'default' => 0,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">50</span>'
    );
    // ------------------------------------------------------------------------------------------- title_tagline
    
    // ---------------- PANEL - Theme Settings
    $panel = 'overlay-panel-settings';
    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Overlay Theme Settings', 'overlay' ),
        'priority' => '30'
    );
    
    // ------------------------------------------------------------------------------------------- Site Breakpoints
    $section = 'overlay-panel-settings-breakpoints';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Site Breakpoints', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['overlay-responsive-disable'] = array(
        'id' => 'overlay-responsive-disable',
        'label'   => __( 'Disable Responsiveness', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-tablet-breakat'] = array(
        'id' => 'overlay-tablet-breakat',
        'label'   => __( 'Tablet Breakpoint', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
        'default' => '980'
    );
    $options['overlay-mobile-breakat'] = array(
        'id' => 'overlay-mobile-breakat',
        'label'   => __( 'Mobile Breakpoint', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
        'default' => '782'
    );
    $choices = array(
        'always' => __( 'Always On', 'overlay' ),
        'tablet' => __( 'Tablet', 'overlay' ),
        'mobile' => __( 'Mobile', 'overlay' ),
        'custom' => __( 'Custom', 'overlay' )
    );
    $options['overlay-menu-breakat'] = array(
        'id' => 'overlay-menu-breakat',
        'label'   => __( 'Menu Breakpoint', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'tablet'
    );
    $options['overlay-menu-custom-breakat'] = array(
        'id' => 'overlay-menu-custom-breakat',
        'label'   => __( 'Enter the breakpoint size for mobile menu', 'overlay' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 782,
    );
    $choices = array(
        'overlay-menu-rightside' => __( 'Slide from Right', 'overlay' ),
        'overlay-menu-leftside' => __( 'Slide from Left', 'overlay' ),
        'overlay-menu-dropdown' => __( 'Drop Down', 'overlay' )
    );
    $options['overlay-menu-position'] = array(
        'id' => 'overlay-menu-position',
        'label'   => __( 'Menu Position', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-menu-rightside'
    );
    // ------------------------------------------------------------------------------------------- Site Breakpoints

    // ------------------------------------------------------------------------------------------- SEO Extra
    $section = 'overlay-panel-settings-seo';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Search Engine Optimization (SEO)', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );
    $options['overlay-noteon-seo'] = array(
        'id' => 'overlay-noteon-seo',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'Select what HTML tag you want the following elements to be.', 'overlay' )
    );
    
    $options['overlay-seo-site-title'] = array(
        'id' => 'overlay-seo-site-title',
        'label'   => __( 'Site Title', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $seo_element_choices,
        'default' => 'p'
    );
    $options['overlay-seo-site-tagline'] = array(
        'id' => 'overlay-seo-site-tagline',
        'label'   => __( 'Site Tagline', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $seo_element_choices,
        'default' => 'p'
    );
    $options['overlay-note-seo'] = array(
        'id' => 'overlay-note-seo',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<span><b>Overlay Pro Features:</b><br/>- Select the element for Page Titles<br/>- Select the element for Blog List Titles<br/>- Select the element for Sidebar Widget Titles & Footer Widget Titles</span>', 'overlay' )
    );
    // ------------------------------------------------------------------------------------------- SEO Extra
    
    // ------------------------------------------------------------------------------------------- Page Templates
    $section = 'overlay-panel-settings-section-pages';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Page Templates', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );
    $options['overlay-layout-heading-page'] = array(
        'id' => 'overlay-layout-heading-page',
        'label'   => __( 'Pages', 'overlay' ),
        'section' => $section,
        'type'    => 'heading',
    );
    $choices = array(
        'overlay-page-rs' => __( 'Right Sidebar', 'overlay' ),
        'overlay-page-ls' => __( 'Left Sidebar', 'overlay' ),
        'overlay-page-fw' => __( 'Full Width', 'overlay' ),
        'overlay-page-frs' => __( 'Floating Right Sidebar', 'overlay' ),
        'overlay-page-fls' => __( 'Floating Left Sidebar', 'overlay' )
    );
    $options['overlay-page-layout'] = array(
        'id' => 'overlay-page-layout',
        'label'   => __( 'New Page - Default Layout', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-page-rs'
    );
    $options['overlay-layout-heading-blog'] = array(
        'id' => 'overlay-layout-heading-blog',
        'label'   => __( 'Blog Pages', 'overlay' ),
        'section' => $section,
        'type'    => 'heading',
    );
    $choices = array(
        'overlay-blog-rs' => __( 'Right Sidebar', 'overlay' ),
        'overlay-blog-ls' => __( 'Left Sidebar', 'overlay' ),
        'overlay-blog-fw' => __( 'Full Width', 'overlay' ),
        'overlay-blog-frs' => __( 'Floating Right Sidebar', 'overlay' ),
        'overlay-blog-fls' => __( 'Floating Left Sidebar', 'overlay' )
    );
    $options['overlay-blog-layout'] = array(
        'id' => 'overlay-blog-layout',
        'label'   => __( 'List / Archives Layout', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-blog-rs'
    );
    $choices = array(
        'overlay-blog-post-rs' => __( 'Right Sidebar', 'overlay' ),
        'overlay-blog-post-ls' => __( 'Left Sidebar', 'overlay' ),
        'overlay-blog-post-fw' => __( 'Full Width', 'overlay' ),
        'overlay-blog-post-frs' => __( 'Floating Right Sidebar', 'overlay' ),
        'overlay-blog-post-fls' => __( 'Floating Left Sidebar', 'overlay' )
    );
    $options['overlay-blog-post-layout'] = array(
        'id' => 'overlay-blog-post-layout',
        'label'   => __( 'Single Post - Default Layout', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-blog-post-rs'
    );
    $choices = array(
        'overlay-blog-search-rs' => __( 'Right Sidebar', 'overlay' ),
        'overlay-blog-search-ls' => __( 'Left Sidebar', 'overlay' ),
        'overlay-blog-search-fw' => __( 'Full Width', 'overlay' ),
        'overlay-blog-search-frs' => __( 'Floating Right Sidebar', 'overlay' ),
        'overlay-blog-search-fls' => __( 'Floating Left Sidebar', 'overlay' )
    );
    $options['overlay-blog-search-layout'] = array(
        'id' => 'overlay-blog-search-layout',
        'label'   => __( 'Search Results Layout', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-blog-search-rs'
    );

    $options['overlay-site-remove-editlink'] = array(
        'id' => 'overlay-site-remove-editlink',
        'label'   => __( 'Remove Edit Links on Posts & Pages', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );

    $options['overlay-note-page-templates'] = array(
        'id' => 'overlay-note-page-templates',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<span><b>Overlay Pro Features:</b><br/>- Pro comes with Page Layouts to import<br/><br/>- Set Template for WooCommerce Catalogue Page<br/>- Set Template for WooCommerce Product Page', 'overlay' )
    );
    // ------------------------------------------------------------------------------------------- Page Templates

    // ------------------------------------------------------------------------------------------- Site Layout
    $section = 'overlay-panel-settings-section-site';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Site Layout', 'overlay' ),
        'priority' => '10',
        'description' => __( 'Change the <a href="#overlay-panel-settings-section-header" rel="tc-section">Header Layout</a> or <a href="#overlay-panel-settings-section-footer" rel="tc-section">Footer Layouts</a><br />Select <a href="#overlay-panel-settings-section-header-media" rel="tc-section">Header Media</a> to add to your site<br />Change Full <a href="#overlay-panel-colors" rel="tc-panel">Theme Colors Settings</a><br />Edit the <a href="#overlay-panel-blog-settings" rel="tc-section">Blog & Post Layout Settings</a> section<br />Add <a href="#overlay-panel-social-section-links" rel="tc-section">Social Links</a> to your site', 'overlay' ),
        'panel' => $panel
    );

    $rangedefault = get_theme_mod( 'overlay-site-container-width', 1200 );
    $options['overlay-site-container-width'] = array(
        'id' => 'overlay-site-container-width',
        'label'   => __( 'Website Width', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 900,
            'max'   => 1400,
            'step'  => 1,
        ),
        'default' => 1200,
        'description' => '<span class="fst">900</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">1400</span>'
    );
    $choices = array(
        'overlay-site-boxed' => __( 'Boxed Layout', 'overlay' ),
        'overlay-site-full-width' => __( 'Full Width Layout', 'overlay' ),
        'overlay-site-full-width-blocked' => __( 'Full Width Blocked Layout', 'overlay' )
    );
    $options['overlay-site-layout'] = array(
        'id' => 'overlay-site-layout',
        'label'   => __( 'Site Layout', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-site-full-width'
    );
    $options['overlay-break-content'] = array(
        'id' => 'overlay-break-content',
        'label'   => __( 'Break Content & Widget areas apart', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-break-widgets'] = array(
        'id' => 'overlay-break-widgets',
        'label'   => __( 'Break Widgets apart', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-note-site-layout'] = array(
        'id' => 'overlay-note-site-layout',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<span><b>Overlay Pro Features:</b><br />- Add Website Loader to display while page loads<br />- Customize Website Loader Icon & Design<br />- More SEO control over site elements<br />- Add a Back To Top button<br/>- Set Top Bar to Full Width<br />- Set Header to Full Width<br />- Set All Content Areas to Full Width<br />- Set Footer to Full Width<br />- Set Bottom Bar to Full Width', 'overlay' )
    );
    
    // ------------------------------------------------------------------------------------------- Site Layout

    // ------------------------------------------------------------------------------------------- Header
	$section = 'overlay-panel-settings-section-header';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Header', 'overlay' ),
        'priority' => '10',
        'description' => __( 'Edit <a href="#overlay-panel-font-settings-section-header" rel="tc-section">Header Font & Sizes</a> or edit <a href="#overlay-panel-edit-text-section-topbar" rel="tc-section">Header Text</a>', 'overlay' ),
        'panel' => $panel
    );

    $options['overlay-layout-heading-topbar'] = array(
        'id' => 'overlay-layout-heading-topbar',
        'label'   => __( 'Header Top Bar', 'overlay' ),
        'section' => $section,
        'type'    => 'heading',
    );
    $options['overlay-remove-topbar'] = array(
        'id' => 'overlay-remove-topbar',
        'label'   => __( 'Remove Top Bar', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
	$choices = array(
        'topbar-default' => __( 'Social, Number | Address, Menu, Cart, Search', 'overlay' ),
        'topbar-one' => __( 'Address, Numer | Menu, Cart, Social, Search', 'overlay' ),
        'topbar-two' => __( 'Menu, Cart, Address | Number, Social, Search', 'overlay' ),
    );
    $options['overlay-topbar-layout'] = array(
        'id' => 'overlay-topbar-layout',
        'label'   => __( 'Top Bar Layout', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'topbar-default'
    );
    $options['overlay-topbar-switch'] = array(
        'id' => 'overlay-topbar-switch',
        'label'   => __( 'Switch Top Bar', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $rangedefault = get_theme_mod( 'overlay-topbar-spacing-top', 5 );
    $options['overlay-topbar-spacing-top'] = array(
        'id' => 'overlay-topbar-spacing-top',
        'label'   => __( 'Spacing above Top Bar', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 1,
            'max'   => 100,
            'step'  => 1,
        ),
        'default' => 5,
        'description' => '<span class="fst">1</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">100</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-topbar-spacing-bottom', 5 );
    $options['overlay-topbar-spacing-bottom'] = array(
        'id' => 'overlay-topbar-spacing-bottom',
        'label'   => __( 'Spacing below Top Bar', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 1,
            'max'   => 100,
            'step'  => 1,
        ),
        'default' => 5,
        'description' => '<span class="fst">1</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">100</span>'
    );

    $options['overlay-layout-heading-header'] = array(
        'id' => 'overlay-layout-heading-header',
        'label'   => __( 'Header', 'overlay' ),
        'section' => $section,
        'type'    => 'heading',
    );
    $options['overlay-note-mainnav'] = array(
        'id' => 'overlay-note-mainnav',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'Edit the <a href="#overlay-panel-settings-section-nav" rel="tc-section">Main Navigation Section</a>', 'overlay' )
    );
    $options['overlay-header-remove-social'] = array(
        'id' => 'overlay-header-remove-social',
        'label'   => __( 'Remove Social Icons', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-header-remove-number'] = array(
        'id' => 'overlay-header-remove-number',
        'label'   => __( 'Remove Phone Number', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-header-remove-address'] = array(
        'id' => 'overlay-header-remove-address',
        'label'   => __( 'Remove Address', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    if ( class_exists( 'WooCommerce' ) ) :
        $options['overlay-header-add-topcart'] = array(
            'id' => 'overlay-header-add-topcart',
            'label'   => __( 'Add WooCommerce Cart', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $options['overlay-header-add-drop-topcart'] = array(
            'id' => 'overlay-header-add-drop-topcart',
            'label'   => __( 'Add Drop Down Full Cart', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
    endif;
    $options['overlay-remove-header-search'] = array(
        'id' => 'overlay-remove-header-search',
        'label'   => __( 'Remove Search', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'overlay-search-slide' => __( 'Search Button - Slide Down', 'overlay' ),
        'overlay-search-fade' => __( 'Search Button - Fade In', 'overlay' ),
        'overlay-search-always' => __( 'Always Showing', 'overlay' ),
        'overlay-search-full' => __( 'Overlay on Site', 'overlay' ),
        'overlay-search-full-txt' => __( 'Text Overlay on Site', 'overlay' ),
        'overlay-search-plugin-shortcode' => __( 'Plugin Shortcode', 'overlay' )
    );
    $options['overlay-header-search-type'] = array(
        'id' => 'overlay-header-search-type',
        'label'   => __( 'Search Type', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-search-slide'
    );
    $options['overlay-search-shortcode'] = array(
        'id' => 'overlay-search-shortcode',
        'label'   => __( 'Shortcode', 'overlay' ),
        'section' => $section,
        'type'    => 'text'
    );
    $options['overlay-search-shortcode-help'] = array(
        'id' => 'overlay-search-shortcode-help',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'Enter the shortcode provided by a more advanced search plugin of your choice.<br /><br />For a better WooCommerce search, we recommend <a href="https://kairaweb.com/go/woocommerce-product-search/" target="_blank">WooCommerce Product Search</a>', 'overlay' )
    );

    $rangedefault = get_theme_mod( 'overlay-header-spacing-top', 5 );
    $options['overlay-header-spacing-top'] = array(
        'id' => 'overlay-header-spacing-top',
        'label'   => __( 'Spacing above Header', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 2,
            'max'   => 120,
            'step'  => 1,
        ),
        'default' => 5,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">120</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-header-spacing-bottom', 5 );
    $options['overlay-header-spacing-bottom'] = array(
        'id' => 'overlay-header-spacing-bottom',
        'label'   => __( 'Spacing below Header', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 2,
            'max'   => 120,
            'step'  => 1,
        ),
        'default' => 5,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">120</span>'
    );
    if ( class_exists( 'WooCommerce' ) ) :
        $choices = array(
            'total-items' => __( '$20.00 (4 items)', 'overlay' ),
            'total-count' => __( '$20.00 (4)', 'overlay' ),
            'only-total' => __( '$20.00', 'overlay' ),
            'only-items' => __( '5 items', 'overlay' ),
            'count-only' => __( '(5)', 'overlay' )
        );
        $options['overlay-wc-cart'] = array(
            'id' => 'overlay-wc-cart',
            'label'   => __( 'Header Cart Layout', 'overlay' ),
            'section' => $section,
            'type'    => 'select',
            'choices' => $choices,
            'default' => 'total-items'
        );
    endif;
    
    $options['overlay-note-header'] = array(
        'id' => 'overlay-note-header',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<span><b>Overlay Pro Features:</b><br/>- Sticky Header<br />- Fully Customize the Sticky Header<br />- Change Sticky Header Colors<br />- Add Header Background Image<br />- Customize Header Background Image Layout<br />- Set Header Alignment - Left, Right or Center', 'overlay' )
    );
    // ------------------------------------------------------------------------------------------- Header

    // ------------------------------------------------------------------------------------------- Main Navigation
    $section = 'overlay-panel-settings-section-nav';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Main Navigation', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );
    $options['overlay-note-mainnav-mm'] = array(
        'id' => 'overlay-note-mainnav-mm',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'Using Mega Menu? <a href="#overlay-section-plugin-support" rel="tc-section">Enable Mega Menu compatibility</a>', 'overlay' )
    );
    $choices = array(
        'overlay-nav-plain' => __( 'Plain', 'overlay' ),
        'overlay-nav-solid' => __( 'Solid', 'overlay' ),
        'overlay-nav-underline' => __( 'Underlined', 'overlay' ),
        'overlay-nav-block' => __( 'Blocks', 'overlay' )
    );
    $options['overlay-header-nav-style'] = array(
        'id' => 'overlay-header-nav-style',
        'label'   => __( 'Navigation Style', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-nav-plain'
    );
    $options['overlay-align-nav-center'] = array(
        'id' => 'overlay-align-nav-center',
        'label'   => __( 'Center Navigation Items', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-align-nav-full-width'] = array(
        'id' => 'overlay-align-nav-full-width',
        'label'   => __( 'Align Items to Full Width', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-align-navdrop-center'] = array(
        'id' => 'overlay-align-navdrop-center',
        'label'   => __( 'Center Navigation Drop Down Items', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-nav-advanced-set'] = array(
        'id' => 'overlay-nav-advanced-set',
        'label'   => __( 'Advanced Navigation Settings', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $rangedefault = get_theme_mod( 'overlay-header-nav-spacing-top', 12 );
    $options['overlay-header-nav-spacing-top'] = array(
        'id' => 'overlay-header-nav-spacing-top',
        'label'   => __( 'Top Level Items - Top Padding', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 2,
            'max'   => 60,
            'step'  => 1,
        ),
        'default' => 12,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">60</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-header-nav-spacing-bottom', 12 );
    $options['overlay-header-nav-spacing-bottom'] = array(
        'id' => 'overlay-header-nav-spacing-bottom',
        'label'   => __( 'Top Level Items - Bottom Padding', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 2,
            'max'   => 60,
            'step'  => 1,
        ),
        'default' => 12,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">60</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-header-nav-spacing-side', 18 );
    $options['overlay-header-nav-spacing-side'] = array(
        'id' => 'overlay-header-nav-spacing-side',
        'label'   => __( 'Top Level Items - Side Padding', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 2,
            'max'   => 50,
            'step'  => 1,
        ),
        'default' => 18,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">50</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-header-nav-item-spacing', 0 );
    $options['overlay-header-nav-item-spacing'] = array(
        'id' => 'overlay-header-nav-item-spacing',
        'label'   => __( 'Top Level Items - Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 40,
            'step'  => 1,
        ),
        'default' => 0,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">40</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-header-nav-drop-side-pad', 18 );
    $options['overlay-header-nav-drop-side-pad'] = array(
        'id' => 'overlay-header-nav-drop-side-pad',
        'label'   => __( 'Drop Down Items - Side Padding', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 7,
            'max'   => 60,
            'step'  => 1,
        ),
        'default' => 18,
        'description' => '<span class="fst">7</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">60</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-header-nav-drop-topbot-pad', 12 );
    $options['overlay-header-nav-drop-topbot-pad'] = array(
        'id' => 'overlay-header-nav-drop-topbot-pad',
        'label'   => __( 'Drop Down Items - Top/Bottom Padding', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 2,
            'max'   => 40,
            'step'  => 1,
        ),
        'default' => 12,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">40</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-nav-drop-minwidth', 200 );
    $options['overlay-nav-drop-minwidth'] = array(
        'id' => 'overlay-nav-drop-minwidth',
        'label'   => __( 'Drop Down Items - Min-Width', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 120,
            'max'   => 400,
            'step'  => 1,
        ),
        'default' => 200,
        'description' => '<span class="fst">120</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">400</span>'
    );
    $options['overlay-nav-drop-negmargin'] = array(
        'id' => 'overlay-nav-drop-negmargin',
        'label'   => __( 'Drop Down - Negative Margin', 'overlay' ),
        'section' => $section,
        'type'    => 'number',
        'description' => __( 'This is a manual setting to position the first dropdown to be centered to the top level item.', 'overlay' ),
        'default' => 0
    );
    $options['overlay-note-navigation'] = array(
        'id' => 'overlay-note-navigation',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<span><b>Overlay Pro Features:</b><br/>- Sticky Navigation<br />- Remove the Main Navigation<br />- Add WooCommerce Menu Cart + Items Cart', 'overlay' )
    );
    // ------------------------------------------------------------------------------------------- Main Navigation

    // ------------------------------------------------------------------------------------------- Home Slider / Custom Header
    $section = 'overlay-panel-settings-section-header-media';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Home Slider / Custom Header', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );

    $choices = array(
        'overlay-site-media-none' => __( 'None', 'overlay' ),
        'overlay-site-media-media' => __( 'Custom Header', 'overlay' ),
        'overlay-site-media-fimage' => __( 'Page Featured Image', 'overlay' ),
        'overlay-site-media-shortcode' => __( 'Basic Slider / Slider Shortcode', 'overlay' )
    );
    $options['overlay-site-media-type'] = array(
        'id' => 'overlay-site-media-type',
        'label'   => __( 'Media Type', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-site-media-none'
    );

    // None
    $options['overlay-noteon-media-none'] = array(
        'id' => 'overlay-noteon-media-none',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'No media is shown in the header<br /><br />You can select between using:<br />- A Custom Header<br />- The Page Featured Image<br />- The Overlay Basic Slider (Premium Only)', 'overlay' )
    );

    // Custom Header
    $options['overlay-noteon-media-cheader'] = array(
        'id' => 'overlay-noteon-media-cheader',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'You can now <a href="header_image" rel="tc-section">add a Custom Header or Video here</a>', 'overlay' )
    );

    // Page Featured Image
    $options['overlay-noteon-media-fimage'] = array(
        'id' => 'overlay-noteon-media-fimage',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'Go to each page in your dashboard to add a Featured Image which will display at the top of each page.', 'overlay' )
    );
    $choices = array(
        'overlay-media-fimage-actual' => __( 'Actual Image', 'overlay' ),
        'overlay-media-fimage-small' => __( 'Small Banner', 'overlay' ),
        'overlay-media-fimage-medium' => __( 'Medium Banner', 'overlay' ),
        'overlay-media-fimage-large' => __( 'Large Banner', 'overlay' )
    );
    $options['overlay-site-media-fimage-size'] = array(
        'id' => 'overlay-site-media-fimage-size',
        'label'   => __( 'Featured Image Proportions', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-media-fimage-actual'
    );

    // Basic Slider / Slider Shortcode
    $options['overlay-noteon-media-shortcode'] = array(
        'id' => 'overlay-noteon-media-shortcode',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'Enter any shortcode provided by the slider plugin of your choice.<br /><br /><b>Basic Slider only available in Overlay Premium</b>.', 'overlay' )
    );

    $options['overlay-sitemedia-display-all'] = array(
        'id' => 'overlay-sitemedia-display-all',
        'label'   => __( 'Display on All Pages', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
        'description' => __( 'By default it only displays on the Home Page', 'overlay' )
    );
    $options['overlay-sitemedia-fullwidth'] = array(
        'id' => 'overlay-sitemedia-fullwidth',
        'label'   => __( 'Set Media to Full Width', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );

    $options['overlay-noteon-media-imgoverlay'] = array(
        'id' => 'overlay-noteon-media-imgoverlay',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<br /><b>Add & Customize an image overlay in Premium</b>', 'overlay' )
    );
    // ------------------------------------------------------------------------------------------- Home Slider / Custom Header

    // ------------------------------------------------------------------------------------------- Page Title
    $section = 'overlay-panel-settings-section-title';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Page Title', 'overlay' ),
        'priority' => '10',
        'description' => __( 'Edit <a href="#overlay-panel-font-settings-section-title" rel="tc-section">Page Title font sizes</a>', 'overlay' ),
        'panel' => $panel
    );

    $options['overlay-remove-pagetitles'] = array(
        'id' => 'overlay-remove-pagetitles',
        'label'   => __( 'Remove All Page Titles', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $choices = array(
        'overlay-pagetitle-default' => __( 'Default / In Content', 'overlay' ),
        'overlay-pagetitle-other' => __( 'In Content 2', 'overlay' ),
        'overlay-pagetitle-banner' => __( 'Banner Below Header', 'overlay' ),
        'overlay-pagetitle-cheader' => __( 'Inside Custom Header', 'overlay' )
    );
    $options['overlay-pagetitle-layout'] = array(
        'id' => 'overlay-pagetitle-layout',
        'label'   => __( 'Page Title Layout', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-pagetitle-default'
    );
    $options['overlay-noteon-pagetitle-cheader'] = array(
        'id' => 'overlay-noteon-pagetitle-cheader',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'You need to <a href="overlay-panel-settings-section-header-media" rel="tc-section">Use a Custom Header or Page Featured Image here</a> to see the page titles.', 'overlay' )
    );
    $options['overlay-notefor-breadcrumb'] = array(
        'id' => 'overlay-notefor-breadcrumb',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'Overlay Pro offers a shorcode to add breadcrumbs anywhere on your website.', 'overlay' )
    );
    // ------------------------------------------------------------------------------------------- Page Title

    // ------------------------------------------------------------------------------------------- Content Area
    $section = 'overlay-panel-settings-section-content';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Content Area', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['overlay-content-divider-line'] = array(
        'id' => 'overlay-content-divider-line',
        'label'   => __( 'Remove Content/Widget Divider Line', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $rangedefault = get_theme_mod( 'overlay-content-spacing-top', 40 );
    $options['overlay-content-spacing-top'] = array(
        'id' => 'overlay-content-spacing-top',
        'label'   => __( 'Overall Top Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 200,
            'step'  => 1,
        ),
        'default' => 40,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">200</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-content-spacing-bottom', 40 );
    $options['overlay-content-spacing-bottom'] = array(
        'id' => 'overlay-content-spacing-bottom',
        'label'   => __( 'Overall Bottom Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 200,
            'step'  => 1,
        ),
        'default' => 40,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">200</span>'
    );
    $options['overlay-content-advanced-set'] = array(
        'id' => 'overlay-content-advanced-set',
        'label'   => __( 'Advanced Content Area Settings', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // ----------------
        $rangedefault = get_theme_mod( 'overlay-content-padding-top', 25 );
        $options['overlay-content-padding-top'] = array(
            'id' => 'overlay-content-padding-top',
            'label'   => __( 'Top Padding', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 150,
                'step'  => 1,
            ),
            'default' => 25,
            'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>'
        );
        $rangedefault = get_theme_mod( 'overlay-content-padding-left', 25 );
        $options['overlay-content-padding-left'] = array(
            'id' => 'overlay-content-padding-left',
            'label'   => __( 'Left Padding', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 150,
                'step'  => 1,
            ),
            'default' => 25,
            'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>'
        );
        $rangedefault = get_theme_mod( 'overlay-content-padding-right', 25 );
        $options['overlay-content-padding-right'] = array(
            'id' => 'overlay-content-padding-right',
            'label'   => __( 'Right Padding', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 150,
                'step'  => 1,
            ),
            'default' => 25,
            'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>'
        );
        $rangedefault = get_theme_mod( 'overlay-content-padding-bottom', 25 );
        $options['overlay-content-padding-bottom'] = array(
            'id' => 'overlay-content-padding-bottom',
            'label'   => __( 'Bottom Padding', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 150,
                'step'  => 1,
            ),
            'default' => 25,
            'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>'
        );
    // ----------------

    // ------------------------------------------------------------------------------------------- Content Area


    // ------------------------------------------------------------------------------------------- Widget Area
    $section = 'overlay-panel-settings-section-widget';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Widget Area', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );

    $rangedefault = get_theme_mod( 'overlay-widget-spacing-bottom', 50 );
    $options['overlay-widget-spacing-bottom'] = array(
        'id' => 'overlay-widget-spacing-bottom',
        'label'   => __( 'Widgets Bottom Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 5,
            'max'   => 200,
            'step'  => 1,
        ),
        'default' => 50,
        'description' => '<span class="fst">5</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">200</span>'
    );
    $options['overlay-widget-advanced-set'] = array(
        'id' => 'overlay-widget-advanced-set',
        'label'   => __( 'Advanced Widget Area Settings', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // ----------------
        $rangedefault = get_theme_mod( 'overlay-widget-area-size', 25 );
        $options['overlay-widget-area-size'] = array(
            'id' => 'overlay-widget-area-size',
            'label'   => __( 'Widget Area Width', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 10,
                'max'   => 45,
                'step'  => 1,
            ),
            'default' => 25,
            'description' => '<span class="fst">10</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">45</span>'
        );
        $rangedefault = get_theme_mod( 'overlay-widget-padding-top', 25 );
        $options['overlay-widget-padding-top'] = array(
            'id' => 'overlay-widget-padding-top',
            'label'   => __( 'Top Padding', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 150,
                'step'  => 1,
            ),
            'default' => 25,
            'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>'
        );
        $rangedefault = get_theme_mod( 'overlay-widget-padding-left', 25 );
        $options['overlay-widget-padding-left'] = array(
            'id' => 'overlay-widget-padding-left',
            'label'   => __( 'Left Padding', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 150,
                'step'  => 1,
            ),
            'default' => 25,
            'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>'
        );
        $rangedefault = get_theme_mod( 'overlay-widget-padding-right', 25 );
        $options['overlay-widget-padding-right'] = array(
            'id' => 'overlay-widget-padding-right',
            'label'   => __( 'Right Padding', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 150,
                'step'  => 1,
            ),
            'default' => 25,
            'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>'
        );
        $rangedefault = get_theme_mod( 'overlay-widget-padding-bottom', 25 );
        $options['overlay-widget-padding-bottom'] = array(
            'id' => 'overlay-widget-padding-bottom',
            'label'   => __( 'Bottom Padding', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 0,
                'max'   => 150,
                'step'  => 1,
            ),
            'default' => 25,
            'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>'
        );
    // ----------------
    $options['overlay-note-widget-area'] = array(
        'id' => 'overlay-note-widget-area',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<span><b>Overlay Pro Features:</b><br/>- Enable Sticky Widget Area / Sidebar<br/>- Select from multiple Widgets styling', 'overlay' )
    );

    // ------------------------------------------------------------------------------------------- Widget Area


    // ------------------------------------------------------------------------------------------- Footer
	$section = 'overlay-panel-settings-section-footer';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Footer', 'overlay' ),
        'priority' => '10',
        'description' => __( 'Edit <a href="#overlay-panel-font-settings-section-footer" rel="tc-section">Footer Font & Sizes</a> or edit <a href="#overlay-panel-edit-text-section-bottombar" rel="tc-section">Footer Text</a>', 'overlay' ),
        'panel' => $panel
    );

    $options['overlay-heading-settings-footer'] = array(
        'id' => 'overlay-heading-settings-footer',
        'label'   => __( 'Footer Main', 'overlay' ),
        'section' => $section,
        'type'    => 'heading',
    );
	$choices = array(
        'footer-default' => __( 'Custom/Widgets Footer', 'overlay' ),
        'footer-social' => __( 'Social Icons Footer', 'overlay' ),
        'footer-social-two' => __( 'Menu & Social Footer', 'overlay' ),
        'footer-basic' => __( 'Basic Footer', 'overlay' ),
        'footer-split' => __( 'Widget Split Layout Footer', 'overlay' ),
        'footer-none' => __( 'Remove Footer', 'overlay' ),
    );
    $options['overlay-footer-layout'] = array(
        'id' => 'overlay-footer-layout',
        'label'   => __( 'Footer Layout', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'footer-default'
    );

    // Default/Custom Footer Layout
    $options['overlay-noteon-footer-default'] = array(
        'id' => 'overlay-noteon-footer-default',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'The Custom Footer is built with <i><a href="#widgets" rel="tc-panel">Widgets</a></i>, or go to Dashboard -> Appearance -> Widgets', 'overlay' )
    );
    $choices = array(
        'overlay-footer-custom-cols-1' => __( '1 Column', 'overlay' ),
        'overlay-footer-custom-cols-2' => __( '2 Columns', 'overlay' ),
        'overlay-footer-custom-cols-3' => __( '3 Columns', 'overlay' ),
        'overlay-footer-custom-cols-4' => __( '4 Columns', 'overlay' ),
        'overlay-footer-custom-cols-5' => __( '5 Columns', 'overlay' )
    );
    $options['overlay-footer-custom-cols'] = array(
        'id' => 'overlay-footer-custom-cols',
        'label'   => __( 'Columns', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-footer-custom-cols-3'
    );

    $options['overlay-footer-customize'] = array(
        'id' => 'overlay-footer-customize',
        'label'   => __( 'Custom Widths', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'Select this box to manually adjust the columns widths by percentage ( % )', 'overlay' ),
        'default' => 0,
    );

    $options['overlay-footer-customize-col-1'] = array(
        'id' => 'overlay-footer-customize-col-1',
        'label'   => __( 'Column 1 %', 'overlay' ),
        'section' => $section,
        'type'    => 'number',
    );
    $options['overlay-center-col-1'] = array(
        'id' => 'overlay-center-col-1',
        'label'   => __( 'Center Column', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'Reduce the width of the column to center it', 'overlay' ),
        'default' => 0,
    );
    $options['overlay-footer-customize-col-2'] = array(
        'id' => 'overlay-footer-customize-col-2',
        'label'   => __( 'Column 2 %', 'overlay' ),
        'section' => $section,
        'type'    => 'number',
    );
    $options['overlay-footer-customize-col-3'] = array(
        'id' => 'overlay-footer-customize-col-3',
        'label'   => __( 'Column 3 %', 'overlay' ),
        'section' => $section,
        'type'    => 'number',
    );
    $options['overlay-footer-customize-col-4'] = array(
        'id' => 'overlay-footer-customize-col-4',
        'label'   => __( 'Column 4 %', 'overlay' ),
        'section' => $section,
        'type'    => 'number',
    );
    $options['overlay-footer-customize-col-5'] = array(
        'id' => 'overlay-footer-customize-col-5',
        'label'   => __( 'Column 5 %', 'overlay' ),
        'section' => $section,
        'type'    => 'number',
    );

    // Social Footer Layout
    $options['overlay-noteon-footer-social'] = array(
        'id' => 'overlay-noteon-footer-social',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'Add your <a href="#overlay-social-section" rel="tc-section">Social links</a> to the footer', 'overlay' )
    );
    $options['overlay-footer-social-menuitems-one'] = array(
        'id' => 'overlay-footer-social-menuitems-one',
        'label'   => __( 'Footer Navigation Vertical', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-footer-remove-social'] = array(
        'id' => 'overlay-footer-remove-social',
        'label'   => __( 'Remove Social Icons', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'overlay-footicon-plain' => __( 'Plain', 'overlay' ),
        'overlay-footicon-round' => __( 'Round', 'overlay' ),
        'overlay-footicon-rounded' => __( 'Rounded', 'overlay' ),
        'overlay-footicon-square' => __( 'Square', 'overlay' ),
        'overlay-footicon-circled' => __( 'Circled', 'overlay' )
    );
    $options['overlay-footer-icon-style'] = array(
        'id' => 'overlay-footer-icon-style',
        'label'   => __( 'Social Icons Style', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-footicon-plain'
    );
    $rangedefault = get_theme_mod( 'overlay-footer-icon-size', 44 );
    $options['overlay-footer-icon-size'] = array(
        'id' => 'overlay-footer-icon-size',
        'label'   => __( 'Social Icons Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 22,
            'max'   => 68,
            'step'  => 1,
        ),
        'default' => 44,
        'description' => '<span class="fst">22</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">68</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-footer-icon-space', 10 );
    $options['overlay-footer-icon-space'] = array(
        'id' => 'overlay-footer-icon-space',
        'label'   => __( 'Social Icons Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 2,
            'max'   => 80,
            'step'  => 1,
        ),
        'default' => 10,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">80</span>'
    );
    
    // Widget Split Footer Layout
    $options['overlay-noteon-footer-split'] = array(
        'id' => 'overlay-noteon-footer-split',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'The Standard Footer is divided into columns by the amount of widgets that are added under<br /><i>Dashboard -> Appearance -> <a href="#widgets" rel="tc-panel">Widgets</a></i>', 'overlay' )
    );

    // Footer Settings
    $rangedefault = get_theme_mod( 'overlay-footer-widget-space', 20 );
    $options['overlay-footer-widget-space'] = array(
        'id' => 'overlay-footer-widget-space',
        'label'   => __( 'Widget Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 2,
            'max'   => 80,
            'step'  => 1,
        ),
        'default' => 20,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">80</span>'
    );
    $choices = array(
        'overlay-footalign-top' => __( 'Top', 'overlay' ),
        'overlay-footalign-middle' => __( 'Middle', 'overlay' ),
        'overlay-footalign-bottom' => __( 'Bottom', 'overlay' ),
        'overlay-footalign-stretch' => __( 'Stretch', 'overlay' )
    );
    $options['overlay-footalign'] = array(
        'id' => 'overlay-footalign',
        'label'   => __( 'Vertically Align Footer Widgets', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-footalign-top'
    );
    $choices = array(
        'overlay-footdivide-none' => __( 'None', 'overlay' ),
        'overlay-footdivide-line' => __( 'Line', 'overlay' ),
        'overlay-footdivide-shortline' => __( 'Short Line', 'overlay' ),
        'overlay-footdivide-shortdots' => __( 'Short Dotted Line', 'overlay' )
    );
    $options['overlay-footdivide-style'] = array(
        'id' => 'overlay-footdivide-style',
        'label'   => __( 'Footer Widgets Divider', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-footdivide-none'
    );

    $rangedefault = get_theme_mod( 'overlay-footer-top-pad', 25 );
    $options['overlay-footer-top-pad'] = array(
        'id' => 'overlay-footer-top-pad',
        'label'   => __( 'Footer Top Padding', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 2,
            'max'   => 250,
            'step'  => 1,
        ),
        'default' => 25,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">250</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-footer-bottom-pad', 25 );
    $options['overlay-footer-bottom-pad'] = array(
        'id' => 'overlay-footer-bottom-pad',
        'label'   => __( 'Footer Bottom Padding', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 2,
            'max'   => 250,
            'step'  => 1,
        ),
        'default' => 25,
        'description' => '<span class="fst">2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">250</span>'
    );
    
    // Bottom Bar
    $options['overlay-heading-settings-bottombar'] = array(
        'id' => 'overlay-heading-settings-bottombar',
        'label'   => __( 'Footer Bottom Bar', 'overlay' ),
        'section' => $section,
        'type'    => 'heading',
    );
	$choices = array(
        'bottombar-default' => __( 'Default Bottom Bar', 'overlay' ),
        'bottombar-one' => __( 'Centered Social Icons Bottom Bar', 'overlay' ),
        'bottombar-two' => __( 'Centered Menu Bottom Bar', 'overlay' ),
    );
    $options['overlay-bottombar-layout'] = array(
        'id' => 'overlay-bottombar-layout',
        'label'   => __( 'Bottom Bar Layout', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'bottombar-default'
    );
    if ( class_exists( 'WooCommerce' ) ) :
        $options['overlay-add-botbar-cart'] = array(
            'id' => 'overlay-add-botbar-cart',
            'label'   => __( 'Add WooCommerce Cart', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $options['overlay-add-botbar-fullcart'] = array(
            'id' => 'overlay-add-botbar-fullcart',
            'label'   => __( 'Add WooCommerce Full Cart Widget', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
    endif;
    $options['overlay-remove-botbar-extratxt'] = array(
        'id' => 'overlay-remove-botbar-extratxt',
        'label'   => __( 'Remove Extra Text', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-remove-botbar-address'] = array(
        'id' => 'overlay-remove-botbar-address',
        'label'   => __( 'Remove Address', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-bottombar-switch'] = array(
        'id' => 'overlay-bottombar-switch',
        'label'   => __( 'Switch Bottom Bar', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $rangedefault = get_theme_mod( 'overlay-bottombar-spacing-top', 5 );
    $options['overlay-bottombar-spacing-top'] = array(
        'id' => 'overlay-bottombar-spacing-top',
        'label'   => __( 'Spacing above Bottom Bar', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 1,
            'max'   => 100,
            'step'  => 1,
        ),
        'default' => 5,
        'description' => '<span class="fst">1</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">100</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-bottombar-spacing-bottom', 5 );
    $options['overlay-bottombar-spacing-bottom'] = array(
        'id' => 'overlay-bottombar-spacing-bottom',
        'label'   => __( 'Spacing below Bottom Bar', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 1,
            'max'   => 100,
            'step'  => 1,
        ),
        'default' => 5,
        'description' => '<span class="fst">1</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">100</span>'
    );
    $options['overlay-note-footer'] = array(
        'id' => 'overlay-note-footer',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<span><b>Overlay Pro Features:</b><br />- Add & Edit your own SiteBy Link<br/>- Edit Site Attribution Text (Theme: Overlay by Kaira)<br />- Add Footer Background Image<br />- Configure Footer Background Image<br />- Remove the Footer Bottom Bar<br />- Remove Social Icons & Others from Bottom Bar<br />- Center the Bottom Bar Contents', 'overlay' )
    );
    // ------------------------------------------------------------------------------------------- Footer

    // ------------------------------------------------------------------------------------------- 404 Error Page
    $section = 'overlay-panel-settings-section-error';
	$sections[] = array(
        'id' => $section,
        'title' => __( '404 Error Page', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['overlay-error-remove-title'] = array(
        'id' => 'overlay-error-remove-title',
        'label'   => __( 'Remove 404 Title', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-error-remove-img'] = array(
        'id' => 'overlay-error-remove-img',
        'label'   => __( 'Remove Image / Ban Sign', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-error-remove-text'] = array(
        'id' => 'overlay-error-remove-text',
        'label'   => __( 'Remove 404 Text', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-error-remove-search'] = array(
        'id' => 'overlay-error-remove-search',
        'label'   => __( 'Remove Search', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-error-remove-btn'] = array(
        'id' => 'overlay-error-remove-btn',
        'label'   => __( 'Remove Home Button', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );

    $options['overlay-error-title'] = array(
        'id' => 'overlay-error-title',
        'label'   => __( 'Page Title', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Oops! That page can&rsquo;t be found.', 'overlay'),
    );
    $options['overlay-error-text'] = array(
        'id' => 'overlay-error-text',
        'label'   => __( 'Page Text', 'overlay' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'It looks like nothing was found at this location. Maybe try a search below, or return to home.', 'overlay'),
    );
    $options['overlay-note-error'] = array(
        'id' => 'overlay-note-error',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<span><b>Overlay Pro Features:</b><br />- Change the layout of the Error 404 Page<br/>- Upload your own 404 Error image', 'overlay' )
    );
    // ------------------------------------------------------------------------------------------- 404 Error Page

    // ---------------- PANEL - Blog Settings
    $panel = 'overlay-panel-blog-settings';
    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Overlay Blog Settings', 'overlay' ),
        'priority' => '30'
    );

    // ------------------------------------------------------------------------------------------- Blog List Settings
    $section = 'overlay-panel-blog-settings-list';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Blog List', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );

    $choices = array(
        'overlay-blog-left' => __( 'Left Layout', 'overlay' ),
        'overlay-blog-right' => __( 'Right Layout', 'overlay' ),
        'overlay-blog-alt' => __( 'Alternate Layout', 'overlay' ),
        'overlay-blog-top' => __( 'Top Layout', 'overlay' ),
        'overlay-blog-grid' => __( 'Grid Layout', 'overlay' ),
        'overlay-blog-tile' => __( 'Tiled Blocks Layout', 'overlay' ),
    );
    $options['overlay-blog-list-layout'] = array(
        'id' => 'overlay-blog-list-layout',
        'label'   => __( 'Blog Layout', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-blog-left'
    );
    $options['overlay-blog-break'] = array(
        'id' => 'overlay-blog-break',
        'label'   => __( 'Break out of the content', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-blog-vert-center-items'] = array(
        'id' => 'overlay-blog-vert-center-items',
        'label'   => __( 'Vertically Center Image & Content', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-blog-img-shadow'] = array(
        'id' => 'overlay-blog-img-shadow',
        'label'   => __( 'Add Box Shadow to Blog Image', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-blog-top-center'] = array(
        'id' => 'overlay-blog-top-center',
        'label'   => __( 'Center Align Post Content', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $rangedefault = get_theme_mod( 'overlay-blog-list-post-space', 25 );
    $options['overlay-blog-list-post-space'] = array(
        'id' => 'overlay-blog-list-post-space',
        'label'   => __( 'Post Bottom Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 15,
            'max'   => 120,
            'step'  => 1,
        ),
        'default' => 25,
        'description' => '<span class="fst">15</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">120</span>'
    );
    $options['overlay-blog-grid-cols'] = array(
        'id' => 'overlay-blog-grid-cols',
        'label'   => __( 'Grid Columns', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 2,
            'max'   => 5,
            'step'  => 1,
        ),
        'description' => __( '2 <b>|</b> 3 <b>|</b> 4 <b>|</b> 5', 'overlay' ),
        'default' => 3
    );
    $rangedefault = get_theme_mod( 'overlay-blog-grid-space', 8 );
    $options['overlay-blog-grid-space'] = array(
        'id' => 'overlay-blog-grid-space',
        'label'   => __( 'Grid Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 4,
            'max'   => 40,
            'step'  => 1,
        ),
        'default' => 8,
        'description' => '<span class="fst">4</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">40</span>'
    );

    $choices = array(
        'post-thumbnail' => __( 'Post Thumbnail', 'overlay' ),
        'actual' => __( 'Actual Image / Image Cut', 'overlay' ),
        '1-1' => __( 'Square Image (1:1)', 'overlay' ),
        '3-2' => __( 'Standard (3:2)', 'overlay' ),
        '4-3' => __( 'Micro Four-Thirds (4:3)', 'overlay' ),
        'round' => __( 'Round Image', 'overlay' )
    );
    $options['overlay-blog-list-img-prop'] = array(
        'id' => 'overlay-blog-list-img-prop',
        'label'   => __( 'Image Proportion', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'post-thumbnail'
    );
    $options['overlay-blog-list-img-cut'] = array(
        'id' => 'overlay-blog-list-img-cut',
        'label'   => __( 'Image Cut to use', 'overlay' ),
        'section' => $section,
        'type'    => 'imageselect',
        'description' => __( 'Select which cut the Blog list uses<br />Recommended: Optimize images before upload', 'overlay' ),
        'default' => 'large'
    );

    $choices = array(
        'overlay-tile-slide-bottom' => __( 'Slide In - Bottom', 'overlay' ),
        'overlay-tile-slide-left' => __( 'Slide In - Left', 'overlay' ),
        'overlay-tile-slide-right' => __( 'Slide In - Right', 'overlay' ),
        'overlay-tile-fade' => __( 'Fade In', 'overlay' ),
        'overlay-tile-grow' => __( 'Grow In', 'overlay' ),
        'overlay-tile-grow-out' => __( 'Zoom Out', 'overlay' )
    );
    $options['overlay-blog-tile-anim'] = array(
        'id' => 'overlay-blog-tile-anim',
        'label'   => __( 'Post Content Animation', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-tile-slide-bottom'
    );
    $choices = array(
        'overlay-imgstyle-none' => __( 'None / Normal', 'overlay' ),
        'overlay-imgstyle-bw' => __( 'Black & White | Color on hover', 'overlay' ),
        'overlay-imgstyle-bg' => __( 'Blur & Grayscale on hover', 'overlay' ),
        'overlay-imgstyle-flash' => __( 'Flash on hover', 'overlay' ),
        'overlay-imgstyle-shine' => __( 'Shine on hover', 'overlay' ),
        'overlay-imgstyle-circle' => __( 'Circle on hover', 'overlay' )
    );
    $options['overlay-blog-img-style-anim'] = array(
        'id' => 'overlay-blog-img-style-anim',
        'label'   => __( 'Post Image Style/Animation', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-imgstyle-none'
    );

    $options['overlay-help-pagination-txt'] = array(
        'id' => 'overlay-help-pagination-txt',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<b>Overlay Pro Blog Pagination:</b><br />- Ajax Load New Posts with \'Load More\' button<br />- Ajax Load new posts as user Scrolls | Infinite Scroll<br />- Neat Numeric/Numbered Pagination', 'overlay' ),
    );

    $options['overlay-blog-heading-search'] = array(
        'id' => 'overlay-blog-heading-search',
        'label'   => __( 'Search Results Layout', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $options['overlay-blog-list-search'] = array(
        'id' => 'overlay-blog-list-search',
        'label'   => __( 'Change Search Results to a basic Layout', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'overlay-blog-left' => __( 'Left Layout', 'overlay' ),
        'overlay-blog-right' => __( 'Right Layout', 'overlay' ),
        'overlay-blog-alt' => __( 'Alternate Layout', 'overlay' ),
        'overlay-blog-top' => __( 'Top Layout', 'overlay' )
    );
    $options['overlay-blog-search-list-layout'] = array(
        'id' => 'overlay-blog-search-list-layout',
        'label'   => __( 'Search Results Layout', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-blog-left'
    );

    // Advanced Settings
    $options['overlay-blog-advanced-set'] = array(
        'id' => 'overlay-blog-advanced-set',
        'label'   => __( 'Blog List Advanced Settings', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-blog-list-title-fweight'] = array(
        'id' => 'overlay-blog-list-title-fweight',
        'label'   => __( 'Blog Title - Font Weight', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $fontweight_choices,
        'default' => '500'
    );
    $rangedefault = get_theme_mod( 'overlay-blog-list-title-space', 22 );
    $options['overlay-blog-list-title-space'] = array(
        'id' => 'overlay-blog-list-title-space',
        'label'   => __( 'Blog Title Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 50,
            'step'  => 1,
        ),
        'default' => 22,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">50</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-blog-list-font-size', 16 );
    $options['overlay-blog-list-font-size'] = array(
        'id' => 'overlay-blog-list-font-size',
        'label'   => __( 'Blog Post Font Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 12,
            'max'   => 28,
            'step'  => 1,
        ),
        'default' => 16,
        'description' => '<span class="fst">12</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">28</span>'
    );
    $options['overlay-blog-list-imgcont-size'] = array(
        'id' => 'overlay-blog-list-imgcont-size',
        'label'   => __( 'Image / Content Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'description' => __( 'This only applies to Left, Right & Alternate layouts', 'overlay' ),
        'input_attrs' => array(
            'min'   => 15,
            'max'   => 60,
            'step'  => 1,
        ),
        'default' => 30,
        'description' => '<span class="fst">15</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">60</span>'
    );
    $options['overlay-note-blog-list'] = array(
        'id' => 'overlay-note-blog-list',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<span><b>Overlay Pro Features:</b><br />- Add Shortened Content with button link to post<br/>- Remove \'Pages\' from WordPress Search Results<br/>- Remove text before Archive/Categories Title<br />- Remove Post Categories, Tags and/or Comments<br />- Remove Post Date and/or Author<br />- Turn off Content on Tile Layout<br />- Set Blog Post Title Size', 'overlay' )
    );
    // ------------------------------------------------------------------------------------------- Blog List Settings

    // ------------------------------------------------------------------------------------------- Blog Single Post Settings
    $section = 'overlay-panel-blog-settings-single-post';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Blog Single Post', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['overlay-blog-post-fimage'] = array(
        'id' => 'overlay-blog-post-fimage',
        'label'   => __( 'Remove Featured Image', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $choices = array(
        'overlay-postnav-default' => __( 'Default / Basic Layout', 'overlay' ),
        'overlay-postnav-barrows' => __( 'Browser Arrows Layout', 'overlay' ),
        'overlay-postnav-none' => __( 'None', 'overlay' )
    );
    $options['overlay-blog-post-nav-layout'] = array(
        'id' => 'overlay-blog-post-nav-layout',
        'label'   => __( 'Post Navigation Layout', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-postnav-default'
    );
    $choices = array(
        'overlay-comments-default' => __( 'Default / Basic Layout', 'overlay' ),
        'overlay-comments-bubble' => __( 'Bubble Layout', 'overlay' ),
    );
    $options['overlay-blog-comments-layout'] = array(
        'id' => 'overlay-blog-comments-layout',
        'label'   => __( 'Comments Style', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-comments-default'
    );
    
    $options['overlay-note-blog-post'] = array(
        'id' => 'overlay-note-blog-post',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<span><b>Overlay Pro Features:</b><br />- Remove Post Categories and/or Tags<br />- Remove Post Date and/or Author<br />- Add and Customize Post Author Block<br />- Move comments form above/below comments', 'overlay' )
    );
    // ------------------------------------------------------------------------------------------- Blog Single Post Settings

    // ---------------- PANEL - Font Settings
    $panel = 'overlay-panel-font-settings';
    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Overlay Font Settings', 'overlay' ),
        'priority' => '30'
    );
    
    // ------------------------------------------------------------------------------------------- Default Site Fonts
    $section = 'overlay-panel-font-settings-default';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Default Site Fonts', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['overlay-disable-google-font'] = array(
        'id' => 'overlay-disable-google-font',
        'label'   => __( 'Disable Google Fonts', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'This will remove the connection to Google Fonts and let you select only web-safe fonts', 'overlay' ),
        'default' => 0,
    );

    $font_websafe_choices = array( 'Arial' => 'Arial', 'Arial Black' => 'Arial Black', 'Helvetica' => 'Helvetica', 'Verdana' => 'Verdana', 'Georgia' => 'Georgia', 'Palatino' => 'Palatino', 'Garamond' => 'Garamond', 'Bookman' => 'Bookman', 'Courier' => 'Courier', 'Courier New' => 'Courier New', 'Times New Roman' => 'Times New Roman', 'Times' => 'Times' );
    $font_google_choices = customizer_library_get_font_choices();

    $options['overlay-body-font'] = array(
        'id' => 'overlay-body-font',
        'label'   => __( 'Body Font', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_google_choices,
        'default' => 'Open Sans'
    );
    $options['overlay-body-font-websafe'] = array(
        'id' => 'overlay-body-font-websafe',
        'label'   => __( 'Body Font', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_websafe_choices,
        'default' => 'Arial'
    );
    $options['overlay-body-fonts-size'] = array(
        'id' => 'overlay-body-fonts-size',
        'label'   => __( 'Body Font Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 1,
            'max'   => 6,
            'step'  => 1,
        ),
        'description' => __( 'Smaller <b>|</b> Small <b>|</b> Normal <b>|</b> Medium <b>|</b> Large <b>|</b> Larger', 'overlay' ),
        'default' => 3
    );
    $rangedefault = get_theme_mod( 'overlay-body-font-lheight', 1.5 );
    $options['overlay-body-font-lheight'] = array(
        'id' => 'overlay-body-font-lheight',
        'label'   => __( 'Body Font Line Height', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 1.2,
            'max'   => 2.8,
            'step'  => 0.1,
        ),
        'default' => 1.5,
        'description' => '<span class="fst">1.2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i></span><span class="lst">2.8</span>'
    );
    $options['overlay-heading-font'] = array(
        'id' => 'overlay-heading-font',
        'label'   => __( 'Heading Font', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_google_choices,
        'default' => 'Poppins'
    );
    $options['overlay-heading-font-websafe'] = array(
        'id' => 'overlay-heading-font-websafe',
        'label'   => __( 'Heading Font', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_websafe_choices,
        'default' => 'Verdana'
    );
    $options['overlay-heading-fonts-size'] = array(
        'id' => 'overlay-heading-fonts-size',
        'label'   => __( 'Heading Size Proportions', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 1,
            'max'   => 4,
            'step'  => 1,
        ),
        'description' => __( 'Small <b>|</b> Normal <b>|</b> Medium <b>|</b> Large', 'overlay' ),
        'default' => 2
    );
    // ------------------------------------------------------------------------------------------- Default Site Fonts

    // ------------------------------------------------------------------------------------------- Title / Tagline Fonts
    $section = 'overlay-panel-font-settings-title-tagline';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Title / Tagline Fonts', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['overlay-title-font'] = array(
        'id' => 'overlay-title-font',
        'label'   => __( 'Site Title Font', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_google_choices,
        'default' => 'Poppins'
    );
    $options['overlay-title-font-uppercase'] = array(
        'id' => 'overlay-title-font-uppercase',
        'label'   => __( 'Font Style - Uppercase', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-title-font-websafe'] = array(
        'id' => 'overlay-title-font-websafe',
        'label'   => __( 'Site Title Font', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_websafe_choices,
        'default' => 'Verdana'
    );
    $rangedefault = get_theme_mod( 'overlay-title-size', 64 );
    $options['overlay-title-size'] = array(
        'id' => 'overlay-title-size',
        'label'   => __( 'Site Title Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 12,
            'max'   => 120,
            'step'  => 1,
        ),
        'default' => 64,
        'description' => '<span class="fst">12</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">120</span>'
    );
    $options['overlay-title-fweight'] = array(
        'id' => 'overlay-title-fweight',
        'label'   => __( 'Site Title - Font Weight', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $fontweight_choices,
        'default' => '400'
    );
    
    $options['overlay-tagline-font'] = array(
        'id' => 'overlay-tagline-font',
        'label'   => __( 'Site Tagline Font', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_google_choices,
        'default' => 'Poppins'
    );
    $options['overlay-tagline-font-uppercase'] = array(
        'id' => 'overlay-tagline-font-uppercase',
        'label'   => __( 'Font Style - Uppercase', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-tagline-font-websafe'] = array(
        'id' => 'overlay-tagline-font-websafe',
        'label'   => __( 'Site Tagline Font', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_websafe_choices,
        'default' => 'Arial'
    );
    $rangedefault = get_theme_mod( 'overlay-tagline-size', 14 );
    $options['overlay-tagline-size'] = array(
        'id' => 'overlay-tagline-size',
        'label'   => __( 'Site Tagline Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 11,
            'max'   => 32,
            'step'  => 1,
        ),
        'default' => 14,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">32</span>'
    );
    $options['overlay-tagline-fweight'] = array(
        'id' => 'overlay-tagline-fweight',
        'label'   => __( 'Site Tagline - Font Weight', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $fontweight_choices,
        'default' => '300'
    );

    // ------------------------------------------------------------------------------------------- Title / Tagline Fonts

    
    // ------------------------------------------------------------------------------------------- Header
	$section = 'overlay-panel-font-settings-section-header';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Header', 'overlay' ),
        'priority' => '10',
        'description' => __( 'Edit <a href="#overlay-panel-settings-section-header" rel="tc-section">Header Settings</a>', 'overlay' ),
        'panel' => $panel
    );
    $options['overlay-font-heading-header'] = array(
        'id' => 'overlay-font-heading-header',
        'label'   => __( 'Top Bar', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $rangedefault = get_theme_mod( 'overlay-topbar-font-size', 13 );
    $options['overlay-topbar-font-size'] = array(
        'id' => 'overlay-topbar-font-size',
        'label'   => __( 'Font Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 11,
            'max'   => 28,
            'step'  => 1,
        ),
        'default' => 13,
        'description' => '<span class="fst">13</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">28</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-topbar-social-size', 15 );
    $options['overlay-topbar-social-size'] = array(
        'id' => 'overlay-topbar-social-size',
        'label'   => __( 'Social Icons Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 11,
            'max'   => 40,
            'step'  => 1,
        ),
        'default' => 15,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">40</span>'
    );
    
    $options['overlay-font-heading-nav'] = array(
        'id' => 'overlay-font-heading-nav',
        'label'   => __( 'Main Navigation', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $options['overlay-main-nav-font'] = array(
        'id' => 'overlay-main-nav-font',
        'label'   => __( 'Main Navigation Font', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_google_choices,
        'default' => 'Lato'
    );
    $options['overlay-nav-uppercase'] = array(
        'id' => 'overlay-nav-uppercase',
        'label'   => __( 'Font Style - Uppercase', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-main-nav-font-websafe'] = array(
        'id' => 'overlay-main-nav-font-websafe',
        'label'   => __( 'Main Navigation Font', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_websafe_choices,
        'default' => 'Verdana'
    );
    $rangedefault = get_theme_mod( 'overlay-nav-font-size', 16 );
    $options['overlay-nav-font-size'] = array(
        'id' => 'overlay-nav-font-size',
        'label'   => __( 'Font Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 11,
            'max'   => 34,
            'step'  => 1,
        ),
        'default' => 16,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">34</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-nav-drop-down-font-size', 16 );
    $options['overlay-nav-drop-down-font-size'] = array(
        'id' => 'overlay-nav-drop-down-font-size',
        'label'   => __( 'Drop Down Items - Font Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 11,
            'max'   => 34,
            'step'  => 1,
        ),
        'default' => 16,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">34</span>'
    );
    // ------------------------------------------------------------------------------------------- Header

    // ------------------------------------------------------------------------------------------- Page Title
    $section = 'overlay-panel-font-settings-section-title';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Page Title', 'overlay' ),
        'priority' => '10',
        'description' => __( 'Edit <a href="#overlay-panel-settings-section-title" rel="tc-section">Page Title font sizes</a>', 'overlay' ),
        'panel' => $panel
    );

    $rangedefault = get_theme_mod( 'overlay-page-title-font-size', 34 );
    $options['overlay-page-title-font-size'] = array(
        'id' => 'overlay-page-title-font-size',
        'label'   => __( 'Page Title - Font Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 18,
            'max'   => 82,
            'step'  => 1,
        ),
        'default' => 34,
        'description' => '<span class="fst">18</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">82</span>'
    );
    // Uses the font-weight choices at the top
    $options['overlay-page-title-font-weight'] = array(
        'id' => 'overlay-page-title-font-weight',
        'label'   => __( 'Title - Font Weight', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $fontweight_choices,
        'default' => '600'
    );
    $options['overlay-page-title-upper'] = array(
        'id' => 'overlay-page-title-upper',
        'label'   => __( 'Page Title - Uppercase', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );

    $rangedefault = get_theme_mod( 'overlay-page-title-spacing', 20 );
    $options['overlay-page-title-spacing'] = array(
        'id' => 'overlay-page-title-spacing',
        'label'   => __( 'Title Bottom Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 100,
            'step'  => 1,
        ),
        'default' => 20,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">100</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-breadcrumbs-font-size', 13 );
    $options['overlay-breadcrumbs-font-size'] = array(
        'id' => 'overlay-breadcrumbs-font-size',
        'label'   => __( 'Breadcrumbs - Font Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 22,
            'step'  => 1,
        ),
        'default' => 13,
        'description' => '<span class="fst">10</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">22</span>'
    );
    $options['overlay-breadcrumbs-upper'] = array(
        'id' => 'overlay-breadcrumbs-upper',
        'label'   => __( 'Breadcrumbs - Uppercase', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $rangedefault = get_theme_mod( 'overlay-breadcrumbs-spacing', 0 );
    $options['overlay-breadcrumbs-spacing'] = array(
        'id' => 'overlay-breadcrumbs-spacing',
        'label'   => __( 'Breadcrumbs Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 30,
            'step'  => 1,
        ),
        'default' => 0,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">30</span>'
    );
    // ------------------------------------------------------------------------------------------- Page Title

    // ------------------------------------------------------------------------------------------- Content
    $section = 'overlay-panel-font-settings-section-content';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Content', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );
    
    $options['overlay-font-heading-content'] = array(
        'id' => 'overlay-font-heading-content',
        'label'   => __( 'Content Area', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $rangedefault = get_theme_mod( 'overlay-content-font-size', 16 );
    $options['overlay-content-font-size'] = array(
        'id' => 'overlay-content-font-size',
        'label'   => __( 'Content - Font Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 11,
            'max'   => 28,
            'step'  => 1,
        ),
        'default' => 16,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">28</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-content-lheight', 1.5 );
    $options['overlay-content-lheight'] = array(
        'id' => 'overlay-content-lheight',
        'label'   => __( 'Content - Line Height', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 1.2,
            'max'   => 2.8,
            'step'  => 0.1,
        ),
        'default' => 1.5,
        'description' => '<span class="fst">1.2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i></span><span class="lst">2.8</span>'
    );
    
    $options['overlay-font-heading-widget'] = array(
        'id' => 'overlay-font-heading-widget',
        'label'   => __( 'Widget Area', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $rangedefault = get_theme_mod( 'overlay-widget-font-title', 20 );
    $options['overlay-widget-font-title'] = array(
        'id' => 'overlay-widget-font-title',
        'label'   => __( 'Widget Title Font Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 12,
            'max'   => 30,
            'step'  => 1,
        ),
        'default' => 20,
        'description' => '<span class="fst">12</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">30</span>'
    );
    $options['overlay-widget-title-fweight'] = array(
        'id' => 'overlay-widget-title-fweight',
        'label'   => __( 'Title - Font Weight', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $fontweight_choices,
        'default' => '600'
    );
    $rangedefault = get_theme_mod( 'overlay-widget-title-spacing', 10 );
    $options['overlay-widget-title-spacing'] = array(
        'id' => 'overlay-widget-title-spacing',
        'label'   => __( 'Widgets Title - Bottom Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 1,
            'max'   => 60,
            'step'  => 1,
        ),
        'default' => 10,
        'description' => '<span class="fst">1</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">60</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-widget-font-size', 16 );
    $options['overlay-widget-font-size'] = array(
        'id' => 'overlay-widget-font-size',
        'label'   => __( 'Widgets - Font Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 11,
            'max'   => 28,
            'step'  => 1,
        ),
        'default' => 16,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">28</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-widget-lheight', 1.5 );
    $options['overlay-widget-lheight'] = array(
        'id' => 'overlay-widget-lheight',
        'label'   => __( 'Widgets - Line Height', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 1.2,
            'max'   => 2.8,
            'step'  => 0.1,
        ),
        'default' => 1.5,
        'description' => '<span class="fst">1.2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i></span><span class="lst">2.8</span>'
    );
    // ------------------------------------------------------------------------------------------- Content


    // ------------------------------------------------------------------------------------------- Footer
    $section = 'overlay-panel-font-settings-section-footer';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Footer', 'overlay' ),
        'priority' => '10',
        'description' => __( 'Edit <a href="#overlay-panel-settings-section-footer" rel="tc-section">Footer Settings</a>', 'overlay' ),
        'panel' => $panel
    );

    $options['overlay-font-heading-footer'] = array(
        'id' => 'overlay-font-heading-footer',
        'label'   => __( 'Footer', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $rangedefault = get_theme_mod( 'overlay-footer-title-size', 20 );
    $options['overlay-footer-title-size'] = array(
        'id' => 'overlay-footer-title-size',
        'label'   => __( 'Widget Title Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 12,
            'max'   => 44,
            'step'  => 1,
        ),
        'default' => 20,
        'description' => '<span class="fst">12</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">44</span>'
    );
    // Uses the font-weight choices at the top
    $options['overlay-footer-title-weight'] = array(
        'id' => 'overlay-footer-title-weight',
        'label'   => __( 'Title - Font Weight', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $fontweight_choices,
        'default' => '600'
    );
    $options['overlay-footer-title-uc'] = array(
        'id' => 'overlay-footer-title-uc',
        'label'   => __( 'Title - Uppercase', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $rangedefault = get_theme_mod( 'overlay-footer-title-space', 10 );
    $options['overlay-footer-title-space'] = array(
        'id' => 'overlay-footer-title-space',
        'label'   => __( 'Title Bottom Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 60,
            'step'  => 1,
        ),
        'default' => 10,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">60</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-footer-font-size', 16 );
    $options['overlay-footer-font-size'] = array(
        'id' => 'overlay-footer-font-size',
        'label'   => __( 'Font Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 11,
            'max'   => 24,
            'step'  => 1,
        ),
        'default' => 16,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">24</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-footer-lheight', 1.5 );
    $options['overlay-footer-lheight'] = array(
        'id' => 'overlay-footer-lheight',
        'label'   => __( 'Line Height', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 1.2,
            'max'   => 2.6,
            'step'  => 0.1,
        ),
        'default' => 1.5,
        'description' => '<span class="fst">1.2</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i></span><span class="lst">2.6</span>'
    );
    
    $options['overlay-font-heading-bottombar'] = array(
        'id' => 'overlay-font-heading-bottombar',
        'label'   => __( 'Bottom Bar', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $rangedefault = get_theme_mod( 'overlay-bottombar-font-size', 13 );
    $options['overlay-bottombar-font-size'] = array(
        'id' => 'overlay-bottombar-font-size',
        'label'   => __( 'Font Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 11,
            'max'   => 18,
            'step'  => 1,
        ),
        'default' => 13,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">18</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-bottombar-social-size', 15 );
    $options['overlay-bottombar-social-size'] = array(
        'id' => 'overlay-bottombar-social-size',
        'label'   => __( 'Social Icons Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 11,
            'max'   => 40,
            'step'  => 1,
        ),
        'default' => 15,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">40</span>'
    );
    $options['overlay-footer-menu-uppercase'] = array(
        'id' => 'overlay-footer-menu-uppercase',
        'label'   => __( 'Footer Menu - Uppercase', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // ------------------------------------------------------------------------------------------- Footer

    // ---------------- PANEL - Edit Text
    $panel = 'overlay-panel-edit-text';
    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Overlay Edit Text', 'overlay' ),
        'priority' => '30'
	);
    
    // ------------------------------------------------------------------------------------------- Header
	$section = 'overlay-panel-edit-text-section-topbar';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Header', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );
    $options['overlay-edit-text-help'] = array(
        'id' => 'overlay-edit-text-help',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'Use your own icon by adding "fa-" and the corrent <a href="https://fontawesome.com/icons?d=gallery&c=buildings,business,chat,code,date-time,design,editors,maps,marketing,shapes,travel,writing&m=free" target="_blank">Font Awesome</a> class name. Eg: "fa-phone"<br /><br />Or remove the icon by saving an empty input.', 'overlay' ),
    );
    $options['overlay-edit-text-phone-icon'] = array(
        'id' => 'overlay-edit-text-phone-icon',
        'label'   => __( 'Phone Number Icon', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'fa-phone', 'overlay')
    );
    $options['overlay-edit-text-phone'] = array(
        'id' => 'overlay-edit-text-phone',
        'label'   => __( 'Phone Number', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Call Us: +2782 444 YEAH', 'overlay' )
    );

    $options['overlay-edit-text-address-icon'] = array(
        'id' => 'overlay-edit-text-address-icon',
        'label'   => __( 'Address Icon', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'fa-map-marker-alt', 'overlay')
    );
    $options['overlay-edit-text-address'] = array(
        'id' => 'overlay-edit-text-address',
        'label'   => __( 'Address', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Cape Town, South Africa', 'overlay' )
    );
    $options['overlay-text-heading-nav'] = array(
        'id' => 'overlay-text-heading-nav',
        'label'   => __( 'Navigation - Mobile', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $options['overlay-mobile-menu-text'] = array(
        'id' => 'overlay-mobile-menu-text',
        'label'   => __( 'Mobile Navigation - Menu Button Text', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Menu', 'overlay' )
    );
    $options['overlay-mobile-menu-addicon'] = array(
        'id' => 'overlay-mobile-menu-addicon',
        'label'   => __( 'Add Mobile Menu Icon', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $options['overlay-mobile-menu-icon'] = array(
        'id' => 'overlay-mobile-menu-icon',
        'label'   => __( 'Mobile Menu Icon', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'fa-bars', 'overlay'),
        'description' => __( 'Use any of the <a href="https://fontawesome.com/icons?d=gallery&s=solid&m=free" target="_blank">Free, Solid Icons</a> here', 'overlay' ),
    );
    // ------------------------------------------------------------------------------------------- Header

    // ------------------------------------------------------------------------------------------- Footer
	$section = 'overlay-panel-edit-text-section-bottombar';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Footer', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['overlay-edit-text-foot-help'] = array(
        'id' => 'overlay-edit-text-foot-help',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'Use your own icon by adding "fa-" and the corrent <a href="https://fontawesome.com/icons?d=gallery&c=buildings,business,chat,code,date-time,design,editors,maps,marketing,shapes,travel,writing&m=free" target="_blank">Font Awesome</a> class name. Eg: "fa-phone"<br /><br />Or remove the icon by saving an empty input.', 'overlay' ),
    );

    $options['overlay-edit-text-footer-address-icon'] = array(
        'id' => 'overlay-edit-text-footer-address-icon',
        'label'   => __( 'Address Icon', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'fa-map-marker-alt', 'overlay')
    );
    $options['overlay-edit-text-footer-address'] = array(
        'id' => 'overlay-edit-text-footer-address',
        'label'   => __( 'Address', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Cape Town, South Africa', 'overlay' )
    );

    $options['overlay-edit-text-footer-extratxt-icon'] = array(
        'id' => 'overlay-edit-text-footer-extratxt-icon',
        'label'   => __( 'Extra Text Icon', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'fa-leaf', 'overlay')
    );
    $options['overlay-edit-text-footer-extratxt'] = array(
        'id' => 'overlay-edit-text-footer-extratxt',
        'label'   => __( 'Extra Text', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Extra Text', 'overlay' )
    );
    $options['overlay-note-text-footer'] = array(
        'id' => 'overlay-note-text-footer',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<span><b>Overlay Pro Features:</b><br/>- Edit \'Theme: Overlay by Kaira\'', 'overlay' )
    );
    // ------------------------------------------------------------------------------------------- Footer

    // ---------------- PANEL - Color Settings
    $panel = 'overlay-panel-colors';
    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Overlay Color Settings', 'overlay' ),
        'priority' => '70'
    );

    // ------------------------------------------------------------------------------------------- Default Colors
    $section = 'colors';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Default Colors', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );
    
    $options['overlay-boxed-bg-color'] = array(
        'id' => 'overlay-boxed-bg-color',
        'label'   => __( 'Site Boxed/blocks Background Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['overlay-color-head-default'] = array(
        'id' => 'overlay-color-head-default',
        'label'   => __( 'Theme Colors', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $options['overlay-primary-color'] = array(
        'id' => 'overlay-primary-color',
        'label'   => __( 'Primary Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['overlay-secondary-color'] = array(
        'id' => 'overlay-secondary-color',
        'label'   => __( 'Secondary Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $secondary_color,
    );
    // ------------------------------------------------------------------------------------------- Default Colors

    // ------------------------------------------------------------------------------------------- Header
    $section = 'overlay-panel-colors-section-header';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Header', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['overlay-color-head-header-topbar'] = array(
        'id' => 'overlay-color-head-header-topbar',
        'label'   => __( 'Top Bar', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $options['overlay-topbar-bg-color'] = array(
        'id' => 'overlay-topbar-bg-color',
        'label'   => __( 'Background Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['overlay-topbar-font-color'] = array(
        'id' => 'overlay-topbar-font-color',
        'label'   => __( 'Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-color-head-header-header'] = array(
        'id' => 'overlay-color-head-header-header',
        'label'   => __( 'Header', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $options['overlay-header-bg-color'] = array(
        'id' => 'overlay-header-bg-color',
        'label'   => __( 'Background Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['overlay-header-font-color'] = array(
        'id' => 'overlay-header-font-color',
        'label'   => __( 'Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-site-title-color'] = array(
        'id' => 'overlay-site-title-color',
        'label'   => __( 'Site Title Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['overlay-site-tagline-color'] = array(
        'id' => 'overlay-site-tagline-color',
        'label'   => __( 'Site Tagline Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-color-head-header-nav'] = array(
        'id' => 'overlay-color-head-header-nav',
        'label'   => __( 'Navigation', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $options['overlay-nav-bg-color'] = array(
        'id' => 'overlay-nav-bg-color',
        'label'   => __( 'Background Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['overlay-nav-font-color'] = array(
        'id' => 'overlay-nav-font-color',
        'label'   => __( 'Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-nav-drop-bg-color'] = array(
        'id' => 'overlay-nav-drop-bg-color',
        'label'   => __( 'Drop Down - Background Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $rangedefault = get_theme_mod( 'overlay-nav-drop-opacity', 1 );
    $options['overlay-nav-drop-opacity'] = array(
        'id' => 'overlay-nav-drop-opacity',
        'label'   => __( 'Drop Down - Opacity', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0.4,
            'max'   => 1,
            'step'  => 0.1,
        ),
        'default' => 1,
        'description' => '<span class="fst">0.4</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i></span><span class="lst">1</span>'
    );
    $options['overlay-nav-drop-font-color'] = array(
        'id' => 'overlay-nav-drop-font-color',
        'label'   => __( 'Drop Down - Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-nav-selected-color'] = array(
        'id' => 'overlay-nav-selected-color',
        'label'   => __( 'Selected / Highlight Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['overlay-nav-selected-font-color'] = array(
        'id' => 'overlay-nav-selected-font-color',
        'label'   => __( 'Selected / Highlight Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['overlay-note-color-header'] = array(
        'id' => 'overlay-note-color-header',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<span><b>Overlay Pro Features:</b><br/>- Customize Sticky Header Colors<br />- Edit/Customize Mobile Menu Colors', 'overlay' )
    );
    // ------------------------------------------------------------------------------------------- Header

    // ------------------------------------------------------------------------------------------- Content
    $section = 'overlay-panel-colors-section-content';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Content Area', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['overlay-color-head-content-title'] = array(
        'id' => 'overlay-color-head-content-title',
        'label'   => __( 'Page Title', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $options['overlay-content-title-font-color'] = array(
        'id' => 'overlay-content-title-font-color',
        'label'   => __( 'Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-content-bc-font-color'] = array(
        'id' => 'overlay-content-bc-font-color',
        'label'   => __( 'Breadcrumbs Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-color-head-content-txt'] = array(
        'id' => 'overlay-color-head-content-txt',
        'label'   => __( 'Content Area', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $options['overlay-content-head-font-color'] = array(
        'id' => 'overlay-content-head-font-color',
        'label'   => __( 'Headings Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-content-font-color'] = array(
        'id' => 'overlay-content-font-color',
        'label'   => __( 'Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-content-link-color'] = array(
        'id' => 'overlay-content-link-color',
        'label'   => __( 'Link Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['overlay-content-link-hover-color'] = array(
        'id' => 'overlay-content-link-hover-color',
        'label'   => __( 'Link Hover Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $secondary_color,
    );
    $options['overlay-color-head-widget-area'] = array(
        'id' => 'overlay-color-head-widget-area',
        'label'   => __( 'Widget Area', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $options['overlay-widget-head-font-color'] = array(
        'id' => 'overlay-widget-head-font-color',
        'label'   => __( 'Widget Title Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-widget-font-color'] = array(
        'id' => 'overlay-widget-font-color',
        'label'   => __( 'Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-widgets-link-color'] = array(
        'id' => 'overlay-widgets-link-color',
        'label'   => __( 'Link Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['overlay-widgets-link-hover-color'] = array(
        'id' => 'overlay-widgets-link-hover-color',
        'label'   => __( 'Link Hover Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $secondary_color,
    );
    // ------------------------------------------------------------------------------------------- Content

    // ------------------------------------------------------------------------------------------- Footer
    $section = 'overlay-panel-colors-section-footer';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Footer', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['overlay-color-footer-head'] = array(
        'id' => 'overlay-color-footer-head',
        'label'   => __( 'Footer', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $options['overlay-footer-bg-color'] = array(
        'id' => 'overlay-footer-bg-color',
        'label'   => __( 'Background Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['overlay-footer-title-font-color'] = array(
        'id' => 'overlay-footer-title-font-color',
        'label'   => __( 'Widgets Title Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-footer-font-color'] = array(
        'id' => 'overlay-footer-font-color',
        'label'   => __( 'Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-footer-social-icons-color'] = array(
        'id' => 'overlay-footer-social-icons-color',
        'label'   => __( 'Social Icons Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-footer-link-color'] = array(
        'id' => 'overlay-footer-link-color',
        'label'   => __( 'Link Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['overlay-footer-link-hover-color'] = array(
        'id' => 'overlay-footer-link-hover-color',
        'label'   => __( 'Link Hover Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $secondary_color,
    );
    $options['overlay-color-bottombar-head'] = array(
        'id' => 'overlay-color-bottombar-head',
        'label'   => __( 'Bottom Bar', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $options['overlay-bottombar-bg-color'] = array(
        'id' => 'overlay-bottombar-bg-color',
        'label'   => __( 'Background Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#FFFFFF',
    );
    $options['overlay-bottombar-font-color'] = array(
        'id' => 'overlay-bottombar-font-color',
        'label'   => __( 'Font Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => '#404040',
    );
    $options['overlay-bottombar-link-color'] = array(
        'id' => 'overlay-bottombar-link-color',
        'label'   => __( 'Link Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $primary_color,
    );
    $options['overlay-bottombar-link-hover-color'] = array(
        'id' => 'overlay-bottombar-link-hover-color',
        'label'   => __( 'Link Hover Color', 'overlay' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $secondary_color,
    );
    // ------------------------------------------------------------------------------------------- Footer

    // ---------------- PANEL - Social Links
    $panel = 'overlay-panel-social';
    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Overlay Social Links', 'overlay' ),
        'priority' => '70'
    );

    // ------------------------------------------------------------------------------------------- Social Links Settings
    $section = 'overlay-panel-social-section-links-settings';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Social Links Settings', 'overlay' ),
        'priority' => '10',
        'panel' => $panel
    );

    $options['overlay-social-add-sideicons'] = array(
        'id' => 'overlay-social-add-sideicons',
        'label'   => __( 'Add Side Aligned Social Icons', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'Add <a href="#overlay-panel-social-section-links" rel="tc-section">Social Links</a> for this to show', 'overlay' ),
        'default' => 0,
    );
    $options['overlay-social-set-sideicons-left'] = array(
        'id' => 'overlay-social-set-sideicons-left',
        'label'   => __( 'Switch the icons to the left', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-social-let-scroll'] = array(
        'id' => 'overlay-social-let-scroll',
        'label'   => __( 'Scroll Icons with the Site', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-site-side-social-top'] = array(
        'id' => 'overlay-site-side-social-top',
        'label'   => __( 'Position from Top', 'overlay' ),
        'section' => $section,
        'type'    => 'number',
        'default' => 233,
    );
    $choices = array(
        'overlay-side-social-square' => __( 'Square', 'overlay' ),
        'overlay-side-social-rounded' => __( 'Rounded', 'overlay' ),
        'overlay-side-social-round' => __( 'Round', 'overlay' )
    );
    $options['overlay-side-social-look'] = array(
        'id' => 'overlay-side-social-look',
        'label'   => __( 'Side Social Links Design', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-side-social-square'
    );
    $rangedefault = get_theme_mod( 'overlay-side-social-size', 18 );
    $options['overlay-side-social-size'] = array(
        'id' => 'overlay-side-social-size',
        'label'   => __( 'Social Icon Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 12,
            'max'   => 34,
            'step'  => 1,
        ),
        'default' => 18,
        'description' => '<span class="fst">12</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">34</span>'
    );
    $rangedefault = get_theme_mod( 'overlay-side-social-space', 2 );
    $options['overlay-side-social-space'] = array(
        'id' => 'overlay-side-social-space',
        'label'   => __( 'Social Icon Spacing', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 30,
            'step'  => 1,
        ),
        'default' => 2,
        'description' => '<span class="fst">0</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">30</span>'
    );
    $options['overlay-note-social-settings'] = array(
        'id' => 'overlay-note-social-settings',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<span><b>Overlay Pro Features:</b><br/>- Set Header Icons to Brand Colors<br/>- Set Side Aligned Icons to Brand Colors<br/>- Set Footer Icons to Brand Colors', 'overlay' )
    );
    // ------------------------------------------------------------------------------------------- Social Links Settings

    // ------------------------------------------------------------------------------------------- Social Links
    $section = 'overlay-panel-social-section-links';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Social Links', 'overlay' ),
        'priority' => '20',
        'panel' => $panel
    );
    
    $options['overlay-social-email'] = array(
        'id' => 'overlay-social-email',
        'label'   => __( 'Email Address', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-skype'] = array(
        'id' => 'overlay-social-skype',
        'label'   => __( 'Skype Name', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-phone'] = array(
        'id' => 'overlay-social-phone',
        'label'   => __( 'Phone Number', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-whatsapp'] = array(
        'id' => 'overlay-social-whatsapp',
        'label'   => __( 'WhatsApp', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter your area code & WhatsApp number', 'overlay' ),
    );
    $options['overlay-social-head-social'] = array(
        'id' => 'overlay-social-head-social',
        'label'   => __( 'Social Profiles', 'overlay' ),
        'section' => $section,
        'type'    => 'heading',
    );
    $options['overlay-social-facebook'] = array(
        'id' => 'overlay-social-facebook',
        'label'   => __( 'Facebook', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-twitter'] = array(
        'id' => 'overlay-social-twitter',
        'label'   => __( 'Twitter', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-google-plus'] = array(
        'id' => 'overlay-social-google-plus',
        'label'   => __( 'Google Plus', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-snapchat'] = array(
        'id' => 'overlay-social-snapchat',
        'label'   => __( 'SnapChat', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-tiktok'] = array(
        'id' => 'overlay-social-tiktok',
        'label'   => __( 'TikTok', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-steam'] = array(
        'id' => 'overlay-social-steam',
        'label'   => __( 'Steam', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-amazon'] = array(
        'id' => 'overlay-social-amazon',
        'label'   => __( 'Amazon', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-etsy'] = array(
        'id' => 'overlay-social-etsy',
        'label'   => __( 'Etsy', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-yelp'] = array(
        'id' => 'overlay-social-yelp',
        'label'   => __( 'Yelp', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-youtube'] = array(
        'id' => 'overlay-social-youtube',
        'label'   => __( 'YouTube', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-vimeo'] = array(
        'id' => 'overlay-social-vimeo',
        'label'   => __( 'Vimeo', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-instagram'] = array(
        'id' => 'overlay-social-instagram',
        'label'   => __( 'Instagram', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-strava'] = array(
        'id' => 'overlay-social-strava',
        'label'   => __( 'Strava', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-airbnb'] = array(
        'id' => 'overlay-social-airbnb',
        'label'   => __( 'Airbnb', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-pinterest'] = array(
        'id' => 'overlay-social-pinterest',
        'label'   => __( 'Pinterest', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-medium'] = array(
        'id' => 'overlay-social-medium',
        'label'   => __( 'Medium', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-blogger'] = array(
        'id' => 'overlay-social-blogger',
        'label'   => __( 'Blogger', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-behance'] = array(
        'id' => 'overlay-social-behance',
        'label'   => __( 'Behance', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-soundcloud'] = array(
        'id' => 'overlay-social-soundcloud',
        'label'   => __( 'SoundCloud', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-spotify'] = array(
        'id' => 'overlay-social-spotify',
        'label'   => __( 'Spotify', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-product-hunt'] = array(
        'id' => 'overlay-social-product-hunt',
        'label'   => __( 'Product Hunt', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-kickstarter'] = array(
        'id' => 'overlay-social-kickstarter',
        'label'   => __( 'Kickstarter', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-slack'] = array(
        'id' => 'overlay-social-slack',
        'label'   => __( 'Slack', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-linkedin'] = array(
        'id' => 'overlay-social-linkedin',
        'label'   => __( 'LinkedIn', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-tumblr'] = array(
        'id' => 'overlay-social-tumblr',
        'label'   => __( 'Tumblr', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-digg'] = array(
        'id' => 'overlay-social-digg',
        'label'   => __( 'Digg', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-flickr'] = array(
        'id' => 'overlay-social-flickr',
        'label'   => __( 'Flickr', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-houzz'] = array(
        'id' => 'overlay-social-houzz',
        'label'   => __( 'Houzz', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-vine'] = array(
        'id' => 'overlay-social-vine',
        'label'   => __( 'Vine', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-vk'] = array(
        'id' => 'overlay-social-vk',
        'label'   => __( 'VK', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-xing'] = array(
        'id' => 'overlay-social-xing',
        'label'   => __( 'Xing', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-stumbleupon'] = array(
        'id' => 'overlay-social-stumbleupon',
        'label'   => __( 'StumbleUpon', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-tripadvisor'] = array(
        'id' => 'overlay-social-tripadvisor',
        'label'   => __( 'TripAdvisor', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-500px'] = array(
        'id' => 'overlay-social-500px',
        'label'   => __( '500px', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-odnoklassniki'] = array(
        'id' => 'overlay-social-odnoklassniki',
        'label'   => __( 'Odnoklassniki', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-github'] = array(
        'id' => 'overlay-social-github',
        'label'   => __( 'GitHub', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-head-custom'] = array(
        'id' => 'overlay-social-head-custom',
        'label'   => __( 'Custom Brand Icons', 'overlay' ),
        'section' => $section,
        'type'    => 'heading',
    );
    $options['overlay-social-icon-help'] = array(
        'id' => 'overlay-social-icon-help',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'Use any other brand icon by adding the corrent <a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank">Font Awesome</a> class name. Eg: "fa-facebook"<br /><br />This only uses brand icons.', 'overlay' ),
    );
    $options['overlay-social-custom-class'] = array(
        'id' => 'overlay-social-custom-class',
        'label'   => __( 'Add a Custom Social Link', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-custom-url'] = array(
        'id' => 'overlay-social-custom-url',
        'label'   => __( 'Add the URL', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-custom-class-two'] = array(
        'id' => 'overlay-social-custom-class-two',
        'label'   => __( 'Add another Custom Social Link', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-custom-url-two'] = array(
        'id' => 'overlay-social-custom-url-two',
        'label'   => __( 'Add the URL', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-head-custom-nonbrand'] = array(
        'id' => 'overlay-social-head-custom-nonbrand',
        'label'   => __( 'Custom NON Brand Icon', 'overlay' ),
        'section' => $section,
        'type'    => 'heading',
    );
    $options['overlay-social-icon-help-nobrand'] = array(
        'id' => 'overlay-social-icon-help-nobrand',
        'section' => $section,
        'type'    => 'help',
        'description' => __( 'Use any non-brand <a href="https://fontawesome.com/icons?d=gallery&c=buildings,business,chat,code,date-time,design,editors,maps,marketing,shapes,travel,writing&m=free" target="_blank">Font Awesome</a> icon.<br />Eg: "fa-bed"<br /><br />This will not take brand icons.', 'overlay' ),
    );
    $options['overlay-social-custom-class-nobrand'] = array(
        'id' => 'overlay-social-custom-class-nobrand',
        'label'   => __( 'Add a Custom Social Link', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    $options['overlay-social-custom-url-nobrand'] = array(
        'id' => 'overlay-social-custom-url-nobrand',
        'label'   => __( 'Add the URL', 'overlay' ),
        'section' => $section,
        'type'    => 'text',
    );
    // ------------------------------------------------------------------------------------------- Social Links

    $section = 'header_image';
	$sections[] = array(
        'id' => $section,
        'title' => __( 'Header Media', 'overlay' ),
        'priority' => '70',
        'description' => __( '<a href="#overlay-panel-settings-section-header-media" rel="tc-section">Select the Custom Header option here</a> to use this Header Media on your home page or all pages.', 'overlay' )
    );
    
    if ( class_exists( 'WooCommerce' ) ) :
        // ---------------- PANEL - WooCommerce Settings
        $panel = 'woocommerce';
        $panels[] = array(
            'id' => $panel,
            'title' => __( 'WooCommerce', 'overlay' ),
            'priority' => '110'
        );

        // ------------------------------------------------------------------------------------------- WooCommerce
        $section = 'overlay-woocommerce-settings';
        $sections[] = array(
            'id' => $section,
            'title' => __( 'Overlay Catalogue Settings', 'overlay' ),
            'priority' => '120',
            'panel' => $panel
        );
        
        $choices = array(
            'overlay-wc-basic' => __( 'Basic Centered', 'overlay' ),
            'overlay-wc-1' => __( 'Side Button', 'overlay' ),
            // 'overlay-wc-2' => __( 'Side Button Hover', 'overlay' ),
            'overlay-wc-3' => __( 'Block Design', 'overlay' ),
            'overlay-wc-4' => __( 'Block Simple Design', 'overlay' )
        );
        $options['overlay-wc-list-style'] = array(
            'id' => 'overlay-wc-list-style',
            'label'   => __( 'Product Catalogue Design', 'overlay' ),
            'section' => $section,
            'type'    => 'select',
            'choices' => $choices,
            'default' => 'overlay-wc-basic'
        );
        $choices = array(
            'overlay-wcsale-normal' => __( 'Normal', 'overlay' ),
            'overlay-wcsale-square' => __( 'Square', 'overlay' ),
            'overlay-wcsale-triangle' => __( 'Triangle', 'overlay' ),
            'overlay-wcsale-bubble' => __( 'Bubble', 'overlay' )
        );
        $rangedefault = get_theme_mod( 'overlay-wc-product-col-space', 10 );
        $options['overlay-wc-product-col-space'] = array(
            'id' => 'overlay-wc-product-col-space',
            'label'   => __( 'Column Spacing', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 1,
                'max'   => 60,
                'step'  => 1,
            ),
            'default' => 10,
            'description' => '<span class="fst">1</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">60</span>'
        );
        $options['overlay-wc-remove-bcrumbs'] = array(
            'id' => 'overlay-wc-remove-bcrumbs',
            'label'   => __( 'Remove Breadcrumbs', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $options['overlay-wc-remove-result-sort'] = array(
            'id' => 'overlay-wc-remove-result-sort',
            'label'   => __( 'Remove Product Results & Sorting', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $options['overlay-wc-sale-style'] = array(
            'id' => 'overlay-wc-sale-style',
            'label'   => __( 'Sale Banner Style', 'overlay' ),
            'section' => $section,
            'type'    => 'select',
            'choices' => $choices,
            'default' => 'overlay-wcsale-normal'
        );
        $options['overlay-wccat-advanced-set'] = array(
            'id' => 'overlay-wccat-advanced-set',
            'label'   => __( 'Advanced WooCommerce Settings', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $rangedefault = get_theme_mod( 'overlay-wc-list-title-size', 18 );
        $options['overlay-wc-list-title-size'] = array(
            'id' => 'overlay-wc-list-title-size',
            'label'   => __( 'Products Title Size', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 12,
                'max'   => 38,
                'step'  => 1,
            ),
            'default' => 18,
            'description' => '<span class="fst">12</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">38</span>'
        );
        $rangedefault = get_theme_mod( 'overlay-wc-list-title-height', 46 );
        $options['overlay-wc-list-title-height'] = array(
            'id' => 'overlay-wc-list-title-height',
            'label'   => __( 'Products Title Height', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 30,
                'max'   => 150,
                'step'  => 1,
            ),
            'description' => __( 'This adjusts the product title height to align the items with short and long titles', 'overlay' ),
            'default' => 46
        );
        $rangedefault = get_theme_mod( 'overlay-wc-product-bottom-space', 20 );
        $options['overlay-wc-product-bottom-space'] = array(
            'id' => 'overlay-wc-product-bottom-space',
            'label'   => __( 'Products Bottom Spacing', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 5,
                'max'   => 100,
                'step'  => 1,
            ),
            'default' => 20,
            'description' => '<span class="fst">5</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">20</span>'
        );
        $options['overlay-note-wc-list'] = array(
            'id' => 'overlay-note-wc-list',
            'section' => $section,
            'type'    => 'help',
            'description' => __( '<span><b>Overlay Pro Features:</b><br/>- Set Products Shown Per Page<br />- Set Columns for Product List<br />- Remove Shop Default Title', 'overlay' )
        );

        $section = 'overlay-woocommerce-product-settings';
        $sections[] = array(
            'id' => $section,
            'title' => __( 'Overlay Product Page Settings', 'overlay' ),
            'priority' => '120',
            'panel' => $panel
        );
        $choices = array(
            'overlay-wcproduct-style-left' => __( 'Default Left Layout', 'overlay' ),
            'overlay-wcproduct-style-right' => __( 'Basic Right Layout', 'overlay' ),
            'overlay-wcproduct-style-center' => __( 'Full Width Layout', 'overlay' )
        );
        $options['overlay-wc-product-style'] = array(
            'id' => 'overlay-wc-product-style',
            'label'   => __( 'Product Page Design', 'overlay' ),
            'section' => $section,
            'type'    => 'select',
            'choices' => $choices,
            'default' => 'overlay-wcproduct-style-left'
        );
        $options['overlay-wcproduct-remove-galzoom'] = array(
            'id' => 'overlay-wcproduct-remove-galzoom',
            'label'   => __( 'Remove Image Gallery Zoom', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $options['overlay-wcproduct-remove-gallbox'] = array(
            'id' => 'overlay-wcproduct-remove-gallbox',
            'label'   => __( 'Remove Image Gallery Lightbox', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $options['overlay-wcproduct-remove-galslider'] = array(
            'id' => 'overlay-wcproduct-remove-galslider',
            'label'   => __( 'Remove Image Gallery Slider', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $choices = array(
            'overlay-wcproduct-tabstyle-default' => __( 'Horizontal Tabs', 'overlay' ),
            'overlay-wcproduct-tabstyle-vert' => __( 'Vertical Tabs', 'overlay' ),
            'overlay-wcproduct-tabstyle-link' => __( 'Link Style Tabs', 'overlay' )
        );
        $options['overlay-wc-rel-product-pp'] = array(
            'id' => 'overlay-wc-rel-product-pp',
            'label'   => __( 'Related Products Per Page', 'overlay' ),
            'section' => $section,
            'type'    => 'number',
            'default' => 3
        );
        $options['overlay-wc-rel-product-cols'] = array(
            'id' => 'overlay-wc-rel-product-cols',
            'label'   => __( 'Related Products Columns', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 2,
                'max'   => 5,
                'step'  => 1,
            ),
            'description' => __( '2 <b>|</b> 3 <b>|</b> 4 <b>|</b> 5', 'overlay' ),
            'default' => 3
        );
        $options['overlay-wcproduct-advanced-set'] = array(
            'id' => 'overlay-wcproduct-advanced-set',
            'label'   => __( 'Advanced Product Settings', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $rangedefault = get_theme_mod( 'overlay-wcproduct-img-sum-size', 48 );
        $options['overlay-wcproduct-img-sum-size'] = array(
            'id' => 'overlay-wcproduct-img-sum-size',
            'label'   => __( 'Product Details Column Sizing', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 20,
                'max'   => 60,
                'step'  => 1,
            ),
            'default' => 48,
            'description' => '<span class="fst">20</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">60</span>'
        );
        $options['overlay-wcproduct-remove-tab-section'] = array(
            'id' => 'overlay-wcproduct-remove-tab-section',
            'label'   => __( 'Remove Whole Tabs Section', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $rangedefault = get_theme_mod( 'overlay-wc-product-detail-space', 40 );
        $options['overlay-wc-product-detail-space'] = array(
            'id' => 'overlay-wc-product-detail-space',
            'label'   => __( 'Tabs Top Spacing', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 15,
                'max'   => 150,
                'step'  => 1,
            ),
            'default' => 40,
            'description' => '<span class="fst">15</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>'
        );
        $rangedefault = get_theme_mod( 'overlay-wc-product-rel-space', 20 );
        $options['overlay-wc-product-rel-space'] = array(
            'id' => 'overlay-wc-product-rel-space',
            'label'   => __( 'Related Products Top Spacing', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 15,
                'max'   => 150,
                'step'  => 1,
            ),
            'default' => 20,
            'description' => '<span class="fst">15</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">150</span>'
        );
        $rangedefault = get_theme_mod( 'overlay-wc-product-title-size', 28 );
        $options['overlay-wc-product-title-size'] = array(
            'id' => 'overlay-wc-product-title-size',
            'label'   => __( 'Product Title Size', 'overlay' ),
            'section' => $section,
            'type'    => 'range',
            'input_attrs' => array(
                'min'   => 12,
                'max'   => 72,
                'step'  => 1,
            ),
            'default' => 28,
            'description' => '<span class="fst">12</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">72</span>'
        );
        $options['overlay-note-wc-product'] = array(
            'id' => 'overlay-note-wc-product',
            'section' => $section,
            'type'    => 'help',
            'description' => __( '<span><b>Overlay Pro Features:</b><br/>- Set Product Gallery Thumbnail Columns<br />- Remove Related Products<br />- Remove SKU, Product Categories and /or Tags<br />- Choose/Change Product Tab Styling', 'overlay' )
        );

        $section = 'overlay-woocommerce-account-settings';
        $sections[] = array(
            'id' => $section,
            'title' => __( 'Overlay My Account Page Settings', 'overlay' ),
            'priority' => '120',
            'panel' => $panel
        );
        $choices = array(
            'overlay-wcaccount-style-default' => __( 'Default Design', 'overlay' ),
            'overlay-wcaccount-style-top' => __( 'Top Tabs Layout', 'overlay' )
        );
        $options['overlay-wc-account-style'] = array(
            'id' => 'overlay-wc-account-style',
            'label'   => __( 'My Account Page Layout', 'overlay' ),
            'section' => $section,
            'type'    => 'select',
            'choices' => $choices,
            'default' => 'overlay-wcaccount-style-default'
        );
        $options['overlay-wcaccount-remove-tab-dash'] = array(
            'id' => 'overlay-wcaccount-remove-tab-dash',
            'label'   => __( 'Remove Dashoard Tab', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $options['overlay-wcaccount-remove-tab-order'] = array(
            'id' => 'overlay-wcaccount-remove-tab-order',
            'label'   => __( 'Remove Orders Tab', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $options['overlay-wcaccount-remove-tab-download'] = array(
            'id' => 'overlay-wcaccount-remove-tab-download',
            'label'   => __( 'Remove Downloads Tab', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $options['overlay-wcaccount-remove-tab-address'] = array(
            'id' => 'overlay-wcaccount-remove-tab-address',
            'label'   => __( 'Remove Addresses Tab', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $options['overlay-wcaccount-remove-tab-details'] = array(
            'id' => 'overlay-wcaccount-remove-tab-details',
            'label'   => __( 'Remove Account Details Tab', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $options['overlay-wcaccount-remove-tab-logout'] = array(
            'id' => 'overlay-wcaccount-remove-tab-logout',
            'label'   => __( 'Remove Logout Tab', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );

        $section = 'overlay-woocommerce-cart-settings';
        $sections[] = array(
            'id' => $section,
            'title' => __( 'Overlay Cart Page Settings', 'overlay' ),
            'priority' => '120',
            'panel' => $panel
        );
        $choices = array(
            'overlay-wccart-style-default' => __( 'Default Design', 'overlay' ),
            'overlay-wccart-style-two' => __( 'Design Two', 'overlay' )
        );
        $options['overlay-wc-cartpage-style'] = array(
            'id' => 'overlay-wc-cartpage-style',
            'label'   => __( 'Cart Page Layout', 'overlay' ),
            'section' => $section,
            'type'    => 'select',
            'choices' => $choices,
            'default' => 'overlay-wccart-style-default'
        );
        $options['overlay-wccart-center-totals'] = array(
            'id' => 'overlay-wccart-center-totals',
            'label'   => __( 'Center Cart Totals', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        $section = 'overlay-woocommerce-checkout-settings';
        $sections[] = array(
            'id' => $section,
            'title' => __( 'Overlay Checkout Page Settings', 'overlay' ),
            'priority' => '120',
            'panel' => $panel
        );
        $choices = array(
            'overlay-wccheckout-style-default' => __( 'Default 2 Column Layout', 'overlay' ),
            'overlay-wccheckout-style-two' => __( 'Full Width Layout', 'overlay' )
        );
        $options['overlay-wc-checkout-style'] = array(
            'id' => 'overlay-wc-checkout-style',
            'label'   => __( 'Checkout Page Design', 'overlay' ),
            'section' => $section,
            'type'    => 'select',
            'choices' => $choices,
            'default' => 'overlay-wccheckout-style-default'
        );
        $options['overlay-wccheckout-label-upper'] = array(
            'id' => 'overlay-wccheckout-label-upper',
            'label'   => __( 'Make Labels Uppercase', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );

        $section = 'overlay-woocommerce-color-settings';
        $sections[] = array(
            'id' => $section,
            'title' => __( 'Overlay WC Color Settings', 'overlay' ),
            'priority' => '120',
            'panel' => $panel
        );
        $options['overlay-wc-notice-head'] = array(
            'id' => 'overlay-wc-notice-head',
            'label'   => __( 'Store Notice', 'overlay' ),
            'section' => $section,
            'type'    => 'heading',
        );
        $options['overlay-wc-store-notice-bg-color'] = array(
            'id' => 'overlay-wc-store-notice-bg-color',
            'label'   => __( 'Background Color', 'overlay' ),
            'section' => $section,
            'type'    => 'color',
            'default' => '#a46497',
        );
        $options['overlay-wc-store-notice-font-color'] = array(
            'id' => 'overlay-wc-store-notice-font-color',
            'label'   => __( 'Font Color', 'overlay' ),
            'section' => $section,
            'type'    => 'color',
            'default' => '#FFF',
        );

        $options['overlay-wc-notice-extra'] = array(
            'id' => 'overlay-wc-notice-extra',
            'label'   => __( 'Extra', 'overlay' ),
            'section' => $section,
            'type'    => 'heading',
        );
        $options['overlay-btn-takeon-primary'] = array(
            'id' => 'overlay-btn-takeon-primary',
            'label'   => __( 'Buttons Take On Primary Color', 'overlay' ),
            'section' => $section,
            'type'    => 'checkbox',
            'default' => 0,
        );
        // ------------------------------------------------------------------------------------------- WooCommerce
    endif;

    // ---------------- PANEL - Mobile Settings
    $panel = 'overlay-panel-mobile-settings';
    $panels[] = array(
        'id' => $panel,
        'title' => __( 'Overlay Mobile Settings', 'overlay' ),
        'priority' => '80'
    );

    // ------------------------------------------------------------------------------------------- Header
    $section = 'overlay-panel-mobile-section-header';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Header', 'overlay' ),
        'priority' => '20',
        'panel' => $panel
    );

    $options['overlay-onmobile-heading-topbar'] = array(
        'id' => 'overlay-onmobile-heading-topbar',
        'label'   => __( 'Header', 'overlay' ),
        'section' => $section,
        'type'    => 'heading'
    );
    $options['overlay-onmobile-remove-topbar'] = array(
        'id' => 'overlay-onmobile-remove-topbar',
        'label'   => __( 'Remove Site Top Bar', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-onmobile-remove-headsearch'] = array(
        'id' => 'overlay-onmobile-remove-headsearch',
        'label'   => __( 'Remove Search', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // ------------------------------------------------------------------------------------------- Header
    // ------------------------------------------------------------------------------------------- Extras
    $section = 'overlay-panel-mobile-section-extras';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Extras', 'overlay' ),
        'priority' => '20',
        'panel' => $panel
    );
    $options['overlay-onmobile-remove-stickyheader'] = array(
        'id' => 'overlay-onmobile-remove-stickyheader',
        'label'   => __( 'Remove Sticky Header on Mobile', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-onmobile-remove-sidesocial'] = array(
        'id' => 'overlay-onmobile-remove-sidesocial',
        'label'   => __( 'Remove Side Aligned Social Icons', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // ------------------------------------------------------------------------------------------- Extras
    // ------------------------------------------------------------------------------------------- Mobile Menu Colors
    $section = 'overlay-panel-mobile-section-colors';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Mobile Menu Settings', 'overlay' ),
        'priority' => '20',
        'panel' => $panel
    );
    $choices = array(
        'overlay-dd-style-button' => __( 'Button', 'overlay' ),
        'overlay-dd-style-arrow' => __( 'Plain Arrow', 'overlay' )
    );
    $options['overlay-dd-style'] = array(
        'id' => 'overlay-dd-style',
        'label'   => __( 'Drop Down Toggle Style', 'overlay' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'overlay-dd-style-button'
    );
    $rangedefault = get_theme_mod( 'overlay-mobilemenu-btn-size', 14 );
    $options['overlay-mobilemenu-btn-size'] = array(
        'id' => 'overlay-mobilemenu-btn-size',
        'label'   => __( 'Menu Button Font Size', 'overlay' ),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 11,
            'max'   => 28,
            'step'  => 1,
        ),
        'default' => 14,
        'description' => '<span class="fst">11</span><span><i class="rngval">' . esc_attr( $rangedefault ) . '</i>px</span><span class="lst">28</span>'
    );
    $options['overlay-note-mobile-colors'] = array(
        'id' => 'overlay-note-mobile-colors',
        'section' => $section,
        'type'    => 'help',
        'description' => __( '<span><b>Overlay Pro Features:</b><br/>- Customize Full Mobile Menu Colors<br />- Edit Mobile Menu Font Size', 'overlay' )
    );
    // ------------------------------------------------------------------------------------------- Mobile Menu Colors

    // ------------------------------------------------------------------------------------------- Background Image
    $section = 'background_image';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Background Image', 'overlay' ),
        'priority' => '80'
    );
    $options['overlay-bg-image-header-clear'] = array(
        'id' => 'overlay-bg-image-header-clear',
        'label'   => __( 'Make Header Transparent', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    $options['overlay-bg-image-footer-clear'] = array(
        'id' => 'overlay-bg-image-footer-clear',
        'label'   => __( 'Make Footer Transparent', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // ------------------------------------------------------------------------------------------- Background Image

    // ------------------------------------------------------------------------------------------- Plugin Support
    $section = 'overlay-section-plugin-support';
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Plugin Support', 'overlay' ),
        'priority' => '150',
        'description' => __( 'Overlay adds/removes custom styling to be more compatible with external plugins', 'overlay' )
    );
    $options['overlay-plugin-edd-style'] = array(
        'id' => 'overlay-plugin-edd-style',
        'label'   => __( 'Easy Digital Downloads', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0
    );
    $options['overlay-plugin-fix-mega-menu'] = array(
        'id' => 'overlay-plugin-fix-mega-menu',
        'label'   => __( 'Mega Menu', 'overlay' ),
        'section' => $section,
        'type'    => 'checkbox',
        'default' => 0,
    );
    // ------------------------------------------------------------------------------------------- Plugin Support

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'overlay_customizer_library_options' );