<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package immanuel-church-dublin
 */

get_header();
?>


		<main id="main">

			<section class="lg:py-16">
				<header class="page-header text-center">
					<h1 class="page-title entry-title text-3xl"><?php esc_html_e( 'Page Not Found', 'immanuel-church-dublin' ); ?></h1>
				</header><!-- .page-header -->

				<div <?php immanuel_church_dublin_content_class( 'page-content' ); ?>>
					<p class="pb-10"><?php esc_html_e( 'This page could not be found. It might have been removed or renamed, or it may never have existed.', 'immanuel-church-dublin' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section>

		</main><!-- #main -->


<?php
get_footer();
