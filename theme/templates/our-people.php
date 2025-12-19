<?php

/**
 * Template Name: Our People
 *
 * @package immanuel_church_dublin
 */

get_header();
?>
<main id="main">

<?php get_template_part('template-parts/custom/custom', 'featured-image'); ?>
 <!-- Inner Page Hero/Featured Image -->


 	<section <?php immanuel_church_dublin_content_class( 'entry-content py-12 lg:py-16 ' ); ?>>

<p class="text-center"><?php the_field('church_team_description', 'option'); ?></p>

</section><!-- .entry-content -->


<?php get_template_part( 'template-parts/acf/acf', 'people-blocks' ); ?>


<?php
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content/content', 'people' );

			// If comments are open, or we have at least one comment, load
			// the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

		endwhile; // End of the loop.
		?>


</main>

<?php
get_footer();
?>
