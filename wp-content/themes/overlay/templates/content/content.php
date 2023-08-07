<?php
/**
 * Template part for displaying posts
 *
 * @package Overlay
 */
$overlay_img_cut = get_theme_mod( 'overlay-blog-list-img-cut', customizer_library_get_default( 'overlay-blog-list-img-cut' ) );
$overlay_img_proportions = get_theme_mod( 'overlay-blog-list-img-prop', customizer_library_get_default( 'overlay-blog-list-img-prop' ) ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-inner">

		<?php if ( has_post_thumbnail() ) : ?>

			<div class="post-img <?php echo ( 'actual' != $overlay_img_proportions ) ? sanitize_html_class( 'prop-img' ) : ''; ?> <?php echo ( 'overlay-imgstyle-none' != get_theme_mod( 'overlay-blog-img-style-anim', customizer_library_get_default( 'overlay-blog-img-style-anim' ) ) ) ? sanitize_html_class( get_theme_mod( 'overlay-blog-img-style-anim', customizer_library_get_default( 'overlay-blog-img-style-anim' ) ) ) : ''; ?>" <?php echo ( '1-1' == $overlay_img_proportions || '3-2' == $overlay_img_proportions || '4-3' == $overlay_img_proportions || 'round' == $overlay_img_proportions ) ? 'style="background-image: url(' . esc_url( get_the_post_thumbnail_url( $post->ID, $overlay_img_cut ) ) . ');"' : ''; ?>>
				<?php if ( is_singular() ) : ?>

					<?php
					if ( 'overlay-site-media-fimage' != get_theme_mod( 'overlay-site-media-type', customizer_library_get_default( 'overlay-site-media-type' ) ) ) :
						overlay_post_thumbnail();
					endif; ?>

				<?php else : ?>

					<?php if ( '1-1' == $overlay_img_proportions || '3-2' == $overlay_img_proportions || '4-3' == $overlay_img_proportions || 'round' == $overlay_img_proportions ) : ?>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog-img-<?php echo esc_attr( $overlay_img_proportions ); ?>.png" alt="<?php the_title(); ?>" />
					<?php else : ?>
						<?php overlay_post_thumbnail(); ?>
					<?php endif; ?>

				<?php endif; ?>
			</div>
			
		<?php else : ?>
			<div class="post-no-img">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blog-img-<?php echo esc_html( '1-1' == $overlay_img_proportions || '3-2' == $overlay_img_proportions || '4-3' == $overlay_img_proportions || 'round' == $overlay_img_proportions ) ? esc_attr( $overlay_img_proportions ) : esc_attr( '3-2' ); ?>.png" alt="<?php the_title(); ?>" />
			</div>
		<?php endif; ?>

		<div class="post-content <?php echo ( !has_post_thumbnail() ) ? sanitize_html_class( 'no-thumbnail' ) : ''; ?> <?php echo ( 'overlay-blog-tile' == get_theme_mod( 'overlay-blog-list-layout', customizer_library_get_default( 'overlay-blog-list-layout' ) ) ) ? sanitize_html_class( get_theme_mod( 'overlay-blog-tile-anim', customizer_library_get_default( 'overlay-blog-tile-anim' ) ) ) : ''; ?>">
			<div class="post-content-inner">

				<header class="entry-header">

					<?php
					if ( is_singular() ) :
						if ( 'overlay-pagetitle-default' == get_theme_mod( 'overlay-pagetitle-layout', customizer_library_get_default( 'overlay-pagetitle-layout' ) ) || 'overlay-pagetitle-other' == get_theme_mod( 'overlay-pagetitle-layout', customizer_library_get_default( 'overlay-pagetitle-layout' ) ) ) :
							get_template_part( '/templates/title-bar' );
						endif;
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif; ?>
					
					<?php if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php
							overlay_posted_on();
							overlay_posted_by(); ?>
						</div><!-- .entry-meta -->
					<?php endif; ?>

				</header><!-- .entry-header -->
				
				<div class="entry-content">
					<?php
					if ( has_excerpt() ) :
						the_excerpt();
					else :
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'overlay' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );
					endif;

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'overlay' ),
						'after'  => '</div>',
					) ); ?>
				</div><!-- .entry-content -->
				
				<footer class="entry-footer">
					<?php overlay_entry_footer(); ?>
				</footer><!-- .entry-footer -->
				
			</div>
		</div>

	</div>
</article><!-- #post-<?php the_ID(); ?> -->