<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package Overlay
 */ ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php
	if ( 'overlay-pagetitle-default' == get_theme_mod( 'overlay-pagetitle-layout', customizer_library_get_default( 'overlay-pagetitle-layout' ) ) || 'overlay-pagetitle-other' == get_theme_mod( 'overlay-pagetitle-layout', customizer_library_get_default( 'overlay-pagetitle-layout' ) ) ) :
		get_template_part( '/templates/title-bar' );
	endif; ?>

	<?php
	if ( 'overlay-site-media-fimage' != get_theme_mod( 'overlay-site-media-type', customizer_library_get_default( 'overlay-site-media-type' ) ) ) :
		overlay_post_thumbnail();
	endif;?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'overlay' ),
			'after'  => '</div>',
		) ); ?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'overlay' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			); ?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->