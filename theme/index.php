<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package immanuel-church-dublin
 */

get_header();
?>

	
		<main id="main">


		<section class="inner-page-banner grid bg-black">

	<header class="entry-header text-center col-start-1 row-start-1 flex pb-15 items-end z-20 relative">
			<?php single_post_title( '<h1 class="entry-title lg:pt-15 mb-0 text-5xl text-white text-shadow-md">', '</h1>' ); ?>
			
	</header><!-- .entry-header -->

</section>



<section id="posts" class="md:py-20">
		<div class="container">
			<div class="grid md:grid-cols-12 md:gap-16">
				<div class="md:col-span-9 posts-content">

					<?php
				if (have_posts()) {

					if (is_home() && ! is_front_page()) :
				?>
						<header class="entry-header pb-8 hidden">
							<h1 class="entry-title"><?php single_post_title(); ?></h1>
						</header><!-- .entry-header -->


						<?php echo get_search_form(); ?>
						<div class="posts-wrapper grid gap-8 lg:grid-cols-2 2xl:grid-cols-1 pb-16">
					<?php
					endif;

					// Load posts loop.
					while (have_posts()) {
						the_post();
						get_template_part('template-parts/content/content');
					}

					
				} else {

					// If no content, include the "No posts found" template.
					get_template_part('template-parts/content/content', 'none');
				}
					?>
						</div>

						<?php immanuel_church_dublin_the_posts_navigation(); ?>





			</div>
			<?php if (is_active_sidebar('posts-sidebar')) : ?>
				<aside class="md:col-span-3 posts-sidebar" role="complementary" aria-label="<?php esc_attr_e('Footer', '_tw'); ?>">
					<?php echo get_search_form(); ?>
					<?php dynamic_sidebar('posts-sidebar'); ?>
				</aside>
			<?php endif; ?>
				
			</div>
		</div>
	</section><!-- #posts-wrapper -->

		</main><!-- #main -->
	

<?php
get_footer();
