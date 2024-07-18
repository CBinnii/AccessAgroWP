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
				},
			});

			var swiperProjects = new Swiper(".swiper-clients", {
				spaceBetween: 30,
				pagination: {
					el: ".swiper-pagination-slider-clients",
					clickable: true
				},
				navigation: {
					nextEl: ".swiper-button-next-clients",
					prevEl: ".swiper-button-prev-clients",
				},
				breakpoints: {
					100: {
						slidesPerView: 1,
						grid: {
							rows: 2,
						},
					},
					991: {
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