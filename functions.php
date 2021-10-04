<?php
/**
 * centoedez functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package centoedez
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'centoedez_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function centoedez_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on centoedez, use a find and replace
		 * to change 'centoedez' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'centoedez', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-primary' => esc_html__( 'Primary', 'centoedez' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				//'search-form',
				//'comment-form',
				//'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);


		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'centoedez_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function centoedez_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'centoedez_content_width', 640 );
}
add_action( 'after_setup_theme', 'centoedez_content_width', 0 );


// Load Codyhouse components and styles 

function codyframe_register_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'codyframe', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version );
} 
add_action( 'wp_enqueue_scripts', 'codyframe_register_styles' );
  
function codyframe_register_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_script( 'components-script', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), $theme_version, true );
} 
add_action( 'wp_enqueue_scripts', 'codyframe_register_scripts' );
  
// no-js support
function codyframe_js_support() {
	?>
	<?php
}  
add_action( 'wp_print_scripts', 'codyframe_js_support');

function codyframe_ie_support() {
	?>
	<script>if(! ('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe-css');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}}</script>
	<?php
  }
  add_action( 'wp_print_scripts', 'codyframe_ie_support' );


/**
 * Create blocks for Block Lab 
 */
require get_template_directory() . '/inc/create-blocks.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Add Google Fonts
 */
function pec_add_google_fonts() {
	wp_enqueue_style( 'pec-google-fonts', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Inter:wght@400;500;600;700&amp;display=swap', false ); 
}

add_action( 'wp_enqueue_scripts', 'pec_add_google_fonts' );


//Disable WordPress admin bar for all logged in users
add_filter('show_admin_bar', '__return_false');


// Add classes to link in menu and remove class and id from li

function atg_menu_classes($classes, $item, $args) {
	if($args->theme_location == 'main-primary') {
	  $classes[] = 's-panels__nav-link text-xxxl text-xxxl@md color-white font-medium font-secondary js-s-panels__nav-link';
	}
	return $classes;
  }
  add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
  
  function add_menuclass($ulclass) {
	 return preg_replace('/<a /', '<a class="s-panels__nav-link text-xxxl text-xxxl@md color-white font-medium font-secondary"', $ulclass);
  }
  add_filter('wp_nav_menu','add_menuclass');

  add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}

add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
function clear_nav_menu_item_class($classes, $item, $args) {
    return array();
}

// add styles to gutenberg
add_action( 'enqueue_block_editor_assets', function() {
    wp_enqueue_style( 'centoedez-editor-styles', get_stylesheet_directory_uri() . "/assets/css/style.css", false, '1.0', 'all' );
} );
/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}


add_action('wp_head', 'centoedez_codyjsinject');
	function centoedez_codyjsinject(){
?>
<script>
	document.getElementsByTagName("html")[0].className += " js";
</script>
    
<?php
};

/**
 * Remove migration settings
 */

 // Remove the submenu Block Lab > Migrate.
add_action(
	'admin_menu',
	static function() {
		remove_submenu_page(
			'edit.php?post_type=block_lab',
			'block-lab-migration'
		);

		remove_all_actions( 'block_lab_page_block-lab-migration' );
	}
);


/*
* Allow SVG Upload
*/


//Enable SVG upload

function svgs_upload_mimes( $mimes = array() ) {

	global $svgs_options;

	if ( empty( $svgs_options['restrict'] ) || current_user_can( 'administrator' ) ) {

		// allow SVG file upload
		$mimes['svg'] = 'image/svg+xml';
		$mimes['svgz'] = 'image/svg+xml';

		return $mimes;

	} else {

		return $mimes;

	}

}
add_filter( 'upload_mimes', 'svgs_upload_mimes', 99 );

/**
 * Check Mime Types
 */
function svgs_upload_check( $checked, $file, $filename, $mimes ) {

	if ( ! $checked['type'] ) {

		$check_filetype		= wp_check_filetype( $filename, $mimes );
		$ext				= $check_filetype['ext'];
		$type				= $check_filetype['type'];
		$proper_filename	= $filename;

		if ( $type && 0 === strpos( $type, 'image/' ) && $ext !== 'svg' ) {
			$ext = $type = false;
		}

		$checked = compact( 'ext','type','proper_filename' );
	}

	return $checked;

}
add_filter( 'wp_check_filetype_and_ext', 'svgs_upload_check', 10, 4 );

/**
 * Mime Check fix for WP 4.7.1 / 4.7.2
 *
 * Fixes uploads for these 2 version of WordPress.
 * Issue was fixed in 4.7.3 core.
 */
function svgs_allow_svg_upload( $data, $file, $filename, $mimes ) {

	global $wp_version;
	if ( $wp_version !== '4.7.1' || $wp_version !== '4.7.2' ) {
		return $data;
	}

	$filetype = wp_check_filetype( $filename, $mimes );

	return [
		'ext'				=> $filetype['ext'],
		'type'				=> $filetype['type'],
		'proper_filename'	=> $data['proper_filename']
	];

}
add_filter( 'wp_check_filetype_and_ext', 'svgs_allow_svg_upload', 10, 4 );


/**
 * Add favicon to header
 */

function add_favicon() {
	echo '<link rel="apple-touch-icon" sizes="180x180" href="'.get_template_directory_uri().'/assets/img/apple-touch-icon.png">';
	echo '<link rel="icon" type="image/png" sizes="32x32" href="'.get_template_directory_uri().'/assets/img/favicon-32x32.png">';
	echo '<link rel="icon" type="image/png" sizes="16x16" href="'.get_template_directory_uri().'/assets/img/favicon-16x16.png">';
	echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_template_directory_uri().'/assets/img/favicon.ico" />';
}
add_action('wp_head', 'add_favicon');