		<!-- CONTATO -->
		<div class='contato_container'>
			<div class='contato_image'></div>
			<div class='contato_form_container'>
				<div class='contato_header'><b>Qual seu objetivo?</b><br>Conte-nos como podemos lhe ajudar!</div>
				<div class='contato_form'>
					<!-- <?php echo do_shortcode( '[contact-form-7 id="88f746d" title="Formulário de Contato"]' ); ?> -->
					<?php echo do_shortcode( '[contact-form-7 id="6fbce97" title="Formulário de contato"]' ); ?>
				</div>
			</div>
		</div>
		<script>
			document.getElementById('contact-form').addEventListener('submit', function (e) {
				e.preventDefault();
				var formData = new FormData(this);
				fetch('send_contact.php', {
					method: 'POST',
					body: formData,
				})
					.then(response => response.text())
					.then(data => {
						if (data === 'success') {
							alert('Mensagem enviada.');
						} else {
							alert('Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente.' + data);
						}
					})
					.catch(error => {
						console.error('Error:', error);
						alert('Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente.');
					});
			});
		</script>

		<!-- FOOTER -->
		<div class='footer_background'>
			<div class='link_image up_arrow' onclick="window.scrollTo({top: 0, behavior: 'smooth'});"></div>
			<div class='footer_container'>
				<div class='footer_logo'></div>
				<hr>
				<div class='footer_bar'>
					<div class='footer_links'>
						<h1>Legal</h1>
						<span class='link_text' onclick="window.open('politica-de-privacidade')">Preferências de Cookies</span>
						<br>
						<span class='link_text'>Notificações Legais</span>
					</div>
					<div class='footer_social_network'>
						<h1>Redes Sociais</h1>
						<span class='link_image linkedin'
							onclick="window.open('https://www.linkedin.com/in/guido-visintin-jr-19b75b27/')"></span>
						<span class='link_image instagram'
							onclick="window.open('https://www.instagram.com/accessagroconsultoria')"></span>
					</div>
					<div class='footer_contact_info'>
						<span class='link_text' onclick='window.open("mailto:guido.visintin@accessagro.com.br")'>
							guido.visintin@accessagro.com.br
						</span>
					</div>
				</div>
				<hr>
				<div class='copyright'>
					Copyright ©2024 Access Agro do Brasil Ltda.
				</div>
			</div>
		</div>

		<!-- WHATSAPP -->
		<div class='whatsapp' onclick='window.location.href="https://wa.me/5511992769598"'></div>
		<!-- Swiper JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
		<!-- App JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>
		
		<!-- Initialize Swiper -->
		<script>
			var swiper = new Swiper(".swiper-home", {
				pagination: {
					el: ".swiper-pagination-slider-home",
					clickable: true,
				},
				effect: "fade",
				autoplay: {
					delay: 5000,
					disableOnInteraction: true,
				},
			});

			var swiperDoing = new Swiper(".swiper-portfolio", {
				pagination: {
					el: ".swiper-pagination-slider-portfolio",
					clickable: true,
				},
				loop: true,
				slidesPerView: 3,
				spaceBetween: 30,
				breakpoints: {
					100: {
						slidesPerView: 1,
						spaceBetween: 30,
					},
					991: {
						slidesPerView: 3,
						spaceBetween: 30,
					},
				},
			});

			var swiperProjects = new Swiper(".swiper-clients", {
				spaceBetween: 50,
				navigation: {
					nextEl: ".swiper-button-next-clients",
					prevEl: ".swiper-button-prev-clients",
				},
				loop: true,
				breakpoints: {
					100: {
						spaceBetween: 30,
						slidesPerView: 1,
						grid: {
							rows: 2,
						},
					},
					991: {
						spaceBetween: 50,
						slidesPerView: 4,
						grid: {
							rows: 1,
						},
					},
				},
			});
		</script>

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
					text: 'Processo de visualização do ambiente competitivo para melhorar a gestão dos territórios de vendas e aumentar a participação de mercado',
				},
				{
					picture: 'ico_crm',
					caption: 'Estratégia de Gestão de Clientes e CRM',
					text: 'Sustentada pelos pilares - estratégia, processos e tecnologia, visa planejar e acionar o time de vendas na prospecção, desenvolvimento e retenção de clientes',
				},
				{
					picture: 'ico_relacionamento',
					caption: 'Programa de Relacionamento',
					text: 'Estimular os clientes a atingirem o orçamento e/ou recompra através de ambiente e regras atrativas e de resultados financeiros positivos',
				},
				{
					picture: 'ico_business_plan',
					caption: 'Criação e implantação de Business Plan',
					text: 'Desenvolvimento de plano de negócio, alinhado com a estratégia da empresa e suportado pelos pilares – diagnóstico, diretrizes, plano de ação e monitoramento',
				},
				{
					picture: 'ico_forca_vendas',
					caption: 'Dimensionar a Força de Vendas',
					text: 'Definir os critérios, a quantidade, modelo de atendimento, dimensionamento e o perfil adequado da FV para cada território',
				},
				{
					picture: 'ico_distribuicao',
					caption: 'Política de Distribuição',
					text: 'Desenvolvimento de políticas comerciais e de relacionamento com todas as rotas de acesso ao mercado',
				},
				{
					picture: 'ico_marketing',
					caption: 'Plano de Marketing',
					text: 'Guia prático, levando em consideração a realidade da empresa, que consiste em desenvolver estratégias e ações para atingir os objetivos de negócios',
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

	</body>

</html>