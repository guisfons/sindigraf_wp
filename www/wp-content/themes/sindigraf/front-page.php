<?php
get_header();
?>
<main>
	<section class="main-slider wrapper-slider">
		<?php if (have_rows('slider')) : ?>
			<?php while (have_rows('slider')) : the_row();
				$image = get_sub_field('slide');
				$link = get_sub_field('link');
			?>
				<a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
					<img class="slider-item" src="<?php echo $image; ?>" alt="">
				</a>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>
	<section class="associe wrapper">
		<?php
			$associe = get_field('associe-se');
			if ($associe) : ?>
			<h2 class="associe-title"><?php echo get_field('associe-se_titulo'); ?></h2>
			<p class="associe-text"><?php echo get_field('associe-se_descricao'); ?></p>
			
			<div class="associe-cards">
				<?php
					$associe_card = get_field('associe-se_card_1');
					if ($associe_card) : ?>
						<div class="associe-cards-box">
							<div class="associe-cards-images">
								<img src="<?php echo get_field('associe-se_card_1_imagem_de_fundo'); ?>" alt="" class="associe-bg-image">
								<img src="<?php echo get_field('associe-se_card_1_logo'); ?>" alt="" class="associe-img-logo">
							</div>
							<div class="associe-card-text">
								<a href="#" class="associe-card-parag">Conheça o Guia de Benefícios</a>
							</div>
						</div>
					<?php endif; ?>
				<?php
					$associe_card2 = get_field('associe-se_card_2');
					if ($associe_card2) : ?>
						<div class="associe-cards-box">
							<div class="associe-cards-images">
								<img src="<?php echo get_field('associe-se_card_2_imagem_de_fundo'); ?>" alt="" class="associe-bg-image">
								<img src="<?php echo get_field('associe-se_card_2_logo'); ?>" alt="" class="associe-img-logo">
							</div>
							<div class="associe-card-text">
								<a href="#" class="associe-card-parag">Conheça o Guia de Benefícios</a>
							</div>
						</div>
					<?php endif; ?>
			</div>
		<?php endif; ?>
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
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/curriculum.svg" alt="" class="banco-emp-icon">
			</figure>
			<p class="banco-emp-type">SOU CANDIDATO</p>
			<p class="banco-emp-login">Faça seu login e confira as oportunidades.</p>
			<a href="#" class="banco-emp-search">Buscar por vagas</a>
			<p class="banco-emp-sing-up">Não tem cadastro? Clique aqui e faça agora.</p>
		</div>
		<div class="banco-emp-box banco-emp-right">
			<h3 class="banco-emp-title">BANCO DE EMPREGOS</h3>
			<figure class="banco-emp-icon-box">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/bag.svg" alt="" class="banco-emp-icon">
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
						<img class="evento-calendar" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendario.svg" alt="">
						20/09 a 23/09
					</span>
					<span class="evento-time">
						<img class="evento-clock" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/relogio.svg" alt="">
						19h às 21h30
					</span>
				</div>
				<a href="#" class="evento-link">Curso Online ABTG - White Belt para Melhoria de Processos</a>
				<a href="#" class="evento-see">Leia +</a>
			</div>
			<div class="evento-item">
				<div class="evento-header">
					<span class="evento-date">
						<img class="evento-calendar" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendario.svg" alt="">
						20/09 a 23/09
					</span>
					<span class="evento-time">
						<img class="evento-clock" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/relogio.svg" alt="">
						19h às 21h30
					</span>
				</div>
				<a href="#" class="evento-link">Curso Online ABTG - White Belt para Melhoria de Processos</a>
				<a href="#" class="evento-see">Leia +</a>
			</div>
			<div class="evento-item">
				<div class="evento-header">
					<span class="evento-date">
						<img class="evento-calendar" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendario.svg" alt="">
						20/09 a 23/09
					</span>
					<span class="evento-time">
						<img class="evento-clock" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/relogio.svg" alt="">
						19h às 21h30
					</span>
				</div>
				<a href="#" class="evento-link">Curso Online ABTG - White Belt para Melhoria de Processos</a>
				<a href="#" class="evento-see">Leia +</a>
			</div>
		</div>
	</section>
	<section class="tv wrapper">
		<?php
			$tv = get_field('tv_abigraf');
			if( $tv ): ?>
				<h2 class="tv-title"><?php echo get_field('tv_abigraf_titulo'); ?></h2>
				<p class="tv-text"><?php echo get_field('tv_abigraf_descricao'); ?></p>
				<div class="tv-video">
				<?php echo get_field('tv_abigraf_video'); ?>
				</div>
		<?php endif; ?>
	</section>
	<section class="boxes-container wrapper">
		<div class="box-global">
			<div class="boxes" style="background: repeating-linear-gradient(45deg, #0A023D, transparent), repeating-linear-gradient(225deg, #0A023D, transparent), url(<?php echo get_template_directory_uri(); ?>/assets/images/home/box-img-first.png);">
				<p class="box-title">Serviços</p>
				<p class="box-text">Emissão de Guia Sindical / Assistencial</p>
				<p class="box-parag">Emita aqui seu Guia de Contribuição</p>
			</div>
			<div class="boxes" style="background: repeating-linear-gradient(45deg, #0A023D, transparent), repeating-linear-gradient(225deg, #0A023D, transparent), url(<?php echo get_template_directory_uri(); ?>/assets/images/home/notebook.png);">
				<p class="box-title">Serviços</p>
				<p class="box-text">Pesquisa de salários e benefícios</p>
				<p class="box-parag">Saiba mais sobre o mercado gráfico</p>
			</div>
			<div class="boxes" style="background: repeating-linear-gradient(45deg, #0A023D, transparent), repeating-linear-gradient(225deg, #0A023D, transparent), url(<?php echo get_template_directory_uri(); ?>/assets/images/home/pessoas-caneta.png);">
				<p class="box-title">Serviços</p>
				<p class="box-text">Negociação Coletiva de Trabalho</p>
				<p class="box-parag">Saiba mais sobre negociações de trabalho 2021</p>
			</div>
			<div class="boxes" style="background: repeating-linear-gradient(45deg, #0A023D, transparent), repeating-linear-gradient(225deg, #0A023D, transparent), url(<?php echo get_template_directory_uri(); ?>/assets/images/home/camera.png);">
				<p class="box-title">Serviços</p>
				<p class="box-text">Galeria de Fotos</p>
				<p class="box-parag">Confira as fotos dos nossos eventos</p>
			</div>
			<div class="boxes" style="background: repeating-linear-gradient(45deg, #0A023D, transparent), repeating-linear-gradient(225deg, #0A023D, transparent), url(<?php echo get_template_directory_uri(); ?>/assets/images/home/graficos.png);">
				<p class="box-title">Serviços</p>
				<p class="box-text">Dados Econômicos</p>
				<p class="box-parag">Conteúdo exclusivo para associados</p>
			</div>
			<div class="boxes" style="background: repeating-linear-gradient(45deg, #0A023D, transparent), repeating-linear-gradient(225deg, #0A023D, transparent), url(<?php echo get_template_directory_uri(); ?>/assets/images/home/copagrem.png);">
				<p class="box-title">Serviços</p>
				<p class="box-text">Copagrem</p>
				<p class="box-parag">Comitê da Cadeia Produtiva de Papel, Gráfica e Embalagem </p>
			</div>
		</div>

		<div class="boxes-pdf">
			<div class="box-pdf-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home/banner-abertura.png');">
				<p class="box-pdf-text">Guia de Abertura de Empresas</p>
				<a href="#" class="box-pdf-link">Baixe aqui o PDF</a>
			</div>
			<div class="box-pdf-item" style="background-image: linear-gradient(180deg, #7B2E9F, transparent), url(<?php echo get_template_directory_uri(); ?>/assets/images/home/banner-papel.png);">
				<p class="box-pdf-text">Guia do Papel Imune</p>
				<a href="#" class="box-pdf-link">Baixe aqui o PDF</a>
			</div>
		</div>
	</section>
	<section class="parceiros wrapper">
		<h2 class="parceiros-title">parceiros</h2>
		<figure class="parceiros-box">
			<img src="<?php echo get_field('parceiros'); ?>" class="parceiros-image">
		</figure>
	</section>
</main>
<?php get_footer(); ?>