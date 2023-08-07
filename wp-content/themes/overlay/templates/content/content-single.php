<?php
/**
 * Template part for displaying post content in single.php
 *
 * @package Overlay
 */ ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php
	if ( 'overlay-pagetitle-default' == get_theme_mod( 'overlay-pagetitle-layout', customizer_library_get_default( 'overlay-pagetitle-layout' ) ) || 'overlay-pagetitle-other' == get_theme_mod( 'overlay-pagetitle-layout', customizer_library_get_default( 'overlay-pagetitle-layout' ) ) ) :
		get_template_part( '/templates/title-bar' );
	endif; ?>

	<?php
	if ( !get_theme_mod( 'overlay-blog-post-fimage', customizer_library_get_default( 'overlay-blog-post-fimage' ) ) ) :
		if ( 'overlay-site-media-fimage' != get_theme_mod( 'overlay-site-media-type', customizer_library_get_default( 'overlay-site-media-type' ) ) ) :
			overlay_post_thumbnail();
		endif;
	endif; ?>

	<div class="entry-content">

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
				overlay_posted_on();
				overlay_posted_by(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
        
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'overlay' ),
			'after'  => '</div>',
        ) ); ?>
        
	</div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php overlay_entry_footer(); ?>
    </footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->