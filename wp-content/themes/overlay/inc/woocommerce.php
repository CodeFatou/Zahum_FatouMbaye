<?php
/**
 * WooCommerce Compatibility File
 *
 * @package Overlay
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function overlay_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'overlay_woocommerce_setup' );

/**
 * WooCommerce Scripts & Stylesheets.
 *
 * @return void
 */
function overlay_woocommerce_scripts() {
	wp_enqueue_style( 'overlay-woocommerce-style', get_template_directory_uri() . '/inc/css/woocommerce.css' );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'overlay-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'overlay_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 */
// add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function overlay_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'overlay_woocommerce_active_body_class' );

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function overlay_woocommerce_products_per_page() {
	return 9;
}
add_filter( 'loop_shop_per_page', 'overlay_woocommerce_products_per_page' );

/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function overlay_woocommerce_thumbnail_columns() {
	return 4;
}
add_filter( 'woocommerce_product_thumbnails_columns', 'overlay_woocommerce_thumbnail_columns' );

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function overlay_woocommerce_loop_columns() {
	return 3;
}
add_filter( 'loop_shop_columns', 'overlay_woocommerce_loop_columns' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function overlay_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => esc_attr( get_theme_mod( 'overlay-wc-rel-product-pp', customizer_library_get_default( 'overlay-wc-rel-product-pp' ) ) ),
		'columns'        => esc_attr( get_theme_mod( 'overlay-wc-rel-product-cols', customizer_library_get_default( 'overlay-wc-rel-product-cols' ) ) ),
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'overlay_woocommerce_related_products_args' );

if ( ! function_exists( 'overlay_woocommerce_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper.
	 *
	 * @return  void
	 */
	function overlay_woocommerce_product_columns_wrapper() {
		$columns = overlay_woocommerce_loop_columns();
		echo '<div class="columns-' . absint( $columns ) . '">';
	}
}
add_action( 'woocommerce_before_shop_loop', 'overlay_woocommerce_product_columns_wrapper', 40 );

if ( ! function_exists( 'overlay_woocommerce_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close.
	 *
	 * @return  void
	 */
	function overlay_woocommerce_product_columns_wrapper_close() {
		echo '</div>';
	}
}
add_action( 'woocommerce_after_shop_loop', 'overlay_woocommerce_product_columns_wrapper_close', 40 );

/**
 * Remove WooCommerce functionality.
 */
function overlay_remove_wc_extras(){
	// Remove Breadcrumbs
    if ( is_woocommerce() && get_theme_mod( 'overlay-wc-remove-bcrumbs', customizer_library_get_default( 'overlay-wc-remove-bcrumbs' ) ) ) {
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
	}
	// Remove Product Gallery Zoom
	if ( is_woocommerce() && get_theme_mod( 'overlay-wcproduct-remove-galzoom', customizer_library_get_default( 'overlay-wcproduct-remove-galzoom' ) ) ) {
		remove_theme_support( 'wc-product-gallery-zoom' );
	}
	// Remove Product Gallery Lightbox
	if ( is_woocommerce() && get_theme_mod( 'overlay-wcproduct-remove-gallbox', customizer_library_get_default( 'overlay-wcproduct-remove-gallbox' ) ) ) {
		remove_theme_support( 'wc-product-gallery-lightbox' );
	}
	// Remove Product Gallery Slider
	if ( is_woocommerce() && get_theme_mod( 'overlay-wcproduct-remove-galslider', customizer_library_get_default( 'overlay-wcproduct-remove-galslider' ) ) ) {
		remove_theme_support( 'wc-product-gallery-slider' );
	}
}
add_action( 'template_redirect', 'overlay_remove_wc_extras' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'overlay_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function overlay_woocommerce_wrapper_before() { ?>
		<div id="primary" class="content-area <?php echo sanitize_html_class( get_theme_mod( 'overlay-wc-list-style', customizer_library_get_default( 'overlay-wc-list-style' ) ) ); ?> <?php echo ( is_product() ) ? sanitize_html_class( get_theme_mod( 'overlay-wc-product-style', customizer_library_get_default( 'overlay-wc-product-style' ) ) ) : ''; ?> <?php echo sanitize_html_class( get_theme_mod( 'overlay-wc-sale-style', customizer_library_get_default( 'overlay-wc-sale-style' ) ) ); ?>">
			<main id="main" class="site-main" role="main">
			<?php
	}
}
add_action( 'woocommerce_before_main_content', 'overlay_woocommerce_wrapper_before' );

if ( ! function_exists( 'overlay_remove_account_links' ) ) {
	/**
	 * Remove selected My Account Tabs.
	 * @return void
	 */
	function overlay_remove_account_links( $menu_links ){
		
		if ( get_theme_mod( 'overlay-wcaccount-remove-tab-dash', customizer_library_get_default( 'overlay-wcaccount-remove-tab-dash' ) ) ) {
			unset( $menu_links['dashboard'] ); // Remove Dashboard
		}
		if ( get_theme_mod( 'overlay-wcaccount-remove-tab-order', customizer_library_get_default( 'overlay-wcaccount-remove-tab-order' ) ) ) {
			unset( $menu_links['orders'] ); // Remove Orders
		}
		if ( get_theme_mod( 'overlay-wcaccount-remove-tab-download', customizer_library_get_default( 'overlay-wcaccount-remove-tab-download' ) ) ) {
			unset( $menu_links['downloads'] ); // Remove Downloads
		}
		if ( get_theme_mod( 'overlay-wcaccount-remove-tab-address', customizer_library_get_default( 'overlay-wcaccount-remove-tab-address' ) ) ) {
			unset( $menu_links['edit-address'] ); // Addresses
		}
		if ( get_theme_mod( 'overlay-wcaccount-remove-tab-details', customizer_library_get_default( 'overlay-wcaccount-remove-tab-details' ) ) ) {
			unset( $menu_links['edit-account'] ); // Remove Account details tab
		}
		if ( get_theme_mod( 'overlay-wcaccount-remove-tab-logout', customizer_library_get_default( 'overlay-wcaccount-remove-tab-logout' ) ) ) {
			unset( $menu_links['customer-logout'] ); // Remove Logout link
		}

		return $menu_links;
	}
}
add_filter ( 'woocommerce_account_menu_items', 'overlay_remove_account_links' );

if ( ! function_exists( 'overlay_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function overlay_woocommerce_wrapper_after() { ?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'overlay_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
	if ( function_exists( 'overlay_woocommerce_header_cart' ) ) {
		overlay_woocommerce_header_cart();
	} ?>
 */

if ( ! function_exists( 'overlay_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function overlay_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		overlay_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'overlay_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'overlay_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function overlay_woocommerce_cart_link() { ?>
		<a class="cart-contents <?php echo sanitize_html_class( get_theme_mod( 'overlay-wc-cart', customizer_library_get_default( 'overlay-wc-cart' ) ) ); ?>" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'overlay' ); ?>">
			<?php
			if ( 'total-count' == get_theme_mod( 'overlay-wc-cart', customizer_library_get_default( 'overlay-wc-cart' ) ) || 'count-only' == get_theme_mod( 'overlay-wc-cart', customizer_library_get_default( 'overlay-wc-cart' ) ) ) :
				$item_count_text = WC()->cart->get_cart_contents_count();
			else :
				$item_count_text = sprintf(
					/* translators: number of items in the mini cart. */
					_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'overlay' ),
					WC()->cart->get_cart_contents_count()
				);
			endif; ?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( '(' . $item_count_text . ')' ); ?></span>
		</a>
		<?php
	}
}

if ( ! function_exists( 'overlay_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function overlay_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		} ?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php overlay_woocommerce_cart_link(); ?>
			</li>
			<?php if ( get_theme_mod( 'overlay-header-add-drop-topcart', customizer_library_get_default( 'overlay-header-add-drop-topcart' ) ) ) : ?>
				<li>
					<?php
					$instance = array( 'title' => '' );
					the_widget( 'WC_Widget_Cart', $instance ); ?>
				</li>
			<?php endif; ?>
		</ul>
		<?php
	}
}
