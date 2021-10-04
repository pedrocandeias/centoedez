<?php
/**
 * The template if for displaying all pages
 * @package centoedez
 */

get_header();


if ( !is_home() && is_front_page() ) {

	get_template_part( 'template-parts/content', 'home' );

} elseif(is_home() ) {
		
	get_template_part( 'template-parts/content', 'blog' );

} else {

	get_template_part( 'template-parts/content', 'page' );

}

	
		
get_footer();
