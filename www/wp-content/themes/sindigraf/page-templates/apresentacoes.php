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
        <div class="apresentacoes-card">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/document.svg" alt=""></figure>
            <article>
                <span>19/11/2014</span>
                <p>Análise dos Custos para Implantação de uma Nova Tecnologia, Digital ou Convencional</p>
            </article>
            <a href="">Baixar</a>
        </div>
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