<div class="site-bar overlay-bottombar-one <?php echo ( get_theme_mod( 'overlay-bottombar-switch', customizer_library_get_default( 'overlay-bottombar-switch' ) ) ) ? sanitize_html_class( 'site-bottombar-switch' ) : ''; ?>">
    <div class="site-container">

        <div class="site-bar-inner">
            <div class="site-bar-left">

                <?php
                /* translators: 1: Theme name, 2: Kaira link. */
                printf( esc_html__( 'Theme:&nbsp;%1$s&nbsp;by&nbsp;%2$s.&nbsp;', 'overlay' ), esc_html__( 'Overlay', 'overlay' ), wp_kses( __( '<a href="https://kairaweb.com/" class="no-margin">Kaira</a>', 'overlay' ), array( 'a' => array( 'href' => array() ) ) ) ); ?>

                <?php
                if ( 'footer-social' != get_theme_mod( 'overlay-footer-layout', customizer_library_get_default( 'overlay-footer-layout' ) ) && 'footer-social-two' != get_theme_mod( 'overlay-footer-layout', customizer_library_get_default( 'overlay-footer-layout' ) ) ) :
                    if ( !get_theme_mod( 'overlay-remove-botbar-address', customizer_library_get_default( 'overlay-remove-botbar-address' ) ) ) : ?>
                        <span class="site-bar-text footer-address"><?php echo esc_html( get_theme_mod( 'overlay-edit-text-footer-address-icon', customizer_library_get_default( 'overlay-edit-text-footer-address-icon' ) ) ) ? '<i class="fas ' . sanitize_html_class( get_theme_mod( 'overlay-edit-text-footer-address-icon', customizer_library_get_default( 'overlay-edit-text-footer-address-icon' ) ) ) . '"></i>' : ''; ?> <?php echo wp_kses_post( get_theme_mod( 'overlay-edit-text-footer-address', customizer_library_get_default( 'overlay-edit-text-footer-address' ) ) ) ?></span>
                    <?php
                    endif;
                endif; ?>
                
            </div>
            
            <?php if ( 'footer-social-two' != get_theme_mod( 'overlay-footer-layout', customizer_library_get_default( 'overlay-footer-layout' ) ) ) : ?>
                <?php if ( has_nav_menu( 'overlay-bottombar-menu' ) ) : ?>
                    <div class="site-bar-center">
                        <?php wp_nav_menu( array( 'theme_location' => 'overlay-bottombar-menu', 'menu_id' => 'overlay-bottombar-menu', 'fallback_cb' => false ) ); ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            
            <div class="site-bar-right <?php echo 1 == get_theme_mod( 'overlay-add-botbar-fullcart', customizer_library_get_default( 'overlay-add-botbar-fullcart' ) ) ? sanitize_html_class( 'overlay-bottombar-fullcart' ) : sanitize_html_class( 'overlay-bottombar-nofullcart' ); ?>">

                <?php
                if ( 'footer-social' != get_theme_mod( 'overlay-footer-layout', customizer_library_get_default( 'overlay-footer-layout' ) ) ) :
                    if ( !get_theme_mod( 'overlay-remove-botbar-extratxt', customizer_library_get_default( 'overlay-remove-botbar-extratxt' ) ) ) : ?>
                        <span class="site-bar-text extra-txt"><?php echo esc_html( get_theme_mod( 'overlay-edit-text-footer-extratxt-icon', customizer_library_get_default( 'overlay-edit-text-footer-extratxt-icon' ) ) ) ? '<i class="fas ' . sanitize_html_class( get_theme_mod( 'overlay-edit-text-footer-extratxt-icon', customizer_library_get_default( 'overlay-edit-text-footer-extratxt-icon' ) ) ) . '"></i>' : ''; ?> <?php echo wp_kses_post( get_theme_mod( 'overlay-edit-text-footer-extratxt', customizer_library_get_default( 'overlay-edit-text-footer-extratxt' ) ) ) ?></span>
                    <?php
                    endif;
                endif; ?>

                <?php get_template_part( 'templates/social-links' ); ?>

                <?php
                if ( get_theme_mod( 'overlay-add-botbar-cart', customizer_library_get_default( 'overlay-add-botbar-cart' ) ) ) :
                    if ( function_exists( 'overlay_woocommerce_header_cart' ) ) {
                        overlay_woocommerce_header_cart();
                    }
                endif; ?>
                
            </div>
        </div>

    </div>
</div>