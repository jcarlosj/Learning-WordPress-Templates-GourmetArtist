<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gourmet_Artist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>

	<div class="medium-6 columns">
		<?php the_post_thumbnail( 'entry-image' ); ?>
	</div>

	<div class="medium-6 columns">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php gourmet_artist_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php

			  # Reduce la impresión del contenido de la publicación
				$abbreviated_content = substr( get_the_excerpt(), 0, 200 );
				echo $abbreviated_content. ' ... ';


				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gourmet-artist' ),
					'after'  => '</div>',
				) );
			?>
			<a href="<?php the_permalink(); ?>" class="button">Ver Receta</a>
		</div><!-- .entry-content -->

	</div><!-- .medium-6 columns -->

</article><!-- #post-<?php the_ID(); ?> -->
