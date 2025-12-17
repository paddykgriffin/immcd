<?php
/**
 * immanuel-church-dublin functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package immanuel-church-dublin
 */

if ( ! defined( 'IMMANUEL_CHURCH_DUBLIN_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'IMMANUEL_CHURCH_DUBLIN_VERSION', '1.0.1' );
}

if ( ! defined( 'IMMANUEL_CHURCH_DUBLIN_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `immanuel_church_dublin_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'IMMANUEL_CHURCH_DUBLIN_TYPOGRAPHY_CLASSES',
		'dark:text-white'
	);
}

if ( ! function_exists( 'immanuel_church_dublin_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function immanuel_church_dublin_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on immanuel-church-dublin, use a find and replace
		 * to change 'immanuel-church-dublin' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'immanuel-church-dublin', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'immanuel-church-dublin' ),
				'menu-2' => __( 'Footer', 'immanuel-church-dublin' ),
				'menu-3' => __( 'Contact', 'immanuel-church-dublin' ),
				'menu-4' => __( 'Privacy', 'immanuel-church-dublin' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'immanuel_church_dublin_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function immanuel_church_dublin_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'immanuel-church-dublin' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'immanuel-church-dublin' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	//posts-sidebar
	register_sidebar(
		array(
			'name'          => __( 'Posts Sidebar', 'immanuel-church-dublin' ),
			'id'            => 'posts-sidebar',
			'description'   => __( 'Add widgets here to appear in your footer.', 'immanuel-church-dublin' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s mb-8">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'immanuel_church_dublin_widgets_init' );

/** 
 * Enqueue scripts and styles.
 */
function immanuel_church_dublin_scripts() {
	wp_enqueue_style( 'immanuel-church-dublin-style', get_stylesheet_uri(), array(), IMMANUEL_CHURCH_DUBLIN_VERSION );
	wp_enqueue_script( 'immanuel-church-dublin-script', get_template_directory_uri() . '/js/script.min.js', array(), IMMANUEL_CHURCH_DUBLIN_VERSION, true );
	wp_enqueue_script('immanuel-church-dublin-custom-script', get_template_directory_uri() . '/js/custom.min.js', array(), IMMANUEL_CHURCH_DUBLIN_VERSION, true);
	wp_enqueue_script('immanuel-church-dublin-theme-script', get_template_directory_uri() . '/js/theme-toggle.min.js', array(), IMMANUEL_CHURCH_DUBLIN_VERSION, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'immanuel_church_dublin_scripts' );

/**
 * Enqueue the block editor script.
 */
function immanuel_church_dublin_enqueue_block_editor_script() {
	$current_screen = function_exists( 'get_current_screen' ) ? get_current_screen() : null;

	if (
		$current_screen &&
		$current_screen->is_block_editor() &&
		'widgets' !== $current_screen->id
	) {
		wp_enqueue_script(
			'immanuel-church-dublin-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			IMMANUEL_CHURCH_DUBLIN_VERSION,
			true
		);
		wp_add_inline_script( 'immanuel-church-dublin-editor', "tailwindTypographyClasses = '" . esc_attr( IMMANUEL_CHURCH_DUBLIN_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'immanuel_church_dublin_enqueue_block_editor_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function immanuel_church_dublin_tinymce_add_class( $settings ) {
	$settings['body_class'] = IMMANUEL_CHURCH_DUBLIN_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'immanuel_church_dublin_tinymce_add_class' );

/**
 * Limit the block editor to heading levels supported by Tailwind Typography.
 *
 * @param array  $args Array of arguments for registering a block type.
 * @param string $block_type Block type name including namespace.
 * @return array
 */
function immanuel_church_dublin_modify_heading_levels( $args, $block_type ) {
	if ( 'core/heading' !== $block_type ) {
		return $args;
	}

	// Remove <h1>, <h5> and <h6>.
	$args['attributes']['levelOptions']['default'] = array( 2, 3, 4 );

	return $args;
}
add_filter( 'register_block_type_args', 'immanuel_church_dublin_modify_heading_levels', 10, 2 );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';




/**
 * Function add google fonts to wp-head
 */
function enqueue_google_fonts()
{
	wp_enqueue_style('google-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts');


/**
 * Function add google fonts to wp-head
 */
function enqueue_google_fonts2()
{
	wp_enqueue_style('google-noto-sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap');
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts2');


/**
 * Function add google fonts to wp-head
 */
function enqueue_google_fonts3()
{
	wp_enqueue_style('google-noto-serif', 'https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap');
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts3');


/**
 * Function add google icons to wp-head
 */
function enqueue_google_icons()
{
	wp_enqueue_style('google-material-icons', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200');
}
add_action('wp_enqueue_scripts', 'enqueue_google_icons');


/**
 * Hide admin bar
 */
add_filter('show_admin_bar', '__return_false');


/**
 * Add SVG to allowed upload file types
 */
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
function wpse_remove_edit_post_link($link)
{
	return '';
}
add_filter('edit_post_link', 'wpse_remove_edit_post_link');

/**
 * Function custom link on the primary menu
 */
function add_primary_menu_link($atts, $item, $args, $depth)
{
	$menu_locations = ['menu-1']; // Define the menu locations

	if (in_array($args->theme_location, $menu_locations)) {
		$atts['class'] = 'primary-nav-link default-transition'; // Add your custom class
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'add_primary_menu_link', 10, 4);




/**
 * Function - Custom Image Sizes
 * If you add new image sizes here, remember to regenerate your thumbnails
 * using a plugin like Regenerate Thumbnails.
 */

add_image_size('tile-sm', 200, 200, true);
add_image_size('tile-md', 400, 400, true);
add_image_size('tile-lg', 600, 600, true);
add_image_size('tile-xl', 800, 800, true);
add_image_size('post-tile', 250, 250, true);
add_image_size(name: 'heroMobile', width: 400, height: 800, crop: true);
add_image_size(name: 'heroInnerMobile', width: 400, height: 200, crop: true);

/**
 * Function - Custom Search Form
 */
function custom_search_form($form)
{
	$form = '
    <form role="search" method="get" class="search-form" action="' . esc_url(home_url('/')) . '">
        <label class="sr-only">
           Search
        </label>
		 <input type="search" class="search-field" placeholder="' . esc_attr__('Search', '_bless') . '" value="' . get_search_query() . '" name="s" />
        <button type="submit" class="search-submit">
            <span class="material-symbols-outlined text-primary">search</span>
        </button>
    </form>';
	return $form;
}
add_filter('get_search_form', 'custom_search_form');



/**
 * Custom Walker Class to add button to menu items with children
 */
class Walker_Nav_Menu_With_Button extends Walker_Nav_Menu {

    // Start each element output
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $has_children = in_array( 'menu-item-has-children', $classes );

        // Determine if this item is the current page
        $is_current = in_array( 'current-menu-item', $classes ) || in_array( 'current_page_item', $classes ) || in_array( 'current-menu-ancestor', $classes );

        // Build list item
        $output .= '<li class="' . esc_attr( implode( ' ', $classes ) ) . '">';

        // Build link attributes
        $attributes  = ' class="nav-mobile-link"';
        $attributes .= ' href="' . esc_url( $item->url ) . '"';
        if ( $is_current ) {
            $attributes .= ' aria-current="page"';
        }

        // Output link
        $output .= '<a' . $attributes . '>' . esc_html( $item->title ) . '</a>';

        // Add submenu toggle button if applicable
        if ( $has_children ) {
            $output .= '<button class="submenu-toggle" aria-expanded="false" aria-label="Toggle submenu">'
                     . '<span class="material-symbols-outlined !block !text-[30px]">add</span>'
                     . '</button>';
        }
    }

    // End each element
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= '</li>';
    }
}

/**
 * Excerpt length
 */
function custom_excerpt_length($length)
{
	return 20; // Set to 20 words
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);



/**
 * Function to change continue reading to a string
 */
function custom_excerpt_more($more)
{
	return '..'; // Removes the default "..."
}
add_filter('excerpt_more', 'custom_excerpt_more');


/**
 * Function to upload MP3 sermons to year only folder
 */
function pg_mp3_sermons_year_only_upload_dir( $dirs ) {

    // Detect file being uploaded
    if ( ! empty($_FILES['async-upload']['name']) ) {
        $file = $_FILES['async-upload']['name'];

        // Only act on MP3 files
        if ( strtolower(pathinfo($file, PATHINFO_EXTENSION)) === 'mp3' ) {

            $year   = date('Y');
            $subdir = '/sermonaudio/' . $year;

            // Override subdir (remove month folder)
            $dirs['subdir'] = $subdir;

            // Recalculate path + URL
            $dirs['path'] = $dirs['basedir'] . $subdir;
            $dirs['url']  = $dirs['baseurl'] . $subdir;
        }
    }

    return $dirs;
}
add_filter( 'upload_dir', 'pg_mp3_sermons_year_only_upload_dir' );


/**
 * Function to force custom page template for Sermons page - Removed for now.
 */

// function force_sermons_page_template($template) {
//     if (is_page('sermons')) {
//         // Force the use of the custom page template for the "Sermons" page
//         $custom_template = locate_template('page-sermons.php');
//         if ($custom_template) {
//             return $custom_template; // Ensure WordPress uses this template
//         }
//     }
//     return $template; // Otherwise, use the default template
// }
// add_filter('template_include', 'force_sermons_page_template');
