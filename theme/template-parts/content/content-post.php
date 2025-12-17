 <article id="post-item-<?php the_ID(); ?>" class="flex items-center bg-gray-100 shadow-md">
     <div class="entry-thumbnail  w-1/4">
         <?php immanuel_church_dublin_post_thumbnail(); ?>
     </div>
     <div class="entry-content w-3/4 px-4 py-4 ">
         <header class="entry-header md:max-w-none">
             <div class="entry-meta  mb-2">
                 <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        echo '<div class="categories flex">';
                        $limited_categories = array_slice($categories, 0, 2);
                        foreach ($limited_categories as $category) {
                            echo '<a class="category-link default-transition pr-2" href="' . esc_url(get_category_link($category->term_id)) . '" rel="category tag"><span class="material-symbols-outlined">inbox_text</span>' . esc_html($category->name) . '</a> ';
                        }
                        echo '</div>';
                    }
                    ?>
                 <?php immanuel_church_dublin_tags(); ?>
                 <?php immanuel_church_dublin_posted_by(); ?>
             </div>
             <!-- .entry-meta -->

             <?php
                if (is_sticky() && is_home() && !is_paged()) {
                    printf('<span">%s</span>', esc_html_x('Featured', 'post', 'bcc'));
                }
                if (is_singular()):
                    the_title(sprintf('<h2 class="post-title default-transition"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
                else:
                    the_title(sprintf('<h2 class="text-3xl mb-4 pb-0 default-transition"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
                endif;
                ?>


         </header>
         <!-- .entry-header -->

         <div <?php immanuel_church_dublin_content_class('entry-post-content pb-4'); ?>>
             <?php echo get_the_excerpt();
                wp_link_pages(
                    array(
                        'before' => '<div>' . __('Pages:', 'bcc'),
                        'after' => '</div>',
                    )
                ); ?>
         </div>
         <!-- .entry-content -->
         <footer class="entry-footer justify-start">
             <div class="entry-meta justify-start max-w-none m-0">
                 <?php immanuel_church_dublin_entry_footer(); ?>
             </div>
         </footer>
         <!-- .entry-footer -->
     </div>
 </article>