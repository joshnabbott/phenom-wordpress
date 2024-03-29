<!DOCTYPE html>
<html <?php language_attributes( 'html' ) ?>>
<head>
  <title><?php wp_title(); ?></title>
  <!-- Basic Meta Data -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />

  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon" />
  <!-- WordPress -->
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>
  <body <?php body_class(); ?> id="<?php echo $post->post_name; ?>">
  <div id="background-stretch"><img src="" /></div>
  <ul id="bg-slides" class="hide">
    <li data-page="videos" data-background-image="<?php bloginfo('template_url') ?>/images/background-01.jpg">Some title.</li>
    <li data-page="about" data-background-image="<?php bloginfo('template_url') ?>/images/background-02.jpg">Some title.</li>
    <li data-page="team" data-background-image="<?php bloginfo('template_url') ?>/images/background-03.jpg">Some title.</li>
    <li data-page="contact" data-background-image="<?php bloginfo('template_url') ?>/images/background-04.jpg">Some title.</li>
    <li data-page="events" data-background-image="<?php bloginfo('template_url') ?>/images/background-05.jpg">Some title.</li>
  </ul>

  <div id="primary-container" class="container">
    <header class="row-fluid">
      <div id="social-icons"><img src="<?php bloginfo('template_url'); ?>/images/social-icons.png" alt="Find us on Facebook, Twitter, YouTube and Instagram" /></div>

      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>

      <form action="http://phenom.us5.list-manage2.com/subscribe/post" method="post" class="form-search pull-right">
        <p>Join the PHENOM family, stay up-to-date with the latest deals and announcements from PHENOM.</p>
        <input type="text" name="EMAIL" placeholder="youremail@example.com" class="input-medium search-query" />
        <input type="hidden" name="u" value="7ae6da4a5505c9c2c95abfd9d" />
        <input type="hidden" name="id" value="504dd42b12" />
        <input type="submit" value="Subscribe" class="btn" />
      </form>
      <div class="modal hide" id="signup-message">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h3></h3>
        </div>
        <div class="modal-body">
          <p>It works</p>
        </div>
        <div class="modal-footer">
          <a href="#" class="btn" data-dismiss="modal">Close</a>
        </div>
      </div>

        <?php
          wp_nav_menu(array(
            'theme_location'  => 'primary-nav',
            'container'       => 'nav',
            'container_class' => 'menu-{menu slug}-container',
            'menu_class'      => 'menu unstyled',
            'before'          => '/ ',
          ));
        ?>
    </header>

