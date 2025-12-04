<section class="grid relative hero">

    <!-- Image -->
    <?php
        $image = function_exists('get_field') ? get_field('hero_image', 'option') : null;
        // Default/full size key from ACF
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        // Mobile size key (must match the size name registered in WP/ACF)
        $mobile_size = 'heroMobile';

        if ( empty( $image ) ): ?>
            <div>no image...</div>
        <?php else:
            // Prepare sources — prefer registered size names, fallback to url
            $alt = esc_attr( $image['alt'] ?? '' );
            $mobile_src = isset( $image['sizes'][ $mobile_size ] ) ? $image['sizes'][ $mobile_size ] : '';
            $desktop_src = isset( $image['sizes'][ $size ] ) ? $image['sizes'][ $size ] : $image['url'];
            ?>
            <picture class="col-start-1 row-start-1 w-full">
                <?php if ( $mobile_src ): ?>
                    <source media="(max-width: 767px)" srcset="<?php echo esc_url( $mobile_src ); ?>">
                <?php endif; ?>
                <img class="col-start-1 row-start-1 w-full" src="<?php echo esc_url( $desktop_src ); ?>" alt="<?php echo $alt; ?>" />
            </picture>
        <?php endif; ?>

    <div class="inset-0 col-start-1 row-start-1 bg-black/40 transition-opacity duration-500 opacity-100"></div>

    <div class="col-start-1 row-start-1 flex items-center z-20 ">
        <div class="container">
            <div class="grid content-center text-center ">
                <!-- Title -->
                <h1 class="text-4xl md:text-7xl font-semibold text-white">
                    <?php the_field('hero_title', 'option'); ?>
                </h1>
                <!-- Buttons Loop -->
                <?php if (have_rows('hero_buttons', 'option')): ?>
                    <?php while (have_rows('hero_buttons', 'option')): the_row(); ?>

                        <div class="flex flex-col md:flex-row items-center justify-center gap-4 mt-10">

                            <?php 
                            $link1 = get_sub_field('button_one');
                            if ($link1 && isset($link1['url'])): ?>
                                <a href="<?php echo esc_url($link1['url']); ?>"
                                    target="<?php echo esc_attr($link1['target'] ?? '_self'); ?>"
                                    class="text-white flex items-center gap-1 bg-primary hover:bg-secondary rounded-full text-xl px-14 py-3 md:py-5 transition-all duration-300">
                                    <?php echo esc_html($link1['title']); ?>
                                </a>
                            <?php endif; ?>

                            <?php 
                            $link2 = get_sub_field('button_two');
                            if ($link2 && isset($link2['url'])): ?>
                                <a href="<?php echo esc_url($link2['url']); ?>"
                                    target="<?php echo esc_attr($link2['target'] ?? '_self'); ?>"
                                    class="text-white flex items-center gap-1 bg-white/30 hover:bg-white hover:text-foreground rounded-full text-xl px-14 py-3 md:py-5 transition-all duration-300 scroll-smooth"
                                    onclick="if(this.hash) { event.preventDefault(); const el = document.querySelector(this.hash); if(el) { const offset = 100; const top = el.getBoundingClientRect().top + window.scrollY - offset; window.scrollTo({top, behavior: 'smooth'}); } }">
                                    <?php echo esc_html($link2['title']); ?>
                                </a>
                            <?php endif; ?>

                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!-- .grid -->
        </div><!-- .container -->
    </div>

</section> 