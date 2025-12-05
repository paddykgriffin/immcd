<?php

/**
 * Template Name: Faith Hope Love
 *
 * @package _bless
 */

get_header();
?>

    <main id="main">

        <?php get_template_part('template-parts/custom/custom', 'featured-image'); ?>
        <!-- Inner Page Hero/Featured Image -->

        <section <?php immanuel_church_dublin_content_class( 'entry-content  py-12 lg:py-16 text-center' ); ?>>

<div class="container md:max-w-(--container-content)">
            <?php
            the_content();
            wp_link_pages(
                array(
                    'before' => '<div>' . __( 'Pages:', 'immanuel-church-dublin' ),
                    'after'  => '</div>',
                )
            );
            ?>
            </div>
        </section>
        <!-- .entry-content -->


        <section class="pb-12 md:pt-12 md:pb-24 bg-[#2e5654] text-white">
            <div class="container">

                <div class="grid md:grid-cols-3 pt-12 gap-8">
                    <!-- Loop -->
                    <?php if (have_rows('core_values','option')): ?>
                        <?php while (have_rows('core_values','option')): the_row(); ?>
                        <div>

                         <?php $title = get_sub_field('value_title','option');
                                if ( $title ): ?>
                                <p class="text-5xl font-medium text-center leading-10 font-serif py-8"><?php echo esc_html( $title ); ?></p>
                            <?php endif; ?>

                            <!-- Image -->
                            <?php
                                $image = function_exists('get_sub_field') ? get_sub_field('value_image','option') : null;
                                if ( empty( $image ) ): ?>
                                <div>no image...</div>
                            <?php endif; ?>
                            <?php if ( ! empty( $image ) && is_array( $image ) && isset( $image['url'] ) ): ?>
                                <img class="w-1/2 mx-auto" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ?? '' ); ?>" />
                            <?php endif; ?>

                           
                            <!-- Loop -->
                            <?php if (have_rows('value_description','option')): ?>
                                <?php while (have_rows('value_description','option')): the_row(); ?>
                            
                                  <div class="text-center py-6">
                                      <?php $title = get_sub_field('text_line_one','option');
                                        if ( $title ): ?>
                                        <p class="text-xl leading-8 font-serif pb-2 px-0 md:px-12"><?php echo esc_html( $title ); ?></p>
                                    <?php endif; ?>


                                    <?php $title = get_sub_field('text_line_one_ref','option');
                                        if ( $title ): ?>
                                        <p class="text-sm italic font-light"><?php echo esc_html( $title ); ?></p>
                                    <?php endif; ?>



                                    <?php $title = get_sub_field('text_line_two','option');
                                        if ( $title ): ?>
                                        <p class="relative before:[content-''] before:block before:h-[1px] before:w-1/3 before:absolute before:left-1/2 before:-translate-x-1/2 before:bg-white before:top-10 text-xl leading-8 font-serif pt-16 pb-2 px-0 md:px-12"><?php echo esc_html( $title ); ?></p>
                                    <?php endif; ?>







                                    <?php $title = get_sub_field('text_line_two_ref','option');
                                        if ( $title ): ?>
                                       <p class="text-sm italic mb-10 font-light"><?php echo esc_html( $title ); ?></p>
                                    <?php endif; ?>
                                  </div>
                                
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="bg-[#5a9690]  text-center text-white mx-auto max-w-7xl mt-10 py-6 shadow-lg">
                    <p class="italic scripture-ref p-0 mb-0 !text-4xl">"<?php the_field('core_value_scripture_text', 'option')?>"</p>
                    <p class="italic font-serif pt-4"><?php the_field('core_value_scripture_reference', 'option')?></p>
                </div>
            </div>
        </section>
        <!-- Section: Faith Hope Love -->

        <section class="py-12 md:py-24  dark:bg-stone-950">
            <div class="container">
                <?php $field_object = get_field_object('convictions', 'option');
                if (!empty($field_object['label'])): ?>
                    <h2 class="entry-title text-primary text-center pb-10">
                        <?php echo esc_html($field_object['label']); ?>
                    </h2>
                <?php endif; ?>
                <div class="grid  lg:grid-cols-3 gap-6 md:gap-12 justify-center">
                    <?php 
                    $convictions = get_field('convictions', 'option');
                    $conviction_count = count($convictions);
                    $cols = 3;
                    $remainder = $conviction_count % $cols;
                    $row_counter = 0;
                    
                    while (have_rows('convictions', 'option')): the_row(); 
                        if ($row_counter === $conviction_count - $remainder && $remainder > 0 && $row_counter % $cols === 0): ?>
                            <div class=" lg:col-span-3 flex flex-col md:flex-row justify-center gap-6 md:gap-12">
                        <?php endif; ?>
                        <?php if (!empty(get_sub_field('convictions_text'))): ?>
                            <div class="grid text-left bg-gray-50 dark:bg-card p-6 border-l-6 border-primary dark:border-primary/70 w-full shadow-md">
                               <div class="entry-content">
                                 <p class="!mb-0 !pb-0 place-content-center text-gray-800 dark:text-gray-100">
                                    <?php the_sub_field('convictions_text'); ?>
                                </p>
                               </div>
                            </div>
                        <?php endif; ?>
                        <?php 
                        $row_counter++;
                        if ($row_counter === $conviction_count && $remainder > 0): ?>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <!-- Section: Convictions -->

        <section class="py-12 md:pb-24 dark:bg-stone-950 bg-white">
            <div class="container ">
                <?php $field_object = get_field_object('distinctives', 'option');
                if (!empty($field_object['label'])): ?>
                    <h2 class="entry-title text-primary text-center pt-15 pb-10">
                        <?php echo esc_html($field_object['label']); ?>
                    </h2>
                <?php endif; ?>
                <div class="grid lg:grid-cols-3 gap-6 md:gap-12">
                    <?php 
                    $distinctives = get_field('distinctives', 'option');
                    $distinctive_count = count($distinctives);
                    $cols = 3;
                    $remainder = $distinctive_count % $cols;
                    $row_counter = 0;
                    
                    while (have_rows('distinctives', 'option')): the_row(); 
                        if ($row_counter === $distinctive_count - $remainder && $remainder > 0 && $row_counter % $cols === 0): ?>
                            <div class="lg:col-span-3 flex flex-col md:flex-row justify-center gap-6 md:gap-12">
                        <?php endif; ?>
                        <?php if (!empty(get_sub_field('distinctives_text'))): ?>
                            <div class="flex items-center justify-center text-center bg-card p-6 shadow-lg  w-full">
                               <div class="entry-content">
                                 <p class="!mb-0 !pb-0 place-content-center text-foreground">
                                    <?php the_sub_field('distinctives_text'); ?>
                                </p>
                               </div>
                            </div>
                        <?php endif; ?>
                        <?php 
                        $row_counter++;
                        if ($row_counter === $distinctive_count && $remainder > 0): ?>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <!-- Section: Distinctives -->

        <?php get_template_part( 'template-parts/acf/acf', 'contact-widget' ); ?>

    </main><!-- #main -->
<?php
get_footer();
