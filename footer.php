<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package centoedez
 */

?>
<?php if (is_front_page() ) {
get_template_part( 'template-parts/footer', 'home' );
} elseif (is_home() ) {
    get_template_part( 'template-parts/footer', 'page' );
} ?>

<?php wp_footer(); ?>
</body>
</html>