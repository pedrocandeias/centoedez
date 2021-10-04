<?php
/**
 * The header
 *
 *
 * @package centoedez
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6WBLQL6SZQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6WBLQL6SZQ');
</script>
    <title>110 anos da Universidade do Porto</title>
</head>

<body>
<?php if ( !is_home() && is_front_page() ) {

	get_template_part( 'template-parts/header', 'home' );
	} elseif( is_home()) {
	get_template_part( 'template-parts/header', 'page' );
	} else {
	get_template_part( 'template-parts/header', 'page' );

	}
	
	
	?>