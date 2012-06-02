<?php get_header(); ?>

    <section id="content-top" class="row-fluid slides">
      <div class="span12 slides_container">
        <div><img src="<?php bloginfo('template_url'); ?>/images/slideshow-01.png" width="1210" height="475" /></div>
        <div><img src="<?php bloginfo('template_url'); ?>/images/slideshow-04.png" width="1210" height="475" /></div>
        <div><img src="<?php bloginfo('template_url'); ?>/images/slideshow-02.png" width="1210" height="475" /></div>
        <div><img src="<?php bloginfo('template_url'); ?>/images/slideshow-03.png" width="1210" height="475" /></div>
      </div>
      <a href="#" class="prev">Previous</a>
      <a href="#" class="next">Next</a>
    </section>

    <div id="content-primary" class="row-fluid">
      <section class="row-fluid hide">
        <div class="well span3">
          featured product or promo
        </div>

        <div class="well span3">
          featured product or promo
        </div>

        <div class="well span3">
          featured product or promo
        </div>

        <div class="well span3">
          featured product or promo
        </div>
      </section>

      <div class="row-fluid">
        <section class="span4">
          <h3>/ News</h3>
          <?php get_template_part('loop'); ?>
        </section>

        <div class="span8">
          <div class="row-fluid">
            <section class="span6 featured-tile">
              <a href="" class="coming-soon"><img src="<?php bloginfo('template_url'); ?>/images/shop-mens.png" height="300" width="374" /></a>
            </section>

            <section class="span6 featured-tile">
              <a href="" class="coming-soon"><img src="<?php bloginfo('template_url'); ?>/images/shop-womens.png" height="300" width="374" /></a>
            </section>
          </div>

          <section class="row-fluid">
            <h3>/ Events</h3>
            <ul class="table">
              <li>
                <h3>This is going to be the event of the year!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </li>
              <li>
                <h3>This is going to be the event of the year!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </li>
              <li>
                <h3>This is going to be the event of the year!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </li>
            </ul>
          </section>
        </div>
      </div>
    </div><!-- end content-primary -->

<?php get_footer(); ?>

