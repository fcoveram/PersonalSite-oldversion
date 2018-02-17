<div class="column column-block writing-post">
	<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
	<?php the_excerpt(); ?>
	<time><?php echo ucwords( get_the_time('F, Y') ); ?></time>
</div>
