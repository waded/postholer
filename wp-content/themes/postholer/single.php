<?php
get_header();
while ( have_posts() ) : the_post(); ?>
	<h2><? the_title() ?></h2>
	<div><? the_content('') ?></div>	
	<div><?php previous_post_link('Previous: %link'); ?></div>
endwhile;
get_footer();
?>