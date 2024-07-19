<?php 
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
    
    <div class='page_title'>Nossos <b>Clientes</b></div>

	<?php 
		$images = get_field('clientes');
		$size = 'full';

		if( $images ):
	?>
        <!-- CLIENT LOGOS -->
        <div class='client_logos'>
            <?php foreach( $images as $image_id ): ?>
                <img src="<?php echo $image_id; ?>">
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- TITLE -->
    <div class='page_title'>Nossos <b>Parceiros</b></div>

    <!-- BOLD TEXT -->
    <div class='bold_text'>
        Alguns de nossos Parceiros que suportam o desenvolvimento e a implementação dos projetos junto aos Clientes.
    </div>

    <!-- PARTNERS -->
    <div class='parceiro_container'>
        <div class='parceiro_block'>
            <div class='parceiro_logo logo_crosara'></div>
            <div class='parceiro_text'>
                Vinhedos Office
                <br>Av. dos Vinhedos, 70 - Sala 1207
                <br>12º andar - Karaiba, Uberlândia - MG
                <br><br>
                <b><span class='parceiro_email' onclick='window.open("mailto:contato@crosaraconsultoria.com")'>contato@crosaraconsultoria.com</span></b>
            </div>
        </div>
        <hr>
        <div class='parceiro_block'>
            <div class='parceiro_logo logo_omnion'></div>
            <div class='parceiro_text'>
                Av. São Gualter, 596
                <br>Alto de Pinheiro, São Paulo
                <br><br>
                <b><span class='parceiro_email' onclick='window.open("mailto:contato@omnion.com.br")'>contato@omnion.com.br</span>
                <br>(11) 3304 2400</b>
            </div>
        </div>
        <hr>
        <div class='parceiro_block'>
            <div class='parceiro_logo logo_upper'></div>
            <div class='parceiro_text'>
                Rua César Gonçalves, 261 - Distrito Industrial - Barra Bonita, SP
                <br><br>
                <b><span class='parceiro_email' onclick='window.open("mailto:comercial@upper.net.br")'>comercial@upper.net.br</span>
                <br>+55 14 3604 8080</b>
            </div>
        </div>
    </div>

<?php
	get_footer();
?>