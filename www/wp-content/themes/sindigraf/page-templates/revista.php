<?php

/**
 * Template Name: Revista
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>

<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="wrapper revista-texto">
        <article>
            <?php the_content(); ?>
        </article>
    </section>
    <?php
        $info = get_field('mais_informacoes');
        if( $info ): ?>
            <section class="blue-strip">
                <p class="beneficios-paragraph">
                    <?php echo get_field('mais_informacoes_titulo'); ?>
                    <span>
                        <a href="mailto:<?php echo get_field('mais_informacoes_e-mail'); ?>"><?php echo get_field('mais_informacoes_e-mail'); ?></a>
                        <?php echo get_field('mais_informacoes_descricao'); ?>
                        <a class="telefone" href="tel:+55<?php echo get_field('mais_informacoes_telefone'); ?>"><?php echo get_field('mais_informacoes_telefone'); ?></a>
                    </span>
                </p>
            </section>
        <?php endif; ?>
    <section class="wrapper revistas">
        <?php
            $args = array(  
                'post_type' => 'revistas',
                'post_status' => 'publish',
                'posts_per_page' => 10, 
                'orderby' => 'title', 
                'order' => 'ASC',
            );

            $wp_query = new WP_Query( $args ); 
                
            while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                <div class="revista-card">
                    <span><?php the_title(); ?></span>
                    <img src="<?php the_field('imagem'); ?>" alt="">
                    <a target="_blank" href="<?php the_field('arquivo'); ?>">Visualizar</a>
                </div>
            <?php
            endwhile;
            wp_reset_postdata(); 
        ?>
    </section>
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
    <?php get_footer(); ?>