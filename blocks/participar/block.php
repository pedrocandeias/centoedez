<?php
/**
 * Participar block for Gutenberg block.
 *
 * @package centoedez
 */

$pageid = block_field( 'link', $echo = false );
$pageid = $pageid->ID;
$pageurl = get_permalink($pageid);
?>
<div class="position-relative z-index-1 bg-contrast-lower padding-y-xl">
    <div class="container max-width-adaptive-lg">
        <div class="grid gap-md">
            <div class="col-6@md">
            <?php if(block_field( 'subtitulo', $echo = false ) !== ''){ ?>
                <div class="text-sm color-contrast-medium margin-bottom-xxs"><?php block_field( 'subtitulo', $echo = true );?></div>
            <?php }?>
            <?php if(block_field( 'titulo', $echo = false ) !== ''){ ?>
                <h2><?php block_field( 'titulo', $echo = true );?></h2>
            <?php }?>
            </div>

            <div class="col-6@md">
                <div class="text-component">
                  <?php if(block_field( 'descricao', $echo = false ) !== ''){ ?>
                  <?php block_field( 'descricao', $echo = true );?>
                  <?php }?>
                  <?php if(block_field( 'texto-botao', $echo = false ) !== ''){ ?>     
                    <a class="js-page-trans-link link-fx-1 color-primary-darker " href="<?php echo $pageurl; ?>">
                        <span class="text-lg"><?php block_field( 'texto-botao', $echo = true );?></span>
                        <svg class="icon" viewBox="0 0 32 32" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="15.5"></circle><line x1="10" y1="18" x2="16" y2="12"></line><line x1="16" y1="12" x2="22" y2="18"></line></g></svg>
                    </a>
                  <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="js-page-trans">
    <section class="position-relative z-index-1 padding-y-xxl js-page-trans__content">
    </section>
</div>

<div class="page-trans-v1" aria-hidden="true">
    <div class="page-trans-v1__overlay bg-accent"></div>

    <!-- left block -->
    <div class="page-trans-v1__block page-trans-v1__block--left bg-contrast-higher">
        <div class="page-trans-v1__loader bg-accent"></div>
    </div>

    <!-- right block -->
    <div class="page-trans-v1__block page-trans-v1__block--right bg-contrast-higher">
        <div class="page-trans-v1__loader bg-accent"></div>
    </div>
</div>


<section id="contactos"></section>

