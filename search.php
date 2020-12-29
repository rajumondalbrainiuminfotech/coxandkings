<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress

 */

get_header(); ?>


<div class="container">
<div class="row">

		<?php if ( have_posts() ) : ?>

			<div class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'coxandkings' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			</div><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'tpl-parts/content', 'search' );

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination(
				array(
					'prev_text'          => __( 'Previous page', 'coxandkings' ),
					'next_text'          => __( 'Next page', 'coxandkings' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'coxandkings' ) . ' </span>',
				)
			);

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'tpl-parts/content', 'none' );

		endif;
		?>

</div>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
