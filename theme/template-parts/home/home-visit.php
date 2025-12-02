<section class=" py-6 md:pt-18 md:pb-32" id="visit">
    <div class="container">
       <h2 class="entry-title text-center mb-4"><?php the_field('visit_title', 'option'); ?></h2>

      <div class="max text-center pb-8">

       <p class="mb-4 dark:text-white"><?php the_field('visit_description', 'option'); ?></p>
      <p class="mb-4 dark:text-white"> <?php the_field('church_address', 'option'); ?></p>
      </div>
    
      <!-- Temp - Migrate to Google Cloud API -->
       <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d595.441498169079!2d-6.2603315!3d53.347445!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x776cbda2ca1cc454!2sImmanuel+Church+Dublin!5e0!3m2!1sen!2sie!4v1431350198250" width="100%" height="450" frameborder="0"></iframe>


         <!-- Buttons Loop -->
                <?php if (have_rows('visit_buttons', 'option')): ?>
                    <?php while (have_rows('visit_buttons', 'option')): the_row(); ?>

                        <div class="flex items-center justify-center gap-4 mt-10">

                            <?php 
                            $link1 = get_sub_field('button_one');
                            if ($link1 && isset($link1['url'])): ?>
                                <a href="<?php echo esc_url($link1['url']); ?>"
                                    target="<?php echo esc_attr($link1['target'] ?? '_self'); ?>"
                                    class="btn border-primary border-1">
                                    <?php echo esc_html($link1['title']); ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="!ml-16"><path fill="currentColor" d="M4 12h12.25L11 6.75l.66-.75l6.5 6.5l-6.5 6.5l-.66-.75L16.25 13H4z"/></svg>
                                </a>
                            <?php endif; ?>

                            <?php 
                            $link2 = get_sub_field('button_two');
                            if ($link2 && isset($link2['url'])): ?>
                                <a href="<?php echo esc_url($link2['url']); ?>"
                                    target="<?php echo esc_attr($link2['target'] ?? '_self'); ?>"
                                    class="btn-outline group">
                                    <?php echo esc_html($link2['title']); ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="text-primary !ml-16 group-hover:text-white dark:group-hover:text-primary"><path fill="currentColor" d="M4 12h12.25L11 6.75l.66-.75l6.5 6.5l-6.5 6.5l-.66-.75L16.25 13H4z"/></svg>
                                </a>
                            <?php endif; ?>

                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

    </div>
</section>
<!-- .home-visit -->