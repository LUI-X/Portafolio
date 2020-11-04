<?php

wp_register_style('bootstrap', get_stylesheet_directory_uri(). '/css/vendor/bootstrap/css/bootstrap.css');
wp_enqueue_style('bootstrap');

wp_register_style('boxicons', get_stylesheet_directory_uri(). '/css/vendor/boxicons/css/boxicons.min.css');
wp_enqueue_style('boxicons');


wp_register_style('style', get_stylesheet_directory_uri().'/style.css');
wp_enqueue_style('style');

//* 
//function my_scripts_method() {
//wp_register_script('bootstrap', get_template_directory_uri() . '/css/vendor/bootstrap/js/bootstrap.js', array('jquery'), '1.0.0', false);
//wp_enqueue_script('bootstrap');;

//}


function google_fonts() {
    wp_register_style('OpenSans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');
    wp_enqueue_style( 'OpenSans');
}

?>

<?php
function theme_setup()
{
register_nav_menus(array(
'primary' => __('Menu', "wpbootstraptheme"),
));
}

add_action('after_setup_theme', 'theme_setup');
?>