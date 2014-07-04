<?php
get_header();
while ( have_posts() ) : the_post(); ?>
	<div class="post single">
		<h2><? the_title() ?></h2>
		<div class="content"><? the_content('') ?></div>	
		<div class="previous"><? previous_post_link('Previous: %link'); ?></div>
	</div>
<? 
endwhile;
get_footer();
?>