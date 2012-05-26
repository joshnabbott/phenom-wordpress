<?php get_header(); ?>

    <section id="content-top" class="row-fluid">
      <h3>/ <?php single_post_title(); ?> </h3>
    </section>

    <div id="content-primary" class="row-fluid">
      <section class="well span12">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div <?php post_class(); ?>>
              <div class="row-fluid">
                <?php if ( has_post_thumbnail() ) : ?>
                  <div class="thumbnail pull-left"><?php the_post_thumbnail(); ?></div>
                <?php endif; ?>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
              </div>
            </div>
          <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
          <?php comments_template( '', true ); ?>
        <?php endif; ?>
      </section>
    </div><!-- end content-primary -->

<?php get_footer(); ?>

