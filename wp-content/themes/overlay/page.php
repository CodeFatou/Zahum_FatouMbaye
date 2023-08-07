<?php
/**
 * The template for displaying all pages by default.
 *
 * @package Overlay
 */
get_header(); ?>

	<div id="primary" class="content-area <?php echo ( 'overlay-page-fw' == get_theme_mod( 'overlay-page-layout', customizer_library_get_default( 'overlay-page-layout' ) ) || 'overlay-page-frs' == get_theme_mod( 'overlay-page-layout', customizer_library_get_default( 'overlay-page-layout' ) ) || 'overlay-page-fls' == get_theme_mod( 'overlay-page-layout', customizer_library_get_default( 'overlay-page-layout' ) ) ) ? sanitize_html_class( 'content-area-full' ) : ''; ?>">
		<main id="main" class="site-main">
		
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'templates/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php if ( 'overlay-page-fw' != get_theme_mod( 'overlay-page-layout', customizer_library_get_default( 'overlay-page-layout' ) ) ) : ?>
		<?php get_sidebar(); ?>
	<?php endif; ?>

<?php get_footer(); ?>