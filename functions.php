<?php 

function load_scripts(){
	wp_enqueue_script( 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js', '5.1.0', true);
	wp_enqueue_style( 'bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css', array(), '5.1.0', 'all');
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
add_action('wp_enqueue_scripts', 'load_scripts');

register_nav_menus(
	array(
		'my_main_menu' => 'Main Menu'
	)
);