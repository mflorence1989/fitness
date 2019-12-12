<?php
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
}
add_action('wp_enqueue_scripts','gymfitness_scripts' );

///enable feat pics
function gymfitness_setup(){
 ///addd feat img
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','gymfitness_setup' );///when the theme is activiated

?>

