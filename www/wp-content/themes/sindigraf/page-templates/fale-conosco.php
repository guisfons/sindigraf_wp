<?php

/**
 * Template Name: Fale Conosco
 * Template Post Type: page
 *
 * @package UAU
 * @since 1.0.0
 */

get_header();
?>

<aside class="aside aside-fale-conosco">
    <h2>Fale Conosco</h2>
</aside>
<main>
    <section class="wrapper fale-conosco-page">
        <form class="formulario-contato" action="">
            <div class="formulario-contato-header">
                <h3>TIRE SUAS DÚVIDAS</h3>
                <p>Entre em contato e em breve responderemos você.</p>
            </div>
            <input class="input input-full" placeholder="Nome*" type="text" name="" id="">
            <input class="input input-full" placeholder="E-mail*" type="email" name="" id="">
            <div class="input-select">
                <select class="input input-full" name="select" id="select">
                    <option selected value="">Área</option>
                    <option value="">Loren</option>
                    <option value="">Loren</option>
                </select>
            </div>
            <input class="input input-full" placeholder="Assunto*" type="text" name="" id="">
            <textarea class="input input-full input-textarea" placeholder="Escreva aqui sua mensagem*" name="" id=""></textarea>
            <span>*campos obrigatórios</span>
            <input type="submit" value="Enviar">
        </form>
    </section>
</main>

<?php get_footer(); ?>