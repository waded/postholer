<?php
get_header();
while ( have_posts() ) : the_post(); ?>
	<h2><? the_title() ?></h2>
	<div><? the_content('') ?></div>	

	<?php $next_post = get_next_post();
	if (!empty( $next_post )): ?>
  		<a href="<?php echo get_permalink($next_post->ID);?>">
  			<?php echo $next_post->post_title;?>
  		</a>
	<?php endif;

endwhile;
get_footer();
?>