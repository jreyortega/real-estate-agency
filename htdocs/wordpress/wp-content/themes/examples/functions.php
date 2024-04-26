<?php
    function vistapizza_menus()
    {
        register_nav_menus(array(
        // id => __('Name of your menu', 'text domain of your theme')
        'header-menu' => __('Header Menu','vistapizza'),
        'footer-menu' => __('Footer Menu','vistapizza')
    ));
    }
        // Hook: it indicates that this function must be activated when WordPress is initialized
    add_action('init', 'vistapizza_menus');

    // Scripts y Styles
    function pizzavista_scripts_styles(){
        //Descriptive name, file path, dependences, version
        wp_enqueue_style( 'googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap',array(), '1.0.0');
        wp_enqueue_style( 'googleFontPermanentMarker', 'https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap',array(), '1.0.0');
        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css',array(), '8.0.1');
        wp_enqueue_style('style',get_stylesheet_uri(),array('normalize','googleFont'),'1.0.0');
     }
     //Hook: it indicates that these styles (and also scripts) are enqueued to be used in thefront-end
    add_action('wp_enqueue_scripts','pizzavista_scripts_styles');

?>