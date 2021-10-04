
<?php
/**
 * Event preview block for Gutenberg block.
 *
 * @package centoedez
 */
?>
<div class="js-page-trans">
  <section class="position-relative z-index-1  js-page-trans__content">
      <div class="container max-width-adaptive-sm border-bottom padding-y-md">
          <div class="text-component article">
              <h1><?php block_field( 'titulo', $echo = true );?></h1>
              <h2><?php block_field( 'data', $echo = true );?></h2>
              <p class="color-contrast-medium"><?php block_field( 'descricao', $echo = true );?></p>

              <div class="text-right">
                  <a class="btn btn--primary js-page-trans-link" href="<?php block_field( 'link', $echo = true );?>">
                    <span class="white padding-right-sm"><?php block_field( 'texto-botao', $echo = true );?></span> &rarr;
                  </a>
              </div>
          </div>
      </div>
  </section>
</div>