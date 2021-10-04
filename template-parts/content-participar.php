<?php
/**
 * Template part for displaying page content in participar page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package centoedez
 */

?>

 <!-- contact info + form -->
 <div class="container max-width-adaptive-md margin-bottom-xl margin-top-xl">
                <div class="grid gap-lg">
                    <!-- info -->
                    <div class="col-5@md">
                        <dl>
                            <div class="border-bottom padding-y-md">
                                <dt class="color-contrast-higher font-semibold margin-bottom-sm">Email</dt>
                                <dd>
                                    <a href='mailto:noticias@up.pt'>noticias@up.pt</a>
                                </dd>
                            </div>
<?php 
$facebooklink = get_theme_mod('Facebook-link');
$twitterlink = get_theme_mod('Twitter-link');
$instagramlink = get_theme_mod('Instagram-link');
$linkedinlink = get_theme_mod('Linkedin-link');
$youtubelink = get_theme_mod('Youtube-link');
?>
                            <div class="border-bottom padding-y-md">
                                <div class="socials-v3 margin-bottom-sm">
                                    <div class="container max-width-lg">
                                        <div class="margin-bottom-lg">
                                            <h3 class="text-center">Nas Redes Sociais</h3>
                                        </div>
                                        <ul class="socials-v3__btns">
											<?php if($facebooklink !== '') { ?>
											<li>
													<a href="<?php echo $facebooklink; ?>" class="socials-v3__btn">
														<svg class="icon" viewBox="0 0 32 32"><title>Seguir no Facebook</title><path d="M32,16A16,16,0,1,0,13.5,31.806V20.625H9.438V16H13.5V12.475c0-4.01,2.389-6.225,6.043-6.225a24.644,24.644,0,0,1,3.582.312V10.5H21.107A2.312,2.312,0,0,0,18.5,13v3h4.438l-.71,4.625H18.5V31.806A16,16,0,0,0,32,16Z"></path></svg>
													</a>
											</li>
											<?php } ?> 
											<?php if($instagramlink !== '') { ?>
											<li>
													<a href="<?php echo $instagramlink; ?>" class="socials-v3__btn">
														<svg class="icon" viewBox="0 0 32 32"><title>Seguir no Instagram</title><path d="M16,3.7c4,0,4.479.015,6.061.087a6.426,6.426,0,0,1,4.51,1.639,6.426,6.426,0,0,1,1.639,4.51C28.282,11.521,28.3,12,28.3,16s-.015,4.479-.087,6.061a6.426,6.426,0,0,1-1.639,4.51,6.425,6.425,0,0,1-4.51,1.639c-1.582.072-2.056.087-6.061.087s-4.479-.015-6.061-.087a6.426,6.426,0,0,1-4.51-1.639,6.425,6.425,0,0,1-1.639-4.51C3.718,20.479,3.7,20.005,3.7,16s.015-4.479.087-6.061a6.426,6.426,0,0,1,1.639-4.51A6.426,6.426,0,0,1,9.939,3.79C11.521,3.718,12,3.7,16,3.7M16,1c-4.073,0-4.584.017-6.185.09a8.974,8.974,0,0,0-6.3,2.427,8.971,8.971,0,0,0-2.427,6.3C1.017,11.416,1,11.927,1,16s.017,4.584.09,6.185a8.974,8.974,0,0,0,2.427,6.3,8.971,8.971,0,0,0,6.3,2.427c1.6.073,2.112.09,6.185.09s4.584-.017,6.185-.09a8.974,8.974,0,0,0,6.3-2.427,8.971,8.971,0,0,0,2.427-6.3c.073-1.6.09-2.112.09-6.185s-.017-4.584-.09-6.185a8.974,8.974,0,0,0-2.427-6.3,8.971,8.971,0,0,0-6.3-2.427C20.584,1.017,20.073,1,16,1Z"></path><path d="M16,8.3A7.7,7.7,0,1,0,23.7,16,7.7,7.7,0,0,0,16,8.3ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z"></path><circle cx="24.007" cy="7.993" r="1.8"></circle></svg>
													</a>
											</li>
											<?php } ?>
											<?php if($twitterlink !== ''){?>
											<li>
													<a href="<?php echo $twitterlink; ?>" class="socials-v3__btn">
														<svg class="icon" viewBox="0 0 32 32"><title>Seguir no Twitter</title><g><path d="M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z"></path></g></svg>
													</a>
											</li>
											<?php } ?> 
											<?php if($youtubelink !== '') { ?>
											<li>
													<a href="<?php echo $youtubelink; ?>" class="socials-v3__btn">
														<svg class="icon" viewBox="0 0 32 32"><title>Seguir no Youtube</title><path d="M31.7,9.6c0,0-0.3-2.2-1.3-3.2c-1.2-1.3-2.6-1.3-3.2-1.4C22.7,4.7,16,4.7,16,4.7h0c0,0-6.7,0-11.2,0.3 c-0.6,0.1-2,0.1-3.2,1.4c-1,1-1.3,3.2-1.3,3.2S0,12.2,0,14.8v2.4c0,2.6,0.3,5.2,0.3,5.2s0.3,2.2,1.3,3.2c1.2,1.3,2.8,1.2,3.5,1.4 C7.7,27.2,16,27.3,16,27.3s6.7,0,11.2-0.3c0.6-0.1,2-0.1,3.2-1.4c1-1,1.3-3.2,1.3-3.2s0.3-2.6,0.3-5.2v-2.4 C32,12.2,31.7,9.6,31.7,9.6z M12.7,20.2l0-9l8.6,4.5L12.7,20.2z"></path></svg>
													</a>
											</li>
											<?php } ?> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </dl>
                    </div>

                    <!-- form -->
                    <div class="col-7@md">
                        <?php echo do_shortcode('[contact-form-7 id="233" title="Participar"]');?>
                    </div>
                </div>
            </div>