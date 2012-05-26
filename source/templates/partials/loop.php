<?php if ( have_posts() ) : ?>
  <ul class="table">
    <?php while ( have_posts() ) : the_post(); ?>
      <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h3 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
        <?php if ( has_post_thumbnail() ) { ?>
          <div class="thumbnail pull-left">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          </div>
        <?php } ?>
        <div><?php the_excerpt(); ?></div>
      </li>
    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  </ul>
<?php endif; ?>
