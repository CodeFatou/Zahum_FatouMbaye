<?php
/**
 * The template for displaying all single posts
 *
 * @package Overlay
 */
get_header(); ?>

	<div id="primary" class="content-area <?php echo ( 'overlay-blog-post-fw' == get_theme_mod( 'overlay-blog-post-layout', customizer_library_get_default( 'overlay-blog-post-layout' ) ) || 'overlay-blog-post-frs' == get_theme_mod( 'overlay-blog-post-layout', customizer_library_get_default( 'overlay-blog-post-layout' ) ) || 'overlay-blog-post-fls' == get_theme_mod( 'overlay-blog-post-layout', customizer_library_get_default( 'overlay-blog-post-layout' ) ) ) ? sanitize_html_class( 'content-area-full' ) : ''; ?>">
		<main id="main" class="site-main <?php echo sanitize_html_class( get_theme_mod( 'overlay-blog-post-nav-layout', customizer_library_get_default( 'overlay-blog-post-nav-layout' ) ) ); ?> <?php echo sanitize_html_class( get_theme_mod( 'overlay-blog-comments-layout', customizer_library_get_default( 'overlay-blog-comments-layout' ) ) ); ?>">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'templates/content/content', 'single' );

				if ( 'overlay-postnav-none' != get_theme_mod( 'overlay-blog-post-nav-layout', customizer_library_get_default( 'overlay-blog-post-nav-layout' ) ) ) {
					the_post_navigation();
				}

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php if ( 'overlay-blog-post-fw' != get_theme_mod( 'overlay-blog-post-layout', customizer_library_get_default( 'overlay-blog-post-layout' ) ) ) : ?>
		<?php get_sidebar(); ?>
	<?php endif; ?>

<?php get_footer(); ?>