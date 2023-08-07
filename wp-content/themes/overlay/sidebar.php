<?php
/**
 * The sidebar widget areas
 *
 * @package Overlay
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
} ?>
<aside id="secondary" class="widget-area <?php echo esc_html( 'overlay-site-full-width-blocked' == get_theme_mod( 'overlay-site-layout', customizer_library_get_default( 'overlay-site-layout' ) ) && get_theme_mod( 'overlay-break-content', customizer_library_get_default( 'overlay-break-content' ) ) && get_theme_mod( 'overlay-break-widgets', customizer_library_get_default( 'overlay-break-widgets' ) ) ) ? sanitize_html_class( 'widgets-apart' ) : sanitize_html_class( 'widgets-joined' ); ?>">
    <div class="widget-area-inner">
        <div class="floating-sidebar-control"></div>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</aside><!-- #secondary -->
