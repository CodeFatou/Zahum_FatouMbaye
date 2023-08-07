<?php
/**
 * The header for our theme
 *
 * @package Overlay
 */ ?>
<!doctype html><!-- Overlay.ORG -->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site <?php echo sanitize_html_class( get_theme_mod( 'overlay-header-search-type', customizer_library_get_default( 'overlay-header-search-type' ) ) ); ?>">

	<?php if ( get_theme_mod( 'overlay-social-add-sideicons', customizer_library_get_default( 'overlay-social-add-sideicons' ) ) ) : ?>
		<div class="overlay-side-social <?php echo ( get_theme_mod( 'overlay-social-let-scroll', customizer_library_get_default( 'overlay-social-let-scroll' ) ) ) ? sanitize_html_class( 'overlay-sideicons-scroll' ) : ''; ?> <?php echo ( get_theme_mod( 'overlay-social-set-sideicons-left', customizer_library_get_default( 'overlay-social-set-sideicons-left' ) ) ) ? sanitize_html_class( 'overlay-icons-sideleft' ) : sanitize_html_class( 'overlay-icons-sideright' ); ?> <?php echo sanitize_html_class( get_theme_mod( 'overlay-side-social-look', customizer_library_get_default( 'overlay-side-social-look' ) ) ); ?>">
			<?php get_template_part( 'templates/social-links' ); ?>
		</div>
	<?php endif; ?>

	<?php echo esc_html( 'overlay-site-boxed' == get_theme_mod( 'overlay-site-layout', customizer_library_get_default( 'overlay-site-layout' ) ) ) ? '<div class="site-boxed">' : '<div class="site-not-boxed">'; ?>

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'overlay' ); ?></a>

		<?php
		// Get Site Header
		get_template_part( '/templates/header/header' ); ?>

		<?php
		if ( 'overlay-pagetitle-banner' == get_theme_mod( 'overlay-pagetitle-layout', customizer_library_get_default( 'overlay-pagetitle-layout' ) ) ) :
			get_template_part( '/templates/title-bar' );
		endif; ?>

		<?php
		// Header Media / Slider
		if ( get_theme_mod( 'overlay-sitemedia-display-all', customizer_library_get_default( 'overlay-sitemedia-display-all' ) ) || 'overlay-site-media-fimage' == get_theme_mod( 'overlay-site-media-type', customizer_library_get_default( 'overlay-site-media-type' ) ) ) :
			get_template_part( '/templates/header/header-media' );
		else :
			if ( is_front_page() ) :
				get_template_part( '/templates/header/header-media' );
			endif;
		endif; ?>

		<div id="content" class="site-container site-content <?php echo sanitize_html_class( 'heading-prop-' . get_theme_mod( 'overlay-heading-fonts-size', customizer_library_get_default( 'overlay-heading-fonts-size' ) ) ); ?>">
			<div class="site-content-inner <?php echo ( get_theme_mod( 'overlay-content-divider-line', customizer_library_get_default( 'overlay-content-divider-line' ) ) ) ? sanitize_html_class( 'remove-line' ) : ''; ?>">