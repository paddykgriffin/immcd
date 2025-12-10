<?php
/**
 * Donate Widget Template Part
 *
 * @package immanuel-church-dublin
 */
?>

<div class="bg-gray-100 dark:bg-stone-950 py-16">
    <div class="container md:max-w-3xl">
        <div class="bg-secondary">
        
            <div class="grid md:grid-cols-12 items-center">
                <div class="col-span-6">
                    <div class="bg-gray-200 dark:bg-stone-800 text-center  py-6 md:py-16 ">
                        <?php
                        if ( function_exists( 'get_field' ) ) {
                            $image = get_field( 'contact_widget_logo' );
                            if ( ! empty( $image ) ) {
                                echo '<img class="mx-auto w-[120px]" src="' . esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '" />';
                            } else {
                                $default_logo = get_template_directory_uri() . '/img/logo.png';
                                echo '<img class="mx-auto w-[120px]" src="' . esc_url( $default_logo ) . '" alt="Default Logo" />';
                            }
                        } else {
                            $default_logo = get_template_directory_uri() . '/img/logo.png';
                            echo '<img class="mx-auto w-[120px] " src="' . esc_url( $default_logo ) . '" alt="Default Logo" />';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-span-6">
                    <div class="bg-secondary text-center py-10 md:py-0 px-10 group">


                        <?php
                        if ( function_exists( 'get_field' ) ) {
                            $title = get_field( 'contact_widget_title' );
                            if ( ! empty( $title ) ) {
                                echo '<h3 class="text-white mb-0">' . esc_html( $title ) . '</h3>';
                            } else {
                                echo '<h3 class="text-white mb-0"">Contact Us</h3>';
                            }
                        } else {
                            echo '<h3>Example Title</h3>';
                        }
                        ?>

                        <?php
                        if ( function_exists( 'get_field' ) ) {
                            $title = get_field( 'contact_widget_text' );
                            if ( ! empty( $title ) ) {
                                echo '<p class="text-white pb-4 !text-base">' . esc_html( $title ) . '</p>';
                            } else {
                                echo '<p class="pb-4 text-white !text-base">Lorem ipsum dolor sit amet, consectetur.</p>';
                            }
                        } else {
                            echo '<p class="pb-10 !text-base">Lorem ipsum dolor sit amet, consectetur.</p>';
                        }
                        ?>
            
                

                        <?php
                        if ( function_exists( 'get_field' ) ) {
                            $link  = get_field( 'contact_widget_link' );
                            $label = get_field( 'contact_widget_link_label' );

                            if ( ! empty( $link ) ) {
                                $href  = esc_url( 'mailto:' . antispambot( $link ) );
                                $text  = ! empty( $label ) ? esc_html( $label ) : 'Example Link';
                                echo '<a class="btn-outline-white default-transition" href="' . $href . '">' . $text . '
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="text-white !ml-16 group-hover:text-primary dark:group-hover:text-primary"><path fill="currentColor" d="M4 12h12.25L11 6.75l.66-.75l6.5 6.5l-6.5 6.5l-.66-.75L16.25 13H4z"/></svg></a>';
                            } else {
                                echo '<a class="btn-outline-white default-transition" href="mailto:example@example.com">Email Us     
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="text-white !ml-16 group-hover:text-primary dark:group-hover:text-primary"><path fill="currentColor" d="M4 12h12.25L11 6.75l.66-.75l6.5 6.5l-6.5 6.5l-.66-.75L16.25 13H4z"/></svg>
                                    </a>';
                            }
                        } else {
                            echo '<a class="btn-outline-white default-transition" href="mailto:example@example.com">Email Us<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="text-white !ml-16 group-hover:text-primary dark:group-hover:text-primary"><path fill="currentColor" d="M4 12h12.25L11 6.75l.66-.75l6.5 6.5l-6.5 6.5l-.66-.75L16.25 13H4z"/></svg>
                                   </a>';
                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>