
<?php
if ( is_page( 'our-people' ) ): // page slug
?>


<section <?php immanuel_church_dublin_content_class( 'py-12 md:py-16 bg-gray-100 dark:bg-background' ); ?>>

<div class="container">
    <?php $field_object = get_field_object('church-team', 'option');
     if (!empty($field_object['label'])): ?>
                <h2 class="text-3xl lg:text-5xl text-primary" >
                    <?php echo esc_html($field_object['label']); ?>
                </h2>
            <?php endif; ?>
             <div class="grid grid-cols-2 lg:grid-cols-5 gap-8 ">
                    <?php while (have_rows('church-team', 'option')):
                        the_row(); ?>
                        <div class="staff-list-block">
                            <div class="staff-content text-center">

                                <?php 
                                $image = get_sub_field('photo');
                                if( !empty($image) ): ?>
                                <img class="mx-auto w-full" src="<?php echo $image['sizes']['tile-md']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>

                            

                                <h4 class="text-xl text-center pt-3 pb-0 mb-2 text-primary leading-6 md:leading-8 md:flex md:gap-[5px] md:justify-center">
                                        <span class="block "> <?php the_sub_field('name'); ?></span>
                                        <span class="block "> <?php the_sub_field('last_name'); ?></span>
                                    </h4>
                                <?php if (!empty(get_sub_field('role'))): ?>
                                    <p class="text-center text-lg text-gray-600 leading-6 md:leading-8 font-light">
                                        <?php the_sub_field('role'); ?>
                                    </p>
                                <?php endif; ?>




                            
                            </div>
                        
                        </div>
                    <?php endwhile; ?>
                </div>
           

</div>
</section>


<section <?php immanuel_church_dublin_content_class( 'py-12 md:py-16' ); ?>>
    <div class="container">
     <?php $field_object = get_field_object('vestry', 'option');
     if (!empty($field_object['label'])): ?>
                <h2 class="text-3xl lg:text-5xl text-primary">
                    <?php echo esc_html($field_object['label']); ?>
                </h2>
            <?php endif; ?>
             <div class="grid grid-cols-2 lg:grid-cols-5 gap-8 ">
                    <?php while (have_rows('vestry', 'option')):
                        the_row(); ?>
                        <div class="staff-list-block">
                            <div class="staff-content text-center">

                                <?php 
                                $image = get_sub_field('photo');
                                if( !empty($image) ): ?>
                                <img class="mx-auto w-full" src="<?php echo $image['sizes']['tile-md']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>

                            

                           <h4 class="text-xl text-center pt-3 pb-0 mb-2 text-primary leading-6 md:leading-8 md:flex md:gap-[5px] md:justify-center">
                                        <span class="block "> <?php the_sub_field('name'); ?></span>
                                        <span class="block "> <?php the_sub_field('last_name'); ?></span>
                                    </h4>
                                <?php if (!empty(get_sub_field('role'))): ?>
                                    <p class="text-center text-lg text-gray-600 leading-6 md:leading-8 font-light">
                                        <?php the_sub_field('role'); ?>
                                    </p>
                                <?php endif; ?>





                            
                            </div>
                        
                        </div>
                    <?php endwhile; ?>
                </div>
                </div>
</section>


<?php
endif;
?>