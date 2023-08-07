<footer id="colophon" class="site-footer overlay-footer-default">

    <div class="site-footer-inner <?php echo sanitize_html_class( get_theme_mod( 'overlay-footer-custom-cols', customizer_library_get_default( 'overlay-footer-custom-cols' ) ) ); ?> <?php echo sanitize_html_class( get_theme_mod( 'overlay-footdivide-style', customizer_library_get_default( 'overlay-footdivide-style' ) ) ); ?>">
        <div class="site-container">

			<div class="site-footer-widgets <?php echo sanitize_html_class( get_theme_mod( 'overlay-footalign', customizer_library_get_default( 'overlay-footalign' ) ) ); ?>">
				<?php if ( 'overlay-footer-custom-cols-5' == get_theme_mod( 'overlay-footer-custom-cols', customizer_library_get_default( 'overlay-footer-custom-cols' ) ) ) : ?>

					<div class="footer-custom-block footer-custom-one">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-1' ); ?>
					</div>

					<div class="footer-custom-block footer-custom-two">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-2' ); ?>
					</div>

					<div class="footer-custom-block footer-custom-three">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-3' ); ?>
					</div>

					<div class="footer-custom-block footer-custom-four">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-4' ); ?>
					</div>

					<div class="footer-custom-block footer-custom-five">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-5' ); ?>
					</div>

				<?php elseif ( 'overlay-footer-custom-cols-4' == get_theme_mod( 'overlay-footer-custom-cols', customizer_library_get_default( 'overlay-footer-custom-cols' ) ) ) : ?>

					<div class="footer-custom-block footer-custom-one">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-1' ); ?>
					</div>

					<div class="footer-custom-block footer-custom-two">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-2' ); ?>
					</div>

					<div class="footer-custom-block footer-custom-three">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-3' ); ?>
					</div>

					<div class="footer-custom-block footer-custom-four">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-4' ); ?>
					</div>

				<?php elseif ( 'overlay-footer-custom-cols-1' == get_theme_mod( 'overlay-footer-custom-cols', customizer_library_get_default( 'overlay-footer-custom-cols' ) ) ) : ?>

					<div class="footer-custom-block footer-custom-one">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-1' ); ?>
					</div>

				<?php elseif ( 'overlay-footer-custom-cols-2' == get_theme_mod( 'overlay-footer-custom-cols', customizer_library_get_default( 'overlay-footer-custom-cols' ) ) ) : ?>

					<div class="footer-custom-block footer-custom-one">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-1' ); ?>
					</div>

					<div class="footer-custom-block footer-custom-two">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-2' ); ?>
					</div>

				<?php else : ?>

					<div class="footer-custom-block footer-custom-one">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-1' ); ?>
					</div>

					<div class="footer-custom-block footer-custom-two">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-2' ); ?>
					</div>

					<div class="footer-custom-block footer-custom-three">
						<?php dynamic_sidebar( 'overlay-site-footer-custom-3' ); ?>
					</div>

				<?php endif; ?>
			</div>

		</div>

    </div>
    
    <?php
	// Get Site Bottom Bar
	get_template_part( '/templates/footer/bottombar/'.get_theme_mod( 'overlay-bottombar-layout', customizer_library_get_default( 'overlay-bottombar-layout' ) ) ); ?>

</footer><!-- #colophon -->