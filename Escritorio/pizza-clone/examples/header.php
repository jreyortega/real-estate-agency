<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
    <title></title>
  </head>
  <body>
    <header class="site-header">
      <div class="header-info">
        <div class="header-logo">
          <a href="<?php echo site_url( '/'); ?>">
          <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo IMG">
        </div>
        <div class=header-logo-name>
          <p>VistaPizza</p>
        </div>
        <div class="header-shopping-cart">
          <a href="<?php echo site_url( '/'); ?>">
            <p>Shopping cart</p>
            <img src="<?php echo get_template_directory_uri();?>/img/shopping-cart.png" alt="logo IMG">
          </a>
        </div>
      </div>
      <div class="menu-container">
        <?php
          $args = array(
            // Indicate the menu you want to include
            'theme-location' => 'header-menu',
            // Indicate the type of container for your menu
            'container' => 'nav',
            // Indicate a personalized class for your container
            'container_class' => 'header-menu'
          );
          wp_nav_menu($args);
        ?>
      <div>
    </header>