<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gourmet_Artist
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area medium-4 columns" role="complementary">

	<!-- Imagen del Newsletter -->
	<div class="row">
		<div class="medium-12 columns">
			<a data-open="newsletter">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/newsletter.jpg" alt="Suscribete al Newsletter">
			</a>
		</div>
	</div>

	<!-- "LightBox/Reveal" del Newsletter -->
	<div id="newsletter" class="reveal" data-reveal>
		<h1>Hola desde Reveal!</h1>
	</div>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
