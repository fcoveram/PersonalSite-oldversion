<?php get_header(); ?>
<?php
// setear el post que se ve en la página de inicio
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<aside class="row">
	<div class="medium-10 medium-offset-1 large-8 large-offset-0 columns">
		<div class="personal-info">
			<h1><?php the_title(); ?></h1>
			<span><?php echo get_bloginfo('description'); ?></span>
			<?php the_content(); ?>
		</div>
	</div>
</aside>
<?php endwhile; endif; ?>
<div class="background">
	<?php
		$writings = new WP_Query([
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'posts_per_page' => 100,
		]);
		if ( $writings->have_posts() ) :
	?>
	<aside class="writings">
		<div class="row">
			<div class="medium-10 medium-centered large-12 columns">
				<div class="title-section">
					<h3>Escritos</h3>
				</div>
			</div>
		</div>
		<div class="row border-bottom">
			<div class="medium-10 medium-offset-1 large-12 large-offset-0 large-up-2">
				<?php while ( $writings->have_posts() ) : $writings->the_post(); ?>
					<?php get_template_part('template-parts/post', 'writing'); ?>
				<?php endwhile; ?>
			</div>
		</div>
	</aside> <!-- end of writings -->
	<?php endif; ?>
	<?php
		$works = new WP_Query([
			'post_type'      => 'jetpack-portfolio',
			'orderby'        => 'menu_order',
			'order'          => 'ASC',
			'posts_per_page' => 900,
			'post_status'    => 'publish'
		]);
		if ( $works->have_posts() ) :
	?>
	<aside class="works">
		<div class="row">
			<div class="medium-10 medium-centered large-12 columns">
				<div class="title-section">
					<h3>Trabajos</h3>
				</div>
			</div>
		</div>
		<div class="row border-bottom">
			<div class="medium-10 medium-offset-1 large-12 large-offset-0 large-up-2">
				<?php while ( $works->have_posts() ) : $works->the_post(); ?>
					<?php get_template_part('template-parts/post', 'work'); ?>
				<?php endwhile; ?>
			</div>
		</div>
	</aside> <!-- end of works -->
	<?php endif; ?>
<?php get_footer(); ?>
