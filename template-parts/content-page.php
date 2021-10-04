<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package centoedez
 */

?>

<div class="container max-width-adaptive-sm padding-top-xxxl">
	<?php the_title( '<h1 class="text-center text-xxxl">', '</h1>' ); ?>
</div>

<section id="<?php echo get_post_field( 'post_name', get_post() ); ?>" class="<?php if (is_page('participar-formulario')){ echo 's-panels__page s-panels__page--selected s-panels__page--loaded js-page-trans__content';}else{ echo 's-panels__project-content'; } ?>">

<?php the_content(); 

if (is_page('participar-formulario')){
	get_template_part('template-parts/content','participar');	
}else{
	get_template_part( 'template-parts/footer', 'page' );
}
?>
</section>
