<?php

/**
 * Template Name: Diretoria
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<aside class="aside aside-sindigraf">
    <h2>DIRETORIA GESTÃO 2019-2022</h2>
</aside>
<main>
    <?php if (have_rows('diretoria_informacoes')) : ?>
        <section class="diretoria">
            <?php while (have_rows('diretoria_informacoes')) : the_row(); ?>
                <div class="wrapper">
                    <?php
                    echo (get_sub_field('tem_titulo')) ? '<h3>' . get_sub_field('titulo') . '</h3>' : '';
                    ?>
                </div>
                <span class="blue-strip"><?php echo get_sub_field('subtitulo'); ?></span>
                <div class="wrapper">
                    <article class="diretoria-content">
                        <?php
                        if (have_rows('textos')) :
                            while (have_rows('textos')) : the_row();

                            $title = get_sub_field('titulo_marcado');
                            echo ($title)? '<h4>'.$title.'</h4>': '';
                            echo '<p>'. get_sub_field('texto') .'</p>';

                            endwhile;
                        endif;
                        ?>
                    </article>
                </div>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>