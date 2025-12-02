<?php

/**
 * Template Name: General Single Page
 *
 * These pages dont use the block editor to display content, content is provided via ACF fields.
 * 
 * @package _bless
 */

get_header();
?>

<main id="main">
     <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php get_template_part('template-parts/custom/custom', 'featured-image'); ?>
        <!-- Inner Page Hero/Featured Image -->
        
        <?php get_template_part( 'template-parts/acf/acf', 'connect-blocks' ); ?>
        <?php get_template_part( 'template-parts/acf/acf', 'what-to-expect-blocks' ); ?>
       <?php get_template_part( 'template-parts/acf/acf', 'contact-widget' ); ?>
    </div>
</main><!-- #main -->
	
<?php
get_footer();
