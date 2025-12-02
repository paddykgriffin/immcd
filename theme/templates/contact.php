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

        <section <?php immanuel_church_dublin_content_class( 'entry-content lg:py-16 [&_p]:!text-2xl [&_p]:!leading-12 text-center' ); ?>>
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
                <div class="grid grid-cols-2 items-center">
                    <div class="div">
                        <h4 class="mb-0">Address</h4>
                    <p class="mb-4 dark:text-white"> <?php the_field('church_address', 'option'); ?></p>
                    <div>
                        direction...
                    </div>
                    </div>
                    <div class="div">
                           <!-- Temp - Migrate to Google Cloud API -->
       <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d595.441498169079!2d-6.2603315!3d53.347445!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x776cbda2ca1cc454!2sImmanuel+Church+Dublin!5e0!3m2!1sen!2sie!4v1431350198250" width="100%" height="450" frameborder="0"></iframe>

                    </div>
                </div>
				
			</div>
		</section>

          <section <?php immanuel_church_dublin_content_class( 'bg-background lg:py-16' ); ?>>
			<div class="container">
				
			</div>
		</section>

		
</main>
<?php
get_footer();
