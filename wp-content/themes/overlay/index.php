<?php
/**
 * The main template file, used to display a page when nothing more specific matches a query.
 *
 * @package Overlay
 */
get_header(); ?>

	<div id="primary" class="content-area <?php echo ( 'overlay-blog-fw' == get_theme_mod( 'overlay-blog-layout', customizer_library_get_default( 'overlay-blog-layout' ) ) || 'overlay-blog-frs' == get_theme_mod( 'overlay-blog-layout', customizer_library_get_default( 'overlay-blog-layout' ) ) || 'overlay-blog-fls' == get_theme_mod( 'overlay-blog-layout', customizer_library_get_default( 'overlay-blog-layout' ) ) ) ? sanitize_html_class( 'content-area-full' ) : ''; ?>">
		<main id="main" class="site-main overlay-list list-grid loading-blocks <?php echo sanitize_html_class( get_theme_mod( 'overlay-blog-list-layout', customizer_library_get_default( 'overlay-blog-list-layout' ) ) ); ?> <?php echo ( get_theme_mod( 'overlay-blog-vert-center-items', customizer_library_get_default( 'overlay-blog-vert-center-items' ) ) ) ? sanitize_html_class( 'overlay-blog-vcenter' ) : ''; ?> <?php echo ( 'overlay-blog-grid' == get_theme_mod( 'overlay-blog-list-layout', customizer_library_get_default( 'overlay-blog-list-layout' ) ) || 'overlay-blog-tile' == get_theme_mod( 'overlay-blog-list-layout', customizer_library_get_default( 'overlay-blog-list-layout' ) ) ) ? sanitize_html_class( 'overlay-grid-' . get_theme_mod( 'overlay-blog-grid-cols', customizer_library_get_default( 'overlay-blog-grid-cols' ) ) ) : ''; ?> <?php echo ( 'overlay-blog-top' == get_theme_mod( 'overlay-blog-list-layout', customizer_library_get_default( 'overlay-blog-list-layout' ) ) && get_theme_mod( 'overlay-blog-top-center', customizer_library_get_default( 'overlay-blog-top-center' ) ) || 'overlay-blog-grid' == get_theme_mod( 'overlay-blog-list-layout', customizer_library_get_default( 'overlay-blog-list-layout' ) ) && get_theme_mod( 'overlay-blog-top-center', customizer_library_get_default( 'overlay-blog-top-center' ) ) || 'overlay-blog-tile' == get_theme_mod( 'overlay-blog-list-layout', customizer_library_get_default( 'overlay-blog-list-layout' ) ) && get_theme_mod( 'overlay-blog-top-center', customizer_library_get_default( 'overlay-blog-top-center' ) ) ) ? sanitize_html_class( 'overlay-blog-top-center' ) : ''; ?> <?php echo ( 'round' == get_theme_mod( 'overlay-blog-list-img-prop', customizer_library_get_default( 'overlay-blog-list-img-prop' ) ) ) ? sanitize_html_class( 'posts-round' ) : ''; ?>">

			<?php
			if ( have_posts() ) : ?>

				<?php
				if ( 'overlay-pagetitle-default' == get_theme_mod( 'overlay-pagetitle-layout', customizer_library_get_default( 'overlay-pagetitle-layout' ) ) || 'overlay-pagetitle-other' == get_theme_mod( 'overlay-pagetitle-layout', customizer_library_get_default( 'overlay-pagetitle-layout' ) ) ) :
					get_template_part( '/templates/title-bar' );
				endif; ?>

				<div class="overlay-list-inner" id="overlay-list-inner">
				
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						*/
						get_template_part( 'templates/content/content', get_post_type() );

					endwhile; ?>

				</div>

				<?php
				the_posts_navigation();
			else :
				get_template_part( 'templates/content/content', 'none' );
			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php if ( 'overlay-blog-fw' != get_theme_mod( 'overlay-blog-layout', customizer_library_get_default( 'overlay-blog-layout' ) ) ) : ?>
		<?php get_sidebar(); ?>
	<?php endif; ?>

<?php get_footer(); ?>