<?php
/**
 * Quote and image block for Gutenberg block.
 *
 * @package centoedez
 */
?>

<div class="sticky-hero sticky-hero--overlay-layer js-sticky-hero">
            <div class="sticky-hero__media" style="background-image:url('<?php block_field( 'imagem-de-fundo', $echo = true ); ?>')" aria-hidden="true"></div>

            <div class="sticky-hero__content">
                <div class="container max-width-adaptive-sm">
                    <blockquote class="text-center color-white font-smooth">
                        <svg class="icon icon--xxl" aria-hidden="true" viewBox="0 0 64 64"><polygon fill="currentColor" points="2 36 17 2 26 2 15 36 26 36 26 62 2 62 2 36"/><polygon fill="currentColor" points="38 36 53 2 62 2 51 36 62 36 62 62 38 62 38 36"/></svg>

                        <div class="text-component margin-top-lg">
                            <p class="text-xxl font-secondary"><?php block_field( 'titulo', $echo = true );?></p>
                        </div>
                        <footer class="margin-top-lg">&mdash; <?php block_field( 'autor', $echo = true );?></footer>
                    </blockquote>
                </div>
            </div>
        </div>