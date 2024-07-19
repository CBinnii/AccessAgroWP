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

    <div class="single">
        <div class="container">
            <?php echo apply_filters('the_content', $post->post_content); ?>
        </div>
    </div>

<?php
	get_footer();
?>