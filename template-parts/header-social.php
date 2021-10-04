

    <div class="sticky-sharebar js-sticky-sharebar">
    
        <ul class="sticky-sharebar__list">
        <?php if ((get_theme_mod( 'Facebook-share' ) == '1')){?>
        <li>
            <a class="sticky-sharebar__btn js-social-share" data-social="facebook" data-url="https://up.pt/110" href="http://www.facebook.com/sharer.php">
                <svg class="icon" viewBox="0 0 32 32"><title>Partilhar no Facebook</title><path d="M32,16A16,16,0,1,0,13.5,31.806V20.625H9.438V16H13.5V12.475c0-4.01,2.389-6.225,6.043-6.225a24.644,24.644,0,0,1,3.582.312V10.5H21.107A2.312,2.312,0,0,0,18.5,13v3h4.438l-.71,4.625H18.5V31.806A16,16,0,0,0,32,16Z"></path></svg>
            </a>
        </li>
        <?php } 
        if (get_theme_mod( 'Twitter-share' ) == '1'){ ?>
        <li>
            <a class="sticky-sharebar__btn js-social-share" data-social="twitter" data-text="110º aniversário da U.Porto" data-hashtags="#uporto <?php echo get_Site_url(); ?>" href="https://twitter.com/intent/tweet">
                <svg class="icon" viewBox="0 0 32 32"><title>Partilhar no Twitter</title><g><path d="M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z"></path></g></svg>
            </a>
        </li>
   
        <?php }
        if ((get_theme_mod( 'Linkedin-share' ) == '1')){?>
            <li>
                <a class="sticky-sharebar__btn js-social-share" data-social="linkedin" data-url="<?php echo get_Site_url(); ?>" href="https://www.linkedin.com/shareArticle">
                    <svg class="icon" viewBox="0 0 32 32"><title>Partilhar no Linkedin</title><g><path d="M29,1H3A2,2,0,0,0,1,3V29a2,2,0,0,0,2,2H29a2,2,0,0,0,2-2V3A2,2,0,0,0,29,1ZM9.887,26.594H5.374V12.25H9.887ZM7.63,10.281a2.625,2.625,0,1,1,2.633-2.625A2.624,2.624,0,0,1,7.63,10.281ZM26.621,26.594H22.2V19.656c0-1.687,0-3.75-2.35-3.75s-2.633,1.782-2.633,3.656v7.126H12.8V12.25h4.136v1.969h.094a4.7,4.7,0,0,1,4.231-2.344c4.513,0,5.359,3,5.359,6.844Z"></path></g></svg>
                </a>
            </li>
        <?php } 
        if ((get_theme_mod( 'Email-share' ) == '1')){?>
            <li>
                <a class="sticky-sharebar__btn js-social-share" data-social="mail" data-subject="Email Subject" data-body="110º Aniversário da Universidade do Porto: <?php echo get_Site_url(); ?>" href="mailto:">
                    <svg class="icon" viewBox="0 0 32 32"><title>Partilhar por Email</title><g><path d="M28,3H4A3.957,3.957,0,0,0,0,7V25a3.957,3.957,0,0,0,4,4H28a3.957,3.957,0,0,0,4-4V7A3.957,3.957,0,0,0,28,3Zm.6,6.8-12,9a1,1,0,0,1-1.2,0l-12-9A1,1,0,0,1,4.6,8.2L16,16.75,27.4,8.2a1,1,0,1,1,1.2,1.6Z"></path></g></svg>
                </a>
            </li>
        <?php } ?>
        </ul>
    </div>