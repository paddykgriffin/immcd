
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

    <section <?php immanuel_church_dublin_content_class( 'entry-content container py-12 lg:py-16 text-center dark:bg-black' ); ?>>
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

    <section id="directions" <?php immanuel_church_dublin_content_class( 'bg-gray-100 dark:bg-background py-12 lg:py-16' ); ?>>
        <div class="container">
            <div class="grid md:grid-cols-2 items-center gap-6 md:gap-16">
                <div>
                    <h4 class="mb-0 font-serif text-primary">Address</h4>
                    <div class="entry-content">
                        <p class="mb-4 dark:text-white"> <?php the_field('church_address', 'option'); ?></p>
                    </div>
                     <?php get_template_part( 'template-parts/acf/acf', 'contact-accoridon' ); ?>
                </div>
                <div>
                    <?php the_field('church_map', 'option'); ?>
                    <?php
                        $map = function_exists('get_field') ? get_field('church_map','option') : null;
                    if ( empty( $$map ) ): ?>
                        <div class="text-center bg-amber-200 hidden text-black py-3">We are sorry Google Cloud API is not Loaded.</div>
                    <?php endif; ?>
                    <div class="[&_iframe]:h-[400px] md:[&_iframe]:h-[400px] lg:[&_iframe]:h-[500px]">
                        <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d595.441498169079!2d-6.2603315!3d53.347445!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x776cbda2ca1cc454!2sImmanuel+Church+Dublin!5e0!3m2!1sen!2sie!4v1431350198250" width="100%"  frameborder="0"></iframe>
                    </div>
                    </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
