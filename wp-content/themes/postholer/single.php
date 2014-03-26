<?php
get_header();
while ( have_posts() ) : the_post(); ?>
	<h1><? the_title() ?></h1>
	<div><? the_content('') ?></div>	
<? 
endwhile;
get_footer();
?>