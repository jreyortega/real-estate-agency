<?php get_header(); ?>
<h1>Author: <?php echo get_queried_object()->data->display_name; ?></h1>
<main class="container nosidebar">
  <ul class="list-blog">
    <?php while(have_posts()){ the_post(); ?>
      <?php get_template_part('template-parts/listingblog'); ?>
    <?php } ?>
  </ul>
</main>
<?php get_footer(); ?>
