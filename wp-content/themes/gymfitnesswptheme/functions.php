<?php
//link queries files
require get_template_directory() . '/inc/queries.php';
//create the menus

function gymfitness_menus(){
    //wordprss functins
    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ) );
}

//Hook
add_action('init','gymfitness_menus' );


// add stylesheets and js 

function gymfitness_scripts(){
 
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(),'8.0.1'  );
    //google fonts
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,900|Staatliches&display=swap', array(), '1.0.0' );
    //Main Sheet
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','googlefont'), '1.0.0');
    wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10' );
    wp_enqueue_script('jquery'  );
    /**load js file */
    wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.10', true );
}
add_action('wp_enqueue_scripts','gymfitness_scripts' );

///enable feat pics
function gymfitness_setup(){
    //img
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('medium', 700, 400, true);
    add_image_size('blog', 966, 644, true);
 ///addd feat img
    add_theme_support('post-thumbnails');

  
    
}

add_action('after_setup_theme','gymfitness_setup' );///when the theme is activiated



function gymfitness_widgets() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'


    ) );
}
add_action('widgets_init','gymfitness_widgets' );
?>

