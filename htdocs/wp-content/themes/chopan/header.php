<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portafolio_Francisco_Vera
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="row main-nav">
	<?php if ( ! is_front_page() ) : ?>
	<div class="small-6 medium-5 medium-offset-1 large-6 large-offset-0 columns">
    	<div class="float-left btn-back">
      		<a href="<?php echo site_url('/'); ?>"><?php _ex('Inicio', 'link a página inicio', 'chopan'); ?></a>
    	</div>
	  </div>
	<?php endif; ?>
	<?php if ( function_exists('pll_the_languages') ) : ?>
	<div class="small-6 medium-5 large-6 columns end<?php echo is_front_page() ? ' small-offset-6' : 'large-offset-0'; ?>">
		<div class="float-right lang-en">
			<?php wp_nav_menu([
				'theme_location' => 'header-aux',
				'container' => null,
				'fallback_cb' => null,
			]); ?>
    	</div>
  	</div>
	<?php endif; ?>
</nav>
