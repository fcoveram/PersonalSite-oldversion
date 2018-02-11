<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Portafolio_Francisco_Vera
 */
the_post();
get_header(); ?>

<header class="row header-post">
  <div class="medium-10 medium-offset-1 large-10 large-centered columns">
    <h1><?php the_title(); ?></h1>
    <time><?php the_time('d \d\e F, Y'); ?></time>
  </div>
</header>

<section class="row content-post">
	<div class="medium-10 medium-offset-1 large-10 large-centered columns">
		<?php the_content(); ?>
	</div>
</section>
<?php if ( get_field('referencias') ) : ?>
<section class="row references-post border-top">
	<div class="medium-10 medium-offset-1 large-10 large-centered columns">
		<h4>Referencias</h4>
		<?php the_field('referencias'); ?>
	</div>
</section>
<?php endif; ?>
<?php get_footer(); ?>
