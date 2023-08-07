<?php
/**
 * Custom template tags for this theme
 * @package Overlay
 */

if ( ! function_exists( 'overlay_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function overlay_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$overlay_posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'overlay' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		// echo '<span class="posted-on">' . $posted_on . '</span>';
		$overlay_postedon_html = array(
			'a'      => array(
				'href'  => array(),
				'rel' => array(),
			),
			'time'     => array(
				'datetime'  => array(),
				'class' => array(),
			),
		);
		echo '<span class="posted-on">' . wp_kses( $overlay_posted_on, $overlay_postedon_html ) . '</span>';

	}
endif;

if ( ! function_exists( 'overlay_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function overlay_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'overlay' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		$overlay_byline_html = array(
			'a'      => array(
				'href'  => array(),
				'class' => array(),
			),
			'span'     => array(
				'class' => array(),
			),
		);
		echo '<span class="byline"> ' . wp_kses( $byline, $overlay_byline_html ) . '</span>';

	}
endif;

if ( ! function_exists( 'overlay_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function overlay_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			$overlay_cattags_html = array(
				'a'      => array(
					'href'  => array(),
					'rel' => array(),
				),
			);
			/* translators: used between list items, there is a space after the comma */
			$overlay_cats_list = get_the_category_list( esc_html__( ', ', 'overlay' ) );
			if ( $overlay_cats_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'overlay' ) . '</span>', wp_kses( $overlay_cats_list, $overlay_cattags_html ) );
			}

			/* translators: used between list items, there is a space after the comma */
			$overlay_tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'overlay' ) );
			if ( $overlay_tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'overlay' ) . '</span>', wp_kses( $overlay_tags_list, $overlay_cattags_html ) );
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'overlay' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

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
		);
	}
endif;

if ( ! function_exists( 'overlay_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function overlay_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) : ?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			$overlay_thumbnail = ( 'actual' == get_theme_mod( 'overlay-blog-list-img-prop', customizer_library_get_default( 'overlay-blog-list-img-prop' ) ) ) ? get_theme_mod( 'overlay-blog-list-img-cut', customizer_library_get_default( 'overlay-blog-list-img-cut' ) ) : 'post-thumbnail';
			the_post_thumbnail( $overlay_thumbnail, array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) ); ?>
		</a>
		<?php
		endif; // End is_singular().
	}
endif;

/**
 * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
 */
if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Fire the wp_body_open action.
	 */
	function wp_body_open() {
		/**
		 * Triggered after the opening <body> tag.
		 */
		do_action( 'wp_body_open' );
	}
endif;
