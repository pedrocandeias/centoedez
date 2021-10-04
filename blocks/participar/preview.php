<?php
/**
 * Participar preview block for Gutenberg block.
 *
 * @package centoedez
 */
?>
<div class="position-relative z-index-1 bg-contrast-lower padding-y-xl">
            <div class="container max-width-adaptive-lg">
                <div class="grid gap-md">
                    <div class="col-4@md">
                    <?php if(block_field( 'subtitulo', $echo = false ) !== ''){ ?>
                        <div class="text-sm color-contrast-medium margin-bottom-xxs"><?php block_field( 'subtitulo', $echo = true );?></div>
                    <?php }?>
                    <?php if(block_field( 'titulo', $echo = false ) !== ''){ ?>
                        <h1><?php block_field( 'titulo', $echo = true );?></h1>
                    <?php }?>
                    </div>

                    <div class="col-8@md">
                        <div class="text-component padding-left-md@md">
                          <?php if(block_field( 'descricao', $echo = false ) !== ''){ ?>
                          <?php block_field( 'descricao', $echo = true );?>
                          <?php }?>
                                <p>
                                <?php if(block_field( 'texto-botao', $echo = false ) !== ''){ ?>
                                <a class="js-page-trans-link link-fx-1 color-contrast-higher
                                " href="<?php block_field( 'link', $echo = true );?>">
                                    <span><?php block_field( 'texto-botao', $echo = true );?></span>
                                    <svg class="icon" viewBox="0 0 32 32" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="15.5"/><line x1="10" y1="18" x2="16" y2="12"/><line x1="16" y1="12" x2="22" y2="18" /></g></svg>
                                </a>
                                </p>
                                <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>