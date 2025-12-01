<div class="py-8 md:py-12">
    <div class="container">
        <div class="">
             <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>" class="w-10 md:w-36 border-white/45 rounded-full  border-1" />
            
                <!-- Buttons Loop -->
                <?php if (have_rows('icons', 'option')): ?>
                    <div class="flex py-10">
                    <?php while (have_rows('icons', 'option')): the_row(); ?>

                        <?php

                        $link = get_sub_field('icon_link');


                        if ($link): ?>
                            <a href="<?php echo esc_url($link); ?>"
                                class="px-2 py-1.5 block default-transition leading-4 ">

                            <div class="sr-only"> <?php the_sub_field('icon_name'); ?></div>

                                    <?php
                        $image = get_sub_field('icon_image'); // Get image field

                        if ($image && is_array($image) && isset($image['url'])): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ?? ''); ?>" />
                        <?php endif; ?>
                            </a>
                        <?php endif; ?>

                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
        </div>
         <div class="">
              <div class="grid gap-6 md:grid-cols-12">

            <div class="col-span-8">

               

                <div class="grid grid-cols-2">
                    <div>
                    <?php 
                    $menu_name = '';
                    $locations = get_nav_menu_locations();
                    if ( isset( $locations['menu-2'] ) ) {
                    $menu = wp_get_nav_menu_object( $locations['menu-2'] );
                    if ( $menu ) {
                        $menu_name = $menu->name;
                    }
                    }
                    ?>
                    <h3 class="text-white text-[24px] font-medium pb-4 dark:text-white"><?php echo esc_html( $menu_name ); ?></h3>
                    <?php if ( has_nav_menu( 'menu-2' ) ) : ?>



                    <nav aria-label="<?php esc_attr_e( 'Footer Menu', 'immanuel-church-dublin' ); ?>">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-2',
                            'menu_class'     => 'footer-menu',
                            'depth'          => 1,
                        )
                    );
                    ?>
                    </nav>

                    <?php endif; ?>

                    </div>

                    <div>
                        <?php 
                        $field_group = acf_get_field_group( 'group_6928ccca45a92' );
                        if ( $field_group ) : ?>
                            <h3 class="text-white text-[24px] font-medium pb-4 dark:text-white">
                                <?php echo esc_html( $field_group['title'] ); ?>
                            </h3>
                        <?php endif; ?>

                        <div class="grid gap-3">

                            <div>
                                <a class="link-hover inline-block  " href="<?php echo esc_url( 'tel:' . antispambot( get_field('contact_tel', 'option') ) ); ?>">
                                (01) <?php the_field('contact_tel','option'); ?>
                                </a>
                            </div>

                            <div>
                                <a class="link-hover inline-block " href="<?php echo esc_url( 'mailto:' . antispambot( get_field('contact_email', 'option') ) ); ?>">
                                <?php the_field('contact_email','option'); ?>
                                </a>
                            </div>

                            <?php if ( has_nav_menu( 'menu-2' ) ) : ?>
                                <nav aria-label="<?php esc_attr_e( 'Footer Menu', 'immanuel-church-dublin' ); ?>">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'menu-3',
                                            'menu_class'     => 'contact-footer-menu',
                                            'depth'          => 1,
                                        )
                                    );
                                    ?>
                                </nav>
                            <?php endif; ?>


                        </div>
                    </div>
                </div>

            </div>

            <div class="col-span-4">
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <aside role="complementary" class="mailchimp-widget" aria-label="<?php esc_attr_e( 'Mailchimp', 'immanuel-church-dublin' ); ?>">
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </aside>
                <?php endif; ?>
            </div>
        </div>
        </div>
      
    </div>
</div>