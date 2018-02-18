<?php
/**
 * The template for displaying all single portfolio projects
 *
 *
 * @package Portafolio_Francisco_Vera
 */
the_post();
get_header(); ?>

<header class="header-post">
	<div class="row">
  		<div class="medium-10 medium-offset-1 large-12 large-offset-0 columns">
    		<h1><?php the_title(); ?></h1>
  		</div>
	</div>
	<div class="row">
    	<section class="info-work">
      		<div class="small-12 medium-10 medium-offset-1 large-4 large-offset-0 columns">
        		<ul class="description">
				<?php if ( ! empty( get_field('cliente') ) ) : ?>
					<?php if ( filter_var( get_field('cliente')['url'], FILTER_VALIDATE_URL ) ) : ?>
						<li><a href="<?php echo esc_url( get_field('cliente')['url'] ); ?>"><?php echo get_field('cliente')['nombre']; ?></a></li>
					<?php else : ?>
						<li><?php echo get_field('cliente')['nombre']; ?></li>
					<?php endif; ?>
				<?php endif; ?>
				<?php if ( ! empty( get_field('fecha') ) ) : ?>
					<li><?php echo ucwords( date_i18n( 'F, Y', DateTime::createFromFormat('d/m/Y', get_field('fecha') )->format('U') ) ); ?></li>
				<?php endif; ?>
        		</ul>
				<?php if ( get_field('hecho_con') ) : ?>
        		<aside class="partners">
					<h3><?php _ex('Equipo', 'info trabajo portafolio', 'chopan'); ?></h3>
					<span class="made-with"><h4><?php the_field('hecho_con') ;?></h4></span>
					<?php endif; ?>
					<?php if ( get_field('equipo') ) : ?>
					<ul>
						<?php foreach ( get_field('equipo') as $team ) : ?>
							<?php if ( filter_var( $team['enlace'], FILTER_VALIDATE_URL ) ) : ?>
								<li><a href="<?php echo esc_url( $team['enlace'] ) ;?>"><?php echo $team['nombre'] ?></a></li>
							<?php else : ?>
								<li><?php echo $team['nombre'] ?></li>
							<?php endif; ?>
						<?php endforeach; ?>
					</ul>
        		</aside>
				<?php endif; ?>
      		</div>
      		<div class="small-12 medium-10 medium-offset-1 large-8 large-offset-0 columns end">
				<?php chopan_portfolio_content( ); ?>
      		</div>
    	</section>
	</div>
</header>

<section class="row content-post">
	<div class="medium-10 medium-offset-1 large-12 large-offset-0 columns">
		<div class="post-work__second-half">
			<?php chopan_portfolio_content( 1 ); ?>
		</div>
  	</div>
</section>

<?php get_footer(); ?>
