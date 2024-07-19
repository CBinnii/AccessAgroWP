<?php 
    /**
     * Template Name: Página Inicial
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

	<!-- PLAIN TEXT -->
	<div class='page_title'><b>Nosso</b> objetivo</div>
	<div class='plain_text home_intro'>
		<?php echo apply_filters('the_content', $post->post_content); ?>
	</div>

	<!-- ILLUSTRATIONS -->
	<div class='illustrations'>
		<div class='home_left'>
			<div class='home_left_strip'></div>
			<div class='home_left_ilustration'></div>
			<div class='home_left_text'>
				<h1>Gestão e estratégia de negócios</h1>
				Consultoria em estratégia e gestão de marketing e vendas na indústria de insumos agrícolas, visando o
				incremento da competitividade dos negócios e melhoria nos resultados
			</div>
		</div>
		<div class='home_right'>
			<div class='home_right_strip'></div>
			<div class='home_right_ilustration'></div>
			<div class='home_right_text'>
				<h1>Desenvolvimento profissional</h1>
				Realização de treinamentos customizados para gestores e força de vendas,  de acordo com a visão
				estratégica da indústria,  distribuidores e clientes.
			</div>
		</div>
	</div>

	<!-- TITLE -->
	<div class='page_title'>Gestão e <b>estratégica de negócios</b></div>

	<!-- HOME CAROUSEL -->
	<div class='home_carousel_window' id='home_carousel_window'>
		<div class='link_image home_arrow home_arrow_left' onclick='set_previous_solution()'></div>
		<div class='link_image home_arrow home_arrow_right' onclick='set_next_solution()'></div>
	</div>
	<div class='dark_green_button' onclick="window.location.href='gestao-e-estrategia-de-negocios'">Conheça todas as soluções</div>

	<!-- HOME DESENVOLVIMENTO PROFISSIONAL -->
	<div class='home_desenvolvimento_profissional'>
		<div class='page_title home_title'>Desenvolvimento <b>profissional</b></div>
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
		<div class='home_board'>
			<div class='professional_container'>
				<div class='professional_block'>
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
			<div class='green_button' onclick="window.location.href='desenvolvimento-profissional'">saiba mais</div>
		</div>
	</div>

	<!-- TITLE -->
	<div class='page_title'>Conheça nosso<br><b>Portfólio de cases de sucesso</b></div>
	<div class="section-portfolio">
		<div class="container">
			<div class="box-what-portfolio">
				<div class="swiper swiper-portfolio">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="box-portfolio">
								<p>Treinamento da política de acesso ao mercado ao time de negócios, assegurando engajamento pleno e confiança com as normas e procedimentos</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="box-portfolio">
								<p>Construção e validação de programas de relacionamento para distribuidores e cooperativa, incrementando agilidade e assertividade no uso dos recursos</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="box-portfolio">
								<p>Treinamento da Força de vendas na busca de um atendimento mais profissional</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="box-portfolio">
								<p>Pesquisa de satisfação da equipe de vendas diretamente com os produtores, melhorando a percepção da empresa quanto ao perfil e qualidade técnica do seu time</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="box-portfolio">
								<p>Criação e implementação de planos de negócios individuais com parceiros comerciais, proporcionando uma relação mais sólida e longeva</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="box-portfolio">
								<p>Planejamento estratégico para os próximos 3 anos, identificando as diretrizes prioritárias de recursos e investimentos</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="box-portfolio">
								<p>Dimensionamento da força de vendas, ajustando o modelo comercial, o tamanho do território, seu ponto de equilíbrio e o perfil adequado dos vendedores em relação a cada território</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="box-portfolio">
								<p>Discussão e implementação de melhorias na afetividade da força de vendas, preparando-os para uma nova fase de inovação</p>
							</div>
						</div>
					</div>
				</div>

				<div class="swiper-pagination swiper-pagination-slider-portfolio"></div>
			</div>
		</div>
	</div>

	<?php 
		$images = get_field('clientes');
		$size = 'full';

		if( $images ):
	?>
		<div class="section-clients">
			<div class="clients">
				<!-- Swiper -->
				<div class="clients-bg">
					<div class="container">
						<div class="swiper swiper-clients">
							<div class="swiper-wrapper">
								<?php foreach( $images as $image_id ): ?>
									<div class="swiper-slide">
										<img src="<?php echo $image_id; ?>" alt="Cliente cotram">
									</div>
								<?php endforeach; ?>
							</div>
							<div class="swiper-button-next swiper-button-next-clients"></div>
							<div class="swiper-button-prev swiper-button-prev-clients"></div>
						</div>
					</div>
				</div>

				<div class="swiper-pagination swiper-pagination-slider-clients"></div>
			</div>
		</div>
	<?php endif; ?>

<?php
	get_footer();
?>