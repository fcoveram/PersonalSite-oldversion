<?php
/**
 * The template for displaying portfolio archive pages
 *
 * @package Portafolio_Francisco_Vera
 */

get_header(); ?>
<section class="header-post">
	<div class="row">
		<div class="medium-10 medium-offset-1 large-12 large-offset-0 columns">
			<h1><?php _ex('Trabajos', 'título del archivo de trabajos', 'chopan'); ?></h1>
		</div>
	</div>
</section>

<div class="background">
	<div class="works index">
		<div class="row border-bottom padding-section">
			<div class="medium-10 medium-offset-1 large-12 large-offset-0">
			<?php
				while ( have_posts() ) : the_post();
					get_template_part('template-parts/post-work');
				endwhile;
			?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
