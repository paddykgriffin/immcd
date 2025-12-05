<?php

/**
 * Template Name: Sermons
 *
 * @package _bless
 */

get_header();
?>

	
<main id="main">
	<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

		<?php get_template_part('template-parts/custom/custom', 'featured-image'); ?>

		<section <?php immanuel_church_dublin_content_class( 'sermons-page-wrapper entry-content py-12 lg:py-16 dark:bg-stone-950' ); ?>>
		
		<div class="container">
			
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div>' . __( 'Pages:', 'immanuel-church-dublin' ),
					'after'  => '</div>',
				)
			);
			?>

		
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

			</div>
		</section><!-- .entry-content -->


		<section <?php immanuel_church_dublin_content_class( 'sermons-archive-wrapper bg-gray-100 py-12 lg:py-24 dark:bg-stone-950' ); ?>>
			<div class="container">
				<h2 class="entry-title text-center">Sermons Archive</h2>
				<div class="pt-5">
					<?php echo do_shortcode('[seriesengine_wo enmse_cv=1 enmse_pag=10 enmse_apag=12 enmse_r=1 enmse_a=1]'); ?>
				</div>			
			</div>
		</section>


	</div><!-- #post-<?php the_ID(); ?> -->
</main><!-- #main -->
<?php
get_footer();
