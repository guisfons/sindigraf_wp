<?php

/**
 * Template Name: Pesquisa salarial
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>

<main>
      <section class="salary wrapper">
          <h3><?php the_title(); ?></h3>
            <p class="salary subtitle"> A Melhor Ferramenta para Administração de Cargos, Salários e Benefícios</p>

            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" srcset="">

            <div class="salary-text">
                <p>O SINDIGRAF-SP e a ABIGRAF-SP, com muita satisfação, anunciam o lançamento da 26ª Pesquisa de Salários e Benefícios na Indústria Gráfica Paulista.</p>
                <p>O estudo tem como principais objetivos identificar e analisar as práticas e tendências de remuneração para o mercado gráfico, fornecendo informações valiosas para uma adequada avaliação e definição das políticas de gestão de pessoas.</p>
                <p>O material foi elaborado entre os meses de março/2020 e junho/2020, contou com a participação de 41 indústrias gráficas de pequeno, médio e grande porte, representativas dos segmentos que compõem o parque industrial gráfico paulista, envolvendo o total de 9.872 trabalhadores, contempla 224 cargos com descrição, até o nível de gerência, bem como levantamento dos salários nominais efetivos, atualizados para o mês de setembro, observada a data-base de reajuste salarial e os índices acordados quando das Negociações Coletivas de Trabalho 2019, além dos benefícios e outras práticas de recursos humanos. </p>
            </div>
      </section>

      <section class="blue-section salary">
        <div class="blue-section-wrapper">
            <figure class="blue-section-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/abordagem.svg" alt="">
                <span>Abordagem</span>
            </figure>
            <figure class="blue-section-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/processo-de-estruturacao.svg" alt="">
                <span>Processo de Estruturação</span>
            </figure>
            <figure class="blue-section-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/relacao-empresas-participantes.svg" alt="">
                <span>Relação de Empresas Participantes</span>
            </figure>
            <figure class="blue-section-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/distribuicao-empresas-porte-segmento.svg" alt="">
                <span>Distribuição das Empresas por Porte e Segmento</span>
            </figure>
            <figure class="blue-section-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/graficos-analiticos.svg" alt="">
                <span>Gráficos Analíticos</span>
            </figure>
            <figure class="blue-section-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/relacao-descricao-cargos.svg" alt="">
                <span>Relação e Descrição dos Cargos Pesquisados</span>
            </figure>
            <figure class="blue-section-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/metodologia.svg" alt="">
                <span>Metodologia</span>
            </figure>
            <figure class="blue-section-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/pontos-atencao.svg" alt="">
                <span>Pontos de Atenção</span>
            </figure>
            <figure class="blue-section-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/resultados-salariais.svg" alt="">
                <span>Resultados Salariais</span>
            </figure>
            <figure class="blue-section-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/medias-estaticas.svg" alt="">
                <span>Medidas Estatísticas – Mercado Geral, por porte e segmentos</span>
            </figure>
            <figure class="blue-section-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/relatorio-de-beneficios.svg" alt="">
                <span>Relatório de Benefícios e Políticas de RH</span>
            </figure>
        </div>
        
    </section>
    <p class="salary-informacoes"> Informações e orientações para a aquisição do material poderão ser obtidas através do e-mail <a href="mailto:dejur@abigraf.org.br">dejur@abigraf.org.br</a></p>
    <section class="salary-support wrapper">
        <h3>Juntos somos mais fortes! </h3>
        <div class="salary-support-box">
            <div class="salary-support-item">
                <p>REALIZAÇÃO</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/servicos/logo_sindigraf_90anos-ade95e5b3a9e23007000d77461bdc2f6 1.png" alt="" srcset="">
            </div>
            <div class="salary-support-item">
                <p>APOIO</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/servicos/logo_240 1.png" alt="" srcset="">
            </div>
            <div class="salary-support-item">
                <p>EXECUÇÃO</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/servicos/logo_wiabiliza-d27013dcb8cc78ac55f0a4b773cbba5d 1.png" alt="" srcset="">
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>