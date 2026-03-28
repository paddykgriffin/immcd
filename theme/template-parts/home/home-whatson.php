



<?php
$active = get_field('active_on_homepage', 'option');

// Only show if the checkbox is checked
if( $active ) :
    ?>
    <div class="pb-24">

    <div class="container border-t border-stone-300 pt-12 md:pt-24">

 <p class="hidden">
            Show on Homepage: <?php the_field('active_on_homepage', 'option'); ?></p>

       <h2 class="text-center pb-8 text-foreground entry-title">
         <?php the_field('whatson_title', 'option'); ?>
       </h2>



        <!-- Image -->
        <?php
                    $image = function_exists('get_field') ? get_field('whatson_thumb', 'option') : null;
                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                    if ($image): ?>
                    <div class="text-center mb-6">
                        <?php echo wp_get_attachment_image($image['id'], $size, false, ['class' => 'mx-auto md:max-w-3/5']); ?>
                        </div>
                    <?php else: ?>
                        <div>no image...</div>
                <?php endif; ?>
       

        <?php the_field('whatson_content', 'option'); ?>


        <div class="grid grid-cols-1 md:grid-cols-2 ">


         <?php while (have_rows('row_of_images', 'option')):
                        the_row(); ?>

                          <?php 
                                $image = get_sub_field('row_single_image');
                                if( !empty($image) ): ?>
                                <img class="mx-auto w-full" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>


           <?php endwhile; ?>             

        </div>


    </div>
       

    </div>
    <?php
endif;
?>