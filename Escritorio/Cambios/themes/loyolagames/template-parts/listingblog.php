<li class="card">
  <?php the_post_thumbnail( 'med' ); ?>
  <div class="content">
    <a href="<?php the_permalink(); ?>">
      <h3><?php the_title(); ?></h3>
    </a>
    <p class="meta">
      <a href="<?php echo get_author_posts_url( get_the_author_meta('ID'));?>">
        <?php echo get_the_author_meta('display_name'); ?>
      </a> -
      <?php the_time( $d = 'd/m/Y' ); ?>
    </p>
    <?php the_category(); ?>
  </div>
</li>
