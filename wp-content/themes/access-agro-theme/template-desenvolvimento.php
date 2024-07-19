<?php 
    /**
     * Template Name: Página Desenvolvimento Profissional
     *
     **/
	get_header();
?>

	<?php if( have_rows('banner') ): ?>
		<div class="swiper swiper-home">
			<div class="swiper-wrapper">
				<?php
					while( have_rows('banner') ) : the_row();

					$imagem_banner = get_sub_field('imagem_banner');
					$texto_banner = get_sub_field('texto_banner');
				?>
					<div class="swiper-slide" style="background-image: url('<?php echo $imagem_banner; ?>')">
						<div class="container">
							<h1><?php echo $texto_banner; ?></h1>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="swiper-pagination swiper-pagination-slider-home"></div>
		</div>
	<?php endif; ?>
	
	<div class='page_title'>Desenvolvimento <b>profissional</b></div>

	<!-- HOME DESENVOLVIMENTO PROFISSIONAL -->
	<div class='home_desenvolvimento_profissional no_bg'>
		<div class='bold_text'>
			Os módulos de treinamento surgiram de uma demanda crescente por gestão e profissionalização, tais como:
			<ul>
				<li>Alto “turnover” das equipes de vendas</li>
				<li>Melhorar a eficiência e profissionalismo no atendimento</li>
				<li>Otimização do custo<br>operacional</li>
				<li>Aumentar a fidelização dos clientes</li>
			</ul>
		</div>
		<!-- TWO COLUMNS -->
		<div class='home_board no_bg'>
			<div class='professional_container no_bg'>
				<div class='professional_block no_bg'>
					<div class='professional_text'>
						<b>Conhecimento técnico de uma equipe de Alta Performance.</b>
						<br><br>
						Qual a melhor combinação para a sua equipe? Podemos personalizar o melhor plano de acordo com a
						sua necessidade e disponibilidade de tempo.
					</div>
					<div class='professional_jigsaw'></div>
				</div>
				<hr>
				<div class='professional_block'>
					<div class='professional_text'>
						<b>Indicadores de Performance</b>
						<br><br>
						A customização dos módulos acarretará na<br>definição das métricas a serem monitoradas.
					</div>
					<div class='indicadores_box'>
						<ul>
							<li>EVOLUÇÃO DAS RECEITAS</li>
							<li>EVOLUÇÃO DAS MARGENS</li>
							<li>Participação no cliente e no território</li>
							<li>EVOLUÇÃO DO Nº DE CLIENTES</li>
							<li>INDICE DE CHURN (PERDA DE CLIENTES)</li>
							<li>EXTRATO CLIENTES ABERTOS VS FECHADOS</li>
							<li>TICKET MÉDIO DOS CLIENTES (U$ e Nr PRODUTOS)</li>
							<li>INDICE DE RECOMPRA</li>
							<li>NPS - NET PROMOTE SCORE</li>
							<li>ACURÁCIA DOS PLANOS DE AÇÃO</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- PROFESSIONAL BANNER -->
	<div class='professional_banner'></div>

	<!-- TITLE -->
	<div class='page_title'>Técnicas e <b>Materiais de Engajamento</b></div>

	<!-- MATERIAIS DE ENGAJAMENTO -->
	<div class='materiais'>
		<div class='materiais_box'>
			<div class='materiais_img mat_quiz'></div>
			<div class='materiais_txt'>
				Quiz que tem como objetivo fazer uma avaliação dos conhecimentos 
			</div>
		</div>
		<div class='materiais_box'>
			<div class='materiais_img mat_jogos'></div>
			<div class='materiais_txt'>
				Jogos interativos para facilitar a absorção e engajamento dos participantes
			</div>
		</div>
		<div class='materiais_box'>
			<div class='materiais_img mat_videos'></div>
			<div class='materiais_txt'>
				Videos para apresentar e/ou reforçar conteúdo de forma mais didática e confortável para o participantes
			</div>
		</div>
		<div class='materiais_box'>
			<div class='materiais_img mat_testes'></div>
			<div class='materiais_txt'>
				Testes com perguntas antes e depois do treinamento para avaliar o % de absorção de contéudo
			</div>
		</div>
		<div class='materiais_box'>
			<div class='materiais_img mat_roleta'></div>
			<div class='materiais_txt'>
				Roleta do Aprendizado – Sorteio de participantes para fazer um resumo do conteúdo
			</div>
		</div>
		<div class='materiais_box'>
			<div class='materiais_img mat_dinamicas'></div>
			<div class='materiais_txt'>
				Dinâmicas de grupos para estimular a integração e a busca por soluções
			</div>
		</div>
	</div>

<?php
	get_footer();
?>