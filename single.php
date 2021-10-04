<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package centoedez
 */

get_header();
?>
<article class="padding-y-lg">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() ); ?>
	<div class="container max-width-adaptive-xl margin-xl">	
		<?php
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    ?>
		<ul class="pn-links grid">
		<?php if(!empty($prev_post))
		   $prev_id = $prev_post->ID;
		   $prev_permalink = get_permalink($prev_id);
		{?>
			<li class="pn-links__item col-6@md">
				<a class="pn-links__link justify-center justify-between@md" href="<?php echo $prev_permalink; ?>">
				<svg class="pn-links__icon icon icon--lg flip-x" viewBox="0 0 48 48">
					<g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
					<line x1="37" y1="14" x2="47" y2="24" />
					<line x1="47" y1="24" x2="37" y2="34" />
					<line x1="47" y1="24" x2="1.5" y2="24" />
					</g>
				</svg>

				<span class="margin-left-sm">
				<?php echo $prev_post->post_title; ?>
				</span>
				</a>
			</li>
		<?php } ?>
		<?php if(!empty($next_post)){
			    $next_id = $next_post->ID;
				$next_permalink = get_permalink($next_id);
			?>
			<li class="pn-links__item col-6@md">
				<a class="pn-links__link justify-center justify-between@md" href="<?php echo $next_permalink; ?>">
				<span class="margin-right-sm">
				<?php echo $next_post->post_title; ?>
				</span>

				<svg class="pn-links__icon icon icon--lg" viewBox="0 0 48 48">
					<g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
					<line x1="37" y1="14" x2="47" y2="24" />
					<line x1="47" y1="24" x2="37" y2="34" />
					<line x1="47" y1="24" x2="1.5" y2="24" />
					</g>
				</svg>
				</a>
			</li>
		<?php } ?>
		</ul>
		</div>

		<?php endwhile; ?>

		</article>

<?php
    get_template_part( 'template-parts/footer', 'page' );
get_footer();
