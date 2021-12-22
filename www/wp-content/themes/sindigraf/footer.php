    <footer class="footer">
        <div class="newsletter">
            <div class="news-content wrapper">
                <p class="news-text">Assine nossa Newsletter e receba informações sobre notícias, eventos e prêmios da Indústria Gráfica. </p>
                <!-- <form class="news-form" action="#" method="post">
                    <input class="news-email" type="email" name="email" placeholder="E-mail" id="">
                    <input class="news-submit" type="submit" value="Enviar">
                </form> -->
                <?php echo do_shortcode('[contact-form-7 id="137" title="Newsletter" html_class="news-form"]'); ?>
            </div>
        </div>
        <div class="footer-bottom wrapper">
            <div class="footer-left">
                <p class="footer-contact">Entre em contato</p>
                <p class="footer-info">
                    <?php
                    $phone = get_field('telefone', 'option');
                    $phoneClear = preg_replace('/[\(\)\-\" "]+/', '', $phone);
                    ?>
                    <a class="footer-phone" href="tel:55<?php echo $phoneClear; ?>"><?php echo $phone; ?></a>
                    <a class="footer-email" href="mailto:<?php echo get_field('e-mail', 'option'); ?>"><?php echo get_field('e-mail', 'option'); ?></a>
                </p>
                <p class="footer-location">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sides/location.png" alt="">
                    <a href="<?php echo get_field('link_do_endereco', 'option'); ?>" target="_blank" rel="noopener noreferrer"><?php echo get_field('endereco', 'option'); ?></a>
                </p>
            </div>
            <div class="footer-right">
                <div class="footer-social">
                    <a class="footer-social-media" href="<?php echo get_field('facebook', 'option'); ?>">
                        <img class="footer-social-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sides/Facebook.png" alt="" srcset="">
                    </a>
                    <a class="footer-social-media" href="<?php echo get_field('instagram', 'option'); ?>">
                        <img class="footer-social-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sides/instagram.png" alt="" srcset="">
                    </a>
                    <a class="footer-social-media" href="<?php echo get_field('youtube', 'option'); ?>">
                        <img class="footer-social-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sides/Youtube.png" alt="" srcset="">
                    </a>
                </div>
                <p class="footer-name">Sindigraf SP</p>
                <p class="footer-name">Abigraf SP</p>
            </div>
            <div class="footer-mobile">
                <div class="footer-faleconosco">
                    <?php
                    if (have_rows('menu', 'option')) :
                        while (have_rows('menu', 'option')) : the_row();
                    ?>
                            <a href="<?php echo get_sub_field('link_do_item', 'option'); ?>"><?php echo get_sub_field('texto_do_menu', 'option'); ?></a>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="footer-social-mobile">
                    <a href="<?php echo get_field('twitter', 'option'); ?>"><img src="/images/icons/twitter-mobile-red.svg" alt=""></a>
                    <a href="<?php echo get_field('youtube', 'option'); ?>"><img src="/images/icons/youtube-mobile-red.svg" alt=""></a>
                    <a href="<?php echo get_field('facebook', 'option'); ?>"><img src="/images/icons/facebook-mobile-red.svg" alt=""></a>
                </div>
                <a href="<?php echo get_field('link_do_endereco', 'option'); ?>" target="_blank" rel="noopener noreferrer"><?php echo get_field('endereco', 'option'); ?></a>
            </div>
        </div>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.mask.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    </body>

    </html>