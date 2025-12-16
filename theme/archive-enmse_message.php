<?php

/**
 * Template Name: Sermons Archive
 *
 * @package _bless
 */

get_header();
?>

	
<main id="main">
	<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

	<section class="inner-page-banner grid">

	<header class="entry-header text-center col-start-1 row-start-1 flex pb-15 items-end z-20 relative <?php echo ( 'connect' === get_post_field( 'post_name' ) ) ? 'hidden' : ''; ?>">
		<h1 class="entry-title text-3xl md:text-7xl text-white text-shadow-sm">Sermons</h1>
	</header><!-- .entry-header -->


  <figure>
				<picture>
											<source media="(max-width: 767px)" data-srcset="https://staging.immanuelchurchdublin.org//wp-content/uploads/2025/12/banner-sermons-400x200.png" srcset="https://staging.immanuelchurchdublin.org//wp-content/uploads/2025/12/banner-sermons-400x200.png">
										<img class="mobile rounded-none ls-is-cached lazyloaded" data-src="https://staging.immanuelchurchdublin.org//wp-content/uploads/2025/12/banner-sermons.png" alt="Banner sermons" src="https://staging.immanuelchurchdublin.org//wp-content/uploads/2025/12/banner-sermons.png" style="--smush-placeholder-width: 1440px; --smush-placeholder-aspect-ratio: 1440/334;">
				</picture>
			</figure>



</section>

		<section <?php immanuel_church_dublin_content_class( 'sermons-page-wrapper entry-content py-12 lg:py-16 dark:bg-stone-950' ); ?>>
		
		<div class="container">
			
				<?php echo do_shortcode('[seriesengine_wo enmse_hsh=1 enmse_pag=6 enmse_apag=12 enmse_e=1 enmse_r=1 enmse_sort=1 enmse_htd=1]'); ?>
			

		
	

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
