<?php

/**
 * Template Name: Galeria
 * Template Post Type: page
 *
 * @package UAU
 * @since 1.0.0
 */

get_header();
?>

<aside class="aside aside-galeria">
    <h2>Galeria de Fotos</h2>
</aside>
<main>
    <section class="wrapper header-input">
        <h3>Palestra e Eventos</h3>
        <div class="input-select input-anos">
            <select class="input input-full" name="select" id="select">
                <option selected value="">Todos os anos</option>
                <option value="">Loren</option>
                <option value="">Loren</option>
            </select>
        </div>
    </section>
    <section class="wrapper galeria">
    <?php
        if( have_rows('galeria') ):
            $counter = 1;
            while( have_rows('galeria') ) : the_row();
            ?>
                <div class="galeria-card">
                    <figure><img src="<?php echo get_sub_field('imagem_principal'); ?>" alt=""></figure>
                    <article>
                        <span class="galeria-card-date"><?php echo get_sub_field('data'); ?></span>
                        <p class="galeria-card-texto"><?php echo get_sub_field('titulo'); ?></p>
                        <span class="galeria-card-link">Ver todas +</span>
                    </article>
                    <div class="modal">
                        <span class="modal-close"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cross.svg" alt=""></span>
                        <h3><?php echo get_sub_field('titulo'); ?></h3>
                        <div class="modal-slider">
                        <?php 
                            $images = get_sub_field('galeria_slider');
                            if( $images ): ?>
                                <?php foreach( $images as $image ): ?>
                                    <img data-item="<?php echo $counter; ?>" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="modal-paginacao">
                            <span class="modal-paginacao-item--active">01</span><span class="modal-paginacao-item">/04</span>
                        </div>
                    </div>
                </div>
            <?php
            $counter++;
            endwhile;
        endif;
        ?>
    </section>
    <section class="wrapper">
        <div class="paginacao">
            <span class="paginacao-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-paginacao.svg" alt=""></span>
            <div class="paginacao-numeros">
                <a class="paginacao-numero paginacao-numero--active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
            </div>
            <span class="paginacao-after"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-paginacao.svg" alt=""></span>
        </div>
    </section>
</main>

<?php get_footer(); ?>