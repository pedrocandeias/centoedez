<?php
/**
 * The template if for displaying the homepage
 * @package centoedez
 */


if ( !is_home() && is_front_page() ) {

get_template_part( 'template-parts/content', 'home' );

} elseif(is_home() ) {
    
get_template_part( 'template-parts/content', 'blog' );

} ?>