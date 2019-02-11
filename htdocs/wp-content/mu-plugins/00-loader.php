<?php
/**
 * Plugin Name: Library loader
 * Description: Loads Composer autoloader and Queulat
 */

if ( is_readable( ABSPATH .'/../vendor/autoload.php' ) ) {
	require_once ABSPATH .'/../vendor/autoload.php';
}

if ( is_readable( __DIR__ .'/queulat/queulat.php' ) ) {
	require_once __DIR__ .'/queulat/queulat.php';
}

if ( is_readable( __DIR__ .'/bloom-ux-wp-helpers/bloom-ux-wp-helpers.php' ) ) {
	require_once __DIR__ .'/bloom-ux-wp-helpers/bloom-ux-wp-helpers.php';
}
