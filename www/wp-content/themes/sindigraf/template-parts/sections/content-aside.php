<?php
$aside = get_field('aside');
if( $aside ): ?>
<aside class="aside <?php if(get_field( 'aside_tamanho_aside' ) == 'grande') {echo 'aside-large';} ?>" style="background-image: url(<?php echo get_field('aside_imagem_de_fundo'); ?>)">
    <h2><?php echo get_field('aside_titulo_aside'); ?></h2>
</aside>
<?php endif; ?>