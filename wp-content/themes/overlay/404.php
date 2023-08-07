<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Overlay
 */
get_header();
?>
	<div id="primary" class="content-area content-area-full">
		<main id="main" class="site-main">

			<section class="error-404 not-found">

				<?php if ( !get_theme_mod( 'overlay-error-remove-img', customizer_library_get_default( 'overlay-error-remove-img' ) ) ) : ?>
					<div class="error-ban-sign">
						<i class="fa fa-ban"></i>
					</div>
				<?php endif; ?>

				<?php if ( !get_theme_mod( 'overlay-error-remove-title', customizer_library_get_default( 'overlay-error-remove-title' ) ) ) : ?>
					<header class="error-header">
						<h2 class="page-title"><?php echo esc_html( get_theme_mod( 'overlay-error-title', customizer_library_get_default( 'overlay-error-title' ) ) ); ?></h2>
					</header><!-- .page-header -->
				<?php endif; ?>

				<?php if ( !get_theme_mod( 'overlay-error-remove-text', customizer_library_get_default( 'overlay-error-remove-text' ) ) ) : ?>
					<div class="error-content">
						<?php echo esc_html( get_theme_mod( 'overlay-error-text', customizer_library_get_default( 'overlay-error-text' ) ) ); ?>
					</div>
				<?php endif; ?>

				<?php if ( !get_theme_mod( 'overlay-error-remove-search', customizer_library_get_default( 'overlay-error-remove-search' ) ) ) : ?>
					<div class="error-search">
						<?php get_search_form(); ?>
					</div>
				<?php endif; ?>

				<?php if ( !get_theme_mod( 'overlay-error-remove-btn', customizer_library_get_default( 'overlay-error-remove-btn' ) ) ) : ?>
					<div class="error-btn">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button"><?php esc_html_e( 'Return Home', 'overlay' ); ?></a>
					</div>
				<?php endif; ?>

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
