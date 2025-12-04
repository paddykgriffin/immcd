<div id="sidebar" data-state="closed"
    class="fixed z-50 bg-white dark:bg-black  h-full transition-transform duration-500 ease-in-out w-3/4 sm:max-w-sm transform translate-x-full inset-y-0 right-0">

    <div class="border-b-2 border-stone-800 px-6 py-4 flex items-center justify-between">
        <button id="homeBtn" class="text-black dark:text-white ">
            <span class="material-symbols-outlined !block">home</span>
            <p class="sr-only"> <?php esc_html_e('Close Menu', '_bless'); ?>
        </button>
       
        <?php get_template_part('template-parts/layout/header/header', 'mode'); ?>
       
        <button id="closeBtn" class="text-black dark:text-white">
            <span class="material-symbols-outlined !block">close</span>
            <p class="sr-only"> <?php esc_html_e('Close Menu', '_bless'); ?>
        </button>
    </div>
    <nav id="site-mobile-navigation"
        aria-label="<?php esc_attr_e('Mobile Main Navigation', '_bless'); ?>" class="">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'container' => false,
                'menu_id' => 'primary-menu',
                'menu_class' => '',
                'items_wrap' => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
            )
        );
        ?>
    </nav><!-- #site-mobile-navigation -->
</div>