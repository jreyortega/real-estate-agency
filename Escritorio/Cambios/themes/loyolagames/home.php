<?php get_header(); ?>
<main class="container nosidebar">
  <ul class="list-blog">
    <?php while(have_posts()){ the_post(); ?>
      <?php get_template_part('template-parts/listingblog'); ?>
    <?php } ?>
  </ul>
</main>
<?php get_footer(); ?>
