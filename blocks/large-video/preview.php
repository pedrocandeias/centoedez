<?php
/**
 * Responsive video preview block for Gutenberg block.
 *
 * @package centoedez
 */
?>
<?php $embed_code = wp_oembed_get( block_field( 'url', $echo = false ), array( 'width' => 400 ) ); ?>
<div class="aspect-ratio-16:9">
  <?php echo $embed_code; ?>
</div>

