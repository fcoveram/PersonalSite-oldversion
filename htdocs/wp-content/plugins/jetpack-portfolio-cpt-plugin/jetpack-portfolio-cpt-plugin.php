<?php
/**
 * Plugin Name: Portfolio Custom Post Type Plugin
 * Plugin URI:
 * Description: Works
 * Version: 0.1.0
 * Author:
 * Author URI:
 * License: GPL-3.0-or-later
 */

register_activation_hook( __FILE__, function(){
	require_once __DIR__ .'/class-jetpack-portfolio-post-type.php';
	Jetpack_Portfolio_Post_Type::activate_plugin();
});

add_action('plugins_loaded', function(){
	require_once __DIR__ .'/class-jetpack-portfolio-post-type.php';
	require_once __DIR__ .'/class-jetpack-portfolio-post-query.php';
	require_once __DIR__ .'/class-jetpack-portfolio-post-object.php';
	require_once __DIR__ .'/class-jetpack-portfolio-metabox.php';

	$metabox = new Jetpack_Portfolio_Metabox( 'portfolio', 'Información del proyecto', 'jetpack-portfolio' );
});

add_action('init', ['Jetpack_Portfolio_Post_Type', 'register_post_type']);
