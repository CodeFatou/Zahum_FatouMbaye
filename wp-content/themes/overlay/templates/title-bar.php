<?php if ( !is_front_page() ) : ?>
    <?php if ( !get_theme_mod( 'overlay-remove-pagetitles', customizer_library_get_default( 'overlay-remove-pagetitles' ) ) ) : ?>
        <header class="overlay-page-title <?php echo sanitize_html_class( get_theme_mod( 'overlay-pagetitle-layout', customizer_library_get_default( 'overlay-pagetitle-layout' ) ) ); ?>">

            <?php echo esc_html( 'overlay-pagetitle-banner' == get_theme_mod( 'overlay-pagetitle-layout', customizer_library_get_default( 'overlay-pagetitle-layout' ) ) ) ? '<div class="site-container">' : ''; ?>
                
                <h3 class="overlay-h-title">
                    <?php
                    if ( is_home() ) :
                        $overlay_blog_id = get_option( 'page_for_posts' );  ?>
                        <?php echo esc_html( get_page( $overlay_blog_id )->post_title );
                    elseif ( is_archive() ) :
                        if ( class_exists( 'WooCommerce' ) ) :
                            if ( is_shop() || is_product_category() || is_product_tag() ) :
                                $overlay_shop_id = get_option( 'woocommerce_shop_page_id' );
                                echo esc_html( get_page( $overlay_shop_id )->post_title );
                            else :
                                the_archive_title();
                                the_archive_description( '<div class="archive-description">', '</div>' );
                            endif;
                        else :
                            the_archive_title();
                            the_archive_description( '<div class="archive-description">', '</div>' );
                        endif;
                    elseif ( is_search() ) :
                        /* translators: %s: search query. */
                        printf( esc_html__( 'Search Results for: %s', 'overlay' ), '<span>' . get_search_query() . '</span>' );
                    else :
                        if ( class_exists( 'WooCommerce' ) ) :
                            if ( is_product() ) :
                                $overlay_shop_id = get_option( 'woocommerce_shop_page_id' );
                                echo esc_html( get_page( $overlay_shop_id )->post_title . ' - ' );
                            endif;
                        endif;
                        the_title();
                    endif;
                    ?>
                </h3>
                <?php if ( function_exists( 'bcn_display' ) ) : ?>
                    <div class="overlay-breadcrumbs">
                        <?php bcn_display(); ?>
                    </div>
                <?php endif; ?>

            <?php echo esc_html( 'overlay-pagetitle-banner' == get_theme_mod( 'overlay-pagetitle-layout', customizer_library_get_default( 'overlay-pagetitle-layout' ) ) ) ? '</div>' : ''; ?>

        </header>
    <?php endif; ?>
<?php endif; ?>