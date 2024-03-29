<?php get_header(); ?>
	<h1><?php printf( __( "Search results for '%s'", "phenom" ), get_search_query() ); ?></h1>
	<?php if ( have_posts() ) : ?>
		<?php get_template_part( 'loop' ); ?>
	<?php else : ?>
		<div>
			<p><?php printf( __( 'Sorry, your search for "%s" did not turn up any results. Please try again.', 'phenom' ), get_search_query());?></p>
			<?php get_search_form(); ?>
		</div>
	<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
