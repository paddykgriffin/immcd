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



<div class="inner-page-banner grid">

	<header class="entry-header text-center col-start-1 row-start-1 flex pt-15 items-start z-20 relative">
		<?php
		if ( ! is_front_page() ) {
			the_title( '<h1 class="entry-title text-5xl">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title">', '</h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php immanuel_church_dublin_post_thumbnail(''); ?>
</div>

	<section <?php immanuel_church_dublin_content_class( 'entry-content dark:bg-stone-950' ); ?>>
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

	<!-- <?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
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
		</footer>
	<?php endif; ?> -->

</article><!-- #post-<?php the_ID(); ?> -->
