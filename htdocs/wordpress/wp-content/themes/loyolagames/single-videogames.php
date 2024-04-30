<?php get_header();?>
<main class="container withsidebar">
  <div class="main-content">
    <?php while(have_posts()){ the_post();?>
      <h1><?php the_title();?></h1>
      <?php the_post_thumbnail('blog', array('class' => 'image-class')); ?>
      <?php $company = get_field('company'); ?>
      <?php $date = get_field('release'); ?>
      <?php $price = get_field('price'); ?>
      <p class="game-additional-information"><?php echo "<span> " . $company . "</span> : " . $date . " - " . $price; ?> </p>
      <p><?php the_content();?></p>
    <?php } ?>
  </div>
  <?php get_sidebar('games'); ?>
</main>
<?php get_footer()?>
