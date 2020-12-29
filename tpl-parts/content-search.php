<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress

 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</div><!-- .entry-header -->

	<?php the_post_thumbnail(); ?>

	<?php the_excerpt(); ?>

</article><!-- #post-<?php the_ID(); ?> -->

