
<?php
if ( is_page( 'our-people' ) ): // page slug
?>


<section <?php immanuel_church_dublin_content_class( 'lg:py-16 bg-gray-100 dark:bg-background' ); ?>>

<div class="container">
    <?php $field_object = get_field_object('church-team', 'option');
     if (!empty($field_object['label'])): ?>
                <h2>
                    <?php echo esc_html($field_object['label']); ?>
                </h2>
            <?php endif; ?>
             <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 ">
                    <?php while (have_rows('church-team', 'option')):
                        the_row(); ?>
                        <div class="staff-list-block">
                            <div class="staff-content text-center">

                                <?php 
                                $image = get_sub_field('photo');
                                if( !empty($image) ): ?>
                                <img class="mx-auto w-full" src="<?php echo $image['sizes']['tile-md']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>

                            

                            <?php if (!empty(get_sub_field('name'))): ?>
                                    <h4 class="text-xl text-center pt-3 pb-0">
                                        <?php the_sub_field('name'); ?>
                                    </h4>
                                <?php endif; ?>
                                <?php if (!empty(get_sub_field('role'))): ?>
                                    <p class="text-center text-xl">
                                        <?php the_sub_field('role'); ?>
                                    </p>
                                <?php endif; ?>




                            
                            </div>
                        
                        </div>
                    <?php endwhile; ?>
                </div>
           

</div>
</section>


<section <?php immanuel_church_dublin_content_class( 'lg:py-16' ); ?>>
    <div class="container">
     <?php $field_object = get_field_object('vestry', 'option');
     if (!empty($field_object['label'])): ?>
                <h2>
                    <?php echo esc_html($field_object['label']); ?>
                </h2>
            <?php endif; ?>
             <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 ">
                    <?php while (have_rows('vestry', 'option')):
                        the_row(); ?>
                        <div class="staff-list-block">
                            <div class="staff-content text-center">

                                <?php 
                                $image = get_sub_field('photo');
                                if( !empty($image) ): ?>
                                <img class="mx-auto w-full" src="<?php echo $image['sizes']['tile-md']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <?php endif; ?>

                            

                            <?php if (!empty(get_sub_field('name'))): ?>
                                    <h4 class="text-xl text-center pt-3 pb-0">
                                        <?php the_sub_field('name'); ?>
                                    </h4>
                                <?php endif; ?>
                                <?php if (!empty(get_sub_field('role'))): ?>
                                    <p class="text-center text-xl">
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