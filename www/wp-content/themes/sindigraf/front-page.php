<?php
	get_header();
?>
<main>
    <section class="main-slaider wrapper-slider">
      <img class="slider-item" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/slider-home.jpg" alt="">
	  <?php if( have_rows('slides') ): ?>
			<ul class="slides">
			<?php while( have_rows('slides') ): the_row(); 
				$image = get_sub_field('image');
				?>
				<li>
					<?php echo wp_get_attachment_image( $image, 'full' ); ?>
					<p><?php the_sub_field('caption'); ?></p>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
    </section>
    <section class="associe wrapper">
      <h2 class="associe-title">ASSOCIE-SE</h2>
      <p class="associe-text">Conheça os benefícios exclusivos para os filiados SINDIGRAF-SP e para os associados ABIGRAF-SP.</p>

      <div class="associe-cards">
        <div class="associe-cards-box">
          <div class="associe-cards-images">
            <img src="./images/home/sindigraf-bg.png" alt="" class="associe-bg-image">
            <img src="./images/home/logo-bg-sindigraf.png" alt="" class="associe-img-logo">
          </div>
          <div class="associe-card-text">
            <a href="#" class="associe-card-parag">Conheça o Guia de Benefícios</a>
          </div>
        </div>
        <div class="associe-cards-box">
          <div class="associe-cards-images">
            <img src="./images/home/abigraf-bg.png" alt="" class="associe-bg-image">
            <img src="./images/home/logo-bg-abigraf.png" alt="" class="associe-img-logo">
          </div>
          <div class="associe-card-text">
            <a href="#" class="associe-card-parag">Conheça o Guia de Benefícios</a>
          </div>
        </div>
      </div>
    </section>
    <section class="noticias wrapper">
      <h2 class="noticias-title">ÚLTIMAS NOTÍCIAS</h2>
      <div class="noticias-box">
        <div class="noticia-items">
          <p class="noticias-box-title">POLÍTICA</p>
          <a href="" class="noticias-post-title">Jornada de RH é reestruturada, veja as novidades!</a>
          <a href="" class="noticias-see">Leia +</a>
        </div>
        <div class="noticia-items">
          <p class="noticias-box-title">ABIGRAF NACIONAL</p>
          <a href="" class="noticias-post-title">Jornada de RH é reestruturada, veja as novidades!</a>
          <a href="" class="noticias-see">Leia +</a>
        </div>
        <div class="noticia-items">
          <p class="noticias-box-title">EVENTOS</p>
          <a href="" class="noticias-post-title">Jornada de RH é reestruturada, veja as novidades!</a>
          <a href="" class="noticias-see">Leia +</a>
        </div>
      </div>
    </section>
    <section class="banco-emp wrapper-slider">
      <div class="banco-emp-box banco-emp-left">
        <h3 class="banco-emp-title">BANCO DE EMPREGOS</h3>
        <figure class="banco-emp-icon-box">
          <img src="./images/icons/curriculum.svg" alt="" class="banco-emp-icon">
        </figure>
        <p class="banco-emp-type">SOU CANDIDATO</p>
        <p class="banco-emp-login">Faça seu login e confira as oportunidades.</p>
        <a href="#" class="banco-emp-search">Buscar por vagas</a>
        <p class="banco-emp-sing-up">Não tem cadastro? Clique aqui e faça agora.</p>
      </div>
      <div class="banco-emp-box banco-emp-right">
        <h3 class="banco-emp-title">BANCO DE EMPREGOS</h3>
        <figure class="banco-emp-icon-box">
          <img src="./images/icons/bag.svg" alt="" class="banco-emp-icon">
        </figure>
        <p class="banco-emp-type">SOU EMPRESA</p>
        <p class="banco-emp-login">Faça seu login e confira as oportunidades.</p>
        <a href="#" class="banco-emp-search">Buscar por vagas</a>
        <p class="banco-emp-sing-up">Não tem cadastro? Clique aqui e faça agora.</p>
      </div>
    </section>
    <section class="eventos wrapper">
      <h2 class="eventos-title">Eventos</h2>
      <div class="eventos-box">
        <div class="evento-item">
          <div class="evento-header">
            <span class="evento-date">
              <img class="evento-calendar" src="./images/icons/calendario.svg" alt="">
              20/09 a 23/09
            </span>
            <span class="evento-time">
              <img class="evento-clock" src="./images/icons/relogio.svg" alt="">
              19h às 21h30
            </span>
          </div>
          <a href="#" class="evento-link">Curso Online ABTG - White Belt para Melhoria de Processos</a>
          <a href="#" class="evento-see">Leia +</a>
        </div>
        <div class="evento-item">
          <div class="evento-header">
            <span class="evento-date">
              <img class="evento-calendar" src="./images/icons/calendario.svg" alt="">
              20/09 a 23/09
            </span>
            <span class="evento-time">
              <img class="evento-clock" src="./images/icons/relogio.svg" alt="">
              19h às 21h30
            </span>
          </div>
          <a href="#" class="evento-link">Curso Online ABTG - White Belt para Melhoria de Processos</a>
          <a href="#" class="evento-see">Leia +</a>
        </div>
      </div>
    </section>
    <section class="tv wrapper">
      <h2 class="tv-title">TV ABIGRAF</h2>
      <p class="tv-text">Veja todas ações das nossas entidades como depoimentos, opiniões, eventos, treinamentos e palestras.</p>
      <div class="tv-video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/DbrSs5-Cutc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </section>
    <section class="boxes-container wrapper">
      <div class="box-global">
        <div class="boxes" style="background: repeating-linear-gradient(45deg, #0A023D, transparent), repeating-linear-gradient(225deg, #0A023D, transparent), url(./images/home/box-img-first.png);">
          <p class="box-title">Serviços</p>
          <p class="box-text">Emissão de Guia Sindical / Assistencial</p>
          <p class="box-parag">Emita aqui seu Guia de Contribuição</p>
        </div>
        <div class="boxes" style="background: repeating-linear-gradient(45deg, #0A023D, transparent), repeating-linear-gradient(225deg, #0A023D, transparent), url(./images/home/notebook.png);">
          <p class="box-title">Serviços</p>
          <p class="box-text">Pesquisa de salários e benefícios</p>
          <p class="box-parag">Saiba mais sobre o mercado gráfico</p>
        </div>
        <div class="boxes" style="background: repeating-linear-gradient(45deg, #0A023D, transparent), repeating-linear-gradient(225deg, #0A023D, transparent), url(./images/home/pessoas-caneta.png);">
          <p class="box-title">Serviços</p>
          <p class="box-text">Negociação Coletiva de Trabalho</p>
          <p class="box-parag">Saiba mais sobre negociações de trabalho 2021</p>
        </div>
        <div class="boxes" style="background: repeating-linear-gradient(45deg, #0A023D, transparent), repeating-linear-gradient(225deg, #0A023D, transparent), url(./images/home/camera.png);">
          <p class="box-title">Serviços</p>
          <p class="box-text">Galeria de Fotos</p>
          <p class="box-parag">Confira as fotos dos nossos eventos</p>
        </div>
        <div class="boxes" style="background: repeating-linear-gradient(45deg, #0A023D, transparent), repeating-linear-gradient(225deg, #0A023D, transparent), url(./images/home/graficos.png);">
          <p class="box-title">Serviços</p>
          <p class="box-text">Dados Econômicos</p>
          <p class="box-parag">Conteúdo exclusivo para associados</p>
        </div>
        <div class="boxes" style="background: repeating-linear-gradient(45deg, #0A023D, transparent), repeating-linear-gradient(225deg, #0A023D, transparent), url(./images/home/copagrem.png);">
          <p class="box-title">Serviços</p>
          <p class="box-text">Copagrem</p>
          <p class="box-parag">Comitê da Cadeia Produtiva de Papel, Gráfica e Embalagem </p>
        </div>
      </div>

      <div class="boxes-pdf">
        <div class="box-pdf-item" style="background-image: url('./images/home/banner-abertura.png');">
          <p class="box-pdf-text">Guia de Abertura de Empresas</p>
          <a href="#" class="box-pdf-link">Baixe aqui o PDF</a>
        </div>
        <div class="box-pdf-item" style="background-image: linear-gradient(180deg, #7B2E9F, transparent), url(./images/home/banner-papel.png);">
          <p class="box-pdf-text">Guia do Papel Imune</p>
          <a href="#" class="box-pdf-link">Baixe aqui o PDF</a>
        </div>
      </div>
    </section>
    <section class="parceiros wrapper">
      <h2 class="parceiros-title">parceiros</h2>
      <figure class="parceiros-box">
        <img src="./images/home/parceiros.png" class="parceiros-image">
      </figure>
    </section>
  </main>
<?php get_footer(); ?>