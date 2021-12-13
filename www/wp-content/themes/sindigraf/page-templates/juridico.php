<?php

/**
 * Template Name: Jurídico
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<main>
  <section class="wrapper header-input">
    <h3>Jurídico</h3>
  </section>
  <section class="wrapper juridico">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    <article>
      <?php the_content(); ?>
    </article>
  </section>
  <section class="wrapper juridico-arquivos">
    <?php
    $args = array(
      'post_parent'    => $post->ID,
      'order'          => 'ASC',
      'orderby'        => 'menu_order'
    );


    $parent = new WP_Query($args);

    if ($parent->have_posts()) : ?>

      <?php while ($parent->have_posts()) : $parent->the_post(); ?>

        <div id="parent-<?php the_ID(); ?>" class="parent-page">

          <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

          <p><?php the_advanced_excerpt(); ?></p>

        </div>

      <?php endwhile; ?>

    <?php endif;
    wp_reset_postdata(); ?>
  </section>
</main>
<?php get_footer(); ?>