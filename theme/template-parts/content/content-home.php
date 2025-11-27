<?php

/**
 * Template part for displaying home page content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _bless
 */

?>

<div id="welcome-<?php the_ID(); ?>" <?php post_class('grid md:grid-cols-2 container items-center mx-auto gap-16  py-6 md:pt-24 md:pb-36 dark:text-white '); ?>>
	<div <?php immanuel_church_dublin_content_class('home-block pr-24'); ?>>
		<header class="entry-header dark:text-white">
			<?php
			if (!is_front_page()) {
				the_title('<h1 class="entry-title">', '</h1>');
			} else {
				the_title('<h2 class="entry-title not-prose tracking-tight">', '</h2>');
			}
			?>
		</header>

		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div>' . __('Pages:', '_bless'),
				'after' => '</div>',
			)
		);
		?>
	</div>
	<!-- .home-block -->

	<?php immanuel_church_dublin_post_thumbnail(); ?>

	<?php if (get_edit_post_link()): ?>

		<?php
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__('Edit <span class="sr-only">%s</span>', '_bless'),
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

</div><!-- #post-<?php the_ID(); ?> -->