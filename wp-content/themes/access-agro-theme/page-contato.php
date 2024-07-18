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

    <!-- CONTATO -->
    <div class='contato_container contato_container_on_page'>
        <div class='contato_image'></div>
        <div class='page_title title_white'>Entre em <b>Contato</b></div>
        <div class='contato_form_container contato_form_on_page'>
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
    document.getElementById('contact-form').addEventListener('submit', function(e) {
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
                alert('Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente.');
            }
        })
    .catch(error => {
            console.error('Error:', error);
                    alert('Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente.');
        });
    });
    </script>

<?php
	get_footer('contato');
?>