<?php
function vistapizza_menus()
{
    register_nav_menus(array(
        // id => __('Name of your menu', 'text domain of your theme')
        'header-menu' => __('Header Menu', 'vistapizza'),
        'footer-menu' => __('Footer Menu', 'vistapizza')
    ));
}
// Hook: it indicates that this function must be activated when WordPress is initialized
add_action('init', 'vistapizza_menus');

// Scripts and Styles
function vistapizza_scripts_styles()
{
    // Descriptive name, file path, dependencies, version
    wp_enqueue_style('googleFontOswald', 'https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap', array(), '1.0.0');
    wp_enqueue_style('googleFontPermanentMarker', 'https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap', array(), '1.0.0');
    wp_enqueue_style('googleFontMontserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), '1.0.0');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFontOswald', 'googleFontMontserrat', 'googleFontPermanentMarker'), '1.0.0');
}
// Hook: it indicates that these styles (and also scripts) are enqueued to be used in the front-end
add_action('wp_enqueue_scripts', 'vistapizza_scripts_styles');

// Add thumbnail support
function vistapizza_setup()
{
    add_theme_support('post-thumbnails');
    //Titles SEO
    add_theme_support('title-tag');
    //New sizes
    add_image_size('square', '350', '350', true);
    add_image_size('portrait', '350', '724', true);
    add_image_size('boxes', '375', '375', true);
    add_image_size('med', '700', '400', true);
    add_image_size('blog', '966', '644', true);
}
// Hook: it indicates that this function must be activated when WordPress is initialized
add_action('after_setup_theme', 'vistapizza_setup');
?>

<?php
function vistapizza_list_pizzas($n)
{
    $args = array(
        'post_type' => 'pizzas',
        'posts_per_page' => $n
    );
    $pizzas = new WP_Query($args);
?>
    <ul class="list-pizzas">
        <?php while ($pizzas->have_posts()) {
            $pizzas->the_post(); ?>
            <li class='card'>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('square'); ?>
                </a>
                <a href="<?php the_permalink(); ?>">
                    <div class="content">
                        <?php $name = get_field('pizza_name'); ?>
                        <h3><?php echo $name; ?></h3>
                        <?php $price = get_field('price'); ?>
                        <p><?php echo $price . "€"; ?> </p>
                    </div>
                </a>
            </li>
        <?php }
        wp_reset_postdata(); ?>
    </ul>
<?php } ?>

<?php
    function vistapizza_widgets(){
        register_sidebar( array(
            'name' => 'Sidebar 1',
            'id' => 'sidebar_1',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        register_sidebar( array(
            'name' => 'Sidebar 2',
            'id' => 'sidebar_2',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        register_sidebar( array(
            'name' => 'Sidebar 3',
            'id' => 'sidebar_3',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
    }
    add_action('widgets_init','vistapizza_widgets');
?>