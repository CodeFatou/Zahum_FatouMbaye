<footer id="colophon" class="site-footer overlay-footer-social-two <?php echo ( get_theme_mod( 'overlay-footer-social-menuitems-one', customizer_library_get_default( 'overlay-footer-social-menuitems-one' ) ) ) ? sanitize_html_class( 'footer-menu-vertical' ) : ''; ?> <?php echo ( get_theme_mod( 'overlay-social-set-footer-color', customizer_library_get_default( 'overlay-social-set-footer-color' ) ) ) ? sanitize_html_class( 'social-icons-color' ) : ''; ?>">

    <div class="site-footer-inner">
        <div class="site-container">

            <?php wp_nav_menu( array( 'theme_location' => 'overlay-bottombar-menu', 'menu_id' => 'overlay-bottombar-menu', 'fallback_cb' => false ) ); ?>
            
            <?php if ( !get_theme_mod( 'overlay-footer-remove-social' ) ) : ?>
                <div class="site-footer-icons <?php echo sanitize_html_class( get_theme_mod( 'overlay-footer-icon-style', customizer_library_get_default( 'overlay-footer-icon-style' ) ) ); ?>">
                    <?php get_template_part( 'templates/social-links' ); ?>
                </div>
            <?php endif; ?>
            
            <?php if ( !get_theme_mod( 'overlay-remove-botbar-address', customizer_library_get_default( 'overlay-remove-botbar-address' ) ) ) : ?>
                <span class="site-bar-text"><?php echo esc_html( get_theme_mod( 'overlay-edit-text-footer-address-icon', customizer_library_get_default( 'overlay-edit-text-footer-address-icon' ) ) ) ? '<i class="fas ' . sanitize_html_class( get_theme_mod( 'overlay-edit-text-footer-address-icon', customizer_library_get_default( 'overlay-edit-text-footer-address-icon' ) ) ) . '"></i>' : ''; ?> <?php echo wp_kses_post( get_theme_mod( 'overlay-edit-text-footer-address', customizer_library_get_default( 'overlay-edit-text-footer-address' ) ) ) ?></span>
            <?php endif; ?>
            <?php
            /* translators: 1: Theme name, 2: Kaira link. */
            // printf( esc_html__( 'Theme: %1$s by %2$s.', 'overlay' ), esc_html__( 'Overlay', 'overlay' ), wp_kses( __( '<a href="https://kairaweb.com/">Kaira</a>', 'overlay' ), array( 'a' => array( 'href' => array() ) ) ) ); ?>
            
        </div>
    </div>
    
    <?php
    if ( !get_theme_mod( 'overlay-remove-bottombar', customizer_library_get_default( 'overlay-remove-bottombar' ) ) ) :
        // Get Site Bottom Bar
        get_template_part( '/templates/footer/bottombar/'.get_theme_mod( 'overlay-bottombar-layout', customizer_library_get_default( 'overlay-bottombar-layout' ) ) );
    endif; ?>

</footer><!-- #colophon -->