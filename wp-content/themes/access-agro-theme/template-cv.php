<?php 
    /**
     * Template Name: Template Curriculo
     *
     **/
	get_header('cv');
?>

	<div class="template-cv">
		<div class="container">
			<?php echo apply_filters('the_content', $post->post_content); ?>
		</div>
	</div>

<?php
	get_footer('cv');
?>