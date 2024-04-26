<footer class="site-footer">
  <div class="info-footer">
    <div class="app-links">
      <p>USE OUR APP</p>
      <?php $path = get_template_directory_uri(); ?>
      <img src="<?php echo $path; ?>/img/playstore.png" alt="Googleplay link"/>
      <img src="<?php echo $path; ?>/img/appstore.png" alt="Googleplay link"/>
    </div>
    <div class="footer-menu-container">
      <?php
            $args = array(
              // Indicate the menu you want to include
              'theme-location' => 'footer-menu',
              // Indicate the type of container for your menu
              'container' => 'nav',
              // Indicate a personalized class for your container
              'container_class' => 'footer-menu'
            );
            wp_nav_menu($args);
      ?>
    </div>
  </div>
  <p class="copyright-container">
    <?php echo "All rights reserved <span>" . get_bloginfo('name') . "</span>" . date('Y'); ?>
  </p>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>