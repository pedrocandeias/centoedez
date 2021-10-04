<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package centoedez
 */

get_header();
$page_for_posts = get_option( 'page_for_posts' );
?>
 <div class="container max-width-adaptive-sm padding-top-xxxl padding-bottom-xl">
        <h1 class="text-center text-xxxl">
			<?php echo get_the_title($page_for_posts); ?>
		</h1>
    </div>


<section id="<?php echo get_post_field( 'post_name', get_post($page_for_posts) ); ?>" class="s-panels__project-content">
<?php if (get_theme_mod( 'blogintrotext' ) == ''){}else{ ?>
	<article class="article text-component container max-width-adaptive-md padding-y-lg">
		<p class="color-contrast-medium">
		<?php echo get_theme_mod( 'blogintrotext' ); ?>
		</p>
	</article>
<?php } ?>



			<?php if ( have_posts() ) : ?>
				<!-- dynamic content 👇 - loaded into index.html -->
	<div class="container max-width-adaptive-lg margin-top-xl">
    	<div class="articles-v4 masonry js-masonry">
        	<div class="masonry__loader" aria-hidden="true">
            	<svg class="icon icon--md icon--is-spinning" viewBox="0 0 32 32"><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none"><circle cx="16" cy="16" r="15" opacity="0.4"></circle><path d="M16,1A15,15,0,0,1,31,16" stroke-linecap="butt"></path></g></svg>
            </div>
            <ul class="masonry__list js-masonry__list">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : 
				the_post();

				get_template_part( 'template-parts/content', 'articles' );

			endwhile; ?>

			</ul>
		</div>
	</div>




	
</section><!-- #main -->
	<?php	else :

			get_template_part( 'template-parts/content', 'none' ); ?>


<?php endif;  
get_template_part( 'template-parts/footer', 'home' );

?>

<?php
get_footer();
