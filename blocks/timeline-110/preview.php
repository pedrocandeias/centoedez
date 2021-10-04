<?php
/**
 * Timeline block for Gutenberg block.
 *
 * @package centoedez
 */
?>
<?php if ( block_rows( 'timeline' ) ) : ?>

      <?php   while ( block_rows( 'timeline' ) ) :
      block_row( 'timeline' ); ?>
        <a class="card-v11" href="#0" style="background-image: url('<?php block_sub_field( 'imagem', $echo = true ); ?>');" aria-label="Ano de <?php block_sub_field( 'ano', $echo = true );?>">
                <div class="card-v11__box width-100% width-50%@md">
                    <div class="padding-md">
                        <p class="text-sm opacity-60% margin-bottom-xxs"><?php block_sub_field( 'ano', $echo = true );?></p>
                        <h2 class="text-lg color-inherit"><?php block_sub_field( 'ttulo', $echo = true ); ?></h2>
                    </div>
                    <div class="card-v11__btn padding-x-md">
                        <svg class="card-v11__icon icon" viewBox="0 0 48 48">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="37" y1="14" x2="47" y2="24" />
                            <line x1="47" y1="24" x2="37" y2="34" />
                            <line x1="47" y1="24" x2="1.5" y2="24" />
                            </g>
                        </svg>
                    </div>
                </div>
            </a>
        
        <!-- popovers -->
        <?php block_sub_field( 'descrio', $echo = true ); ?>


          <?php  endwhile;?>

<?php endif;
reset_block_rows( 'timeline' );
?>