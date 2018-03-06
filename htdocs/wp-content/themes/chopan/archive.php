<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portafolio_Francisco_Vera
 */

get_header(); ?>
<section class="header-post">
	<div class="row">
		<div class="medium-10 medium-offset-1 large-12 large-offset-0 columns">
			<h1><?php the_archive_title(); ?></h1>
		</div>
	</div>
</section>

<div class="background">
	<div class="writings index">
		<div class="row border-bottom padding-section">
			<div class="medium-10 medium-offset-1 large-12 large-offset-0">
			<?php
				while ( have_posts() ) : the_post();
					get_template_part('template-parts/post-writing');
				endwhile;
			?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
