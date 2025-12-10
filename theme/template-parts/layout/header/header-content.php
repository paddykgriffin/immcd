<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package immanuel-church-dublin
 */

?>

<header id="masthead" class="bg-white dark:bg-black fixed z-[40] w-full top-0 shadow-xl py-3 dark:border-b dark:border-gray-500">

	<div class="container">

		<div class="grid grid-cols-2 lg:grid-cols-12 gap-6 md:gap-6 justify-between">

			<div class="lg:col-span-10 flex gap-6 items-center">
				<?php
				if ( is_front_page() ) :
					?>
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="hover:opacity-50 transition-all duration-300">
								<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>" class="w-16 md:w-24" />
							</a>	
					<?php
				else :
					?>
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="hover:opacity-50 transition-all duration-300">
								<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>" class="w-16 md:w-24" />
							</a>	
					<?php
				endif;

				$immanuel_church_dublin_description = get_bloginfo( 'description', 'display' );
				if ( $immanuel_church_dublin_description || is_customize_preview() ) :
					?>
					<p><?php echo $immanuel_church_dublin_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			

			<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'immanuel-church-dublin' ); ?>" class="pl-10 flex">
				<!-- <button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'immanuel-church-dublin' ); ?></button> -->

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
									'container' => false,
									'menu_id' => 'primary-menu', 
									'menu_class' => ' gap-12 lg:gap-8 xl:gap-12 hidden xl:flex',
									'items_wrap' => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			</div>

			<div class="lg:col-span-2 grid items-center">
				<div class="flex justify-end">
					<div class="hidden xl:block">
						<?php get_template_part('template-parts/layout/header/header', 'mode'); ?>
					</div>
					<button id="menuBtn" class="xl:hidden text-black dark:text-white" aria-controls="primary-menu"
						aria-expanded="false">
						<span class="material-symbols-outlined !block !text-[40px]">menu</span>
						<p class="sr-only"> <?php esc_html_e('Primary Menu', '_bless'); ?>
						</p>
					</button>
				</div>
			</div>
		</div> <!-- .grid -->

	</div><!-- .container -->

</header><!-- end #masthead -->
