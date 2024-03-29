<?php get_header(); ?>
	<?php the_post(); ?>
	<h1 class="page-title"><?php the_title(); ?></h1>
	<div>
		<a href="<?php echo wp_get_attachment_url( $post->ID ); ?>" title="<?php the_title_attribute(); ?>" rel="attachment">
			<?php
				if ( wp_attachment_is_image ( $post->ID ) ) {
					$img_src = wp_get_attachment_image_src( $post->ID, 'large' );
					$alt_text = get_post_meta( $post->ID, '_wp_attachment_image_alt', true );
			?>
					<img src="<?php echo esc_url( $img_src[0] ); ?>" alt="<?php esc_attr_e( $alt_text ); ?>">
			<?php
				} else {
					echo basename( $post->guid );
				}
			?>
		</a>
		<?php if ( $post->post_content ) : ?>
			<div class="description">
				<?php the_content(); ?>
			</div>
		<?php endif; ?>
		<div class="pagination clear">
			<div class="alignleft"><?php previous_image_link( 0, __( '&larr; Previous image', 'phenom' ) ); ?></div>
			<div class="alignright"><?php next_image_link( 0, __( 'Next image &rarr;', 'phenom' ) ); ?></div>
		</div>
		<div>
			<a href="<?php echo get_permalink( $post->post_parent ); ?>"><?php _e( 'Return to gallery', 'phenom' ); ?></a>
		</div>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>