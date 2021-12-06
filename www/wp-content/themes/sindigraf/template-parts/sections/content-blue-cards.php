<?php
$class = '';
$class = get_field('sindigraf') ? 'vantagens-sindigraf' : '';
$class = get_field('biblioteca') ? 'library' : '';
?>
<section class="blue-section vantagens <?php echo $class ?>">
    <?php
    $title = get_field('titulo_card_sec_azul');
    if ($title) {
        echo "<h2 class=\"blue-section-title\">$title</h2>";
    }

    if (have_rows('itens_cards_secao_azul')) :
    ?>
        <div class="blue-section-wrapper">
            <?php while (have_rows('itens_cards_secao_azul')) : the_row(); ?>
                <figure class="blue-section-item">
                    <?php if (get_field('biblioteca')) : ?>
                        <p><?php echo get_sub_field('titulo_card'); ?></p>
                        <span><?php echo get_sub_field('texto_card'); ?></span>
                    <?php else : ?>
                        <img src="<?php echo get_sub_field('imagem_do_card'); ?>" alt="">
                        <span><?php echo get_sub_field('titulo_card'); ?></span>
                    <?php endif; ?>
                </figure>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>