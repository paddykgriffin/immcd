<div class="py-8 md:py-6">
    <div class="container flex flex-col lg:flex-row md:justify-between md:items-center">

   

     <?php
        $immanuel_church_dublin_blog_info = get_bloginfo('name');
        if (!empty( $immanuel_church_dublin_blog_info)):
        ?>
            <div class="font-light text-sm text-center lg:text-left pb-8 md:pb-0 flex gap-2">
                <span class="block lg:inline pb-2 md:pb-0"> &copy;
                    <?php echo date("Y"); ?>
                    <?php bloginfo('name'); ?> .</span>
                <span class="block lg:inline pb-2 lg:pb-0">All rights reserved</span>
                <!-- <span class="block lg:inline bg-red-500">
                    <?php the_field('charity_label', 'option'); ?>
                    <?php the_field('charity_number', 'option'); ?>
                </span> -->

                <div class=" pl-3">
                     <?php if ( has_nav_menu( 'menu-4' ) ) : ?>


   
		<nav aria-label="<?php esc_attr_e( 'Privacy Menu', 'immanuel-church-dublin' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-4',
					'menu_class'     => 'privacy-footer-menu',
					'depth'          => 1,
				)
			);
			?>
		</nav>
        
	<?php endif; ?>
                 </div>



            </div>
        <?php
        endif;

        /* translators: 1: WordPress link, 2: WordPress. */
        // printf(
        //     '<a href="%1$s">proudly powered by %2$s</a>.',
        //     esc_url(__('https://wordpress.org/', '_bless')),
        //     'WordPress'
        // );
        ?>
 <a href="https://paddygriffin.com"
            class="font-light text-sm  hover:text-gray-400 transition-all duration-300 text-center md:text-left link-hover" target="_blank">
            Site designed and developed by Paddy Griffin
        </a>



    </div>
</div>