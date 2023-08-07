<?php
/**
 * The template for displaying the footer
 *
 * @package Overlay
 */
?>
			</div><!-- .site-content-inner -->
		</div><!-- #content -->

		<?php
		// Get Site Footer
		get_template_part( '/templates/footer/'.get_theme_mod( 'overlay-footer-layout', customizer_library_get_default( 'overlay-footer-layout' ) ) ); ?>

	</div><!-- .site-boxed / .site-not-boxed -->

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
