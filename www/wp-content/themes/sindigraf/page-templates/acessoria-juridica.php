<?php

/**
 * Template Name: Acessoria Juridica
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<aside class="aside aside-juridica">
    <h2>ASSESSORIA JURÍDICA</h2>
</aside>
<main>
    <section class="wrapper juridica">
        <article>
            <?php the_content(); ?>
        </article>
    </section>
    <section class="blue-strip">
        <p class="beneficios-paragraph">
            Para maiores informações:
            <span>
                <a href="mailto:<?php echo get_field('email'); ?>"><?php echo get_field('email'); ?></a>
                ou ligue para
                <?php
                    $phone = get_field('telefone');
                    $phoneClear = preg_replace('/[\(\)\-\" "]+/', '', $phone);
                ?>
                <a href="tel:+55<?php echo $phoneClear?>"><?php echo $phone; ?></a>
            </span>
        </p>
    </section>
</main>
<?php get_footer(); ?>