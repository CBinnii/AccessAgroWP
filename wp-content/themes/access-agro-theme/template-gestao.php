<?php 
    /**
     * Template Name: Página Gestão e Estratégia de Negócios
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

	<div class='page_title'>Gestão e <b>Estratégia de Negócios</b></div>

	<!-- GESTÃO E ESTRATÉGIA DE NEGÓCIO -->
	<div class='gestao_estrategia'>
		
		<?php
			$catBody = get_category_by_slug('gestao-e-estrategia'); 
			$args = array(
				'post_type' => 'post',
				'status' => 'publish',
				'showposts' => -1,
				'cat' => $catBody->term_id,
				'orderby' => 'date',
				'order' => 'ASC'
			);

			$more = new WP_Query( $args );

			if (!empty($more->posts)):
				foreach ( $more->posts as $post ): ?>
					<a href="<?php echo $post->post_name; ?>" class='gestao_estrategia_box'>
						<div class='gestao_estrategia_img' style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>')"></div>
						<div class='gestao_estrategia_txt'>
							<h1><?php echo get_the_title($post->ID); ?></h1>
							<?php echo get_the_excerpt($post->ID); ?>
						</div>
					</a>
				<?php endforeach;
			endif;
		wp_reset_query(); ?>
	</div>
<?php
	get_footer();
?>