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

    <!-- CONTATO -->
    <div class='contato_container contato_container_on_page'>
        <div class='contato_image'></div>
        <div class='page_title title_white'>Entre em <b>Contato</b></div>
        <div class='contato_form_container contato_form_on_page'>
            <div class='contato_header'><b>Qual seu objetivo?</b><br>Conte-nos como podemos lhe ajudar!</div>
            <div class='contato_form'>
                <!-- <?php echo do_shortcode( '[contact-form-7 id="88f746d" title="Formulário de Contato"]' ); ?> -->
                <?php echo do_shortcode( '[contact-form-7 id="6fbce97" title="Formulário de contato"]' ); ?>
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