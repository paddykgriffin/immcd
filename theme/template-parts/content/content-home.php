<?php

/**
 * Template part for displaying home page content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _bless
 */

?>
<section>
<div id="welcome-<?php the_ID(); ?>" <?php post_class('grid lg:grid-cols-2 container items-center mx-auto gap-16 py-12 md:pt-24 md:pb-36 dark:text-white'); ?>>
	<div <?php immanuel_church_dublin_content_class('entry-content md:pr-24'); ?>>
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

	
	<?php
	// Get the featured image
			$thumb_id = get_post_thumbnail_id();
			if ( ! $thumb_id ) {
				?>
				<div>no image...</div>
				<?php
				// Do not return, just skip the figure
			} else {

			// Get image data and sizes
			$image = wp_get_attachment_image_src( $thumb_id, 'full' );
			$alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
			
			// Size keys
			$mobile_size = 'tile-md';
			$desktop_size = 'full';

			// Get the image object to access sizes array
			$image_obj = wp_get_attachment_image_src( $thumb_id, $desktop_size );
			$mobile_src = wp_get_attachment_image_src( $thumb_id, $mobile_size );

			// Prepare sources
			$mobile_src = $mobile_src ? $mobile_src[0] : '';
			$desktop_src = $image_obj ? $image_obj[0] : '';
			?>

			<figure>
				<picture>
					<?php if ( $mobile_src ): ?>
						<source media="(max-width: 767px)" srcset="<?php echo esc_url( $mobile_src ); ?>">
					<?php endif; ?>
					<img class="mobile rounded-none" src="<?php echo esc_url( $desktop_src ); ?>" alt="<?php echo esc_attr( $alt ); ?>" />
				</picture>
			</figure><!-- .post-thumbnail -->
			<?php } ?>

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

</div>
</section>
<!-- #post-<?php the_ID(); ?> -->