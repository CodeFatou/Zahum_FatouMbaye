<footer id="colophon" class="site-footer overlay-footer-split">

    <div class="site-footer-inner <?php echo sanitize_html_class( get_theme_mod( 'overlay-footdivide-style', customizer_library_get_default( 'overlay-footdivide-style' ) ) ); ?>">
        <div class="site-container">
            <?php if ( is_active_sidebar( 'overlay-site-footer-split' ) ) : ?>
	            <ul class="site-footer-widgets <?php echo sanitize_html_class( get_theme_mod( 'overlay-footalign', customizer_library_get_default( 'overlay-footalign' ) ) ); ?>">
	                <?php dynamic_sidebar( 'overlay-site-footer-split' ); ?>
	            </ul>
	        <?php endif; ?>
            <div class="clearboth"></div>
        </div>

    </div>
    
    <?php
    // Get Site Bottom Bar
    get_template_part( '/templates/footer/bottombar/'.get_theme_mod( 'overlay-bottombar-layout', customizer_library_get_default( 'overlay-bottombar-layout' ) ) ); ?>

</footer><!-- #colophon -->