		<!-- CONTATO -->
		<div class='contato_container'>
			<div class='contato_image'></div>
			<div class='contato_form_container'>
				<div class='contato_header'><b>Qual seu objetivo?</b><br>Conte-nos como podemos lhe ajudar!</div>
				<div class='contato_form'>
					<form id="contact-form" method="post" action="send_contact.php">
						<input type="text" id="nome" name="nome" autocomplete="name" placeholder="Nome*">
						<br>
						<input type="email" id="email" name="email" autocomplete="email" placeholder="E-mail*">
						<br>
						<input type="text" id="assunto" name="assunto" placeholder="Assunto*">
						<br>
						<textarea id="mensagem" name="mensagem" placeholder="Mensagem*"></textarea>
						<br>
						<input type="submit" value="Enviar">
					</form>
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
						<span class='link_text'>Preferências de Cookies</span>
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
	</body>

</html>