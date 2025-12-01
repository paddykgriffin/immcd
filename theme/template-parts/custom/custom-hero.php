<section class="grid relative hero">

    <!-- Image -->
    <?php
        $image = function_exists('get_field') ? get_field('hero_image', 'option') : null;
        $size = 'full'; // (thumbnail, medium, large, full or custom size
        if (empty($image)): ?>
            <div>no image...</div>
        <?php endif; ?>
        <?php if (!empty($image)): ?>
            <img class="col-start-1 row-start-1 w-full" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

    <div class="inset-0 col-start-1 row-start-1 bg-black/40 transition-opacity duration-500 opacity-100"></div>

    <div class="col-start-1 row-start-1 flex items-center z-20 ">
        <div class="container">
            <div class="grid content-center text-center pt-20">
                <!-- Title -->
                <h1 class="text-7xl font-semibold text-white">
                    <?php the_field('hero_title', 'option'); ?>
                </h1>
                <!-- Buttons Loop -->
                <?php if (have_rows('hero_buttons', 'option')): ?>
                    <?php while (have_rows('hero_buttons', 'option')): the_row(); ?>

                        <div class="flex items-center justify-center gap-4 mt-10">

                            <?php 
                            $link1 = get_sub_field('button_one');
                            if ($link1 && isset($link1['url'])): ?>
                                <a href="<?php echo esc_url($link1['url']); ?>"
                                    target="<?php echo esc_attr($link1['target'] ?? '_self'); ?>"
                                    class="text-white flex items-center gap-1 bg-primary hover:bg-secondary rounded-full text-xl px-14 py-5 transition-all duration-300">
                                    <?php echo esc_html($link1['title']); ?>
                                </a>
                            <?php endif; ?>

                            <?php 
                            $link2 = get_sub_field('button_two');
                            if ($link2 && isset($link2['url'])): ?>
                                <a href="<?php echo esc_url($link2['url']); ?>"
                                    target="<?php echo esc_attr($link2['target'] ?? '_self'); ?>"
                                    class="text-white flex items-center gap-1 bg-white/30 hover:bg-white hover:text-foreground rounded-full text-xl px-14 py-5 transition-all duration-300 scroll-smooth"
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