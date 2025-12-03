
<?php

/**
 * Template Name: Contact
 *
 * @package _bless
 */

get_header();
?>

<main id="main">
    <?php get_template_part('template-parts/custom/custom', 'featured-image'); ?>
    <!-- Inner Page Hero/Featured Image -->

    <section <?php immanuel_church_dublin_content_class( 'entry-content lg:py-16 [&_p]:!text-2xl [&_p]:!leading-12 text-center dark:bg-black' ); ?>>
        <?php
        the_content();
        wp_link_pages(
            array(
                'before' => '<div>' . __( 'Pages:', 'immanuel-church-dublin' ),
                'after'  => '</div>',
            )
        );
        ?>
    </section>
    <!-- .entry-content -->


    <section id="directions" <?php immanuel_church_dublin_content_class( 'bg-gray-100 dark:bg-background lg:py-16' ); ?>>
        <div class="container">
            <div class="grid grid-cols-2 items-center gap-16">
                <div>
                    <h4 class="mb-0 font-serif text-primary">Address</h4>
                    <p class="mb-4 dark:text-white"> <?php the_field('church_address', 'option'); ?></p>
                    <?php if( have_rows('church_directions', 'option') ): ?>
                        <div class="imml-accordion" id="directionsAccordion">
                        <?php while( have_rows('church_directions', 'option') ): the_row(); 

                        // Fields
                        $title = get_sub_field('directions_title', 'option');
                        $content = get_sub_field('directions_details', 'option');

                        // Temp
                        $contentID = get_sub_field('content_id');
                        $dataTarget = get_sub_field('data_target');
                        // Ensure we have unique, safe IDs for each accordion item. If ACF didn't provide
                        // values, build them from the title and the current row index. Always
                        // sanitize to produce valid HTML ids (no spaces/special chars).
                        $slug = sanitize_title( $title );
                        // get_row_index() is available in ACF loop; fallback to uniqid if not.
                        $index = function_exists( 'get_row_index' ) ? get_row_index() : uniqid();

                        // data-target id
                        if ( empty( $dataTarget ) ) {
                            $dataTarget = 'directions-' . $slug . '-' . $index;
                        } else {
                            // sanitize any provided value to keep IDs valid and consistent
                            $dataTarget = 'directions-' . sanitize_title( $dataTarget );
                        }

                        // content id (used for aria-labelledby) — ensure a heading/id exists
                        if ( empty( $contentID ) ) {
                            $contentID = 'directions-heading-' . $slug . '-' . $index;
                        } else {
                            $contentID = 'directions-heading-' . sanitize_title( $contentID );
                        }
                        ?>
                        <div class="mb-2">

                            <button id="<?php echo $contentID; ?>" class="accordion-btn bg-gray-300 dark:bg-stone-800 dark:text-white text-xl px-4 py-3 flex justify-between items-center w-full text-left text-gray-800" type="button" data-toggle="collapse" data-target="#<?php echo $dataTarget; ?>" aria-expanded="false" aria-controls="<?php echo $dataTarget; ?>">
                                <?php echo $title; ?>
                                <span class="material-symbols-outlined !text-[36px]">keyboard_arrow_down</span>
                            </button>
                            <div id="<?php echo $dataTarget; ?>" class="location-content p-4 hidden" aria-labelledby="<?php echo $contentID; ?>" data-parent="#directionsAccordion">
                                <p class="">
                                    <?php echo $content; ?>
                                </p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div>

                <?php the_field('church_map', 'option'); ?>
                    <!-- Temp - Migrate to Google Cloud API -->
                    <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d595.441498169079!2d-6.2603315!3d53.347445!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x776cbda2ca1cc454!2sImmanuel+Church+Dublin!5e0!3m2!1sen!2sie!4v1431350198250" width="100%" height="450" frameborder="0"></iframe>
                </div>
            </div>
            
        </div>
    </section>



</main>
<?php
get_footer();
?>
