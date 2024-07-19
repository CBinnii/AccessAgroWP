<?php 
    /**
     * Template Name: Página Sobre Nós
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
	
	<div class='page_title'>Sobre a <b>Access Agro</b></div>

	<!-- PLAIN TEXT -->
	<div class='plain_text'>
		<?php echo apply_filters('the_content', $post->post_content); ?>
	</div>

	<!-- FULL BOX -->
	<div class='full_box'>
		<?php the_field('texto_sobre_nos'); ?>
	</div>

	<!-- SPLIT IMAGE -->
	<div class='split_image'>
		<div class='split_container'>
			<div class='split_image_text split_image_left'>
				<div class='section_title title_white'>Nossos <b>Diferenciais</b></div>
				<div class='plain_text left_align split_text text_white'>
					<?php the_field('texto_diferencial'); ?>
				</div>
			</div>
			<div class='split_image_img split_image_right' style="background-image: url('<?php the_field('imagem_diferencial'); ?>');"></div>
		</div>
	</div>

	<!-- PROPÓSITO -->
	<div class='proposito'>
		<div class='proposito_container'>
			<div class='section_title proposito_text text-center title_white'><b>PROPÓSITO</b></div>
			<div class='plain_text proposito_text text_white'>
				<?php the_field('texto_proposito'); ?>
			</div>
		</div>
	</div>

	<?php if( have_rows('consultores') ): ?>
		<!-- CONSULTORES -->
		<div class="page_title"><b>Consultores</b></div>
		<div class="facing_duo">
			<?php
				$count = 0;
				while( have_rows('consultores') ) : the_row();

				$foto = get_sub_field('foto');
				$nome = get_sub_field('nome');
				$link = get_sub_field('link');
				$dados = get_sub_field('dados');
			?>
				<div class="duo">
					<div class="duo_content">
						<div class="duo_picture" style="background-image: url('<?php echo $foto; ?>');"></div>
						<h1><?php echo $nome ?></h1>
						<?php echo $dados; ?>
					</div>
					<div class="green_button cv_button" onclick='window.open("<?php echo $link ?>")'>EXIBIR CV COMPLETO</div>
				</div>
			<?php endwhile;?>
		</div>
	<?php endif; ?>
<?php
	get_footer();
?>