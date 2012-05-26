<?php get_header(); ?>
    <section id="content-top" class="row-fluid">
      <h3>/Blog</h3>
    </section>

    <div id="content-primary" class="row-fluid">
      <section class="span3">
        <?php get_sidebar(); ?>
      </section>

      <section class="well span9">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?>>
              <h2><?php the_title(); ?></h2>
              <small><?php printf( __( 'by %s on', 'phenom' ), get_the_author() ); ?> <?php the_date(); ?></small>

              <div class="row-fluid">
                <?php if ( has_post_thumbnail() ) : ?>
                  <div class="thumbnail pull-left"><?php the_post_thumbnail(); ?></div>
                <?php endif; ?>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
              </div>

              <div class="row-fluid">
                <div>
                  <?php the_tags( __( 'Tags: ', 'phenom' ), ', ', '' ); ?>
                </div>
                <div class="pull-right hide">
                  <?php printf( __( 'From: %s', 'phenom' ), get_the_category_list( ', ' ) ); ?>
                </div>
              </div>
            </article>
          <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
          <?php comments_template( '', true ); ?>
        <?php endif; ?>
      </section>
    </div><!-- end content-primary -->

<?php get_footer(); ?>

