<?php
/**
 * Template part for displaying the homepage
 *
 *
 * @package centoedez
 */

?>
<?php
$facebooklink = get_theme_mod('Facebook-link');
$twitterlink = get_theme_mod('Twitter-link');
$instagramlink = get_theme_mod('Instagram-link');
$linkedinlink = get_theme_mod('Linkedin-link');
$youtubelink = get_theme_mod('Youtube-link');

?>
<div class="s-panels js-s-panels">
    <?php   
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) { ?>

<a class="s-panels__logo" href="<?php echo get_site_url(); ?>" aria-label="Go to homepage">
    <?php  echo file_get_contents(  $logo['0'] ); ?>
</a>
<?php } else { ?>
<a class="s-panels__logo" href="<?php echo get_site_url(); ?>" aria-label="Go to homepage">
   <svg viewBox="0 0 182 105"><defs><style>.cls-1{fill:none;}.cls-2{fill:#fff;}.cls-3{clip-path:url(#clip-path);}.cls-4{fill:url(#linear-gradient);}.cls-5{fill:#231f20;}</style><clipPath id="clip-path" transform="translate(0 14.49)"><rect class="cls-1" x="83.9" width="66.1" height="56.81"/></clipPath><linearGradient id="linear-gradient" x1="-140.2" y1="482.71" x2="-139.82" y2="482.71" gradientTransform="matrix(212.04, 0, 0, -212.04, 29805.48, 102383.34)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#65a6d9"/><stop offset="1" stop-color="#591b4a"/></linearGradient></defs><g id="Camada_2" data-name="Camada 2"><g id="Layer_1" data-name="Layer 1"><rect class="cls-2" x="6.07" y="20.97" width="63.61" height="53.5"/><g class="cls-3"><rect class="cls-4" x="78.36" y="-6.71" width="77.18" height="70.22" transform="translate(-3.39 41.52) rotate(-13)"/></g><path class="cls-2" d="M119.65,25.47a16.05,16.05,0,0,1,1.5-4.44,11.13,11.13,0,0,1,2.94-3.65,8.24,8.24,0,0,1,9.42-.08,10.47,10.47,0,0,1,2.88,3.5,15.86,15.86,0,0,1,1.47,4.42,23,23,0,0,1,.43,4.15,17.36,17.36,0,0,1-.77,5.18,15.18,15.18,0,0,1-2.06,4.3,10.42,10.42,0,0,1-3.06,2.91,7,7,0,0,1-3.73,1.08,6.85,6.85,0,0,1-3.73-1.11,10.32,10.32,0,0,1-3-2.94,14.48,14.48,0,0,1-2-4.27,18.41,18.41,0,0,1-.71-5.15,22.77,22.77,0,0,1,.43-3.9m-5.06,12.05a17.73,17.73,0,0,0,3.25,6,13.87,13.87,0,0,0,4.86,3.71,14.25,14.25,0,0,0,6,1.27,14.7,14.7,0,0,0,6.11-1.27,13.71,13.71,0,0,0,4.89-3.71,18,18,0,0,0,3.26-6,26.78,26.78,0,0,0,1.24-8.09,25.14,25.14,0,0,0-1.08-8,18.14,18.14,0,0,0-3.16-6.06,13.86,13.86,0,0,0-4.87-3.82,14.52,14.52,0,0,0-6.22-1.33,15.37,15.37,0,0,0-5.91,1.16A13.51,13.51,0,0,0,118,15a17.26,17.26,0,0,0-3.37,5.94,25.23,25.23,0,0,0-1.24,8.31,26.39,26.39,0,0,0,1.19,8.32" transform="translate(0 14.49)"/><path class="cls-2" d="M105.15,15.93V47.66H111V10.33h-9.11v5.6Zm-12.2,0V47.66h5.89V10.33H89.73v5.6Z" transform="translate(0 14.49)"/><rect class="cls-5" x="83.9" y="72.37" width="66.1" height="8.58"/><path class="cls-5" d="M64.91,55.23A4.66,4.66,0,1,1,66.24,52a4.44,4.44,0,0,1-1.33,3.26M54.61,11.45H52.92a2.79,2.79,0,0,0-2.56,1.32,8.13,8.13,0,0,0-.81,4.11V41.12q0,7.38-4.25,11.59T32.42,56.92q-8,0-12.75-4.3C16.49,49.75,14.9,45.8,14.9,40.8V11.45H9.84V10.27H30.27v1.18H25V40q0,7.13,2.38,10.88c1.58,2.5,4.59,4.16,9,3.76,3.47-.31,5.46-1.13,7.66-3.38s3.31-5.48,3.31-9.71V16.88a7,7,0,0,0-1-4.18,2.75,2.75,0,0,0-2.76-1.25H41.76V10.27H54.61ZM0,66.42H77.27V0H0Z" transform="translate(0 14.49)"/><path class="cls-2" d="M143.35,60.34v4.45h.82V59.55H142.9v.79Zm-2.32,3a5.43,5.43,0,0,0,.46-.68,4,4,0,0,0,.31-.71,2.53,2.53,0,0,0,.11-.73,1.78,1.78,0,0,0-.12-.65,1.73,1.73,0,0,0-.35-.54,1.53,1.53,0,0,0-.55-.37,1.64,1.64,0,0,0-.71-.14,1.72,1.72,0,0,0-.74.14,1.53,1.53,0,0,0-.55.37,1.55,1.55,0,0,0-.34.53,1.84,1.84,0,0,0-.11.62,1.48,1.48,0,0,0,0,.34,2.14,2.14,0,0,0,.13.38,1.75,1.75,0,0,0,.2.35.71.71,0,0,0,.28.24l.48-.5a1,1,0,0,1-.23-.35,1.11,1.11,0,0,1-.09-.46,1.51,1.51,0,0,1,0-.26.85.85,0,0,1,.15-.28.89.89,0,0,1,.74-.34.72.72,0,0,1,.3.07,1,1,0,0,1,.29.18,1.09,1.09,0,0,1,.23.32,1,1,0,0,1,.09.44,1.75,1.75,0,0,1-.22.79,5.14,5.14,0,0,1-.58.85c-.23.29-.51.59-.81.9l-1,1h3.67V64h-1.71c.19-.22.38-.45.55-.68m-6.71-1.69a2.39,2.39,0,0,1,.21-.62,1.57,1.57,0,0,1,.41-.51,1,1,0,0,1,.67-.22,1,1,0,0,1,.65.21,1.4,1.4,0,0,1,.41.49,2.5,2.5,0,0,1,.2.62,3.26,3.26,0,0,1,.06.58,2.13,2.13,0,0,1-.11.72,1.92,1.92,0,0,1-.29.61,1.49,1.49,0,0,1-.42.41,1,1,0,0,1-.53.15.91.91,0,0,1-.52-.16,1.52,1.52,0,0,1-.43-.41,2.07,2.07,0,0,1-.27-.6,2.46,2.46,0,0,1-.1-.72,3.15,3.15,0,0,1,.06-.55m-.71,1.69a2.54,2.54,0,0,0,.45.85,1.94,1.94,0,0,0,.69.52,2,2,0,0,0,.83.18,2.07,2.07,0,0,0,.86-.18,2,2,0,0,0,.69-.52,2.59,2.59,0,0,0,.45-.84,4,4,0,0,0,0-2.26,2.64,2.64,0,0,0-.45-.85,2.09,2.09,0,0,0-.68-.54,2.21,2.21,0,0,0-1.7,0,1.85,1.85,0,0,0-.69.5,2.31,2.31,0,0,0-.47.83,3.43,3.43,0,0,0-.18,1.17,3.77,3.77,0,0,0,.17,1.16m-2,0a6.65,6.65,0,0,0,.45-.68,3.4,3.4,0,0,0,.31-.71,2.24,2.24,0,0,0,.12-.73,1.61,1.61,0,0,0-.13-.65A1.7,1.7,0,0,0,132,60a1.72,1.72,0,0,0-.55-.37,1.67,1.67,0,0,0-.71-.14,1.79,1.79,0,0,0-.75.14,1.49,1.49,0,0,0-.54.37,1.42,1.42,0,0,0-.34.53,1.63,1.63,0,0,0-.12.62,1.55,1.55,0,0,0,0,.34,3.3,3.3,0,0,0,.12.38,2.5,2.5,0,0,0,.21.35.76.76,0,0,0,.27.24l.49-.5a1.21,1.21,0,0,1-.24-.35,1.3,1.3,0,0,1-.08-.46.92.92,0,0,1,0-.26.85.85,0,0,1,.15-.28,1,1,0,0,1,.28-.24,1,1,0,0,1,.46-.1.65.65,0,0,1,.29.07.92.92,0,0,1,.3.18,1.07,1.07,0,0,1,.22.32,1,1,0,0,1,.09.44,1.63,1.63,0,0,1-.22.79,4.51,4.51,0,0,1-.57.85c-.24.29-.51.59-.82.9l-.95,1h3.66V64h-1.71c.2-.22.38-.45.56-.68m-4.14,1.35a.55.55,0,0,0,.34.13.52.52,0,0,0,.32-.13.47.47,0,0,0,.15-.37.45.45,0,0,0-.15-.34.45.45,0,0,0-.32-.15.48.48,0,0,0-.34.15.45.45,0,0,0-.15.34.47.47,0,0,0,.15.37m-2.17-4.32v4.45h.83V59.55h-1.28v.79Zm-2.46,0v4.45h.83V59.55H122.4v.79Zm-1.35.28a1.6,1.6,0,0,0-.43-.55,1.75,1.75,0,0,0-.58-.32,1.89,1.89,0,0,0-.6-.1,1.58,1.58,0,0,0-.69.14,1.88,1.88,0,0,0-.58.38,1.73,1.73,0,0,0-.38.57,1.65,1.65,0,0,0-.15.69,1.58,1.58,0,0,0,.15.69,1.79,1.79,0,0,0,.38.56,1.85,1.85,0,0,0,.58.37,1.8,1.8,0,0,0,.69.13.37.37,0,0,0,.29-.12,2.91,2.91,0,0,1-.28.24c-.12.1-.27.2-.43.31a5.72,5.72,0,0,1-.48.32l-.43.29.25.32.26.31.48-.35a5.32,5.32,0,0,0,.57-.43c.19-.16.38-.33.57-.52a4.17,4.17,0,0,0,.49-.62,2.9,2.9,0,0,0,.36-.7,2.37,2.37,0,0,0,.13-.81,1.78,1.78,0,0,0-.17-.8m-.75,1.18a.92.92,0,0,1-.2.31.86.86,0,0,1-.29.21.94.94,0,0,1-.37.07,1,1,0,0,1-.38-.07,1.06,1.06,0,0,1-.31-.21,1,1,0,0,1-.21-.31.92.92,0,0,1-.08-.38,1,1,0,0,1,.08-.37,1,1,0,0,1,.21-.32,1.1,1.1,0,0,1,.31-.22,1,1,0,0,1,.38-.08,1,1,0,0,1,.37.08.89.89,0,0,1,.29.22,1,1,0,0,1,.2.32.94.94,0,0,1,.07.37.92.92,0,0,1-.07.38m-4.58-1.46v4.45H117V59.55h-1.28v.79Z" transform="translate(0 14.49)"/></g></g></svg>
</a>
<?php } ?>

    <button class="reset s-panels__nav-control js-s-panels__nav-control js-tab-focus" aria-label="Toggle navigation">
        <svg class="icon icon--sm" viewBox="0 0 24 24" aria-hidden="true"><g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><line x1="2" y1="6" x2="22" y2="6" /><line x1="2" y1="12" x2="22" y2="12" /><line x1="2" y1="18" x2="22" y2="18" /></g></svg>
    </button>

    <?php  get_template_part( 'template-parts/header', 'social' ); ?>



    <ul class="s-panels__projects-list js-s-panels__projects-list bg-black bg-opacity-0">
    <?php
    for ($i = 1; $i < 5; $i++){ 
         $pageid = get_theme_mod('Block-'.$i.'-link');
         $pageslug = get_post_field( 'post_name', $pageid );
         ?>
        <li class="s-panels__project-preview js-s-panels__project-preview">
            <div class="s-panels__project-intro">
                <div class="s-panels__text-component text-component text-center padding-x-md color-white font-smooth text-shadow-lg">
                    <h3 class="color-inherit"><?php echo  get_theme_mod( 'Block-'.$i.'-title' ); ?></h3>
                    <p class="opacity-60%"><?php echo  get_theme_mod( 'Block-'.$i.'-description' ); ?></p>
                </div>

                <a class="s-panels__project-control js-s-panels__project-control" href="<?php echo $pageslug; ?>">Ver a história da Universidade do Porto</a>
            </div>

            <figure class="s-panels__project-figure bg-black">
                <img class="s-panels__project-img" src="<?php  echo  get_theme_mod('Block-'.$i.'-image'); ?>" alt="Image description">
            </figure>

            <div class="s-panels__project-title-wrapper padding-bottom-lg padding-top-xl">
                <div class="container max-width-md  text-component text-center ">
                    <h1 class="s-panels__project-title text-xxxl color-white text-shadow-md"><?php echo  get_theme_mod( 'Block-'.$i.'-description' ); ?></h1>
                    <a href="#<?php echo $pageslug; ?>" class=" text-xxxl text-shadow-md js-smooth-scroll" data-duration="1000">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="icon icon--sm svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg></a>
                </div>
            </div>
        </li>
        <?php } ?>
    </ul>
   <?php for ($i = 1; $i < 5; $i++){ 
    $pageid = get_theme_mod('Block-'.$i.'-link');
    $pageslug = get_post_field( 'post_name', $pageid );
    ?> 
    <section id="<?php echo $pageslug; ?>" class="s-panels__project-content is-hidden">
    </section>

    <?php } ?>

    <!-- fade-in transition layer - visible when a project is closed -->
    <div class="s-panels__overlay-layer bg-black js-s-panels__overlay-layer" aria-hidden="true"></div>

    <!-- SVG mask transition - visible when clicking on a page from the main menu -->
    <div class="s-panels__mask color-bg is-hidden js-s-panels__mask" data-path-1="M1280 720H0V718C0 718 287 717 640 717C993 717 1280 718 1280 718V720Z" data-path-2="M1280 720H0V467C0 467 287 261 640 261C993 261 1280 467 1280 467V720Z" data-path-3="M1280 720H0V0C0 0 287 -1 640 -1C993 -1 1280 0 1280 0V720Z">
        <svg height="100%" width="100%" preserveAspectRatio="none" viewBox="0 0 1280 720" fill="currentColor">
            <path d="M1280 720H0V718C0 718 287 717 640 717C993 717 1280 718 1280 718V720Z" />
        </svg>
    </div>

    <!-- main navigation -->
    <div class="s-panels__nav-wrapper bg-black font-smooth is-hidden js-s-panels__nav-wrapper">
        <div class="container height-100% padding-top-xxxl padding-bottom-md padding-y-md@sm">
            <div class="grid height-100%">
            <nav class="margin-bottom-md margin-bottom-0@sm margin-top-auto@sm col-12@sm" aria-label="Main">
                <?php echo wp_nav_menu(
                        array(
                            'menu'            => 'menu-primary',
                            'menu_class'      => 'margin-bottom-md margin-bottom-0@sm col-12@sm text-center',
                            'container'       => 'nav',
                            'container_class' => 'flex flex-column gap-sm margin-top-auto@sm items-center',
                            'container_id'    => '',
                            'container_aria_label' => 'Main',
                            'echo'            => false,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'walker'          => '', 
                            'theme_location'  => '',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'item_spacing'    => '',
                            'depth'           => 1,
                            )
                        ); ?>
                        </nav>

                <div class="margin-top-auto col-12@sm">

                    <ul class="flex flex-column gap-xs flex-row@sm justify-center@sm">
                    <?php if($facebooklink !== '') { ?>
                            <li>
                                <a href="<?php echo $facebooklink; ?>" class="s-panels__social-link text-sm@sm">
                                    <svg class="icon" viewBox="0 0 32 32"><title>Siga a U.Porto no Facebook</title><path d="M32,16A16,16,0,1,0,13.5,31.806V20.625H9.438V16H13.5V12.475c0-4.01,2.389-6.225,6.043-6.225a24.644,24.644,0,0,1,3.582.312V10.5H21.107A2.312,2.312,0,0,0,18.5,13v3h4.438l-.71,4.625H18.5V31.806A16,16,0,0,0,32,16Z"></path></svg>
                                </a>
                            </li>
                            <?php } ?> 
                            <?php if($youtubelink !== '') { ?>
                            <li>
                                <a href="<?php echo $youtubelink; ?>" class="s-panels__social-link text-sm@sm">
                                    <svg class="icon" viewBox="0 0 32 32"><title>Siga a U.Porto no Youtube</title><path d="M31.7,9.6c0,0-0.3-2.2-1.3-3.2c-1.2-1.3-2.6-1.3-3.2-1.4C22.7,4.7,16,4.7,16,4.7h0c0,0-6.7,0-11.2,0.3 c-0.6,0.1-2,0.1-3.2,1.4c-1,1-1.3,3.2-1.3,3.2S0,12.2,0,14.8v2.4c0,2.6,0.3,5.2,0.3,5.2s0.3,2.2,1.3,3.2c1.2,1.3,2.8,1.2,3.5,1.4 C7.7,27.2,16,27.3,16,27.3s6.7,0,11.2-0.3c0.6-0.1,2-0.1,3.2-1.4c1-1,1.3-3.2,1.3-3.2s0.3-2.6,0.3-5.2v-2.4 C32,12.2,31.7,9.6,31.7,9.6z M12.7,20.2l0-9l8.6,4.5L12.7,20.2z"></path></svg>
                                </a>
                            </li>
                            <?php } ?> 
                            <?php if($instagramlink !== '') { ?>
                            <li>
                                <a href="<?php echo $instagramlink; ?>" class="s-panels__social-link text-sm@sm">
                                    <svg class="icon" viewBox="0 0 32 32"><title>Siga a U.Porto no Instagram</title><path d="M16,3.7c4,0,4.479.015,6.061.087a6.426,6.426,0,0,1,4.51,1.639,6.426,6.426,0,0,1,1.639,4.51C28.282,11.521,28.3,12,28.3,16s-.015,4.479-.087,6.061a6.426,6.426,0,0,1-1.639,4.51,6.425,6.425,0,0,1-4.51,1.639c-1.582.072-2.056.087-6.061.087s-4.479-.015-6.061-.087a6.426,6.426,0,0,1-4.51-1.639,6.425,6.425,0,0,1-1.639-4.51C3.718,20.479,3.7,20.005,3.7,16s.015-4.479.087-6.061a6.426,6.426,0,0,1,1.639-4.51A6.426,6.426,0,0,1,9.939,3.79C11.521,3.718,12,3.7,16,3.7M16,1c-4.073,0-4.584.017-6.185.09a8.974,8.974,0,0,0-6.3,2.427,8.971,8.971,0,0,0-2.427,6.3C1.017,11.416,1,11.927,1,16s.017,4.584.09,6.185a8.974,8.974,0,0,0,2.427,6.3,8.971,8.971,0,0,0,6.3,2.427c1.6.073,2.112.09,6.185.09s4.584-.017,6.185-.09a8.974,8.974,0,0,0,6.3-2.427,8.971,8.971,0,0,0,2.427-6.3c.073-1.6.09-2.112.09-6.185s-.017-4.584-.09-6.185a8.974,8.974,0,0,0-2.427-6.3,8.971,8.971,0,0,0-6.3-2.427C20.584,1.017,20.073,1,16,1Z"></path><path d="M16,8.3A7.7,7.7,0,1,0,23.7,16,7.7,7.7,0,0,0,16,8.3ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z"></path><circle cx="24.007" cy="7.993" r="1.8"></circle></svg>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if($twitterlink !== ''){?>
                            <li>
                                <a href="<?php echo $twitterlink; ?>" class="s-panels__social-link text-sm@sm">
                                    <svg class="icon" viewBox="0 0 32 32"><title>Siga a U.Porto no Twitter</title><g><path d="M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z"></path></g></svg>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if($linkedinlink !== ''){?>
                            <li>
                                <a href="<?php echo $linkedinlink; ?>" class="s-panels__social-link text-sm@sm">
                                    <svg class="icon" viewBox="0 0 32 32"><title>Siga a U.Porto no Linkedin</title><g><path d="M29,1H3A2,2,0,0,0,1,3V29a2,2,0,0,0,2,2H29a2,2,0,0,0,2-2V3A2,2,0,0,0,29,1ZM9.887,26.594H5.374V12.25H9.887ZM7.63,10.281a2.625,2.625,0,1,1,2.633-2.625A2.624,2.624,0,0,1,7.63,10.281ZM26.621,26.594H22.2V19.656c0-1.687,0-3.75-2.35-3.75s-2.633,1.782-2.633,3.656v7.126H12.8V12.25h4.136v1.969h.094a4.7,4.7,0,0,1,4.231-2.344c4.513,0,5.359,3,5.359,6.844Z"></path></g></svg>
                                </a>
                            </li>
                            <?php } ?>
                    </ul>
                
                </div>
            </div>
        </div>
    </div>
</div>

