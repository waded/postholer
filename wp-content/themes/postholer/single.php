<?php get_header(); ?>
while ( have_posts() ) : the_post(); ?>
	<h2><? the_title() ?></h2>
	<div><? the_content('') ?></div>	
<? 
endwhile;
<?php get_footer(); ?>