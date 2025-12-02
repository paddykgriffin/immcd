<?php
/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package immanuel-church-dublin
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<?php get_template_part('template-parts/custom/custom', 'featured-image'); ?>
 <!-- Inner Page Hero/Featured Image -->

	<section <?php immanuel_church_dublin_content_class( 'entry-content lg:py-16' ); ?>>
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'immanuel-church-dublin' ),
				'after'  => '</div>',
			)
		);
		?>
	</section><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers. */
						__( 'Edit <span class="sr-only">%s</span>', 'immanuel-church-dublin' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			?>
		
	<?php endif; ?>

	

</article><!-- #post-<?php the_ID(); ?> -->
