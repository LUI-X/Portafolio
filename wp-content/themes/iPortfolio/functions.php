<?php
wp_register_style('bootstrap', get_stylesheet_directory_uri(). '/css/vendor/bootstrap/css/bootstrap.css');
wp_enqueue_style('bootstrap');

wp_register_style('style', get_stylesheet_directory_uri().'/style.css');
wp_enqueue_style('style');

function my_scripts_method() {
wp_register_script('bootstrap', get_template_directory_uri() . '/css/vendor/bootstrap/js/bootstrap.js', array('jquery'), '1.0.0', false);
wp_enqueue_script('bootstrap');;
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
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