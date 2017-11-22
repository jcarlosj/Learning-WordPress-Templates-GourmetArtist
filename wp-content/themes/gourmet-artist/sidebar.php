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
	<div class="row">
		<div class="medium-12 columns">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/newsletter.jpg" alt="Suscribete al Newsletter">
		</div>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
