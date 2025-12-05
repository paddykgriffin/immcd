 <?php if( have_rows('church_directions', 'option') ): ?>
                        <div class="accordion grid gap-y-3" id="directionsAccordion">
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
                       <div>
                            <button id="<?php echo $contentID; ?>" class="default-transition accordion-btn bg-gray-300 dark:bg-stone-800 dark:text-white text-xl px-4 py-3 flex justify-between items-center w-full text-left text-gray-800 aria-[expanded=true]:[&_span]:rotate-180" type="button" data-toggle="collapse" data-target="#<?php echo $dataTarget; ?>" aria-expanded="false" aria-controls="<?php echo $dataTarget; ?>">
                                <?php echo $title; ?>
                                <span class="transition-all duration-700 material-symbols-outlined !text-[36px]">keyboard_arrow_down</span>
                            </button>
                            <div id="<?php echo $dataTarget; ?>" class="p-4" aria-labelledby="<?php echo $contentID; ?>" data-parent="#directionsAccordion">
                                <p class="text-lg md:text-xl">
                                    <?php echo $content; ?>
                                </p>
                            </div>
                        </div>
                        
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>