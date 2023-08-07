<?php
$overlay_footerimg_repeat = get_theme_mod( 'overlay-footer-bgimg-repeat', customizer_library_get_default( 'overlay-footer-bgimg-repeat' ) );
$overlay_footerimg_align = get_theme_mod( 'overlay-footer-bgimg-align', customizer_library_get_default( 'overlay-footer-bgimg-align' ) ); ?>
<footer id="colophon" class="site-footer overlay-footer-basic <?php echo ( get_theme_mod( 'overlay-social-set-footer-color', customizer_library_get_default( 'overlay-social-set-footer-color' ) ) ) ? sanitize_html_class( 'social-icons-color' ) : ''; ?> <?php echo ( get_theme_mod( 'overlay-add-footer-bgimg', customizer_library_get_default( 'overlay-add-footer-bgimg' ) ) && get_theme_mod( 'overlay-footer-bgimg', customizer_library_get_default( 'overlay-footer-bgimg' ) ) ) ? sanitize_html_class( 'overlay-bgfooter-img' ) : ''; ?>" <?php echo ( get_theme_mod( 'overlay-add-footer-bgimg', customizer_library_get_default( 'overlay-add-footer-bgimg' ) ) && get_theme_mod( 'overlay-footer-bgimg', customizer_library_get_default( 'overlay-footer-bgimg' ) ) ) ? 'style="background-image: url( ' . esc_url( get_theme_mod( 'overlay-footer-bgimg', customizer_library_get_default( 'overlay-footer-bgimg' ) ) ) . '); background-repeat: ' . esc_attr( $overlay_footerimg_repeat ) . '; background-position: ' . esc_attr( $overlay_footerimg_align ) . ';"' : ''; ?>>

    <div class="site-footer-inner">
        <div class="site-container">

            <div class="overlay-footer-basic-left">

                <?php if ( 'footer-social-two' != get_theme_mod( 'overlay-footer-layout', customizer_library_get_default( 'overlay-footer-layout' ) ) ) : ?>
                    <?php wp_nav_menu( array( 'theme_location' => 'overlay-bottombar-menu', 'menu_id' => 'overlay-bottombar-menu', 'fallback_cb' => false ) ); ?>
                <?php endif; ?>
            
            </div>

            <div class="overlay-footer-basic-right">

                <?php if ( !get_theme_mod( 'overlay-remove-botbar-extratxt', customizer_library_get_default( 'overlay-remove-botbar-extratxt' ) ) ) : ?>
                    <span class="site-bar-text extra-txt"><?php echo esc_html( get_theme_mod( 'overlay-edit-text-footer-extratxt-icon', customizer_library_get_default( 'overlay-edit-text-footer-extratxt-icon' ) ) ) ? '<i class="fas ' . sanitize_html_class( get_theme_mod( 'overlay-edit-text-footer-extratxt-icon', customizer_library_get_default( 'overlay-edit-text-footer-extratxt-icon' ) ) ) . '"></i>' : ''; ?> <?php echo wp_kses_post( get_theme_mod( 'overlay-edit-text-footer-extratxt', customizer_library_get_default( 'overlay-edit-text-footer-extratxt' ) ) ) ?></span>
                <?php endif; ?>

                <?php if ( !get_theme_mod( 'overlay-footer-remove-social' ) ) : ?>
                    <div class="site-footer-icons <?php echo sanitize_html_class( get_theme_mod( 'overlay-footer-icon-style', customizer_library_get_default( 'overlay-footer-icon-style' ) ) ); ?>">
                        <?php get_template_part( 'templates/social-links' ); ?>
                    </div>
                <?php endif; ?>
                        
            </div>
            
            <!-- <?php if ( !get_theme_mod( 'overlay-remove-botbar-address', customizer_library_get_default( 'overlay-remove-botbar-address' ) ) ) : ?>
                <span class="site-bar-text"><?php echo esc_html( get_theme_mod( 'overlay-edit-text-footer-address-icon', customizer_library_get_default( 'overlay-edit-text-footer-address-icon' ) ) ) ? '<i class="fas ' . sanitize_html_class( get_theme_mod( 'overlay-edit-text-footer-address-icon', customizer_library_get_default( 'overlay-edit-text-footer-address-icon' ) ) ) . '"></i>' : ''; ?> <?php echo wp_kses_post( get_theme_mod( 'overlay-edit-text-footer-address', customizer_library_get_default( 'overlay-edit-text-footer-address' ) ) ) ?></span>
            <?php endif; ?> -->

        </div>
    </div>
    
    <?php if ( !get_theme_mod( 'overlay-remove-bottombar', customizer_library_get_default( 'overlay-remove-bottombar' ) ) ) : ?>
        <div class="site-bar overlay-bottombar <?php echo ( get_theme_mod( 'overlay-bottombar-switch', customizer_library_get_default( 'overlay-bottombar-switch' ) ) ) ? sanitize_html_class( 'site-bottombar-switch' ) : ''; ?>">
            <div class="site-container">

                <div class="site-bar-inner <?php echo ( get_theme_mod( 'overlay-center-all-bottombar', customizer_library_get_default( 'overlay-center-all-bottombar' ) ) ) ? sanitize_html_class( 'site-bottombar-centerall' ) : ''; ?>">
                    <div class="site-bar-left">

                        <?php
                        /* translators: 1: Theme name, 2: Kaira link. */
                        printf( esc_html__( 'Theme:&nbsp;%1$s&nbsp;by&nbsp;%2$s&nbsp;', 'overlay' ), esc_html__( 'Overlay', 'overlay' ), wp_kses( __( '<a href="https://kairaweb.com/" class="no-margin">Kaira</a>', 'overlay' ), array( 'a' => array( 'href' => array() ) ) ) ); ?>
                        
                    </div>

                    <div class="site-bar-right <?php echo 1 == get_theme_mod( 'overlay-add-botbar-fullcart', customizer_library_get_default( 'overlay-add-botbar-fullcart' ) ) ? sanitize_html_class( 'overlay-bottombar-fullcart' ) : sanitize_html_class( 'overlay-bottombar-nofullcart' ); ?>">

                        <?php if ( !get_theme_mod( 'overlay-remove-botbar-address', customizer_library_get_default( 'overlay-remove-botbar-address' ) ) ) : ?>
                            <span class="site-bar-text footer-address"><?php echo esc_html( get_theme_mod( 'overlay-edit-text-footer-address-icon', customizer_library_get_default( 'overlay-edit-text-footer-address-icon' ) ) ) ? '<i class="fas ' . sanitize_html_class( get_theme_mod( 'overlay-edit-text-footer-address-icon', customizer_library_get_default( 'overlay-edit-text-footer-address-icon' ) ) ) . '"></i>' : ''; ?> <?php echo wp_kses_post( get_theme_mod( 'overlay-edit-text-footer-address', customizer_library_get_default( 'overlay-edit-text-footer-address' ) ) ) ?></span>
                        <?php endif; ?>

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
    <?php endif; ?>

</footer><!-- #colophon -->
