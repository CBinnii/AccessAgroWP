		<!-- FOOTER -->
		<div class='footer_background'>
			<div class='footer_container'>
				<div class='footer_logo'></div>
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