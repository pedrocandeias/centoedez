<?php
/**
 * Timeline block for Gutenberg block.
 *
 * @package centoedez
 */
?>
<?php if ( block_rows( 'timeline' ) ) : ?>
  <div class="overflow-hidden margin-bottom-xl">
  <div class="carousel carousel-v3 flex flex-column container max-width-md js-carousel" data-drag="on" data-loop="off" data-overflow-items="on">
    <p class="sr-only">Carousel items</p>
    <div class="carousel__wrapper position-relative">
      <ol class="carousel__list">

<?php 
$counter = 0;
while ( block_rows( 'timeline' ) ) :
      block_row( 'timeline' );
      $countval = ++$counter;
      ?>
        <li class="carousel__item">
            <a class="card-v11" aria-controls="modal-name-<?php echo $countval ?>" href="#0" style="background-image: url('<?php block_sub_field( 'imagem', $echo = true ); ?>');" aria-label="Ano de <?php block_sub_field( 'ano', $echo = true );?>">
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
        </li>
  
  <?php  endwhile;?>
  </ol>
          <nav class="no-js:is-hidden">
            <ul class="position-absolute top-0 left-0 bottom-0 right-0 pointer-events-none flex items-center justify-between">
              <li>
                <button class="reset carousel-v3__control carousel-v3__control--prev js-carousel__control js-tab-focus">
                  <svg class="icon icon--xs" viewBox="0 0 16 16"><title>Show previous items</title><g><path d="M10.892,16.41L4.241,8.65c-0.321-0.374-0.321-0.927,0-1.301l6.651-7.76l1.519,1.302L6.317,8l6.093,7.108 L10.892,16.41z"></path></g></svg>
                </button>
              </li>

              <li>
                <button class="reset carousel-v3__control carousel-v3__control--next js-carousel__control js-tab-focus">
                  <svg class="icon icon--xs" viewBox="0 0 16 16"><title>Show next items</title><g><path d="M5.108,16.41L3.59,15.108L9.683,8L3.59,0.892L5.108-0.41l6.651,7.76c0.321,0.374,0.321,0.927,0,1.301 L5.108,16.41z"></path></g></svg>
                </button>
              </li>
            </ul>
          </nav>
      </div>
    </div>
  </div>

  <?php endif;
reset_block_rows( 'timeline' ); ?>
  
<?php if ( block_rows( 'timeline' ) ) : 
  $countermodal = 0; ?>
  <?php while ( block_rows( 'timeline' ) ) :
      block_row( 'timeline' );
      $countmodalval = ++$countermodal;
      ?>

        <!-- popovers -->
        <div class="modal modal--animate-scale flex flex-center bg-contrast-higher bg-opacity-90% padding-md js-modal" id="modal-name-<?php echo $countmodalval ?>">
          <div class="modal__content width-100% max-width-xs max-height-100% overflow-auto bg radius-md shadow-md" role="alertdialog" aria-labelledby="modal-title-<?php echo $countmodalval ?>" aria-describedby="modal-description-<?php echo $countmodalval ?>">
            <header class="bg-contrast-lower padding-y-sm padding-x-md flex items-center justify-between">
              <h4 class="text-truncate" id="modal-title-<?php echo $countmodalval ?>"><?php block_sub_field( 'ano', $echo = true );?></h4>
                <button class="reset modal__close-btn modal__close-btn--inner js-modal__close js-tab-focus">
                  <svg class="icon" viewBox="0 0 20 20"><title>Fechar janela</title><g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="3" x2="17" y2="17" /><line x1="17" y1="3" x2="3" y2="17" /></g></svg>
                </button>
            </header>
            <div class="padding-y-sm padding-x-md">
                <div class="text-component">
                    <p id="modal-description-<?php echo $countmodalval ?>"><?php block_sub_field( 'descrio', $echo = true ); ?></p>
                </div>
            </div>
          </div>
          <button class="reset modal__close-btn modal__close-btn--outer display@md js-modal__close js-tab-focus">
            <svg class="icon icon--sm" viewBox="0 0 24 24"><title>Fechar a janela</title>
                    <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="3" y1="3" x2="21" y2="21" />
                      <line x1="21" y1="3" x2="3" y2="21" />
                    </g>
            </svg>
          </button>
        </div>
        <?php  endwhile;?>

<?php endif;
reset_block_rows( 'timeline' );

?> 