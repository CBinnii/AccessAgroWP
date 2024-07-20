<?php 
	get_header();

    $categories = get_the_category();
?>

    <div class="single">
        <div class="container">
            <div class='page_title mt-0 mb-4'><b><?php echo get_the_title(); ?></b></div>

            <?php echo apply_filters('the_content', $post->post_content); ?>
        </div>
    </div>

<?php
	get_footer();
?>