<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <?php wp_head(); ?>
  <title></title>
</head>

<body>
  <footer class="site-footer">
    <div class="footer-logo">
      <p>Vista</p>
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
      <p>Pizza</p>
    </div>
    <div class="info-footer">
      <div class="app-links">
        <p>Use our app</p>
        <?php $path = get_template_directory_uri(); ?>
        <div class="app-link-img">
          <a class="store-link" href="#">
            <img src="<?php echo $path; ?>/img/playstore.png" alt="Googleplay link" />
          </a>
          <a class="store-link" href="#">
            <img src="<?php echo $path; ?>/img/appstore.png" alt="Appstore link" />
          </a>
        </div>
      </div>
      <div class="footer-menu-container">
        <?php
        $args = array(
          'theme_location' => 'footer-menu',
          'container' => 'nav',
          'container_class' => 'footer-menu'
        );
        wp_nav_menu($args);
        ?>
      </div>
      <div class="footer-social-media">
        <p>Follow us</p>
        <div class="footer-social-media-img">
          <a href="#">
            <img src="<?php echo $path; ?>/img/tiktok-logo.svg" alt="" />
          </a>
          <a href="#">
            <img src="<?php echo $path; ?>/img/twitter-logo.svg" alt="" />
          </a>
          <a href="#">
            <img src="<?php echo $path; ?>/img/instagram-logo.svg" alt="" />
          </a>
          <a href="#">
            <img src="<?php echo $path; ?>/img/facebook-logo.svg" alt="" />
          </a>
        </div>
      </div>
    </div>
    <p class="copyright-container">
      <?php echo "All rights reserved <span>" . get_bloginfo('name') . "</span>" . " " . date('Y') . " &copy"; ?>
    </p>
  </footer>
</body>