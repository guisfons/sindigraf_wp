<?php

/**
 * Template Name: Jurídico Documentos
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<main>
  <section class="wrapper header-input">
    <h3><?php the_title(); ?></h3>
  </section>
  <section class="wrapper juridico-arquivos">
    <div class="input-select input-anos">
      <form action="#" method="GET">
        <select class="input input-full" name="ano" id="select" onchange="this.form.submit()">
          <option selected value="">Todos os anos</option>
          <option value="2021">2021</option>
        </select>
      </form>
    </div>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = [
      'post_type' => 'juridico',
      'post_status' => 'publish',
      'posts_per_page' => 10,
      'order' => 'DESC',
      'orderby' => 'date',
      'paged' => $paged,
      'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => get_field('categoria_documento'),
        ),
    ),
    ];

    if (!empty($_GET['ano'])) {
      $args['date_query'] = [
        'year' => $_GET['ano']
      ];
    }
    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) :
    ?>
      <div class="juridico-arquivos-container">
        <?php
        while ($wp_query->have_posts()) : the_post();
          $date = get_the_date('d/F/Y');

          $date = explode('/', $date);

          $dateFormated = "$date[0] de $date[1] de $date[2]";
        ?>
          <div class="apresentacoes-card">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/document.svg" alt=""></figure>
            <article>
              <span><?php the_date('d/m/Y'); ?></span>
              <p><?php the_title(); ?></p>
            </article>
            <!-- <a target="_blank" href="<?php echo get_field('documento'); ?>">Visualizar</a> -->
            <a target="_blank" href="<?php echo get_field('documento'); ?>" download>Baixar</a>
          </div>
        <?php
        endwhile;
        ?>
  </section>
<?php
      wp_reset_postdata();
    endif;
?>
</section>
</main>
<?php get_footer(); ?>