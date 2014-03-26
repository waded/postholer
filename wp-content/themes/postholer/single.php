<?php
get_header();
while ( have_posts() ) : the_post(); ?>
	<h1><? the_title() ?></h1>
	<div class="contentish"><? the_content('') ?></div>	
<? 
endwhile;
get_footer();
?>