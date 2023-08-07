<?php if ( 'overlay-site-media-fimage' == get_theme_mod( 'overlay-site-media-type', customizer_library_get_default( 'overlay-site-media-type' ) ) ) :
    $overlay_fimg_id = get_the_ID();
    if ( is_home() || is_archive() || is_search() ) :
        if ( class_exists( 'WooCommerce' ) ) :
            if ( is_shop() || is_product_category() || is_product_tag() ) :
                $overlay_fimg_id = get_option( 'woocommerce_shop_page_id' );
            else :
                $overlay_fimg_id = get_option( 'page_for_posts' );
            endif;
        else :
            $overlay_fimg_id = get_option( 'page_for_posts' );
        endif;
    else :
        if ( class_exists( 'WooCommerce' ) ) :
            if ( is_product() ) :
                $overlay_fimg_id = get_option( 'woocommerce_shop_page_id' );
            endif;
        else :
            $overlay_fimg_id = get_the_ID();
        endif;
    endif; ?>
    
    <?php if ( has_post_thumbnail( $overlay_fimg_id ) ) : ?>
        <div class="overlay-banner-wrap">

            <div class="site-container<?php echo ( get_theme_mod( 'overlay-sitemedia-fullwidth', customizer_library_get_default( 'overlay-sitemedia-fullwidth' ) ) ) ? sanitize_html_class( '-full' ) : ''; ?>">
                <div class="overlay-banner-img" <?php echo esc_html( 'overlay-media-fimage-actual' != get_theme_mod( 'overlay-site-media-fimage-size', customizer_library_get_default( 'overlay-site-media-fimage-size' ) ) ) ? 'style="background-image: url(' . esc_url( get_the_post_thumbnail_url( $overlay_fimg_id ) ) . ');"' : ''; ?>>
                    
                    <?php
                    if ( 'overlay-pagetitle-cheader' == get_theme_mod( 'overlay-pagetitle-layout', customizer_library_get_default( 'overlay-pagetitle-layout' ) ) ) : ?>
                        <div class="custom-header-pagetitle">
                            <?php get_template_part( '/templates/title-bar' ); ?>
                        </div>
                    <?php
                    endif; ?>

                    <?php if ( 'overlay-media-fimage-small' == get_theme_mod( 'overlay-site-media-fimage-size', customizer_library_get_default( 'overlay-site-media-fimage-size' ) ) ) : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/fimage_banner_small.gif" />
                    <?php elseif ( 'overlay-media-fimage-medium' == get_theme_mod( 'overlay-site-media-fimage-size', customizer_library_get_default( 'overlay-site-media-fimage-size' ) ) ) : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/fimage_banner_medium.gif" />
                    <?php elseif ( 'overlay-media-fimage-large' == get_theme_mod( 'overlay-site-media-fimage-size', customizer_library_get_default( 'overlay-site-media-fimage-size' ) ) ) : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/fimage_banner_large.gif" />
                    <?php else : ?>
                        <?php echo get_the_post_thumbnail( $overlay_fimg_id, 'full' ); ?>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    <?php endif; ?>

<?php elseif ( 'overlay-site-media-media' == get_theme_mod( 'overlay-site-media-type', customizer_library_get_default( 'overlay-site-media-type' ) ) ) : ?>

    <?php if ( has_custom_header() ) : ?>
        <div class="custom-header-wrap">
            <div class="site-container<?php echo ( get_theme_mod( 'overlay-sitemedia-fullwidth', customizer_library_get_default( 'overlay-sitemedia-fullwidth' ) ) ) ? sanitize_html_class( '-full' ) : ''; ?>">
                <?php
                if ( 'overlay-pagetitle-cheader' == get_theme_mod( 'overlay-pagetitle-layout', customizer_library_get_default( 'overlay-pagetitle-layout' ) ) ) : ?>
                    <div class="custom-header-pagetitle">
                        <?php get_template_part( '/templates/title-bar' ); ?>
                    </div>
                <?php
                endif; ?>

                <?php the_custom_header_markup(); ?>
            </div>
        </div>
    <?php endif; ?>

<?php else : ?>

    <!-- No Header Media -->

<?php endif; ?>