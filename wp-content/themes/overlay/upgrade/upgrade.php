<?php
/**
 * Functions for users wanting to upgrade to premium
 *
 * @package Overlay
 */

/**
 * Display the upgrade to Pro page & load styles.
 */
function overlay_premium_admin_menu() {
    global $overlay_upgrade_page;
    $overlay_upgrade_page = add_theme_page( __( 'About Overlay', 'overlay' ), '<span class="premium-link">' . __( 'About Overlay', 'overlay' ) . '</span>', 'edit_theme_options', 'theme_info', 'overlay_render_upgrade_page' );
}
add_action( 'admin_menu', 'overlay_premium_admin_menu' );

/**
 * Enqueue admin stylesheet only on upgrade page.
 */
function overlay_load_upgrade_page_scripts() {
    global $pagenow;
	if ( $pagenow == 'themes.php' ) {
		wp_enqueue_style( 'overlay-upgrade-css', get_template_directory_uri() . '/upgrade/css/upgrade-admin.css' );
	}
}
add_action( 'admin_enqueue_scripts', 'overlay_load_upgrade_page_scripts' );

/**
 * Render the premium page to download premium upgrade plugin
 */
function overlay_render_upgrade_page() {
	get_template_part( 'upgrade/tpl/upgrade-page' );
}