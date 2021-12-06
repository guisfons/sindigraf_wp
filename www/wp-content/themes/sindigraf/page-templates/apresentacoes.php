<?php

/**
 * Template Name: Apresentações
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<aside class="aside aside-apresentacoes">
    <h2>Apresentações</h2>
</aside>
<main>
    <section class="wrapper apresentacoes">
        <?php
            if( have_rows('card_apresentacoes') ):
                while( have_rows('card_apresentacoes') ) : the_row();
                ?>
                <div class="apresentacoes-card">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/document.svg" alt=""></figure>
                    <article>
                        <span><?php echo get_sub_field('data'); ?></span>
                        <p><?php echo get_sub_field('titulo'); ?></p>
                    </article>
                    <a target="_blank" href="<?php echo get_sub_field('arquivo'); ?>" download>Baixar</a>
                </div>
                <?php
                endwhile;
            endif;
        ?>
        <div class="paginacao">
            <div class="paginacao-numeros">
                <?php
                $big = 999999999;
                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $wp_query->max_num_pages,
                    'prev_text' => '<span class="paginacao-before"><img src="' . get_template_directory_uri() . '/assets/images/icons/arrow-paginacao.svg" alt=""></span>',
                    'next_text' => '<span class="paginacao-after"><img src="' . get_template_directory_uri() . '/assets/images/icons/arrow-paginacao.svg" alt=""></span>',
                ));
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>