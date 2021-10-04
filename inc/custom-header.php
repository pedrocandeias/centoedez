<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package centoedez
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses centoedez_header_style()
 */
function centoedez_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'centoedez_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => '000000',
				'width'              => 1000,
				'height'             => 250,
				'flex-height'        => true,
				'wp-head-callback'   => 'centoedez_header_style',
			)
		)
	);
}
add_action( 'after_setup_theme', 'centoedez_custom_header_setup' );

if ( ! function_exists( 'centoedez_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see centoedez_custom_header_setup().
	 */

endif;
