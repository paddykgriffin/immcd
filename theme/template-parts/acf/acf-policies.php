


<?php
if ( is_page( 'policies-and-documents' ) ): // page slug
?>
<section>

<div class="container">

<?php
                /* Start the Loop */
                while (have_posts()) :
                    the_post();

                    get_template_part('template-parts/content/content', 'pagenofeatured');


                    // If comments are open, or we have at least one comment, load
                    // the comment template.
                    if (comments_open() || get_comments_number()) {
                        comments_template();
                    }

                endwhile; // End of the loop.
                ?>


  <?php if (have_rows('policies', 'option')): ?>
        <div class="policy-list">
            <?php while (have_rows('policies', 'option')):
                the_row(); ?>
                <?php $link = get_sub_field('policy_file');
                if ($link): ?>
                    <a href="<?php echo esc_url($link); ?>"
                        class="policy-block default-transition group" target="_blank">
                        <h4 class="group-hover:text-white "> <?php the_sub_field('policy_name'); ?></h4>
                        <span class="material-symbols-outlined text-red-500 dark:text-white group-hover:text-white !text-[30px] lg:!text-[40px]">
                            picture_as_pdf
                        </span>
                    </a>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
<?php endif; ?>

</div>
</section>

<?php
endif;
?>
