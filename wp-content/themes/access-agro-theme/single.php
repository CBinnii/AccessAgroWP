<?php 
	get_header();

    $categories = get_the_category();
?>
    <?php if (has_post_thumbnail( $post->ID ) ) { ?>
        <div class="slider">
            <div class="banner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>);"></div>
        </div>
    <?php } ?>

    <div class="section blog blog-single">
        <div class="container">
            <h1 class="title-single"><?php echo get_the_title(); ?></h1>

            <?php echo apply_filters('the_content', $post->post_content); ?>
        </div>
    </div>

<?php
	get_footer();
?>