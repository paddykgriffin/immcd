<?php
if ( is_page( 'what-to-expect' ) ): // page slug
?>



<section <?php immanuel_church_dublin_content_class( 'py-12 md:py-24' ); ?>>
    <div class="container">
        <div class="grid md:grid-cols-12 gap-16 items-center">
            <div class="md:col-span-7">
                <h2 class="entry-title text-primary"> <?php the_field('two_col_block_sundays_title'); ?></h2>
                <div class="entry-content">
                    <?php the_field('two_col_block_sundays_desc'); ?>
                </div>
                <?php 
                $link1 = get_field('two_col_block_sundays_link');
                if ($link1 && isset($link1['url'])): ?>
                    <a href="<?php echo esc_url($link1['url']); ?>"
                    target="<?php echo esc_attr($link1['target'] ?? '_self'); ?>"
                    class="btn">
                        <?php echo esc_html($link1['title']); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="!ml-16"><path fill="currentColor" d="M4 12h12.25L11 6.75l.66-.75l6.5 6.5l-6.5 6.5l-.66-.75L16.25 13H4z"/></svg>
                    </a>
                <?php endif; ?>
            </div>
            <div class="md:col-span-5">
                <?php
                    $image = function_exists('get_field') ? get_field('two_col_block_sundays_image') : null;
                    $size = 'full'; // (thumbnail, medium, large, full or custom size
                    if ($image): ?>
                        <img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php else: ?>
                        <div>no image...</div>
                <?php endif; ?>
            </div>
        </div>
   </div>
</section>


<section <?php immanuel_church_dublin_content_class( 'py-12 md:py-24 bg-gray-100 dark:bg-black' ); ?>>
   <div class="container text-center">


    <h2 class="entry-title text-center text-primary mb-0"> <?php the_field('what_belive_title'); ?></h2>
    <div class="max-w-[900px] mx-auto entry-content">
        <p><?php the_field('what_believe_description'); ?></p>
    </div>

            <div class="grid md:grid-cols-3 py-12 gap-8">
                <!-- Loop -->
                <?php if (have_rows('our_beliefs')): ?>
                    <?php while (have_rows('our_beliefs')): the_row(); ?>
                    <div>
                        <!-- Image -->
                        <?php
                            $image = function_exists('get_sub_field') ? get_sub_field('belief_image') : null;
                            if ( empty( $image ) ): ?>
                            <div>no image...</div>
                        <?php endif; ?>
                        <?php if ( ! empty( $image ) && is_array( $image ) && isset( $image['url'] ) ): ?>
                            <img class="col-start-1 row-start-1 w-full md:w-1/2 md:mx-auto" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ?? '' ); ?>" />
                        <?php endif; ?>

                        <?php $title = get_sub_field('belief_description');
                            if ( $title ): ?>
                            <div class="entry-content">
                                <p class="font-normal py-8"><?php echo esc_html( $title ); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

                

                <?php 
                $link1 = get_field('what_believe_link');
                if ($link1 && isset($link1['url'])): ?>
                    <a href="<?php echo esc_url($link1['url']); ?>"
                    target="<?php echo esc_attr($link1['target'] ?? '_self'); ?>"
                    class="btn">
                        <?php echo esc_html($link1['title']); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="!ml-16"><path fill="currentColor" d="M4 12h12.25L11 6.75l.66-.75l6.5 6.5l-6.5 6.5l-.66-.75L16.25 13H4z"/></svg>
                    </a>
                <?php endif; ?>


   </div>
</section>


<section <?php immanuel_church_dublin_content_class( 'py-12 md:py-24' ); ?>>
    <div class="container">
        <div class="grid md:grid-cols-12 gap-16 items-center">
            <div class="md:col-span-7">
                <h2 class="entry-title text-primary"> <?php the_field('two_col_block_people_title'); ?></h2>
                <div class="entry-content">
                    <?php the_field('two_col_block_people_desc'); ?>
                </div>
                <?php 
                $link1 = get_field('two_col_block_people_link');
                if ($link1 && isset($link1['url'])): ?>
                    <a href="<?php echo esc_url($link1['url']); ?>"
                    target="<?php echo esc_attr($link1['target'] ?? '_self'); ?>"
                    class="btn">
                        <?php echo esc_html($link1['title']); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="!ml-16"><path fill="currentColor" d="M4 12h12.25L11 6.75l.66-.75l6.5 6.5l-6.5 6.5l-.66-.75L16.25 13H4z"/></svg>
                    </a>
                <?php endif; ?>
            </div>
            <div class="md:col-span-5">
                <?php
                    $image = function_exists('get_field') ? get_field('two_col_block_people_image') : null;
                    $size = 'full'; // (thumbnail, medium, large, full or custom size
                    if ($image): ?>
                        <img class="" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php else: ?>
                        <div>no image...</div>
                <?php endif; ?>
            </div>
        </div>
   </div>
</section>


<?php
endif;
?>