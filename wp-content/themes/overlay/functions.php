<?php
/**
 * Overlay functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Overlay
 */
define( 'OVERLAY_THEME_VERSION' , '1.1.45' );

// Load Customizer Library scripts
require get_template_directory() . '/customizer/customizer-options.php';
require get_template_directory() . '/customizer/customizer-library/customizer-library.php';
require get_template_directory() . '/customizer/styles.php';
require get_template_directory() . '/customizer/mods.php';

// Include Overlay Upgrade page
require get_template_directory() . '/upgrade/upgrade.php';

// Add customizer Upgrade class
require_once( get_template_directory() . '/inc/overlay-pro/class-customize.php' );
// Load TGM plugin class
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

if ( ! function_exists( 'overlay_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function overlay_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Overlay, use a find and replace
		 * to change 'overlay' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'overlay', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'overlay-main-menu' => esc_html__( 'Main Menu', 'overlay' ),
			'overlay-topbar-menu' => esc_html__( 'Header Top Bar Menu', 'overlay' ),
			'overlay-bottombar-menu' => esc_html__( 'Footer Bottom Bar Menu', 'overlay' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		
		// Add theme support for custom header.
		add_theme_support( 'custom-header', apply_filters( 'overlay_custom_header_args', array(
			'default-image'      => '',
			'width'              => 1200,
			'height'             => 500,
			'flex-height'        => true,
			'header-text'        => false,
			'video' 		     => true
		) ) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'overlay_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		
		/**
		 * Add support for Editor Styles.
		 */
		add_theme_support( 'editor-styles' );
		add_editor_style( 'editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'overlay_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function overlay_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	// $GLOBALS['content_width'] = apply_filters( 'overlay_content_width', 640 );
	if ( ! isset( $content_width ) ) $content_width = 1110;
}
add_action( 'after_setup_theme', 'overlay_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function overlay_widgets_init() {
	// Sidear Widget Area
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'overlay' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets to the Sidebar here.', 'overlay' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	// Default/Custom Footer Layout
	register_sidebar( array(
		'name' => esc_html__( 'Overlay Custom Footer 1', 'overlay' ),
		'id' => 'overlay-site-footer-custom-1',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar( array(
		'name' => esc_html__( 'Overlay Custom Footer 2', 'overlay' ),
		'id' => 'overlay-site-footer-custom-2',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar( array(
		'name' => esc_html__( 'Overlay Custom Footer 3', 'overlay' ),
		'id' => 'overlay-site-footer-custom-3',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar( array(
		'name' => esc_html__( 'Overlay Custom Footer 4', 'overlay' ),
		'id' => 'overlay-site-footer-custom-4',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar( array(
		'name' => esc_html__( 'Overlay Custom Footer 5', 'overlay' ),
		'id' => 'overlay-site-footer-custom-5',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));

	// Split Footer Layout
	register_sidebar(array(
		'name' => esc_html__( 'Overlay Footer - Split Widgets Layout', 'overlay' ),
		'id' => 'overlay-site-footer-split',
        'description' => esc_html__( 'The footer will be split by the amount of widgets added', 'overlay' ),
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
}
add_action( 'widgets_init', 'overlay_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function overlay_scripts() {
	wp_enqueue_style( 'overlay-fonts', '//fonts.googleapis.com/css?family=Open+Sans|Poppins', array(), OVERLAY_THEME_VERSION );
	wp_enqueue_style( 'overlay-style', get_stylesheet_uri() );
	wp_enqueue_style( 'overlay-font-awesome', get_template_directory_uri().'/inc/font-awesome/css/all.css', array(), '6.0.0' );

	// Load Header Style
	wp_enqueue_style( 'overlay-header-style', get_template_directory_uri()."/templates/header/header-style.css", array( 'overlay-style' ), OVERLAY_THEME_VERSION );
	
	// Load Footer Style
	wp_enqueue_style( 'overlay-footer-style', get_template_directory_uri()."/templates/footer/css/".get_theme_mod( 'overlay-footer-layout', customizer_library_get_default( 'overlay-footer-layout' ) ).".css", array( 'overlay-style' ), OVERLAY_THEME_VERSION );

	// Load Responsive Stylesheets
	if ( !get_theme_mod( 'overlay-responsive-disable', customizer_library_get_default( 'overlay-responsive-disable' ) ) ) :
		$overlay_resp_menu = get_theme_mod( 'overlay-menu-breakat', customizer_library_get_default( 'overlay-menu-breakat' ) );
		$overlay_resp_tablet = get_theme_mod( 'overlay-tablet-breakat', customizer_library_get_default( 'overlay-tablet-breakat' ) );
		$overlay_resp_mobile = get_theme_mod( 'overlay-mobile-breakat', customizer_library_get_default( 'overlay-mobile-breakat' ) );

		switch ( $overlay_resp_menu ) :
			case 'always':
				$overlay_resp_menu = 'all';
				break;
			case 'mobile':
				$overlay_resp_menu = '(max-width: ' . esc_attr( $overlay_resp_mobile ) . 'px)';
				break;
			case 'custom':
				$overlay_resp_menu = '(max-width: ' . esc_attr( get_theme_mod( 'overlay-menu-custom-breakat', customizer_library_get_default( 'overlay-menu-custom-breakat' ) ) ) . 'px)';
				break;
			default: // Defaults to Tablet
				$overlay_resp_menu = '(max-width: ' . esc_attr( $overlay_resp_tablet ) . 'px)';
		endswitch;
		wp_enqueue_style( 'overlay-resp-menu', get_template_directory_uri()."/inc/css/menu-mobile.css", array( 'overlay-style', 'overlay-header-style', 'overlay-footer-style' ), OVERLAY_THEME_VERSION, esc_attr( $overlay_resp_menu ) );
		wp_enqueue_style( 'overlay-resp-tablet', get_template_directory_uri()."/inc/css/responsive-tablet.css", array( 'overlay-style', 'overlay-header-style', 'overlay-footer-style' ), OVERLAY_THEME_VERSION, '(max-width: '.esc_attr( $overlay_resp_tablet ).'px)' );
		wp_enqueue_style( 'overlay-resp-mobile', get_template_directory_uri()."/inc/css/responsive-mobile.css", array( 'overlay-style', 'overlay-header-style', 'overlay-footer-style' ), OVERLAY_THEME_VERSION, '(max-width: '.esc_attr( $overlay_resp_mobile ).'px)' );
	endif;

	wp_enqueue_script( 'overlay-custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), OVERLAY_THEME_VERSION, true );
    wp_localize_script( 'overlay-custom', 'overlay_js', array(
        'menu_breakpoint' => get_theme_mod( 'overlay-menu-breakat', customizer_library_get_default( 'overlay-menu-breakat' ) ),
        'menu_mobile' => get_theme_mod( 'overlay-mobile-breakat', customizer_library_get_default( 'overlay-mobile-breakat' ) ),
        'menu_tablet' => get_theme_mod( 'overlay-tablet-breakat', customizer_library_get_default( 'overlay-tablet-breakat' ) ),
    ) );
    wp_enqueue_script( 'overlay-custom' );

	if ( 'overlay-blog-grid' == get_theme_mod( 'overlay-blog-list-layout', customizer_library_get_default( 'overlay-blog-list-layout' ) ) || 'overlay-blog-tile' == get_theme_mod( 'overlay-blog-list-layout', customizer_library_get_default( 'overlay-blog-list-layout' ) ) ) :
		wp_enqueue_script( 'jquery-masonry' );
        wp_enqueue_script( 'overlay-masonry', get_template_directory_uri() . '/js/layout-blocks.js', array( 'jquery' ), OVERLAY_THEME_VERSION, true );
		
		if ( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'infinite-scroll' ) ) :
			wp_enqueue_script( 'overlay-jetpack-scroll', get_template_directory_uri() . '/js/jetpack-infinite-scroll.js', array( 'jquery' ), OVERLAY_THEME_VERSION, true );
		endif;
    endif;
    
    // EDD Styling
    if ( get_theme_mod( 'overlay-plugin-edd-style', customizer_library_get_default( 'overlay-plugin-edd-style' ) ) ) :
		wp_enqueue_style( 'overlay-edd-css', get_template_directory_uri()."/inc/css/edd.css", array( 'dashicons' ), OVERLAY_THEME_VERSION );
	endif;

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'overlay_scripts' );

/**
 * Fix skip link focus in IE11. Too small to load as own script
 */
function overlay_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'overlay_skip_link_focus_fix' );

/**
 * Enqueue admin styling.
 */
function overlay_admin_scripts() {
	// global $pagenow;
	// if ( $pagenow == 'widgets.php' ) {
		wp_enqueue_style( 'overlay-admin-css', get_template_directory_uri() . '/inc/admin/admin.css', array(), OVERLAY_THEME_VERSION );
	// }
}
add_action( 'admin_enqueue_scripts', 'overlay_admin_scripts' );

/**
 * Add classes to the body tag from settings
 */
function overlay_add_body_class( $classes ) {
	$classes[] = get_theme_mod( 'overlay-site-layout', customizer_library_get_default( 'overlay-site-layout' ) );
	if ( 'overlay-site-full-width-blocked' == get_theme_mod( 'overlay-site-layout', customizer_library_get_default( 'overlay-site-layout' ) ) ) :
		if ( get_theme_mod( 'overlay-break-content', customizer_library_get_default( 'overlay-break-content' ) ) ) :
			$classes[] = sanitize_html_class( 'overlay-break-content' );
		else :
			$classes[] = sanitize_html_class( 'overlay-joined-content' );
		endif;
	endif;
	$classes[] = sanitize_html_class( get_theme_mod( 'overlay-menu-position', customizer_library_get_default( 'overlay-menu-position' ) ) );

	if ( is_page() && !is_page_template() ) :
		$classes[] = sanitize_html_class( get_theme_mod( 'overlay-page-layout', customizer_library_get_default( 'overlay-page-layout' ) ) );
	endif;

	if ( class_exists( 'WooCommerce' ) ) :
		if ( is_home() || ( is_archive() && !is_woocommerce() ) ) :
			$classes[] = get_theme_mod( 'overlay-blog-layout', customizer_library_get_default( 'overlay-blog-layout' ) );
			if ( get_theme_mod( 'overlay-blog-break', customizer_library_get_default( 'overlay-blog-break' ) ) ) :
				$classes[] = sanitize_html_class( 'break-blog-blocks' );
			endif;
		endif;
		if ( is_single() && !is_woocommerce() ) :
			$classes[] = get_theme_mod( 'overlay-blog-post-layout', customizer_library_get_default( 'overlay-blog-post-layout' ) );
		endif;
		if ( is_cart() ) :
			$classes[] = get_theme_mod( 'overlay-wc-cartpage-style', customizer_library_get_default( 'overlay-wc-cartpage-style' ) );
		endif;
		if ( is_checkout() ) :
			$classes[] = get_theme_mod( 'overlay-wc-checkout-style', customizer_library_get_default( 'overlay-wc-checkout-style' ) );
		endif;
		if ( is_account_page() ) :
			$classes[] = get_theme_mod( 'overlay-wc-account-style', customizer_library_get_default( 'overlay-wc-account-style' ) );
		endif;
	else :
		if ( is_home() || is_archive() ) :
			$classes[] = get_theme_mod( 'overlay-blog-layout', customizer_library_get_default( 'overlay-blog-layout' ) );
			if ( get_theme_mod( 'overlay-blog-break', customizer_library_get_default( 'overlay-blog-break' ) ) ) :
				$classes[] = sanitize_html_class( 'break-blog-blocks' );
			endif;
		endif;
		if ( is_single() ) :
			$classes[] = get_theme_mod( 'overlay-blog-post-layout', customizer_library_get_default( 'overlay-blog-post-layout' ) );
		endif;
	endif;

	if ( is_search() ) :
		$classes[] = get_theme_mod( 'overlay-blog-search-layout', customizer_library_get_default( 'overlay-blog-search-layout' ) );
		if ( get_theme_mod( 'overlay-blog-break', customizer_library_get_default( 'overlay-blog-break' ) ) ) :
			$classes[] = sanitize_html_class( 'break-blog-blocks' );
		endif;
	endif;

	if ( get_theme_mod( 'overlay-site-remove-editlink', customizer_library_get_default( 'overlay-site-remove-editlink' ) ) ) :
		$classes[] = sanitize_html_class( 'overlay-noedit' );
	endif;
	
	return $classes;
}
add_filter( 'body_class', 'overlay_add_body_class' );

/**
 * Add classes to the blog list for styling.
 */
function overlay_blog_post_classes ( $classes ) {
	global $overlay_current_class;
	
	if ( is_home() || is_archive() || is_search() ) :
		if ( 'overlay-blog-alt' == get_theme_mod( 'overlay-blog-list-layout', customizer_library_get_default( 'overlay-blog-list-layout' ) ) || 'overlay-blog-alt' == get_theme_mod( 'overlay-blog-search-list-layout', customizer_library_get_default( 'overlay-blog-search-list-layout' ) ) ) :
			$classes[] = $overlay_current_class;
			$overlay_current_class = ( 'blog-alt-odd' == $overlay_current_class ) ? sanitize_html_class( 'blog-alt-even' ) : sanitize_html_class( 'blog-alt-odd' );
		endif;
		if ( 'overlay-blog-grid' == get_theme_mod( 'overlay-blog-list-layout', customizer_library_get_default( 'overlay-blog-list-layout' ) ) || 'overlay-blog-tile' == get_theme_mod( 'overlay-blog-list-layout', customizer_library_get_default( 'overlay-blog-list-layout' ) ) ) :
			$classes[] = sanitize_html_class( 'blog-grid-block' );
		endif;
	endif;

	return $classes;
}
$overlay_current_class = sanitize_html_class( 'blog-alt-odd' );
add_filter ( 'post_class' , 'overlay_blog_post_classes' );

/**
 * Add classes to the admin body tag for 
 */
function overlay_admin_body_classes( $admin_classes ) {
	global $pagenow;
	if ( $pagenow != 'widgets.php' )
		return $admin_classes;

	if ( 'footer-default' == get_theme_mod( 'overlay-footer-layout', customizer_library_get_default( 'overlay-footer-layout' ) ) ) {
		$admin_classes .= ' ' . sanitize_html_class( 'overlay-footer-default' ) . ' ' . sanitize_html_class( get_theme_mod( 'overlay-footer-custom-cols', customizer_library_get_default( 'overlay-footer-custom-cols' ) ) );
	} else {
		$admin_classes .= ' ' . sanitize_html_class( 'overlay-' . get_theme_mod( 'overlay-footer-layout', customizer_library_get_default( 'overlay-footer-layout' ) ) );
	}

	return $admin_classes;
}
add_filter( 'admin_body_class', 'overlay_admin_body_classes' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/gutenberg.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Display recommended plugins with the TGM class
 */
function overlay_tgm_recommended_plugins() {
	$plugins = array(
		array(
			'name'      => __( 'Contact Form by WPForms', 'overlay' ),
			'slug'      => 'wpforms-lite',
			'required'  => false,
		),
		array(
			'name'      => __( 'Elementor Page Builder', 'overlay' ),
			'slug'      => 'elementor',
			'required'  => false,
		),
		array(
			'name'      => __( 'WooCommerce', 'overlay' ),
			'slug'      => 'woocommerce',
			'required'  => false,
		),
		array(
			'name'      => __( 'StoreCustomizer', 'overlay' ),
			'slug'      => 'woocustomizer',
			'required'  => false,
		),
		array(
			'name'      => __( 'Breadcrumb NavXT', 'overlay' ),
			'slug'      => 'breadcrumb-navxt',
			'required'  => false,
		),
		array(
			'name'      => __( 'Blockons - Editor blocks', 'overlay' ),
			'slug'      => 'blockons',
			'required'  => false,
		),
	);
	$config = array(
		'id'           => 'overlay',
		'menu'         => 'tgmpa-install-plugins',
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'overlay_tgm_recommended_plugins' );

/**
 * Admin notice to enter a purchase license
 */
function overlay_add_license_notice() {
	global $current_user;
	$overlay_user_id = $current_user->ID;

	if ( !get_user_meta( $overlay_user_id, 'overlay_license_dismiss_count' ) ) : ?>
		<div class="notice notice-info overlay-admin-notice overlay-notice-add">
			<h4><?php esc_html_e( 'Thank you for trying out Overlay !', 'overlay' ); ?></h4>
			<?php
			/* translators: 1: 'giving us a review'. */
            printf( esc_html__( 'We\'re here to help... %1$s and get help on how to easily build a professional website... And feel free to %2$s on using Overlay.', 'overlay' ), wp_kses( '<a href="' . admin_url( 'themes.php?page=theme_info' ) . '" class="overlay-admin-notice-a">' . __( 'Read More on Using the Overlay Theme', 'overlay' ) . '</a>', array( 'a' => array( 'href' => array(), 'class' => array() ) ) ), wp_kses( '<a href="' . admin_url( 'themes.php?page=theme_info' ) . '" class="overlay-admin-notice-a">' . __( 'Contact Us for Support', 'overlay' ) . '</a>', array( 'a' => array( 'href' => array(), 'class' => array() ) ) ) ); ?>
            <br /><br /><p><?php esc_html_e( 'Use the code "SALE2020" to get $5 off Overlay Pro !', 'overlay' ); ?></p>
			<a href="?overlay_add_license_notice_ignore=" class="overlay-notice-close"><?php esc_html_e( 'Dismiss Notice', 'overlay' ); ?></a>
		</div><?php
	endif;
}
add_action( 'admin_notices', 'overlay_add_license_notice' );
/**
 * Admin notice save dismiss to wp transient
 */
function overlay_add_license_notice_ignore() {
    global $current_user;
	$overlay_user_id = $current_user->ID;

    if ( isset( $_GET['overlay_add_license_notice_ignore'] ) ) {
		update_user_meta( $overlay_user_id, 'overlay_license_dismiss_count', true );
    }
}
add_action( 'admin_init', 'overlay_add_license_notice_ignore' );

/**
 * Admin notice for Blockons
 */
function overlay_blockons_notice() {
	global $current_user;
	$overlay_user_id = $current_user->ID;

	if ( !get_user_meta( $overlay_user_id, 'overlay_blockons_dismiss' ) ) : ?>
		<div class="notice notice-info overlay-admin-notice overlay-notice-blockons">
			<div>
				<a href="<?php echo esc_url(admin_url('/plugin-install.php?s=blockons&tab=search&type=term')); ?>">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/blockons-logo.png'); ?>" alt="Blockons" />
				</a>
			</div>
			<div>
				<h4><?php esc_html_e( 'Try out the new Blockons Plugin !', 'overlay' ); ?></h4>
				<p><?php esc_html_e( 'Blockons offers advanced WordPress blocks for your Editor, as well as Site Addons such as page loader, page scroll indicator & back to top button... Great for building beautiful pages! More features coming soon!', 'overlay' ); ?></p>
				<a href="<?php echo esc_url(admin_url('/plugin-install.php?s=blockons&tab=search&type=term')); ?>"><?php esc_html_e( 'View the Blockons plugin', 'overlay' ); ?></a>
			</div>
			<a href="?overlay_blockons_notice_ignore=" class="overlay-notice-close"><?php esc_html_e( 'Dismiss Notice', 'overlay' ); ?></a>
		</div><?php
	endif;
}
add_action( 'admin_notices', 'overlay_blockons_notice' );
/**
 * Admin notice dismiss for Blockons
 */
function overlay_blockons_notice_ignore() {
    global $current_user;
	$overlay_user_id = $current_user->ID;

    if ( isset( $_GET['overlay_blockons_notice_ignore'] ) ) {
		update_user_meta( $overlay_user_id, 'overlay_blockons_dismiss', true );
    }
}
add_action( 'admin_init', 'overlay_blockons_notice_ignore' );
