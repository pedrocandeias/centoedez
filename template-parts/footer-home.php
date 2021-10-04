<?php
/**
 * Template part for displaying the footer of the home
 *
 * @package centoedez
 */

?>
<?php if ((get_theme_mod( 'newlinks' ) == '1')){?>
    <div class="modal modal--animate-translate-up modal--is-visible alert-msg flex items-end justify-end pointer-events-none js-modal" id="alert-msg-id">
        <div class="modal__content max-height-100% flex flex-column padding-md" role="alertdialog" aria-labelledby="alert-msg-title" aria-describedby="alert-msg-descr">
            <div class="margin-bottom-xxxs text-right">
            <button class="reset alert-msg__close-btn pointer-events-auto radius-full shadow-md text-sm js-modal__close js-tab-focus">
                <span>Fechar</span>

                <svg class="icon icon--xxs margin-left-xxxs" viewBox="0 0 12 12" aria-hidden="true" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                <line x1="1" y1="1" x2="11" y2="11" />
                <line x1="11" y1="1" x2="1" y2="11" /></svg>
            </button>
            </div>

            <div class="pointer-events-auto width-100% max-width-xxxs padding-sm bg radius-md shadow-md overflow-auto">
            <div class="text-component text-sm">
                <h1 id="alert-msg-title" class="text-md">Novos conteúdos em:</h1>
                <?php 
                    $newcontentpageid1 = get_theme_mod('page-link-1');
                    $newcontentpagename1 = get_the_title( $newcontentpageid1 );
                    $newcontentpageslug1 = get_permalink($newcontentpageid1);
                    
                    $newcontentpageid2 = get_theme_mod('page-link-2');
                    $newcontentpagename2 = get_the_title( $newcontentpageid2 );
                    $newcontentpageslug2 = get_permalink($newcontentpageid2);

                    $newcontentpageid3 = get_theme_mod('page-link-3');
                    $newcontentpagename3 = get_the_title( $newcontentpageid3 );
                    $newcontentpageslug3 = get_permalink($newcontentpageid3);
                    
                ?>
                <ul>
                <?php if($newcontentpageid1 == '0' || $newcontentpageid1 == '' ){}else{?>
                    <li><a href="<?php echo $newcontentpageslug1; ?>"><?php echo $newcontentpagename1; ?></a></li>
                <?php } ?>
                
                <?php if($newcontentpageid2 == '0' || $newcontentpageid2 == '' ){}else{?>
                    <li><a href="<?php echo $newcontentpageslug2; ?>"><?php echo $newcontentpagename2; ?></a></li>
                <?php } ?>
                
                <?php if($newcontentpageid3 == '0' || $newcontentpageid3 == '' ){}else{?>
                    <li><a href="<?php echo $newcontentpageslug3; ?>"><?php echo $newcontentpagename3; ?></a></li>
                <?php } ?>

                </ul>
            </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- loading bar - visible when a new project/page is loaded -->
    <div class="progress-bar bg-accent is-hidden js-progress-bar" aria-hidden="true"></div>
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/sliding-panels.min.js"></script>