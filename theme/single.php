<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package immanuel-church-dublin
 */

get_header();
?>


		<main id="main">
			<section id="single" class="single-page-wrapper py-8 lg:py-16 ">
<div class="container mx-auto px-4 py-8">
		<div class="mx-auto text-left">



			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'single' );

				if ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span aria-hidden="true">' . __( 'Next Post', 'immanuel-church-dublin' ) . '</span> ' .
								'<span class="sr-only">' . __( 'Next post:', 'immanuel-church-dublin' ) . '</span> <br/>' .
								'<span>%title</span>',
							'prev_text' => '<span aria-hidden="true">' . __( 'Previous Post', 'immanuel-church-dublin' ) . '</span> ' .
								'<span class="sr-only">' . __( 'Previous post:', 'immanuel-church-dublin' ) . '</span> <br/>' .
								'<span>%title</span>',
						)
					);
				}

				// If comments are open, or we have at least one comment, load
				// the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

				// End the loop.
			endwhile;
			?>
			</div>
			</div>
</section><!-- #primary -->
		</main><!-- #main -->
	

<?php
get_footer();
