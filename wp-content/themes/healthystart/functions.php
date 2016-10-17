<?php
//Register Nav Walker
require_once('wp_bootstrap_navwalker.php');
function wpb_theme_setup(){
	register_nav_menus(array(
		'primary' => __('Primary Menu')
		));
	
}

add_action('after_setup_theme', 'wpb_theme_setup');
function startwordpress_scripts() {
	
	wp_enqueue_style( 'index', get_template_directory_uri() . '/css/index.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );
?>