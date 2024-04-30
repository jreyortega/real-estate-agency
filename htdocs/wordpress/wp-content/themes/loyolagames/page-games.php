<?php get_header();?>

<main class="container">
  <div class="main-content games">
    <?php while(have_posts()){ the_post();?>
      <h1><?php the_title();?></h1>
      <p><?php the_content(); ?></p>
    <?php } ?>
    <?php loyolagames_list_videogames(10); ?>
  </div>
</main>

<?php get_footer()?>
