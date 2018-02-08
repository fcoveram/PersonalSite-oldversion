<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portafolio_Francisco_Vera
 */

?>
<footer class="row medium-10 medium-centered main-footer">
	<div class="large-6 small-3 columns">
		<a class="float-left contact" href="mailto:<?php echo antispambot( get_bloginfo('admin_email') ); ?>">Contacto</a>
	</div>
	<div class="large-6 small-9 columns">
		<?php wp_nav_menu([
			'theme_location' => 'footer-external',
			'container'      => null,
			'fallback_cb'    => null,
			'depth'          => 1
		]); ?>
	</div>
</footer>
<?php if ( is_front_page() ) : ?>
</div> <!-- end of gray background -->
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
