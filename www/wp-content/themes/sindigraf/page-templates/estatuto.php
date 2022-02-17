<?php

/**
 * Template Name: Estatuto
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="wrapper estatuto">
        <h3>SINDICATO DAS INDÚSTRIAS GRÁFICAS NO ESTADO DE SÃO PAULO</h3>
        <span>SINDIGRAF-SP</span>

        <div class="estatuto-card">
            <p>Entidade sem fins lucrativos, o SINDIGRAF-SP foi constituído para representar legalmente a categoria da Indústria Gráfica Paulista no plano da Confederação Nacional da Indústria – CNI. </p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/docs.svg" alt="">
            <span>Faça o download do estatuto</span>
            <a href="<?php echo get_field('arquivo_para_download'); ?>" download>Baixar</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>