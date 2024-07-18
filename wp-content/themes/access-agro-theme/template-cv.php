<?php 
    /**
     * Template Name: Template Curriculo
     *
     **/
	get_header();
?>

	<div class="container">
		<?php echo apply_filters('the_content', $post->post_content); ?>
	</div>

<?php
	get_footer('cv');
?>