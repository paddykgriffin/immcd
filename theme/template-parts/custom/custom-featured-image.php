<section class="inner-page-banner grid">

	<header class="entry-header text-center col-start-1 row-start-1 flex pb-15 items-end z-20 relative <?php echo ( 'connect' === get_post_field( 'post_name' ) ) ? 'hidden' : ''; ?>">
		<?php
		if ( ! is_front_page() ) {
			the_title( '<h1 class="entry-title text-3xl md:text-7xl text-white text-shadow-sm">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title">', '</h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php immanuel_church_dublin_post_thumbnail(''); ?>
</section>