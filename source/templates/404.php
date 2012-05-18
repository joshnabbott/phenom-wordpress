<?php get_header(); ?>
	<h1 class="page-title">
		<?php _e( '404: Page Not Found', 'phenom' ); ?>
	</h1>
	<div>
		<p><?php _e( 'We are terribly sorry, but the URL you typed no longer exists. It might have been moved or deleted. Try searching the site:', 'phenom' ); ?></p>
		<?php get_search_form(); ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>