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
      		<a href="<?php echo site_url('/'); ?>">Inicio</a>
    	</div>
	  </div>
	<?php endif; ?>
	<!-- <div class="small-6 medium-5 large-6 large-offset-0 columns end">
		<div class="float-right lang-en">
      		<a href="#">English</a>
    	</div>
  	</div> -->
</nav>
