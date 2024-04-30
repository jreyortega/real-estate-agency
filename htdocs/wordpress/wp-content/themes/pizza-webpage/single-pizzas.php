<?php
/*
Template Name: Info Pizza
*/
?>

<?php get_header();?>
<main class="container-withsidebar-infopizza">
  <div class="main-content-pizzainfo">
    <?php while(have_posts()){ the_post();?>
      
      <?php $pizza_name = get_field('pizza_name'); ?>
      <?php $short_history = get_field('short_history'); ?>
      <?php $price = get_field('price'); ?>
      <?php $ingredients = get_field('ingredients'); ?>

      <?php the_post_thumbnail('blog', array('class' => 'image-class')); ?>
      <div class="infopizza-details">
        <h1><?php the_title();?></h1>
        <div class="history-ingredients-container">
          <div class="history-info">
            <h2>History</h2>
            <p><?php echo $short_history ?></p>
          </div>
          <div class="ingredients-info">
            <h2>Ingredients</h2>
            <?php
              if($ingredients) 
              {
                echo '<ul>';
                foreach ($ingredients as $ingredient) 
                {
                  echo '<li>' . esc_html($ingredient) . '</li>';
                }
                echo '</ul>';
              }
            ?>
          </div>
        </div>
      </div>
      
    <?php } ?>
  </div>
</main>
<?php get_footer()?>