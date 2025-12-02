<?php
if ( is_page( 'connect' ) ): // page slug
?>


	<section <?php immanuel_church_dublin_content_class( ' ' ); ?>>

    	<?php /*
		the_content();

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'immanuel-church-dublin' ),
				'after'  => '</div>',
			)
		);
		*/?> 


    <div class="container">

        
                <?php if ( have_rows( 'connect_block' ) ): ?>
                    <?php while ( have_rows( 'connect_block' ) ): the_row(); ?>

                        <?php 
                        // Determine row index (1-based). If unavailable, default to 0 so it won't be considered even.
                        $index = function_exists('get_row_index') ? get_row_index() : 0;
                        $reverse = ( $index > 0 && $index % 2 === 0 ); // true for even rows
                        ?>

                        <div class="grid grid-cols-12 py-20 items-center gap-16">

                        <?php if ( ! $reverse ): ?>

                            <div class="col-span-8">
                                <?php $title = get_sub_field('connect_block_title');
                                if ( $title ): ?>
                                    <h2 class="text-4xl font-medium mb-4 text-primary"><?php echo esc_html( $title ); ?></h2>
                                <?php endif; ?>

                                <?php $desc = get_sub_field('connect_block_desc');
                                if ( $desc ):
                                    echo '<p class="pb-6 leading-8">' . esc_html( wp_strip_all_tags( $desc ) ) . '</p>';
                                endif; ?>

                                <?php 
                                    $link1 = get_sub_field('connect_block_url');
                                    if ( $link1 && isset( $link1['url'] ) ): ?>
                                        <a href="<?php echo esc_url( $link1['url'] ); ?>"
                                            target="<?php echo esc_attr( $link1['target'] ?? '_self' ); ?>"
                                            class="btn">
                                            <?php echo esc_html( $link1['title'] ); ?>
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="!ml-16"><path fill="currentColor" d="M4 12h12.25L11 6.75l.66-.75l6.5 6.5l-6.5 6.5l-.66-.75L16.25 13H4z"/></svg>
                                        </a>
                                    <?php endif; ?>

                            </div>

                            <div class="col-span-4">
                                <!-- Image -->
                                <?php
                                    $image = function_exists('get_sub_field') ? get_sub_field('connect_block_image') : null;
                                    if ( empty( $image ) ): ?>
                                        <div>no image...</div>
                                    <?php endif; ?>
                                    <?php if ( ! empty( $image ) && is_array( $image ) && isset( $image['url'] ) ): ?>
                                        <img class="col-start-1 row-start-1 w-full" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ?? '' ); ?>" />
                                <?php endif; ?>
                            </div>

                        <?php else: // reversed: image first for even rows ?>

                            <div class="col-span-4">
                                <!-- Image -->
                                <?php
                                    $image = function_exists('get_sub_field') ? get_sub_field('connect_block_image') : null;
                                    if ( empty( $image ) ): ?>
                                        <div>no image...</div>
                                    <?php endif; ?>
                                    <?php if ( ! empty( $image ) && is_array( $image ) && isset( $image['url'] ) ): ?>
                                        <img class="col-start-1 row-start-1 w-full" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ?? '' ); ?>" />
                                <?php endif; ?>
                            </div>

                            <div class="col-span-8">
                                <?php $title = get_sub_field('connect_block_title');
                                if ( $title ): ?>
                                    <h2 class="text-4xl font-medium mb-4 text-primary"><?php echo esc_html( $title ); ?></h2>
                                <?php endif; ?>

                              <?php $desc = get_sub_field('connect_block_desc');
                                if ( $desc ):
                                    echo '<p class="pb-6 leading-8">' . esc_html( wp_strip_all_tags( $desc ) ) . '</p>';
                                endif; ?>

                                <?php 
                                    $link1 = get_sub_field('connect_block_url');
                                    if ( $link1 && isset( $link1['url'] ) ): ?>
                                        <a href="<?php echo esc_url( $link1['url'] ); ?>"
                                            target="<?php echo esc_attr( $link1['target'] ?? '_self' ); ?>"
                                            class="btn">
                                            <?php echo esc_html( $link1['title'] ); ?>
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="!ml-16"><path fill="currentColor" d="M4 12h12.25L11 6.75l.66-.75l6.5 6.5l-6.5 6.5l-.66-.75L16.25 13H4z"/></svg>
                                        </a>
                                    <?php endif; ?>
                            </div>

                        <?php endif; ?>

                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
    </div>
		
	</section><!-- .entry-content -->


<?php
endif;
?>