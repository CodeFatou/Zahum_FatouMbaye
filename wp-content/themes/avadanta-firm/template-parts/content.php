<?php 
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
?>
<div class="col-lg-12 col-md-12">
<div class="post post-full avadanta-agency" id="post-<?php the_ID(); ?>">
	<div class="post-thumb">
		<?php if(has_post_thumbnail()) { ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail(); ?>
		</a>
		 <?php } ?>
	</div>
	<div class="post-entry d-sm-flex d-block align-items-start  avadanta-post-agncy">
		<div class="post-content">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<div class="post-author d-flex align-items-center">
				<div class="post-tag d-flex comment">
				<?php avadanta_get_comments_numbers(); ?>
				</div>
				<div class="post-tag d-flex date">
				<?php avadanta_posted_on(); ?>
				</div>

			</div>
			<div class="content">
					<?php
						the_excerpt();
					?>
			</div>
			<div class="post-tag post-entry d-flex avadantaconslt-readmre">
				<a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','avadanta-firm'); ?>
				</a>
			</div>
		</div>
	</div>

</div>
</div>