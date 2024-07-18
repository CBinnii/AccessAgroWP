<?php 
	get_header();
?>

    <!-- Swiper -->
    <div class="swiper swiper-home">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/title_banner_1.png')">
                <div class="container">
                    <h1>CONSULTORIA EM GESTÃO <br>E TREINAMENTO PARA O AGRONEGÓCIO</h1>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/title_banner_2.png')">
                <div class="container">
                    <h1>CONSULTORIA EM GESTÃO <br>E TREINAMENTO PARA O AGRONEGÓCIO</h1>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/title_banner_6.png')">
                <div class="container">
                    <h1>CONSULTORIA EM GESTÃO <br>E TREINAMENTO PARA O AGRONEGÓCIO</h1>
                </div>
            </div>
            <div class="swiper-slide" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/title_banner_3.png')">
                <div class="container">
                    <h1>CONSULTORIA EM GESTÃO <br>E TREINAMENTO PARA O AGRONEGÓCIO</h1>
                </div>
            </div>
        </div>
        <div class="swiper-pagination swiper-pagination-slider-home"></div>
    </div>
    
    <div class='page_title'>Nossos <b>Clientes</b></div>

    <!-- CLIENT LOGOS -->
    <div class='client_logos'>
        <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_cotram.jpeg' />
        <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_ourofino.png' />
        <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_biotrop.png' />
        <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_corus.png' />
        <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_simbiose.png' />
        <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_adama.svg' />
        <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_sumitomo-chemical.png' />
        <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_andav.svg' />
        <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_bayer.svg' />
        <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/clientes_massari.png' />
    </div>

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