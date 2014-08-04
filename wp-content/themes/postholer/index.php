<?php
get_header();
while ( have_posts() ) : the_post(); ?>
	<div class="post index">
		<h2><? the_title() ?></h2>
		<div class="byline">
			<div class="author"><? the_author() ?></div>
			<div class="date"><? the_date() ?></div>
		</div>
		<div class="content"><? the_content('') ?></div>
		<div class="previous"><? previous_post_link('Previous: %link'); ?></div>
	</div>
<? 
endwhile;
get_footer();
?>