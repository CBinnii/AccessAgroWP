<?php 
	get_header();
?>

	<!-- Swiper -->
	<div class="swiper swiper-home">
		<div class="swiper-wrapper">
			<div class="swiper-slide" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/title_banner_1.png')">
				<div class="container">
					<h1>Consultoria em gestão <br>e treinamento para o agronegócio</h1>
				</div>
			</div>
			<div class="swiper-slide" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/title_banner_2.png')">
				<div class="container">
					<h1>Soluções customizadas para seu negócio</h1>
				</div>
			</div>
			<div class="swiper-slide" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/title_banner_6.png')">
				<div class="container">
					<h1>Foco na simplicidade e funcionalidade dos projetos</h1>
				</div>
			</div>
			<div class="swiper-slide" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/title_banner_3.png')">
				<div class="container">
					<h1>Compromisso com prazos e suporte total aos clientes</h1>
				</div>
			</div>
		</div>
		<div class="swiper-pagination swiper-pagination-slider-home"></div>
	</div>

	<!-- PLAIN TEXT -->
	<div class='page_title'><b>Nosso</b> objetivo</div>
	<div class='plain_text home_intro'>
		É auxiliar empresas na construção e implementação de projetos estratégicos nas áreas de marketing
		e vendas, acesso ao mercado, programas de relacionamento, planos de negócios e treinamentos.
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
	<div class='dark_green_button' onclick="window.location.href='gestao_e_estrategia.html'">Conheça todas as soluções</div>

	<script>
		solutions = [
			{
				picture: 'ico_mercado',
				caption: 'Estratégia de Acesso ao Mercado',
				text: 'Entendimento e recomendações do melhor modelo de acesso e atividades agregadoras para aumento da penetração de mercado',
			},
			{
				picture: 'ico_territorio',
				caption: 'Gestão de Território',
				text: 'Processo de visualização do ambiente competitivo para melhorar a gestão dos territórios de vendas e aumentar o MS%',
			},
			{
				picture: 'ico_crm',
				caption: 'Estratégia de Gestão de Clientes e CRM',
				text: 'Sustentada pelos pilares  -  estratégia, processos e tecnologia, visa planejar e acionar o time de vendas na  prospecção, desenvolvimento e retenção de clientes',
			},
			{
				picture: 'ico_relacionamento',
				caption: 'Programa de Relacionamento',
				text: 'Estimular os clientes a atingirem o orçamento e/ou recompra através de ambiente e regras atrativas e de resultados financeiros positivos',
			},
			{
				picture: 'ico_business_plan',
				caption: 'Criação e implantação  de Business Plan',
				text: 'Desenvolvimento de plano de negócio, alinhado com a estratégia da empresa e suportado pelos pilares – diagnóstico, diretrizes, plano de ação e monitoramento',
			},
			{
				picture: 'ico_forca_vendas',
				caption: 'Dimensionar a Força de Vendas',
				text: 'Definir os critérios, a quantidade, modelo de atendimento,  dimensionamento  e o perfil adequado da FV para cada território',
			},
			{
				picture: 'ico_distribuicao',
				caption: 'Política de Distribuição',
				text: 'Desenvolvimento de políticas comerciais e de relacionamento com todas as rotas de acesso ao mercado',
			},
			{
				picture: 'ico_marketing',
				caption: 'Plano de Marketing',
				text: 'Guia prático, levando em consideração a realidade da empresa,  que consiste em desenvolver estratégias e ações  para atingir os objetivos de negócios',
			},
			{
				picture: 'ico_pesquisa_satisfacao',
				caption: 'Pesquisa de satisfação de clientes',
				text: 'Apoiar no desenvolvimento de pesquisas de satisfação junto aos clientes para avaliação da FV e outros públicos, através de plataforma e relatórios amigáveis',
			},
			{
				picture: 'ico_ideias',
				caption: 'Workshops, fóruns e geração de ideias',
				text: 'Método e ambiente de encorajamento de discussões estratégicas, identificação de oportunidades e desafios com público interno e/ou externo',
			},
		];
		solutions_array = [];
		for (let i in solutions) {
			card = solutions[i];
			div_card = document.createElement('div');
			div_card.className = 'home_card';
			img = document.createElement('div');
			img.className = 'gestao_estrategia_img';
			img.classList.add(card.picture);
			div_card.appendChild(img);
			txt = document.createElement('div');
			txt.className = 'gestao_estrategia_txt';
			txt.innerHTML = '<h1>' + card.caption + '</h1>' +
				card.text;
			div_card.appendChild(txt);
			solutions_array.push(div_card);
		}
		for (let i in solutions_array) {
			home_carousel_window.appendChild(solutions_array[i]);
		}
		cp = 0;
		lp = solutions_array.length;
		function set_next_solution() {
			cp = cp >= lp - 1 ? 0 : cp + 1;
			set_solution();
		}
		function set_previous_solution() {
			cp = cp <= 0 ? lp - 1 : cp - 1;
			set_solution();
		}
		home_classes = [
			'position_stage',
			'position_out_left',
			'position_out_right',
			'position_one',
			'position_two',
			'position_three',
			'position_four'
		];
		function set_solution() {
			[lll, ll, l, r, rr, rrr] = [
				cp,
				cp + 1 > lp - 1 ? cp + 1 - lp : cp + 1,
				cp + 2 > lp - 1 ? cp + 2 - lp : cp + 2,
				cp + 3 > lp - 1 ? cp + 3 - lp : cp + 3,
				cp + 4 > lp - 1 ? cp + 4 - lp : cp + 4,
				cp + 5 > lp - 1 ? cp + 5 - lp : cp + 5,
			];
			card_lll = solutions_array[lll];
			card_ll = solutions_array[ll];
			card_l = solutions_array[l];
			card_r = solutions_array[r];
			card_rr = solutions_array[rr];
			card_rrr = solutions_array[rrr];
			for (let h in home_classes) {
				card_lll.classList.remove(home_classes[h]);
				card_ll.classList.remove(home_classes[h]);
				card_l.classList.remove(home_classes[h]);
				card_r.classList.remove(home_classes[h]);
				card_rr.classList.remove(home_classes[h]);
				card_rrr.classList.remove(home_classes[h]);
			}
			card_lll.classList.add('position_out_left');
			card_ll.classList.add('position_stage');
			card_ll.classList.add('position_one');
			card_l.classList.add('position_stage');
			card_l.classList.add('position_two');
			card_r.classList.add('position_stage');
			card_r.classList.add('position_three');
			card_rr.classList.add('position_stage');
			card_rr.classList.add('position_four');
			card_rrr.classList.add('position_out_right')
		}
		set_solution();
	</script>

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
							<li>EVOLUÇÃO DO MS%, WS% e ACESSO%</li>
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
			<div class='green_button' onclick="window.location.href='desenvolvimento_profissional.html'">saiba mais</div>
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

	<div class="section-clients">
		<div class="clients">
			<!-- Swiper -->
			<div class="clients-bg">
				<div class="container">
					<div class="swiper swiper-clients">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_cotram.jpeg" alt="Clientes cotram">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_ourofino.png" alt="Clientes Ouro Fino">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_biotrop.png" alt="Clientes Biotrop">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_corus.png" alt="Clientes Corus">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_simbiose.png" alt="Clientes Simbiose">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_adama.svg" alt="Clientes A Dama">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_sumitomo-chemical.png" alt="Clientes Sumitomo Chemical">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_andav.svg" alt="Clientes Andav">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_bayer.svg" alt="Clientes Bayer">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_massari.png" alt="Clientes Massari">
							</div>
						</div>
						<div class="swiper-button-next swiper-button-next-clients"></div>
						<div class="swiper-button-prev swiper-button-prev-clients"></div>
					</div>
				</div>
			</div>

			<div class="swiper-pagination swiper-pagination-slider-clients"></div>
		</div>
	</div>

<?php
	get_footer();
?>